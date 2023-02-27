import java.util.*;
public class Questions {
    public static void main(String[] args){
Scanner Input = new Scanner(System.in);
        System.out.println("Enter an integer please");
        int sum = 0;
        int product = 1;
        int num1 = Input.nextInt();
        int num2 = Input.nextInt();
        for(int i = num1; i<=num2; i++) {
            if(i%2==0) {sum = sum +1;}   
            else {product = product * i;}
;}
   
    System.out.println(sum);    
    System.out.println(product);   
        
    }
}