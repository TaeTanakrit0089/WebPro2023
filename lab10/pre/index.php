<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 10</title>
</head>
<body>

<?php

// 1. Connect to Database
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('lab10-file.db');
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
//$sql = "CREATE TABLE questions (
//QID INTEGER PRIMARY KEY AUTOINCREMENT,
//Stem VARCHAR(150) NOT NULL,
//Alt_A VARCHAR(50) NOT NULL,
//Alt_B VARCHAR(50) NOT NULL,
//Alt_C VARCHAR(50) NOT NULL,
//Alt_D VARCHAR(50) NOT NULL,
//Correct VARCHAR(3) NOT NULL
//);";

//$sql = "INSERT INTO questions (Stem, Alt_A, Alt_B, Alt_C, Alt_D, Correct)
//VALUES ('What is the full form of SQL?','Structured Query List',
//'Structure Query Language','Sample Query Language',
//'None of these','B');";
//
//$ret = $db->exec($sql);
//if (!$ret) {
//    echo $db->lastErrorMsg();
//} else {
//    echo "Table created successfully<br>";
//}


$sql = "SELECT * from questions";
$ret = $db->query($sql);

while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
    echo " " . $row['QID'] . " ";
    echo " " . $row['Stem'] . " ";
    echo " " . $row['Alt_A'] . "<br>";
    echo " " . $row['Alt_B'] . "<br>";
    echo " " . $row['Alt_C'] . "<br>";
    echo " " . $row['Alt_D'] . "<br>";
    echo " " . $row['Correct'] . "<br>";
}

echo "Operation done successfully<br>";

// 4. Close database
$db->close();

?>

</body>
</html>