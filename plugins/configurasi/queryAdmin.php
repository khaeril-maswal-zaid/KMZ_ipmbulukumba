<?php
require "functionProses.php";

//Tampikan tabel KETUMS dari AJAX
$ketums = queries("SELECT * FROM ketums");

//Tampikan tabel STRUKTUR dari AJAX
$struktur = queries("SELECT * FROM struktur");

//Tampikan tabel ADMIN WEB dari AJAX
$adminWeb = queries("SELECT * FROM admin");

//Tampikan tabel KADER TM.1 dari AJAX
$kaderTM1 = queries("SELECT * FROM kaderTM1");

//Tampikan tabel artikel di ADMIN dari AJAX
if (isset($ktg)) {
    $kategori = queries("SELECT * FROM artikel WHERE kategori = '$ktg' ORDER BY id DESC");
}

//Tampilkan data Artikel di UMUM
if (isset($_GET['ipmers'])) {
    $id = $_GET['ipmers'];
    $artikelIpmers = queries("SELECT * FROM artikel WHERE link = '$id'")[0];

    //jika tidak menemukan id yg dikirim lempar ke home
    if ($artikelIpmers == null) {
        header("location:../");
    }

    //untuk meta data munculkan thumnail gambar di link WA dan FB................
    $title =  $artikelIpmers['judul'];
    $image =  '/plugins/inputan-user/artikel/' . $artikelIpmers['foto'];
    $updated_time = $artikelIpmers['time'];
} elseif (isset($personilPd)) {
    //untuk meta data munculkan thumnail gambar di link WA dan FB
    $title =  'Struktur PD IPM Bulukumba Periode 2018-2020';
    $image =  '/plugins/assets/images/ipm.png';
    $updated_time = 1619760129;
} elseif (isset($ketumMasaKeMasa)) {
    //untuk meta data munculkan thumnail gambar di link WA dan FB
    $title =  'Ketua Umum PD IPM Bulukumba dari masa kemasa';
    $image =  '/plugins/assets/images/ipm.png';
    $updated_time = 1619760129;
} else {
    //untuk meta data munculkan thumnail gambar di link WA dan FB
    $title =  'Pimpinan Daerah Ikatan Pelajar Muhammadiyah Kabupaten Bulukumba';
    $image =  '/plugins/assets/images/ipm.png';
    $updated_time = 1619760129;
}


// model function
//.............................
// Tampilkan data Artikel di home untuk judul artikel berdasarkan kategori
function artukelHome($ktg, $jumlahPerhalaman)
{
    $ah = queries("SELECT * FROM artikel WHERE kategori = $ktg ORDER BY id DESC LIMIT 0, $jumlahPerhalaman");
    return $ah;
}

//ambil foto bidum
function bidum($e)
{
    return queries("SELECT foto FROM struktur WHERE amanah = '$e'")[0]['foto'];
}

//Khusus edit data Kder tm 1
function editData($a, $b, $c)
{
    return queries("SELECT * FROM $a WHERE $b = '$c'")[0];
}


//Khusus tangkap jumlah PR & Angkatan yg sudah terinput TM1
function optionTM1($target, $ket)
{
    global $conn;

    $option = mysqli_query($conn, "SELECT $target FROM kaderTM1");

    $rows = [];
    while ($row = mysqli_fetch_assoc($option)) {
        $rows[] = $row[$target];
    }
    $option = array_unique($rows);

    $rows1 = [];
    foreach ($option as $key) {
        $rows1[] = '<option>' . $ket . $key . '</option>';
    }

    return implode('', $rows1);
}

//..............
//Khusus Struktur
$bidum = [
    'Ketua Umum',
    'Sekretaris Umum',
    'Bendahara Umum'
];

$bidor = [
    'Ketua Bidang Organisasi',
    'Sekretaris Bidang Organisasi',
    // 'Anggota Bidang Organisasi'
];

$bider = [
    'Ketua Bidang Perkaderan',
    'Sekretaris Bidang Perkaderan',
    //'Anggota Bidang Perkaderan'
];

$kdi = [
    'Ketua Bidang KDI',
    'Sekretaris Bidang KDI',
    // 'Anggota Bidang KDI'
];

$pip = [
    'Ketua Bidang PIP',
    'Sekretaris Bidang PIP',
    'Anggota Bidang PIP'
];

$asbo = [
    // 'Ketua Bidang ASBO',
    // 'Sekretaris Bidang ASBO',
    // 'Anggota Bidang ASBO'
];

$advokasi =  [
    'Ketua Bidang Advokasi',
    'Sekretaris Bidang Advokasi',
    'Anggota Bidang Advokasi'
];

$pkk = [
    'Ketua Bidang PKK',
    // 'Sekretaris Bidang PKK',
    // 'Anggota Bidang PKK'
];

$ipmawati = [
    'Ketua Bidang IPMawati',
    'Sekretaris Bidang IPMawati',
    //'Anggota Bidang IPMawati'
];

$scBendahara = [
    'Bendahara 1',
    // 'Bendahara 2'
];


function strukturIni($target)
{
    $queBideum = [0 => true];
    for ($i = 0; $i < count($target); $i++) {
        $queBideum[] = queries("SELECT * FROM struktur WHERE amanah = '$target[$i]'")[0];
    }

    // var_dump($queBideum[0]);
    return $queBideum;
}

$queBidum = strukturIni($bidum);
$queBidor = strukturIni($bidor);
$queBider = strukturIni($bider);
$queKdi = strukturIni($kdi);
$quePip = strukturIni($pip);
$queAsbo = strukturIni($asbo);
$queAdvokasi = strukturIni($advokasi);
$quePkk = strukturIni($pkk);
$queIpmawati = strukturIni($ipmawati);
$queScBendahara = strukturIni($scBendahara);
