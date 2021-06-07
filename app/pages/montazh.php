<?php


$page_title = '	Установка пластиковых окон в Воронеже';
$page_description = 'Профессиональная установка пластиковых окон по ГОСТу в Воронеже и Воронежской области. Гарантируем качественный монтаж и в срок!';
$img_og = 'https://dev.vseokna36.ru/src/img/montazh-og.jpg';
include_once($_SERVER['DOCUMENT_ROOT']. "/app/layouts/header.php");
 ?>


<main class="container-fluid  p-0">
  <div class="container pb-50 pt-50">
    <h1 class="title-32">Установка пластиковых окон</h1>
  </div>
  <div class="container d-flex flex-wrap">
    <div class="col-12 col-lg-6">
      <p>
        <strong>Монтаж окон — сложный процесс, состоящий из нескольких этапов. Доверьте его профессионалам.</strong>
      </p>

      <p>Наша компания выполняет работы по установке окон в соответствии со строительными стандартами.</p>
      <p>Соблюдение строительных норм обеспечит герметичность, устойчивость к ветровым нагрузкам, отсутствие промерзаний по контуру, долговечность. Мы не рекомендуем выполнять монтажные работы самостоятельно или доверять частным лица, так как даже из-за незначительных погрешностей оконный блок может потерять большую часть своих преимуществ, а срок его эксплуатации сократится в разы.</p>
      <p>Заключая договор на установку, вы получите полный комплекс работ “под ключ” и выполнение гарантийных обязательств.</p>
      <p><strong>Мы рекомендуем подготовиться к монтажу:</strong>
        <ul>
          <li>закрыть плотной пленкой мебель и другие предметы в помещении, чтобы избежать загрязнения строительной пылью.</li>
          <li>освободить оконный проем от штор и цветов на подоконнике.</li>
        </ul>

      </p>
    </div>
    <div class="col-12 col-lg-6">
      <h3 class="text-center">Этапы работ</h3>
      <ol>
        <li> <strong>Демонтаж старых окон</strong>  (при необходимости)</li>
        <li> <strong>Зачищение и подготовка оконного проема</strong> (очищение от старого утеплителя, штукатурки и прочего мусора)</li>
        <li> <strong>Установка окна в проеме</strong> ( По периметру рамы в оконном проеме подкладываются бруски и клинья для создания технологического зазора. Рама устанавливается сначала в горизонтальное положение, затем в вертикальное и диагональ. Затем происходит установка с помощью крепежных элементов, зависящих от типа и сложности дома. Затем монтажные зазоры заполняются монтажной пеной. </li>
        <li> <strong>Установка отлива.</strong> Крепится с внешней стороны под профиль рамы к подставочному профилю с некоторым уклоном в сторону улицы. Для крепления отлива используются саморезы. Промежуток под отливом заполняется монтажной пеной.</li>
        <li> <strong>Установка подоконника.</strong> (Крепится с внутренней стороны окна, под его низ на 10-20 мм либо вплотную к изделию, с последующей герметизацией монтажного зазора.  )</li>
        <li> <strong>Установка и настройка фурнитуры. </strong>(Навешивание створок, фиксация стеклянных пакетов и регулирование крепежа. Монтируются опциональные элементы остекления, аксессуары — ручки, москитные сетки и тд). </li>
      </ol>
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
