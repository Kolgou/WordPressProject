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
define( 'DB_NAME', 'laviedesplantes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost/laviedesplantes' );

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
define( 'AUTH_KEY',         '|Q1tv,)/evw+dc %1]$BAi}eDG~2:5GcD)SoH/Pe@h3@0fu%2M!Y{-y p]`)QCh=' );
define( 'SECURE_AUTH_KEY',  '!edrTlsT?p%VjK93`xpKtYP!QUsaTIbpS J,,]9s796&MuzB{<)[YfP|5W0HMKa-' );
define( 'LOGGED_IN_KEY',    'b%gE.QGQp[q1Fn#o]W|>[z~qY##^Mppd!3+_^xA+}?R4&Ln}(q7hxvp8U7Ox~o7z' );
define( 'NONCE_KEY',        '^3xYgU=|I`SZS=gP,o*to,Hk} 5S#o S[98LOLEXg|l6J`$+8w>E^zcx[R)/sjYQ' );
define( 'AUTH_SALT',        'EUC`M6DD88dZ7>5WmiBVwjf,j:T;d=wXf r^W4m)fwR!sf{8fr`-$Oj~k.v}c=pS' );
define( 'SECURE_AUTH_SALT', '<sKt48EqU.^24NZIl/0*yd|(F+M[DW<n78.5/]q&;R<0`I~j-L6^j*<HaD`?U<i3' );
define( 'LOGGED_IN_SALT',   '7D?O[au}s}THuyA>[H?fMkO2TTe-}:J?OVy8)A?]>5%BlAI369r?lQ}]_}oOVt?H' );
define( 'NONCE_SALT',       '-%w`<S*rL<((3s{wy]{=+3-nOnRC(3VlNrXpN%LIq2#QyHeA;6?!,,K+q$4PFv</' );
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
