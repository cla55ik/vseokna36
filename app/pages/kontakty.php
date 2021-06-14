<?php


$page_title = 'Контакты Салона пластиковых окон Rehau';
$page_description = 'Контактный телефон, адрес, время работы и схема проезда к офису компании Салон окон REHAU в Воронеже. Официальный партнер REHAU!';
$img_og = 'https://dev.vseokna36.ru/src/img/contact-og.svg';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
 ?>

<main class="container-fluid  p-0">
<div class="container mt-70 mb-70" >
  <h1 class="title-32">Офис продаж окон REHAU</h1>
</div>
<div class="container mt-30 mb-90 d-flex flex-wrap">
  <div class="col-12 col-lg-7 d-none d-lg-block">
    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Abe1aeb8e101820d5284c5a2cd7bb9f7e957911064184e4f9d06614904691df2a&amp;width=600&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
  </div>
  <div class="col-12 col-lg-5 contact-list">
    <div class="contact-item d-flex align-items-center">
      <div class="col-2">
        <img src="/src/img/c-phone.svg" alt="Контакты салона окон">
      </div>
      <div class="col-10">
        <div class="contact-title">
          Телефон
        </div>
        <div class="contact-text">
          <a href="tel:<?=$contacts['tel_link'] ; ?>"><?=$contacts['tel'] ; ?></a>
        </div>
      </div>
    </div>

    <div class="contact-item d-flex align-items-center">
      <div class="col-2">
        <img src="/src/img/c-mail.svg" alt="Контакты салона окон">
      </div>
      <div class="col-10">
        <div class="contact-title">
          E-mail
        </div>
        <div class="contact-text">
          <a href="mailto:<?=$contacts['mail'] ; ?>"><?=$contacts['mail'] ; ?></a>
        </div>
      </div>
    </div>

    <div class="contact-item d-flex align-items-center">
      <div class="col-2">
        <img src="/src/img/c-geo.svg" alt="Контакты салона окон">
      </div>
      <div class="col-10">
        <div class="contact-title">
          Адрес
        </div>
        <div class="contact-text">
          <?=$contacts['address'] ; ?>
        </div>
      </div>
    </div>

    <div class="contact-item d-flex align-items-center">
      <div class="col-2">
        <img src="/src/img/c-time.svg" alt="Контакты салона окон">
      </div>
      <div class="col-10">
        <div class="contact-title">
          Время работы
        </div>
        <div class="contact-text">
          <?=$contacts['time'] ; ?>
        </div>
      </div>
    </div>

  </div>
</div>

<div class="container mt-70 mb-70">
  <h2 class="text-32">Реквизиты компании</h2>
</div>
<div class="container mb-100 d-flex flex-wrap align-items-center">
  <div class="col-12 col-lg-6">
    <img class="img-fluid" src="/src/img/sertificat.jpg" alt="">
  </div>
  <div class="col-12 col-lg-6 requisites">
    <div class="requisites-item">
      <p> <strong>Индивидуальный предприниматель</strong> </p>
      <p>Варванцев Владимир Владимирович</p>
    </div>

    <div class="requisites-item">
      <span> <strong>ОГРН </strong> </span>
      <span>316366800099806</span>
    </div>
    <div class="requisites-item">
      <span> <strong>ИНН </strong> </span>
      <span>360500872302</span>
    </div>

    <div class="requisites-item">
      <p> <strong>Юридический адрес:</strong> </p>
      <p>396311 Воронежская обл</p>
      <p>с.Новая Усмань ул.Полевая д.49 кв.15</p>
    </div>

  </div>
</div>




</main>
