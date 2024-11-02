
import java.util.Scanner;


class EvenNumbers implements Runnable {
    private final int limit;

    public EvenNumbers(int limit) {
        this.limit = limit;
    }

    @Override
    public void run() {
        for (int i = 0; i <= limit; i++) {
            if (i % 2 == 0) {
                System.out.println("Even: " + i);
            }
        }
    }
}

class OddNumbers implements Runnable 
{
    private final int limit;

    public OddNumbers(int limit) {
        this.limit = limit;
    }

    @Override
    public void run() {
        for (int i = 0; i <= limit; i++) {
            if (i % 2 != 0) {
                System.out.println("Odd: " + i);
            }
        }
    }
     public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        
        System.out.print("Enter the limit: ");
        int limit = scanner.nextInt();

        Thread evenThread = new Thread(new EvenNumbers(limit));
        Thread oddThread = new Thread(new OddNumbers(limit));

        evenThread.start();
        oddThread.start();

        try {
            evenThread.join();
            oddThread.join();
        } catch (InterruptedException e) {
            System.out.println("Thread interrupted: " + e.getMessage());
        }

        System.out.println("Finished displaying numbers.");
        scanner.close();
    }
}
