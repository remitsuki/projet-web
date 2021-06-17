# projet-web


a. afficher la liste de tous les articles (avec un ordre par défaut qui sera
défini par un administrateur du site) ayant une quantité > 0 (1) (fait)
b. ordonner cette liste par nom de l’article (croissant ou décroissant) ou
par prix (croissant ou décroissant aussi) (1+1=2)
c. voir sur un panneau à gauche de la page une liste de filtre. Il pourra
donc filtrer par catégorie de l’article ou par tranche de prix (prix
compris entre min et max) (1+1=2)
d. la liste paginée: on ne pourra pas voir plus de 10 articles par page (le
chiffre est petit pour ne pas avoir besoin de créer beaucoup d’articles
pour tester). S’il essaye d’accéder à une page supérieure au max de
pages qu’il peut avoir, on le renvoie sur la page 1. (1+1=2)
e. s’il choisit de filtrer et/ou trier la liste, le nouveau résultat revient à la
page 1 (1)
f. cacher ou montrer des filtres(1) (fait)
g. ajouter un article à son panier directement depuis la liste (1+1(ajax)=2)
h. accéder à son panier qui devra montrer tous les articles de son panier
avec leurs prix, et la somme totale (1)
i. supprimer un article de son panier (1)
j. s’inscrire au site (vérifier qu’il n’a pas déjà un compte, /!\ email unique)
en donnant: nom, prénom, email et mot de passe (il devra être crypté)
(1)
k. Se connecter au site avec email + mot de passe (toujours crypté) (1)
2. Une fois connecté, l’utilisateur pourra:
a. se déconnecter (1)
b. Valider son panier (/!\ le panier devra être conservé si l’utilisateur vient
juste de connecter) (1)
c. Payer ses articles (un faux payement avec juste une fausse CB) (1)
d. Voir la liste de ses commandes (date, nombre d’articles et total de la
commande) (1)


déclaration d'intention:
-Rémi fait la page de payement
-Duo AbVain on fait le shop avec l'affichage des produits : de a à f
-Saad connexion / inscription
-Felix fait l'administration du site (insertion de produits dans la base)

Chaque dossier comportera un fichier index.php si besoin est (c'est-à-dire si il y a une interface, pas besoin de le mettre si c'est juste des fonctions comme pour config) et d'autre fichier si besoin. D'ailleurs les fonctions seront dans un dossier config dans le dossier en rapport
Administration : permet de supprimer, ajouter, modifier des produits et devra avoir un index.php
Inscription : permet de s'inscrire, contient index.php
Panier : permet de vérifier son panier et accéder au payement, contient index.php
Shop : classifie les produits, permet de les ajouter au panier et de se connecter, contient index.php (a part pour les fonctions de connexion ou pour le panier, il n'y a pas besoin d'autre fichier normalement)
config : ne contient que l'acces à la base de donnée
