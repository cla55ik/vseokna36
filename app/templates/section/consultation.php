<div class="container-fluid d-flex p-0 distantion-wrapper">
  <div class="d-none d-md-block col-lg-5">
    <img src="/src/img/consult.jpg" alt="Дистанционный замер">
  </div>
  <div class="col-12 col-lg-7 bg-green">
    <h2 class="white title-32-сс">Бесплатная консультация</h2>
    <p class="white text-24">Оставьте свой номер телефона, и мы вам перезвоним</p>
    <div class="text-24 white" id="result_consult">
    </div>
    <div class="text-16 font-weight-bold white" id="novalid_consult">
    </div>
    <form id="form_cta_consult" class="form-cta-dist hirizontal-form w-60 pt-5" onsubmit="senderForm('consult')">
      <div class="form-text">
        <input class="phone-consult w-100" type="text" name="phone" value="" placeholder="Телефон" required>
      </div>
      <div class="form-submit mt-3 mb-3">
        <input class="bg-pink btn-sqr white text-uppercase w-100" type="submit" value="Отправить">
      </div>

      <div class="private-link text-12 mt-2 text-center" id="private_consult">
        <span class="white ">Нажимая кнопку, вы даете согласие на обработку </span><a class="white" href="/privacy-policy">персональных данных</a>
      </div>
    </form>
  </div>
</div>
