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
define( 'DB_NAME', 'wpsite4' );

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
define( 'AUTH_KEY',         'F3-FW)|=gtizu=+Ry^:?6&C-i$j``tPok_)C=lDF$=[.qjK+/x0Ed0M( l!Ec%Br' );
define( 'SECURE_AUTH_KEY',  'w)Bbgz#cmi~nX~PvA{=0l7v}r|+/AloZH=)9p8gBud1r%FHQecZG!qlB`#`g9iH_' );
define( 'LOGGED_IN_KEY',    'To@ohc&9>5l2+w0YvHzfZK+[xGVn42tp2u>T70V9Lv[y6u|VUKKg}iqJ.mxxLVDZ' );
define( 'NONCE_KEY',        '2(R:n9;Pza..!>z@XJ@oU9KfpmP%,2=9W=Z`}T$NfR=4[R.:MU}AAm6/I~KqYJEz' );
define( 'AUTH_SALT',        '??];M>._*?.jt<pT)2gKm!G2h9X+qGY6QipWPMJ2Ltd|gHH$s/1@:aX?o/EeMVYI' );
define( 'SECURE_AUTH_SALT', 'X`- !.a]l9VtJbZWY:)^=yo6Arx_B3:j`rY|#~Yjq$7-85;i!Gfs[OwGJ8tZE9Z^' );
define( 'LOGGED_IN_SALT',   '6$@6?u^A9DxIJ&:s~CSw6Bf;T3])XJ5i^)K,99c1ivW;$c7Z65^rz2|r4X<[::Tk' );
define( 'NONCE_SALT',       '|,9as1rjL#;pei^6uVC4!Lb3&rdv_>u1$GyD]N5o9B@R/KNR2q24:tTE7dgV F!4' );
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
