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
        echo  $args['before_widget'];
        echo $args['before_title'];
        echo apply_filters('widget_title', $instance['title']);
        echo $args['after_title'];
        //corps du widget
        ?>
        <h1>Carte de visite</h1>
        <?php
        $nom = get_option('nomUtilisateur');
        $prenom= get_option('prenomUtilisateur');
        $adresse= get_option('adresseUtilisateur');
        $tel= get_option('telUtilisateur');
        $mail= get_option('mailUtilisateur');
        echo'<form="action" method="post">
        <p>
       <div class="nomUtilisateur">'.$nom.' '.$prenom.'</div>'; 
        
        
        echo $args['after_widget'];
    }

}