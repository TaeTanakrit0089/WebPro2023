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
<?php function generateMultiplicationTable($number) {
    echo "<table class=\"table\" style=\"max-width: 300px; font-size: 26px\"><tbody>";
    for ($i = 1; $i <= 12; $i++) {
        echo "<tr>";
        echo "<td>$number</td>" .
            "<td>x</td>" .
            "<td>$i</td>" .
            "<td>=</td>" .
            "<td>" . $number * $i . "</td>";
        echo "</tr>";
    }
    echo "</tbody></table>";
}

?>

<body>
<nav class="topnav">
    <div class="sook_north d-flex justify-content-between">
        <div class="d-flex flex-row">
            <div class="nav-item active">
                <a class="nav-link text-white" href="#">Home</a>
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

    <form id="form1" action="index.php" method="post">
        <p>
            <label>Enter a number :</label>
            <input type="text" id="value" name="value" value=""/>
        </p>

        <input type="submit" id="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['value'])) {
        $number = $_POST['value'];
        if (!empty($number))
            generateMultiplicationTable($number);
    }
    ?>


</div>

<div align="right" class="emailspin"><img alt="" border="0" src="../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>