<!DOCTYPE html>
<html>
    <body>
        
    <?php
    if ((strlen($_POST["name"]) != 0) && (isset($_POST["interests"]))) {
    echo nl2br ("Here is the output from Example4f.\n");
    echo "Thank you, " . $_POST["name"] . ". You entered your interests as: " . $_POST["interests"];
    }
    else {
        echo "Please enter your Name and select at least one interest.";
    }
// Check $interests[]
if (isset($_POST['interests'])) {
$ints = NULL; // New message to be used.
foreach ($_POST['interests'] as $key => $value) {
$ints .= "$value, ";
}
$ints = substr($ints, 0, -2);
$interests = TRUE;
} else {
$interests = NULL;
echo '<p><b>You forgot to enter your interests!</b></p>';
}

    ?>
        
    </body>
</html>