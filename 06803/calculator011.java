import java.awt.*;
import java.awt.event.*;
import javax.swing.*;

public class calculator011 extends JFrame implements ActionListener
{
	private JPanel		jpCalculator = new JPanel();
	
	private JTextField  fLayar    = new JTextField ();
	private JLabel		labelmhs  = new JLabel ("NIM: 06803  Nama: Tiara Bifani");
	
	private JButton		btnTambah = new JButton ("+"),
						btnKurang = new JButton ("-"),
						btnC	  = new JButton ("C"),
						btn1      = new JButton ("1"),
						btn2      = new JButton ("2"),
						btn3      = new JButton ("3"),
						btnSama   = new JButton ("=");
						
	private String isiLayar = " ";
	private String snilai1, snilai2, tombol;
	private int hasil;
	Font font1 = new Font("SansSerif", Font.BOLD, 24);
	
	public calculator011()
	{
		setPreferredSize(new Dimension(500,600));
		setTitle("Kalkulator");
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		
		new BorderLayout();
		JDesktopPane jpCalculator = new JDesktopPane();
		add(jpCalculator, BorderLayout.CENTER);
		
		fLayar.setBounds (50, 90, 385, 50);
		fLayar.setFont(font1);
		labelmhs.setBounds (50, 480, 200, 50);
		
		btnC.setBounds      (350, 160, 85, 50);
		btnTambah.setBounds (350, 230, 85, 50);
		btnKurang.setBounds (350, 300, 85, 50);
		btnSama.setBounds   (250, 160, 85, 50);
		
		btn1.setBounds (50, 230, 85, 50);
		btn2.setBounds (150, 230, 85, 50);
		btn3.setBounds (250, 230, 85, 50);
		
		fLayar.setHorizontalAlignment (JTextField.RIGHT);
		
		btnTambah.setEnabled(true);
		
		btn1.addActionListener (this);
		btn2.addActionListener (this);
		btn3.addActionListener (this);
		
		btnC.addActionListener (this);
		btnTambah.addActionListener (this);
		btnKurang.addActionListener (this);
		btnSama.addActionListener (this);
		
		jpCalculator.add (fLayar);
		jpCalculator.add (labelmhs);
		jpCalculator.add (btn1);
		jpCalculator.add (btn2);
		jpCalculator.add (btn3);
		
		jpCalculator.add (btnC);
		jpCalculator.add (btnTambah);
		jpCalculator.add (btnKurang);
		jpCalculator.add (btnSama);
		
		getContentPane().add (jpCalculator).setBackground(Color.getHSBColor(10, 250, 23));
		
		pack();
		setVisible(true);
	}
	
	public static void main(String[] args)
	{
		new calculator011().setVisible(true);
	}
	
	public void actionPerformed (ActionEvent ae)
	{
		Object obj = ae.getSource();
		
		if (obj == btnC)
		{
			tombol = ""; snilai1 = ""; snilai2 = "";
			isiLayar = "";
			fLayar.setText(isiLayar);
		}
		
		if (obj == btn1)
		{
			isiLayar = isiLayar + "1";
			fLayar.setText(isiLayar);
		}
		
		if (obj == btn2)
		{
			isiLayar = isiLayar + "2";
			fLayar.setText(isiLayar);
		}
		
		if (obj == btn3)
		{
			isiLayar = isiLayar + "3";
			fLayar.setText(isiLayar);
		}
		
		if (obj == btnTambah)
		{
			tombol = "tambah";
			snilai1 = fLayar.getText();
			isiLayar = "";
			fLayar.setText(isiLayar);
		}
		
		if (obj == btnKurang)
		{
			tombol = "kurang";
			snilai1 = fLayar.getText();
			isiLayar = "";
			fLayar.setText(isiLayar);
		}
		
		if (obj == btnSama)
		{
			snilai2 = fLayar.getText();
			
			hasil = Integer.parseInt(snilai1) + Integer.parseInt(snilai2);
			hasil = Integer.parseInt(snilai1) - Integer.parseInt(snilai2);
			
			String shasil = " " + hasil;
			fLayar.setText(shasil);
		}
	}
	
	void Kosong ()
	{
		fLayar.setText ("");
		fLayar.requestFocus();
	}
	
}