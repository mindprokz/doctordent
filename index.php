<?php get_header(); ?>
    <a name="top"></a>
<div id="header" class="normal-head">
    <div class="content">
        <header class="clear">
            <nav>
                <a href="#top" class="attr-menus">О клинике</a>
                <a href="#ScrollServ" class="attr-menus">Услуги</a>
                <a href="#ScrollSpec" class="attr-menus">Врачи</a>
                <a href="#ScrollSert" class="attr-menus">Сертификаты</a>
                <a href="#ScrollReview" class="attr-menus">Отзывы</a>
                <a href="#ScrollContact" class="attr-menus">Контакты</a>
            </nav>
            <div id="call">
                <img id="trubka" src="http://doctor-dent.kz/wp-content/uploads/2015/07/call.png" class="animRotate">
                <div id="call-numbers">
                    <span id="number"> 8 7172 2 777 00</span><br>
                    <a style="cursor: pointer;" id="attr-call">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/arrow_phone.png" class="img__number__arrow">
                    Выбрать адрес клиники </a>
                </div>
                <div id="selector__number" class="contact__block contact__block__noactive">
                    <div class="contact__elem">
                        ул.Тyркістан, д.8/2, ВП-1<br>
                        Тел.: (7172) <span class="bold">277-700</span>
                    </div>
                    <div class="contact__elem">
                        пр.Кабанбай батыра, д.16, ВП-8<br>
                        Тел.: (7212) <span class="bold">999-800</span>
                    </div>
                    <div class="contact__elem">
                       пр.Победы, д.21, оф.2<br>
                        Тел.: (7212) <span class="bold">44-50-60</span> 
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<div id="logotype-block" class="clear">
    <div class="content clear">
        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/logo.png" style="padding-left:10px;">
        <h1 class="logotype-block-h1">— Сеть <span class="bold">стоматологических</span> клиник</h1>
    </div>
