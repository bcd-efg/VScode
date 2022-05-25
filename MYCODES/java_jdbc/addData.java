import java.sql.*;
import java.awt.*;
import java.awt.event.*;
import javax.swing.*;
import java.io.*;

public class addData extends JFrame implements ActionListener {

	JTextField id;
	JTextField name;
	JButton add,upd,del;
	JButton addnew;
	JPanel p;
	static ResultSet res;
	static Connection conn;
	static Statement stat;

	public addData() {
		super("Our Application");
		Container c = getContentPane();
		c.setLayout(new GridLayout(5, 1));
		id = new JTextField(10);
		name = new JTextField(20);
		add = new JButton("add");
		upd = new JButton("update");
		del = new JButton("delete");

		p = new JPanel();
		c.add(new JLabel("Customer ID", JLabel.CENTER));
		c.add(id);
		c.add(new JLabel("Customer Name", JLabel.CENTER));
		c.add(name);
		c.add(p);
		//add.setBounds(366,100,100,70);
		p.add(add);
		//upd.setBounds(366,100,100,70);
		p.add(upd);
		//del.setBounds(366,100,100,70);
		p.add(del);
		add.addActionListener(this);
		upd.addActionListener(this);
		del.addActionListener(this);
		pack();
		setVisible(true);
		addWindowListener(new WIN());

	}

	public static void main(String args[]) {
		addData d = new addData();
		try {
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver").newInstance();

			conn = DriverManager.getConnection("jdbc:odbc:SD"); // dsn:Data Source Name
			stat = conn.createStatement();

		}

		catch (Exception e) {
			System.out.println("Error" + e);
		}
		// d.showRecord(res);
	}

	public void actionPerformed(ActionEvent e) {
		if (e.getSource() == add) {
			try {
				String id2 = id.getText();
				String name2 = name.getText();
				int i = stat.executeUpdate("insert into EMP values('" + id2 + "','" + name2 + "')");
			} catch (Exception ee) {
			}

		}
		else if (e.getSource() == del) {
			try {
				String id2 = id.getText();
				String name2 = name.getText();
				int i = stat.executeUpdate("delete from EMP where id = '"+id2+"'");
			} catch (Exception ee) {
			}

		}
		else if (e.getSource() == upd) {
			try {
				String id2 = id.getText();
				String name2 = name.getText();
				int i = stat.executeUpdate("update EMP SET id = '"+id2+"' , name = '" + name2 + "' WHERE EMP.id = '"+id2+"'");
			} catch (Exception ee) {
			}

		}
	}

	// Inner class WIN implemented
	class WIN extends WindowAdapter {
		public void windowClosing(WindowEvent w) {
			JOptionPane jop = new JOptionPane();
			jop.showMessageDialog(null, "Database", "Thanks", JOptionPane.QUESTION_MESSAGE);

		}

	} // end of the class

}
