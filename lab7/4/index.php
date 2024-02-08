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
    <div class="sook_north d-flex justify-content-between ">
        <div class="d-flex flex-row gap-1">
            <div class="nav-item active">
                <a class="nav-link text-white text-decoration-none" href="#">Home</a>
            </div>
        </div>
        <div class="my-auto py-0 sook_text"><a
                    class="nav-link text-white" href="https://youtu.be/XT_aaSkD5rs?si=xGK5Kh-LRoW43eOQ&t=4">
                King Mongkut's Institute of Technology Ladkrabang</a></div>
    </div>
    <div class="sook_south"></div>
</nav>


<div class="" id="body_container" style="margin-top: 31px">

    <h1 class='center' style="margin-top:20px;">Image Gallery</h1>
    <!--    <div id="img-box" class="d-flex flex-row gap-3 justify-content-center">-->
    <!--        <div class="d-flex flex-column gap-2">-->
    <!--            <img src="pics/Manop.webp" alt="Avatar" class="w-100">-->
    <!--        </div>-->
    <!--        <div class="d-flex flex-column gap-2">-->
    <!--            <img src="pics/Olan.webp" alt="Avatar" class="w-100">-->
    <!--        </div>-->
    <!--        <div class="d-flex flex-column gap-2">-->
    <!--            <img src="pics/Manop.webp" alt="Avatar" class="w-100">-->
    <!--        </div>-->
    <!--        <div class="d-flex flex-column gap-2">-->
    <!--            <img src="pics/Manop.webp" alt="Avatar" class="w-100">-->
    <!--        </div>-->
    <!--    </div>-->

<?php
$column1 = "";
$column2 = "";
$column3 = "";
$column4 = "";

function createImgTag($filename) {
    return '<img src="pics/' . $filename . '" alt="Avatar" class="w-100">';
}

$files = scandir("pics");
shuffle($files);

$count = 0;
foreach ($files as $file) {
    if ($file != '.' && $file != '..' && substr($file, 0, 1) != '.') {
        if ($count % 4 === 0)
            $column1 = $column1 . createImgTag($file);
        else if ($count % 4 === 1)
            $column2 = $column2 . createImgTag($file);
        else if ($count % 4 === 2)
            $column3 = $column3 . createImgTag($file);
        else if ($count % 4 === 3)
            $column4 = $column4 . createImgTag($file);
        $count += 1;
    }
}
echo '<div id="img-box" class="d-flex flex-row gap-2 justify-content-center">
        <div class="d-flex flex-column gap-2">
            ' . $column1 . '
        </div>
        <div class="d-flex flex-column gap-2">
            ' . $column2 . '
        </div>
        <div class="d-flex flex-column gap-2">
            ' . $column3 . '
        </div>
        <div class="d-flex flex-column gap-2">
           ' . $column4 . '
        </div>
    </div>';


    ?>
</div>

<div align="right" class="emailspin"><img alt="" border="0" src="../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>';