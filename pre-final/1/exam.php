<?php
    session_start();

    if (!isset($_SESSION["userid"]))
        header('Location:index.php');
    if (!isset($_SESSION["problem_number"])) {
        $_SESSION["problem_number"] = 0;
        $_SESSION["answers"] = array();
    }

    // 1. Connect to Database
    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('questions.db');
        }
    }

    // 2. Open Database
    $db = new MyDB();

    $sql = "SELECT MAX(QID) from questions";
    $result = $db->query($sql);
    $row = $result->fetchArray(SQLITE3_ASSOC);
    $all_question = $row['MAX(QID)'];

    //    echo $_SESSION["problem_number"];
    //    echo $all_question;
    //    echo '<br>';

    if ($_SESSION["problem_number"] >= $all_question - 1) {
        header("Location:calculated_score.php");
        $db->close();
    } else {
        if (isset($_POST['answer'])) {
            $_SESSION["answers"][] = $_POST['answer'];
            $_SESSION["problem_number"] += 1;
        }
        $sql = "SELECT * from questions";
        $result = $db->query($sql);
        $row_question = $result->fetchArray(SQLITE3_ASSOC);
        for ($i = 0; $i < $_SESSION["problem_number"]; $i++) {
            $row_question = $result->fetchArray(SQLITE3_ASSOC);
        };
    }

    $db->close();
    //    echo $_SESSION["problem_number"] . '<br>';
    //    print_r($_SESSION["answers"]);

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
    <div id="question" class="mt-4 quiz-container  blur-effect">
        <h1 class="">Quiz</h1>
        <form class="mt-3" id="myForm" method="post">
            <h3 id="q_problem"><?php
                    echo $row_question['QID'] . ') ' . $row_question['Stem'] ?></h3>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_a" name="answer" value="A">
                <label class="form-check-label" for="ืchoice_a" id="q_a">
                    <?php
                        echo $row_question['Alt_A'] ?>
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_b" name="answer" value="B">
                <label class="form-check-label" for="ืchoice_b" id="q_b"><?php
                        echo $row_question['Alt_B'] ?></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_c" name="answer" value="C">
                <label class="form-check-label" for="ืchoice_c" id="q_c"><?php
                        echo $row_question['Alt_C'] ?></label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" id="ืchoice_d" name="answer" value="D">
                <label class="form-check-label" for="ืchoice_d" id="q_d"><?php
                        echo $row_question['Alt_D'] ?></label>
            </div>
            <input class="btn btn-primary mt-3" type="submit" id="submitBtn" name="submitBtn"
                   value="Submit">
        </form>
    </div>
</div>