</div>
<div id="form">
    <div class="content">
        <div id="video">
            <h3 id="h3-first" class="h3-first">Посмотрите <span class="bold">видео</span> </h3>
            <h3 style="width:375px" id="h3-second" class="h3-second"> о нашей клинике</h3>
            <div id="movie" class="video">
            <!-- <iframe width="407" height="267" src="https://www.youtube.com/embed/31nk7mV-qOU" frameborder="0" allowfullscreen></iframe> -->
            <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/video.jpg">
            <a id="video-youtube" class="various fancybox.iframe" href="http://www.youtube.com/embed/31nk7mV-qOU?autoplay=1"></a>
            </div>
        </div>
        <div id="video2">
            <h3 class="h3-first">Обратитесь к <span class="bold">нам</span> </h3>
            <h3 style="width:375px;height: 86px;padding-top: 21px;" class="h3-second"> и вы получите решение</h3>
            <div class="movie__play">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/YouTube2.png">
                <a class="video__youtube various fancybox.iframe" href="http://www.youtube.com/embed/4WyOPxqq8Hw?autoplay=1" ></a>
            </div>
        </div>
        <div class="static">
            <div class="numbers">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/11.png" style="float: left; margin-top:-20px;">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/line.png" class="rigth-ligth">
            </div>
            <div class="numbers">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/427.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/line.png" class="rigth-ligth">
            </div>
            <div class="numbers">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/25.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/line.png" class="rigth-ligth">
            </div>
            <div class="numbers">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/1.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/line.png" class="rigth-ligth">
            </div>
            <div class="numbers">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/Untitled-1.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/line.png" class="rigth-ligth">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/100.png" style="vertical-align: top;" alt="">
            </div>
        </div>
        <div id="form-content">
            <div class="new__form">
                <h4>Оставьте заявку на сайте и получите</h4>
                <h2>50% скидку</h2>
                <h3>на первичный осмотр</h3>                
            </div>
            <div class="form__top">
                <?php
                    $args = array(
                        'type' => 'post', //Типы посты
                        'posts_per_page' => 1, //Постов на одной странице
                        'category_name' => 'form',); //Категория постов
                    $lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
                    if( $lastBlog->have_posts() ):
                        while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                        <?php get_template_part('content-form',get_post_format()); ?>
                        <?php endwhile;  //Вывод всех подходящих постов
                    endif; 
                    wp_reset_postdata();
                    ?>
            </div>
            <header>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
                <h3>Акции</h3>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>   
            </header>
            <div class="carousel__top" style="">
                <div id="left__arrow__top__carousel">
                    <div class="arrow__element"></div>
                </div>
                <div id="right__top__carousel">
                    <div class="arrow__element"></div>
                </div>
                <div id="content__top__carousel">
                    <div class="wrapper__carousel" style="left:0px;" data-slide="0">
                        <?php
                            $args = array(
                                'type' => 'post', //Типы посты
                                'posts_per_page' => 6, //Постов на одной странице
                                'category_name' => 'stock',); //Категория постов
                            $lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
                            if( $lastBlog->have_posts() ):
                                while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                                <?php get_template_part('content-topslider',get_post_format()); ?>
                                <?php endwhile;  //Вывод всех подходящих постов
                            endif; 
                            wp_reset_postdata();
                            ?>                   
                    </div>
                </div>
                <script>
                    document.querySelector('#left__arrow__top__carousel').onclick = function (){
                        if (document.querySelector('.wrapper__carousel').getAttribute('data-slide') != 0){
                            document.querySelector('.wrapper__carousel').setAttribute('data-slide', document.querySelector('.wrapper__carousel').getAttribute('data-slide') - 1);
                            document.querySelector('.wrapper__carousel').setAttribute('style','left:'+(-430 * document.querySelector('.wrapper__carousel').getAttribute('data-slide'))+'px;');
                        };
                    };
                    document.querySelector('#right__top__carousel').onclick = function (){
                        if (document.querySelector('.wrapper__carousel').getAttribute('data-slide') != (document.querySelectorAll('.carousel__element').length - 1) ){
                            document.querySelector('.wrapper__carousel').setAttribute('data-slide', +document.querySelector('.wrapper__carousel').getAttribute('data-slide') + 1);
                            document.querySelector('.wrapper__carousel').setAttribute('style','left:'+(-430 * document.querySelector('.wrapper__carousel').getAttribute('data-slide'))+'px;');
                        };
                    };
                </script>
            </div>
        </div>
    </div>
</div>
<div id="services" class="clear">
    <a name="ScrollServ"></a>
    <div class="content">
           <div class="header-web">
                <div class="header-service"><h3>Услуги</h3></div>
                <div class="contact-block">
                    <div id="right-services">Для получения консультации Вам необходимо позвонить по 
                        <a href="#ScrollContact" class="bold">контактным телефонам</a> или
                        <a href="#top" class="bold">оставить заявку</a> на сайте
                    </div>
                </div>
            </div>
            <div class="web1">
                <div class="web-content1">
                    <div class="info"></div>
                    <div class="info-content">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover">
                        <div class="text">
                            — Профилактика заболеваний полости рта<br>
                            — Лечение кариеса<br>
                            — Художественная реставрация зубов<br>
                            — Отбеливание
                        </div>
                    </div>
                </div>
                <div class="web-content2">
                    <div class="info"></div>
                    <div class="info-content">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover">
                        <div class="text">
                            — Удаление зубного камня с помощью ультразвукового аппарата<br>
                            — Лечение десен аппаратом VECTOR PARO <br>
                            — Лечение стоматита<br>
                        </div>
                    </div>                    
                </div>
                <div class="web-content2 web-content-2-2">
                    <div class="info"></div>
                    <div class="info-content">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover">
                        <div class="text">
                            — Металлокерамические, Безметалловые, Цирконьевые коронки<br>
                            — Коронки на имлпант<br>
                            — Люминиры<br>
                            — Съемный протез Biodentaplast
                        </div>
                    </div>                    
                </div>
                <div class="web-content3">
                    <div class="info"></div>
                    <div class="info-content2">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover2">
                        <div class="text">
                            — Установка имплантов Израиль<br>
                            — Установка имплантов США<br>
                            — Установка импланотв Ю.Корея<br>
                            — Установка имплантов Германия
                        </div>
                    </div>
                </div>
            </div>
            <div class="web2">
                <p class="web-p">Стоматология <span class="para">Doctor Dent</span> оказывает<br>весь спектр стоматологических услуг</p>
            </div>
            <div class="web3">
                <div class="web-content4">
                    <div class="info"></div>
                    <div class="info-content">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover">
                        <div class="text">
                            — Брекеты системы Damon<br>
                            — Самолигирующие брекеты<br>
                            — Лингвальные, Сапфировые, Керамические<br>
                            — Металличенские, Пластиковые
                        </div>
                    </div>
                </div>
                <div class="web-content5">
                    <div class="info"></div>
                    <div class="info-content">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover">
                        <div class="text">
                            — Лечение и удаление молочных зубов<br>
                            — Лечение постоянных зубов у детей<br>
                            — Профилактика кариеса<br>
                            — Сохранения места при раннем удалении молочного зуба
                        </div>
                    </div>                    
                </div>
                <div class="web-content6">
                    <div class="info"></div>
                    <div class="info-content2">
                        <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/info-hover.png" class="info-hover2">
                        <div class="text">
                            100% гарантия чистоты и стерилизации инструментария.<br>
                            Мы единственная клиника в РК, где в штате<br> 
                            есть свой врач санэпидемиолог
                        </div>
                    </div>
                </div>
            </div>
            
    </div>
