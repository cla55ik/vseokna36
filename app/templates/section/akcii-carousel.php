<div class="container akcii-wrapper mt-100" id="akcii">
    <div class="mb-40 row">
        <div class="col-lg-8">
            <h2 class="title-36-cc">Действующие акции</h2>
        </div>
        <div class="col-lg-4 d-flex justify-content-end">

            <button type="button" name="button" v-on:click="prev">Назад</button>
            <button type="button" name="button" v-on:click="next">Вперед</button>
        </div>

    </div>
    <div class="d-flex akciya-carousel-wrapper">
        <div class="akciya-card  col-lg-6 p-0" v-for="(s, index) in stest" v-show="index===stepIndex || index===(stepIndex + 1)">

          <div class="akciya-img">
            <img class="img-fluid" :src=s.img alt="" />
          </div>
          <div class="akciya-body  p-5" >
    
            <h3 class="text-24 white">{{ s.title }}</h3>
            <h4 class="text-18 white">{{ s.sub_title }}</h4>
            <ul class="white">
                <li v-show="s.item_1 != ''">{{ s.item_1 }}</li>
                <li v-show="s.item_2 != ''">{{ s.item_2 }}</li>
                <li v-show="s.item_3 != ''">{{ s.item_3 }}</li>
            </ul>
          </div>
          <div class=" p-5 akciya-button">
              <button type="button" name="button">Подробнее</button>
          </div>
        </div>
    </div>


</div>







<script>


// Access the array elements
var passedArray =

    <?php echo json_encode($all_akcii); ?>;






</script>
