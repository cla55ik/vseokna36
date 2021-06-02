<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Настройка viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Подключаем Bootstrap CSS
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    -->

    <!-- Подключаем Custom CSS -->
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/src/css/style.css">

    <!--Подключаем Шрифт-->
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <!--VUE js-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>



    <!-- favicon -->
    <link type="image/x-icon" rel="shortcut icon" href="/src/img/favicon.svg">

    <title><?=$page_title; ?></title>
  </head>
  <body>
<?php include_once($_SERVER['DOCUMENT_ROOT']. "/config/options.php"); ?>
<header class="">
  <div class="container-fluid bg-light p-1">
    <div class="container d-flex flex-wrap pt-2 pb-2">
      <div class="col-lg-3 head-logo d-flex align-items-center gray">
        <a class="d-flex align-items-center" href="/">
          <img src="/src/img/logo-color.svg" alt="Логотип салона окон Rehau">
          <span>САЛОН <br />ЭНЕРГОСБЕРЕГАЮЩИХ<br /> ТЕХНОЛОГИЙ</span>
        </a>
      </div>
      <div class="col-lg-3 d-flex flex-wrap align-items-center gray">
        <div class="d-flex head-grafik align-items-center pt-1 pb-1">
          <img class="img-fluid" src="/src/img/clock.svg" alt="График работы салона окон Rehau">
          <span>Пн-Пт 09:00-18:00, Сб 10:00-15:00</span>
        </div>
        <div class="d-flex head-grafik align-items-center pt-1 pb-1">
          <img class="img-fluid" src="/src/img/email.svg" alt="Написать письмо на электронную почту">
          <a href="mailto:<?= $contacts['mail'];?>"><?= $contacts['mail'];?></a>
        </div>
      </div>
      <div class="head-calc col-lg-3 d-flex align-items-center justify-content-center pink">
        <a href="#calc" class="d-flex align-items-center ">
          <img src="/src/img/calculator.svg" alt="Калькулятор стоимости окон">
          <span class="pink">Калькулятор<br />стоимости</span>

        </a>
      </div>
      <div class="head-contacts col-lg-3 d-flex flex-wrap justify-content-end">
        <p class="m-0 gray text-14"><?= $contacts['address'];?></p>
        <a class="head-phone pink w-100 text-end" href="tel:<?= $contacts['tel_link'];?>"><?= $contacts['tel'];?></a>
        <a class="gray w-100 text-end gray text-16 head-modal-btn" href="#" onclick="modalVisible()">Заказать звонок</a>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-pink p-3">
    <nav class="container head-nav">
      <ul class="nav justify-content-between">
      <?php foreach ($nav_items as $name => $link): ?>
        <li class="nav-item">
          <a class="nav-link" href="<?=$link;?>"><?=$name;?></a>
        </li>
      <?php endforeach; ?>
      </ul>
    </nav>
  </div>

</header>
