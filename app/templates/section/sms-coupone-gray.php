<div class="container sms-wrapper d-flex pb-100 pt-100 pl-110 pr-150">
  <div class="col-lg-7">
    <h2 class="gray title-36 sms-text">СМС-КУПОН НА СКИДКУ!</h2>
    <div class="d-flex d-md-none align-items-end sms-img-wrapper">
      <img class=" sms-img img-fluid" src="/src/img/sms-coupone.png" alt="Смс купон на скидку">
    </div>
    <p class="sms-text-first">Получите смс-сообщение с номером купона, назовите номер купона при общении с менеджером и получите дополнительную скидку на заказ.</p>
    <p>Купон действителен в течение 50 дней</p>
    <div class="sms-form-wrapper">
      <div class="text-24 " id="result_sms">
      </div>
      <div class="text-16 font-weight-bold" id="novalid_sms">
      </div>
      <form id="form_cta_sms" class="horizontal-form" onsubmit="senderForm('sms')">
        <div class="pb-4 pt-5">
          <input class="w-100 phone-sms" type="text" name="phone" value="" placeholder="Телефон" required>
        </div>
        <div class="">
          <input class="bg-green btn-sqr white" type="submit" value="Получить скидку">
        </div>
      </form>
    </div>
    <div class="private-link text-12 mt-2" id="private_sms">
      <span>Нажимая кнопку, вы даете согласие на обработку </span><a href="/privacy-policy">персональных данных</a>
    </div>
  </div>
  <div class="d-none d-md-flex col-lg-5  align-items-end sms-img-wrapper">
    <img class=" sms-img img-fluid" src="/src/img/sms-coupone.png" alt="Смс купон на скидку">
  </div>
</div>
