<?php
    session_start();
    if (!isset($_SESSION["problem_number"]))
        header("Location:index.php");
    $message = "";

    class MyDB extends SQLite3 {
        function __construct() {
            $this->open('questions.db');
        }
    }

    function find_answer($number) {
        // 1. Connect to Database


        $db = new MyDB();

        $sql = "SELECT Correct from questions where QID = " . ($number + 1);
        $result = $db->query($sql);
        $row = $result->fetchArray(SQLITE3_ASSOC); // Fetch the row from the result
        $correctAnswer = $row['Correct'];

        $db->close();

        return $correctAnswer;
    }

    $all_answers = $_SESSION['answers'];
    $i = 0;
    $score = 0;
    foreach ($all_answers as $num) {
        $correct_answer = find_answer($i++);
        if (!strcmp($correct_answer, $num))
            $score++;
    }

    $message = $score;

    $db = new MyDB();
    $userid = $_SESSION["userid"];

    $sql = $sql = <<<EOF
   UPDATE user
   SET score = $score
   WHERE id = $userid
   EOF;
    $result = $db->exec($sql);

    $db->close();

    unset($_SESSION["problem_number"]);
    unset($_SESSION["answers"]);

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
    <h1 class="text-center text-xxl-center">Your score is : <?php
            echo $message; ?></h1>
    <a href="index.php">
        <button class="btn-primary btn mt-2">Go back</button>
    </a>
</div>
</body>
</html>

