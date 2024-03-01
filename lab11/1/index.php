<?php
session_start();


if (isset($_SESSION['data'])) {

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width = device - width, initial - scale = 1.0" name="viewport">
    <meta content="#2242A6" name="theme-color">
    <title>65070089 - Fundamental Web Programming Lab .</title>
    <link href="styles.css?v=1.2" rel="stylesheet">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body topmargin="">
<nav class="topnav p-1">
    <div class="sook_north blur-effect d-flex justify-content-between">
        <div class="d-flex flex-row">
            <div class="nav-item active">
                <a class="nav-link text-white" href="/"> Home</a>
            </div>
        </div>
        <div class="my-auto py-0 sook_text"><a
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4">
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south blur-effect"></div>
</nav>


<div class="" id="body_container" style="padding-top: 54px !important">
    <div id="intro" class="mt-4 quiz-container  blur-effect">
        <h1>Form!</h1>
        <form id="CourseForm" action="process_form.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Employee ID:</label>
                <input type="number" class="form-control" id="employee_ID" name="employee_ID"
                       placeholder="Enter Employee ID">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Firstname:</label>
                <input type="text" class="form-control" id="Firstname" name="Firstname"
                       placeholder="Enter Firstname">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Lastname:</label>
                <input type="text" class="form-control" id="Lastname" name="Lastname"
                       placeholder="Enter Lastname">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Address:</label>
                <textarea class="form-control" id="Address" name="Address"
                          placeholder="Enter Address"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email:</label>
                <input type="email" class="form-control" id="Email" name="Email"
                       placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Phone:</label>
                <input type="text" class="form-control" id="Phone" name="Phone"
                       placeholder="Enter phone number">
            </div>

            <div class="d-flex flex-row form-group gap-2">
                <button type="submit" class="btn btn-primary" name="save">Save Data</button>
                <button type="submit" class="btn btn-primary" name="show">Show Data</button>
                <button type="submit" class="btn btn-primary" name="clear" onclick="clearForm()">Clear Data</button>
            </div>
        </form>
    </div>

    <div id="intro" class="mt-4 quiz-container  blur-effect">
        <h1>Database Data</h1>
        <?php

        // 1. Connect to Database
        class MyDB extends SQLite3 {
            function __construct() {
                $this->open('customers.db');
            }
        }

        // 2. Open Database
        $db = new MyDB();
        //        if (!$db) {
        //            echo $db->lastErrorMsg();
        //        } else {
        //            echo "Opened database successfully<br>";
        //        }

        // 3. Query Execution

        $sql = "SELECT * from customers where CustomerID = 1";
        $ret = $db->query($sql);

        echo ' <table class="table my-table">
<thead class="thead table-dark">
<tr>
      <th scope = "col"> ID</th>
      <th scope = "col"> Name</th>
      <th scope = "col"> Address</th>
      <th scope = "col"> Phone</th>
      <th scope = "col"> Email</th>
    </tr>
</thead>
<tbody>';

        while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr class=''> ";
            echo "<th scope = 'row'> " . $row['CustomerId'] . "</th> ";
            echo "<td> " . $row['FirstName'] . " " . $row['LastName'] . "</td> ";
            echo "<td> " . $row['Address'] . "</td>";
            echo "<td> " . $row['Phone'] . "</td>";
            echo "<td> " . $row['Email'] . "</td>";
            echo " </tr > ";
        }
        echo '</tbody></table>';


        // 4. Close database
        $db->close();

        ?>
    </div>


</div>

<div align="right" class="emailspin" style="color: white"><img alt="" border="0" src=" ../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>

<script src="script.js"></script>

