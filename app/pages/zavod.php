<?php


$page_title = 'Завод пластиковых окон Rehau в Воронеже - окна от производителя';
$page_description = 'Завод по производству ПВХ окон и дверей в Воронеже. Высокое качество всей выпускаемой заводом продукции Рехау. Заказывайте остекление у производителя!';
$img_og = 'https://dev.vseokna36.ru/src/img/zavod-og.jpg';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
 ?>




<main class="container-fluid  p-0">
  <div class="container mt-70 mb-50">
    <h1 class="title-36">ПРОИЗВОДСТВО ПЛАСТИКОВЫХ
      <span class="pink">
        ОКОН REHAU
      </span>
    </h1>
  </div>
  <div class="container zavod-content mb-100">
    <div class="row mt-70">
      <div class="col-lg-4">
        <img class="img-fluid" src="/src/img/zavod01.png" alt="Завод пластиковых окон в Воронеже">
      </div>
      <div class="col-lg-1">

      </div>
      <div class="col-lg-7 zavod-text">
        <p class="text-18">Вот уже более 60 лет продукция компании REHAU применяется в различных отраслях промышленности — транспорте, энергетике, дизайне и, конечно, строительстве. Производство светопрозрачных конструкций является основным направлением деятельности компании в области строительства, и она делает все, чтобы ее продукция, признанная стандартом качества и инновационных решений, прочно удерживала этот статус</p>
        <p class="text-18">Производство пластиковых окон – это сложный высокотехнологичный процесс, который включает множество этапов. На каждом из них необходимо строго соблюдать все технические нормы</p>
      </div>
    </div>
    <div class="row mt-70">
      <div class="col-lg-7">
        <p class="text-18">Основное преимущество производства пластиковых окон ПВХ REHAU, которое помогает конкурировать на рынке, – это современное автоматизированное оборудование. Оно позволяет выпускать качественную и надежную продукцию в кратчайшие сроки. При этом сочетание качества и цены окон ПВХ всегда остается оптимальным, так как вся продукция производится строго в соответствии с нормами и требованиями ГОСТа. Пластиковые окна, двери и аксессуары к ним соответствуют всем необходимым нормам экологичности, безопасности и энергосбережения.</p>
        <p class="text-18">В изготовлении профилей основной упор компания делает на безупречное качество своей продукции. Независимо от того, в какой стране выпускается профиль ПВХ под брендом REHAU, она будет соответствовать заявленным стандартам и являться образцом первосортной продукции. </p>
      </div>
      <div class="col-lg-1">

      </div>
      <div class="col-lg-4">
        <img class="img-fluid" src="/src/img/zavod02.jpg" alt="Производство пластиковых окон в Воронеже">
      </div>
    </div>
  </div>
  <div class="container mt-50">
    <h2 class="title-32">ПЛАСТИКОВЫЕ ОКНА REHAU В ВОРОНЕЖЕ</h2>
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
    <p class="text-18 mb-90">Каждый из пунктов говорит лишь о том, что заказать пластиковые окна в нашей компании всегда можно выгодно. Мы работаем для клиента, поэтому его пожелания всегда рассматриваются в первую очередь. Огласите список ваших предпочтений, и мы выполним заказ с их учетом. За длительный срок существования компании, мы научились делать свою работу профессионально. Если хотите недорого заказать пластиковые окна, обращайтесь к нам.
    </p>

    </div>

  </div>
  <!-- Замер -->
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/zamer.php"); ?>


    <!-- Акции -->

    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/akcii-carousel.php"); ?>

    <div class="container-fluid bg-light mt-70">
      <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/sms-coupone-gray.php"); ?>
    </div>

  </main>


  <script>
    
    var reviewsArray = <?php echo json_encode($all_reviews); ?>

  </script>
