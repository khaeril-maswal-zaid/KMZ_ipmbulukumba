<?php
if(!isset($_GET['ipmers'])){
    header("location:../");
}else{
    include "../plugins/configurasi/queryAdmin.php";
    
    //Judul title halaman
    $judul = $artikelIpmers['judul']." | ";
    
    include "../plugins/struktur-html/head/haedAll.php";
    include "../plugins/struktur-html/head/navbarUmum.php";
    
    include "../plugins/struktur-html/body/ipmers/ipmers.php";
    
    include "../plugins/struktur-html/foot/footerAll.php";
    include "../plugins/struktur-html/foot/script.php";

}