<div class="container-fluid d-flex p-0 distantion-wrapper">
  <div class="col-lg-4">
    <img src="/src/img/distance-zamer.jpg" alt="Дистанционный замер">
  </div>
  <div class="col-lg-8 bg-green">
    <p class="white title-36-сс">Цените каждую минуту?</p>
    <p class="white text-24">Воспользуйтесь нашей новой услугой</p>
    <h2 class="white title-32-сс">Дистанционный замер!</h2>
    <div class="text-24 white" id="result_dist">
    </div>
    <div class="text-16 font-weight-bold white" id="novalid_dist">
    </div>
    <form id="form_cta_dist" class="hirizontal-form w-60 pt-5" onsubmit="sender_dist()">
      <div class="form-text mt-3">
        <input type="text w-100" name="name" value="" placeholder="Имя">
      </div>
      <div class="form-text">
        <input class="phone-dist" type="text w-100" name="phone" value="" placeholder="Телефон" required>
      </div>
      <div class="form-submit mt-3 mb-3">
        <input class="bg-pink btn-sqr white text-uppercase" type="submit" name="" value="Отправить">
      </div>

      <div class="private-link text-12 mt-2 text-center" id="private_dist">
        <span class="white ">Нажимая кнопку, вы даете согласие на обработку </span><a class="white" href="#">персональных данных</a>
      </div>
    </form>
  </div>
</div>
