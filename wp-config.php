<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wpsite3' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',X=p8VE{F a?YOfv=UO<ul$%lVKz+qb&o/TMCQ{B8w0PLABmu8KhW&WG@H&#8U:9' );
define( 'SECURE_AUTH_KEY',  't8CGEfzTI./`445_5b}OJmuR#,}6Vr#_9T!v6(bp|iB&h?n+$7sQ|lzz7f3y!VMM' );
define( 'LOGGED_IN_KEY',    ';bVWB~LkZ[MOC7uwYHMg3L-9wwyYnB2w=36R5YnF#07c -pvAtaG^z7jW.aO#6;)' );
define( 'NONCE_KEY',        'h+[nd7-}s qJh/@-9LSJQ+PYVXRl-rWJQ(X3t[PCmY=b;hBIJ>4i>3C;F2hj!.Yz' );
define( 'AUTH_SALT',        '.IwgC:u2>sGFQHQYXdKV6hGWuoZo&lo>cQFD9q5N{M7Z.xKx^ZS_@QeZ[&YliC>R' );
define( 'SECURE_AUTH_SALT', '3_G!u.l_ta}d,vSl.lrV,!)(*hcSAQ8#!gwL;=DEW2fl+<Jm6TTDZeA1n,:9$P/=' );
define( 'LOGGED_IN_SALT',   '>bV=Byt7]p -K.hP=4%v.UafuAObArqQq>mo3{KH5)b^$`q=#6D+ aNDu.XhLEDL' );
define( 'NONCE_SALT',       'lq+KuYPOOunx+uDLf.wb-4v!+V$$;)5=<>0u`]O#E@q899tH9/ x*&E6O[}R8<+O' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
