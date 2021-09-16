  <!-- Modal -->
  <div class="modal fade" id="modalCallback" tabindex="-1" role="dialog" aria-labelledby="modalCollbackTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCallbackTitle"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="modal-title text-center">
          <h2 class="gray title-28">Заказать звонок!</h2>
          <p>Оставьте контактный номер. Перезвоним в ближайшие минуты</p>
        </div>
        <div class="modal-form">

          <div class="text-24 text-center" id="result_modal">
          </div>
          <div class="text-16 font-weight-bold text-center" id="novalid_modal">
          </div>
          <form id="form_cta_modal" class="horizontal-form" onsubmit="senderForm('modal');ym(80932084,'reachGoal','callme')">
            <div class="pb-2 pt-5">
              <input class="w-100 phone-modal mask-phone" type="text" name="phone" value="" placeholder="Телефон" required>
            </div>
            <div class="">
              <input class="bg-green btn-sqr white" type="submit" name="form_submit" value="Жду звонка">
            </div>
          </form>

        </div>
        <div class="private-link text-12 mt-4 text-center" id="private_modal">
          <span>Нажимая кнопку, вы даете согласие на обработку </span><a href="/privacy-policy">персональных данных</a>
        </div>
      </div>
    </div>
  </div>
</div>
