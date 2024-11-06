package adarsh;
import java.util.Scanner;

class Student {

    String name;

    public Student(String name) {
        this.name = name;
    }

    public String getName() {
        return name;
    }
}

class ResultStudent extends Student {

    private int math, science, english;

    public ResultStudent(String name, int math, int science, int english) {
        super(name);
        this.math = math;
        this.science = science;
        this.english = english;
    }

    public boolean checkPassed() {

        return math >= 50 && science >= 50 && english >= 50;
    }

    public int total() {
        return math + science + english;
    }

    public void displayResult() {

        int totalMarks = total();
        String result = checkPassed() ? "Passed" : "Failed";
        System.out.printf("Student: %s \nMath: %d \nScience: %d \nEnglish: %d \nTotal Marks: %d \nResult: %s\n",
                getName(), math, science, english, totalMarks, result);
    }

    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        System.out.print("Enter student name: ");
        String name = scanner.nextLine();

        System.out.print("Enter marks for Math: ");
        int math = scanner.nextInt();

        System.out.print("Enter marks for Science: ");
        int science = scanner.nextInt();

        System.out.print("Enter marks for English: ");
        int english = scanner.nextInt();

        ResultStudent student = new ResultStudent(name, math, science, english);

        student.displayResult();

    }
}


