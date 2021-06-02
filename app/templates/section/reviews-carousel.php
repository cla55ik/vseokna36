  <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/reviewsController.php"); ?>



  <div class="d-none d-md-block container reviews-wrapper mb-100 mt-100" id="reviews">

    <div class=" row mb-30">
        <div class="col-lg-8">
          <h2 class="title-32">ОТЗЫВЫ НАШИХ КЛИЕНТОВ</h2>
        </div>
        <div class="col-lg-4 d-flex justify-content-end control-button">

            <a v-on:click="prev"><img src="/src/img/chevron-left.svg" alt="Кнопка назад"></a>
            <a v-on:click="next"> <img src="/src/img/chevron-right.svg" alt="Кнопка вперед"> </a>
        </div>

    </div>
    <div class="row justify-content-between mb-50">
      <div class="review-card" v-for="(review, index) in reviews" v-show="index===stepIndex || index===(stepIndex + 1) || index === (stepIndex + 2)">
        <div class="d-flex review-head mb-40">
          <div class="review-img">
            <img class="" :src=review.img alt="">
          </div>
          <div class="review-name d-flex flex-wrap align-content-center ">
            <div class="w-100">
              <img :src=review.score alt="">
            </div>
              <h3>{{review.name}}</h3>
          </div>
        </div>
        <div class="review-body">
          <p>{{ review.text }}</p>
        </div>
      </div>
    </div>


  </div>



<script>
  reviewsArray = <?php echo json_encode($all_reviews); ?>
</script>
