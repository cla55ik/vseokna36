<?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/profilesController.php"); ?>

<div class="row justify-content-between">
  <?php foreach ($all_profiles as $profile): ?>
    <div class="profile-card">
      <div class="">
        <h3><?= $profile['title'];  ?></h3>
        <p><?= $profile['sub_title'];  ?></p>
      </div>
      <div class="d-flex">
        <div class="col-lg-6 ">
          <img class="profile-img img-fluid" src="<?=$profile['img'];  ?>" alt="Фото профиля <?= $profile['title'] ?>" loading="lazy">
        </div>
        <div class="col-lg-6 d-flex flex-wrap align-items-center">
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
          <div class="profile-price">
            <span>от <?=$profile['price']; ?> ₽</span>
          </div>
        </div>
      </div>
      <div class="">
        <div class="profile green-line bg-green text-center">
          <p class="white p-0 text-20"><?=$profile['main_adv'] ; ?></p>
        </div>
        <div class="profile-spec d-flex justify-content-between">
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
      <div class="d-flex justify-content-between">

      </div>
    </div>
  <?php endforeach; ?>
</div>