</div>
<div id="alfa">
    <div class="content">
        <h3 class="alfa__header">Условия предоставления рассрочки и кредита через АО ДБ «Альфа-Банк»</h3>
        <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/table.png" alt="">
    </div>
</div>
<div id="insurance">
    <div class="content">
      <header>
          <h3 class="insurance-head">Клиника <span class="bold">«Doctor Dent»</span> обслуживает пациентов по медицинским страховым картам ведущих страховых страны</h3>
      </header>
      <div class="insurence-body1">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse1.png">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse2.png">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse3.png">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse4.png">
      </div>
      <div class="insurence-body2">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse5.png">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse6.png">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/insuranse7.png">
      </div>
      <div class="insurence-body2">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/caa.png">
          <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/kazkom.png">
      </div>  
    </div>
</div>
<div class="main-form">
    <div class="content">
        <header>
            <h3>Записаться на <span class="bold">бесплатную</span> консультацию</h3>
        </header>
        <div class="form">
                <?php
                    $args = array(
                        'type' => 'post', //Типы посты
                        'posts_per_page' => 1, //Постов на одной странице
                        'category_name' => 'form',); //Категория постов
                    $lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
                    if( $lastBlog->have_posts() ):
                        while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
    	                <?php get_template_part('content-form',get_post_format()); ?>
    	                <?php endwhile;  //Вывод всех подходящих постов
                    endif; 
                    wp_reset_postdata();
                    ?>
            </div>
    </div>
</div>
<div id="Specialist">
    <div id="spec-border-radius">
        <div class="content">
            <header>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
                <h3>Наши специалисты</h3>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
            </header>
            <a name="ScrollSpec"></a>
            <div class="specialist-body">
                <h3>Специалисты клиники  <span class="bold green">«Doctor Dent»</span> имеют богатый практический опыт</h3>
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/354.png" class="spec-img">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/1category.png">
                <p class="first">Функционирует система постоянного обучения и повышения квалификации Это гарантирует Вам безупречное качество услуг и уверенность в Вашей улыбке!  </p>
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/4vak3.png">
                <p class="second"><span class="green big">"</span>Красивая улыбка – самый простой способ изменить свою внешность.<span class="green big">"</span><br> </p>
                <h4>Мухатаев.А.Д.</h4>
            </div>
        </div>
    </div>
