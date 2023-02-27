public class Sheet4_Q4 {
    public static void main(String[] args) {
        System.out.println(sum(1, 5));
    }

    public static int sum(int n1, int n2) {
        if (n1 == n2) {
            return n1;
        }
        return n1 + sum(n1 + 1, n2);
    }
}
