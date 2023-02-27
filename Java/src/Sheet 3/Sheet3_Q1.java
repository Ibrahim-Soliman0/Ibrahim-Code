public class Sheet3_Q1 {
    public static void main(String[] args) {
        System.out.println(large(3, 3, 9));
    }

    public static int large(int n1, int n2, int n3) {
        if (n2 <= n1 && n3 <= n1) {
            return n1;
        } else if (n1 <= n2 && n3 <= n2) {
            return n2;
        } else {
            return n3;
        }
    }
}
