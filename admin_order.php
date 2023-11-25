<?php
include 'conn.php';
session_start ();
$admin_name = $_SESSION['username'];

if(isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $select_delete_image = mysqli_query($conn, "SELECT image FROM `order` WHERE id = '$delete_id'") or die ('query failed');
    $fetch_delete_image = mysqli_fetch_assoc($select_delete_image);

    mysqli_query($conn, "DELETE FROM `order` WHERE id = '$delete_id'") or die ('query failed');
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

.display-product-table table {
    width: 90%;
    text-align: center;
    margin-top: 100px;
}

.display-product-table table thead th{
    padding: 1rem;
    background-color: black;
    color: white;
}

.display-product-table table td {
    padding: 1.5rem;
    color: black;
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
    <section class="display-product-table" style="margin-left: 150px">
        <table>
            <thead>
                <th>user name</th>
                <th>user id</th>
                <th>placed on</th>
                <th>total price</th>
                <th>method</th>
                <th>total product</th>
                <th>address</th>

                <tbody>
                    <?php
                    $select_products = mysqli_query($conn, "SELECT * FROM `order` ");
                    if(mysqli_num_rows($select_products)>0) {
                        while($row = mysqli_fetch_assoc($select_products)){
                    ?>

                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['placed_on']; ?></td>
                        <td><?php echo $row['total_price']; ?></td>
                        <td><?php echo $row['method']; ?></td>
                        <td><?php echo $row['total_product']; ?></td>
                        <td><?php echo $row['address']; ?></td>

                    
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