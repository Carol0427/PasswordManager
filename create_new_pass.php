<!DOCTYPE html>
<html>
    <head>
    </head>
    
    <body>
        <h1>Enter new password to store: </h1>
            <form action='connect.php' method="POST">
                <label for="site">Site name: </label> <br>
                <input type='text' name='site' id='site' required/> <br><br>
                
                <label for="password">New Password: </label><br>
                <input type='text' name='password' id='password' required/> <br><br>

                <input type="submit" name="new_pass_submit" id="new_pass_submit"/>
            </form>
        <?php
         echo "hello world people life";
        ?>
    </body>
</html>