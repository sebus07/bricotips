<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'bricotips' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3307' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'oSz~pV~am4Wbcl(JA~lWNIn*Xv{u:?4y2}94t7yruk<6%PoKah#!9wmBE#^k5U~A' );
define( 'SECURE_AUTH_KEY',  'Uw:`j}O[LZ)i ~i*z%I&.Pw_#x@RxhUPpI: $~ftOv$uUJ7Leowqtx8Z<~Sg]seP' );
define( 'LOGGED_IN_KEY',    'Puc4JTGRS~JBE*Luw(R3p_0zbl}im`879d^WRKz~2oGqE55nyu)u;>3xf^szRv6F' );
define( 'NONCE_KEY',        '%-%4C$$r+?&B4SC:p]F13?n1>K+Eq%plv!>.46>vd8{W+{C2)*Y#r.7S0_}-Ro`#' );
define( 'AUTH_SALT',        ' b!g(-A6SmoCTHyj6^OI8Dp{mK9HR]uwh&i5s2yd,.:Ud^c}}ir_O[ed[> p;dBK' );
define( 'SECURE_AUTH_SALT', ':A3;RdH7A8L]8NI:(*X9Y98~V@UWWzs8sp4n&j+rorF wKS}7<Vg_j*OUcnFpA!y' );
define( 'LOGGED_IN_SALT',   'dtwRc`zjT58Z,}HIrjoSlwY?M74&bq}+Kvo;dbClkKFXj4FCR%D>y.X;C7DS2t5c' );
define( 'NONCE_SALT',       '8&6+3#d|#}Fo..J8 kLrHg%Y U_+:4_S[KJTRvAfdc*iDNT(ux%YP1[k1L= >nus' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
