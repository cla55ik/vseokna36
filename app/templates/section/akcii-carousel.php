  <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/akciiController.php"); ?>

<div class="container akcii-wrapper mt-100" id="akcii">
    <div class=" row">
        <div class="col-lg-8">
            <h2 class="title-36-cc">Действующие акции</h2>
        </div>
        <div class="col-lg-4 d-flex justify-content-end control-button">

            <a v-on:click="prev"><img src="/src/img/chevron-left.svg" alt="Кнопка назад"></a>
            <a v-on:click="next"> <img src="/src/img/chevron-right.svg" alt="Кнопка вперед"> </a>
        </div>

    </div>
    <div class="d-flex akciya-carousel-wrapper">

        <div class="akciya-card  col-lg-6 p-0" v-for="(s, index) in stest" v-show="index===stepIndex || index===(stepIndex + 1)">

          <div class="akciya-img">
            <img class="img-fluid" :src=s.img alt="" />
          </div>

          <div class="akciya-body  p-5" >

            <h3 class="text-24 white mb-30">{{ s.title }}</h3>
            <h4 class="text-18 white">{{ s.sub_title }}</h4>
            <ul class="white">
                <li v-show="s.item_1 != ''">{{ s.item_1 }}</li>
                <li v-show="s.item_2 != ''">{{ s.item_2 }}</li>
                <li v-show="s.item_3 != ''">{{ s.item_3 }}</li>
            </ul>
          </div>
          <div class=" p-5 akciya-button">
              <button type="button" name="button" onclick="modalVisible()">Подробнее</button>
          </div>
        </div>
    </div>


</div>







<script>


// Access the array elements
var akciiArray =

    <?php echo json_encode($all_akcii); ?>;






</script>
