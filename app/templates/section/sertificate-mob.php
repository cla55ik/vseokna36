<div class="d-flex">
  <div class="col-1 d-flex  align-items-center">
    <a onclick="wrkPrev()"><img src="/src/img/chevron-left.svg" alt="Кнопка назад"></a>
  </div>
  <div class="col-10 wrk-slider">
    <div class=" wrk-slider-list">
      <div class="wrk-slider-track d-flex">
        <?php
        for($i=1; $i<=6; $i++): ?>

        <div class="wrk-slide">
          <img src="/src/img/sert0<?=$i ; ?>.jpeg" alt="Сертификат рехау" loading="lazy">
        </div>
      <?php endfor; ?>

      </div>
    </div>
  </div>

  <div class="col-1 d-flex justify-content-end align-items-center">
    <a onclick="wrkNext()"><img src="/src/img/chevron-right.svg" alt="Кнопка вперед"></a>
  </div>
</div>



<script>

</script>
