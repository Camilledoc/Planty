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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6%X|H nVtE|T,~BLKal>M:<ZB+D#Y7%/XXU?/0?&{:5zwt>F/9|D;a<Cml!X+gu>' );
define( 'SECURE_AUTH_KEY',  'VOZabEF4A*/O4=yHIm:`J3LiwQNDk!c=X/~# |BHuI[GX>tPhTZ_vG|,r7glWQv-' );
define( 'LOGGED_IN_KEY',    'xD{`M]QGwszk,=1xpDLDOHc?l;8Ms>l2:G}<GV(;kc%wj__6&&.o`le[.biR4EQz' );
define( 'NONCE_KEY',        'oQbACOyYM<t;L-re/D#wU~F?wA:Jt,roP#VlJ|60P1<zb?H:C|dGKB$2tD`TQr6W' );
define( 'AUTH_SALT',        'yz6r&8e<T))>8}|EyhNZXVCtX1=/J:r-lZcl}n f3(wiR?]Nl[[{p!S~m5zua8Vm' );
define( 'SECURE_AUTH_SALT', 'yY9>Izcb2J3@:HJ(^Qw|*`Al{}r+!GNv]4eP%&K7q*}Nhr0vmf_99cu;zokeN|F:' );
define( 'LOGGED_IN_SALT',   'A@c Hl{u$1vy>1q9pt>Lv/XJ6D$>/q#mxu5b`YptA@bk7sl|[}0m3*E+[nbCg>l(' );
define( 'NONCE_SALT',       'LZU0uYQ]HZx^RE,TG8<n ~>iog@r}TW*`*eanK;qcKH.B@646n2/d+Y8Dp[/9ThL' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
