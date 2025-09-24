# SIELISP  
**Système d’Inscription En Ligne – ISP Gombe**

---

## 📌 Contexte
Le projet **SIELISP** a été conçu dans le cadre d’un **projet tutoré** à l’**Institut Supérieur Pédagogique de la Gombe (ISP-Gombe)**, Section Sciences, Département Sciences Exactes, en L3 Info-Tech (Sciences et Technologies).  

Ce projet vise à **moderniser et optimiser le système d’inscription académique** à l’ISP Gombe en proposant une solution numérique basée sur **Laravel (PHP)** et **MySQL**, avec une interface ergonomique et accessible.  

---

## 👥 Équipe
Projet réalisé par :  
- **KONDE BANZA Joëlle**  
- **BINDA LUSIKILA Voldi**  
- **TABUKULU YOBILA Tegra**  

Sous l’encadrement de :  
- **Prof. KIKOMBA**  
- **Ass. KINDUKULU Rucien**  
- **Ass. NKONGOLO Peter**  

Année académique : **2024–2025**

---

## 🎯 Objectif
Concevoir et développer une application web permettant :  
- L’inscription et la réinscription des étudiants en ligne.  
- La gestion des dossiers et documents étudiants.  
- La validation des dossiers par les agents appariteurs.  
- L’enregistrement des paiements et la génération de reçus par la perception.  
- La supervision et l’administration par un administrateur système.  

---

## 🛠️ Stack technologique
- **Backend** : [Laravel 12+](https://laravel.com) (PHP 8.x)  
- **Base de données** : [MySQL](https://www.mysql.com/)  
- **Frontend** : Blade, [Bootstrap 5](https://getbootstrap.com/) / [TailwindCSS](https://tailwindcss.com/)  
- **ORM** : Eloquent  
- **Authentification** : Laravel Breeze / Laravel UI  
- **PDF** : Laravel DOMPDF (génération des reçus)  
- **Outils de conception** : UML, Figma (maquettes UI/UX)  

---

## 📂 Structure principale du projet
```bash
sielisp/
├── app/                # Code principal (Models, Http/Controllers, Services)
├── bootstrap/          # Bootstrapping du framework
├── config/             # Configurations de l’application
├── database/           
│   ├── migrations/     # Fichiers de migration (structure BD)
│   ├── seeders/        # Données initiales (sections, départements, etc.)
├── public/             # Fichiers accessibles publiquement
├── resources/
│   ├── views/          # Vues Blade (UI)
│   ├── css, js         # Assets frontend
├── routes/
│   ├── web.php         # Routes principales (UI)
│   ├── api.php         # Routes API
├── storage/            # Logs, cache, fichiers uploadés
└── tests/              # Tests unitaires et fonctionnels
````

---

## ⚙️ Installation & exécution

### 1. Prérequis

* PHP >= 8.1
* Composer
* MySQL
* Node.js & npm

### 2. Cloner le projet

```bash
git clone https://github.com/nom-utilisateur/sielisp.git
cd sielisp
```

### 3. Installer les dépendances

```bash
composer install
npm install && npm run dev
```

### 4. Configurer l’environnement

Copier le fichier `.env.example` → `.env` et configurer :

```env
APP_NAME=SIELISP
APP_ENV=local
APP_KEY=base64:...
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sielisp
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Générer la clé Laravel

```bash
php artisan key:generate
```

### 6. Migrer et peupler la base de données

```bash
php artisan migrate --seed
```

### 7. Lancer le serveur local

```bash
php artisan serve
```

Accéder à l’application : **[http://127.0.0.1:8000](http://127.0.0.1:8000)**

---

## 📊 Modules principaux

* **Authentification & rôles** : étudiants, appariteurs, perception, admin.
* **Inscription** : demande en ligne, soumission des documents.
* **Validation documentaire (N1)** : contrôle par appariteur.
* **Paiement & reçus (N2)** : saisie du paiement et génération PDF.
* **Administration** : gestion des sections, départements, options, années académiques.
* **Audit & traçabilité** : historique des actions, suivi des statuts.

---

## 🚀 Déploiement

* Hébergement recommandé : VPS ou hébergeur supportant **Laravel + MySQL** (ex : DigitalOcean, Hostinger, OVH).
* Pour la production :

  ```bash
  php artisan config:cache
  php artisan route:cache
  php artisan migrate --force
  npm run build
  ```

---

## 📚 Références

* **Documentation Laravel** : [https://laravel.com/docs](https://laravel.com/docs)
* **Documentation MySQL** : [https://dev.mysql.com/doc](https://dev.mysql.com/doc)
* **Documentation TailwindCSS** : [https://tailwindcss.com/docs](https://tailwindcss.com/docs)

---

## ✨ Licence

Projet académique – non destiné à un usage commercial sans autorisation de l’ISP Gombe.

---

## 🖋️ Remarque

Ce projet est réalisé **dans le cadre du projet tutoré de la Licence 3 (Info-Tech, Sciences Exactes) à l’ISP-Gombe**.
Il vise à démontrer les compétences en **conception, modélisation et développement logiciel** acquises par les étudiants.

