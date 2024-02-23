## TP Laravel 2h

- Dépôt du code (sans dossier vendor) sur un GitHub PUBLIC.
- Envoi du lien de votre GitHub à votre intervenant.
-

<!--
    - Ajouter MIX
    - ajouter des users (associates) en BDD
    - recuperer et les affichers
    - create user (associates)
    - delete user (associates)
 -->

### EN - Pepina App

- I tried to help an association create a website to list their people, but I didn't finish and I didn't understand Laravel. I gave up because they don't want to pay me.
-
- Use only templates folder for view because it's a simple app and symfony is too much for this. Changes config/view have been made to use only templates folder.

- Use only one controller for all the routes because it's a simple app !

- I had misunderstood, but the guy from the association wanted to create and delete 'members', but I confused it with linking, and I used users sometimes, so I did not create a migration for them.

- Use admin-door for the admin part. Find this in public. => j'ai tout remplacé, à voir si tout est utile

- Have updated the user schema
- The admin page is not finished

-

### FR - Pepina App

- J'ai essayé d'aider une association à créer un site web pour lister leurs membres, mais je n'ai pas terminé et je n'ai pas compris Laravel. J'ai abandonné parce qu'ils ne veulent pas me payer.
-
- Utilise uniquement le dossier templates pour la vue car c'est une application simple et Symfony est trop pour cela. Des changements dans config/view ont été effectués pour utiliser uniquement le dossier templates.
- Utilise un seul contrôleur pour toutes les routes car c'est une application simple !
- Utilise admin-door pour la partie admin. Trouve cela dans public.
- Ai supprimé les fichiers inconnus du projet.
- Utilise directement le fichier .env de git car l'application utilise un seul environnement. Ai supprimé le fichier .env.example (non nécessaire).
- Ai supprimé les fichiers inconnus du dossier public car ce n'est pas nécessaire.
- Ai supprimé une ligne inconnue dans .gitignore.
- Ai mis à jour le schéma utilisateur.
- Ai ajouté un bon seed utilisateur.
- Je n'ai pas changé les fichiers de configuration mais j'ai mis à jour la variable d'environnement avec le nécessaire seulement.
- J'ai placé les fichiers JS et CSS dans le dossier public. Je ne comprends pas pourquoi ils ne sont pas là par défaut. J'ai mis chaque ressource à sa place.
- La page admin n'est pas terminée.
- Je n'ai pas compris Middleware/, Console/, Exceptions/ ou Storage/, donc je n'y ai pas touché. Sauf pour un fichier avec 'verify' dans le nom, je pense qu'il sert à protéger quelque chose.
- J'ai supprimé une clé des variables env pour la base de données mais je ne me souviens plus laquelle.
- J'avais mal compris, mais le gars de l'association voulait créer et supprimer des 'membres', mais je l'ai confondu avec le fait de les lier, et j'ai parfois utilisé des utilisateurs, donc je n'ai pas créé de migration pour eux.
-
