<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
  $url = 'https://';
} else {
  $url = 'http://';
}
$url .= $_SERVER['HTTP_HOST'] . "/ipmbulukumba";
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.82.0">

  <meta property="og:site_name" content="IPM Bulukumba">
  <meta property="og:title" content="<?= $title ?>" />
  <meta property="og:description" content="Situs resmi IPM Bulukumba" />
  <meta property="og:image" itemprop="image" content="<?= $url . $image ?>">
  <meta property="og:image:width" content="720" />
  <meta property="og:image:height" content="460" />
  <meta property="og:type" content="website" />
  <meta property="og:updated_time" content="<?= $updated_time ?>" />

  <title><?= $judul ?>IPM Bulukumba</title>
  <link href="<?= $url ?>/plugins/assets/images/ipm.png" rel="icon">

  <!-- Bootstrap core CSS -->
  <link href="<?= $url ?>/plugins/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $url ?>/plugins/assets/css/carousel.css" rel="stylesheet">
  <link href="<?= $url ?>/plugins/assets/css/dashboard.css" rel="stylesheet">
  <link href="<?= $url ?>/plugins/assets/css/offcanvas.css" rel="stylesheet">
  <link href="<?= $url ?>/plugins/assets/css/defult.css" rel="stylesheet">
  <link href="<?= $url ?>/plugins/assets/css/signin.css" rel="stylesheet">

  <!-- Font Khusus Home Admin -->
  <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-JHSF4FF4XW"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-JHSF4FF4XW');
  </script>

  <!--Google adses-->
  <script data-ad-client="ca-pub-3151537190694448" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>