<?php
    session_start();
    include('conn.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flower letter ⎯ gαleriedeperles</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://kit.fontawesome.com/1ab39a6f54.js" crossorigin="anonymous"></script>

<style>
        * {
        box-sizing: border-box;
        margin: 0;
        font-family: 'Crimson Text', serif;
        letter-spacing: 3px;
        padding-top: 30px;
    }
    p {
        font-size: 13px;
        margin-top: 50px;
        margin-left: -1000px;
        display: grid;
        justify-content: center;
    }

    img {
        margin: 50px;
    }

    h3 {
        margin-top: -550px;
        margin-left: 230px;
        display: grid;
        justify-content: center;
    }

    h10 {
        font-size: 13px;
        margin-top: 15px;
        margin-left: 50px;
        display: grid;
        justify-content: center;
    }

    h9 {
        font-size: 13px;
        margin-top: 20px;
        margin-left: 590px;
        display: grid;
    }

    h8 {
        font-size: 13px;
        margin-top: 3px;
        margin-left: 440px;
        margin-bottom: 20px;
        display: grid;
    }

    .quantity {
        font-size: 13px;
        margin-top: 20px;
        margin-left: 590px;
        display: grid;
    }

    .wrapper {
        margin-top: 20px;
        margin-left: 590px;
        height: 70px;
        width: 150px;
        display: flex;
        align-items: center;
        background: #fff;
        border: 1px solid #000;
    }

    .wrapper span {
        width: 40%;
        margin-top: -55px;
        text-align: center;
        font-size: 13px;
        font-weight: 30;
        cursor: pointer;
        user-select: none;
    }

    .wrapper span .num {
        font-size: 50px;
        border-right: 20px #000;
        border-left: 20px #000;
        pointer-events: none;
    }

    .btn {
        font-size: 13px;
        margin-top: 50px;
        margin-left: 590px;
        background-color: #fff;
        color: black;
        width: 22%;
        border-style: solid;
        border-width: 1px;
        padding: 8px 8px;
        cursor: pointer;
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

    .cart {
            color: black;
            cursor: pointer;
            outline: none;
            margin-left: 500px;
            margin-bottom: 20px;
        }

    header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
        }

        .instagram {
            cursor: pointer;
            margin-top: -20px;
            margin-left: 80px;
        }

        a {
            color: black;
            text-decoration: none;
        }

        .img {
            display: block;
            width: 10%;
            padding: 8px 8px;
            margin-left: 540px;
            margin-top: -90px;
        }
    
</style>
<body>
    <header class="header">
        <a href="https://www.instagram.com/galeriedeperles/" class="instagram"><i class="fa-brands fa-instagram" style="font-size: 20px;"></i></a>
        <a href="cart.php" class="cart"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i> <span id="cart">0</span></a>  
   </header>
   
   <a href="beranda.php" alt="">
   <img src="logoapkkpbaru.jpg" class="img" width="5%" height="5%"></img>
   </a>
   
    <p class="desc">shop - flower letter</p>
    <img src="img/polos fl.jpg" style="width: 500px; height: 500px;" alt="">
    <h3 style="letter-spacing: 6px;">flower letter beads bracelet</h3>
    </br>
    <h10>start 8.OOO</h10>
    <h9>gelang benar-benar mencerminkan cara saya melakukan pendekatan 
    </br>terhadap banyak hal akhir-akhir ini, jadi pesan dari seri ini sangat 
    </br>berkesan bagi saya. 
    
    </br></br>jika kamu pernah merasakan hal yang sama - merasa seperti sedang
    </br>menahan sebagian  dari dirimu - aku harap melihat huruf pada gelang ini
    </br>dapat mengingatkanmu untuk melakukan apa yang ingin kamu lakukan, dan yang lebih penting percayalah pada diri sendiri saat melakukannya :)</h9>

    <div class="tipe" style="margin-left: 590px;">
    type :
    </br></br>
    <select style="width: 300px; height: 70px;">
        <option>select type</option>
        <option>a</option> 
        <option>b</option> 
        <option>c</option> 
        <option>d</option> 
        <option>e</option> 
        <option>f</option> 
        <option>g</option> 
        <option>h</option> 
        <option>i</option> 
        <option>j</option> 
        <option>k</option> 
        <option>l</option> 
        <option>m</option> 
        <option>n</option>
        <option>o</option>
        <option>p</option> 
        <option>q</option>
        <option>r</option>
        <option>s</option>
        <option>t</option>
        <option>u</option>
        <option>v</option>
        <option>w</option>
        <option>x</option>
        <option>y</option>
        <option>z</option>
    </select>
    </div>

    <input type="button" value="add to cart" name="add" class="btn" id="login_btn" onclick="cart()">
    
    </br></br></br></br></br></br></br></br></br></br></br></br></br></br>
    <h8>galeriedeperles // galeriedeperles@gmail.com</h8>

     <script>
        let i = 0;
        function cart() {
            i += 1;
            document.getElementById('cart').innerHTML = i.toString();
            // console.log(i)
        }
    </script>
    <script src="js/script.js"></script>
</body>
</html>