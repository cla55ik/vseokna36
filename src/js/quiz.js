


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
        stest:passedArray,
        test: 2,
      },



    });






}