</div> 
<div id="sert">
    <div class="content">
       <a name="ScrollSert"></a>
        <header>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
                <h3>Сертификаты</h3>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
        </header>
        <div class="sert-inline">
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/Почта.jpg" class="sert-paper">
            </div>
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/Еримбетова-Г.Б.-2.jpg" class="sert-paper">
            </div>
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/Еримбетова-4.jpg" class="sert-paper">
            </div>
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/020.jpg" class="sert-paper">
            </div>
        </div>
        <div class="sert-inline last__sert">
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/019.jpg" class="sert-paper">
            </div>
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/012.jpg" class="sert-paper">
            </div>
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/009.jpg" class="sert-paper">
            </div>
            <div class="sert-content">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/Rama.png">
                <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/004.jpg" class="sert-paper">
            </div>
        </div>
        <img src="http://doctor-dent.kz/wp-content/uploads/2015/09/big_sert.png" alt="" style="margin-bottom: 50px;">
    </div>
</div>
<div class="main-form">
    <div class="content">
        <header>
            <h3>Записаться на приём к <span class="bold">специалисту</span></h3>
        </header>
        <div class="form">
                <?php
                    $args = array(
                        'type' => 'post', //Типы посты
                        'posts_per_page' => 1, //Постов на одной странице
                        'category_name' => 'form',); //Категория постов
                    $lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
                    if( $lastBlog->have_posts() ):
                        while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
    	                <?php get_template_part('content-form',get_post_format()); ?>
    	                <?php endwhile;  //Вывод всех подходящих постов
                    endif; 
                    wp_reset_postdata();
                    ?>
            </div>
    </div>
</div>
<div id="equip">
    <div id="border-radius-equip">
        <div class="content">
            <header>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/white-line.png">
                </div>
                <h3>Технологии</h3>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/white-line.png">
                </div>
            </header>
            <h3 class="name bold">Наименование:</h3>
            <div class="arrow left"><img src="http://doctor-dent.kz/wp-content/uploads/2015/07/arrow-norm.png" id="leftA"></div>
            <div class="arrow right"><img src="http://doctor-dent.kz/wp-content/uploads/2015/07/arrow-norm.png" id="rightA"></div>
            <div class="wrap-carousel">
                <div id="Carousel" class="carousel">
                    <?php
                    $args = array(
                        'type' => 'post', //Типы посты
                        'posts_per_page' => 5, //Постов на одной странице
                        'category_name' => 'carousel',); //Категория постов
                    $lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
                    if( $lastBlog->have_posts() ):
                        while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
    	                <?php get_template_part('content-carousel',get_post_format()); ?>
    	                <?php endwhile;  //Вывод всех подходящих постов
                    endif; 
                    wp_reset_postdata();
                    ?>    
                </div>
            </div>
        </div>
    </div>
</div>
<div id="reviews">
   <a name="ScrollReview" ></a>
    <div class="content">
        <header>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
                <h3>Отзывы</h3>
                <div class="img">
                    <img src="http://doctor-dent.kz/wp-content/uploads/2015/07/specialist-line.png">
                </div>
        </header>
        <div class="reviews-main-block clear">
            <div class="review-block">
                <h3 style="font-size: 18pt;text-align: center;padding-bottom: 15px;">Жанна Аубакирова</h3>
                <iframe width="460" height="315" src="https://www.youtube.com/embed/VtDWNhJIBWg" frameborder="0" allowfullscreen=""></iframe>
        </div>
            <div class="review-block">
                <h3 style="font-size: 18pt;text-align: center;padding-bottom: 15px;">Нина Моисеева</h3>
                <iframe width="460" height="315" src="https://www.youtube.com/embed/qCzlQ04zwKU" frameborder="0" allowfullscreen=""></iframe>
        </div>
        </div>
        <div class="reviews-main-block clear">
            <div class="review-block">
                <h3 style="font-size: 18pt;text-align: center;padding-bottom: 15px;">Салтанат</h3>
                <iframe width="460" height="315" src="https://www.youtube.com/embed/2OheqF1vQPE" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <div class="review-block">
                <h3 style="font-size: 18pt;text-align: center;padding-bottom: 15px;">Жанакаева Эльмира </h3>
                <iframe width="460" height="315" src="https://www.youtube.com/embed/vXq_u4pz4WI" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div> 
        <div class="reviews-main-block clear">
            <div class="review-block">
                <h3 style="font-size: 18pt;text-align: center;padding-bottom: 15px;">Кузгибекова Сауле</h3>
                <iframe width="460" height="315" src="https://www.youtube.com/embed/kzWSQkPwuNk" frameborder="0" allowfullscreen=""></iframe>
            </div>
            <div class="review-block">
                <h3 style="font-size: 18pt;text-align: center;padding-bottom: 15px;">Рейтаров Олег</h3>
                <iframe width="460" height="315" src="https://www.youtube.com/embed/Wsjxia3bR9s" frameborder="0" allowfullscreen=""></iframe>
            </div>
        </div>
        <h3>Оставьте свой <span id="modal_form_span" class="blue bold">отзыв</span> или <span id="modal_form_span2" class="blue bold">пожелание</span> </h3>
    </div>
