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

//update
if(isset($_POST['update_product'])) {
    $update_id = $_POST['update_id'];
    $update_name = $_POST['update_name'];
    $update_price = $_POST['update_price'];
    $update_detail = $_POST['update_detail'];
    $update_image = $_FILES['update_image']['name'];
    $update_image_tmp_name = $_FILES ['update_image']['tmp_name'];
    $update_image_folder = 'uploaded_img/'.$update_image;

    $update_query = mysqli_query($conn, "UPDATE `products` SET `id` = '$update_id',`name` = '$update_name', `price` = '$update_price', `product_detail` = '$update_detail', `image` = '$update_image' WHERE id = '$update_id'") or die ('query failed');
    if($update_query) {
        move_uploaded_file($update_image_tmp_name,$update_image_folder);
        header('location: admin_product.php');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - gαleriedeperles</title>

    <style>

.form-container {
        position: relative;
        max-width: 500px;
        width: 100%;
        padding: 80px 100px 100px;
        background: #fff;
        border: 3px solid rgb(0, 0, 0, 0.1);
        border-radius: 10px;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.1);
        margin-left: 365px;
        margin-bottom: 90px;
    }

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

.btn,
.option-btn,
.delete-btn {
        justify-content: center;
        align-items: center;
        margin: 20px 80px;
        background-color: #fff;
        color: black;
        width: 30%;
        border-style: solid;
        border-width: 2px;
        padding: 8px 8px;
        cursor: pointer;
        border-radius: 5px;
        transition: background-color 0.2s ease-in-out;
        color: black;
        text-decoration: none;
        display: inline-block;
        text-align: center;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover {
    justify-content: center;
        align-items: center;
        background-color: black;
        color: white;
        border-style: solid;
        border-width: 2px;
}


.delete-btn {
    margin-top: 0;
    color: black;
}

.option-btn {
    margin-top: 0;
    color: black;
}

.message {
    background-color: black;
    position: stiky;
    top: 0; left:0;
    z-index: 10000;
    border-radius: -5rem;
    background-color: white;
    padding: 1.5rem 2rem;
    margin: 0 auto;
    max-width: 1200px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1.5rem;
}

.message span {
    color: black;
}

.message i {
    color: black;
    cursor: pointer;
}

.message i:hover {
    color: red;
}

.edit-form-container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    overflow-y: auto;
    z-inex: 110;
    padding: 2rem;
    align-items: center;
    justify-content: center;
    display: block;
}

.edit-form-container form {
    box-shadow: lightgray;
    width: 50%;
    background: white;
    padding: 3rem;
    margin: 2rem auto;
    text=align: center;
}

.edit-form-container .edit,
.edit-form-container .btn  {
    width: 40%;
    cursor: pointer;
}

.edit-form-container form img {
    width: 60%;
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

    <section class="form-container">
        <?php
        if(isset($_GET['edit']));
        $edit_id = $_GET['edit'];
        $edit_query = mysqli_query($conn, "SELECT * FROM  `products` WHERE id = $edit_id");
        if(mysqli_num_rows($edit_query) > 0) {
            while($fetch_edit = mysqli_fetch_assoc($edit_query)) {
        
        ?>

        <form action="" method="post" enctype="multipart/form=data">
            <img src="uploaded_img/<?php echo $fetch_edit['image']; ?>" height="120" alt="">

            <input type="hidden" name="update_id" value="<?php echo $fetch_edit['id']; ?>">
            <input type="text" class="box" required name="update_name" value="<?php echo $fetch_edit['name']; ?>">
            <input type="text" class="box" required name="product_detail" value="<?php echo $fetch_edit['product_detail']; ?>">
            <input type="number" class="box" required name="update_price" value="<?php echo $fetch_edit['price']; ?>">
            <input type="file" class="box" required name="update_image" accept="image/png, image/jpg, image/jpeg">
            <input type="submit" value="update" name="update_product" class="option-btn">
    
    </form>
        <?php
                    }
                };
        ?>
    </section>
</body>
</html>
