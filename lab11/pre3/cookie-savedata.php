<?php
    $c_id = $_GET['CourseID'];
    $c_title = $_GET['CourseTitle'];
    $c_dept = $_GET['DeptName'];
    $c_credits = $_GET['Credits'];
    // 86400 = 1 day
    setcookie('CourseID', $c_id, time() + (86400), "/");
    setcookie('CourseTitle', $c_title, time() + (86400), "/");
    setcookie('DeptName', $c_dept, time() + (86400), "/");
    setcookie('Credits', $c_credits, time() + (86400), "/");

?>

