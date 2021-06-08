<?php
include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/profilesController.php");
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$url_arr = parse_url($url);
$current_url = $url_arr['path'];
$cur_prof = $profile->getOne($current_url);



$page_title = 'Окна из профиля ' . $cur_prof['title'];
$page_description = 'Купить окна из профиля ' . $cur_prof['title'] . ' в Воронеже по цене от производителя. Производство, доставка и монтаж пластиковых окон ' . $cur_prof['title'];
$img_og = 'https://dev.vseokna36.ru/src/img/profile-og.jpg';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
//include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/akciiController.php");


 ?>
<main class="container-fluid  p-0">

    <div class="container d-flex flex-wrap mt-90">
        <div class="col-12 col-lg-4 prof-template-main-img">
            <img class="img-fluid" src="<?=$cur_prof['img'] ; ?>" alt="">
        </div>
        <div class="col-12 col-lg-8 prof-template-description">
            <h1 class="title-36"><?= $cur_prof['title']; ?></h1>
            <h2 class="mb-30"><?= $cur_prof['sub_title']; ?></h2>
            <p><?= $cur_prof['description']; ?></p>
            <div class="d-flex justify-content-start mt-70">
                <div class="prof-template-adv-card ">
                    <img src="<?=$cur_prof['adv_1_img']; ?>" alt="Преимущества окон рехау">
                    <h3><?=$cur_prof['adv_1_text']; ?></h3>
                </div>
                <div class="prof-template-adv-card">
                    <img src="<?=$cur_prof['adv_2_img']; ?>" alt="Преимущества окон рехау">
                    <h3><?=$cur_prof['adv_2_text']; ?></h3>
                </div>
                <div class="prof-template-adv-card">
                    <img src="<?=$cur_prof['adv_3_img']; ?>" alt="Преимущества окон рехау">
                    <h3><?=$cur_prof['adv_3_text']; ?></h3>
                </div>
            </div>
            <div class="d-flex flex-wrap justify-content-between prof-template-price mt-70 mb-50">
                <div class="col-12 col-md-6 pink d-flex align-items-center">
                    от <?=$cur_prof['price']; ?> ₽
                </div>
                <div class="col-12 col-md-6 text-end d-flex align-items-center justify-content-start">
                    <a href="#calc">Рассчитать стоимость</a>
                </div>
            </div>
        </div>

    </div>


    <div class="container mt-70 mb-70 prof-template-spec">
        <h2 class="mb-30"><?= $cur_prof['title_2'];?></h2>
        <p class="text-18"><?= $cur_prof['par_2'];?></p>
        <div class="profile-spec d-flex mt-50">
          <div class="spec-item d-flex align-items-center">
            <div class="spec-img">
              <img src="/src/img/profile-teplo.svg" alt="Теплосбережение окон">
            </div>
            <div class="spec-text">
              <span><?=$cur_prof['spec_1'] ; ?>%</span>
            </div>
          </div>
          <div class="spec-item d-flex align-items-center">
            <div class="spec-img">
              <img src="/src/img/snizhenie-shuma.svg" alt="Повышенная шумоизоляция окон">
            </div>
            <div class="spec-text">
              <span><?=$cur_prof['spec_2'] ; ?>%</span>
            </div>
          </div>
          <div class="spec-item d-flex align-items-center">
            <div class="spec-img">
              <img src="/src/img/propuskanie-sveta.svg" alt="Повышенное светопропускание окон">
            </div>
            <div class="spec-text ">
              <span><?=$cur_prof['spec_3'] ; ?>%</span>
            </div>
          </div>
        </div>
    </div>

    <div class="container mt-100 prof-template-tech">
        <h2>Преимущества и характеристики <?=$cur_prof['title'];?></h2>
        <img class="img-fluid" src="<?=$cur_prof['img_2'];?>" alt="Характеристики окон Рехау">
    </div>

    <div class="container mt-100 prof-template-title-3 mb-100">
        <h2 class="mb-30"><?=$cur_prof['title_3'];?></h2>
        <p class="text-18"><?=$cur_prof['par_3'];?></p>
    </div>

    <div class="pt-40">

    </div>
    <?php $calc_title_1 = 'УЗНАЙТЕ ТОЧНУЮ ';
      $calc_title_2 = 'СТОИМОСТЬ ОКОН ';
    ?>
    <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/quiz.php"); ?>


    <div class="container">
       <div class="text-center mb-40 mt-70">
          <h2 class="title-32">ПРЕИМУЩЕСТВА ПЛАСТИКОВЫХ ОКОН REHAU</h2>
       </div>
      <div class="row advant-round-wrapper justify-content-between pt-50 pb-50">
        <div class="card-item-round text-center">
          <img src="/src/img/winadv-01.svg" alt="Экологичность">
          <h3 class="title-18-cc mt-3">Экологичность</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/winadv-02.svg" alt="Надежность">
          <h3 class="title-18-cc mt-3">Надежность профиля</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/winadv-03.svg" alt="Теплоизоляция">
          <h3 class="title-18-cc mt-3">Высокая теплоизоляция</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/winadv-04.svg" alt="Шумоизоляция">
          <h3 class="title-18-cc mt-3">Хорошая шумоизоляция</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/winadv-05.svg" alt="Больше света">
          <h3 class="title-18-cc mt-3">Пропускают больше света</h3>
        </div>
        <div class="card-item-round text-center">
          <img src="/src/img/winadv-05.svg" alt="Долговечность">
          <h3 class="title-18-cc mt-3">Долговечность</h3>
        </div>
      </div>
      <div class="text-18 mt-50 pb-70">
        <p>Немецкий концерн REHAU — это гигантский завод, который выпускает материалы для остекления. Его подразделения есть на всех континентах. Пластиковые окна REHAU устанавливают едва ли не в каждой стране, в южных широтах и в районах вечной мерзлоты, в столицах и провинциях. Их монтируют в частных домах, офисных зданиях, на промышленных предприятиях, в клиниках, школах. Компания постоянно внедряет в производство свои разработки.
        </p>
      </div>
    </div>


       <!-- Замер -->
        <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/zamer.php"); ?>

        <!-- С нами просто -->
       <div class="container dt-50 pb-50 mt-90">
       <h2 class=" title-32 text-center">С НАМИ КУПИТЬ ОКНО ПРОСТО</h2>
       </div>
       <div class="container d-flex flex-wrap justify-content-around pb-100">
       <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/steps-easy-buy.php"); ?>
       </div>

       <!-- Акции -->

     <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/akcii-carousel.php"); ?>

     <div class="container-fluid bg-light mb-100 mt-90">
     <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/sms-coupone-gray.php"); ?>
     </div>
     <!-- Отзывы -->
     <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/reviews-carousel.php"); ?>


         <!-- Бесплатная консультация -->
       <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/consultation.php"); ?>

</main>
