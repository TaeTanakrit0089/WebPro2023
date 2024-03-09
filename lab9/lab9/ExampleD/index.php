<?php
    include('../connectDB.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example-D</title>
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
    <style>
        body {
            font-size: 20px;
            margin: 20px;
            background-image: url(../stone.gif);
        }

        div {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin: 10px;
            padding: 20px;
            background-color: white;
            border-radius: 30px;
        }
    </style>
</head>

<body>
<div>
    <h1 style="text-align: center; padding: 30px;">Course and Section</h1>
    <table class="table">
        <tr>
            <th>Course ID</th>
            <th>Course Tite</th>
            <th>Dept. Name</th>
            <th>Year</th>
            <th>Semester</th>
            <th>Building</th>
        </tr>
        <?php
            $sql = "SELECT course.course_id, course.title, course.dept_name, section.year, section.semester, section.building
        FROM course
        JOIN section 
        ON course.course_id = section.course_id ";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["course_id"] . "</td>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["dept_name"] . "</td>";
                    echo "<td>" . $row["year"] . "</td>";
                    echo "<td>" . $row["semester"] . "</td>";
                    echo "<td>" . $row["building"] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
        ?>
    </table>
</div>


</body>

</html>