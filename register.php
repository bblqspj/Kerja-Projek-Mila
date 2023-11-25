<?php 
    session_start();
    include('conn.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register ⎯⎯ gαleriedeperles</title>
</head>
 <link rel="stylesheet" type="text/css" href="style.css">

 <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Crimson Text', serif;
        letter-spacing: 3px;
    }
    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-container {
        position: relative;
        max-width: 500px;
        width: 100%;
        padding: 80px 100px 70px;
        background: #fff;
        border: 3px solid rgb(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.1)
    }

    .btn {
            justify-content: center;
            align-items: center;
            margin: 20px 80px;
            background-color: #fff;
            color: black;
            width: 40%;
            border-style: solid;
            border-width: 2px;
            padding: 8px 8px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
    }

    .btn:hover {
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            border-style: solid;
            border-width: 2px;
    }

    h1 {
        align-items: center;
        cursor: pointer;
        font-family: 'Crimson Text', serif;
        letter-spacing: 3px;
        margin: 20px 100px;
        background-color: #fff;
        color: black;
        width: 100%;
    }

    
input,
textarea {
    justify-content: center;
    align-items: center;
    outline: none;
    border: 1px solid #000;
    width: 100%;
    padding: 10px 54px;
    border-radius: 6px;
    margin: 1rem 0;
}

 </style>
<body> 
<form action="register_db.php" method="POST">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    <section class="form-container">
        <form action="register_db.php" method="POST">
            <h1>register</h1>
            <input type="text" name="username" placeholder="creαt your usernαme" required>
            <input type="password" name="password" placeholder="creαt your pαssword" required>
            <input type="password" name="cpassword" placeholder="confirm your pαssword" required>
        
                <input type="submit" value="register" name="register" class="btn" id="login_btn">
        </form>
    </section>
    
</body>
</html>