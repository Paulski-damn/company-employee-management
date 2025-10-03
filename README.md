# Company & Employee Management System

This is a **Laravel-based system** for managing companies and their employees. It allows administrators to:

* Create, read, update, and delete **companies** and **employees**.
* Upload company logos (with minimum dimensions 100x100).
* Automatically assign employees to companies.
* Paginate company and employee lists (10 entries per page).
* Basic authentication for admin users.

---

## Prerequisites

Before running the system, ensure you have:

* PHP >= 8.x
* Composer
* MySQL or MariaDB
* Node.js & npm (for compiling frontend assets)
* Git

---

## Installation and Setup

Follow these steps to run the system locally with the existing data:

### 1. Clone the Repository

```bash
git clone <your-repo-url>
cd <repository-folder>
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies (for frontend assets)

```bash
npm install
npm run dev
```

### 4. Copy `.env` File

```bash
cp .env.example .env
```

Edit the `.env` file and set your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=qxitinterviewdb
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Generate Application Key

```bash
php artisan key:generate
```

### 6. Import Existing Database Data

If you already have a database backup, import it (replace `backup.sql` with your file):

```bash
mysql -u your_db_user -p your_database_name < backup.sql
```

> Ensure the `DB_DATABASE` in `.env` matches the imported database.

### 7. Run Migrations (optional)

If you want to ensure the schema is up to date:

```bash
php artisan migrate
```

> This will not overwrite your existing data if tables already exist.

### 8. Seed the Database (optional)

If you want default users or demo data:

```bash
php artisan db:seed
```

### 9. Serve the Application

```bash
php artisan serve
```

The system will be accessible at `http://127.0.0.1:8000`.

---

## Default Admin Account

* **Email:** `qxit@quantumx.com`
* **Password:** `interview@qxit`

> Use this account to log in and manage companies and employees.

---

## Notes

* Make sure `storage` and `bootstrap/cache` folders are writable:

```bash
chmod -R 775 storage bootstrap/cache
```

* Company logos must meet the minimum size requirement: **100x100 pixels**.
* Laravel validation and pagination are implemented for smooth user experience.
* Run `composer dump-autoload` if VSCode or IDE shows errors, but the system runs fine.

---

## Troubleshooting

* **Red lines in VSCode / IntelliSense errors:** Often caused by IDE not recognizing Laravel facades. Fix with:

```bash
composer dump-autoload
```

* **Assets not compiling:** Ensure Node and npm are installed, then run:

```bash
npm run dev
```

* **Database connection errors:** Double-check your `.env` credentials and ensure MySQL is running.

---

This README allows anyone to **clone the repo, import your existing data, and run the system immediately**.
