<?php

// 1. Connect to Database
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('customers.db');
    }
}

// 2_Tum. Open Database
$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    echo "Opened database successfully<br>";
}

// 3. Query Execution
// SQL Statements


// 4. Close database
$db->close();
?>