<!DOCTYPE html>
<html>
<head>
    <title> EuroSanteh.by </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
        $ph->include_system_css('/themes/bootstrap.min.css')
        ->include_system_css('glyphicon.css')
        ->include_system_js_lib('jquery-2.1.4.min.js')
        ->include_system_js_lib('bootstrap-3.3.5-dist/bootstrap.min.js')

        /*Header*/
//        ->include_css('header/header.css')
        ->include_css('header/bootstrap-theme.css')

        /*Footer*/
//        ->include_css('footer/footer.css')


        /*index*/
        ->include_css('index.css')
        ->include_css('logo.css')

        /*slider*/
        ->include_css('slider/flexslider.css')
        ->include_css('slider/slider.css')

        ->include_system_js_lib('slider/jquery.easing.1.3.js')
        ->include_system_js_lib('slider/jquery.fancybox.pack.js')
        ->include_system_js_lib('slider/jquery.fancybox-media.js')
        ->include_system_js_lib('slider/jquery.flexslider.js')
        ->include_system_js_lib('slider/animate.js')
        ->include_system_js_lib('slider/custom.js');

        /*Special Offers*/
 //       ->include_css('special-offer-carousel.css')
 //       ->include_css('product-list.css')
    ?>
</head>

<body>

<?php $this->renderTemplate('header') ?>

<section id="featured">
    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                <div id="main-slider" class="flexslider">
                    <ul class="slides">

                        <li>
                            <?php $ph->image('slider/2.jpg')?>
                            <div class="flex-caption">
                                <h3>Смесители</h3>
                                <p>Широкий выбор смесителей различных производителей</p>
                                <?php $ph->link('Подробнее', '/managment',['class' => 'btn btn-theme']) ?>
                            </div>
                        </li>
                        <li>
                            <?php $ph->image('slider/1.jpg')?>
                            <div class="flex-caption">
                                <h3> Ванны </h3>
                                <p>Широкий выбор ванн различных производителей</p>
                                <?php $ph->link('Подробнее', '/contacts',['class' => 'btn btn-theme']) ?>
                            </div>
                        </li>
                        <li>
                            <?php $ph->image('slider/3.jpg')?>
                            <div class="flex-caption">
                                <h3>Контакты</h3>
                                <p>Подробнее о нахождении магазинов</p>
                                <?php $ph->link('Подробнее', '/about',['class' => 'btn btn-theme']) ?>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- end slider -->
            </div>
        </div>
    </div>
</section>

<?php $this->renderTemplate('children-catalog') ?>

<br>



<h1 style="text-align: center">Мы сотрудничаем </h1>
<div class="container">

</div>

<section class="section section--medium">
    <div class="container">
        <ul class="logo-bar">
            <li>
                <?php $ph->image('brands/ape.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/AquaTerra.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/armakan.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/Cersanit.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/ekopastik.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/Grohe_logo.gif', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/ledeme.gif', ['style' => 'height="52px; width="140px'])?>
            </li>
            <li>
                <?php $ph->image('brands/Logo_Hansa_230.jpg', ['style' => 'height="52px; width="140px'])?>
            </li>

        </ul>
    </div>
</section>

<br>
<h1 style="text-align: center">Расположение </h1>
<div class="container">
    <hr>
</div>

<div style="width: 100%; height: 370px;outline: 0; border: 0;" id="map">
    <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=VaEaTlnLnOvBS2ocyKqbnGEELoOh_4rW&width=100%&height=350&lang=ru_RU&sourceType=constructor"></script>
</div>

<?php $this->renderTemplate('footer') ?>

</body>
</html>