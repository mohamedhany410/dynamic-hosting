# Dynamic CRUD Application - PHP & MySQL

This repository contains the dynamic version of the project, fully integrated with a MySQL database and hosted on InfinityFree.

## 🌐 Live Link
[http://test-app410.great-site.net/](http://test-app410.great-site.net/)

## ⚙️ Configuration Notes
* The application is connected to an **InfinityFree MySQL database**.
* Database initialization is handled via `install.php` using the `init.sql` script.
* **PDO** is used for secure database interactions.
* **CSRF tokens** are implemented for form security.

## 📂 Project Structure
* `config.php`: Database connection settings.
* `init.sql`: Database schema (Table: users).
* `install.php`: Script to set up the database tables.
* `templates/`: Contains reusable HTML header and footer.
