


window.onload=function() {

document.getElementById('modal-background').classList.add("modal-hide");




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



function senderForm(name){
   event.preventDefault();


   let formId = '#form_cta_' + name;
   let phoneClass = '.phone-' + name;
   let novalidId = '#novalid_' + name;
   let privateId = '#private_' + name;
   let resultId = '#result_' + name;

   console.log(formId, phoneClass);
   $(novalidId).html('');

   let phone = $(phoneClass).val(); // Получаем значение input
   let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
   if(!regex.test(phone)){
     $(novalidId).html('Неверный номер телефона');

   }else{
     var msg = $(formId).serialize();

     $.ajax({
       type: 'POST',
       url: '../src/php/sender.php',
       data: msg,

       success:function(data){
         $(formId).remove();
         $(privateId).remove();
         $(resultId).html(data);
       },

       error: function(xhr, str) {
         alert('Error ', xhr.responseCode);
       }

     });

   }



    //return;
}











  function modalVisible(){
      console.log(window.pageYOffset);
      offset = window.pageYOffset;

      document.body.style.position = 'fixed';
      document.body.style.top = '-' + offset + 'px';
    let modal = document.getElementById('modal-background');
    let modalW = document.getElementById('modal-wrapper');
    modal.style.top = offset + 'px';
    modal.classList.remove("modal-hide");
    modal.classList.add("modal-vis");



    //console.log(window.pageYOffset);

  }


  function modalHide(){
      offset = window.pageYOffset;
      const scrollY = document.body.style.top;
      document.body.style.position = '';
      document.body.style.top = '';
      window.scrollTo(0, parseInt(scrollY || '0') * -1);
    let modal = document.getElementById('modal-background');
    modal.classList.remove("modal-vis");
    modal.classList.add("modal-hide");

  }
