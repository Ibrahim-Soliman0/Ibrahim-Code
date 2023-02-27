public class Sheet4_Q2 {
    public static void main(String[] args) {
        System.out.println(pow(2, 5));
    }

    public static int pow(int x, int y) {
        if (y == 0) {
            return 1;
        }
        return x * pow(x, y - 1);
    }
}
