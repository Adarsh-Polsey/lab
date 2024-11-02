
import java.util.Scanner;

public class TimeIntervalSum {

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Enter the first time interval:");
        System.out.print("Hours: ");
        int hours1 = scanner.nextInt();
        System.out.print("Minutes: ");
        int minutes1 = scanner.nextInt();
        System.out.print("Seconds: ");
        int seconds1 = scanner.nextInt();

        System.out.println("Enter the second time interval:");
        System.out.print("Hours: ");
        int hours2 = scanner.nextInt();
        System.out.print("Minutes: ");
        int minutes2 = scanner.nextInt();
        System.out.print("Seconds: ");
        int seconds2 = scanner.nextInt();

        TimeInterval sum = addTimeIntervals(hours1, minutes1, seconds1, hours2, minutes2, seconds2);

        System.out.println("Sum of time intervals: " + sum.hours + " hours, " + sum.minutes + " minutes, " + sum.seconds + " seconds");

       
           
    }

    public static TimeInterval addTimeIntervals(int h1, int m1, int s1, int h2, int m2, int s2) {
        int totalSeconds1 = h1 * 3600 + m1 * 60 + s1;
        int totalSeconds2 = h2 * 3600 + m2 * 60 + s2;
        int totalSeconds = totalSeconds1 + totalSeconds2;

        int hours = totalSeconds / 3600;
        totalSeconds %= 3600;
        int minutes = totalSeconds / 60;
        int seconds = totalSeconds % 60;

        return new TimeInterval(hours, minutes, seconds);
    }

    static class TimeInterval {

        int hours;
        int minutes;
        int seconds;

        TimeInterval(int hours, int minutes, int seconds) {
            this.hours = hours;
            this.minutes = minutes;
            this.seconds = seconds;
        }
    }
}
