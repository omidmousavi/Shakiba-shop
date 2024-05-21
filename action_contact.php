<?php
include ("includes/header.php");

//Conecct to DB
require_once("./DB.php");

if (isset($_POST['detail']))
	$detail=$_POST['detail'];

if (isset($_SESSION['username']))
	$username=$_SESSION['username'];

$query = "INSERT INTO contact (username,detail) VALUES ('$username','$detail')";

if (mysqli_query($link, $query) === true)
    echo ("<p style='color:green;'><b>کاربر گرامی پیام شما با موفقیت دریافت شد</b></p>");
else
    echo ("<p style='color:red;'><b>خطا در ارسال پیام</b></p>");

mysqli_close($link);

include ("includes/footer.php");
?>
