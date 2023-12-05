<?php
// DB credentials.
define('DB_HOST', 'jyosql.mysql.database.azure.com');
define('DB_USER', 'jyo');
define('DB_PASS', 'qwerty@12345');
define('DB_NAME', 'bbdms');

// Establish database connection.
try {
    $dbh = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER,
        DB_PASS,
        array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error reporting
            PDO::ATTR_EMULATE_PREPARES => false, // Disable prepared statement emulation
        )
    );
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>
