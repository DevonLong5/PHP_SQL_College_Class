<!doctype html>
<html lang="en">
    <head>
        <meta charset="en">
        <title>Product Cost Calculator</title>
        <style type="text/css">
            .number {font-weight: bold;}
        </style>
    </head>
    <body>
        <?php
        //Get value from $_POST Array:
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $discount = $_POST['discount'];
        $tax = $_POST['tax'];
        $shipping = $_POST['shipping'];
        $payments = $_POST['payments'];

        //Calculate total:
        $total = (($price * $quantity) + $shipping) - $discount;

        //Determine tax rate:
        $taxrate = ($tax / 100) + 1;
        

        //Factor in tax rate:
        $total = $total * $discount;

        //Calculate monthly payments:
        $monthly = $total / $payments;

        //Apply proper formatting:
        $total = number_format($total, 2);
        $monthly = number_format($monthly, 2);

        // Print out results:
        print "<p>You have selected to purchase:<br>
        <span class=\"number\">$quantity</span> widget(s) at <br>
        $<span class=\"number\">$price</span> price each plus a <br>
        $<span class=\"number\">$shipping</span> shipping cost and a <br>
        <span class=\"number\">$tax</span> percent tax rate.<br>
        After your $<span class=\"number\">$discount</span> discount, the total cost is $<span class=\"number\">$total</span>.<br>
        Divided over <span class=\"number\">$monthly</span> each.</p>";
        ?>
    </body>
</html>