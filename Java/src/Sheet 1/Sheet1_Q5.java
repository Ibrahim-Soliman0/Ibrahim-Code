public class Sheet1_Q5 {
    public static void main(String[] args) {
        int[] arr = { 1, 2, 3, 4, 5 };
        int[] arr1 = { 1, 2, 7, 4, 5 };
        boolean x = true;
        if (arr.length == arr1.length) {
            for (int i = 0; i < arr.length; i++) {
                if (arr[i] != arr1[i]) {
                    x = false;
                }
            }
        }
        if (x) {
            System.out.println("The two arrays are equal");
        } else {
            System.out.println("The two arrays are not equal");
        }
    }
}
