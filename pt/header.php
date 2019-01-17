<?php 
  header('Content-Type: text/html; charset=utf-8');
  $page_name = basename(basename($_SERVER['SCRIPT_FILENAME']), ".php");
  if($page_name == "index")
    $page_name = ""; 
?>
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
  <meta name="keywords" ="Tinn-R, Tinnr, R, IDE, Estatística, editor, processador de texto, open source, grátis, bioestatística ">
  <meta name="description" content="<?php echo $description ?>">

  <meta property="og:title" content="<?php echo $title ?>">
  <meta property="og:type" content="product">
  <meta property="og:image" content="https://a.fsdn.com/allura/p/tinn-r/icon?1547382635">
  <meta property="og:url" content="http://nbcgib.uesc.br/tinnr/">
  <meta property="og:site_name" content="Tinn-R">
  <meta property="og:description" content="<?php echo $description ?>">
  <title><?php echo $title ?></title>

  <link rel="apple-touch-icon" sizes="57x57" href="../assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="../assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="../assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="../assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="../assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="../assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="../assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="../assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="../assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../assets/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="orange lighten-1">
    <div class="container hide-on-small-only">
      <div class="row" style="margin-bottom:0px;"> 
        <div class="col m2 right"> 
        <select class="browser-default white-text" style="height: 2rem;font-size: 0.9rem;border: 0px solid #fff;background-color: transparent;" onchange="location = this.value;">
            <option class="black-text" value="/tinnr/pt/<?php echo $page_name ?>" style="font-size: 0.9rem;">Português (Brasil)</option>
            <option class="black-text" value="/tinnr/en/<?php echo $page_name ?>" style="font-size: 0.9rem;">English</option>
          </select>
        </div>
        <div class="col right" style="padding:0px;padding-top:2px"> <i class=" material-icons white-text">language</i></div>
      </div>
    </div>
  </div>
  <nav class="orange lighten-1" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="/tinnr/pt/" class="brand-logo white-text">Tinn-R</a>
      <ul class="right hide-on-med-and-down">
        <li><a class="white-text" href="/tinnr/pt/">Home</a></li>
        <li><a class="white-text" href="about">Sobre</a></li>
        <li><a class="white-text" href="download">Download</a></li>
        <li><a class="white-text" href="https://groups.google.com/forum/?hl=en#!forum/tinn-r" target="_blank">Fórum<i class="fa fa-external-link right"></i></a></li>
        <li><a class="white-text" href="donation">Doações<i class="fa fa-gift fa-2x right"></i></a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a  href="/tinnr/pt/">Home</a></li>
        <li><a  href="about">Sobre</a></li>
        <li><a  href="download">Download</a></li>
        <li><a  href="https://groups.google.com/forum/?hl=en#!forum/tinn-r">Fórum<i class="fa fa-external-link right"></i></a></li>
        <li><a  href="donation">Doações<i class="fa fa-gift fa-2x  right"></i></a></li>
        <li><div class="divider" style="margin-bottom:8px"></div></li>
        <li><a class="subheader center">Idioma</a></li>
        <li><a  href="/tinnr/pt">Português (Brasil)</a></li>
        <li><a  href="/tinnr/en">English</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="white-text material-icons">menu</i></a>
    </div>
  </nav>