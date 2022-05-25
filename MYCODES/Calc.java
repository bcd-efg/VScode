import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
public class Calc extends JFrame implements ActionListener
{
    private JButton addition,sub,mul,div,ref;
    static double a=0,b=0,result=0;
    private Container cp;
    JTextField t;
    public void Calculator()
    {
        setSize(700,700);
        setLocation(200, 100);
        setTitle(getClass().getName());
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        addition=new JButton("ADD");
        addition.setBounds(133,100,100,70);
        sub=new JButton("SUB");
        sub.setBounds(366,100,100,70);
        mul=new JButton("MUL");
        mul.setBounds(133,250,100,70);
        div=new JButton("DIV");
        div.setBounds(366,250,100,70);
        ref=new JButton("Refresh");
        ref.setBounds(133,400,333,70);
        addition.addActionListener(this);
        sub.addActionListener(this);
        mul.addActionListener(this);
        div.addActionListener(this);
        ref.addActionListener(this);
        cp=getContentPane();
        cp.setBackground(Color.blue);
        cp.setLayout(null);
        cp.add(addition);
        cp.add(sub);
        cp.add(mul);
        cp.add(div);
        cp.add(ref);
        setVisible(true);
    }
    public void actioPerformed(ActionEvent e) 
    {
        JButton s=(JButton)e.getSource();
        if (s == addition) {
            a = Double.parseDouble(t.getText());
            b = Double.parseDouble(t.getText());
            result = a + b;
            t.setText("" + result);
        }
        if (s == sub) {
            a = Double.parseDouble(t.getText());
            b = Double.parseDouble(t.getText());
            result = a - b;
            t.setText("" + result);
        }
        if (s == mul) {
            a = Double.parseDouble(t.getText());
            b = Double.parseDouble(t.getText());
            result = a * b;
            t.setText("" + result);
        }
        if (s == div) {
            a = Double.parseDouble(t.getText());
            b = Double.parseDouble(t.getText());
            result = a / b;
            t.setText("" + result);
        }
        if (s == ref)
            t.setText("");
    }
    public static void main(String args[]) {
        Calculator();

    }

}