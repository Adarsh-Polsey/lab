package adarsh;
import java.util.Scanner;
import java.lang.Math;

class triangle {

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the three sides of a triangle");
        int a = sc.nextInt();
        int b = sc.nextInt();
        int c = sc.nextInt();

        if (a == b && b == c) {
            System.out.println("it is an Equilateral triangle");
        } else if (a == b || b == c || a == c) {

            System.out.println("it is an Isoceles triangle");

        } else {
            System.out.println("it is a Scalene triangle");

        }

        float s = (a + b + c) / 2;
        double area = Math.sqrt(s * (s - a) * (s - b) * (s - c));
        System.out.println("Area of the Triangle =" + area);

    }
}
