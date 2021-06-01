


window.onload=function() {



  var quiz = {
    steps:[
      {
        text: "Шаг 1. Выберите тип помещения",
        responses:[
          {text: 'Квартира'},
          {text: 'Частный дом'},
          {text: 'Офис'},
        ]
      },{
        text: "Шаг 2. Укажите материал стен",
          responses: [
            {text: 'Кирпич'},
            {text: 'Монолит'},
            {text: 'Панель'},
            {text: 'Дерево'},
          ]
      },{
        text: "Шаг 3. Выберите тип конструкций",
          responses: [
            {text: 'Окно одностворчатое'},
            {text: 'Окно двустворчатое'},
            {text: 'Окно трехстворчатое'},
            {text: 'Балконный блок'},
            {text: 'Балкон или лоджия'},
          ]
        },{
          text: "Шаг 4. Выберите тип профиля",
            responses: [
              {text: 'Blitz'},
              {text: 'Grazio'},
              {text: 'Delight'},
              {text: 'Brilliant'},
              {text: 'Geneo'},
              {text: 'Intellio'},
            ]
          },{
            text: "Шаг 5. Укажите Размеры",
            width: [
                {min: '300'},
                {max: '800'},
                {step: 'Delight'},
                {value: 'Brilliant'},
              ],
            height: [
                {min: '300'},
                {max: '800'},
                {step: 'Delight'},
                {value: 'Brilliant'},
              ]
            },{
              text: "Укажите телефон, чтобы сохранить результат",
              responses:[{
                text:"EEE"
              }]
              }
    ]
  };


  var calc = new Vue({
    el:'#calculator',
    data:{
      quiz: quiz,
      stepIndex:0,
      allDone: 0,
      floorType: [],
      matType: [],
      winSize: [],
    },
    methods: {
      next: function() {
        this.stepIndex++;


      },
      prev: function() {
        this.stepIndex--;
      },
      send: function(){
        this.stepIndex++;
        this.allDone = 1;
      }
    },
  });


    var akcii = new Vue({
      el:'#akcii',
      data: {
        stest:akciiArray,
        stepIndex: 0,
      },
      methods:{
        next: function(){

          if(this.stepIndex === (this.stest.length - 2)){
            this.stepIndex = -1;
          }
          this.stepIndex++;
        },
        prev: function(){
          if(this.stepIndex===0){
            this.stepIndex = this.stest.length - 1;
          }
          this.stepIndex--;
        }
      },


    });


    var reviews = new Vue({
      el: '#reviews',
      data:{
        reviews:reviewsArray,
        stepIndex: 0,
      },
      methods:{
        next: function(){

          if(this.stepIndex === (this.reviews.length - 3)){
            this.stepIndex = -1;
          }
          this.stepIndex++;
        },
        prev: function(){
          if(this.stepIndex===0){
            this.stepIndex = this.reviews.length - 2;
          }
          this.stepIndex--;
        }
      },
    });






}




  function sender(){
     event.preventDefault();

     let phone = $('.phone-form').val(); // Получаем значение input
     let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
     if(!regex.test(phone)){
       $('#novalid').html('Неверный номер телефона');

     }else{
       var msg = $('#form_cta').serialize();

       $.ajax({
         type: 'POST',
         url: '../src/php/sender.php',
         data: msg,

         success:function(data){
           $('#form_cta').remove();
           $('#private').remove();
           $('#result').html(data);
         },

         error: function(xhr, str) {
           alert('Error ', xhr.responseCode);
         }

       });

     }



      //return;
  }




  function sender_green(){
     event.preventDefault();

     let phone = $('.phone-form-green').val(); // Получаем значение input
     let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
     if(!regex.test(phone)){
       $('#novalid_green').html('Неверный номер телефона');

     }else{
       var msg = $('#form_cta_green').serialize();

       $.ajax({
         type: 'POST',
         url: '../src/php/sender.php',
         data: msg,

         success:function(data){
           $('#form_cta_green').remove();
           $('#private_green').remove();
           $('#result_green').html(data);
         },

         error: function(xhr, str) {
           alert('Error ', xhr.responseCode);
         }

       });

     }



      //return;
  }


  function sender_zamer(){
     event.preventDefault();

     let phone = $('.phone-zamer').val(); // Получаем значение input
     let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
     if(!regex.test(phone)){
       $('#novalid_zamer').html('Неверный номер телефона');

     }else{
       var msg = $('#form_cta_zamer').serialize();

       $.ajax({
         type: 'POST',
         url: '../src/php/sender.php',
         data: msg,

         success:function(data){
           $('#form_cta_zamer').remove();
           $('#private_zamer').remove();
           $('#result_zamer').html(data);
         },

         error: function(xhr, str) {
           alert('Error ', xhr.responseCode);
         }

       });

     }



      //return;
  }


  function sender_sms(){
     event.preventDefault();

     let phone = $('.phone-sms').val(); // Получаем значение input
     let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
     if(!regex.test(phone)){
       $('#novalid_sms').html('Неверный номер телефона');

     }else{
       var msg = $('#form_cta_sms').serialize();

       $.ajax({
         type: 'POST',
         url: '../src/php/sender.php',
         data: msg,

         success:function(data){
           $('#form_cta_sms').remove();
           $('#private_sms').remove();
           $('#result_sms').html(data);
         },

         error: function(xhr, str) {
           alert('Error ', xhr.responseCode);
         }

       });

     }



      //return;
  }
