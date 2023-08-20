<?php
//nonaktifkan session
session_start();
$_SESSION = [];
session_unset();
session_destroy();

$judul = "";

include "plugins/configurasi/queryAdmin.php"; 

include "plugins/struktur-html/head/haedAll.php";
include "plugins/struktur-html/head/navbarHome.php";

include "plugins/struktur-html/body/home/home.php";

include "plugins/struktur-html/foot/footerAll.php";
include "plugins/struktur-html/foot/script.php";

