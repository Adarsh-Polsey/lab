package adarsh;
import java.util.Scanner;

class VolumeCalculator {

    public void readdata() {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter the radius of the sphere: ");
        double sphereRadius = scanner.nextDouble();

        System.out.print("Enter the radius of the cylinder: ");
        double cylinderRadius = scanner.nextDouble();
        System.out.print("Enter the height of the cylinder: ");
        double cylinderHeight = scanner.nextDouble();

        displayVolume(sphereRadius, cylinderRadius, cylinderHeight);
    }

    public void displayVolume(double sphereRadius, double cylinderRadius, double cylinderHeight) {

        double sphereVolume = (4.0 / 3.0) * Math.PI * Math.pow(sphereRadius, 3);
        System.out.println("Volume of the sphere: " + sphereVolume);

        double cylinderVolume = Math.PI * Math.pow(cylinderRadius, 2) * cylinderHeight;
        System.out.println("Volume of the cylinder: " + cylinderVolume);
    }

    public static void main(String[] args) {
        VolumeCalculator calculator = new VolumeCalculator();
        calculator.readdata();
    }
}
