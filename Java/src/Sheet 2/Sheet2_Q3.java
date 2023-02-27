public class Sheet2_Q3 {
    public static void main(String[] args) {
        double[][] a = { { 1, 2, 3 }, { 4, 5, 6 }, { 7, 8, 9 } };
        double sum = 0;
        for (int i = 0; i < a.length; i++) {
            sum += a[i][i];
        }
        System.out.println(sum);
    }
}
