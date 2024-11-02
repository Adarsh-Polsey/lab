
public class staticdem {
  static int count=0;
   staticdem(){
       count++;
       System.out.println(count);
   }
   public static void main(String[] args){
       staticdem c1= new staticdem();
       staticdem c2= new staticdem();
       staticdem c3= new staticdem();
   }
}
