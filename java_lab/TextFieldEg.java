
import java.awt.*;

public class TextFieldEg {

    public static void main(String args[]) {

        Frame f = new Frame("Textfield example");
        TextField t1, t2;

        t1 = new TextField("Welcome to Java");
        t2 = new TextField("AWT");
        
        t1.setBounds(50, 100, 200, 30);
        t2.setBounds(50, 150, 200, 30);
        
        f.add(t1);
        f.add(t2);
        
        f.setSize(400,400);
        f.setLayout(null);
        f.setVisible(true);
        

    }
}
