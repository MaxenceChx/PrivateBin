# R5-RA-07 - Automatisation de la production | AIL2

Maxence CHAIX | maxence.chaix1@etu.univ-lorraine.fr  
Alex COLLIN | alex.collin7@etu.univ-lorraine.fr
# Compte-Rendu

## TP1 : Introduction aux Tests Unitaires

Dans ce premier TP, nous avons récupéré le dossier PrivateBin depuis votre dépôt. Nous avons ensuite tenté d'exécuter directement les tests unitaires présents. Cependant, cela n'a pas fonctionné en raison de l'absence des dépendances nécessaires. Cette expérience nous a permis d'apprendre à interpréter les messages d'erreur, à identifier les dépendances manquantes et à les ajouter au projet pour assurer le bon fonctionnement des tests.

## TP2 : Intégration Continue avec GitHub Actions

Une fois les tests corrigés et les dépendances ajoutées, nous avons appris à rédiger un fichier YAML (.yml) pour GitHub Actions. Ce fichier permet d'automatiser l'exécution des tests à chaque commit, vérifiant ainsi leur bon fonctionnement. Cette automatisation offre plusieurs avantages :

- Elle garantit que chaque commit ou pull request déclenche des vérifications de qualité
- Elle permet d'identifier rapidement les problèmes, améliorant ainsi la collaboration et la sécurité du code
- Elle facilite le déploiement en assurant que le code testé est prêt pour la production
- Elle améliore l'efficacité en réduisant le besoin de tests manuels constants

## TP3 : Code Coverage et Automatisation des Rapports

Dans ce TP, nous avons appris à :

- Exécuter simultanément les tests PHP et l'analyse de couverture de code (Code Coverage)
- Récupérer la sortie de cette analyse sous plusieurs formats (.txt, .xml, etc.)
- Utiliser une action GitHub pour générer automatiquement un compte-rendu en Markdown au sein de notre projet

Le Code Coverage présente plusieurs avantages :

- Il aide à identifier les zones de code non testées
- Il améliore la qualité du code
- Il constitue un bon indicateur de la qualité du projet

Cependant, il est important de noter que le Code Coverage ne doit pas être l'unique critère de confiance. En effet, bien qu'il indique le pourcentage de code testé, il ne permet pas de déterminer la qualité des tests. Un Code Coverage élevé ne garantit donc pas nécessairement que le code soit bien testé.

## TP4 : Analyse Statique du Code et Automatisation avec CI

Dans ce TP, nous avons exploré l'automatisation de l'analyse statique du code via trois outils principaux : PHPCS, PHPMD et PHPStan. Ces outils permettent d'identifier et de corriger des erreurs de style, de syntaxe, et des problèmes potentiels de performance et de sécurité.

Nous avons appris à :

- Installer et configurer PHPCS pour s'assurer que notre code respecte les standards (comme PSR-12).
- Utiliser PHPMD pour détecter des problèmes plus profonds, comme la complexité cyclomatique et les méthodes trop longues.
- Exécuter PHPStan pour identifier les erreurs logiques et autres vulnérabilités.
- Intégrer ces outils dans un workflow GitHub Actions afin de lancer automatiquement les analyses statiques à chaque commit.

Cette démarche nous a permis de :

- Uniformiser le style de notre code et garantir la qualité du projet.
- Identifier des erreurs avant même l'exécution du code.
- Optimiser le processus de refactorisation et réduire les risques de régression.

Nous avons également corrigé plusieurs erreurs détectées, améliorant ainsi la robustesse et la lisibilité du projet.

## TP5 : Déploiement Continu avec GitHub Actions

Ce TP nous a introduits aux principes et aux pratiques du déploiement continu, un processus qui permet de livrer rapidement et de manière fiable des applications aux utilisateurs finaux. Nous avons travaillé sur plusieurs concepts clés tels que la séparation des environnements (développement, pré-production, production) et l'importance d'automatiser le déploiement pour chaque branche appropriée.

Nous avons appris à :

- Créer des secrets dans GitHub (URL du FTP, login, mot de passe) pour garantir la sécurité des informations sensibles.
- Ajouter une action GitHub pour automatiser le déploiement du site web sur un serveur FTP en utilisant l'action *Ftp Deploy*.
- Mettre en place un workflow complet de déploiement continu, automatisant la mise à jour du site après chaque modification du code sur la branche principale.

Cette approche nous permet de :

- Assurer des déploiements fréquents et fiables, avec un retour rapide sur les nouvelles fonctionnalités.
- Gagner du temps et de la confiance dans le processus de livraison du code.
- Minimiser les risques d'erreurs humaines en automatisant la mise en production.

## Fichier CI :
[Le fichier est disponible ici](.github/workflows/ci.yml)

Le résultat est le suivant :
![image](https://github.com/user-attachments/assets/cb8e08e4-52a7-4b1a-a767-b566644f4c7a)
