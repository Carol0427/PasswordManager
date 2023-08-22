<!DOCTYPE html>
<html>
    <head>
    <link rel='stylesheet' href='styling.css'>
        <?php
            //include 'connect.php';

            echo $_SESSION['new_pass_created'];
            if ($_SESSION['new_pass_created'] == true){
                echo '<script>alert("new password stored!")</script>';
                $_SESSION['new_pass_created'] = false;
            }
        ?>
    </head>
<body>
<div id='main_page'>
        <div id='create_new_pass'> <h2><a href='create_new_pass.php'>go to create passes</a></h2></div>
        <div id='view_passes'> <h2><a href='view_passes.php'>go to view passes</a></h2></div>
        
</div>
</body>
</html>