public class Sheet3_Q2 {
    public static void main(String[] args) {
        displaySortedNumbers(2, 1, 3);
    }

    public static void displaySortedNumbers(double num1, double num2, double num3) {
        double temp = 0;
        if (num2 < num1 && num2 < num3) {
            temp = num1;
            num1 = num2;
            num2 = temp;
        } else if (num3 < num1 && num3 < num2) {
            temp = num1;
            num1 = num3;
            num3 = temp;
        }
        if (num3 < num2) {
            temp = num2;
            num2 = num3;
            num3 = temp;
        }
        System.out.println(num1 + " " + num2 + " " + num3);
    }
}
