<?php
    session_start();

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
    $sql = "SELECT * from user";
    $ret = $db->query($sql);

    $message = "";
    // Register
    if (isset($_POST["name"])) {
        $is_exist = false;
        $form_username = $_POST["username"];
        $form_password = $_POST["password"];
        $form_name = $_POST["name"];

        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if (strcmp($row['username'], $form_username) == 0) {
                $is_exist = true;
                break;
            }
        }

        if ($is_exist)
            $message = "The username already exist";
        else {
            $sql = <<<EOF
       INSERT INTO user (username, password, name)
       VALUES ('$form_username', '$form_password', '$form_name');
       EOF;

            $ret = $db->exec($sql);
            $message = "Created " . $form_username;
        }
    } else if (isset($_POST["username"])) {
        $form_username = $_POST["username"];
        $form_password = $_POST["password"];
        $message = "Log in Fail";

        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if (strcmp($row['username'], $form_username) == 0 && strcmp($row['password'], $form_password) == 0) {
                $sesid = session_id();
                $_SESSION['sid'] = $sesid;
                $_SESSION['username'] = $form_username;
                $_SESSION['password'] = $form_password;
                $message = "Log in Success";
                break;
            }
        }
    }


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
<div class="d-flex flex-column justify-content-center text-center" style="height: 100vh">
    <h1 class="text-center text-xxl-center"><?php
            echo $message; ?></h1>
    <a href="index.php">
        <button class="btn-primary btn mt-2">Go back</button>
    </a>
</div>
</body>
</html>
