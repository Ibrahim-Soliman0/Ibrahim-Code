public class Sheet4_Q5 {
    public static void main(String[] args) {
        int[] arr = { 1, 2, 3, 4, 5 };
        System.out.println(sumarr(arr, arr.length));
    }

    public static int sumarr(int[] a, int index) {
        if (index <= 0) {
            return 0;
        }
        return a[index - 1] + sumarr(a, index - 1);
    }
}
