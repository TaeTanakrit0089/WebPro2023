<?php

class MyDB extends SQLite3 {
    function __construct() {
        $this->open('customers.db');
    }
}

// Open Database
$db = new MyDB();
if (!$db) {
    echo $db->lastErrorMsg();
} else {
    //echo "Opened database successfully<br>";
}