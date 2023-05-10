<!DOCTYPE html>
<html>
    <body>
        
    <?php
    if (is_numeric($_POST["quantity"]) == 1) {
        echo "The number you have entered = ";
        echo "<b>{$_POST['quantity']}</b>";
        echo nl2br("\n");
        // Make the calculations and print the results.
        $total = ($_POST["quantity"] * $_POST["price"]) * ($_POST["taxrate"] + 1);
        $total = number_format ($total, 2);
        echo "You are purchasing <b>{$_POST["quantity"]}</b> Items at a cost of
        <b>£{$_POST["price"]}</b> each. With tax, the total is <b>£$total</b>.\n";
    }
    else {
        echo "Invalid Quantity.";
    }
    ?>
        
    </body>
</html>