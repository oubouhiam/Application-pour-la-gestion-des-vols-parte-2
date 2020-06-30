# Documentation de ce projet
technologie utilisée : #HTML5 #CSS3 #Bootstrap #Javascript #Ajax #PHP #MySQL #model_MVC

comment ouvrir ce projet? 

# Téléchargement & installation de wampserver :

Télécharger WAMP depuis le site officiel. Plus bas dans la page, cliquez sur le lien de téléchargement. Vous n’êtes pas obligé(e) de remplir les informations dans la pop-up, vous pouvez directement cliquez sur « Passer au téléchargement direct« .
lien : https://www.wampserver.com/
Pensez à fermer Skype (il bloque WAMP car utilise les mêmes ports), puis lancez l’installation. Vous pouvez choisir un navigateur et un éditeur par défaut à utiliser. Si ça ne vous parle pas, laissez le choix par défaut en cliquant sur « Non ».
# Réparer les erreurs d’installation de WAMP
Si vous obtenez l’erreur « VCRUNTIME140.dll« ,  ou « MSVRC140.dll » installez la librairie suivante :

https://www.microsoft.com/fr-FR/download/details.aspx?id=52685

Si vous obtenez l’erreur « MSVRC110.dll« , installez le librairie suivante :

https://www.microsoft.com/fr-fr/download/details.aspx?id=30679

# Exécution de WampServer :
## 1
L'exécution de WampServer ne déclenche pas grand-chose de visible, tout au plus la console qui s'ouvre et se referme rapidement. Mais si vous regardez dans votre zone de notification, à droite de la barre des tâches, vous verrez une icône avec le logo de WampServer devenir verte. Laissez traîner votre souris sur cette icône : une info-bulle vous indique que tous les services sont lancés.
Donc le raccourci vers WampServer sert à cela : démarrer tous les services de votre serveur web/MySQL.
## 2
L’icône est verte quand tous les services sont démarrés, rouge lorsqu’ils sont tous inactifs et orange lorsque seulement une partie d’entre eux sont démarrés.
## 3
Pour accéder phpmyadmin, vous devez démarrer votre navigateur (Chrome / firefox) et taper « localhost » dans la barre d'adresse http://localhost/phpmyadmin/ .
par défaut le  username est root sans mot de passe .
# Importer ce projet sous votre WAMP serveur : 
## 1
Une fois le projet téléchargée, décompressez-le. Cliquez ensuite sur WAMP > Répertoire www.
www correspond à la racine de votre site, c’est-à-dire localhost/.
## 2
Déplacez votre dossier dans ce répertoire.
# Configurer la base de données MySQL via PHPMyAdmin sous WAMP
## 1-
Une fois votre projet est installé sur votre serveur, le projet demande une base de données pour s’installer ainsi qu’un identifiant.
Cliquez encore (clic gauche) sur WAMP > phpMyAdmin.
## 2-
Par défaut, l’utilisateur est root, il n’y a pas de mot de passe.
## 3-
En haut à gauche, cliquez sur « Nouvelle base de données« avec le nom « gestion_reservations »
## 4-
Cliquez sur l’onglet « Importer ».
## 5-
Cliquez sur le bouton « Afficher » de la section « Fichier à importer » (File to import).
## 6-
Votre navigateur vous invitera à repérer sur votre ordinateur le fichier de la base de données.
## 7-
le fichier est exist dans ce projet dans le dossier <<DataBase>> se le nom "gestion_reservations.sql".
## 8-
Une fois le fichier repéré et sélectionné, le champ « Emplacement du fichier texte » (Location of the text file) affichera le chemin ## du fichier de la base de données. Cliquez sur le bouton « Exécuter ».
## 9-
  Une fois le téléversement du fichier terminé, les données et la structure qu’il contient seront immédiatement disponibles pour ## utilisation dans la base de données.

# Showtime !!!!
## 1
connectez-vous sur votre site internet.
http://localhost/volapppart-2/identification.php
* pour une accéss admin : 
email    : admin@gmail.com
password : Admin
* pour une accéss utilisateur :
email    : user@user.com 
password : user


## 2
Pour plus d'explications sur ce code ,
contactez-moi sur l'e-mail: younessdeveloper@gmaiL.com