</div>
<div id="map">
   <a name="ScrollContact"></a>
    <iframe id="google-map" src="https://www.google.com/maps/d/embed?mid=zQBYb7i-0ENA.k11KbPjY3f6U" width="640" height="480"></iframe>
    <div class="content">
        <div class="contact">
            <h3 class="bold head">Контакты</h3>
            <ul class="border">
                <li class="bold">Казахстан, г. Астана, пр.Кабанбай батыра, д.16,оф.8 </li>
                <li>8 (7172) 999-800</li>
                <li>8 (7172) 240-656</li>
                <li>8 (7172) 240-653</li>
                <li>Время работы:</li>
                <li>пн-пт 8.30 до 23.00</li>
                <li>сб-вс с 9.00-23.00</li>
            </ul>
            <ul class="border">
                <li class="bold">Казахстан, г. Астана, пр.Победы, д.21 </li>
                <li>8 (7172) 445-060</li>
                <li>8 (7172) 445-070</li>
                <li>8 (7172) 445-080</li>
            </ul>
            <ul class="border">
                <li class="bold">Казахстан, г. Астана, ул.Туркiстан, д.8/2, оф.1</li>
                <li>8 (7172) 277-700</li>
                <li>8 (7172) 277-900</li>
                <li></li>
            </ul>
        </div>
    </div>
</div>
<div id="more">
        <div class="content">
            <h3>Остались вопросы?</h3>
            <a id="manager" style="border-bottom: 1px dotted #178AC6;cursor:pointer;">Наш менеджер на них ответит</a>
        </div>
</div>
<footer>
    <div class="content clear">
        <a href="http://mindpro.kz"><img src="http://doctor-dent.kz/wp-content/uploads/2015/07/mindpro.png"></a>
        <h3> ТОО «Doctor-Dent» —  © 2015</h3>
    </div>
