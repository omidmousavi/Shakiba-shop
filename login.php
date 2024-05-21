<?php
include ("includes/header.php");
if (isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true) {
?>
<script type="text/javascript">
<!--
location.replace("index.php");	 // منتقل شود index.php به صفحه
-->
</script>
<?php
   } // if پایان
?>
   <br />
   <h1>ورود به سایت</h1>
   <form name="login" action="action_login.php"  method="POST" class="login-form">

   <table border="0" style="margin-left: auto;margin-right: auto;" >                         
      <tr>
         <td >نام کاربری <span style="color: red;">*</span></td>
         <td style="width: 60%;"><input type="text" style="text-align: left;" id="username" name="username" autocomplete="off" required="" /></td>
      </tr>               
      <tr>
         <td>کلمه ی عبور<span style="color: red;">*</span></td>
         <td><input type="password" style="text-align: left;" id="password" name="password" required="" /></td>
      </tr>
      <tr>
       <td><br /><br /></td>
       <td>
         <input type="submit" value="ورود" />
         &nbsp;&nbsp;&nbsp;
         <input type="reset" value="جديد" />
       </td>
    </tr>
   </table>
  </form>
                    
                    
<?php
include ("includes/footer.php");
?>
   
