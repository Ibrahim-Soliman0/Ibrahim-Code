pos(X) :- X>0.
neg(X) :- X<0.
zero(X) :- X=0.

max(X,Y,X) :- X>=Y.
max(X,Y,Y) :- X=<Y.
sum(1,1).
sum(N,R) :- N>0 , M is N-1,sum(M,R1) , R is R1+N.
factorial(0,1).
factorial(N,R) :- N>0 , M is N-1 , factorial(M,R1), R is N * R1.
printN(0).
printN(N):- N>0, M is N-1 , printN(M), writeln(N).
fun(X) :- N is X mod 2 , N is 1 , writeln("odd").
fun(X) :- N is X mod 2 , N is 0 , writeln("even").