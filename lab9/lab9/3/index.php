<?php
    include('../connectDB.php');

    $noti = "";
    $class = "";

    if (isset($_POST['submit'])) {
        $action = $_POST['submit'];

        if ($action == 'Update') {
            $courseID = $_POST['courseID'];
            $title = $_POST['title'];
            $departmentName = $_POST['departmentName'];
            $credits = $_POST['credits'];

            $sql = "UPDATE course
                SET title = '$title', dept_name = '$departmentName', credits = '$credits'
                WHERE course_id = '$courseID'";

            if (mysqli_query($conn, $sql)) {
                $noti = "Record Deleted Successfully";
                $class = "alert alert-success";
            } else {
                $noti = "Record Delete Failed";
                $class = "alert alert-danger";
            }
        } elseif ($action == 'Delete') {
            $courseID = $_POST['courseID'];

            $sql = "DELETE FROM course WHERE course_id = '$courseID'";

            if (mysqli_query($conn, $sql)) {
                $noti = "Record Deleted Successfully";
                $class = "alert alert-success";
            } else {
                $noti = "Record Delete Failed";
                $class = "alert alert-danger";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab9-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .body-container {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            margin: 30px;
            padding: 40px;
            background-color: white;
            border-radius: 30px;
        }

        body {
            font-size: 20px;
            margin: 20px;
            background-image: url(../stone.gif);
        }
    </style>
</head>

<body>
<div class="body-container">
    <div class="container">
        <div>
            <h1>Course Details</h1>
            <div <?php
                echo 'class="' . $class . '"' ?> role="alert" style="padding: 10px; margin: 10px;">
                <?php
                    echo $noti ?>
            </div>
            <form method="post">
                <div class="form-group" style="padding-bottom: 15px">
                    <label>Course ID:</label>
                    <input type="text" name="courseID" class="form-control"
                           value="<?php
                               if (isset($_GET['selectedID'])) {
                                   echo $_GET['selectedID'];
                               } ?>">
                </div>
                <div class="form-group" style="padding-bottom: 15px">
                    <label>Title:</label>
                    <input type="text" name="title" class="form-control" value="<?php
                        if (isset($_GET['title'])) {
                            echo $_GET['title'];
                        } ?>">
                </div>
                <div class="form-group" style="padding-bottom: 15px">
                    <label>Department Name:</label>
                    <input type="text" name="departmentName" class="form-control"
                           value="<?php
                               if (isset($_GET['dept_name'])) {
                                   echo $_GET['dept_name'];
                               } ?>">
                </div>
                <div class="form-group" style="padding-bottom: 25px">
                    <label>Credits:</label>
                    <input type="number" name="credits" class="form-control" value="<?php
                        if (isset($_GET['credits'])) {
                            echo $_GET['credits'];
                        } ?>">
                </div>
                <button type="submit" name="submit" value="Update" class="btn btn-primary btn-lg">Update</button>
                <button type="submit" name="submit" value="Delete" class="btn btn-danger btn-lg">Delete</button>
            </form>
        </div>
        <br>
        <div>
            <table class="table">
                <tr>
                    <th>Course ID</th>
                    <th>Course Title</th>
                    <th>Dept_Name</th>
                    <th>Credits</th>
                </tr>
                <?php
                    $sql = "SELECT course_id, title, dept_name, credits
                    FROM course";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td><a href='index.php?" . $query_string . "'>" . $row["course_id"] . "</a></td>";
                            echo "<td>" . $row["title"] . "</td>";
                            echo "<td>" . $row["dept_name"] . "</td>";
                            echo "<td>" . $row["credits"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>0 results</td></tr>";
                    }

                    if (isset($_GET['selectedID']) && isset($_GET["title"]) && isset($_GET["dept_name"]) && isset($_GET["credits"])) {
                        $query_params = array(
                            'selectedID' => $_GET["selectedID"],
                            'title' => $_GET["title"],
                            'dept_name' => $_GET["dept_name"],
                            'credits' => $_GET["credits"]
                        );

                        $query_string = http_build_query($query_params);
                    }

                ?>
            </table>
        </div>
    </div>
</div>

<?php
    mysqli_close($conn);
?>
</body>

</html>