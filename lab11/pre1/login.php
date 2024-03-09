<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    // user : james
    // password : bond
    $uid = $_POST['userid'];
    $pw = $_POST['password'];

    if ($uid == 'james' and $pw == 'bond') {
        $sesid = session_id();
        $_SESSION['sid'] = $sesid;

        echo '<h1>Logged in successfully</h1>';
        echo '<a href="check-login.php">Go</a>';
    }
?>

</body>
</html>