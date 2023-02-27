woman(mira).
woman(farah).
woman(salma).
man(ahmed).
knows(mira,farah).
knows(mira,salma).
person(X):- man(X);woman(X).
loves(X,Y):-knows(X,Y).