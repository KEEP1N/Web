
import javax.swing.JLabel;
import javax.swing.JTextField;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.Color;



public class AjoutEntreprise  {

	
	
	private JTextField txtNom;
	private JTextField txtTelephone;
	private JTextField txtSiret;


	
	public AjoutEntreprise() {
		Conteneur ajoutEntreprise = new Conteneur ("Ajouter une entreprise");
	
		JLabel lblNumroSiret = new JLabel("Num\u00E9ro Siret : ");
		lblNumroSiret.setBounds(355, 360, 160, 25);
		ajoutEntreprise.getContentPane().add(lblNumroSiret);
		
		JLabel lblNom = new JLabel("Nom : ");
		lblNom.setBounds(355, 410, 160, 25);
		ajoutEntreprise.getContentPane().add(lblNom);
		
		JLabel lblTelephone = new JLabel("Telephone :");
		lblTelephone.setBounds(355, 460, 160, 25);
		ajoutEntreprise.getContentPane().add(lblTelephone);
		
		txtNom = new JTextField();
		txtNom.setBounds(500, 410, 160, 25);
		ajoutEntreprise.getContentPane().add(txtNom);
		txtNom.setColumns(10);
		
		txtTelephone = new JTextField();
		txtTelephone.setBounds(500, 460, 160, 25);
		ajoutEntreprise.getContentPane().add(txtTelephone);
		txtTelephone.setColumns(10);
		
		JButton btnAjouter = new JButton("Ajouter");
		btnAjouter.setBackground(new Color(0, 128, 0));
		btnAjouter.setForeground(Color.WHITE);
		btnAjouter.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent arg0) {
			}
		});
		btnAjouter.setBounds(630, 640, 115, 40);
		ajoutEntreprise.getContentPane().add(btnAjouter);
		
		JButton btnAnnuler = new JButton("Annuler");
		btnAnnuler.setForeground(Color.WHITE);
		btnAnnuler.setBackground(new Color(128, 0, 0));
		btnAnnuler.setBounds(350, 640, 115, 40);
		ajoutEntreprise.getContentPane().add(btnAnnuler);
		
		txtSiret = new JTextField();
		txtSiret.setBounds(500, 360, 160, 25);
		ajoutEntreprise.getContentPane().add(txtSiret);
		txtSiret.setColumns(10);
		
		ajoutEntreprise.setVisible(true);
	}
}
