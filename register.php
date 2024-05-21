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
<script type="text/javascript">
<!--
	function check_empty()
     {
       var username='';
       username= document.getElementById("username").value;
       if (username=='')
        alert('وارد كردن نام كاربري الزامي است');
       else
        {
          var r = confirm("از صحت اطلاعات وارد شده اطمینان دارید؟");
          if (r == true) {
            document.register.submit();
           } 
        } 
     }
-->
</script>
  <br />
  <h1>عضویت در سایت</h1>
  <form name="register" action="action_register.php"  method="POST" class="signup-form">
    <table border="0" style="margin-left: auto;margin-right: auto;" >
                         
    <tr>
       <td>نام واقعي <span style="color: red;">*</span></td>
       <td ><input type="text" id="realname" name="realname"  autocomplete="off" required="" /></td>
    </tr>
                          
    <tr>
       <td>نام كاربري <span style="color: red;">*</span></td>
       <td><input type="text" style="text-align: left;" id="username" name="username"  autocomplete="off" required="" /></td>
    </tr>
                         
    <tr>
       <td>كلمه عبور <span style="color: red;">*</span></td>
       <td><input type="password" style="text-align: left;" id="password" name="password" required="" /></td>
    </tr>
                         
    <tr>
       <td>تكرار كلمه عبور <span style="color: red;">*</span></td>
       <td><input type="password" style="text-align: left;" id="repassword" name="repassword" required="" /></td>
    </tr>
                         
    <tr>
       <td>پست الكترونيكي <span style="color: red;">*</span></td>
       <td><input type="text" style="text-align: left;" id="email" name="email"  autocomplete="off" required="" /></td>
    </tr>
                         
    <tr>
       <td><br /><br /></td>
       <td>
              <input type="submit" value="ثبت نام" onclick="check_empty();" />
               &nbsp;&nbsp;&nbsp;
              <input type="reset" value="جديد" />
       </td>
    </tr>
                         
   </table>
  </form>
                    
                    
<?php
include ("includes/footer.php");
?>
   
