<?php

/** [error] **/
/* no locale file */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['no_locale'] = 'Erreur durant l\'initialisation pour phosphore_installation: fichier locale manquant';
/* wrong secret */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['wrong_secret'] = 'Impossible de continuer l\'installation de PHosPhore, secret incorrect, la page doit être rechargé pour entrer le nouveau secret qui vient d\'être renouvelé';
/* stage file missformed */
$GLOABLS['locale']['mod']['phosphore_installation']['error']['bad_stage'] = 'le fichier stage est corrompu';
/* stage file cannot be opened */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['cannot_open_stage'] = 'impossible d\'ouvrir le fichier stage';
/* stage file cannot be closed */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['cannot_close_stage'] = 'impossible de fermer le fichier stage';
/* configuration file cannot be opened */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['cannot_open_config'] = 'le fichier de configuration n\'a pas pu être ouverte';
/* unknown driver chose */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['unknown_driver'] = 'le type de base de donnée choisie n\'est pas supporté';
/* configuration file cannot be closed */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['cannot_close_config'] = 'le fichier de configuration n\'a pas pu être fermé';
/* cannot feed table in the database */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['feeding_table'] = 'ERREUR FATAL: il y a un bug dans PHosPhore, contactez le possesseur du site, si vous l\'ête, contactez le mainteneur de PHosPhore ici: https://github.com/gugus2000/PHosPhore/issues';
/* cannot create the table in the database */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['create_table'] = 'Erreur créant la table dans la base de donnée crée par le nouvel utilisateur, vérifiez les permissions sql, et si le nom donné est déjà un nom de table';
/* cannot create the user in the database */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['create_user'] = 'Erreur en créant l\'utilisateur phosphore dans la base de donnée, vérifiez les permissions de l\'utilisateur que vous avez définit, et si le nom n\'est pas déjà pris';
/* cannot connect to the database */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['connect_database'] = 'Erreur pendant la connexion de la base de donnée avec les paramètres donnés, s\'il vous plaît, vérifiez les';
/* cannot create the configuration file */
$GLOBALS['locale']['mod']['phosphore_installation']['error']['config_creation'] = 'Erreur pendant la création/mise à jour du fichier config/config.php, vérifiez les permissions du fichier dans la racine et le dossier config';
/** [/error] **/

/* installation finished */
$GLOBALS['locale']['mod']['phosphore_installation']['success_installation_notification'] = 'PHosPhore a bien été installé';

?>
