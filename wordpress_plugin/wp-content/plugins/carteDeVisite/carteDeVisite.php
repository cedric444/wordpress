<?php
/*
Plugin Name: Carte de visite
Description: Simule une carte de visite en présentant les différentes informations que l'on peut y trouver
Author: Cedric
Version: 1.0
*/

class CarteDeVisite_Plugin{
    public function __construct(){
        include_once plugin_dir_path(__FILE__).'/carteClass.php';
        new CarteClass();
        register_activation_hook(__FILE__, array('carteClass', 'install'));
        register_deactivation_hook(__FILE__, array('carteClass', 'uninstall'));

        add_action('admin_menu', array($this, 'add_admin_menu'), 20);
    }

    public function add_admin_menu()
    {   //on ajoute une page dans le menu administrateur
        add_menu_page('Carte de visite', 'Carte de visite plugin', 'manage_options', 'carteDeVisite', array($this, 'menu_html'));
    }

    public function menu_html(){
        echo'<h1>'.get_admin_page_title().'</h1>';
        ?>
        <form method="post" action="options.php">
        <?php settings_fields('carteDeVisite_settings');?>
        <label>Nom Prénom</label>
        <input type="radio" name="carteDeVisite_nomUtilisateur" value="1"></br></br>
        <label>Prénom Nom</label>
        <input type="radio" name="CarteDeVisite_nomUtilisateur" value="2"></br></br>
        <label>Adresse</label>
        <input type="checkbox" name="CarteDeVisite_adresseUtilisateur" value="1"<?php if(get_option("carteDeVisite_adresseUtilisateur")=="1") echo 'checked'?>/></br></br>
        <label>Tel</label>
        <input type="checkbox" name="CarteDeVisite_telUtilisateur" value="1"<?php if(get_option("carteDeVisite_telUtilisateur")=="1")echo'checked'?>/></br></br>
        <label>Email</label>
        <input type="checkbox" name="CarteDeVisite_mailUtilisateur" value="1"<?php if(get_option("carteDeVisite_mailUtilisateur")=="1")echo 'checked'?> /></br></br>
        <label>Couleur</label>
        <input type="text" value="<?php echo get_option("carteDeVisite_couleur")?>"/>

        <?php submit_button();?> 
        </form>
        <?php
    }
}
new CarteDeVisite_Plugin;