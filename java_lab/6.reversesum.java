
import java.util.Scanner;

public class reversesum {
    
    int sum = 0, rev = 0, rem;
    
    void sum(int num) {
        do {
            rem = num % 10;
            sum = sum + rem;
            num = num / 10;
        } while (num > 0);
        
        System.out.println("The sum of the digits is" + " " + sum);
    }
    
    void reverse(int num) {
        do {
            rem = num % 10;
            rev = rev * 10 + rem;
            num = num / 10;
        } while (num > 0);
        
        System.out.println("The reverse of the number is" + " " + rev);
    }
    
}

class sumrevfinal {
    
    public static void main(String[] args) {
        int n;
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the number");
        n = sc.nextInt();
        reversesum fn = new reversesum();
        fn.sum(n);
        fn.reverse(n);
        
    }
    
}
