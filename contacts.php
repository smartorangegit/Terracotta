<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Контакты || Terracotta Creative Residence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="contact-body body-nomenu">

    <?php include('includes/header.php') ?>

    <div class="page contact-page">


    <section  class="contact_one">
      <div class="wrapper">
        <div class="page__top flex">
          <div class="breadcrumbs">
            <a href="/" class="crumbs_active">Главная</a>&#8195;&#9679;&#8195;
            <a href="" class="crumbs_no_active">Контакты</a>
          </div>
          <h1 class="content_subname">
            Контакты
          </h1>
        </div>

        <div class="contact_outer flex">
          <div class="contact_box">
            <form class="" action="index.html" method="post">

              <div class="content_subname">
                Свяжитесь с нами
              </div>
              <div class="contact_inner flex">
                <div class="contact_item">
                  <div class="input_outer">
                    <input type="name" required name="name" autocomplete="name" placeholder="Имя, фамилия" value="">
                  </div>
                  <div class="input_outer">
                    <input type="tel" required name="tel" autocomplete="home tel" placeholder="Телефон" value="">
                  </div>
                  <div class="input_outer">
                    <input type="email" required name="tel" autocomplete="home tel" placeholder="Телефон" value="">
                  </div>
                </div>

                <div class="contact_item">
                  <div class="input_outer_1">
                    <textarea name="textarea" placeholder="Текст сообщения" ></textarea>
                  </div>
                  <div class="checkbox__outer flex">
                      <input class="checkbox" id="agree" type="checkbox" name="agree" value="1" checked="">
                      <label for="agree">Да, я согласен получать уведомления про акции и новости</label>
                  </div>
                </div>
              </div>
              <input type="submit" name="" value="Отправить сообщение">


            </form>
          </div>
          <div class="contact_descr">
            <div class="content_subname">
              Отдел продаж
            </div>
            <div class="contact_prev">
              Мы всегда рады Вам в нашем отделе продаж!
            </div>
            <dl class="">
              <dd><svg width="12" height="12"><use xlink:href="#location"></use></svg> Киев, ул. Черниговская 8</dd>
              <dd><svg width="12" height="12"><use xlink:href="#phone"></use></svg><a href="#">(044) 922-22-67</a></dd>
              <dt class="second_dt">Время работы отдела продаж:</dd>
              <dd><svg width="12" height="12"><use xlink:href="#clock"></use></svg>Пн-Пт: 9:00-20:00</dd>
              <dd><svg width="12" height="12"><use xlink:href="#clock"></use></svg>СБ-ВС: Выходной</dd>
            </dl>

          </div>

        </div>
      </div>

    </section>


    <section id="red3" class="contact_two">
      <div id="map_contact" class=""></div>
    </section>


  </div> <!-- end main -->

  <?php include('includes/footer.php') ?>

  <script src="/js/script.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDehzKltJ2hA0p9O2BWYkXG2Z4q7A-3TTM&sensor=false"></script>
  <script src="/js/mapContact.js"></script>
  </body>
</html>
