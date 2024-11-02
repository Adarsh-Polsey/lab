
class Employee {

    private int empId;
    private String name;
    private String designation;
    private String department;

    public Employee(int empId, String name, String designation, String department) {
        this.empId = empId;
        this.name = name;
        this.designation = designation;
        this.department = department;
    }

}

class Salary extends Employee {

    private double basic;
    private double hra = 1250;
    private double da;
    private double allowance;

    public Salary(int empId, String name, String designation, String department, double basic) {
        super(empId, name, designation, department);
        this.basic = basic;
        this.da = 1.1 * basic;  
        this.allowance = 0.35 * basic;  
    }

    public double computeNetSalary() {
        double pf = 0.12 * basic;  
        return basic + hra + da + allowance - pf;
    }

    public void displaySalary() {


        System.out.printf("Net Salary: %.2f%n", computeNetSalary());
    }

    public static void main(String[] args) {
        java.util.Scanner scanner = new java.util.Scanner(System.in);

        System.out.print("Enter Employee ID: ");
        int empId = scanner.nextInt();
        scanner.nextLine();

        System.out.print("Enter Name: ");
        String name = scanner.nextLine();

        System.out.print("Enter Designation: ");
        String designation = scanner.nextLine();

        System.out.print("Enter Department: ");
        String department = scanner.nextLine();

        System.out.print("Enter Basic Salary: ");
        double basic = scanner.nextDouble();

        Salary employee = new Salary(empId, name, designation, department, basic);
        employee.displaySalary();

        scanner.close();
    }

}
