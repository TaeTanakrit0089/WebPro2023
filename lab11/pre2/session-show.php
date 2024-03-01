<?php
// Start the session
session_start();
?>

<?php

echo $_SESSION["CourseID"] . "<br>";
echo $_SESSION["CourseTitle"] . "<br>";
echo $_SESSION["DeptName"] . "<br>";
echo $_SESSION["Credits"] . "<br>";

echo "Session ID : " . session_id();

?>