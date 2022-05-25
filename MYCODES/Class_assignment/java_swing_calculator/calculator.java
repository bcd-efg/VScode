import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

 public class calculator extends JFrame implements ActionListener {

    JButton b1,b2,b3,b4;
    JTextField t1, t2,l;
    JLabel result,op1,op2;

    calculator() {

        op1 = new JLabel("Operand 1");
        op1.setBounds(90, 30, 150, 30);
        add(op1);
        t1 = new JTextField();
        t1.setBounds(90, 70, 150, 30);
        add(t1);

        op2 = new JLabel("Operand 2");
        op2.setBounds(90, 100, 150, 30);
        add(op2);
        t2 = new JTextField();
        t2.setBounds(90, 140, 150, 30);
        add(t2);

        result = new JLabel("Result");
        result.setBounds(90, 180, 150, 30);
        add(result);
        l = new JTextField();
        l.setBounds(90, 220, 150, 30);
        l.setEditable(false);
        add(l);

        b1 = new JButton("ADD");
        b1.setBounds(90, 270, 70, 30);
        add(b1);

        b1.addActionListener(this);

        b2=new JButton("SUB");
        b2.setBounds(90,320,70,30);
        add(b2);
        b2.addActionListener(this);

        b3=new JButton("MUL");
        b3.setBounds(180,270,70,30);
        add(b3);
        b3.addActionListener(this);

        b4=new JButton("DIV");
        b4.setBounds(180,320,70,30);
        add(b4);
        b4.addActionListener(this);


        setLayout(null);
        setSize(600, 500);
        setTitle("Simple Calculator");
        setVisible(true);

    }

    public void actionPerformed(ActionEvent e) {

        double a = Double.parseDouble(t1.getText());
        double b = Double.parseDouble(t2.getText());
        double c = 0;

        if (e.getSource().equals(b1)) {
            c = a + b;
            l.setText(String.valueOf(c));
        }else if(e.getSource().equals(b2)){

           c=a-b;
           l.setText(String.valueOf(c));
        }else if(e.getSource().equals(b3)){
            c=a*b;
            l.setText(String.valueOf(c));
        }
        else if(e.getSource().equals(b4)){
            c=a/b;
            l.setText(String.valueOf(c));
        }
    }

    public static void main(String args[]) {
        calculator t = new calculator();
    }
}