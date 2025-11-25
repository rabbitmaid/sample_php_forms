# PHP Forms

A simple PHP sample application to demonstrate user registration and listing using plain PHP + MySQL.

This project contains a registration form, a users listing page, and a small demo database schema and data. It's intentionally lightweight and built for learning, experimentation, and as a starting point for more robust applications.

---

## 🔧 Features

- User registration form (HTML form)
- Server-side input validation and sanitization
- Password hashing with PHP `password_hash()`
- Prepared statements using mysqli to prevent SQL injection
- Simple success/error notices driven by PHP session messages and a tiny JS helper
- Simple user listing with basic styling
- SQL schema and sample data included

---

## 🧩 Prerequisites

- Windows (development environment shown here; works the same on macOS/Linux)
- XAMPP (Apache, MySQL) or an equivalent PHP + MySQL setup
- PHP 8.x or higher (project uses `password_hash()` and other built-ins) 
- Optional: phpMyAdmin or MySQL client to import SQL

---

## 🚀 Quick Start — Run locally with XAMPP

1. Copy the repository folder into the `htdocs` directory of XAMPP. For example:

```powershell
# If you cloned here already to c:\xampp\htdocs, nothing to do. Otherwise, copy files into htdocs.
# Example (PowerShell):
Copy-Item -Path "C:\path\to\sample_php_forms\*" -Destination "C:\xampp\htdocs\phpforms\" -Recurse
```

2. Start Apache and MySQL via the XAMPP control panel.

3. Create the database and import the provided schema and sample data.

phpMyAdmin option:
- Open `http://localhost/phpmyadmin` and import `database/phpforms.sql` (choose 'Import' → select file).

Command‑line option (PowerShell):

```powershell
# Create database (if it doesn't exist) and import
mysql -u root -p -e "CREATE DATABASE IF NOT EXISTS phpforms;"
mysql -u root -p phpforms < "C:\xampp\htdocs\phpforms\database\phpforms.sql"
```

Note: The project uses a default DB configuration in `config.php` (`root` / empty password and database `phpforms`). If you use different credentials, update `config.php`.

4. Configure DB credentials (if needed):
- Edit `config.php` and set `hostname`, `username`, `password`, and `database` appropriately.

Example `config.php`:
```php
<?php
return [
  "hostname" => "localhost",
  "username" => "root",
  "password" => "",
  "database" => "phpforms" 
];
```

5. Visit the app in your browser:
- Registration form: `http://localhost/phpforms/` (opens `index.php`)
- Users listing: `http://localhost/phpforms/users.php`

---

## 🔎 Project Layout

- `index.php` - Registration form view
- `register.php` - Form processing, validation, and DB save logic
- `users.php` - Simple user listing
- `config.php` - Database configuration (returning an array)
- `database.php` - Opens the mysqli connection using `config.php` settings
- `functions.php` - Helper functions (validation, redirect, debug)
- `main.js` - Small script that hides notices after a timeout
- `style.css` - Minimal styling for notices and tables
- `templates/notice.php` - Notification block for success/error messages
- `database/phpforms.sql` - SQL dump containing schema and sample data
- `notes.txt` - Developer notes / field mappings

---

## ⚠️ Security & Recommendations

This project is a simple educational example and not production-ready. Consider the following improvements before using it in production:

- Add CSRF protection to forms (tokens or same-site cookies).
- Escape all output on the page where user-derived values are displayed (e.g., `htmlspecialchars()` for table values on `users.php`) to prevent XSS.
- Use HTTPS in production to protect credentials and session cookies.
- Consider using PDO with explicit error handling or a DB abstraction layer to unify error handling and make prepared statements easier across drivers.
- Add server-side validation and stricter input constraints (length checks, format checks).
- Rate-limit registration endpoints to prevent abuse or spam registrations.
- Use environment variables or a more secure store for DB credentials rather than a repository file for sensitive data.

---

## 🛠️ Common Troubleshooting

- Database connection error: Check `config.php` to ensure your DB credentials are correct and MySQL is running.
- `404` on `index.php`: Ensure the project folder exists under `htdocs` and that Apache has permission to serve it.
- Blank pages: Check your PHP error log (or enable display_errors for local dev).

---

## ✨ Improvements & Feature Ideas

- Add a login page and authentication (sessions + login/logout)
- Add update/delete user functionality (with confirm flows and protection)
- Add search and pagination to the users list
- Add client-side validation and better UX/feedback

---

## 🤝 Contributing

Contributions and suggestions are welcome. Please open an issue if you find a bug or want to propose a feature.

---

## 📜 License

This project is licensed under the MIT License — see the `LICENSE` file for details.



