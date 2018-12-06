<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>План квартиры || Terracotta Creative Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="body-red scroll-header">

    <?php include('includes/header.php') ?>

  <div class="page flat-page">
    <div class="wrapper">

      <div class="breadcrumbs">
        <a href="/" class="crumbs_active">Главная</a>&#8195;&#9679;&#8195;
        <a href="/" class="crumbs_active">Выбор квартиры</a>&#8195;&#9679;&#8195;
        <a href="#" class="crumbs_active">План этажа</a>&#8195;&#9679;&#8195;
        <a href="#" class="crumbs_no_active">План квартиры</a>
      </div>

      <div class="floor-page__top flex">
        <div class="content_subname">
          <span>Дом 1</span> <span>квартира 2А</span>

        </div>
        <div class="content_subname">
          План квартиры
        </div>
        <div class="floor-page_item flex">
          <a class="button btn-arrow" href="#">
            <span>Фильтр выбора квартир</span>
            <svg height="16" viewBox="0 0 661.621 491.02303" width="22" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(0 1 -1 0 661.621 -24.811)"><path d="m77.894524 168.449v-168.449h-26.541762v168.449c-15.420715 6.831-26.541762 25.009-26.541762 46.578s11.121047 39.747 26.541762 46.578v400.016h26.541762v-400.016c15.434354-6.832 26.541766-25.009 26.541766-46.578s-11.108214-39.747-26.541766-46.578zm212.334096 281.189v-449.638h-26.54176v449.638c-15.43355 6.831-26.54176 25.01-26.54176 46.578 0 21.569 11.12104 39.747 26.54176 46.578v118.827h26.54176v-118.827c15.43435-6.831 26.54176-25.009 26.54176-46.578s-11.10741-39.747-26.54176-46.578zm199.06362-165.406v-284.232h-26.54177v284.232c-15.43355 6.831-26.54176 25.009-26.54176 46.578s11.10821 39.747 26.54176 46.578v284.232h26.54177v-284.231c15.43355-6.831 26.54176-25.009 26.54176-46.578.0008-21.569-11.10741-39.748-26.54176-46.579z" stroke-width=".895727"/><g fill="#fff" stroke-width="1.01105" transform="rotate(-90)"><ellipse cx="-495.8342" cy="277.05618" rx="41.635948" ry="34.822792"/><ellipse cx="-214.9808" cy="64.334343" rx="41.635948" ry="34.822796"/><ellipse cx="-330.53339" cy="475.66577" rx="41.635948" ry="34.822792"/></g></g></svg>
          </a>
          <img class="compass" src="/img/houses/compass.png" alt="" width="70" height="70">
        </div>
      </div>


      <div class="floor-page__main flex">
        <div class="fpm_1 flex">
          <div class="floor_list">
            <a class="floor_list_up "href="#"><svg width="16" height="24" style="transform:rotate(-90deg); -webkit-transform:rotate(-90deg);"><use xlink:href="#arrow-right"></use></svg></a>
            <div class="floor_number">05</div>
            <div class="content_text">ЭТАЖ</div>
            <a class="floor_list_down "href="#"><svg width="16" height="24" style="transform:rotate(90deg); -webkit-transform:rotate(90deg);"><use xlink:href="#arrow-right"></use></svg></a>
            <div class="floor_list_hidden">
              <ul class="floor-slick">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">11</a></li>
                <li><a href="#">12</a></li>
                <li><a href="#">13</a></li>
              </ul>
              <div class="floor_arrow_up"><svg width="16" height="24" style="transform:rotate(-90deg); -webkit-transform:rotate(-90deg);" fill="#ffffff"><use xlink:href="#arrow-right"></use></svg></div>
              <div class="floor_arrow_down"><svg width="16" height="24" style="transform:rotate(90deg); -webkit-transform:rotate(90deg);" fill="#ffffff"><use xlink:href="#arrow-right"></use></svg></div>

            </div>
          </div>    <!-- end floor-list -->
          <div class="btn-box">
            <div class="button btn-arrow">
              <svg width="12" height="12"><use xlink:href="#calc"></use></svg>
              <span>калькулятор</span>
            </div>
            <div class="button btn-arrow">
              <svg width="20" height="10"><use xlink:href="#key"></use></svg>
              <span>Забронировать квартиру</span>
            </div>
            <a class="button btn-arrow" href="#">
              <svg width="14" height="14"><use xlink:href="#pdf"></use></svg>
              <span>Скачать PDF</span>
            </a>
          </div>
          <div class="flat_floorplan_mini">
            <div class="content_text">План этажа</div>
              <?php include('includes/floor.php') ?>
          </div>
        </div>  <!-- end fpm1 -->
        <div class="fpm_2 flex">
          <div class="flat_plan">
            <img src="/img/houses/flatB1.png" alt="Планировка квартиры">
          </div>
          <div class="flat_box flex">
            <div class="flat_price">
              <p class="flat_price_num">14000 грн/м<sub>2</sub></p>
              <p class="content_text">* цена указана без скидки</p>

            </div>
            <div class="button">
              Хочу скидку
            </div>

          </div>
        </div>
        <div class="fpm_3 flex">
          <div class="flat_descr">
            <div class="type_flat">2A</div>
            <div class="content_text">ТИП КВАРТИРЫ</div>
          <ul class="flat_param">
            <li class="bold">Общая: <span>121.2</span>м<sub>2</sub></li>
            <li class="bold">Жилая: <span>92.6</span>м<sub>2</sub></li>
            <li>Прихожая: <span>11.2</span>м<sub>2</sub></li>
            <li>Гостинная: <span>22.2</span>м<sub>2</sub></li>
            <li>Кухня: <span>9.6</span>м<sub>2</sub></li>
            <li>Спальня: <span>16.6</span>м<sub>2</sub></li>
            <li>Гардеробная: <span>4.2</span>м<sub>2</sub></li>
            <li>Ванная: <span>6.4</span>м<sub>2</sub></li>
            <li>Санузел: <span>2.2</span>м<sub>2</sub></li>
            <li>Лоджия: <span>7.1</span>м<sub>2</sub></li>
          </ul>

          </div>
        </div>
        <!-- fpm_3 end  -->
      </div>
      <!-- floor-page__main end -->
    </div>
  </div> <!-- end main -->

  <?php include('includes/footer.php') ?>
  <script type="text/javascript">

  var elems = document.getElementsByClassName('floor_path');
  var i;

  for (i = elems.length - 1; i >= 0; --i) {
    elems[i].addEventListener('mouseover', function (){

      var name = this.dataset.name;
      var square = this.dataset.square;
      var floor = this.dataset.floor;
      var app = this.dataset.app;
      document.querySelector('#nameFlat').innerHTML = name;
      document.querySelector('#squareFlat').innerHTML = square;
      document.querySelector('#floorFlat').innerHTML = floor;
      document.querySelector('#appFlat').innerHTML = app;


    });
  };

</script>

  <script src="/js/script.js"></script>

  </body>
</html>
