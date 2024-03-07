<?php
session_start();
unset($_SESSION["userid"]);
unset($_SESSION["password"]);

session_destroy();

echo '<h2>You have cleaned session</h2>';
header('Refresh: 2_Tum; URL = loginform.html');
?>