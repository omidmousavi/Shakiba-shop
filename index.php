<?php
    include ("includes/header.php");

    //Conecct to DB
    require_once("./DB.php");

    $query = "SELECT * FROM products";             // پرس و جوي نمايش همه محصولات فروشگاه

    $result = mysqli_query($link, $query);            //  اجراي پرس و جو

?>

<h2>محصولات سایت :</h2>
<table class="products-tbl">
  <tr>

<?php

$counter = 0;
while ($row = mysqli_fetch_array($result)) {
    $counter++;
?> 

    <th class="product">

        <h4 style="color: brown;"><?php echo ($row['pro_name']) ?></h4>
        <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" style="text-decoration: none;">
            <img src="images/products/<?php echo ($row['pro_image']) ?>" width="250px" height="150px" />
        </a>    
        
        <br/>

        قيمت  : <?php echo ($row['pro_price']) ?> &nbsp; ريال
        
        <br/>

        تعداد موجودي  : <span style="color:red;"><?php echo ($row['pro_qty']) ?></span>
        <br/>

        توضيحات  : <span style="color:green;"> <?php echo (substr($row['pro_detail'],0,240)) ?> ...</span>

        <br/><br/>
        <a href="product_detail.php?id=<?php echo ($row['pro_code']) ?>" class="btn_start_buy">توضيحات تكميلي و خريد</a></b>
        <br/><br/>

    </th>  
    
<?php
} 
?>
</tr>  
</table>

<?php
include ("includes/footer.php");
?>
   
