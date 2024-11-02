public class hierarchy{
    void a(){
        System.out.println("a");
    }
}

class h2 extends hierarchy
{
    void b(){
        System.out.println("b");
    }
}

class h3 extends hierarchy
{
    void c(){
        System.out.println("c");
    }
    public static void main (String [] args){
        h3 n=new h3();
        n.c();
    }
}
