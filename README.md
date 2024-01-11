<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# laravel-comics-2

## 08/01/2024

oggi create un nuovo progetto Laravel 9 per gestire un archivio di fumetti.

### Milestone 1

Tramite gli appositi comandi artisan create un model con relativa migration e seeder e resource controller.
Editate la resource route

### Milestone 2

Iniziate a definire le prime operazioni CRUD con le relative view dove necessarie:

-   index()
-   show()
-   create()
-   store() (solo dump dei dati)

### Bonus:

Procedere con il salvataggio dei dati sul db

## 09/01/2024

oggi lavorate sulla stessa repo di ieri e completate le operazioni CRUD.

### Bonus:

Aggiungere validazioni e messaggi di errore e alla cancellazione messaggio di conferma all'utente

## 10/01/2024

sempre lavorando sulla repo di ieri, potete aggiungere le validazioni in modo da rendere più stabile il vostro gestionale di fumetti. Validare gli input ricevuti in fase di creazione e modifica, rispondendo con errori chiari e in italiano.

### Bonus:

utilizzare le Request personalizzate per validare i dati
aggiungere conferma alla cancellazione degli elementi
aggiungere un filtro a vostra scelta per i dati dei comics

## installazione Laravel

'''bash

cd your parent_folder_path

composer create-project laravel/laravel:^9.2 nome-progetto

cd nome-progetto

//entro nel progetto

code . -r
(oppure apro cartella normalmente)

php artisan serve

se parte -> clear
'''

## configurazione Laravel

'''bash
composer require pacificdev/laravel_9_preset

php artisan preset:ui bootstrap

npm install

npm install --save @fortawesome/fontawesome-free

'~@fortawesome': path.resolve(\_\_dirname, 'node_modules/@fortawesome'),
'''
