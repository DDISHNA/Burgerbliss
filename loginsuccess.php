<?php
    include("connect.php");

    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $check = mysqli_query($connect, " SELECT * FROM user1 WHERE email='$email' AND password='$password' ");

    if(mysqli_num_rows($check) > 0) {		
        echo '
            <script>
                window.location = "Ending.html";
            </script>
        ';

    }

    else {
    
        echo '
            <script>
                alert("Invalid Credentials or User not found!");
                window.location = "login.html";
            </script>
        ';
    }

?>
