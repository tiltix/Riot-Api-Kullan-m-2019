<?php require("config.php");?>
<!doctype html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="MethaLoL,MethaLoL Hero Builds,Riot Api,riot api kullanımı">
	<meta name="description" content="MethaLoL Developer Testleri ve Riot Api Kullanımı">
	<meta name="author" content="Rafet Hokka">
	<meta name="generator" content="Jekyll v3.8.5">
	<title>MethaLoL - Dev</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="shortcut icon" type="img/png" href="img/favicon.png"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="http://localhost/methalol/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://localhost/methalol/css/css.css" type="text/css" />
<link rel="stylesheet" href="./css/new.css" type="text/css"/>

<style>
</style>
</head>
<body id="bodyy">
<!-- İletişim - Hakkımızda - Şampiyonlar - Build ve İstatislikler - Sıralama -->
<nav id="navv" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand" href="index.php" style="font-family:Waterlily;font-size:30px;text-indent: 5px;" >MethaLoL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"><a class="nav-link" href="<?php echo $baseUrl; ?>/index.php">Anasayfa <span class="sr-only">(current)</span></a></li>
      <li class="nav-item"><a class="nav-link" href="<? echo $baseUrl; ?>/champion.php">Şampiyonlar</a></li>
      <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Build ve İstatislikler</a></li>
      <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Hakkımızda</a></li>
      <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">İletişim</a></li>
      <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Sıralama</a></li>
      <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">İsim Kontrol</a></li>
      <li class="nav-item"><a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">İtemler</a></li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="p-3"></div>
<div class="container p-3">
