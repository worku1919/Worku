<?php
/**
 * Database Configuration
 * This file contains all database connection settings
 */

class Config {
    // Database connection settings
    const DB_HOST = 'localhost';      // Usually 'localhost' for XAMPP
    const DB_NAME = 'goldworku';   // Must match your database name
    const DB_USER = 'root';           // Default XAMPP MySQL username
    const DB_PASS = '';               // Default XAMPP MySQL password (empty)
    
    // Database charset
    const DB_CHARSET = 'utf8mb4';
    
    // PDO options
    const PDO_OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false,
    ];
}
<?php
require_once 'config/database.php';

try {
    // Create connection
    $dsn = "mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME . ";charset=" . Config::DB_CHARSET;
    $pdo = new PDO($dsn, Config::DB_USER, Config::DB_PASS, Config::PDO_OPTIONS);
    
    echo "✅ Database connection successful!";
    echo "<br>Database: " . Config::DB_NAME;
    echo "<br>Host: " . Config::DB_HOST;
    
} catch (PDOException $e) {
    echo "❌ Connection failed: " . $e->getMessage();
}
?>