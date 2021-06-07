<?php


$page_title = 'Цены на пластиковые окна в Воронеже';
$page_description = 'Цены на пластиковые окна из профиля REHAU от официального представителя завода. Изготовление, установка и продажа пластиковых окон в Воронеже';
$img_og = 'https://dev.vseokna36.ru/src/img/ceni-okna-og.png';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
 ?>


<main class="container-fluid  p-0">
  <div class="container ceni-title pt-70 pb-90">
    <h1 class="title-32 pb-30">Стоимость пластиковых окон с установкой</h2>
    <p>Наша компания поставляет и устанавливает профильные системы из ПВХ разных моделей. Чтобы узнать цены на ПВХ-окна REHAU, пролистайте вкладки с информацией о разных профилях на этой странице. В таблице указаны варианты конфигурации с размерами. На правах официального дилера немецкого концерна мы продаем окна REHAU по ценам, рекомендованным производителем.</p>
  </div>
  <div class="container-fluid bg-light pt-90 pb-90 mb-90">
    <div class="container pb-40">
      <h2>Цены на пластиковые окна</h2>
    </div>
    <div class="container d-flex flex-wrap justify-content-around">
      <div class="ceni-card text-center">
        <img src="/src/img/ceni01.png" alt="Стоимость окон">
        <h3>Двухстворчатое окно</h3>
        <p>от 3 600 ₽</p>
      </div>
      <div class="ceni-card text-center">
        <img src="/src/img/ceni02.png" alt="Стоимость окон">
        <h3>Трехстворчатое окно</h3>
        <p>от 4 400 ₽</p>
      </div>
      <div class="ceni-card text-center">
        <img src="/src/img/ceni03.png" alt="Стоимость окон">
        <h3>Балконный блок</h3>
        <p>от 5 200 ₽</p>
      </div>
    </div>
  </div>


  <?php $calc_title_1 = 'РАССЧИТАЙТЕ ';
        $calc_title_2 = 'СТОИМОСТЬ ОКОН ';
   ?>
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/quiz.php"); ?>


    <div class="container pay-variants mb-70">
      <div class="mb-70">
        <h2>Варианты оплаты</h2>
      </div>
      <div class="d-flex flex-wrap justify-content-around pay-methods">
        <div class="pay-item d-flex flex-wrap justify-content-center">
          <div class="image">
            <img src="/src/img/pay1.svg" alt="Варианты оплаты окон">
          </div>
          <div class="title">
            <h3>Наличный<br/>расчет</h3>
          </div>
        </div>
        <div class="pay-item d-flex flex-wrap justify-content-center">
          <div class="image">
            <img src="/src/img/pay2.svg" alt="Варианты оплаты окон">
          </div>
          <div class="title">
            <h3>Безналичный<br/>расчет</h3>
          </div>
        </div>
        <div class="pay-item d-flex flex-wrap justify-content-center">
          <div class="image">
            <img src="/src/img/pay3.svg" alt="Варианты оплаты окон">
          </div>
          <div class="title">
            <h3>Оплата<br/>банковской<br/>картой</h3>
          </div>
        </div>
        <div class="pay-item d-flex flex-wrap justify-content-center">
          <div class="image">
            <img src="/src/img/pay4.svg" alt="Варианты оплаты окон">
          </div>
          <div class="title">
            <h3>Кредит,<br/>рассрочка</h3>
          </div>
        </div>
      </div>
      <div class="mt-30">
        <p>Оплату наличными вы можете произвести в офисе нашей компании или по адресу объекта установки при оформлении договора. Наши менеджеры и инженеры по замеру являются материально-ответственными лицами. После совершения оплаты вам выдадут товарный чек.</p>
      </div>
    </div>

    <!-- Замер -->
      <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/zamer.php"); ?>
    <!-- Акции -->

    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/akcii-carousel.php"); ?>

    <div class="container-fluid bg-light mt-90">
      <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/sms-coupone-gray.php"); ?>
    </div>

</main>
