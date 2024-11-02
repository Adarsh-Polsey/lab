
import java.util.Scanner;

public class transpose {

    public static void main(String[] args) {
        int matrix[][]; 
        int transpose[][];
        int sum = 0, row, col;

        Scanner sc = new Scanner(System.in);
        System.out.println("Enter the number of rows");
        row = sc.nextInt();
        System.out.println("Enter the number of cols");
        col = sc.nextInt();

        if (row != col) {
            System.out.println("Square matrix only!! ");
        } else {
            
            matrix = new int[row][col];
            transpose = new int[col][row];
            System.out.print("Enter the Elements of Matrix : ");
            for (int i = 0; i < row; i++) {
                for (int j = 0; j < col; j++) {
                    matrix[i][j] = sc.nextInt();
                }
            }

            System.out.print("\nOriginal  Matrix : \n");
            for (int i = 0; i < row; i++) {
                for (int j = 0; j < col; j++) {
                    System.out.print(matrix[i][j] +" ");
                }
                System.out.print("\n");
            }

            for (int i = 0; i < row; i++) {
                for (int j = 0; j < col; j++) {
                    transpose[j][i] = matrix[i][j];
                    if (i == j) {
                        sum = sum + matrix[i][j];
                    }

                }
            }

        //   System.out.print("\n Trace of the matrix:" + sum);

            System.out.print("\n Transpose  Matrix : \n");
            for (int i = 0; i < col; i++) {
                for (int j = 0; j < row; j++) {
                    System.out.print(transpose[i][j]+" ");

                }
                System.out.print("\n");

            }
            
            System.out.print("\n Trace of the matrix:" + sum+"\t");

        }

    }

}
