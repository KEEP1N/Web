
import javax.swing.JLabel;



public class SupprEntreprise2 {

	public SupprEntreprise2() {
		Conteneur supprEntreprise2 = new Conteneur ("Supprimer Entreprise");
		JLabel lblNumroSiret = new JLabel("Num\u00E9ro Siret : ");
		lblNumroSiret.setBounds(350, 360, 160, 25);
		supprEntreprise2.getContentPane().add(lblNumroSiret);

		JLabel lblNom = new JLabel("Nom : ");
		lblNom.setBounds(350, 410, 160, 25);
		supprEntreprise2.getContentPane().add(lblNom);

		JLabel lblTelephone = new JLabel("Telephone :");
		lblTelephone.setBounds(350, 460, 160, 25);
		supprEntreprise2.getContentPane().add(lblTelephone);

		JLabel lblRecapSiret = new JLabel("00011225");
		lblRecapSiret.setBounds(500, 360, 160, 25);
		supprEntreprise2.getContentPane().add(lblRecapSiret);

		JLabel lblRecapNom = new JLabel("Access Corp'");
		lblRecapNom.setBounds(500, 410, 160, 25);
		supprEntreprise2.getContentPane().add(lblRecapNom);

		JLabel lblRecapTelephone = new JLabel("0559565458");
		lblRecapTelephone.setBounds(500, 460, 160, 25);
		supprEntreprise2.getContentPane().add(lblRecapTelephone);

		Bouton boutonAnnuler = new Bouton ("Annuler", 350, 128, 0);
		supprEntreprise2.add(boutonAnnuler);

		Bouton boutonAjouter = new Bouton ("Ajouter", 630, 0, 128);
		supprEntreprise2.add(boutonAjouter);

		supprEntreprise2.setVisible(true);

	}
}
