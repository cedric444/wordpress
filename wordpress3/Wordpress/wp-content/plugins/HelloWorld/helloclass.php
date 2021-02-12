<?php
//on inclue la définition du widget
include_once plugin_dir_path(__File__).'/hellowidget.php';

class HelloClass{
    public function __construct(){
        // on déclare le widget
        add_action('widgets_init', function(){register_widget('HelloWidget');});
        add_action('wp_enqueue_scripts',array($this,'persoCSS'),15);
        add_action('wp_loaded', array($this, 'save_comm'));
        add_action('admin_init', array($this, 'register_settings'));
    }

    function persoCSS()
    {
        wp_enqueue_style('Hellocss', plugins_url('helloworld/design.css'));
    }

    public static function install()
    {//méthode déclenchée à l'activation du plug-in
        global $wpdb;
        $wpdb->query("CREATE TABLE IF NOT EXISTS {$wpdb->prefix}helloworld_commentaire (id INT AUTO_INCREMENT PRIMARY KEY, comm VARCHAR(225) NOT NULL);");
    }

    public static function uninstall()
    {//méthode déclenchée à la suppression du module
        global $wpdb;
        $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}helloworld_commentaire;");
    }

    public function save_comm()
    {
        if (isset($_POST['helloworld_comm']) && !empty($_POST['helloworld_comm']))
        {
            global $wpdb;
            $comm = $_POST['helloworld_comm'];
            $row = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}helloworld_commentaire WHERE comm= '$com'");
            if (is_null($row)) {
                $wpdb->insert("{$wpdb->prefix}helloworld_commentaire", array('comm' =>$comm));
            }
        }
    }

    public function register_settings()
    {
        register_setting('helloworld_settings', 'helloworld_couleur');
    }
}