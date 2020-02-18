<?php

$bdd= new PDO("mysql:host=localhost;dbname=projet_rhum;charset=utf8", "jean-marc", "floride64");


## Etape 2 : premières requêtes unitaires

// 1. Lister les commandes de la table n°10, 
// les trier par date chronologique (SELECT WHERE ORDER BY)

$req1 = ("SELECT * FROM `commandes` WHERE idTable=10 ORDER BY DateCommande ASC");

// 2. Liste les commandes de la table n°10 ou n°6 
// pour le service du midi (AND, OR IN)

$req2 = ("SELECT * FROM `commandes` WHERE idTable IN (10,6) AND idService=1");

// 3. Afficher le nb de commandes passé à la table n°10 (COUNT et AS)

$req3 = ("SELECT COUNT(idTable) FROM `commandes` WHERE idTable=10");

// 4. Afficher le nb de commande passé à la table n°10, pour chacun 
// des services midi et soir (GROUP BY)

$req4 = ("SELECT COUNT(*), idService FROM `commandes` WHERE idTable=10 GROUP BY `idService`");

// 5. Reprendre la requête précédente et remplacer 
// l'id du service par Midi ou Soir (CASE WHEN)

$req5 = ("SELECT COUNT(*), CASE WHEN idService=1 THEN 'Service Du Midi' WHEN idService=2 THEN 'Service du soir' ELSE 'erreur' FROM commandes WHERE idTable=10 GROUP BY idSerivice");

// 6. Afficher les commandes à venir, 
//les trier par date anti-chronologique (NOW)

$req6 = ("SELECT * FROM commandes WHERE DateCommande>now() ORDER BY DateCommande DESC");

// 7 Afficher les commandes du 
//dernier trimestre 2019 (YEAR, MONTH)

$req7 = ("SELECT * FROM commandes WHERE year(DateCommande)=2019 AND month(DataCommande)>=10");

// 8 Reprendre la requête précédente et 
//remplacer la date de commande par le mois 
//et l'année : octobre 2019 (DATE_FORMAT)

$req8 = ("SELECT idCommande, DATE_FORMAT(DateCommande, '%M %Y') FROM commandes WHERE year(DateCommande)=2019 AND month(DateCommande)>=10");

// 9 Afficher le nb de commandes total 
//pour chaque mois de l'année 2019

$req9 = ("SELECT COUNT(*), DATE_FORMAT(DateCommande, '%M %Y') AS Mois FROM commandes WHERE year(DateCommande)=2019 GROUP BY Mois, MONTH(DateCommande) ORDER BY MONTH(DateCommande)");

// 10 Reprendre la requête précédente en 
//n'affichant que les mois pour lesquels il 
//y a au moins 5 commandes (HAVING)

$req10 = ("SELECT COUNT(*), DATE_FORMAT(DateCommande, '%M %Y') AS Mois FROM commandes WHERE year(DateCommande)=2019 GROUP BY Mois, MONTH(DateCommande) HAVING COUNT(*) >=5 ORDER BY MONTH(DateCommande)");

## Etape 3 : sous-requêtes

//Ecrivez les requêtes SQL qui répondent aux demandes ci-dessous, 
//cette fois vous aurez besoin de sous-requêtes :

//1. Lister les noms des employés qui n'ont pris aucune commande

$req11 = ("SELECT * FROM employes WHERE idEmploye NOT IN (SELECT idEmploye FROM commandes)");

//2. Lister les noms des employés qui ont pris plus de 5 commandes en 2019

$req12 = ("SELECT employes.Nom FROM employes WHERE employes.idEmploye IN (SELECT idEmploye FROM commandes WHERE YEAR(dateCommande)=2019 GROUP BY idEmploye HAVING COUNT(*)>5)");

//3. Lister les noms des boissons qui n'ont jamais été commandées

$req13 = ("SELECT * FROM boissons WHERE idBoisson NOT IN (SELECT idBoisson FROM commande_boissons)");

//4. Afficher le nom des boisson qui ont été commandées au moins 10 fois

$req14 = ("SELECT * FROM boissons WHERE idBoisson IN (SELECT idBoisson FROM commande_boissons GROUP BY idBoisson HAVING COUNT(*)>=10)");

## Etape 4 : jointures

// Ecrivez les requêtes SQL qui répondent aux demandes ci-dessous, 
// exclusivement avec de belles jointures :

// 1. Afficher la liste des plats avec comme colonnes : 
// "Plat", "Type" et "Prix" (utilisez des alias)

$req15 = ("SELECT Designation AS Type, LibellePlat AS Plats, concat(PrixVente, ' ','€') AS Prix FROM plats
        INNER JOIN typeplats ON plats.idType = typeplats.idType");

// 2. Afficher chaque menu avec la liste de chaque 
// plat avec son type, ordonné par prix

$req16 = ("SELECT LibellePlat AS Plat, concat(PrixVente, ' ','€') AS Prix, Designation AS Type FROM plats JOIN typeplats ON plats.idType = typeplats.idType ORDER BY PrixVente");

// 3. Afficher pour chaque mois de 2019, le nb de menus commandés et le CA que cela représente

$req17 = ("SELECT DATE_FORMAT(c.DateCommande, '%M %Y') as Mois, 
        count(distinct c.idCommande) as 'nb Commandes',
        count(cm.idmenu) as 'nb Menus',
        concat( FORMAT( SUM(m.PrixVente), 2), '€') as 'CA des menus du mois'
        FROM commandes c
        inner join commande_menus cm on cm.idCommande=c.idCommande
        inner join menus m on m.idMenu=cm.idmenu
        where YEAR(c.DateCommande)=2019 
        group by mois, MONTH(c.DateCommande)
        order by MONTH(c.DateCommande)");

// 4. Afficher aussi les commandes pour lesquels aucun menu n’a été commandé (LEFT JOIN)

$req18 = ("SELECT DATE_FORMAT(c.DateCommande, '%M %Y') as Mois, 
        count(distinct c.idCommande) as 'nb Commandes',
        count(cm.idmenu) as 'nb Menus',
        concat( FORMAT( SUM(m.PrixVente), 2), '€') as 'CA des menus du mois'
        FROM commandes c
        inner join commande_menus cm on cm.idCommande=c.idCommande
        inner join menus m on m.idMenu=cm.idmenu left join commande_menus on cm.idCommande=0
        where YEAR(c.DateCommande)=2019 
        group by mois, MONTH(c.DateCommande)
        order by MONTH(c.DateCommande)");

// 5. Afficher la même chose pour les plats à la carte


// 6. Afficher pour chaque mois de 2019 le CA total hors boisson (menu + plat à la carte)


// Vérifier les résultats de vos requêtes (noms de colonnes y compris ):
