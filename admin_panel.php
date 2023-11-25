<?php
include 'conn.php';
session_start ();
$admin_name = $_SESSION['username'];

if (!isset($admin_name)) {
    header('location:login_admin.php');
} 

if (isset($_POST['logout'])) {
    session_destroy();
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - gαleriedeperles</title>
</head>
<style>
    .dashboard {
     padding: 3rem;
     margin-top: -3.5rem;
     position: relative;  
    }

    .box-container {
        padding: 2% 8%;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(15rem,1fr));
        column-gap: 1rem;
        margin-bottom: 50px;
    }

    .box-container .box {
        background: #fff;
        padding: 1rem;
        border: 3px solid rgb(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.1);
        margin: 1rem;
    }

    .dashboard h3 {
        text-align: center;
    }

    .dashboard p{
        margin: .5rem 0;
    }

    .navbar a:hover {
            justify-content: center;
            align-items: center;
            color: pink;
    }
</style>
<body>
    <?php include 'admin_header.php'; ?>
    <section class="dashboard">
        <div class="box-container">
            <div class="box">
                <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM `order`") or die('query failed');
                $num_of_order = mysqli_num_rows($select_orders);
                ?>
                <h3><?php echo $num_of_order; ?>/-</h3>
                <p>order placed</p>
            </div>
            <div class="box">
                <?php
                $select_products = mysqli_query($conn, "SELECT * FROM `order`") or die('query failed');
                $num_of_product = mysqli_num_rows($select_products);
                ?>
                <h3><?php echo $num_of_product; ?></h3>
                <p>product added</p>
            </div>
            <div class="box">
                <?php
                $select_user = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'user'") or die('query failed');
                $num_of_user = mysqli_num_rows($select_user);
                ?>
                <h3><?php echo $num_of_user; ?></h3>
                <p>total user</p>
            </div>
            <div class="box">
                <?php
                $select_admin = mysqli_query($conn, "SELECT * FROM `users` WHERE user_type = 'admin'") or die('query failed');
                $num_of_admin = mysqli_num_rows($select_admin);
                ?>
                <h3><?php echo $num_of_admin; ?></h3>
                <p>total admin</p>
            </div>
            <div class="box">
                <?php
                $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die('query failed');
                $num_of_message = mysqli_num_rows($select_message);
                ?>
                <h3><?php echo $num_of_message; ?></h3>
                <p>message</p>
            </div>
        </div>
    </section>

    
</body>
</html>