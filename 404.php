<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>404 || Terracotta Creative Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="body-red body-nomenu">

    <?php include('includes/header.php') ?>

  <div class="page rooms-page rooms-ready-page">
    <div class="wrapper">

      <div class="page__top flex">
        <div class="breadcrumbs">
          <a href="/" class="crumbs_active">Главная</a>&#8195;&#9679;&#8195;
          <a href="" class="crumbs_no_active">Ошибка 404</a>
        </div>
      </div>
      <section class="rooms_ready_section">

        <div class="rooms_ready_text">
          <p class="error404">
            404
          </p>
          <p class="notfound">
            Страница не найдена
          </p>
        </div>

      </section>

    </div>
<style media="screen">
.rooms_ready_text{
  width: auto;
  min-width: 40%;
}
.rooms_ready_section {
    background-image: url(/img/rooms/room-2.jpg);
  }
  p.error404{
    font-size: 20vmin;
    text-align: center;
    line-height: normal;
  }

  .notfound{
    font-size: 24px;
    text-align: center;

  }
</style>
  </div> <!-- end main -->

  <?php include('includes/footer.php') ?>
  <script src="/js/script.js"></script>
  </body>
</html>
