likes(mary,food).
likes(mary,wine).
likes(john,wine).
likes(john,mary).
likes(bob,wine).
likes(ahmed,ahmed).
likes(john,X) :- likes(mary,X).
likes(john,X) :- likes(X,wine).
likes(john,X) :- likes(X,X).