<?php
class cartewidget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct('carteDeVisite', 'Carte de visite', array('desciption' =>'Un plug-in qui écrit les informations de la carte de visite'));
    }
    public function widget($args, $instance)
    {//formulaire affiché à l'écran pour l'utilisateur

        //on appelle les méthodes standard au cas où un autre plug-in les aurait surchargées
        echo $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
        //corps du widget
        global $wpdb;
        $row= $wpdb->get_row("SELECT * FROM {$wpdb->prefix}carteDeVisite;");
        $couleur = get_option('carteDeVisite_couleur', 'black');
        $nom = $row->nomUtilisateur;
        $prenom= $row->prenomUtilisateur;
        $adresse= $row->adresseUtilisateur;
        $tel= $row->telUtilisateur;
        $mail= $row->mailUtilisateur;
        $afficherNom= get_option('carteDeVisite_afficheNom','nom-prenom');
        $afficherAdresse= get_option('carteDeVisite_afficheAdresse', 'off');
        $afficherTel= get_option('carteDeVisite_afficheTel', 'off');
        $afficherMail= get_option('carteDeVisite_afficheMail', 'off');
        $background = get_option('carteDeVisite_background', 'white');
        ?>
        <h1>Carte de visite</h1>
        <div id="carteDeVisite" style="background-color:<?php echo $background;?>">
            <!-- <div class="image"><img src="http://wordpress2/wordpress/wordpress_plugin/wp-content/uploads/2021/02/cdv.jpg" alt="carte de visite"> -->
            <div class="colonne">
                <div class="colonne" id="recto">
                <?php
                echo'<div class="nom">';
                if($afficherNom == "nom-prenom")
                {
                    echo'<div style="color:'.$couleur.'">'.$nom." ".$prenom.'</div>';
                }
                else
                {
                    echo'<div style="color:'.$couleur.'">'.$prenom." ".$nom.'</div>';
                }
                echo'</div>';
                echo'<div class="mail">';
                if($afficherMail == "on")
                {
                    echo'<div style="color:'.$couleur.'">'.$mail.'</div>';
                }
                echo'</div>';
                ?>
                </div>
                <div class="colonne cachee" id="verso">
                <?php
                    if($afficherAdresse=="on")
                    {
                        echo'<div style="color:'.$couleur.'">'.$adresse.'</div>';
                    };
                    if($afficherTel=="on")
                    {
                        echo'<div style="color:'.$couleur.'">'.$tel.'</div>';
                    }
                ?>
                </div>
        </div>
    </div>
    <?php
    echo $args['after_widget'];
    }

    public function form($instance)
    // formulaire de gestion des paramètres pour le module d'administration
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        ?>
        <p><label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:' );?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php
        echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <?php
    }

}