import java.lang.module.ResolutionException;

public class Sheet4_Q1 {
    public static void main(String[] args) {
        System.out.println(mult(2, 3));
    }

    public static int mult(int n1, int n2) {
        if ((n1 == 0) || (n2 == 0)) {
            return 0;
        }
        return n1 + (mult(n1, n2 - 1));
    }
}
