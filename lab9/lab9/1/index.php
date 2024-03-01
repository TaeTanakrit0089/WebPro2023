<?php
include('../connectDB.php');

$course_id = "";
$name = "";
$dept_name = "";
$salary = "";
$error = "";

if (isset($_POST['submit']) && isset($_POST['recordNumber'])) {
    $recordNumber = $_POST['recordNumber'];

    $sql = "SELECT * FROM instructor;";
    $result = mysqli_query($conn, $sql);

    if ($recordNumber > mysqli_num_rows($result) || $recordNumber <= 0) {
        $error = "Error: Invalid Record Number";
    }

    if ($result && mysqli_num_rows($result) > 0) {
        for ($i = 0; $row = mysqli_fetch_assoc($result); $i++) {
            if (($i + 1) == $recordNumber) {
                $course_id = $row["ID"];
                $name = $row["name"];
                $dept_name = $row["dept_name"];
                $salary = $row["salary"];
                break;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9-1</title>
    <style>
        body {
            font-size: 20px;
            margin: 20px;
            background-image: url(../stone.gif);
        }

        .body-container {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin: 30px;
            padding: 40px;
            background-color: white;
            border-radius: 30px;
        }

        .button {
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 30px;
        }
    </style>
</head>

<body>
<div class="body-container">
    <h1>Instructor Info</h1>
    <span style="color: red; padding: 20px;"><?php
        echo $error ?></span>
    <div style="padding-left: 40px; padding-top: 10px">
        <form method="post" action="index.php">
            <label>Instructor ID: <span style="color: red;"><?php
                    echo $course_id; ?></span> </label> <br><br>
            <label>Name: <span style="color: red;"><?php
                    echo $name; ?></span></label> <br><br>
            <label>Dept Name: <span style="color: red;"><?php
                    echo $dept_name; ?></span></label> <br><br>
            <label>Salary: <span style="color: red;"><?php
                    echo $salary; ?></span></label> <br><br>
            <label>Enter a record number:</label>
            <input type="number" id="recordNumber" name="recordNumber"><br><br>
            <button class="button" type="submit" id="submit" name="submit" value="submit">Display</button>
        </form>
    </div>
</div>

<?php
mysqli_close($conn);
?>
</body>

</html>