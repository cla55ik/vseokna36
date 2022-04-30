<footer>
  <div class="container-fluid bg-gray pt-40 pb-50">
    <div class="container">
      <div class="row footer-head">
        <div class="col-lg-3">
          <a class="d-flex align-items-center" href="/">
            <img src="/src/img/logo-white.svg" alt="Логотип салона окон Rehau">
            <span>САЛОН <br />ЭНЕРГОСБЕРЕГАЮЩИХ<br /> ТЕХНОЛОГИЙ</span>
          </a>
        </div>
        <div class="d-none d-lg-flex col-lg-5  justify-content-between align-items-start">
          <button class="btn-footer" type="button" name="btn-footer-price" data-toggle="modal" data-target="#modalCallback">Узнать стоимость</button>
          <button class="btn-footer" type="button" name="btn-footer-price" data-toggle="modal" data-target="#modalCallback">Бесплатный замер</button>
        </div>
        <div class="col-lg-4 text-lg-end pb-30">
          <a class="white title-36 d-block" href="tel:<?= $contacts['tel_link']; ?>"><?= $contacts['tel']; ?></a>
          <a class="white text-20 text-end w-100" href="#" data-toggle="modal" data-target="#modalCallback">Заказать звонок</a>
          <p class="white mt-4 d-block d-lg-none"><?= $contacts['address']; ?></p>
          <a class="white d-block d-lg-none" href="mailto:<?= $contacts['mail']; ?>"><?= $contacts['mail']; ?></a>
        </div>
      </div>
      <div class="row footer-body pt-50 pb-40">
        <div class="col-lg-3">
          <p class="title-18 white">ОСТЕКЛЕНИЕ</p>
          <ul>
            <?php foreach ($footer_first as $name => $link) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $link; ?>"><?= $name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-3">
          <p class="title-18 white">МАТЕРИАЛЫ</p>
          <ul>
            <?php foreach ($footer_second as $name => $link) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $link; ?>"><?= $name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-3">
          <p class="title-18 white">КЛИЕНТАМ</p>
          <ul>
            <?php foreach ($footer_third as $name => $link) : ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= $link; ?>"><?= $name; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-lg-3">
          <p class="white m-0 d-none d-lg-block"><?= $contacts['address']; ?></p>
          <a class="white d-none d-lg-block" href="mailto:<?= $contacts['mail']; ?>"><?= $contacts['mail']; ?></a>
          <p class="title-18 white pt-30">ПРИНИМАЕМ К ОПЛАТЕ</p>
          <div class="d-flex justify-content-between align-items-center methods-pay">
            <img src="/src/img/mastercard.svg" alt="mastercard">
            <img src="/src/img/visa.svg" alt="visa">
            <img src="/src/img/mir.svg" alt="карта мир">

          </div>
        </div>
      </div>
      <div class="row footer-footer pt-50">
        <div class="row">
          <div class="col-lg-6 white">
            © 2021 ИП Варванцев В.В. Все права защищены.
          </div>
          <div class="col-lg-6 d-flex justify-content-end">
            <a class="white" href="/privacy-policy">Политика конфиденциальности</a>
            <a class="white d-none" href="#">Способы оплаты</a>
          </div>
          <p class="white pt-30">Оставляя на сайте свои контактные данные, Вы даете согласие на обработку своих персональных данных в соответствии с политикой конфиденциальности. Сайт не является публичной офертой и носит информационный характер.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- MODAL -->
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/app/templates/modal/modal-callback.php"); ?>



<!--VUE js-->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<!-- <script src="/src/js/jquery.min.js"></script> -->
<!-- <script src="/src/js/bootstrap.min.js"></script> -->
<!-- <script src="/src/js/axios.min.js"></script> -->
<script src="/src/js/maskedinput.js"></script>
<script src="/src/js/main.js"></script>
<script src="/src/js/calc.js"></script>
<!-- Yandex.Metrika counter -->
<script defer type="text/javascript" src="/src/js/yametrika.js"></script>
<noscript>
  <div><img src="https://mc.yandex.ru/watch/36280365" style="position:absolute; left:-9999px;" alt="" /></div>
</noscript>
<!-- /Yandex.Metrika counter -->
</body>

</html>