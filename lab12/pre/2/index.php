<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab 12</title>
</head>
<body>
<form action="" method="POST">
    <label for="prodid">Name :</label>
    <input type="text" id="prodid" name="prodid" placeholder="Enter a Product ID (1-30)" required/>
    <button type="submit" name="submit">Submit</button>
</form>

<?php
    if (isset($_POST['submit'])) {
        $prodid = $_POST['prodid'];
        $url = "http://10.0.15.21/lab/lab12/restapis/products.php?prodid=" . $prodid;
        $client = curl_init($url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        $result = json_decode($response)[0];
        echo "Product ID: " . $result->ProductID . " <br>";
    }
?>

</body>
</html>