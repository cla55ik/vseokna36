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
    },
    methods: {
      getAllData: function(){
        calcData = [];
        calcData.push(this.floorType);
        calcData.push(this.matType);
        calcData.push(this.winWidth);
        calcData.push(this.winHeight);
        calcData.push(this.profileName);
        calcData.push(this.winType);
        //console.log(this.phoneForm);
        calcData.push(this.phoneForm);
        console.log(calcData);

        return calcData;

      },
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


        let calcArr = this.getAllData();
        console.log('calcArr = '+calcArr);
        let phone = calcArr[6];
        if(this.validation(phone)){
          console.log('Valid');
          this.submitTest();
        }else{
          console.log('novalid phone');
          return;
        };

      },
      submitTest() {
        console.log('Test start');
        axios({
          method: 'post',
          headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
          url: '../src/php/sender_calc.php',
          data: {
            phone: this.phoneForm,
            floorType: this.floorType,

          }
        }).then(function(data) {
          this.err = data;
          console.log('err = ' + this.err);
          console.log('data = ' + data);


        })
        // Если запрос с ошибкой
        .catch(function (error) {
          console.log(error);
        });
      }
    },
  });
