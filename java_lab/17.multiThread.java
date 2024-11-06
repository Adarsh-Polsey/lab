package adarsh;
class multiThread extends Thread {

    public void run() {
        for (int i = 0; i <= 3; i++) {
            System.out.println("new thread");

        }
    }

}
 class A{
     public static void main(String []args){
         multiThread t =new multiThread();
         t.start();
         for (int i = 0; i <= 3; i++) {
            System.out.println("main  thread");

        }
         
     }
 }