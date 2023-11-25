<?php 
    session_start();
    include('conn.php');
    
    $errors = array();

    if (isset($_POST['register'])) {
        $filter_name = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $name = mysqli_real_escape_string($conn, $filter_name);

        $filter_password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $password = mysqli_real_escape_string($conn, $filter_password);

        $filter_cpassword = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
        $cpassword = mysqli_real_escape_string($conn, $filter_cpassword);

        $select_user = mysqli_query($conn,  "SELECT * FROM users WHERE name = '$name'");

        if (mysqli_num_rows($select_user)>0) {
            $message = 'user already exist';
        } else {
            if ($password != $cpassword ) {
                $message = 'wrong password';
            } else {
                mysqli_query($conn, "INSERT INTO users ( `name`, `password`, `cpassword`) VALUES ('$name','$password','$cpassword')");
                $message = 'registered successfully';
                header("location: login.php");
            }
        }

    }