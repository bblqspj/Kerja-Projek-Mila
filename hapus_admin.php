<?php
    session_start();
    include('conn.php'); 

// Fungsi logout
function logout_admin() {
    // Hapus semua session
    session_unset();
    session_destroy();

    // Redirect ke halaman login
    header("Location: login.php");
}

?>