# Task Manager Project Setup

## Database Setup
1. Create a database named: `task_manager`
2. Import the SQL file located at: `sql/task_manager.sql`  
   (Use phpMyAdmin or MySQL command line)

## CodeIgniter Configuration
1. Open `application/config/database.php`
2. Update your database credentials:
   ```php
   'username' => 'your_db_username',
   'password' => 'your_db_password',
   'database' => 'task_manager'
