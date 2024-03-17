<?php

    // 1. Connect to Database
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('questions.db');
        }
    }

    // 2. Open Database
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "Opened database successfully<br>";
    }

    // 3. Query Execution
    // SQL Statements
    $sql = "SELECT * from questions";
    $ret = $db->query($sql);

    while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
        echo " " . $row['QID'] . " ";
        echo " " . $row['Stem'] . " ";
        echo " " . $row['Alt_D'] . "<br>";
    }

    echo "Operation done successfully<br>";

    // 4. Close database
    $db->close();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>65070089</title>
</head>
<body>

</body>
</html>
