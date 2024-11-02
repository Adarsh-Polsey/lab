
public class threadEx {

    public static void main(String[] args) {

        Thread t = Thread.currentThread();
        System.out.println("currentThread:" + t);
        t.setName("new Thread");
        System.out.println("currentThread:" + t);
        
        try{
            for(int i=0;i<=5;i++){ 
                System.out.println(i);
                Thread.sleep(1000);
            }
        }
        catch(InterruptedException e){
            System.out.println("main thread is interrupted");
        }

    }
}    
