<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["password"]);

    session_destroy();

    //    echo '<h2>You have cleaned session</h2>';
    header('Refresh: 3; URL = index.html');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="http://10.0.15.21/lab/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://10.0.15.21/lab/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="d-flex flex-column justify-content-center text-center" style="height: 100vh">
    <h1 class="text-center text-xxl-center">
        Logout Success
    </h1>
    <a href="index.php">
        <button class="btn-primary btn mt-2">Go back</button>
    </a>
</div>
</body>
</html>
