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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ')mtHoPMigTdn1]o/^4~amZVxN8Pk*R&kgm);|~_~X_AijG7DiIAli}cC*tjLL7xv' );
define( 'SECURE_AUTH_KEY',  'scWosaEWb%R,)]V6pGjFQaHLYRUAiGv.+RER7Ni<IP>?8tNq</gQgpcC.e)>S]iQ' );
define( 'LOGGED_IN_KEY',    'sz:dAKx<%E0%V6goItwCLCJVlPFN-P;^s}44>cx%t_mP|koFcPYi;OZP-=QMSB1?' );
define( 'NONCE_KEY',        'Zbfc[{!0#VCaImxp4=uwzD*2T2+r5aBWLA6.y6 <0pL2ah@s|3.Af0fh~Q;uLe/F' );
define( 'AUTH_SALT',        'H*`_5tf-z%;U.o(G]9:Y1.WC2E>V`dj]ERRimj$9Q&RWFl@RgyPzNAfU?WjeppU-' );
define( 'SECURE_AUTH_SALT', 'tw{RY=_xlBsk0ng:!W{YDuwp4(Q )%S]Cj9[sBY<Ay``F(y-qh{l/c@0:+ W>(Ch' );
define( 'LOGGED_IN_SALT',   'm=:}z%j)UyHF6 _$Jt9Jfm3MFQ_ep>(/=!`e6NhP$>:,hQ0A+krcqXh_ Dcz/Zz>' );
define( 'NONCE_SALT',       '{!OGpRbLOJ$)8}Vms-ztg1=X,t?3yYh&;FD)L>GY,iJFEImgB;[L2WIr]v3M*B[p' );
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