</footer>
    <div id="modal_video" class="modal1 Modal_invisible">
        <div class="content">
            <div class="Modal-top">
                <div id="close-movie" class="close"></div>
            </div>
            <div class="content">
                <iframe id="player_f" frameborder="0" allowfullscreen="1" title="YouTube video player" width="960" height="560" src="https://www.youtube.com/embed/31nk7mV-qOU?enablejsapi=1&amp;origin=http%3A%2F%2Fdoctor-dent.kz"></iframe>

                <script>
                    // 2. This code loads the IFrame Player API code asynchronously.
                    var tag = document.createElement('script');

                    tag.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag = document.getElementsByTagName('script')[0];
                    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

                    // 3. This function creates an <iframe> (and YouTube player)
                    //    after the API code downloads.
                    var player;
                    function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player_f', {
                            events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                            }
                        });
                    }

                    // 4. The API will call this function when the video player is ready.
                    function onPlayerReady(event) {
                    }

                    // 5. The API calls this function when the player's state changes.
                    //    The function indicates that when playing a video (state=1),
                    //    the player should play for six seconds and then stop.
                    var done = false;
                    function onPlayerStateChange(event) {
                    }
                    function stopVideo() {
                        player.stopVideo();
                    }
                    var close = document.querySelector('#close-movie');
                    var Youtube_movie = document.querySelector('.modal1'),
                        button_Youtube = document.querySelector('#video-youtube');
                    // button_Youtube.onclick = function () {
                    //     Youtube_movie.setAttribute('style','top:'+window.pageYOffset+'px')
                    //     Youtube_movie.setAttribute('class','modal1 Modal_visible');
                    //     document.body.style.overflow = 'hidden';
                    //     player.playVideo();
                    // }
                    close.onclick = function(){
                        Youtube_movie.setAttribute('class','modal1 Modal_invisible');
                        document.body.style.overflow = '';
                        player.stopVideo();
                    }
                </script>
            </div>
        </div>
    </div>
    <div id="modal_video2" class="modal1 Modal_invisible">
        <div class="content">
            <div class="Modal-top">
                <div id="close-movie2" class="close"></div>
            </div>
            <div class="content">
                <div id="player2"></div>

                <script>
                    // 2. This code loads the IFrame Player API code asynchronously.
                    var tag2 = document.createElement('script');

                    tag2.src = "https://www.youtube.com/iframe_api";
                    var firstScriptTag2 = document.getElementsByTagName('script')[1];
                    firstScriptTag2.parentNode.insertBefore(tag, firstScriptTag);

                    // 3. This function creates an <iframe> (and YouTube player)
                    //    after the API code downloads.
                    var player2;
                    function onYouTubeIframeAPIReady() {
                        player2 = new YT.Player('player2', {
                            height: '560',
                            width: '960',
                            videoId: '4WyOPxqq8Hw',
                            events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                            }
                        });
                    }

                    // 4. The API will call this function when the video player is ready.
                    function onPlayerReady(event) {
                    }

                    // 5. The API calls this function when the player's state changes.
                    //    The function indicates that when playing a video (state=1),
                    //    the player should play for six seconds and then stop.
                    var done2 = false;
                    function onPlayerStateChange(event) {
                    }
                    function stopVideo() {
                        player2.stopVideo();
                    }
                    var close2 = document.querySelector('#close-movie2');
                    var Youtube_movie2 = document.querySelectorAll('.modal1')[1],
                        button_Youtube2 = document.querySelector('.video__youtube');
                    // button_Youtube2.onclick = function () {
                    //     Youtube_movie2.setAttribute('style','top:'+window.pageYOffset+'px')
                    //     Youtube_movie2.setAttribute('class','modal1 Modal_visible');
                    //     player2.playVideo();
                    //     document.body.style.overflow = 'hidden';
                    // }
                    close2.onclick = function(){
                        player2.stopVideo();
                        Youtube_movie2.setAttribute('class','modal1 Modal_invisible');
                        document.body.style.overflow = '';
                    }
                </script>
            </div>
        </div>
    </div>
    <div id="form-modal" class="Modal_invisible">
            <div class="Modal-top">
                <div id="close-form" class="close"></div>
            </div>
            <div class="content">
                <div class="bluebox">
                    <div class="linebox">
                        <h3 class="modal-head">Напишите нам</h3>
                        <?php
                        $args = array(
                            'type' => 'post', //Типы посты
                            'posts_per_page' => 1, //Постов на одной странице
                            'category_name' => 'modal_form',); //Категория постов
                        $lastBlog = new WP_Query($args);//Запрос ко всем постам подходящим под массив #args
                        if( $lastBlog->have_posts() ):
                            while($lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                                <?php get_template_part('content-form',get_post_format()); ?>
                            <?php endwhile;  //Вывод всех подходящих постов
                        endif;
                        wp_reset_postdata();
                        ?>
                        <script>
                            var modal2 = document.querySelector('#form-modal');
                            var modal_span = document.querySelector('#modal_form_span');
                            var modal_span2 = document.querySelector('#modal_form_span2');
                            var manager = document.querySelector('#manager');

                                manager.onclick = function () {
                                    modal2.setAttribute('style','top:'+window.pageYOffset+'px');
                                    modal2.setAttribute('class','Modal_visible');
                                    document.body.style.overflow = 'hidden';

                            }

                        //  Скрипт для блока с номерами........................
                                document.querySelector('#attr-call').onmouseenter = function (){
                                    document.querySelector('#selector__number').setAttribute('class','contact__block contact__block__active');
                                };
                                document.querySelector('#selector__number').onmouseleave = function (){
                                    document.querySelector('#selector__number').setAttribute('class','contact__block contact__block__noactive');
                                };
                                document.querySelectorAll('.contact__elem')[0].onclick = function (){
                                    document.querySelector('#number').textContent = '8 7172 277-700';
                                    document.querySelector('#selector__number').setAttribute('class','contact__block contact__block__noactive');
                                };
                                document.querySelectorAll('.contact__elem')[1].onclick = function (){
                                    document.querySelector('#number').textContent = '8 7212 999-800';
                                    document.querySelector('#selector__number').setAttribute('class','contact__block contact__block__noactive');
                                };
                                document.querySelectorAll('.contact__elem')[2].onclick = function (){
                                    document.querySelector('#number').textContent = '8 7212 44-50-60';
                                    document.querySelector('#selector__number').setAttribute('class','contact__block contact__block__noactive');
                                };
                                modal_span.onclick = function () {
                                    modal2.setAttribute('style','top:'+window.pageYOffset+'px');
                                    modal2.setAttribute('class','Modal_visible');
                                    document.body.style.overflow = 'hidden';

                            }
                                modal_span2.onclick = function () {
                                modal2.setAttribute('style','top:'+window.pageYOffset+'px');
                                modal2.setAttribute('class','Modal_visible');
                                document.body.style.overflow = 'hidden';

                            }
                            var close_form = document.querySelector('#close-form')
                                close_form.onclick = function(){
                                modal2.setAttribute('class','Modal_invisible');
                                document.body.style.overflow = '';
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    <div id="carousel" class="Modal_invisible">
        <div class="Modal-top">
            <div id="close-carousel" class="close"></div>
        </div>
        <div class="content">
            <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/arrow.png" id="arrow-carousel">
            <img src="http://doctor-dent.kz/wp-content/uploads/2015/08/arrow.png" id="arrow-carousel2">
            <img id="carousel_img" width="720" height="500" src="http://doctor-dent.kz/wp-content/uploads/2015/08/Почта.jpg">
                    <script>
                        var carousel_imgs = document.querySelector('#carousel'),
                            close_carousel = document.querySelector('#close-carousel');
                        console.log(close_carousel);
                        close_carousel.onclick = function(){
                            carousel_imgs.setAttribute('class','Modal_invisible');
                            document.body.style.overflow = '';
                        };
                        var iter_img = 0,
                            array_img = [
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/Почта.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/Ж.Т.-плазмолифтинг.jpeg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/Еримбетова-Г.Б.-2.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/Еримбетова-6.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/Еримбетова-5.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/Еримбетова-4.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/020.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/019.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/018.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/016.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/012.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/009.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/008.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/007.jpg',
                                'http://doctor-dent.kz/wp-content/uploads/2015/08/004.jpg',
                        ];
                        var carousel_img = document.querySelector('#carousel_img');

                        var arrow_carousel = document.querySelector('#arrow-carousel');
                        arrow_carousel.onclick = function () {
                            if (iter_img > 0){
                                iter_img -= 1;
                                carousel_img.setAttribute('src',array_img[iter_img]);
                            }
                        };
                        var arrow_carousel2 = document.querySelector('#arrow-carousel2');
                        arrow_carousel2.onclick = function () {
                            if (iter_img < array_img.length-1){
                                iter_img += 1;
                                carousel_img.setAttribute('src',array_img[iter_img]);
                            }
                        };

                        var elements = document.querySelectorAll('.sert-paper');
                        for (var i = 0, len = elements.length; i < len; i++) {
                            elements[i].addEventListener("click", function () {
                                carousel_imgs.setAttribute('style','top:'+window.pageYOffset+'px');
                                carousel_imgs.setAttribute('class','Modal_visible');
                                document.body.style.overflow = 'hidden';
                            });
                        }
                    </script>
        </div>
    </div>
<!--   __________________________________
      |                                  |
      |   Created by Konstantine Online  |
      |__________________________________|
-->
<?php get_footer(); ?>