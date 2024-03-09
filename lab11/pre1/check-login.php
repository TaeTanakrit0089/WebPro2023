<?php
    session_start();
    $sesid = session_id();
?>

<!DOCTYPE html>
<html>
<body>

<?php

    if ($_SESSION['sid'] == $sesid) {
        echo '<h1>This account is already logged in.</h1>';
        echo 'Click here to <a href="logout.php" >logout</a>.';
    } else {
        echo '<h1>You are not logged in.</h1>';
        header('Refresh: 3; URL = loginform.html');
    }

?>

</body>
</html>