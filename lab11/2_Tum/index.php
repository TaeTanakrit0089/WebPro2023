<?php
include_once 'open_database.php' ?>
<?php

if (!isset($_COOKIE['show_data'])) {
    $_COOKIE['show_data'] = false;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab11-2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-size: 20px;
            margin: 20px;
            background-image: url(../stone.gif);
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>

<body>
<div class="container mb-5">
    <h1 class="text-center" style="padding-top: 20px; font-size: 50px;">Lab 11-2 </h1>
    <h1 class="text-center mb-5">COOKIE</h1>
    <div class="shadow p-3 mb-5 bg-body rounded" style="background-color: white;">
        <form style="padding: 20px;" method='post' action='process.php'>
            <label class="mb-1">Employee ID:</label><br>
            <input class="form-control mb-3" type="text" name="get_emp_id" value="<?php
            if ($_COOKIE['show_data']) {
                echo $_COOKIE['emp_id'];
            } else if ((isset($_GET['selectedID']))) {
                echo $_GET['selectedID'];
            } else {
                echo "";
            }
            ?>"/>
            <label class="mb-1">Firstname:</label><br>
            <input class="form-control mb-3" type="text" name="get_fname" value="<?php
            if ($_COOKIE['show_data']) {
                echo $_COOKIE['fname'];
            } else if ((isset($_GET['FirstName']))) {
                echo $_GET['FirstName'];
            } else {
                echo "";
            }
            ?>"/>
            <label class="mb-1">Lastname:</label><br>
            <input class="form-control mb-3" type="text" name="get_lname" value="<?php
            if ($_COOKIE['show_data']) {
                echo $_COOKIE['lname'];
            } else if ((isset($_GET['LastName']))) {
                echo $_GET['LastName'];
            } else {
                echo "";
            }
            ?>"/>
            <label class="mb-1">Address:</label><br>
            <textarea class="form-control mb-3" name="get_address"><?php
                if ($_COOKIE['show_data']) {
                    echo $_COOKIE['address'];
                } else if ((isset($_GET['Address']))) {
                    echo $_GET['Address'];
                } else {
                    echo "";
                }
                ?></textarea>
            <label class="mb-1">Email:</label><br>
            <input class="form-control mb-3" type="text" name="get_email" value="<?php
            if ($_COOKIE['show_data']) {
                echo $_COOKIE['email'];
            } else if ((isset($_GET['Email']))) {
                echo $_GET['Email'];
            } else {
                echo "";
            }
            ?>"/>
            <label class="mb-1">Phone:</label><br>
            <input class="form-control mb-4" type="text" name="get_phone" value="<?php
            if ($_COOKIE['show_data']) {
                echo $_COOKIE['phone'];
            } else if ((isset($_GET['Phone']))) {
                echo $_GET['Phone'];
            } else {
                echo "";
            }
            ?>"/>
            <button class="btn btn-success me-2" type='submit' name='save_data'>Save Data</button>
            <button class="btn btn-primary me-2" type='submit' name='show_data'>Show Data</button>
            <button class="btn btn-danger" type='submit' name='clear_data'>Clear Data</button>
        </form>
    </div>
    <div class="shadow p-3 mb-5 bg-body rounded" style="background-color: white;">
        <table class="table">
            <tr>
                <th>CustomerId</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            <?php
            $sql = "SELECT * FROM customers";
            $result = $db->query($sql);

            while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
                echo "<tr>";
                echo "<td><a href='index.php?selectedID=" . $row["CustomerId"] . "&FirstName=" . urlencode($row["FirstName"]) . "&LastName=" . urlencode($row["LastName"]) . "&Address=" . urlencode($row["Address"]) . "&Phone=" . urlencode($row["Phone"]) . "&Email=" . urlencode($row["Email"]) . "' class='text-decoration-none'>" . $row["CustomerId"] . "</a></td>";
                echo "<td>" . $row["FirstName"] . "</td>";
                echo "<td>" . $row["LastName"] . "</td>";
                echo "<td>" . $row["Address"] . "</td>";
                echo "<td>" . $row["Phone"] . "</td>";
                echo "<td>" . $row["Email"] . "</td>";
                echo "</tr>";
            }

            ?>
        </table>
    </div>

    <?php
    // Close Database
    $db->close();
    ?>

</div>

</body>

</html>