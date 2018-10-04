<?php header('Content-Type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-113378799-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113378799-1');
  </script>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <meta Keywords="Tinn-R, Tinnr, R, Estatística">
  <title>Tinn-R Editor</title>

  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="">
    <nav class="orange lighten-1" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="index.php" class="brand-logo white-text">Tinn-<span class="white-text">R</span> </a>
        <ul class="right hide-on-med-and-down">
          <li><a class="white-text" href="index.php">Home</a></li>
          <li><a class="white-text" href="sobre.php">Sobre</a></li>
          <li><a class="white-text" href="download.php">Download</a></li>
          <li><a class="white-text" href="https://groups.google.com/forum/?hl=en#!forum/tinn-r" target="_blank">Fórum<i class="fa fa-external-link right"></i></a></li>
          <li>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                <input  class="ponteiro" name="cmd" type="hidden" value="_s-xclick" />
                <input class="ponteiro" name="hosted_button_id" type="hidden" value="B5GDCSVXH6JV4" />
                <input style="vertical-align: middle" class="ponteiro center-align" alt="PayPal - The safer, easier way to pay online!" name="submit" src="assets/img/donate.png" type="image" />
            </form>
          </li>
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a  href="index.php">Home</a></li>
          <li><a  href="sobre.php">Sobre</a></li>
          <li><a  href="download.php">Download</a></li>
          <li><a  href="https://groups.google.com/forum/?hl=en#!forum/tinn-r">Fórum<i class="fa fa-external-link right"></i></a></li>
          <li>
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                <input  class="ponteiro" name="cmd" type="hidden" value="_s-xclick" />
                <input class="ponteiro" name="hosted_button_id" type="hidden" value="B5GDCSVXH6JV4" />
                <input style="vertical-align: middle;padding: 0px 32px 0px 32px" class="ponteiro center-align" alt="PayPal - The safer, easier way to pay online!" name="submit" src="assets/img/donate.png" type="image" />
            </form>
          </li>
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="white-text material-icons">menu</i></a>
      </div>
    </nav>
  </div>