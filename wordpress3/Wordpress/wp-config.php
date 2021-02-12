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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         'ykz:YiRQ?12CW6@?DMJZ%!8]@5qX (5Is*6kC^clh>s@tdYRi.Qia[BM^:&=&v>>' );
define( 'SECURE_AUTH_KEY',  'lmOGsX;`F#1;oTSQSrk^t:>?UK$-A^Re!pf<KRxylh&V@m*O9T)q=*Mtc%^Xo^i3' );
define( 'LOGGED_IN_KEY',    'p6-$C=v}?1z}{YzK=z,G@e.hj~vFcdgu}/z2*Jm+Z@o#FaB1]2Tb?slNWIeElLSO' );
define( 'NONCE_KEY',        ')_U2g_`Upo-_ rc_?o8(v*JG|qlhj%#zp=Tkw)z>$8 @|&(;]&X?vJn?PdR*<p+Q' );
define( 'AUTH_SALT',        'MW.FF+@~lJ}fk(%B-gBwMCOL{q7Jse=35fTt|sVYHo,s8$D7_H4ZL|+C@iFpeMB^' );
define( 'SECURE_AUTH_SALT', 'Z7<92AE*saLLwx-j-Rbnp5${G(lr[.Vmg>xFqxFP+qS*w{uU}5ry}(ghvv@0k{o=' );
define( 'LOGGED_IN_SALT',   'Bd6W[[OWahE>H/6ze!1Q`G)GfpuQ-4; dN UjzyWJdfT|cruVXXe0C-S4Fx#M- U' );
define( 'NONCE_SALT',       '4p2vV$D>CUJw<9Z!4:up|-u&,.MG:3MrES~P7U#j) x%e:r _g5/o9O!PcU(ZkRb' );
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
