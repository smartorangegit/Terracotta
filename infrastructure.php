<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Инфраструктура || Terracotta Creative Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="body-red">

    <?php include('includes/header.php') ?>

  <div class="page infra-page">
    <div class="wrapper">

      <div class="page__top flex">
        <div class="breadcrumbs">
          <a href="/" class="crumbs_active">Главная</a>&#8195;&#9679;&#8195;
          <a href="" class="crumbs_no_active">Инфраструктура</a>
        </div>
        <h1 class="content_subname">
          Инфраструктура
        </h1>

      </div>
      <section class="infra_section flex">
        <div class="infra_text">
          <h2 class="content_subname">Все для комфортной жизни городского жителя </h2>
          <div class="content_text">
            <p>
              Любишь, когда все необходимое находится рядом? На территории жилого комплекса предусмотрен большой супермаркет, отделение банка и спортзал, и многое другое.
            </p>
            <p>
              Сэкономленное время ты сможешь потратить на действительно важные задачи.
            </p>
          </div>
        </div>
        <div class="infra_img">
          <img src="/img/infra/infra-1.jpg" alt="">
        </div>
      </section>
      <section class="infra_section flex">
        <div class="infra_text">
          <h2 class="content_subname">Грамотная организация внутреннего двора</h2>
          <div class="content_text">
            <p>
              ЖК Terracotta — это место, где хочется не только жить и работать, но и отдыхать. Здесь предусмотрены аллеи для прогулок, зеленые насаждения с ландшафтным дизайном, клумбы у подъездов. Обустроены комфортные места для отдыха.
            </p>
          </div>
        </div>
        <div class="infra_img">
          <img src="/img/infra/infra-2.jpg" alt="">
        </div>
      </section>
      <section class="infra_section flex">
        <div class="infra_text">
          <h2 class="content_subname">Мы знаем, как важно быть спокойным за времяпрепровождения детей</h2>
          <div class="content_text">
            <p>
              Для тебя важен досуг и развитие детей?
            </p>
            <p>
              Будь уверен, что на игровой площадке во внутреннем дворе ЖК Terracotta  ребенку будет весело играть со сверстниками, а в современном детском саду его развитием будут заниматься высококвалифицированные педагоги.
            </p>
          </div>
        </div>
        <div class="infra_img">
          <img src="/img/infra/infra-3.jpg" alt="">
        </div>
      </section>
      <section class="infra_section flex">
        <div class="infra_text">
          <h2 class="content_subname">Гостеприимность наше кредо!</h2>
          <div class="content_text">
            <p>
              ЖК Terracotta — это забота о безопасности самых маленьких жителей. Территория внутреннего двора закрыта для автомобилей, поэтому дети могут беззаботно развлекаться на игровой площадке. На территории жилого комплекса будет работать детский сад, что позволит родителям оставаться спокойными за времяпровождения ребенка.
            </p>
          </div>
        </div>
        <div class="infra_img">
          <img src="/img/infra/infra-4.jpg" alt="">
        </div>
      </section>
    </div>

      <section class="infra_map">
        <div id="infra_map">

        </div>
        <div class="infra_box">
          <div class="content_text bold">Адрес: </div>
          <div class="content_text">г.Киев, ул.Черниговская,8</div>
          <ul class="infra_descr">
            <li class="flex" onclick="filterMarkers($(this).attr('data-category'))" data-category="medicine"><img src="/img/infra/medicine.png" alt=""><span>Аптека</span></li>
            <li class="flex" onclick="filterMarkers($(this).attr('data-category'))" data-category="market"><img src="/img/infra/market.png" alt=""><span>Магазин</span></li>
            <li class="flex" onclick="filterMarkers($(this).attr('data-category'))" data-category="school"><img src="/img/infra/school.png" alt=""><span>Школа</span></li>
            <li class="flex" onclick="filterMarkers($(this).attr('data-category'))" data-category="garden"><img src="/img/infra/garden.png" alt=""><span>Садик</span></li>
            <li class="flex" onclick="filterMarkers($(this).attr('data-category'))" data-category="univer"><img src="/img/infra/univer.png" alt=""><span>Университет</span></li>
            <li class="flex" onclick="filterMarkers($(this).attr('data-category'))" data-category="mall"><img src="/img/infra/shop.png" alt=""><span>Торговый центр</span></li>
          </ul>

        </div>

      </section>





  </div> <!-- end main -->

  <?php include('includes/footer.php') ?>
  <script src="/js/script.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDehzKltJ2hA0p9O2BWYkXG2Z4q7A-3TTM&sensor=false"></script>
  <script src="/js/inframap.js"></script>
  </body>
</html>
