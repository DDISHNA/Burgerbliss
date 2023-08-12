<?php

    include("connect.php");

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if($password == $cpassword) {
        $insert = mysqli_query($connect, "INSERT INTO user1 (name, email, password) VALUES ('$name', '$email', '$password')");

        if($insert) {
            echo '
            <script>
                alert("Registration Successfull!");
                window.location = "login.html";
            </script>
            ';
        }

        else {
            echo '
            <script>
                alert("Error occurred!");
                window.location = "register.html";
            </script>
            ';
        }
    }

    else {
        echo '
            <script>
                alert("Password and Confirm password does not match!");
                window.location = "register.html";
            </script>
        ';
    }

?>
