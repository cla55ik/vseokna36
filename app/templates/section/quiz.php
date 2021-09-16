<div class="container pb-70" id="calc">
  <h2 class="title-32  text-center mb-70">
    <?=$calc_title_1; ?> <span class="pink"><?=$calc_title_2; ?></span> ЗА 3 МИНУТЫ!
  </h2>


    <div class="container d-flex quiz-section"  >
      <div class="col-12 col-lg-8 quiz-wrapper" id="calculator">

        <div class="" v-show="stepIndex===0">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="pb-30 d-flex justify-content-between text-center ">

            <div class="">
              <label for="one">
                <div class="quiz-img">
                  <input type="radio" id="one" value="Квартира" v-model="floorType">
                    <img src="/src/img/q-1-1.svg" alt="" loading="lazy">
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
                    <img src="/src/img/q-1-2.svg" alt="" loading="lazy">
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
                    <img src="/src/img/q-1-3.svg" alt="" loading="lazy">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Офис
                </div>
              </label>
            </div>



          </div>

          <div class="quiz-button">
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>

        <div class="" v-show="stepIndex===1">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="pb-30 text-left material-step">
            <div class="calc-material">
              <input type="radio" id="matone" value="Кирпич" v-model="matType">
              </input>
              <label class="title-18" for="matone">Кирпич</label>
            </div>
            <div class="calc-material">
              <input type="radio" id="mattwo" value="Монолит" v-model="matType">
              </input>
              <label class="title-18" for="mattwo">Монолит</label>
            </div>
            <div class="calc-material">
              <input type="radio" id="matthree" value="Панель" v-model="matType">
              </input>
              <label class="title-18" for="matthree">Панель</label>
            </div>
            <div class="calc-material">
              <input type="radio" id="matfour" value="Дерево" v-model="matType">
              </input>
              <label class="title-18" for="matfour">Дерево</label>
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
          <div class="pb-30 d-flex flex-wrap text-center win-step">
            <div class="m-2">
              <label for="winone">
                <div class="quiz-img">
                  <input type="radio" id="winone" value="Одностворчатое" v-model="winType">
                    <img src="/src/img/win1.png" alt="" loading="lazy">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Одностворчатое
                </div>
              </label>
            </div>
            <div class="m-2">
              <label for="wintwo">
                <div class="quiz-img">
                  <input type="radio" id="wintwo" value="Двустворчатое" v-model="winType">
                    <img src="/src/img/win2.png" alt="" loading="lazy">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Двустворчатое
                </div>
              </label>
            </div>
            <div class="m-2">
              <label for="winthree">
                <div class="quiz-img">
                  <input type="radio" id="winthree" value="Трехстворчатое" v-model="winType">
                    <img src="/src/img/win3.png" alt="" loading="lazy">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Трехстворчатое
                </div>
              </label>
            </div>
            <div class="m-2">
              <label for="balblock">
                <div class="quiz-img">
                  <input type="radio" id="balblock" value="Балконный блок" v-model="winType">
                    <img src="/src/img/bb.png" alt="" loading="lazy">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Балконный блок
                </div>
              </label>
            </div>
            <div class="m-2 d-none">
              <label for="balkon">
                <div class="quiz-img">
                  <input type="radio" id="balkon" value="Балкон" v-model="winType">
                    <img src="/src/img/q-1-1.svg" alt="" loading="lazy">
                  </input>
                </div>
                <div class="quiz-radio-title">
                  Балкон
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
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="pb-30 d-flex justify-content-between quiz-profile title-18">
            <div class="col-6">
              <div class="calc-profile">
                <input type="radio" id="blitz" value="Blitz" v-model="profileName">
                </input>
                <label for="blitz">Blitz</label>
              </div>
              <div class="calc-profile">
                <input type="radio" id="grazio" value="Grazio" v-model="profileName">
                </input>
                <label for="grazio">Grazio</label>
              </div>
              <div class="calc-profile">
                <input type="radio" id="delight" value="Delight" v-model="profileName">
                </input>
                <label for="delight">Delight</label>
              </div>
            </div>
            <div class="col-6">
              <div class="calc-profile">
                <input type="radio" id="brilliant" value="Brilliant" v-model="profileName">
                </input>
                <label for="brilliant">Brilliant</label>
              </div>
              <div class="calc-profile">
                <input type="radio" id="geneo" value="Geneo" v-model="profileName">
                </input>
                <label for="geneo">Geneo</label>
              </div>
              <div class="calc-profile">
                <input type="radio" id="intellio" value="Intellio" v-model="profileName">
                </input>
                <label for="intellio">Intellio</label>
              </div>
            </div>


          </div>
          <div class="quiz-button">
            <button class="prev" v-on:click="prev">Назад</button>
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>
        <div class="" v-show="stepIndex===4">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="calc-range">
            <label class="w-100" for="win-width">Ширина, мм</label>
            <input type="range" min="400" max="8000" step="50" value="1400" id="win-width"  v-model="winWidth">
            </input>
            <span v-show="winWidth != ''">{{ winWidth }} мм</span>
            <span v-show="winWidth == null">1400 мм</span>
          </div>
          <div class="calc-range">
            <label class="w-100" for="win-width">Высота, мм</label>
            <input type="range" min="400" max="4000" step="50" value="1500" id="win-height"  v-model="winHeight">
            </input>
            <span v-show="winHeight != ''">{{ winHeight }} мм</span>
            <span v-show="winHeight == null">1500 мм</span>
          </div>
          <div class="quiz-button">
            <button class="prev" v-on:click="prev">Назад</button>
            <button class="next" v-on:click="next">Далее</button>
          </div>
        </div>
        <div class="" v-show="stepIndex===5">
          <div class="quiz-title pb-30">
            <h3>{{ quiz.steps[stepIndex].text }}</h3>
          </div>
          <div class="error-calc title-18">
            {{ err }} {{ sendDone }}
          </div>
          <div class="calc-form">
            <div class="text-24 green" id="result_calc">
            </div>
            <div class="text-16 font-weight-bold pink" id="novalid_calc">
            </div>
            <form id="form_cta_calc" class="form-inline d-flex flex-wrap mt-4" v-on:submit.prevent="send" v-show="sendDone != 'Заявка отправлена. Спасибо!'">
              <div class="col-lg-7">
                <input v-model="phoneForm" class="phone phone-calc" type="text" name="phone" value="" placeholder="+7 --- --- -- --" required>
              </div>
              <div class="col-lg-5">
                <input class="btn-round bg-pink w-100" type="submit" name="form_submit" value="Жду звонка">
              </div>
            </form>
          </div>


        </div>
      </div>
      <div class="d-none d-md-block col-lg-4 calculator-img p-0">
        <img src="/src/img/okno-raschet.jpg" alt="Расчет стоимости окон онлайн" loading="lazy">
      </div>
    </div>
</div>
