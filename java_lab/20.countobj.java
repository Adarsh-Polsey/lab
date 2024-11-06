package adarsh;
class countobj {
    static int count =0;
    
    public countobj(){
        count=count+1;
    }
    
   
    public static void main(String [] args){
        countobj obj1=new countobj();
        countobj obj2=new countobj();
        countobj obj3=new countobj();
        
        System.out.println("number of objects created " + countobj.count);
    }

}