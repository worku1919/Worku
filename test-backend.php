<?php
echo "<h1>Backend Diagnostic Test</h1>";

// Test 1: Can we include the files?
echo "<h2>Test 1: Including Files</h2>";
try {
    require_once 'config/database.php';
    echo "✅ database.php included successfully.<br>";
    
    require_once 'models/Project.php';
    echo "✅ Project.php included successfully.<br>";
} catch (Exception $e) {
    echo "❌ Error including files: " . $e->getMessage() . "<br>";
}

// Test 2: Can we connect to the database?
echo "<h2>Test 2: Database Connection</h2>";
try {
    $pdo = new PDO("mysql:host=" . Config::DB_HOST . ";dbname=" . Config::DB_NAME, Config::DB_USER, Config::DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Database connection successful.<br>";
} catch (PDOException $e) {
    echo "❌ Database connection FAILED: " . $e->getMessage() . "<br>";
    echo "<strong>This is the most likely problem.</strong> Check your database credentials in config/database.php.<br>";
}

// Test 3: Does the 'projects' table exist and have data?
echo "<h2>Test 3: Querying the 'projects' Table</h2>";
if (isset($pdo)) {
    try {
        $stmt = $pdo->query("SELECT COUNT(*) FROM projects");
        $count = $stmt->fetchColumn();
        echo "✅ 'projects' table found. It contains " . $count . " rows.<br>";
        if ($count == 0) {
            echo "<strong>Warning:</strong> The table is empty. You need to add some projects!<br>";
        }
    } catch (PDOException $e) {
        echo "❌ Could not query 'projects' table: " . $e->getMessage() . "<br>";
        echo "<strong>This means the table doesn't exist. Run the SQL from Step 3.</strong><br>";
    }
}

// Test 4: Does the Project::getAll() method work?
echo "<h2>Test 4: Running Project::getAll()</h2>";
try {
    $projects = Project::getAll();
    echo "✅ Project::getAll() executed successfully.<br>";
    echo "It returned " . count($projects) . " projects.<br>";
    if (count($projects) > 0) {
        echo "<pre>";
        print_r($projects[0]); // Show the first project
        echo "</pre>";
    }
} catch (Exception $e) {
    echo "❌ Project::getAll() FAILED: " . $e->getMessage() . "<br>";
}
?>