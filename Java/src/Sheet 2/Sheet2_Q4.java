public class Sheet2_Q4 {
    public static void main(String[] args) {
        int[][] a = { { 1, 2 }, { 3, 4 }, { 5, 6 } };
        int sum = 0;
        for (int i = 0; i < a[0].length; i++) {
            for (int j = 0; j < a.length; j++) {
                sum += a[j][i];
            }
            System.out.println("Sum of the " + (i + 1) + " column = " + sum);
            sum = 0;
        }
    }
}
