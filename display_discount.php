<?php
    // get the data from the form
    $product_description = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
 
    // calculate the discount
    $discount = $list_price * $discount_percent * .01;
    $discount_price = $list_price - $discount;
    //calculate the sales tax
   $sales_tax_rate = 0.08;
   $sales_tax_amount = $discount_price * 0.08;
   $sales_total = $discount_price - $sales_tax_amount;
    
    // apply currency formatting to the dollar and percent amounts
    $list_price_formatted = "$".number_format($list_price, 2);
    $discount_percent_formatted = $discount_percent."%";
    $discount_formatted = "$".number_format($discount, 2);
    $discount_price_formatted = "$".number_format($discount_price, 2); 
    $sales_tax_rate_formatted = $sales_tax_rate."%";
    $sales_tax_amount_formatted = "$".number_format($sales_tax_amount,2);
    $sales_total_formatted = "$".number_format($sales_total, 2);
   
    // escape the unformatted input
    $product_description_escaped = htmlspecialchars($product_description);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_description_escaped; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price_formatted; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percent_formatted; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $discount_price_formatted; ?></span><br>
        
        <label>Sales Tax Rate: </label>
        <span><?php echo $sales_tax_rate_formatted; ?></span><br>
        
        <label>Sales Tax amount:</label>
        <span><?php echo $sales_tax_amount_formatted; ?></span><br>
        
        <label>Sales total:</label>
        <span><?php echo $sales_total_formatted; ?></span><br>
    </main>
</body>
</html>