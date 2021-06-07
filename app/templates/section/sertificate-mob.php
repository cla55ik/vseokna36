<div class="d-flex">
  <div class="col-1 d-flex  align-items-center">
    <a onclick="sertPrev()"><img src="/src/img/chevron-left.svg" alt="Кнопка назад"></a>
  </div>
  <div class="col-10 sert-slider">
    <div class=" sert-slider-list">
      <div class="sert-slider-track d-flex">
        <?php
        for($i=1; $i<=6; $i++): ?>

        <div class="sert-slide">
          <img src="/src/img/sert0<?=$i ; ?>.jpeg" alt="Сертификат рехау" loading="lazy">
        </div>
      <?php endfor; ?>

      </div>
    </div>
  </div>

  <div class="col-1 d-flex justify-content-end align-items-center">
    <a onclick="sertNext()"><img src="/src/img/chevron-right.svg" alt="Кнопка вперед"></a>
  </div>
</div>



<script>

</script>
