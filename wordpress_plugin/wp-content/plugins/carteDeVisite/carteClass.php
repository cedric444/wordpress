<?php
//on inclut la définition du widget
include_once plugin_dir_path(__FILE__).'/carteWidget.php';

class CarteClass{
    public function __construct(){
        //on déclare le widget
        add_action('widgets_init', function(){register_widget('CarteWidget');});
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);

        add_action('wp_loaded', array($this, 'save_data'));

        add_action('admin_init', array($this, 'register_settings'));
    }

    function persoCss()
    {
        wp_enqueue_style('Cartecss', plugins_url('carteDeVisite/design.css'));
    }

    public static function install()
    {//méthode déclenchée à l'activation du plug-in
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}CarteDeVisite (id INT AUTO_INCREMENT PRIMARY KEY, nomUtilisateur VARCHAR(100) NOT NULL,
        prenomUtilisateur VARCHAR(100) NOT NULL, adresseUtilisateur VARCHAR(255) NOT NULL, telUtilisateur VARCHAR(10) NOT NULL, mailUtilisateur VARCHAR(100));");
    }

    public static function uninstall()
    {//méthode déclenchée à la suppression du module
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}CarteDeVisite;");
    }

    public function save_data()
	{$nom = $_POST['carteDeVisite_nomUtilisateur'];

		if (isset($nom) && !empty($nom)) {
			global $wpdb;
			
			$row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}carteDeVisite WHERE nomUtilisateur = '$nom'");
			if (is_null($row)) {
			 	$wpdb->insert("{$wpdb->prefix}carteDeVisite_nomUtilisateur", array('nom' => $nom));
			}
        }
    }

    public function register_settings()
    {
        register_setting('carteDeVisite_settings', 'carteDeVisite_nomUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_adresseUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_telUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_mailUtilisateur');
        register_setting('carteDeVisite_settings', 'carteDeVisite_couleur');
    }
}