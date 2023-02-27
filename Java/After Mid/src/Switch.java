import java.util.*;
public class Switch {
   public static void main (String[] args){  
     Scanner Brightness = new Scanner(System.in);
     System.out.println("Please enter the bulb brightness");
     int Value = Brightness.nextInt();
     switch (Value) {
         case 25:   
           System.out.println("lifetime is 2500 hrs");
           break;
         case 40:
         case 60:
             System.out.println("Liftime is 1000 hrs ");
         break;
         case 75:
         case 100:    
     System.out.println("Lifetime is 750");
     break;
     default:
     System.out.println("Wrong Input");
       break;}
     
     }
}