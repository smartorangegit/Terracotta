<?php
/*
Template Name: Главная
*/
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(2));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
?>
<?php get_header();?>
 <div class="main">
    <section class="one section-on">
      <!-- Для добавления нужно раскомменировать строчку и добавить изображение в формате 1920*800 в папку img/main c названием slider-[i].jpg-->
      <div class="main_one__gallery">
        <div class="one_gallery__item one_gallery__item_1" data-href="h1" data-name="n1"  data-descr="d1"></div>
        <div class="one_gallery__item one_gallery__item_2" data-href="h2" data-name="n2"  data-descr="d2"></div>
        <div class="one_gallery__item one_gallery__item_3" data-href="h3" data-name="n3"  data-descr="d3"></div>
        <div class="one_gallery__item one_gallery__item_4" data-href="h4" data-name="n4"  data-descr="d4"></div>

      </div>
      <div class="one_inner wrapper flex">
        <div class="one_item">
          <div class="content_name">
            <?=$links[0];?>
          </div>
          <!-- <div class="main_one__name">n</div>
          <div class="main_one__descr">d</div>
          <a class="main_one__link">h</a> -->
          <div class="one_btn_box is_mobile">
            <a class="button" href="/house-page.php">
              <span>Выбрать квартиру</span>
            </a>
            <a class="button" href="/contacts.php">
              <span>Контакты</span>
            </a>

          </div>
          <div class="arrows_box">
            <span class="arrow__left one_arrow_left"><svg width="16" height="24" style="transform:scaleX(-1); -webkit-transform:scaleX(-1);"><use xlink:href="#arrow-right"></use></svg></span>
            <span class="arrow__right one_arrow_right"><svg width="16" height="24"><use xlink:href="#arrow-right"></use></svg></span>
          </div>
        </div>
        <div class="one_item">
          <div class="content_subname" id="example">
            <?=$links[1];?>
          </div>
          <div class="content_text wow fadeIn" data-wow-duration="2s">
            <?=$links[2]?>
          </div>
          <a class="button btn-arrow" href="<?=$LC;?>infrastruktura/">
            <span><?php _e('home-Узнать больше','smart-terracotta');?></span>
            <svg width="36" height="16"><use xlink:href="#arrow"></use></svg>
          </a>
        </div>
        <div class="mouse flex no_mobile">
          <svg class="bounceM"><use xlink:href="#mouse"></use></svg>
          <span><?php _e('home-Листайте ниже','smart-terracotta');?></span>
        </div>
      </div>
    </section>

    <section id="red1" class="two on_red_header section-on">
      <div class="wrapper flex">
        <div class="cat">
          <div class="cats_item cat1"></div>
          <div class="cats_item cat2"></div>
          <div class="cats_item cat3"></div>
          <div class="cats_item cat4"><img src="<?php bloginfo('template_url'); ?>/assets/img/main/two-4.jpg" alt=""></div>
          <div class="cats_item cat5"><img src="<?php bloginfo('template_url'); ?>/assets/img/main/two-5.jpg" alt=""></div>
          <div class="cats_item cat6"><img src="<?php bloginfo('template_url'); ?>/assets/img/main/two-6.jpg" alt=""></div>
          <div class="cats_item cat7"><img src="<?php bloginfo('template_url'); ?>/assets/img/main/two-7.jpg" alt=""></div>
          <div class="cats_item cat8"><img src="<?php bloginfo('template_url'); ?>/assets/img/main/two-8.jpg" alt=""></div>
        </div>
        <div class="two_inner">
          <div class="content_name wow fadeIn">
            <?=$links[0]?>
          </div>
          <div class="content_text">
