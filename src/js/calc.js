

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
      floorType: null,
      matType: null,
      winWidth: null,
      winHeight:null,
      winType:null,
      profileName:null,
      phoneForm:null,
      err:null,
      sendDone:null,
    },
    methods: {
        next: function() {
        this.stepIndex++;


      },
      prev: function() {
        this.stepIndex--;
      },
      validation:function(phone){

        let regex = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
        if(!regex.test(phone)){
          this.err = 'Некорректный номер телефона';
          return false;
          //$(novalidId).html('Неверный номер телефона');
        }else{
            this.err = null;
          return true;
        //  $(novalidId).html('Номер ОК');
        }
      },
      send: function(){
        if(this.validation(this.phoneForm)){

          this.submitCalc();
          return this.err;

        }else{

          return;
        };

      },
      submitCalc() {

        axios({
          method: 'post',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          url: '../src/php/sender_calc.php',
          data: {
            phone: this.phoneForm,
            floorType: this.floorType,

          }

          
        }).then(function(response) {
          this.sendDone = data.data;
          console.log('sendDone = ' + this.sendDone);
          console.log ('sss'+this.data);
          return this.sendDone;




        })
        // Если запрос с ошибкой
        .catch(function (error) {
          this.sendDone = "Возникла ошибка, попробуйте еще раз";
          console.log(error);
          return this.sendDone;
        });

        return this.sendDone;;
      }
    },
  });
