CakePhp3Photos
=======

[![CakePhp3Photos](http://radeff.red//pics/photos/app_photo_russe.jpg)](CakePhp3Photos)

un organisateur personnel web très simple pour vos photos personnelles

a very simple personal photo organizer

## Histoire / history
Depuis des années, je rame avec mes photos personnelles: logiciels inadéquants, pas interfacés web etc.

Le meilleur que j'ai trouvé reste piwigo, mais même cet excellent outil open-source, 
s'il gère très bien des collections extérieures d'images, est très peu performant
lorsqu'il s'agit de gérer ma collection de photos personnelles.

Ce logiciel permet de générer en quelques secondes un catalogue de vos photos et de tager chaque photo

Note: version 0.0.1... il manque plein de choses! Voir Roadmap

## RoadMap
- moteur de recherche
- affiche photos selon tag
- nouveautés + flux rss
- permissions (public, amis, privé etc.)
- partager les photos, autoriser du tagging etc.

## Installation
- faire une copie de vos photos
- vous rendre dans le répertoire copié
- lancer le script create_original_collection.sh
- créer la base de données cake3_photos
- y importer le fichier create_original_collection.csv
- modifier vos valeurs pour config/app.php (connexion à la base de données)
- modifier vos valeurs pour config/paths.php (répertoires, serveurs etc)
- lancer le site avec http://votre_nom_de_domaine/votre_repertoire/photos


Required
=======
AMP (Apache, MySQL et PHP)
cakePHP 3 see infra

# CakePHP Application Skeleton

[![Build Status](https://img.shields.io/travis/cakephp/app/master.svg?style=flat-square)](https://travis-ci.org/cakephp/app)
[![License](https://img.shields.io/packagist/l/cakephp/app.svg?style=flat-square)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

# Copyright & Package info
* @package CakePhp3Photos
* @version $Id: 0.0.1
* @author Fred Radeff <fradeff@akademia.ch>
* @copyright (c) 2016 Fred Radeff, akademia.ch
* @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
