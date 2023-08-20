<?php
session_start();

$judul = "Admin | ";

include "../plugins/configurasi/queryAdmin.php"; // sekaligus konek ke database
include "../plugins/configurasi/prosesAdmin.php";

if (isset($_SESSION['loginAdmin'])) {
    $judul = "Admin login | ";

    $idAdmin = $_SESSION['loginAdmin'];
    $adminLogin = queries("SELECT * FROM admin WHERE id = '$idAdmin'")[0];

    //Html
    include "../plugins/struktur-html/head/haedAll.php";
    include "../plugins/struktur-html/head/navbarAdmin.php";
    include "../plugins/struktur-html/head/navScd.php";

    include "../plugins/struktur-html/body/admin/index.php";
    
    // include "../plugins/struktur-html/foot/footerAll.php";
    include "../plugins/struktur-html/foot/script.php";
}else {
    $noSessions = 'login-admin text-center';

    //Html
    include "../plugins/struktur-html/head/haedAll.php";
    include "../plugins/struktur-html/head/navbarUmum.php";
    
    include "../plugins/struktur-html/body/admin/login.php";

    // include "../plugins/struktur-html/foot/footerAll.php";
}