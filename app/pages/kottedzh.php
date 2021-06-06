<?php


$page_title = 'Окна для коттеджей и загородных домов в Воронеже - Пластиковые Окна Rehau';
$page_description = 'Пластиковые окна для коттеджа или загородного дома в Воронеже от официального партнера REAHU. Качественное остекление загородных домов и коттеджей!';
$img_og = 'https://dev.vseokna36.ru/src/img/kottedzh-og.jpg';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
 ?>
<main class="container-fluid p-0">
  <div class="container-fluid main-kottedzh p-0">
    <div class="main-balkon-layout">
      <div class="container main-kottedzh-content pt-100 pb-90">
        <div class="col-lg-7 h1-block">
          <h1>
            <span class="first d-block title-36">ОКНА ДЛЯ КОТТЕДЖЕЙ И ЗАГОРОДНЫХ ДОМОВ -</span>
            <span class="pink text-uppercase d-block title-36">ЗАСТЕКЛИ ДОМ ВЫГОДНО</span>
          </h1>
          <p class="text-24">Качественные окна от завода в Воронеже</p>
          <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/form-cta30.php"); ?>
        </div>
      </div>
    </div>

  </div>


  <div class="container-fluid bg-light">
    <div class="container pt-90 pb-70">
      <div class="text-center ">
        <h2 class="title-32-cc">Преимущества окон ПВХ<br /> для коттеджей от Салона REHAU</h2>
      </div>
      <div class="row advant-round-wrapper justify-content-between pt-50 pb-50">
        <div class="card-item-round text-center">
          <img src="/src/img/logo.svg" alt="Качество окон">
          <h3 class="title-18 mt-3">НЕМЕЦКОЕ КАЧЕСТВО REHAU</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/garuant.svg" alt="Гарантия на окна">
          <h3 class="title-18 mt-3">ГАРАНТИЯ 5ЛЕТ</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/10-years.svg" alt="Опыт работы">
          <h3 class="title-18 mt-3">РАБОТАЕМ С 2010 ГОДА</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/zamer.svg" alt="Замер окон">
          <h3 class="title-18 mt-3">БЕСПЛАТНЫЙ ЗАМЕР</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/window.svg" alt="Формы окон">
          <h3 class="title-18 mt-3">ЛЮБЫЕ ФОРМЫ И РАЗМЕРЫ</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/low-price.svg" alt="Цены на окна">
          <h3 class="title-18 mt-3">ДОСТУПНЫЕ ЦЕНЫ</h3>
        </div>
      </div>
    </div>
    </div>


    <div class="pb-50 pt-70">

    </div>
    <?php $calc_title_1 = 'УЗНАЙТЕ ТОЧНУЮ ';
          $calc_title_2 = 'СТОИМОСТЬ ОСТЕКЛЕНИЯ ';
     ?>
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/quiz.php"); ?>


    <div class="container-fluid bg-light mt-100 pt-70 pb-100">
      <div class="container">
        <h2 class="title-42 text-center ">ПРОФИЛЬНЫЕ СИСТЕМЫ REHAU</h2>
        <p class="text-center  mt-20  mb-70">Оконные профили REHAU прошли десятилетия испытаний во всех климатических условиях и пригодны к эксплуатации даже в самой экстремальной среде. Поверхность профиля не теряет цвет со временем. Оконные системы из профилей REHAU изготавливаются по принципу конструктора, что позволяет создавать действительно индивидуальные решения, отвечающие по своим характеристикам требованиям клиента.</p>
          <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/profiles.php"); ?>
      </div>

    </div>

    <!-- Замер -->
      <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/zamer.php"); ?>


      <div class="container pt-90 pb-70">
        <h2 class="title-32 text-center">ОСТЕКЛЕНИЕ ВЕРАНД, ТЕРРАС, БЕСЕДОК</h2>
        <div class="d-flex flex-wrap pt-50 pb-50 justify-content-between">
          <div class="dom-card">
            <img class="img-fluid" src="/src/img/dom-01.jpg" alt="Остекление слайдер">
            <h3 class="text-center">Раздвижная система Слайдер</h3>
            <div class="text-center w-100">
              от 6178 р/м2
            </div>
          </div>
          <div class="dom-card">
            <img class="img-fluid" src="/src/img/dom-02.jpg" alt="Остекление беседок">
            <h3 class="text-center">Системы Легкого остекления</h3>
            <div class="text-center w-100">
              от 4257 р/м2
            </div>
          </div>
          <div class="dom-card">
            <img class="img-fluid" src="/src/img/dom-03.jpg" alt="Портальные двери">
            <h3 class="text-center">Система Портальных дверей</h3>
            <div class="text-center w-100">
              от 7965 р/м2
            </div>
          </div>
        </div>

      </div>

      <!-- Наши работы -->
      <div class="d-none d-lg-block container p-0">
        <?php $img_work = 'foto-dom-';
              $n = 9;
              ?>
        <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/our-works.php"); ?>
      </div>
      <div class="d-block d-lg-none container mb-70">
        <div class="bg-green p-3 d-inline-block our-work-title">
          <h2 class="title-24 white text-uppercase m-0">Наши работы</h2>
        </div>

        <div class="our-works-slider">
          <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/our-works-mob.php"); ?>
        </div>


      </div>






      <div class="container-fluid bg-light pb-90 mt-90">
        <div class="container pt-90 pb-70 ">
          <h2 class=" title-32 text-center">С НАМИ ЗАКАЗАТЬ ОСТЕКЛЕНИЕ ДОМА ПРОСТО</h2>
        </div>
        <div class="container d-flex flex-wrap justify-content-between pb-100">
          <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/steps-easy-buy.php"); ?>
        </div>
        <div class="container pb-100">
          <h3 class="title-32-cc mb-30">Почему выгодно остеклять коттедж с нами</h3>
          <p class="text-18">Заказывайте остекление без посредников и переплат — на сайте официального представителя «Рехау». Мы партнер немецкого концерна. Изготавливаем окна за 7 дней. Остекляем проемы по ГОСТу. Чтобы недорого заказать окна REHAU в Воронеже, позвоните нам или оставьте заявку в форме на сайте.</p>
        </div>
        <div class="container ">
          <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/green-cta-section.php"); ?>
        </div>

      </div>

      <!-- Отзывы -->
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/reviews-carousel.php"); ?>


    <div class="container pt-50 mb-100">
      <h2 class="title-36 text-center">Наша продукция</h2>
      <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/services.php");   ?>
    </div>


    <!-- Сертификаты -->
    <div class="container-fluid bg-light pb-100 pt-100">
      <div class="container">
        <h2 class="gray title-36">ПРОДУКЦИЯ REHAU СЕРТИФИЦИРОВАНА</h2>
      </div>
      <div class="d-block d-lg-none">
        <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/sertificate-mob.php");   ?>
      </div>
      <div class="d-none d-lg-flex container sertificat-wrapper justify-content-between pt-70">
        <div class="sert-item">
          <img src="/src/img/sert01.jpeg" alt="Сертификат продукции Rehau 01" loading="lazy">
        </div>
        <div class="sert-item">
          <img src="/src/img/sert02.jpeg" alt="Сертификат продукции Rehau 02" loading="lazy">
        </div>
        <div class="sert-item">
          <img src="/src/img/sert03.jpeg" alt="Сертификат продукции Rehau 03" loading="lazy">
        </div>
        <div class="sert-item">
          <img src="/src/img/sert04.jpeg" alt="Сертификат продукции Rehau 04" loading="lazy">
        </div>
        <div class="sert-item">
          <img src="/src/img/sert05.jpeg" alt="Сертификат продукции Rehau 05" loading="lazy">
        </div>
        <div class="sert-item">
          <img src="/src/img/sert06.jpeg" alt="Сертификат продукции Rehau 06" loading="lazy">
        </div>
      </div>
    </div>


    <!-- Акции -->
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/akcii-carousel.php"); ?>

    <!-- СМС купон -->
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/sms-coupone.php"); ?>

    <!-- Мобильный офис -->
    <div class="mob-office container-fluid p-0">
      <div class="container-fluid p-0 d-flex">
        <div class="d-none d-md-block col-lg-6 mob-office-bg">
          <img src="/src/img/dogovor-doma.jpg" alt="Оформление договора на дому" loading="lazy">
        </div>
        <div class="col-lg-6 bg-green p-5">
          <h2 class="white title-28">УСЛУГА "МОБИЛЬНЫЙ ОФИС"</h2>
          <p class="white text-18">Закажите окна с дополнительный скидкой не выходя из дома!</p>
          <h3 class="white title-18 pt-30">ВЫ ЭКОНОМИТЕ ВРЕМЯ</h3>
          <p class="white text-18">Мы уважаем и ценим Ваше время, поэтому Вам больше не нужно ехать к нам в офис для заключения договора. Замер и оформление заказа займет не более 1 часа</p>
          <h3 class="white title-18 pt-30">ДОПОЛНИТЕЛЬНАЯ ВЫГОДА</h3>
          <p class="white text-18">При оформлении договора на дому Вы получаете дополнительную скидку на заказ</p>
          <h3 class="white title-18 pt-30">В УДОБНЫЙ ДЛЯ ВАС ДЕНЬ</h3>
          <p class="white text-18">Инженер может приехать к вам для проведения замера и оформления заказа с 8 до 19-00 ч каждый день, включая выходные. Кроме того, вы приобретаете окна в комфортной для вас обстановке — у вас дома!</p>
          <h3 class="white title-18 pt-30">СКОЛЬКО ЭТО СТОИТ?</h3>
          <p class="white text-18">Нисколько! Услуга «мобильный офис» совершенно бесплатна в Воронеже и пригороде.</p>
          <button class="btn-border mt-30" type="button" name="button" onclick="modalVisible()">Заказать услугу</button>
        </div>
      </div>
    </div>


</main>
