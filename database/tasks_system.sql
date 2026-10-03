-- Tasks for Today Management System database export
-- The CodeIgniter migration and seeder are the recommended setup method.
CREATE TABLE users (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, username VARCHAR(50) NOT NULL UNIQUE, full_name VARCHAR(120) NOT NULL, email VARCHAR(120) NOT NULL, password VARCHAR(255) NOT NULL, created_at DATETIME NULL, updated_at DATETIME NULL);
CREATE TABLE tasks (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, title VARCHAR(150) NOT NULL, description TEXT NULL, task_date DATE NOT NULL, status VARCHAR(30) NOT NULL DEFAULT 'Pending', is_archived TINYINT(1) NOT NULL DEFAULT 0, created_at DATETIME NULL, updated_at DATETIME NULL);
-- Run php spark db:seed TasksSeeder to create the demo account and sample tasks.
