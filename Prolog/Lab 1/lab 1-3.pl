male(sami).
male(othman).
male(rabee).
male(abbas).
male(mohammed).
female(rola).
female(khadija).
female(salma).
parent(sami,khadija).
parent(rola,khadija).
parent(sami,rabee).
parent(rola,rabee).
parent(othman,mohammed).
parent(khadija,mohammed).
parent(rabee,abbas).
parent(salma,abbas).
grandmother(X,Z) :- female(X) , (parent(X,Y),parent(Y,Z)).
sibling(X,Y) :- male(Z) , (parent(Z,X) , parent(Z,Y)).
sibling(X,Y) :- female(Z) , (parent(Z,X) , parent(Z,Y)).
father(X,Y) :- male(X) , parent(X,Y).
mother(X,Y) :- female(X) , parent(X,Y).
daughter(X,Y) :- female(X) , parent(Y,X).