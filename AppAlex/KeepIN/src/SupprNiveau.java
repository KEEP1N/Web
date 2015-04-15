
import javax.swing.JLabel;
import javax.swing.JComboBox;



public class SupprNiveau  {

	public SupprNiveau() {
		Conteneur supprNiveau = new Conteneur ("Modifier Entreprise");
		supprNiveau.setTitle("Supprimer Niveau");
		JLabel lblNiveau = new JLabel("Selectionner Niveau :");
		lblNiveau.setBounds(350, 400, 160, 25);
		supprNiveau.getContentPane().add(lblNiveau);

		Bouton boutonAnnuler = new Bouton ("Annuler", 350, 128, 0);
		supprNiveau.getContentPane().add(boutonAnnuler);

		Bouton boutonAjouter = new Bouton ("Modifier", 630, 0, 128);
		boutonAjouter.setText("Supprimer");
		supprNiveau.getContentPane().add(boutonAjouter);
		
		JComboBox cbxNiveau = new JComboBox();
		cbxNiveau.setBounds(500, 400, 160, 25);
		supprNiveau.getContentPane().add(cbxNiveau);

		supprNiveau.setVisible(true);

	}
}
