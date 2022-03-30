<?php

/** [secret_elements] **/
/* title of the page */
$GLOBALS['lang']['mod']['phosphore_installation']['secret_elements']['title'] = 'Mot de passe pour l\'installation';
/* main form legend */
$GLOBALS['lang']['mod']['phosphore_installation']['secret_elements']['legend'] = 'Secret';
/* label for server secret */
$GLOBALS['lang']['mod']['phosphore_installation']['secret_elements']['label_secret'] = 'le secret de cette installation, c\'est le contenu du fichier dans mod/phosphore_installation/secret';
/* submit button */
$GLOBALS['lang']['mod']['phosphore_installation']['secret_elements']['submit'] = 'valider le secret';
/** [/secret_elements] **/

/** [config_elements] **/
/* title of the page */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['title'] = 'Configuration serveur';
/* main form legend */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['legend'] = 'Configuration du serveur';
/* label for server lang */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_lang'] = 'langage par défaut du serveur';
/* label for server locale */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_locale'] = 'locale (langage utilisateur) par défaut du serveur';
/* legend for database fieldset */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['database_legend'] = 'Configuration de la base de donnée';
/* label for username */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_username'] = 'Nom de l\'utilisateur qui CREERA la base de donnée';
/* label for password */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_password'] = 'Mot de passe de l\'utilisateur qui CREERA la base de donnée';
/* label for drivers */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_driver'] = 'Pilote de la base de donnée (voir <a href="https://www.php.net/manual/pdo.drivers.php">ici</a>)';
/* label for drivers options */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['driver_options_legend'] = 'Option du pilote';
/* label for host configuration */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_host'] = '(Mysql, PostgreSQL) hôte du serveur';
/* label for port configuration */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_port'] = '(Mysql, PostgreSQL) port du serveur';
/* label for name of the database */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_dbname'] = '(Mysql, PostgreSQL, Firebird) nom de la base de donnée';
/* label for unix_socket */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_unix_socket'] = '(Mysql) unix socket';
/* label for the charset used */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_charset'] = '(Mysql) jeu de caractères utilisé';
/* label for the role used */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_role'] = '(Firebase) nom du rôle SQL';
/* label for the dialect */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_dialect'] = '(Firebase) dialecte de la base de donnée (1 or 3)';
/* label for memory */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_memory'] = '(SQLite) si la base de donnée doit être créé dans la mémoire';
/* label for path */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['label_path'] = '(SQLite) chemin de la base de donnée';
/* submit button */
$GLOBALS['lang']['mod']['phosphore_installation']['config_elements']['submit'] = 'valider la configuration';
/** [/config_elements] **/

/** [error] **/
/* no locale file */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['no_locale'] = 'Erreur durant l\'initialisation pour phosphore_installation: il manque des fichiers locale';
/* wrong secret */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['wrong_secret'] = 'mauvais secret';
/* cannot open secret file */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['open_secret_file'] = 'imposible d\'ouvrir le fichier secret';
/* cannot close secret file */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['close_secret_file'] = 'impossible de fermer le fichier secret';
/* stage file missformed */
$GLOABLS['lang']['mod']['phosphore_installation']['error']['bad_stage'] = 'le fichier stage est corrompu, il ne contient pas un chiffre';
/* stage file cannot be opened */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['cannot_open_stage'] = 'impossible d\'ouvrir le fichier stage';
/* stage file cannot be closed */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['cannot_close_stage'] = 'impossible de fermer le fichier stage';
/* configuration file cannot be opened */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['cannot_open_config'] = 'la configuration personnelle ne peut pas être ouverte';
/* unknown driver chose */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['unknown_driver'] = 'le pilote de la base de donnée {driver} n\'est pas supporté';
/* configuration file cannot be closed */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['cannot_close_config'] = 'la configuration personnelle ne peut pas être fermé';
/* cannot feed the table in the database with default value */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['feeding_table'] = 'impossible de remplir la table avec la valeur par défaut: erreur: {exception}';
/* cannot create the table in the database */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['create_table'] = 'impossible de créer la table dans la base de donnée: erreur: {exception}';
/* cannot create the user in the database */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['create_user'] = 'impossible de créer l\'utilisateur de la base de donnée: erreur: {exception}';
/* cannot connect to the database with the given parameter */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['connect_database'] = 'impossible de se connecter à la base de donnée avec les paramètres donnés: erreur: {exception}';
/* cannot create/update config file */
$GLOBALS['lang']['mod']['phosphore_installation']['error']['config_creation'] = 'impossible de créer/mettre à jour le fichier de configuration config/config.php: erreur: {exception}';
/** [/error] **/

/** [stage_1] **/
/* start to applying configuration and creating database */
$GLOBALS['lang']['mod']['phosphore_installation']['stage_1']['start'] = 'début de l\'étape 1: application de la configuration et création de la base de donnée';
/* successfuly deleted the table for recovery */
$GLOBALS['lang']['mod']['phosphore_installation']['stage_1']['deleted_table'] = 'récupération: suppression de la table dans la base de donnée réussie';
/* successfuly deleted the user for recovery */
$GLOBALS['lang']['mod']['phosphore_installation']['stage_1']['deleted_user'] = 'récupération: suppression de l\'utilisateur de la base de donnée réussie';
/* successfuly deleted the configuration file for recovery */
$GLOBALS['lang']['mod']['phosphore_installation']['stage_1']['deleted_config'] = 'récupération: suppression du fichier de configuration réussie';
/* successfuly restored the configuration file for recovery */
$GLOBALS['lang']['mod']['phosphore_installation']['stage_1']['restored_config'] = 'récupération: fichier de configuration restauré avec succès';
/* end stage 1 */
/** [/stage_1] **/
$GLOBALS['lang']['mod']['phosphore_installation']['stage_1']['end'] = 'fin de l\'étape 1';

?>
