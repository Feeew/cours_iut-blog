# Consignes

En vous inspirant de l'architecture du projet mrURL, créez une application de type blog.

## Fonctionnalités :

* Ajout / modification / suppression d'un billet. Un billet a un titre et un contenu. Il pourra être publié ou non.
* Lister les billets existants
* Associer un ou plusieurs tags à un billet
* Lister les billets de chaque tag (par exemple, je veux consulter les billets qui ont le tag "PHP")

Vous ne gérerez pas la notion d'authentification.

## Fichiers

Votre projet aura la même architecture de fichiers que le projet mrURL, à savoir : 
* un dossier controleur
* un dossier modele. 
* un dossier vues
* un fichier index.php à la racine de votre projet. Attention, ce fichier n'est actuellement pas complet.

Vous **devez** respecter la logique MVC.

## Base de données

La connexion à la base de données est déjà effectuée grâce au fichier modele/connexion.php. Pensez à le modifier en fonction de votre configuration. 

La structure de la base de données se trouve dans le fichier structure.sql. 
Quand un tag est associé à un billet, il y a une ligne qui est ajoutée dans la table tag_billet.

Il n'est pas nécessaire de modifier l'architecture de la base de données. Si vous souhaitez ajouter de nouvelles fonctionnalités, vous devrez peut-être le faire. 

## Mise en page

Pour la mise en page, tout comme dans mrURL, il est conseillé d'utiliser le framework CSS Bootstrap. Ne perdez pas de temps avec le design, ce n'est pas là-dessus que vous serez évalué.
Par contre, si votre blog est fonctionnel et bien codé, tout ajout de fonctionnalités ou de design sera forcément un plus pour l'évaluation.

## Envoi du projet

Vous devez m'envoyer avant le **vendredi 18 avril 2014 18h** (aucun retard ne sera toléré) :

* Un lien vers le blog en ligne fonctionnel. Pour héberger votre blog, je vous conseille l'offre gratuite de alwaysdata https://www.alwaysdata.com/plans/shared/
* Un lien vers votre compte github avec les sources du blog. Siv vous avez modifier la structure de la base de données, merci de bien vouloir mettre à jour le fichier structure.sql à la racine de votre projet.

**Un projet par personne**. En revanche, rien n'empêche de travailler avec un binôme sur certaines étapes du projet. Par contre, il est bien évident que vous ne devrez pas avoir le même code source que votre binôme. 

Je suis disponible par mail : [nicolas@loeuillet.org](mailto:nicolas@loeuillet.org) (pas pour vous aider à coder par contre)