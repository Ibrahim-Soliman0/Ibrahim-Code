import java.util.*;

public class Scanner0 {
   public static void main(String[] args){
 
Scanner Age = new Scanner (System.in);
System.out.println("How old are you?");
int age = Age.nextInt();
int years = 65 - age ;
System.out.println("Years till retirmet " + years );

Scanner Area = new Scanner (System.in);
System.out.println("Please Input the Length and the Width of the Rectangle to Calculate the Area");
int Length = Area.nextInt();
int Width = Area.nextInt();        
int Product = Length*Width ;
System.out.println("Area of the Rectangle Equal " + Product );   
    
   





















     }
}
