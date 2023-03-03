//! Name: ibrahim mohamed ahmed mohamed soilman ID:20221445563
import java.util.*;

public class LinearEquation {
    private int a, b, c, d, e, f;

    public LinearEquation() {
        a = 0;
        b = 0;
        c = 0;
        d = 0;
        e = 0;
        f = 0;
    }

    public LinearEquation(int a, int b, int c, int d, int e, int f) {
        this.a = a;
        this.b = b;
        this.c = c;
        this.d = d;
        this.e = e;
        this.f = f;
    }

    public int geta() {
        return a;
    }

    public int getb() {
        return b;
    }

    public int getc() {
        return c;
    }

    public int getd() {
        return d;
    }

    public int gete() {
        return e;
    }

    public int getf() {
        return f;
    }

    public void seta(int a) {
        this.a = a;
    }

    public void setb(int b) {
        this.b = b;
    }

    public void setc(int c) {
        this.c = c;
    }

    public void setd(int d) {
        this.d = d;
    }

    public void sete(int e) {
        this.e = e;
    }

    public void setf(int f) {
        this.f = f;
    }

    public boolean isSolvable() {
        if ((geta() * getd()) - (getb() * getc()) == 0) {
            return false;
        } else {
            return true;
        }
    }

    public void getX() {
        if (isSolvable()) {
            double x = ((gete() * getd()) - (getb() * getf())) / ((geta() * getd()) - (getb() * getc()));
            System.out.println(x);
        } else {
            System.out.println("The Equation has no Solution for x");
        }
    }

    public void gety() {
        if (isSolvable()) {
            double y = ((geta() * getf()) - (gete() * getc())) / ((geta() * getd()) - (getb() * getc()));
            System.out.println(y);
        } else {
            System.out.println("The Equation has no Solution for y");
        }
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        LinearEquation I = new LinearEquation();
        System.out.println("Please enter the First Value");
        int a = sc.nextInt();
        System.out.println("Please enter the second Value");
        int b = sc.nextInt();
        System.out.println("Please enter the third Value");
        int c = sc.nextInt();
        System.out.println("Please enter the Fourth Value");
        int d = sc.nextInt();
        System.out.println("Please enter the Fifth Value");
        int e = sc.nextInt();
        System.out.println("Please enter the sixth Value");
        int f = sc.nextInt();
        I.seta(a);
        I.setb(b);
        I.setc(c);
        I.setd(d);
        I.sete(e);
        I.setf(f);
        I.getX();
        I.gety();
    }
}