<!--            <p>-->
<!--              Твоя жизнь — это динамика и целенаправленное движение вперед. Ты знаешь, что главная ценность — это время. Ты пытаешься наполнить дни яркими красками и незабываемыми впечатлениями, стремишься познать мир, хочешь успеть больше запланированного, чтобы жить, а не проживать.-->
<!--            </p>-->
<!--            <p>-->
<!--            Но тебе нужно иметь свое «место силы» в мегаполисе. Ты ищешь пространство для жизни под стать себе и практически нашел его.-->
<!--            </p>-->
            <p class="wow fadeIn">
                <?=$links[3]?>
            </p>
            <p class="wow fadeIn">
                <?=$links[4]?>
            </p>
          </div>
          <a class="button btn-arrow wow fadeIn" href="<?=$LC?>vybir-po-budynku/">
            <span><?php _e('home-Смотреть генплан','smart-terracotta');?></span>
            <svg width="36" height="16"><use xlink:href="#arrow"></use></svg>
          </a>
        </div>
      </div>
    </section>

    <section class="three on_white_header section-on">
      <div class="wrapper flex">
        <div class="three_inner">
          <div class="content_name wow fadeIn">
              <?=$links[5]?>
          </div>
          <div class="content_text">
            <p class="wow fadeIn">
                <?=$links[6]?>
            </p>
             <p class="wow fadeIn">
                 <?=$links[7]?>
            </p>
          </div>
          <a class="button btn-arrow wow fadeIn" href="<?=$LC?>perevagy/">
            <span><?php _e('home-Посмотреть преимущества','smart-terracotta');?></span>
            <svg width="36" height="16"><use xlink:href="#arrow"></use></svg>
          </a>
        </div>
        <div class="cat">
          <div class="cats_item cat1"></div>
          <div class="cats_item cat2"></div>
          <div class="cats_item cat3"></div>
          <div class="cats_item cat4"></div>
          <div class="cats_item cat5"></div>
          <div class="cats_item cat6"></div>
          <div class="cats_item cat7"></div>
          <div class="cats_item cat8"></div>
        </div>
      </div>
    </section>
    <section  class="four section-on">
      <div class="four__outer"></div>

      <div class="wrapper flex">
        <div class="four_img wow fadeIn">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/main/flat.png" alt="">
        </div>
        <div class="four_inner">
          <div class="content_name wow fadeIn">
            <?=$links[8];?>
          </div>
          <div class="content_text wow fadeIn">
            <div class="vertical_text">
              <?=$links[9]?>
            </div>
              <?=$links[10]?>
          </div>
          <a class="button btn-arrow wow fadeIn" href="<?=$LC?>filtr-vyboru-kvartyr/">
            <span><?php _e('home-Выбрать квартиру','smart-terracotta');?></span>
            <svg width="24" height="12"><use xlink:href="#key"></use></svg>
          </a>
        </div>
      </div>
    </section>
    <section class="five section-on">
      <div class="wrapper">
        <div class="content_name wow fadeIn">
          <?=$links[11]?>
        </div>
        <div class="five_carousel wow fadeIn">
          <div class="five_item">
            <svg><use xlink:href="#houses"></use></svg>
            <div class="content_text">
              <?=$links[12]?>
            </div>
          </div>
          <div class="five_item">
            <svg><use xlink:href="#window"></use></svg>
            <div class="content_text">
              <?=$links[13]?>
            </div>
          </div>
          <div class="five_item">
            <svg><use xlink:href="#lift"></use></svg>
            <div class="content_text">
              <?=$links[14]?>
            </div>
          </div>
          <div class="five_item">
            <svg><use xlink:href="#crane"></use></svg>
            <div class="content_text">
              <?=$links[15]?>
            </div>
          </div>
        <div class="five_item">
            <svg><use xlink:href="#brickwall"></use></svg>
            <div class="content_text">
              <?=$links[16]?>
            </div>
          </div>
          <div class="five_item">
            <svg><use xlink:href="#wall"></use></svg>
            <div class="content_text">
              <?=$links[17];?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="red2" class="six section-on">
      <div class="wrapper">
        <div class="six_name flex">
          <div class="content_name wow fadeIn">
            <?=$links[18]?>
          </div>
          <a class="button btn-arrow wow fadeInRight" href="<?=$LC?>news/">
            <span><?php _e('home-Смотреть все новости','smart-terracotta');?></span>
            <svg width="36" height="16"><use xlink:href="#arrow"></use></svg>
          </a>

        </div>
        <div class="six_inner flex">
            <?php
            $ReaNews = LoadingNews(NewsOnPage, 0);
            if (count($ReaNews['ReaNews'])) {
                $i = 0;
                $newsRev = array_reverse($ReaNews['ReaNews']);
                foreach ($newsRev as $k => $post) {

                    $img = get_the_post_thumbnail_url($post->ID);
                    if (!$img) {
                        $img = get_template_directory_uri() . "/assets/img/defolt.png";
                    }

                    $date = explode(' ', $post->post_date);
                    $new_date = explode('-', $date[0]);
                    $cor_date = $new_date[2] . '/' . $new_date[1] . '/' .$new_date[0];
                    $time_date = explode(':',$date[1]);
                    $title = get_the_title();
                    $rest = substr($title, 0, 87);

                    ?>
                    <div class="news_item  wow fadeIn">
                        <div class="news_date">
                            <span><? echo $cor_date; ?></span> <span class="long_line"></span> <span><?=$time_date[0].':'.$time_date[1]?></span>
                        </div>
                        <div class="news_name">
                            <?php echo $post->post_title; ?>
                        </div>
                        <div class="news_inner">
                            <div class="news_img">
                                <img src="<?=$img;?>" alt="Новость">
                            </div>
                            <!-- <div class="news_descr flex"> -->
                                <div class="content_text">
                                    <?=$post->post_excerpt?>
                                </div>
                                <a class="button btn-arrow" href="<?=$LC?>news/<?php echo $post->post_name; ?>">
                                    <span><?php _e('home-Читать новость','smart-terracotta');?></span>
                                    <svg width="36" height="16"><use xlink:href="#arrow"></use></svg>
                                </a>
                            <!-- </div> -->
                        </div>
                    </div>
                    <?php
                    $i++;
                    if($i>2){
                        break;
                    }
                }
            }
            ?>
        </div>
      </div>
    </section>
    <section class="seven section-on">
      <div id="map" class=""></div>
    </section>


  </div> <!-- end main -->

<?php get_footer();?>
