<?php
include ("includes/header.php");   // اضافه كردن پرونده header.php

//بررسي خالي نبودن كادر متن نام كاربري و گذرواژه
	
if ((isset($_POST['username']) && !empty($_POST['username']) && isset($_POST['password']) &&
    !empty($_POST['password']))) {

    $username = $_POST['username']; // ذخيره نام كاربري
    $password = $_POST['password'];  // ذخيره گذرواژه
} else
    exit("  <input onclick='history.back()' type='button' value='◄ Go Back' />برخی از فیلد ها مقدار دهی نشده است");


//Conecct to DB
require_once("./DB.php");

// پرس و جو بر اساس نام كاربري و گذرواژه
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($link, $query);   //اجراي پرس و جو $query

$row = mysqli_fetch_array($result);   //ذخيره اطلاعات ركورد كاربر در آرايه $row

if ($row) {
    $_SESSION["state_login"] = true;
    $_SESSION["realname"] = $row['realname'];
   
    $_SESSION["username"] = $row['username'];


    if ($row["type"] == 0)
        $_SESSION["user_type"] = "public";
        
    elseif ($row["type"] == 1) {
        $_SESSION["user_type"] = "admin";

?>

<script type="text/javascript">
<!--
location.replace("admin_products.php");	
-->
</script> 
   
<?php
    } // elseif پایان

    echo ("<p style='color:green;'><b>{$row['realname']} به فروشگاه ايرانيان خوش آمديد</b></p>");
} else
    echo ("<p style='color:red;'><b>نام كاربري يا كلمه عبور يافت نشد</b>  <input onclick='history.back()' type='button' value='◄ Go Back' /></p>");


mysqli_close($link);   // قطع اتصال پايگاه داده

include ("includes/footer.php");   // اضافه كردن پرونده footer.php
?>
