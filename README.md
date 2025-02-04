# Workopia - Job Board Website

## Overview
Workopia is a job board web application built from the ground up using Vanilla PHP. It provides a structured, Laravel-like architecture while maintaining a lightweight and efficient codebase. The platform allows users to browse job listings, apply for positions, and employers to post and manage job openings.

## Features
- **User Authentication**: Secure registration, login, and logout functionality.
- **CRUD Operations**: Create, Read, Update, and Delete job listings.
- **Validation**: Server-side validation for user inputs.
- **Database Integration**: Uses MySQL for data storage and retrieval.
- **Search Functionality**: Users can search for jobs using keywords.
- **Secure Sessions**: Protects against session hijacking and unauthorized access.
- **Tailwind CSS**: Modern styling with utility-first CSS framework.

## Technologies Used
- **PHP** (Vanilla, no frameworks)
- **MySQL** (Database storage and interactions)
- **Tailwind CSS** (For styling and responsiveness)
- **Composer** (Dependency management)

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/workopia.git
   cd workopia
   ```
2. Install dependencies:
   ```bash
   composer install
   ```
3. Configure the database:
   - Import the `database.sql` file into MySQL.
   - Update `config/db.php` with your database credentials.

4. Start a local PHP server:
   ```bash
   php -S localhost:8000 -t public
   ```
5. Open `http://localhost:8000` in your browser.

## Folder Structure
```
.gitignore
App/
  App/controllers/
    ErrorController.php
    HomeController.php
    ListingController.php
    UserController.php
  App/views/
    error.view.php
    App/views/errors/
      403.view.php
      404.view.php
    home.view.php
    App/views/listings/
      create.view.php
      edit.view.php
      index.view.php
      show.view.php
    App/views/partials/
      bottom-banner.php
      errors.php
      footer.php
      head.php
      message.php
      navbar.php
      showcase-search.php
      top-banner.php
    App/views/users/
      create.view.php
      login.view.php
Framework/
  Authorization.php
  Database.php
  Router.php
  Session.php
  Validation.php
  Framework/middleware/
    Authorize.php
composer.json
composer.lock
config/
  db.php
helpers.php
public/
  public/css/
    style.css
  public/images/
    showcase.jpg
  index.php
routes.php
vendor/
  autoload.php
  vendor/composer/
    ClassLoader.php
    InstalledVersions.php
    LICENSE
    autoload_classmap.php
    autoload_namespaces.php
    autoload_psr4.php
    autoload_real.php
    autoload_static.php
    installed.json
    installed.php
```

## Database Schema
```sql
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `listings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `salary` varchar(45) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `company` varchar(45) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `requirements` longtext,
  `benefits` longtext,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_listings_users_idx` (`user_id`),
  CONSTRAINT `fk_listings_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

## Security Considerations
- **Password Hashing**: Uses `password_hash()` for secure password storage.
- **Prepared Statements**: Prevents SQL Injection in database queries.
- **Session Handling**: Ensures proper user authentication and logout.

## Future Enhancements
- **Admin Panel** for managing job postings and users.
- **Email Notifications** for job applications.
- **File Uploads** for resumes.

## License
This project is open-source and available under the MIT License.

