public class Lab1 {
    public static void main(String[] args) {
        boolean arr[][] = new boolean[5][5];
        arr[0][1] = true;
        arr[0][3] = true;
        arr[0][4] = true;
        arr[1][0] = true;
        arr[1][2] = true;
        arr[1][4] = true;
        arr[2][1] = true;
        arr[3][0] = true;
        arr[3][4] = true;
        arr[4][0] = true;
        arr[4][1] = true;
        arr[4][3] = true;
        System.out.println(count(arr));
    }
    public static int count(boolean a[][]) {
        int counter = 0;
        for (int i = 0; i < a.length; i++) {
            for (int j = 0; j < a[0].length; j++) {
                if(a[i][j] == true){
                    counter++;
                }   
            }
        }
        return counter;
    }
    public static boolean checkFriends(boolean a[][]) {
        if () {

            return false;   
        }
        else if () {

            return true;
        }
    }
}