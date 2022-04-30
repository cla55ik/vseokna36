<?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/profilesController.php"); ?>

<div class="row justify-content-between">
  <?php foreach ($all_profiles as $profile): ?>
    <div class="profile-card">
      <div class="">
        <h3><?= $profile['title'];  ?></h3>
        <div class="profile green-line bg-green text-center">
          <p class="d-sm-none white p-0 text-20"><?=$profile['sub_title']; ?></p>
        </div>
        <p class="d-sm-none"><?= $profile['main_adv'];  ?></p>
      </div>
      <div class="d-flex">
        <div class="col-6 ">
          <img class="profile-img img-fluid" src="<?=$profile['img'];  ?>" alt="Фото профиля <?= $profile['title'] ?>" loading="lazy">
        </div>
        <div class="col-6 d-flex flex-wrap align-items-center">
          <div class="d-none d-lg-flex align-items-center">
            <span><?= $profile['sub_title'];  ?></span>
          </div>  
          <div class="d-none d-lg-flex align-items-center">
            <span><?= $profile['main_adv'];  ?></span>
          </div>
          <div class="profile-advantage d-flex align-items-center">
            <img src="<?=$profile['adv_1_img'];  ?>" alt="Преимущества пластиковых окон <?= $profile['adv_1_text'];  ?>" >
            <span><?= $profile['adv_1_text'];  ?></span>
          </div>
          <div class="profile-advantage d-flex align-items-center">
            <img src="<?=$profile['adv_2_img'];  ?>" alt="Преимущества пластиковых окон <?= $profile['adv_1_text'];  ?>">
            <span><?= $profile['adv_2_text'];  ?></span>
          </div>
          <div class="profile-advantage d-flex align-items-center">
            <img src="<?=$profile['adv_3_img'];  ?>" alt="Преимущества пластиковых окон <?= $profile['adv_1_text'];  ?>">
            <span><?= $profile['adv_3_text'];  ?></span>
          </div>
        </div>
      </div>

      <div class="d-block d-lg-flex mt-4">
        <div class="col-12 col-lg-6 d-flex flex-wrap justify-content-center p-3">
        <div class="profile-spec d-flex justify-content-between w-100">
          <div class="spec-item d-flex align-items-center">
            <div class="spec-img">
              <img src="/src/img/profile-teplo.svg" alt="Теплосбережение окон">
            </div>
            <div class="spec-text">
              <span><?=$profile['spec_1'] ; ?>%</span>
            </div>
          </div>
          <div class="spec-item d-flex align-items-center">
            <div class="spec-img">
              <img src="/src/img/snizhenie-shuma.svg" alt="Повышенная шумоизоляция окон">
            </div>
            <div class="spec-text">
              <span><?=$profile['spec_2'] ; ?>%</span>
            </div>
          </div>
          <div class="spec-item d-flex align-items-center">
            <div class="spec-img">
              <img src="/src/img/propuskanie-sveta.svg" alt="Повышенное светопропускание окон">
            </div>
            <div class="spec-text ">
              <span><?=$profile['spec_3'] ; ?>%</span>
            </div>
          </div>
        </div>
        </div>
        <div class="col-12 col-lg-6 d-flex flex-wrap align-items-center justify-content-center">
        
          <div class="profile-price mt-4 mb-3">
            <a class="btn-round bg-pink shadow-custom w-100" href="#" data-toggle="modal" data-target="#modalCallback">Узнать цену по акции</a>
          </div>
        </div>
      </div>

    </div>
  <?php endforeach; ?>
</div>
