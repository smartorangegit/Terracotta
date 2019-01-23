<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Выбор дома || Terracotta Creative Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="body-red body-nomenu">

    <?php include('includes/header.php') ?>

  <div class="page house-page">
    <div class="wrapper">

      <div class="floor-page__top flex">
        <div class="breadcrumbs">
          <a href="/" class="crumbs_active">Главная</a>&#8195;&#9679;&#8195;
          <a href="" class="crumbs_no_active">Выбор дома</a>
        </div>
        <h1 class="content_subname">
          Выбор дома
        </h1>
        <div class="floor-page_item flex">
          <a class="button btn-arrow" href="#">
            <span>Фильтр выбора квартир</span>
            <svg height="16" viewBox="0 0 661.621 491.02303" width="22" xmlns="http://www.w3.org/2000/svg"><g transform="matrix(0 1 -1 0 661.621 -24.811)"><path d="m77.894524 168.449v-168.449h-26.541762v168.449c-15.420715 6.831-26.541762 25.009-26.541762 46.578s11.121047 39.747 26.541762 46.578v400.016h26.541762v-400.016c15.434354-6.832 26.541766-25.009 26.541766-46.578s-11.108214-39.747-26.541766-46.578zm212.334096 281.189v-449.638h-26.54176v449.638c-15.43355 6.831-26.54176 25.01-26.54176 46.578 0 21.569 11.12104 39.747 26.54176 46.578v118.827h26.54176v-118.827c15.43435-6.831 26.54176-25.009 26.54176-46.578s-11.10741-39.747-26.54176-46.578zm199.06362-165.406v-284.232h-26.54177v284.232c-15.43355 6.831-26.54176 25.009-26.54176 46.578s11.10821 39.747 26.54176 46.578v284.232h26.54177v-284.231c15.43355-6.831 26.54176-25.009 26.54176-46.578.0008-21.569-11.10741-39.748-26.54176-46.579z" stroke-width=".895727"/><g fill="#fff" stroke-width="1.01105" transform="rotate(-90)"><ellipse cx="-495.8342" cy="277.05618" rx="41.635948" ry="34.822792"/><ellipse cx="-214.9808" cy="64.334343" rx="41.635948" ry="34.822796"/><ellipse cx="-330.53339" cy="475.66577" rx="41.635948" ry="34.822792"/></g></g></svg>
          </a>
        </div>
      </div>
      <div class="house_btn_box flex">
        <a class="button" href="#">1 комнатные</a>
        <a class="button" href="#">2 комнатные</a>
        <a class="button" href="#">3 комнатные</a>
      </div>
      <div class="house_subname">
        Выбор дома на генплане
      </div>


      <div class="house-page__main">
        <div class="house_page_prev">
          Выберите дом, чтобы перейти к планировке этажа
        </div>
        <svg class="house_svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1919.8 1079.2" style="enable-background:new 0 0 1919.8 1079.2;" xml:space="preserve"><image xlink:href="/img/houses/houses-bg.jpg" x="0" y="2" height="100%" width="100%" />
          <a href="/floor-page.php">
            <polygon class="house_path" data-num="4" data-flats="120" data-app="1-3" data-floor="20" points="1395.4,129.5 1454.4,129.5 1454.4,105.5 1646.4,101.5 1658.4,120.5 1663.4,118.5 1667.4,125.5 1742.4,124.5 1748.4,1022.5 1401.4,1022.5 "/>
          </a>
          <a href="/floor-page.php">
            <polygon class="house_path" data-num="3" data-flats="110" data-app="1-2" data-floor="17" points="1017.4,365.5 1069.4,339.5 1069.4,323.5 1207.4,253.5 1340.4,300.5 1340.4,1022.5 1017.4,1022.5 "/>
          </a>
          <a href="/floor-page.php">
            <polygon class="house_path" data-num="2" data-flats="130" data-app="1-2" data-floor="22" points="730.4,505.5 764.4,488.5 764.4,472.5 872.4,420.5 1010.4,450.5 1011.4,1022.5 730.4,1022.5 "/>
          </a>
          <a href="/floor-page.php">
            <polygon class="house_path" data-num="1" data-flats="140" data-app="1-4" data-floor="24" points="158.4,237.5 279.4,254.5 279.4,240.5 372.4,203.5 635.4,405.5 651.4,411.5 651.4,419.5 653.4,419.5	653.4,463.5 710.4,506.5 710.4,1022.5 155.4,1022.5 "/>
          </a>
        </svg>
        <div id="houseBox" class="house_descr_box">
          <div class="number_house flex">
            <span class="bold" id="houseNum">3</span>
            <span>дом</span>
          </div>
          <div class="descr_house">
            <div id="houseCount" class="content_subname">150</div>
            <div class="content_text">квартир в продаже</div>
            <div id="houseApp" class="content_subname">1-3</div>
            <div class="content_text">комнат</div>
            <div id="houseFloor" class="content_subname">23</div>
            <div class="content_text">этажа</div>
          </div>
        </div>

      </div>
      <!-- floor-page__main end -->
    </div>
  </div> <!-- end main -->

  <?php include('includes/footer.php') ?>
  <script type="text/javascript">
    var elems = document.getElementsByClassName('house_path');
    var i;
    for (i = elems.length - 1; i >= 0; --i) {
      elems[i].addEventListener('mouseover', function (){

        var hNum = this.dataset.num;
        var hFlats = this.dataset.flats;
        var hApp = this.dataset.app;
        var hFloor = this.dataset.floor;
        document.querySelector('#houseNum').innerHTML = hNum;
        document.querySelector('#houseCount').innerHTML = hFlats;
        document.querySelector('#houseApp').innerHTML = hApp;
        document.querySelector('#houseFloor').innerHTML = hFloor;
      });
    };
</script>

  <script src="/js/script.js"></script>
  <script type="text/javascript">
  $('.house_path').each(function(){
    var myBox = $("#houseBox");

    $(this).mouseenter(function() {

      var offset = $(this).offset();
      myBox.css("opacity","1");
      myBox.offset({top:offset.top, left:offset.left});
    });
    $(this).mouseleave(function() {
      myBox.css("opacity","0");
      });

  });

  </script>

  </body>
</html>
