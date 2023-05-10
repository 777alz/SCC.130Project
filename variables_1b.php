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
 $city= 'Lancaster';
 $country = 'England';
 $address = $city . ', ' . $country;
 echo $address;

 ?>

    </body>
</html>