<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="#2242A6" name="theme-color">
    <title>65070089 - Fundamental Web Programming Lab.</title>
    <link href="styles.css?v=1.0" rel="stylesheet">
    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="topnav">
    <div class="sook_north d-flex justify-content-between">
        <div class="d-flex flex-row">
            <div class="nav-item active">
                <a class="nav-link text-white" href="/">Home</a>
            </div>
        </div>
        <div class="my-auto py-0 sook_text"><a
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4"
            >
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south"></div>
</nav>


<div class="" id="body_container" style="margin-top: 31px">

    <form id="form1" action="index.php" method="get">
        <p>
            <label>Enter a number :</label>
            <input type="text" id="value" name="value" value=""/>
        </p>

        <input type="submit" value="Display">
    </form>
    <div class="mt-4">
        <?php
        $servername = "127.0.0.1";
        $username = "S089L"; //ตามที่กำหนดให้
        $password = "JJ21666"; //ตามที่กำหนดให้
        $dbname = "s089l";    //ตามที่กำหนดให้
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //        echo "Connected successfully";

        if (isset($_GET['value'])) {
            $number = $_GET['value'];
            if (!empty($number))
                showResult($number);
        }

        function showResult($rows) {
            global $conn;
            $sql = "SELECT * FROM course;";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                $counter = 0; // Add a counter
                while ($row = mysqli_fetch_assoc($result)) {
                    if ($counter == $rows) {
                        echo "ID: " . $row["course_id"] . "<br>Tilt: " . $row["title"] .
                            "<br>Dept. Name: " . $row["dept_name"] . "<br>Credits: " . $row["credits"] . "<br>";
                        return;
                    }
                    $counter++;
                }
                echo "Data Not Found!";
            } else {
                echo "0 results";
            }

        }


        // close connection
        mysqli_close($conn);
        ?>
    </div>


</div>

<div align="right" class="emailspin"><img alt="" border="0" src="../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>