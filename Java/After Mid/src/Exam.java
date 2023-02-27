import java.util.*;
public class Exam {
    public static void main(String[] args){
    Scanner console = new Scanner (System.in); 
    int n = console.nextInt();
    int sum = 0;
    for (int i = 1; i<=n; i++) { 
      if (i%3==0) {sum++;}   }  
     System.out.println(sum);
    }
    
}
