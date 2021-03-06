<!DOCTYPE html>

<?php
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
?>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- Настройка viewport -->
  <title><?= $page_title; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="description" content="<?= $page_description; ?>">
  <meta property="og:title" content="<?= $page_title; ?>">
  <meta property="og:image" content="<?= $img_og; ?>" />
  <meta property="og:type" content="article">
  <meta property="og:url" content="<?= $url; ?>">
  <meta property="og:description" content="<?= $page_description; ?>">
  <!-- favicon -->
  <link type="image/x-icon" rel="shortcut icon" href="/src/img/favicon.ico">
  <!-- Подключаем Custom CSS -->
  <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/src/css/style.css">
  
  <script src="/src/js/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>







</head>

<body>
  <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/config/options.php"); ?>
  <div class="container-fluid p-0 d-none d-lg-block header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-2 head-logo d-flex align-items-center gray">
          <a class="d-flex align-items-center" href="/">
            <img src="/src/img/logo-color.svg" alt="Логотип салона окон Rehau">
            <span class="salon-title">САЛОН <br />ЭНЕРГОСБЕРЕГАЮЩИХ<br /> ТЕХНОЛОГИЙ</span>
          </a>
        </div>
        <div class="col-4 d-flex justify-content-around align-items-center menu-sticky">
          <a href="/" class="d-flex align-items-center">
            <img src="/src/img/window-pink.svg" alt="">
            <span>окна<br />rehau</span>
          </a>
          <a href="/osteklenie-balkonov-i-lodzhij-v-voronezhe" class="d-flex align-items-center">
            <img src="/src/img/balkon-pink.svg" alt="">
            <span>Балконы<br />лоджии</span>
          </a>
          <a href="/okna-dlya-kottedzhej-i-zagorodnyh-domov-v-voronezhe" class="d-flex align-items-center">
            <img src="/src/img/house-pink.svg" alt="">
            <span>Окна<br />в дом</span>
          </a>
        </div>
        <div class="col-3 d-flex justify-content-end align-items-center">
          <div class="col-8 text-center href-modal">
            <span data-toggle="modal" data-target="#modalCallback">Бесплатный замер</span>
          </div>

          <div class="col-4 text-center href-contacts">
            <a href="/kontakty">Контакты</a>
          </div>
        </div>
        <div class="col-3 d-flex justify-content-end align-items-center">
          <a class="head-phone pink w-100 text-end" href="tel:<?= $contacts['tel_link']; ?>"><?= $contacts['tel']; ?></a>
        </div>
      </div>

    </div>

  </div>
  <header class="">
    <div class="container-fluid bg-light p-1">
      <div class="container d-flex flex-wrap pt-2 pb-2">
        <div class="col-5 col-lg-3 head-logo d-flex align-items-center gray">
          <a class="d-flex align-items-center" href="/">
            <img src="/src/img/logo-color.svg" alt="Логотип салона окон Rehau">
            <span>САЛОН <br />ЭНЕРГОСБЕРЕГАЮЩИХ<br /> ТЕХНОЛОГИЙ</span>
          </a>
        </div>
        <!-- Mobile -->
        <div class="col-7 d-flex d-md-none justify-content-end mobile-right-menu">
          <div class="">
            <a href="#calculator"> <img src="/src/img/calc.svg" alt="калькулятор стоимости окон"> </a>
          </div>
          <div class="">
            <span onclick="modalAddress()"> <img src="/src/img/address.svg" alt="адрес салона окон"> </span>
          </div>
          <div class="">
            <a href="tel:<?= $contacts['tel_link']; ?>"> <img src="/src/img/phone.svg" alt="телефон салона окон"> </a>
          </div>
        </div>
        <!-- End Mobile -->
        <div class="d-none col-lg-3 d-md-flex flex-wrap align-items-center gray">
          <div class="d-flex head-grafik align-items-center pt-1 pb-1">
            <img class="img-fluid" src="/src/img/clock.svg" alt="График работы салона окон Rehau">
            <span><?= $contacts['time']; ?></span>
          </div>
          <div class="d-flex head-grafik align-items-center pt-1 pb-1">
            <img class="img-fluid" src="/src/img/email.svg" alt="Написать письмо на электронную почту">
            <a href="mailto:<?= $contacts['mail']; ?>"><?= $contacts['mail']; ?></a>
          </div>
        </div>
        <div class="d-none d-md-flex head-calc col-lg-3  align-items-center justify-content-center pink">
          <a href="#calc" class="d-flex align-items-center ">
            <img src="/src/img/calculator.svg" alt="Калькулятор стоимости окон">
            <span class="pink">Калькулятор<br />стоимости</span>

          </a>
        </div>
        <div class="d-none d-md-flex head-contacts col-lg-3  flex-wrap justify-content-end">
          <p class="m-0 gray text-14"><?= $contacts['address']; ?></p>
          <a class="head-phone pink w-100 text-end" href="tel:<?= $contacts['tel_link']; ?>"><?= $contacts['tel']; ?></a>
          <a class="gray w-100 text-end gray text-16 head-modal-btn" data-toggle="modal" data-target="#modalCallback">Заказать звонок</a>
        </div>
      </div>
    </div>
    <!--modal address-->
    <div class="modal-address modal-hide p-3 text-center">
      <span class="address-title">
        Офис:
      </span>
      <span class="text-end">
        <a href="https://yandex.ru/maps/-/CCUa7FQBSC" target="_blank">
          <?= $contacts['address'];  ?>
        </a>

      </span>
    </div>
    <!-- end modal address-->
    <div class="d-none d-md-block container-fluid bg-pink p-3">
      <nav class="container head-nav">
        <ul class="nav justify-content-between">
          <?php foreach ($nav_items as $name => $link) : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= $link; ?>"><?= $name; ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>

  </header>