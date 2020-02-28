<?php

return [
    'index' => [
        'title' => 'Vision du serveur :name',
        'header' => 'Console du serveur',
        'header_sub' => 'Contrôlez votre serveur en temps réel',
    ],
    'schedule' => [
        'header' => 'Gestionnaire des tâches',
        'header_sub' => 'Gérez toutes vos tâches journalières',
        'current' => 'Tâche actuelle',
        'new' => [
            'header' => 'Créer une nouvelle tâche',
            'header_sub' => 'Créer une tâche pour effectuer des actions à votre place automatiquement',
            'submit' => 'Créer',
        ],
        'manage' => [
            'header' => 'Gerer le programme',
            'submit' => 'Mettre à jour le programme',
            'delete' => 'Supprimer le programme',
        ],
        'task' => [
            'time' => 'Après',
            'action' => 'Effectuer une action',
            'payload' => 'Avec charges utiles',
            'add_more' => 'Ajouter une nouvelle tâche',
        ],
        'actions' => [
            'command' => 'Envoyer une commande',
            'power' => 'Actions d\'alimentation',
        ],
        'toggle' => 'Basculer le status',
        'run_now' => 'Déclencher le programme',
        'schedule_created' => 'Un programme a correctement été créé pour ce serveur.',
        'schedule_updated' => 'Le programme à été mis à jour.',
        'unnamed' => 'Programme sans nom',
        'setup' => 'Installation du programme',
        'day_of_week' => 'Jour de la semaine',
        'day_of_month' => 'Jour du mois',
        'hour' => 'Heure',
        'minute' => 'Minute',
        'time_help' => 'Le système de planification prend en charge l\'utilisation de la syntaxe Cronjob lors de la définition du moment ou les tâches doivent commencer à s\'executer. Utilisez les champs ci-dessus pour spécifier quand ces tâches doivent commencer à s\'executer ou sélectionnez des options dans les multiples menus de sélection.',
        'task_help' => ' Le temps pour les tâches est relatif à l\'ancienne tâche définie. Chaque programmes ne doivent pas avoir plus de 5 tâches assignés pour ça et les tâches ne peuvent pas être programmés pour plus de 15 minutes.',
    ],
    'tasks' => [
        'task_created' => 'Une nouvelle tâche à été ajoutée avec succès sur le panneau.',
        'task_updated' => 'La tâche à été modifié avec succès. Toutes les actions de tâche actuellement en attente seront annulées et réexécutées à la prochaine heure définie.',
        'header' => 'Tâches programmés',
        'header_sub' => 'Automatisez votre serveur.',
        'current' => 'Tâches actuellement programmés',
        'actions' => [
            'command' => 'Envoyer la commande.',
            'power' => 'Envoyer l\'option d\'alimentation',
        ],
        'new_task' => 'Ajouter une nouvelle tâche',
        'toggle' => 'Basculer le status',
        'new' => [
            'header' => 'Nouvelle tâche',
            'header_sub' => 'Créer une nouvelle tâche programmée pour ce serveur.',
            'task_name' => 'Nom de la tâche',
            'day_of_week' => 'Jour de la semaine',
            'custom' => 'Valeur personnalisée',
            'day_of_month' => 'Jour du mois',
            'hour' => 'Heure',
            'minute' => 'Minute',
            'sun' => 'Dimanche',
            'mon' => 'Lundi',
            'tues' => 'Mardi',
            'wed' => 'Mercredi',
            'thurs' => 'Jeudi',
            'fri' => 'Vendredi',
            'sat' => 'Samedi',
            'submit' => 'Créer la tâche',
            'type' => 'Type de tâche',
            'chain_then' => 'alors, après',
            'chain_do' => 'Faire',
            'chain_arguments' => 'Avec Arguments',
            'payload' => 'Charges utiles de la tâche',
            'payload_help' => 'Par exemple, si vous sélectionnez <code>Envoyer commande</code> entrez la commande ici. Si vous sélectionnez <code>Envoyer une option d\'alimentation</code> mettre l\'action  d\'alimentation ici (ex. <code>Redémarrer</code>).',
        ],
        'edit' => [
            'header' => 'Gerer la tâche',
            'submit' => 'Mettre à jour la tâche',
        ],
    ],
    'users' => [
        'header' => 'Gerer les utilisateurs',
        'header_sub' => 'Contrôler qui peux acceder à votre serveur.',
        'configure' => 'Configurer les permissions',
        'list' => 'Comptes avec accès',
        'add' => 'Ajouter un nouveau sous-utilisateur',
        'update' => 'Mettre à jour le sous-utilisateur',
        'user_assigned' => 'Un nouveau sous-utilisateur à été assigné au serveur avec succès.',
        'user_updated' => 'Les permissions on été mises à jour avec succès.',
        'edit' => [
            'header' => 'Modifier un sous-utilisateur',
            'header_sub' => 'Modifier l\'accès de l\'utilisateur au serveur.',
        ],
        'new' => [
            'header' => 'Ajouter un nouvel utilisateur',
            'header_sub' => 'Ajouter un nouvel utilisateur avec des permissions sur ce serveur.',
            'email' => 'Adresse E-Mail',
            'email_help' => 'Entrez l\'adrresse e-mail de l\'utilisateur auquel vous souhaitez l\'inviter à gerer ce serveur.',
            'power_header' => 'Gestion de l\'alimentation',
            'file_header' => 'Gestion des fichiers',
            'subuser_header' => 'Gestion des sous-utilisateurs',
            'server_header' => 'Gestion d\'un serveur',
            'task_header' => 'Gestion des programmes',
            'database_header' => 'Gestion de la base de donnée',
            'power_start' => [
                'title' => 'Démarrer le serveur',
                'description' => 'Autoriser des utilisateurs à démarrer le serveur.',
            ],
            'power_stop' => [
                'title' => 'Arrêter le serveur',
                'description' => 'Autoriser des utilisateurs à arrêter le serveur.',
            ],
            'power_restart' => [
                'title' => 'Redémarrer le serveur',
                'description' => 'Autoriser des utilisateurs à redémarrer le serveur.',
            ],
            'power_kill' => [
                'title' => 'Tuer le serveur',
                'description' => 'Autoriser des utilisateurs à tuer le serveur.',
            ],
            'send_command' => [
                'title' => 'Envoyer une commande de console',
                'description' => 'Autoriser l\'envoi de commandes dans la console. Si l\'utilisateur n\à pas les permissions arrêter ou redémarrer, il ne pourra pas envoyer la commande d\'arrêt.',
            ],
            'access_sftp' => [
                'title' => 'Autorisation SFTP',
                'description' => 'Autoriser des utilisateurs à se connecter au serveur SFTP fourni par le daemon.',
            ],
            'list_files' => [
                'title' => 'Lister les fichiers',
                'description' => 'Autoriser des utilisateurs à avoir une liste de tout le fichiers et dossiers sans pouvoir voir le contenu des fichiers.',
            ],
            'edit_files' => [
                'title' => 'Editer des fichiers',
                'description' => 'Autoriser des utilisateurs à ouvrir un fichier juste pour le voir. SFTP n\'est pas affécté par cette permission.',
            ],
            'save_files' => [
                'title' => 'Sauvegarder des fichiers',
                'description' => 'Autoriser des utilisateurs à sauvegarder des fichiers. SFTP n\'est pas affécté par cette permission.',
            ],
            'move_files' => [
                'title' => 'Rename & Move Files',
                'description' => 'Allows user to move and rename files and folders on the filesystem.',
            ],
            'copy_files' => [
                'title' => 'Copier des fichiers',
                'description' => 'Autoriser des utilisateurs à copier des fichiers.',
            ],
            'compress_files' => [
                'title' => 'Compresser des fichiers',
                'description' => 'Autoriser des utilisateurs à compresser des fichiers.',
            ],
            'decompress_files' => [
                'title' => 'Decompresser des fichiers',
                'description' => 'Autoriser des utilisateurs à decompresser des .zip et .tar(.gz).',
            ],
            'create_files' => [
                'title' => 'Crer des fichiers',
                'description' => 'Autoriser des utilisateurs à crer des fichiers.',
            ],
            'upload_files' => [
                'title' => 'Uploader des fichiers',
                'description' => 'Autoriser des utilisateurs à uploader des fichiers.',
            ],
            'delete_files' => [
                'title' => 'Suprimer des fichiers',
                'description' => 'Autoriser des utilisateurs à suprimer des fichiers.',
            ],
            'download_files' => [
                'title' => 'Télécharger des fichiers',
                'description' => 'Allows user to download files. If a user is given this permission they can download and view file contents even if that permission is not assigned on the panel.',
            ],
            'list_subusers' => [
                'title' => 'List Subusers',
                'description' => 'Allows user to view a listing of all subusers assigned to the server.',
            ],
            'view_subuser' => [
                'title' => 'View Subuser',
                'description' => 'Allows user to view permissions assigned to subusers.',
            ],
            'edit_subuser' => [
                'title' => 'Edit Subuser',
                'description' => 'Allows a user to edit permissions assigned to other subusers.',
            ],
            'create_subuser' => [
                'title' => 'Create Subuser',
                'description' => 'Allows user to create additional subusers on the server.',
            ],
            'delete_subuser' => [
                'title' => 'Delete Subuser',
                'description' => 'Allows a user to delete other subusers on the server.',
            ],
            'view_allocations' => [
                'title' => 'View Allocations',
                'description' => 'Allows user to view all of the IPs and ports assigned to a server.',
            ],
            'edit_allocation' => [
                'title' => 'Edit Default Connection',
                'description' => 'Allows user to change the default connection allocation to use for a server.',
            ],
            'view_startup' => [
                'title' => 'View Startup Command',
                'description' => 'Allows user to view the startup command and associated variables for a server.',
            ],
            'edit_startup' => [
                'title' => 'Edit Startup Command',
                'description' => 'Allows a user to modify startup variables for a server.',
            ],
            'list_schedules' => [
                'title' => 'List Schedules',
                'description' => 'Allows a user to list all schedules (enabled and disabled)  for this server.',
            ],
            'view_schedule' => [
                'title' => 'View Schedule',
                'description' => 'Allows a user to view a specific schedule\'s details including all of the assigned tasks.',
            ],
            'toggle_schedule' => [
                'title' => 'Toggle Schedule',
                'description' => 'Allows a user to toggle a schedule to be active or inactive.',
            ],
            'queue_schedule' => [
                'title' => 'Queue Schedule',
                'description' => 'Allows a user to queue a schedule to run it\'s tasks on the next process cycle.',
            ],
            'edit_schedule' => [
                'title' => 'Edit Schedule',
                'description' => 'Allows a user to edit a schedule including all of the schedule\'s tasks. This will allow the user to remove individual tasks, but not delete the schedule itself.',
            ],
            'create_schedule' => [
                'title' => 'Create Schedule',
                'description' => 'Allows a user to create a new schedule.',
            ],
            'delete_schedule' => [
                'title' => 'Delete Schedule',
                'description' => 'Allows a user to delete a schedule from the server.',
            ],
            'view_databases' => [
                'title' => 'View Database Details',
                'description' => 'Allows user to view all databases associated with this server including the usernames and passwords for the databases.',
            ],
            'reset_db_password' => [
                'title' => 'Reset Database Password',
                'description' => 'Allows a user to reset passwords for databases.',
            ],
            'delete_database' => [
                'title' => 'Delete Databases',
                'description' => 'Allows a user to delete databases for this server from the Panel.',
            ],
            'create_database' => [
                'title' => 'Create Database',
                'description' => 'Allows a user to create additional databases for this server.',
            ],
        ],
    ],
    'allocations' => [
        'mass_actions' => 'Mass Actions',
        'delete' => 'Delete Allocations',
    ],
    'files' => [
        'exceptions' => [
            'invalid_mime' => 'This type of file cannot be edited via the Panel\'s built-in editor.',
            'max_size' => 'This file is too large to edit via the Panel\'s built-in editor.',
        ],
        'header' => 'File Manager',
        'header_sub' => 'Manage all of your files directly from the web.',
        'loading' => 'Loading initial file structure, this could take a few seconds.',
        'path' => 'When configuring any file paths in your server plugins or settings you should use :path as your base path. The maximum size for web-based file uploads to this node is :size.',
        'seconds_ago' => 'seconds ago',
        'file_name' => 'Nom du fichié',
        'size' => 'Tailles',
        'last_modified' => 'Dernière Modification',
        'add_new' => 'Ajouter un nouveau fichié',
        'add_folder' => 'Ajouter un nouveau dossier',
        'mass_actions' => 'Actions de Masses',
        'delete' => 'supprimer les fichiers',
        'edit' => [
            'header' => 'Edité un fichié',
            'header_sub' => 'Apportez des modifications à un fichier à partir du Web.',
            'save' => 'enregistrer des fichiers',
            'return' => 'retour au gestionnaire de fichiers',
        ],
        'add' => [
            'header' => 'Nouveau fichié',
            'header_sub' => 'Créez un nouveau fichier sur votre serveur.',
            'name' => 'Nom du fichié',
            'create' => 'Créez un nouveau fichier
        ],
    ],
    'config' => [
        'name' => [
            'header' => 'Nom du serveur',
            'header_sub' => 'Changer le nom du serveur',
            'details' => 'Le nom du serveur n\'est qu\'une référence à ce serveur sur le panneau et n\'affectera pas les configurations spécifiques au serveur pouvant s\'afficher aux utilisateurs dans les jeux.',
        ],
        'startup' => [
            'header' => 'Commencé la configuration',
            'header_sub' => 'Contrôler les arguments de démarrage du serveur',
            'command' => 'Commande de démarrage',
            'edit_params' => 'Edité les paramètres',
            'update' => 'Mettre à jour les paramètres de démarrage',
            'startup_regex' => 'règles d\'entrée',
            'edited' => 'Les variables de démarrage ont été modifiées avec succès. Ils prendront effet au prochain démarrage de ce serveur.',
        ],
        'sftp' => [
            'header' => 'Configuration SFTP',
            'header_sub' => 'Détails du compte pour les connexions SFTP.',
            'details' => 'Détails SFTP',
            'conn_addr' => 'Adresse de connections',
            'warning' => 'Le mot de passe SFTP est le mot de passe de votre compte.Assurez-vous que votre client est c onfiguré pour utiliser SFTP et non FTP ou FTPS pour les connexions, il existe une différence entre les protocoles.',
        ],
        'database' => [
            'header' => 'Base de donnés',
            'header_sub' => 'Toutes les bases de données disponibles pour ce serveur.',
            'your_dbs' => 'Base de donnés Configuré',
            'host' => 'Hôte MySQL',
            'reset_password' => 'réinitialiser le mot de passe',
            'no_dbs' => 'Aucune base de données n\'est répertoriés pour ce serveurs',
            'add_db' => 'Ajouter une nouvelle base de donnés',
        ],
        'allocation' => [
            'header' => 'Allocations de serveur',
            'header_sub' => 'Contrôlez les IP et les ports disponibles sur ce serveur.',
            'available' => 'Allocations disponibles',
            'help' => 'Aide à l\'allocation',
            'help_text' => 'La liste de gauche comprend toutes les adresses IP et tous les ports disponibles qui sont ouverts à votre serveur pour les connexions entrantes.',
        ],
    ],
];
