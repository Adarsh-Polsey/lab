package adarsh;
import java.util.Scanner;
class amstrong {
    public static void main(String [] args){
        int num1,num2;
        Scanner sc=new Scanner (System.in);
        System.out.println("enter the  first number");
        num1=sc.nextInt();
        System.out.println("enter the second number");
        num2=sc.nextInt();
        
        for(int i=num1;i<=num2;i++){
            int temp=i,sum=0;
            while(temp!=0){
                int rem=temp%10;
                sum=sum+rem*rem*rem;
                temp=temp/10; 
            }
        
        if(sum==i){
           System.out.println(i);  
        }
            
      }
        
    }
}
