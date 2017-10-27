<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '~H95K4G!cT3boK4|K*JtP~//U]bTHyfy30EJ4GYZli:eGgcwgZ0N~n,y]A/zeSCs');
define('SECURE_AUTH_KEY',  '7AsXMZ<qBGi`K>>.~08bsom6}WV!&:39=:&^+ %Y/35lGVkmwt|,]TGLp&*:V|#9');
define('LOGGED_IN_KEY',    'ikN6p2#eHzBQ4T8xJpkI}wZ`_Imf34nPJ(%=HS_mV4[Lm>]V_2Z>S29=[M+x}]6s');
define('NONCE_KEY',        '<XRW7B(PzlPb1hZ&bstJb;)&!zPz>U3Sxgi4??7wYxL3AvH)Og7r8r0QRe:V/q04');
define('AUTH_SALT',        '7YZ!+%ia)O)wdRdF!aco4(k#K?:{<_|/gptKc#-ZI:/?zs$!#,YwNx^buZG{cI7]');
define('SECURE_AUTH_SALT', '2U5>*.w&52e- F [V8z>]*m),,mi&G |4uAak,dHs3.WEFcqNaK(TYJ/X7vUGQE2');
define('LOGGED_IN_SALT',   'V4~F<}:p|;EAEOTc*|/t}_tITRwa (`)%AMHC?rl?>!(Z]:G$8EW4Ydw.OD+KD5 ');
define('NONCE_SALT',       '+p|/F/<s2elGuV<t}{dDaAxDpwhye?Cps1DYNc85Fb+OH_uj|@VW+)Iv,n$Ob}o^');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
