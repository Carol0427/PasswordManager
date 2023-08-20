<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $conn = mysqli_connect('localhost', 'root', '', 'password_manager') or die("Connection failed: " .mysqli_connect_error());
        if(isset($_POST['site']) && isset($_POST['password'])) {
            $site = $_POST['site'];
            $pass = $_POST['password'];
            $userID = 'c123';

            $sql = "INSERT INTO 'Passwords' ('site', 'password','userID') VALUES ('$site, $pass, $userID')";

            $query = mysqli_query($conn, $sql);
            if($query) {
                echo 'Entry Successful';
            }
            else {
                echo 'Error Occurred';
            }
        }
    }
?>