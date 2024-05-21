<?php
include ("includes/header.php");

//Conecct to DB
require_once("./DB.php");

$pro_code=0;
if (isset($_GET['id']))
	 $pro_code=$_GET['id'];

$query = "SELECT * FROM products WHERE pro_code='$pro_code'";            

$result = mysqli_query($link, $query);            //  اجراي پرس و جو


?>

 <table style="width: 100%;" border="1px"  >
  <tr>
  
  <?php


if ($row = mysqli_fetch_array($result)) {
  
?> 

  
	<td style="border-style: dotted dashed;vertical-align: top;" >

       <h4 style="color: brown;"><?php echo ($row['pro_name']) ?></h4>
 
       <img src="images/products/<?php echo ($row['pro_image']) ?>"  />
     
       <br/>

    قيمت  : <?php echo ($row['pro_price']) ?> &nbsp; ريال
    <br/>

    تعداد موجودي  : <span style="color:red;"><?php echo ($row['pro_qty']) ?></span>
    <br/>

     توضيحات  : <span style="color:green;"> <?php echo ($row['pro_detail']) ?> </span>

     <br/><br/>
    <b><a href="order.php?id=<?php echo ($row['pro_code']) ?>" class="btn_start_buy">سفارش و خرید پستی</a></b>
    <br/><br/>
           
    </td>  
    
<?php
   
	  
} // if

?>  
</tr>
</table>

<?php
include ("includes/footer.php");
?>
   
