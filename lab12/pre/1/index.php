<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab12</title>
</head>
<body>

<form method="post">
    Enter QR Code Data:
    <input type="text" name="str1"><br/>
    <input type="submit" name="Submit"><br/>
</form>

<?php
    if (isset($_POST["Submit"])) {
        $data = $_POST["str1"];
        echo "<h2>Here is your QR Code<h2>";
        echo <<<EOF
<img src='https://api.qrserver.com/v1/create-qr-code/?size=450x450&data=$data'>

EOF;

    }
?>

</body>
</html>