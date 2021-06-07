<?php


$page_title = 'Акции и скидки на пластиковые окна в Воронеже';
$page_description = 'Акции и скидки на приобретение пластиковых окон REHAU. Купить окна в Воронеже по специальным ценам предлагает Салон окон Рехау.';
$img_og = 'https://dev.vseokna36.ru/src/img/akcii-og.jpg';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
include_once($_SERVER['DOCUMENT_ROOT']. "/app/objects/akciiController.php");
 ?>

 <main class="container-fluid  p-0">
   <div class="container pt-70 pb-50 akcii-page-wrapper">
     <h2 class="title-32">Действующие акции на пластиковые окна</h2>
     <p>Наша компания предоставляет дополнительные скидки на окна в Воронеже. Подберите подходящую для вас акцию на остекление.</p>
   </div>

   <div class="container d-flex flex-wrap akciya-carousel-wrapper" id="akcii">

      <div class="akciya-card  col-lg-6 p-0" v-for="s in stest">

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


   <!-- Отзывы -->
 <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/reviews-carousel.php"); ?>

 <div class="container-fluid bg-light">
   <?php include_once($_SERVER['DOCUMENT_ROOT']. "/app/templates/section/sms-coupone-gray.php"); ?>
 </div>
</main>

<script>
  var akciiArray = <?php echo json_encode($all_akcii); ?>;

</script>
