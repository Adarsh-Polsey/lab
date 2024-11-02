
public class staticmethod {
    int rollno;
    String name;
    static String college="ITS";
    
    static void change(){
        college="AITC";
    }
    
    staticmethod(int r,String n){
        rollno=r;
        name=n;        
    }
    void display(){
        System.out.println(rollno+" "+name+" "+college);
    }
    
    public static void main(String[] args){
       staticmethod.change();
        
        staticmethod a1=new staticmethod(1,"A");
        staticmethod a2=new staticmethod(2,"B");
        staticmethod a3=new staticmethod(3,"C");
        
        a1.display();
         a2.display();
         a3.display();
    }
}
