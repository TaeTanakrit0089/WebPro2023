<?php

$current_question = 1;

// 1. Connect to Database
class MyDB extends SQLite3 {
    function __construct() {
        $this->open('questions.db');
    }
}

// 2. Open Database
$db = new MyDB();

// Read JSON data from the request body
$jsonData = file_get_contents('php://input');

// Decode JSON data
$data_in = json_decode($jsonData, true);


if (isset($data_in['answer'])) {
    $answer = $data_in['answer'];
    $answers = $data_in['answers'];
    $current_question = $data_in['current_question'];

    array_push($answers, $answer);

    $sql = "SELECT MAX(QID) from questions";
    $result = $db->query($sql);
    $row = $result->fetchArray(SQLITE3_ASSOC);

    if ($current_question >= $row['MAX(QID)']) {
        $response = [
            "total_score" => calculatedScore($answers),
            "all_questions" => $row['MAX(QID)']
        ];
        echo json_encode($response);
        return null;
    }


    $row = getData($current_question);
    $response = ["answers" => $answers,
        "current_question" => $current_question,
        "QID" => $row["QID"],
        "Stem" => $row["Stem"],
        "Alt_A" => $row["Alt_A"],
        "Alt_B" => $row["Alt_B"],
        "Alt_C" => $row["Alt_C"],
        "Alt_D" => $row["Alt_D"],
    ];

    // Prepare a JSON response
    echo json_encode($response);

} else {
    $row = getData(0);
    $response = ["answers" => [],
        "current_question" => $current_question,
        "QID" => $row["QID"],
        "Stem" => $row["Stem"],
        "Alt_A" => $row["Alt_A"],
        "Alt_B" => $row["Alt_B"],
        "Alt_C" => $row["Alt_C"],
        "Alt_D" => $row["Alt_D"],
    ];
    echo json_encode($response);
}


function getData($current_question) {
    global $db;
    $sql = "SELECT * from questions where QID = " . ++$current_question;
    $ret = $db->query($sql);
    return $ret->fetchArray(SQLITE3_ASSOC);
}


function calculatedScore($answers) {
    global $db;
    $score = 0;
    foreach ($answers as $index => $value) {
        $sql = "SELECT Correct from questions where QID = " . ($index + 1);
        $result = $db->query($sql);
        $row = $result->fetchArray(SQLITE3_ASSOC); // Fetch the row from the result
        $correctAnswer = $row['Correct'];
        if ($correctAnswer === $value) {
            $score++;
        }
    }

    return $score;
}


// 4. Close database
$db->close();
?>

