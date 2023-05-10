<!DOCTYPE html>
<html>
    <body>
        
        Hello! <?php 
        if (strlen($_POST["name"]) > 0) {
        echo $_POST["name"];
        }
        else { 
        echo "Please Enter a Name. ";
        }

        if (strlen($_POST["email"]) == 0) {
        echo "Please Enter an Email Address. ";
        }
        
         ?><br><br>
        
    </body>
</html>