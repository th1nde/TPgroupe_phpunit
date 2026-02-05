# 🚀 TP Groupe PHPUnit

## 📋 Prérequis

* **PHP** : 8.5+
* **Composer** : Dernière version
* **Extensions PHP** : `mbstring`, `xml`

## 🛠️ Installation

1.  Cloner le projet :
    ```bash
    git clone [https://github.com/ton-repo/projet.git](https://github.com/ton-repo/projet.git)
    cd projet
    ```

2.  Installer les dépendances :
    ```bash
    composer install
    ```

## 🧪 Lancer les Tests

Le projet utilise **PHPUnit 12**. Pour exécuter la suite de tests et valider les règles métiers (énergie, munitions, soute) :

```bash
vendor/bin/phpunit
```

> **Note :** Le fichier de configuration `phpunit.xml` est inclus à la racine pour automatiser les options.

## 📂 Arborescence

```text
TPgroupe_phpunit/
├── .github/
│   └── workflows/      # Pipeline CI (GitHub Actions)
├── src/
│   └── Entities/       # Classes Métiers (Flotte, Combat, Transport)
├── tests/              # Tests Unitaires (VaisseauTest.php)
├── composer.json/lock  # Définition du projet et autoloading
└── phpunit.xml         # Configuration de la suite de tests
```

## 👥 Auteurs

* Arnaud
* Mathys
* Enzo