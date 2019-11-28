# lareval

Crud with ressources. So much fun!

	
Date limite : 28 nov.
Laravel
Vous allez devoir créer une application web utilisant le framework Laravel.

Ce client souhaite soliciter votre aide, et vous fait confiance pour la suite des opérations.

Votre client souhaite un site vitrine sur les animaux, composé d'articles (d'animaux) possédant plusieurs informations :
- un nom
- une description
- un sexe
- un âge
- un poids
- une taille
- une race (spécifique)

Également des informations sur la race :
- un nom
- une classification (mammifères, etc)
- une espérance de vie

Vous devrez réaliser un C.R.U.D permettant de gérer des animaux, mais également un sur les races.
Vous devrez fournir un système de connexion, et ainsi gérer certains accès à certaines pages :

Guest :
- Liste des animaux du site vitrine
- Page de login
- (PAS D'INSCRIPTION)

Authentifié :
- Liste des animaux du site vitrine
- Liste des races présentes sur le site vitrine
- Page de logout

Admin :
- Accès à toutes les pages ainsi qu'aux C.R.U.D

Cela signifie donc que les utilisateurs (users) devront posséder un rôle particulier, dont les informations suivantes :
- un nom de rôle

/!\ Le client apprécierait que l'administrateur puisse C.R.U.D les utilisateurs, en changeant également leur rôle.

Le site doit donc être un minimum agréable et responsive jusqu'à 850px maximum.
Vous devrez faire attention aux erreurs lors des C.R.U.D, lors de l'envoi des données, etc. Vous utiliserez du templating afin de gagner un peu de temps.

Également, vous devrez créer vos tables avec des migrations et tenter d'insérer des données via le principe de seeding.
Votre rendu devra donc comporter ces fichiers contenant des données. Vous ferez attention à bien faire vos relations dans vos models.


BONUS : Si vous utilisez les 'resources' pour vos routes/controllers, un bonus vous sera accordé.


J'espere que le client relou qui demande un projet a la derniere minute sera satisfait..
Bonne correction! :)
