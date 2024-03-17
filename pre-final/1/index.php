<?php
    // Start the session
    session_start();
    unset($_SESSION["problem_number"]);
    $sesid = session_id();
    // display Session ID

    // 1. Connect to Database
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('questions.db');
        }
    }

    // 2. Open Database
    $db = new MyDB();
    //    if (!$db) {
    //        echo $db->lastErrorMsg();
    //    } else {
    //        echo "Opened database successfully<br>";
    //    }

    // 3. Query Execution
    // SQL Statements


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
    <title>Document</title>

    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div>
    <a href="login.php">
        <button>login</button>
    </a>
    <a href="register.php">
        <button>register</button>
    </a>
    <a href="logout.php">
        <button>logout</button>
    </a>
    <a href="exam.php">
        <button>exam</button>
    </a>
</div>

<?php
    if (isset($_SESSION['sid']) && $_SESSION['sid'] == $sesid) {
        echo '<h1>This account is already logged in.' . ' ' . ' </h1 > ';
    } else {
        echo '<h1 > You are not logged in .</h1 > ';
    } ?>
</body>
</html>
