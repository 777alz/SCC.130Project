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
 // Create variables:
 $first_name = 'Alan';
 $last_name = 'Turing';
 $invention = 'Turing Machine';
 // Print the values:
 echo "<p>The <em>$invention</em> was designed and invented by $first_name
$last_name.</p>";
 ?>

    </body>
</html>