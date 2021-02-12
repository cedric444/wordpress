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
        add_action('admin_init', array($this, 'register_settings'));
        new carteClass;
    }

    public function add_admin_menu()
    {   //on ajoute une page dans le menu administrateur
        add_menu_page('CarteDeVisite', 'Carte de visite plugin', 'manage_options', 'carteDeVisite', array($this, 'menu_html'));
    }

    public function menu_html(){
        echo'<h1>'.get_admin_page_title().'</h1>';
        ?>
        <form method="post" action="options.php">
        

        <label for="carteDeVisite_nomUtilisateur">Nom</label>
        <input type="text" value="" name="carteDeVisite_nomUtilisateur"/></br></br>
        <label for="carteDeVisite_prenomUtilisateur">Prénom</label>
        <input type="text" value="" name="carteDeVisite_prenomUtilisateur"/></br></br>
        <label for="carteDeVisite_afficheNom">Affichage nom</label> 
        <label>Nom Prénom</label>
        <input type="radio" name="carteDeVisite_afficheNom" value="nom-prenom" ></br></br>
        <label>Prénom Nom</label>
        <input type="radio" name="carteDeVisite_afficheNom" value="prenom-nom"></br></br>
        <label>Adresse</label>
        <input type="text" name="carteDeVisite_adresseUtilisateur" value=""/>
        <label>Afficher adresse</label>
        <input type="checkbox" name="carteDeVisite_afficheAdresse"/></br></br>
        <label>Tel</label>
        <input type="text" name="carteDeVisite_telUtilisateur" value=""/>
        <label>Afficher Tel</label>
        <input type="checkbox" name="carteDeVisite_afficheTel"></br></br>
        <label>Email</label>
        <input type="text" name="carteDeVisite_mailUtilisateur" value=""/>
        <label>Afficher mail</label>
        <input type="checkbox" name="carteDeVisite_afficheMail"/></br></br>
        <label>Couleur police</label>
        <input type="color" name="carteDeVisite_couleur" value=""/></br></br>
        <label>Couleur fond</label>
        <input type="color" name="carteDeVisite_background" value=""/></br></br>

        <?php settings_fields('carteDeVisite_settings');?>
        <?php submit_button();?> 
        </form>
        <?php
    }

    public function register_settings()
    {
        register_setting('carteDeVisite_settings', 'carteDeVisite_nomUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_adresseUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_telUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_mailUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_couleur');
        register_setting('carteDeVisite_settings','carteDeVisite_background');
        global $wpdb;
        $wpdb->insert("{$wpdb->prefix}carteDeVisite", array('nomUtilisateur'=>$_POST['carteDeVisite_nomUtilisateur'], 'prenomUtilisateur'=>$_POST['carteDeVisite_prenomUtilisateur'],
        'adresseUtilisateur'=>$_POST['carteDeVisite_adresseUtilisateur'], 'telUtilisateur'=>$_POST['carteDeVisite_telUtilisateur'], 'mailUtilisateur'=>$_POST['mailUtilisateur']));
    }
}
new CarteDeVisite_Plugin;