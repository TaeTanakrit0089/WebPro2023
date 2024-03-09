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
    <div id="intro" class="mt-4 flex-row d-flex flex-grow flex-wrap gap-4">
        <div class="quiz-container blur-effect country_box">
            <h1 class="text-center">Brazil</h1>
            <div class="d-flex flex-row gap-3 justify-content-between">
                <div>
                    <div><strong>Capital: </strong>Brass</div>
                    <div><strong>Population: </strong>Brass</div>
                    <div><strong>Regions: </strong>Brass</div>
                    <div><strong>Location: </strong>Brass</div>
                    <div><strong>Borders: </strong>Brass</div>
                </div>
                <div>
                    <img class="rounded" src="https://www.it.kmitl.ac.th/~sooksan/sooksan.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="quiz-container blur-effect country_box">
            <h1 class="text-center">Brazil</h1>
            <div class="d-flex flex-row gap-3 justify-content-between">
                <div>
                    <div><strong>Capital: </strong>Brass</div>
                    <div><strong>Population: </strong>Brass</div>
                    <div><strong>Regions: </strong>Brass</div>
                    <div><strong>Location: </strong>Brass</div>
                    <div><strong>Borders: </strong>Brass</div>
                </div>
                <div>
                    <img class="rounded" src="https://www.it.kmitl.ac.th/~sooksan/sooksan.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="quiz-container blur-effect country_box">
            <h1 class="text-center">Brazil</h1>
            <div class="d-flex flex-row gap-3 justify-content-between">
                <div>
                    <div><strong>Capital: </strong>Brass</div>
                    <div><strong>Population: </strong>Brass</div>
                    <div><strong>Regions: </strong>Brass</div>
                    <div><strong>Location: </strong>Brass</div>
                    <div><strong>Borders: </strong>Brass</div>
                </div>
                <div>
                    <img class="rounded" src="https://www.it.kmitl.ac.th/~sooksan/sooksan.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div align="right" class="emailspin" style="color: white"><img alt="" border="0" src=" ../assets/emailspin.gif"><br>
    65070089@kmitl.ac.th<br>
    Any problem with the website, feel free to contact me.
</div>
</body>

</html>

<script src="script.js"></script>
