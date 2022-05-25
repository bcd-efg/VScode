import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class changeColor extends JFrame implements ActionListener{
    private JButton red,green,blue,yellow,ref;
    private Container cp;
    public changeColor()
    {
        setSize(600,600);
        setLocation(200, 100);
        setTitle(getClass().getName());
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        red=new JButton("Red");
        red.setBounds(133,100,100,70);
        green=new JButton("Green");
        green.setBounds(366,100,100,70);
        blue=new JButton("Blue");
        blue.setBounds(133,250,100,70);
        yellow=new JButton("Yellow");
        yellow.setBounds(366,250,100,70);
        ref=new JButton("Refresh");
        ref.setBounds(133,400,333,70);
        red.addActionListener(this);
        green.addActionListener(this);
        blue.addActionListener(this);
        yellow.addActionListener(this);
        ref.addActionListener(this);
        cp=getContentPane();
        cp.setBackground(Color.pink);
        cp.setLayout(null);
        cp.add(red);
        cp.add(green);
        cp.add(blue);
        cp.add(yellow);
        cp.add(ref);
        setVisible(true);
    }
    public void actioPerformed(ActionEvent e) {
        JButton s=(JButton)e.getSource();
        if(s==red)
            cp.setBackground(Color.red);
        else if(s==green)
            cp.setBackground(Color.green);
        else if(s==blue)
            cp.setBackground(Color.blue);
        else if(s==yellow)
            cp.setBackground(Color.yellow);
        else if(s==ref)
            cp.setBackground(Color.pink);
            cp.repaint();
    }
    public static void main(String args[]) {
        changeColor f=new changeColor();
    }
}