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
define( 'DB_NAME', 'actu_retro' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Girondins33!' );

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
define( 'AUTH_KEY',         '+Z|BDlygD+J&88BEx>7RtQMrx*H=V86W2Qo!(ETPsO,2a,O^OKxl:Q$*n(5kFd:@' );
define( 'SECURE_AUTH_KEY',  'i}9`R?4DMO~V[M|{#Jfj.(4FNE1VdOLu^i7t/^=MUJ5%R_x[.R{<R~do9vyqGqbk' );
define( 'LOGGED_IN_KEY',    'riFKA]q[v.]%|cc#>WUeae.Oc%$>M;pw#-Awl&u#=LiW@IH^h0A`5Gk}EYb[xpfB' );
define( 'NONCE_KEY',        '|RDKw3h@_];g}AILn&u>oIIaT[oy~SmS}aGjy5Cu/B 9Cq5_VT($jcbJ@KbKZYC|' );
define( 'AUTH_SALT',        'ckGOH$u^f}j QJ@<VVYk0UZZ=w;`a@,X,<ilBz~B4DY5irCu8 I/SIu,az=6 flL' );
define( 'SECURE_AUTH_SALT', '){?0d1i7p6:d@~t$qs<?o4G[4p@C#JjXBOoPSl7KBNJxf]vDz3VeO==ya)9-+IZ0' );
define( 'LOGGED_IN_SALT',   'hN#[H+!qyS[FUAgR IbNi*0H(Uz1^LX8baY@uJ0NuM=Scj7wmgiJ`?lLI|HTl$@&' );
define( 'NONCE_SALT',       '-[P<6|*!7^ZC&;v/HMT66G3[hNa^z^aF{WxE@T:2OAuJv}*gJ<1{SP2fpfr+ ,Rc' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
