📄 Documentation du Projet - Gestion des Propriétés et Réservations

1️⃣ Présentation du projet
Ce projet est une application web développée avec Laravel, permettant la gestion des propriétés et des réservations. Il inclut :

Une authentification sécurisée avec Laravel Breeze

Un panneau d’administration basé sur Filament

Un composant Livewire pour gérer les réservations en temps réel

Une interface moderne avec Blade et TailwindCSS

2️⃣ Prérequis

Avant d’installer le projet, assurez-vous d’avoir :

PHP >= 8.1

Composer (Gestionnaire de dépendances PHP)

Node.js >= 16 et NPM

Git pour cloner le dépôt

MySQL ou SQLite comme base de données

Laravel Installer (optionnel)

3️⃣ Installation du projet

📥 1. Cloner le projet

git clone https://github.com/TraoreAminata99/gestion_immobilier.git

cd gestion_immobilier

⚙ 2. Installer les dépendances

composer install

npm install

🔧 3. Configurer l’environnement

Renommez le fichier .env.example en .env

cp .env.example .env

Modifiez le fichier .env avec vos paramètres de base de données :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nom_de_la_bdd
DB_USERNAME=root
DB_PASSWORD=

🛠 4. Générer la clé d’application

php artisan key:generate

🗄 5. Exécuter les migrations et les seeders

php artisan migrate --seed

Cela créera les tables et insérera des données d’exemple.

🚀 6. Lancer le serveur de développement

php artisan serve

L’application sera accessible via http://127.0.0.1:8000

4️⃣ Fonctionnalités principales

✅ Authentification Laravel Breeze

Inscription et connexion sécurisées

Protection des routes avec middleware auth

✅ Gestion des propriétés et réservations

CRUD (Créer, Lire, Modifier, Supprimer) des propriétés

Réservation en temps réel avec Livewire

✅ Panneau d’administration avec Filament

Accessible via : http://127.0.0.1:8000/admin

📌 Identifiants par défaut :

Email : admin@example.com

Mot de passe : password

📌 2. Générer les assets en production

npm run build

📌 3. Configurer un stockage pour les images

php artisan storage:link

Cela permettra d’accéder aux images stockées.


7️⃣ Support et contact

Si vous avez des questions ou rencontrez des problèmes, contactez-moi :

📧 Email : aminata06traore@gmail.com

📞 Téléphone : +33 7 58 56 92 66

💡 Merci d’avoir utilisé cette application ! 😊 🚀

