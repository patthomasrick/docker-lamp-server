<?php

const DB_HOST = "db";
const DB_USER = "root";
const DB_PASS = "secret";
const DB_DATABASE = "app1";

try {
    $conn = new \PDO(
        // "mysql:host=$host;dbname=$db"
        sprintf("mysql:host=%s;dbname=%s", DB_HOST, DB_DATABASE),
        DB_USER,
        DB_PASS
    );
    $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

phpinfo();
