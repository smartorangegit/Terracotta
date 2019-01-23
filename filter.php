<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Фильтр || Terracotta Creative Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="body-red body-nomenu">

    <?php include('includes/header.php') ?>

  <div class="page filter-page">
    <div class="wrapper">

      <div class="news-item-top">
        <div class="breadcrumbs">
          <a href="/" class="crumbs_active">Главная</a>&#8195;&#9679;&#8195;
          <a href="/house-page.php" class="crumbs_active">Выбор дома</a>&#8195;&#9679;&#8195;
          <a href="#" class="crumbs_no_active">Фильтр выбора квартир</a>
        </div>

      </div>

      <h1 class="news-item-name content_subname">
        Фильтр выбора квартир
      </h1>
      <section class="range-section">
        <div class="range_inner flex">
            <div class="range__item flex">
                <div class="filter_name">Общая площадь, м<sup>2</sup></div>
                <div class="range_input">
                    <input type="text" class="range-init" id="all_roomRange" data-min="36" data-max="150">
                </div>
            </div>
            <div class="range__item flex">
                <div class="filter_name">Этаж</div>
                <div class="range_input">
                    <input type="text" class="range-init" id="floorRange" data-min="1" data-max="25" >
                </div>
            </div>
            <div class="range__item flex">
                <div class="filter_name">Количество комнат</div>
                <div class="range_input">
                    <input type="text" class="range-init" id="roomsRange" data-min="1" data-max="4">
                </div>
            </div>
            <div class="range__item flex">
                <div class="filter_name">Общая стоимость</div>
                <div class="range_input">
                    <input type="text" class="range-init" id="priceRange" data-min="300000" data-max="1620000">
                </div>
            </div>
        </div>
        <div class="range_button flex">
          <div class="checkbox_input flex">
            <div class="filter_name">Дом</div>
                <input id="checkbox__room1" class="checkbox__room filter__checkbox" type="checkbox" value="1"/>
                <label for="checkbox__room1" class="checkbox__text">1</label>
                <input id="checkbox__room2" class="checkbox__room filter__checkbox" type="checkbox" value="2"/>
                <label for="checkbox__room2" class="checkbox__text">2</label>
                <input id="checkbox__room3" class="checkbox__room filter__checkbox" type="checkbox" value="3"/>
                <label for="checkbox__room3" class="checkbox__text">3</label>
                <input id="checkbox__room4" class="checkbox__room filter__checkbox" type="checkbox" value="4"/>
                <label for="checkbox__room4" class="checkbox__text">4</label>
          </div>
          <div id="search" class="button button-red">Искать </div>
          <div id="reset" class="reset_button">Сбросить параметры</div>
        </div>
        <div class="range_info flex">
          <div class="range_info_item">
            Найдено типов квартир: <span id="numResults">0</span>
          </div>
          <div class="range_info_item">
            <a href="/1-rooms.php">1-кімнатні</a>
            <a href="/2-rooms.php">2-кімнатні</a>
            <a href="/3-rooms.php">3-кімнатні</a>
          </div>

        </div>


      </section>
      <section class="result-section">
        <table class="results">
            <thead>
            <tr>
                <th>Дом</th>
                <th>Секция</th>
                <th>Этаж</th>
                <th>Комнат</th>
                <th>Площадь, м<sup>2</sup></th>
                <th>Тип</th>
                <th>Стоимость</th>
            </tr>
            </thead>
            <tbody>
                <tr class="rows_c" data-href="#" data-image="/img/houses/flatB1.png" data-bn="1" data-type="2A" data-floor="4" data-rooms="2" data-square="72.2" data-price="520000">
                  <td>1<a class="maket"><img alt="План квартиры Terracotta"  src="/img/houses/flatB1.png"><span class="mask"></span></td>
                  <td>2</td>
                  <td>4</td>
                  <td>2</td>
                  <td>72.2</td>
                  <td>2A</td>
                  <td>52000</td>
                </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="2" data-sn="5" data-floor="3" data-rooms="3" data-square="106.70" data-price="1598509">
                  <td>2<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>3</td>
                  <td>3</td>
                  <td>106.70</td>
                  <td>3-A</td>
                  <td>1598509</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="2" data-sn="5" data-floor="7" data-rooms="1" data-square="56.4" data-price="598000">
                  <td>2<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>7</td>
                  <td>1</td>
                  <td>56.4</td>
                  <td>3-A</td>
                  <td>598000</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat3A.png" data-bn="3" data-sn="5" data-floor="20" data-rooms="3" data-square="98.40" data-price="1620000">
                  <td>3<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat3A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>20</td>
                  <td>3</td>
                  <td>98.40</td>
                  <td>3-A</td>
                  <td>1620000</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat3B.png" data-bn="4" data-sn="5" data-floor="1" data-rooms="2" data-square="71.70" data-price="1421000">
                  <td>4<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat3B.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>1</td>
                  <td>2</td>
                  <td>71.70</td>
                  <td>3-A</td>
                  <td>1421000</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="1" data-sn="5" data-floor="10" data-rooms="1" data-square="51.8" data-price="1500000">
                  <td>1<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>10</td>
                  <td>1</td>
                  <td>51.8</td>
                  <td>3-A</td>
                  <td>1500000</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="2" data-sn="5" data-floor="16" data-rooms="3" data-square="96.70" data-price="1300509">
                  <td>2<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>16</td>
                  <td>3</td>
                  <td>96.70</td>
                  <td>3-A</td>
                  <td>1300509</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="3" data-sn="5" data-floor="8" data-rooms="2" data-square="56.70" data-price="1098509">
                  <td>3<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>8</td>
                  <td>2</td>
                  <td>56.70</td>
                  <td>2-A</td>
                  <td>1098509</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="1" data-sn="5" data-floor="9" data-rooms="2" data-square="96.70" data-price="800000">
                  <td>1<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>9</td>
                  <td>2</td>
                  <td>96.70</td>
                  <td>2-A</td>
                  <td>800000</td>
              </tr>
              <tr class="rows_c" data-href="" data-image="/img/houses/flat2A.png" data-bn="2" data-sn="5" data-floor="3" data-rooms="1" data-square="46.70" data-price="598509">
                  <td>2<a class="maket"><img alt="План квартиры Terracotta" src="/img/houses/flat2A.png"><span class="mask"></span></a></td>
                  <td>5</td>
                  <td>3</td>
                  <td>1</td>
                  <td>46.70</td>
                  <td>1-A</td>
                  <td>598509</td>
              </tr>

            </tbody>
        </table>

        <div class="filter_ps">
          <p>*Цена и наличие может меняться. Актуальную информацию о цене и наличии квартир уточняйте в отделе продаж </p>
          <p>*Цена указана без учета скидки. Узнайте больше в отделе продаж. <a href="#">  Хочу скидку!</a></p>
        </div>


      </section>




      <!-- floor-page__main end -->
    </div>
  </div> <!-- end main -->

  <?php include('includes/footer.php') ?>
  <script src="/js/script.js"></script>
  <script type="text/javascript" src="/js/ion.rangeSlider.js"></script>
  <script type="text/javascript" src="/js/range.js"></script>

  </body>
</html>
