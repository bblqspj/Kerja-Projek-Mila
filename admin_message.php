<?php
include 'conn.php';
session_start ();
$admin_name = $_SESSION['username'];

if(isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $select_delete_image = mysqli_query($conn, "SELECT image FROM `products` WHERE id = '$delete_id'") or die ('query failed');
    $fetch_delete_image = mysqli_fetch_assoc($select_delete_image);

    mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die ('query failed');
        header('location: admin_product.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - gαleriedeperles</title>

    <style>

    .btn {
        justify-content: center;
            align-items: center;
            margin: 20px 80px;
            background-color: #fff;
            color: black;
            width: 90%;
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

.message-container {
    padding: 3rem;
     margin-top: -3.5rem;
     position: relative;  
}

.message-container title {
    padding-top: 1rem;
}

</style>
</head>
<body>
    <?php
    if(isset($message)) {
   foreach($message as $message){
   echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this. parentElement.style.display = `none`;"></i> </div>';
   };
   };
   
   ?>
    <?php include 'aadmin_header.php'; ?>
    
    <section class="message-container">
        <h1 class="tittle" style="margin-left: 500px">unread message</h1>
        <div class="box-container">
            <?php 
               $select_message = mysqli_query($conn, "SELECT * FROM `message`") or die ('query failed');
               if (mysqli_num_rows($select_message)>0) {
                while($fetch_message = mysqli_fetch_assoc($select_message)) {
                    ?>
                    <div class="box">
                        <p>user id: <span><?php echo $fetch_message['id']; ?></span></p>
                        <p>name: <span><?php echo $fetch_message['name']; ?></span></p>
                        <p><?php echo $fetch_message['message']; ?><p>
                            
                    </div>
                <?php
                }
               }
               ?>
        </div>
    </section>

</body>
</html>