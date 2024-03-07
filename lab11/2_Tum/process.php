<?php

$emp_id = isset($_COOKIE['emp_id']) ? $_COOKIE['emp_id'] : "";
$fname = isset($_COOKIE['fname']) ? $_COOKIE['fname'] : "";
$lname = isset($_COOKIE['lname']) ? $_COOKIE['lname'] : "";
$address = isset($_COOKIE['address']) ? $_COOKIE['address'] : "";
$email = isset($_COOKIE['email']) ? $_COOKIE['email'] : "";
$phone = isset($_COOKIE['phone']) ? $_COOKIE['phone'] : "";
$show_data = isset($_COOKIE['show_data']) ? $_COOKIE['show_data'] : "";


if (isset($_POST['save_data']) || isset($_POST["show_data"]) || isset($_POST["clear_data"])) {
    $emp_id = $_POST['get_emp_id'];
    $fname = $_POST['get_fname'];
    $lname = $_POST['get_lname'];
    $address = $_POST['get_address'];
    $email = $_POST['get_email'];
    $phone = $_POST['get_phone'];

    if (isset($_POST['save_data'])) {
        setcookie("emp_id", $emp_id, time() + (86400)); // 86400 = 1 day
        setcookie("fname", $fname, time() + (86400));
        setcookie("lname", $lname, time() + (86400));
        setcookie("address", $address, time() + (86400));
        setcookie("email", $email, time() + (86400));
        setcookie("phone", $phone, time() + (86400));
        setcookie("show_data", false, time() + (86400));
        header("Location: index.php");
        exit();
    }

    if (isset($_POST['show_data'])) {
        setcookie("show_data", true, time() + (86400));
        header("Location: index.php");
        exit();
    }

    if (isset($_POST['clear_data'])) {
        setcookie("emp_id", "", time() - 3600);
        setcookie("fname", "", time() - 3600);
        setcookie("lname", "", time() - 3600);
        setcookie("address", "", time() - 3600);
        setcookie("email", "", time() - 3600);
        setcookie("phone", "", time() - 3600);
        setcookie("show_data", "", time() - 3600);
        header("Location: index.php");
        exit();
    }
}
