<div class="container akcii-carousel-wrapper d-flex" id="akcii">


    <div class="akciya-card  col-lg-6" v-for="s in stest">
      <div class="akciya-img">
        <img src="/src/img/1.jpg" alt="" />
      </div>
      <div class="akciya-body">
        <h3>{{ s.title }}</h3>
        <h4>{{ s.sub_title }}</h4>
        <ul>
            <li>{{ s.item_1 }}</li>
            <li>{{ s.item_2 }}</li>
            <li>{{ s.item_3 }}</li>
        </ul>
      </div>
    </div>

</div>







<script>


// Access the array elements
var passedArray =

    <?php echo json_encode($all_akcii); ?>;






</script>
