<!DOCTYPE html>
<html>
    <head>
        <meta charset=”UTF-8">
        <title>My basis PHP Page</title>
    </head>

    <body>
        <!—my first PHP example -->
        <p>This is standard HTML.</p>

        <?php
// Set the variables.
$quantity = 3; // Buying 3
$price = 119.95; // 119.95
$taxrate = .05; // 5%
// Calculate the total.
$total = $quantity * $price;
$total = $total + ($total * $taxrate); // Add tax.
$total = number_format ($total, 2); // Format the results.
// Print the results.
echo 'You are purchasing <b>', $quantity, '</b> Items at a cost of <b>£',
$price,'</b> each. With Tax, the total cost is <b>£', $total, '</b>.';
?>

    </body>
</html>