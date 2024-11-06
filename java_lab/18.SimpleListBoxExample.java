package adarsh;
import java.awt.*;
import java.awt.event.*;

class SimpleListBoxExample {
    public SimpleListBoxExample() {
        Frame frame = new Frame("List Box Example");
        List listBox = new List(10);
        TextField inputField = new TextField();
        Button addButton = new Button("Add");
        Button removeButton = new Button("Remove");

        
        listBox.setBounds(50, 50, 200, 150);
        inputField.setBounds(50, 220, 150, 30);
        addButton.setBounds(210, 220, 60, 30);
        removeButton.setBounds(50, 260, 220, 30);

      
        addButton.addActionListener(e -> {
            String item = inputField.getText();
            if (!item.isEmpty()) {
                listBox.add(item);
                inputField.setText("");
            }
        });

        removeButton.addActionListener(e -> {
            int index = listBox.getSelectedIndex();
            if (index != -1) listBox.remove(index);
        });

        
        frame.add(listBox);
        frame.add(inputField);
        frame.add(addButton);
        frame.add(removeButton);
        frame.setSize(300, 350);
        frame.setLayout(null);
        frame.setVisible(true);

        // Window close event
        frame.addWindowListener(new WindowAdapter() {
            public void windowClosing(WindowEvent we) {
                frame.dispose();
            }
        });
    }

    public static void main(String[] args) {
        new SimpleListBoxExample();
    }
}
