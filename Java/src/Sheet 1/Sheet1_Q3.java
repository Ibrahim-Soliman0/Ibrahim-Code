import java.util.*;

public class Sheet1_Q3 {
    public static void main(String[] args) {
        int[] arr = { 1, 2, 6, 4, 0 };
        Scanner sc = new Scanner(System.in);
        int key = sc.nextInt();
        boolean x = false;
        for (int i = 0; i < arr.length; i++) {
            if (key == arr[i]) {
                x = true;
            }
        }
        if (x) {
            System.out.println("Number Found = " + key);
        } else {
            System.out.println("Number Not Found");
        }
    }
}