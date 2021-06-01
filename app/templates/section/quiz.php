<div class="container pb-70" id="calc">
  <h2 class="title-32  text-center mb-70">
    УЗНАЙТЕ ТОЧНУЮ <span class="pink">СТОИМОСТЬ ОКОН</span> ЗА 3 МИНУТЫ!
  </h2>

    <div class="container d-flex quiz-section"  >
      <div class="col-lg-8 quiz-wrapper" id="calculator">
        <div class="" v-show="stepIndex===0">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="pb-30 d-flex justify-content-between text-center ">
            <div class="">
              <label for="one">
                <div class="quiz-img">
                  <input type="radio" id="one" value="Квартира" v-model="floorType">
                    <img src="/src/img/q-1-1.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Квартира
                </div>
              </label>
            </div>
            <div class="">
              <label for="two">
                <div class="quiz-img">
                  <input type="radio" id="two" value="Частный дом" v-model="floorType">
                    <img src="/src/img/q-1-2.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Частный дом
                </div>
              </label>
            </div>
            <div class="">
              <label for="three">
                <div class="quiz-img">
                  <input type="radio" id="three" value="Офис" v-model="floorType">
                    <img src="/src/img/q-1-3.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Офис
                </div>
              </label>
            </div>



          </div>
          <span>Выбрано: {{ floorType }}</span>
          <div class="quiz-button">
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>

        <div class="" v-show="stepIndex===1">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="pb-30 d-flex justify-content-between text-center ">
            <div class="">
              <label for="matone">
                <div class="quiz-img">
                  <input type="radio" id="matone" value="Кирпич" v-model="matType">
                    <img src="/src/img/q-1-1.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Кирпич
                </div>
              </label>
            </div>
            <div class="">
              <label for="mattwo">
                <div class="quiz-img">
                  <input type="radio" id="mattwo" value="Монолит" v-model="matType">
                    <img src="/src/img/q-1-1.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Монолит
                </div>
              </label>
            </div>
            <div class="">
              <label for="matthree">
                <div class="quiz-img">
                  <input type="radio" id="matthree" value="Панель" v-model="matType">
                    <img src="/src/img/q-1-1.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Панель
                </div>
              </label>
            </div>
            <div class="">
              <label for="matfour">
                <div class="quiz-img">
                  <input type="radio" id="matfour" value="Дерево" v-model="matType">
                    <img src="/src/img/q-1-1.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Дерево
                </div>
              </label>
            </div>
          </div>
          <div class="quiz-button">
            <button class="prev" v-on:click="prev">Назад</button>
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>

        <div class="" v-show="stepIndex===2">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="pb-30 d-flex justify-content-between text-center ">
            <div class="">
              <label for="matone">
                <div class="quiz-img">
                  <input type="radio" id="matone" value="Кирпич" v-model="matType">
                    <img src="/src/img/q-1-1.svg" alt="">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Кирпич
                </div>
              </label>
            </div>
          </div>
          <div class="quiz-button">
            <button class="prev" v-on:click="prev">Назад</button>
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>

        <div class="" v-show="stepIndex===3">
          4
          <div class="quiz-button">
            <button class="prev" v-on:click="prev">Назад</button>
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>
        <div class="" v-show="stepIndex===4">
          5
          <div class="quiz-button">
            <button class="prev" v-on:click="prev">Назад</button>
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4 calculator-img p-0">
        <img src="/src/img/okno-raschet.jpg" alt="Расчет стоимости окон онлайн" loading="lazy">
      </div>
    </div>
</div>
