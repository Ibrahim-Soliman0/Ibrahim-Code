public class Sheet4_Q6 {
    public static void main(String[] args) {
        int[] arr = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
        System.out.println(search(arr, arr.length, 7));
    }

    public static int search(int[] a, int index, int key) {
        if (index <= 0) {
            return 0;
        } else if (a[index - 1] == key) {
            return key;
        }
        return search(a, index - 1, key);
    }
}
