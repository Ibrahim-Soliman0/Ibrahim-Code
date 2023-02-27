public class Sheet3_Q4 {
    public static void main(String[] args) {
        int[] arr = { 1, 2, 3, 9, 8 };
        if (isSorted(arr)) {
            System.out.println("The array is sorted");
        } else {
            System.out.println("The array is not sorted");
        }
    }

    public static boolean isSorted(int[] list) {
        for (int i = 0; i < list.length - 1; i++) {
            if (list[i] > list[i + 1]) {
                return false;
            }
        }
        return true;
    }
}
