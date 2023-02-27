public class Sheet4_Q3 {
    public static void main(String[] args) {
        System.out.println(pow10(2));
    }

    public static int pow10(int y) {
        if (y == 0) {
            return 1;
        }
        return 10 * pow10(y - 1);
    }
}
