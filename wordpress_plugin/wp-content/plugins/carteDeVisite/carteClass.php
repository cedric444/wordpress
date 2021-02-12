<?php
//on inclut la définition du widget
include_once plugin_dir_path(__FILE__).'/carteWidget.php';

class CarteClass{
    public function __construct(){
        //on déclare le widget
        add_action('widgets_init', function(){register_widget('CarteWidget');});
        add_action('wp_enqueue_scripts', array($this, 'persoCSS'), 15);
        add_action('wp_enqueue_scripts', array($this, 'persoJS'), 15);

    }

    function persoCSS()
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

    function persoJS()
    {
        wp_enqueue_style('CarteJs', plugins_url('carteDeVisite/script.js'));
    }
    
}