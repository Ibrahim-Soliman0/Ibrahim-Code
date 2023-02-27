public class Sheet2_Q1 {
    public static void main(String[] args) {
        int[][] a = { { 12, 34 }, { 50, 18 }, { 30, 26 } };
        int[][] b = { { 12, 34 }, { 50, 18 }, { 30, 26 } };
        int[][] sum = new int[3][3];

        for (int i = 0; i < a.length; i++) {
            for (int j = 0; j < a[0].length; j++) {
                sum[i][j] = a[i][j] + b[i][j];
            }
        }
        for (int i = 0; i < a.length; i++) {
            for (int j = 0; j < a[0].length; j++) {
                System.out.print(sum[i][j] + " ");
            }
            System.out.println();
        }
    }
}
