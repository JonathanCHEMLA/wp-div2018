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
define('DB_NAME', 'wp_div_2018');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vMu127EjB%}qf[wpkB&4e;F:k~6PyYEQWaXRqZG5|_C:ENj dB4k8H2Xpck-Wp)V');
define('SECURE_AUTH_KEY',  'W0K$st;+n-${1;~n 7-5sFg6l~Xb(qH{[N2Q[Kh!{{v764uK(=hIQ$;xwYmk``Iv');
define('LOGGED_IN_KEY',    '6T ORlBQ ?fj*Ofvq&SkqlB|C(bl=Ud.=eUX!9RF]~k!;kP;xM0RJt60 ~ryBz=5');
define('NONCE_KEY',        'VfWq1axRUbvo.h1V0P4evI`mJ_mSVj.t&sjRX-ONdi])R@CNf0c6ar8 N3d/Y9l!');
define('AUTH_SALT',        '=G Bg=uRT&>wLxVTf1MP|s|>X)}sxE8&1aH(z/}M:S*`(Ng7<3f]vB^(cCq7iUl>');
define('SECURE_AUTH_SALT', '[~EUw=?od]$[/{>&m:K;D{`PLJP1(6<2,<(#K@Zb<.s]u*wq|*Z1Np0bQ(byVCwb');
define('LOGGED_IN_SALT',   'Q5eUmfBST?-@gkWkYt/5Z88J7+/kNmQZ>(D dq*OC+r;ta$70_1d_zb9H 1?0!ST');
define('NONCE_SALT',       'mF@{ ocI h$0NOMJ]/JsXed2VLA~$ING%[Li!*}HTr Sdsl%~wQ=GDkqH@lS=y{T');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'dadd_';

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