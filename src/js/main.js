


window.onload=function() {






/*Слайдер Работы*/
if(document.querySelector('.wrk-slider')){
  let slider = document.querySelector('.wrk-slider');
    sliderList = slider.querySelector('.wrk-slider-list');
    sliderTrack = slider.querySelector('.wrk-slider-track');
    slide = document.getElementsByClassName('wrk-slide');
    sliderTrack.style.left = '0px';
}

/*Слайдер сертификаты*/
if(document.querySelector('.sert-slider')){
  let sliderSert = document.querySelector('.sert-slider');
    sliderSertList = sliderSert.querySelector('.sert-slider-list');
    sliderSertTrack = sliderSert.querySelector('.sert-slider-track');
    slideSert = document.getElementsByClassName('sert-slide');
    sliderSertTrack.style.left = '0px';
}



document.getElementById('modal-background').classList.add("modal-hide");








}






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


    var akciiMob = new Vue({
      el:'#akcii-mob',
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


    var reviewsMob = new Vue({
      el: '#reviews-mob',
      data:{
        reviews:reviewsArray,
        stepIndex: 0,
      },
      methods:{
        next: function(){

          if(this.stepIndex === (this.reviews.length - 2)){
            this.stepIndex = -1;
          }
          this.stepIndex++;
        },
        prev: function(){
          if(this.stepIndex===0){
            this.stepIndex = this.reviews.length - 1;
          }
          this.stepIndex--;
        }
      },
    });







function senderForm(name){
   event.preventDefault();

   if(name == 'calc'){
     let formId = '#form_cta_' + name;
     let phoneClass = '.phone-' + name;
     let novalidId = '#novalid_' + name;
     let privateId = '#private_' + name;
     let resultId = '#result_' + name;


     $(novalidId).html('');

     let phone = $(phoneClass).val(); // Получаем значение input
     let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
     if(!regex.test(phone)){
       $(novalidId).html('Неверный номер телефона');

     }else{
       var dateArray = [];
       var msg = $(formId).serialize();

       dateArray.push(msg);
       console.log(dateArray);

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

   }else{
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




  /*Слайдер Наши работы для Мобильного*/


  function wrkNext(){
    let length = slide.length;
    let max = (length - 1) * 275;
    let off = 275;
    let position = parseInt(sliderTrack.style.left);
    let next = 0;

    console.log('pos '+position);

    if (0-position < max) {
      next = position - off + 'px';
    }else{
      next ='0px';
    }

    sliderTrack.style.left =next;


  }

  function wrkPrev(){
    let length = slide.length;
    let max =0- (length) * 275;
    console.log(max);
    let off = 275;
    let position = parseInt(sliderTrack.style.left);
    let next = 0;

    console.log(position);

    if (position > max && position < 0) {
      next = position + off + 'px';
    }else{
      next = (max + 275) + 'px';
    }


    console.log('next= '+next);
    sliderTrack.style.left =next;
    //offset = offset * 2;

  }




  /*Слайдер Сертификаты для Мобильного*/


  function sertNext(){
    let length = slideSert.length;
    let max = (length - 1) * 275;
    let off = 275;
    let position = parseInt(sliderSertTrack.style.left);
    let next = 0;

    console.log('pos '+position);

    if (0-position < max) {
      next = position - off + 'px';
    }else{
      next ='0px';
    }

    sliderSertTrack.style.left =next;


  }

  function sertPrev(){
    let length = slideSert.length;
    let max =0- (length) * 275;
    console.log(max);
    let off = 275;
    let position = parseInt(sliderSertTrack.style.left);
    let next = 0;

    console.log(position);

    if (position > max && position < 0) {
      next = position + off + 'px';
    }else{
      next = (max + 275) + 'px';
    }


    console.log('next= '+next);
    sliderSertTrack.style.left = next;
    //offset = offset * 2;

  }
