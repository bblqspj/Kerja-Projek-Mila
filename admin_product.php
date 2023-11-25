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

if(isset($_POST['add_product'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $detail = $_POST['detail'];
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;

    $query = "INSERT INTO `products` VALUES (null, '$name', '$price', '$detail', '$image')"; 
    $sql = mysqli_query($conn, $query);
    if($sql) {
        move_uploaded_file($image_tmp_name, $image_folder);
        $message[] = 'product add successfully';
    } else {
        $message[] = 'could not add the roduct';
    }
};

if(isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $select_delete_image = mysqli_query($conn, "DELETE FROM products WHERE id='$delete_id'") or die ('query failed');
    // $fetch_delete_image = mysqli_fetch_assoc($select_delete_image);
    // mysqli_query($conn, "DELETE FROM `products` WHERE id = '$delete_id'") or die ('query failed');
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
        width: 50%;
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

.display-product-table table {
    width: 90%;
    text-align: center;
    margin-top: 100px;
    color: black;
}

.display-product-table table thead th{
    padding: 1rem;
    background-color: black;
    color: white;
}

.display-product-table table td {
    padding: 1.5rem;
}

.display-product-table table tr:nth-child(even) {
    background-color: lightgray;
}

.display-product-table table td:first-child {
    padding: 0;
}

.display-product-table table th, td {
      border: 1px solid #000;
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
        <form method="POST" enctype="multipart/form-data">
            <input type="text" name="name"  placeholder="tambah produk" required>
            <input type="text" name="price"  placeholder="tambah harga produk" required>
            <input type="text" name="detail"  placeholder="tambah detail produk" required>
            <input type="file" name="image" id="image" accept="image/jpg, image/jpeg, image/png" required>
            <input type="submit" value="add_product" name="add_product" class="option-btn">
        </form>
    </section>

    <section class="display-product-table" style="margin-left: 150px">
        <table>
            <thead>
                <th>product image</th>
                <th>product name</th>
                <th>product price</th>
                <th>product detail</th>
                <th>action</th>

                <tbody>
                    <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                    if(mysqli_num_rows($select_products)>0) {
                        while($row = mysqli_fetch_assoc($select_products)){
                    ?>

                    <tr>
                        <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="120" alt=""></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <td><?php echo $row['product_detail']; ?></td>
                        <td>
                            <a href="admin_product.php?delete=<?php echo $row['id']; ?>"class="delete-btn" onclick="return confirm('are you sure want to delete this?');"> <i class="fas fa-trash" hover="color: white;"></i>delete</a>
                            <a href= "admin_edit.php?edit=<?php echo $row['id']; ?>" class="option-btn"><i class="fas fa-edit" hover="color: white;"></i>update</a>
                        </td>
                    </tr>

                    
                    <?php
                    };
                } else {
                    echo "<span>no product added</span>";
                }
                    ?>
                
                    
                </tbody>
            </thead>
        </table>
    </section>
</body>
</html>