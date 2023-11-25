

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin - gαleriedeperles</title>
    <!--icon-->
    <script src="https://kit.fontawesome.com/1ab39a6f54.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
            display: block;
            align-items: center;
            justify-content: center;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
            overflow-x: hidden;
        }

        header {
            display: inline-block;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            padding-bottom: -40px;
            margin-left: 30%;
        }

        .shop {
            cursor: pointer;
        }

        .isi {
            margin-top: 200px;
            text-align: center;
            display: grid;
            justify-content: center;
            align-items: center;
        }

        .h1 {
            display: flex;
            justify-content: center;
            font-size: 30px;
            letter-spacing: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

       .navbar {
           font-size: 16px;
           color: black;
           text-decoration: none;
           display: inline-block;
           text-align: center;
           margin-bottom: 130px;
       }

       .navbar a {
           color: black;
           text-decoration: none;
           position: relative;
       }


    .btn {
            justify-content: center;
            align-items: center;
            margin: 20px 80px;
            background-color: #fff;
            color: black;
            width: 10%;
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

    p {
        font-size: 16px;
        text-align: center;
        margin: 30px 100px;
    }

    .header .icons {
        display: flex;
    }

    .navbar a:hover {
            justify-content: center;
            align-items: center;
            color: pink;
    }

    
    </style>
</head>
<body>
<form action="logout.php" method="post">
        <button type="submit" style="margin: px;" class="btn btn-danger">logout</button>
</form>

<header class="header">
    <nav class="navbar" style="margin-left: -20px;">
            <a href="admin_panel.php" class="link">home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="admin_product.php" alt="">tambah produk</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="admin_order.php" alt="">order</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="admin_message.php" alt="">chat</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </nav>
</header>

<div class="banner">
    <div class="detail">
    <h1 class="h1">admin dashboard.</h1>
    <p> welcome to admin dashboard !. </p>
    </div>
</div>

</script>                                                                                                                                                                                                   
</body>
</html>