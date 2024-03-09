<?php

    $index = isset($_GET['index']) ? intval($_GET['index']) : 0;
    $url = "http://10.0.15.21/lab/lab12/restapis/products.php";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $response_size = count($result);
    if ($response_size < $index)
        $index = $response_size;
    if (0 > $index)
        $index = 0;
    $result_data = $result[$index]
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
        <h1>Product Details</h1>
        <div>
            <strong>ID: </strong>
            <?php
                echo $result_data->ProductID ?>
        </div>
        <div>
            <strong>Code: </strong>
            <?php
                echo $result_data->ProductCode ?>
        </div>
        <div>
            <strong>Name: </strong>
            <?php
                echo $result_data->ProductName ?>
        </div>
        <div>
            <strong>Description: </strong>
            <?php
                echo $result_data->Description ?>
        </div>
        <div>
            <strong>Price: </strong>
            <?php
                echo $result_data->UnitPrice ?>
        </div>
        <form class="mt-4" id="CourseForm" method="get">
            <div class="d-flex flex-row form-group gap-4">
                <button value="<?php
                    echo ($index <= 0) ? 0 : $index - 1; ?>" type="submit" class="btn btn-primary" name="index">Previous
                    Data
                </button>
                <button value="<?php
                    echo ($index + 1 >= $response_size - 1) ? $response_size - 1 : $index + 1; ?>" type="submit"
                        class="btn btn-primary"
                        name="index">Next Data
                </button>
            </div>
        </form>
    </div>
</div>

<div align="right" class="emailspin" style="color: white"><img alt="" border="0" src=" ../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>

<script src="script.js"></script>
