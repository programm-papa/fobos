<?php
/*
<<<<<<< HEAD
Template Name: Главная страница
=======
Template Name: Главной страницы
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
Template Post Type: page
*/

get_header();
<<<<<<< HEAD
=======

print_r(carbon_get_theme_options('rent_phone'));
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
?>
   <main>
        <div class="wrapper">
            <div class="partners-block">
<<<<<<< HEAD
                <div class="block-title" id="block1">
=======
                <div class="block-title">
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">партнеры</div>
                </div>
                <div class="partners-block__cards">
<<<<<<< HEAD
                <?php
                    $partners =carbon_get_theme_option('partner');
                        foreach ($partners as $partner) {
                            ?>
                    <div class="partner-card">
                        <div class="partner-card__title"><?=$partner['partner_name'];?></div>
                        <div class="data">
                        <?php
                             foreach ($partner['partner_contacts'] as $partner_contacts) {
                                 if($partner_contacts['contact_type']=='tel_m') {
                                    $phone_link = str_replace(array('(',')',' ','-','+'),'',$partner_contacts['mob_phone_contact']);
                                    ?>
                                    <a href="tel:<?=$phone_link?>" class="data__item">
                                        <div class="text"><?=$partner_contacts['mob_phone_contact']?></div>
                                    </a>
                                    <?php
                                 }  elseif($partner_contacts['contact_type']=='link') {?>
                                    <a href="<?=$partner_contacts['site_link_url']?>" target="_blank" class="data__item">
                                        <div class="text"><?=$partner_contacts['site_link_name']?></div>
                                    </a>
                                    <?php
                                 }
                                  elseif($partner_contacts['contact_type']=='tel') {
                                    $phone_link = str_replace(array('(',')',' ','-','+'),'',$partner_contacts['phone_contact']);
                                    ?>
                                
                                    <a href="tel:78162<?=$phone_link?>" class="data__item">
                                        <div class="text"><?=$partner_contacts['phone_contact']?></div>
                                    </a>
                                    <?php
                                 }
                                ?>

                        <?php
                        }
                        ?>
                        </div>
                    </div>
                            <?php
                        }
                ?>
                </div>
            </div>
            <div class="ice-rink-block">
                <div class="block-title" id="block2">
=======
                    <div class="partner-card">
                        <div class="partner-card__title">Кафе-караоке Аленушка</div>
                        <div class="data">
                            <a href="" class="data__item">
                                <div class="text">+7 960 201-11-27</div>
                            </a>
                            <a href="" class="data__item">
                                <div class="text">obuv53.ru</div>
                            </a>
                            <a href="" class="data__item">
                                <div class="text">+7 960 201-11-27</div>
                            </a>
                        </div>
                    </div>
                    <div class="partner-card">
                        <div class="partner-card__title">Кафе-караоке Аленушка</div>
                    </div>
                    <div class="partner-card">
                        <div class="partner-card__title">Кафе-караоке Аленушка</div>
                    </div>
                </div>
            </div>
            <div class="ice-rink-block">
                <div class="block-title">
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">каток</div>
                </div>
                <div class="ice-rink-translation">
                    <div class="description">
                        Посмотреть видео с камеры, которая смотрит на каток
                    </div>
<<<<<<< HEAD
                    <a href="http://ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=d787aafb36e9479c809c3ac2da5deb2a&autoplay=1&archive=1" target="_blank" class="translation-btn">
                        <div class="text">Трансляция с катка</div>
                    </a>
                </div>
                <a class="ice-rink-phone" href="tel:78162<?php 
                 $phone = str_replace(array('(',')',' ','-','+'),'',carbon_get_theme_option('ice_rink_phone'));
                echo $phone;
                ?>">
                    <?=carbon_get_theme_option('ice_rink_phone');?>
                </a>
=======
                    <a href="" class="translation-btn">
                        <div class="text">Трансляция с катка</div>
                    </a>
                </div>
                <div class="ice-rink-phone">
                    90-30-67
                </div>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                <div class="ice-rink-information">
                    <div class="column operating-mode">
                        <div class="column__title">Режим работы:</div>
                        <div class="item">
                            <div class="item__title">
                                <div class="circle"></div>
                                <div class="title">Каток</div>
                            </div>
                            <div class="item__content">
                                <div class="element">
                                    <div class="row">
<<<<<<< HEAD
                                        <div class="element__title"><?=carbon_get_theme_option('ice_rink_work_day');?></div>
                                        <div class="element__value"><?=carbon_get_theme_option('ice_rink_work_time');?></div>
                                    </div>
                                    <?php 
                                        if(!empty(carbon_get_theme_option('ice_rink_help_text'))) {
                                    ?>
                                    <div class="element__description"><?=carbon_get_theme_option('ice_rink_help_text');?></div>
                                    <?php
                                        }
                                    ?>
=======
                                        <div class="element__title">пн-вс</div>
                                        <div class="element__value">10.00 - 24.00</div>
                                    </div>
                                    <div class="element__description">(без перерывов и выходных)</div>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                                <div class="circle"></div>
                                <div class="title">Заточка</div>
                            </div>
                            <div class="item__content">
<<<<<<< HEAD
                                <?php 
                                 $sharpening_skates_items =carbon_get_theme_option('sharpening_skates');
                                 foreach ($sharpening_skates_items as $sharpening_skates_item) {?>
                                <div class="element">
                                    <div class="row">
                                        <div class="element__title"><?=$sharpening_skates_item['sharpening_skates_work_day']?></div>
                                        <div class="element__value"><?=$sharpening_skates_item['sharpening_skates_work_time']?></div>
                                    </div>
                                    <?php 
                                        if(!empty($sharpening_skates_item['sharpening_skates_help_text'])) {
                                    ?>
                                    <div class="element__description"><?=$sharpening_skates_item['sharpening_skates_help_text']?></div>
                                    <?php
                                        }
                                    ?>
                                </div>
                                <?php
                                 }
                                ?>
                                
=======
                                <div class="element">
                                    <div class="row">
                                        <div class="element__title">пн-вс</div>
                                        <div class="element__value">10.00 - 24.00</div>
                                    </div>
                                    <div class="element__description">(без перерывов и выходных)</div>
                                </div>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                            </div>
                        </div>
                    </div>
                    <div class="column price-list">
                        <div class="column__title">Прейскурант:</div>
<<<<<<< HEAD
                        <div class="item">
                            <div class="item__title">
                                <div class="circle"></div>
                                <div class="title">Билет</div>
                            </div>
                            <div class="item__content">
                                <?php 
                                    $ice_rink_price_items =carbon_get_theme_option('ice_rink_price');
                                    foreach ($ice_rink_price_items as $ice_rink_price_item) {?>
                                    <div class="element price">
                                        <div class="row">
                                            <div class="element__title"><?= $ice_rink_price_item['ice_rink_price_year'];?></div>
                                            <div class="element__value"><?= $ice_rink_price_item['ice_rink_price_value'];?></div>
                                        </div>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                                <div class="circle"></div>
                                <div class="title">Прокат</div>
                            </div>
                            <div class="item__content">
                                <?php 
                                    $rental_price_items = carbon_get_theme_option('rental_price');
                                    foreach ($rental_price_items as $rental_price_item) {?>
                                    <div class="element price">
                                        <div class="row">
                                            <div class="element__title"><?= $rental_price_item['rental_price_time'];?></div>
                                            <div class="element__value"><?= $rental_price_item['rental_price_value'];?></div>
                                        </div>
                                        <?php 
                                            if(!empty($rental_price_item['rental_price_help_text'])) {
                                        ?>
                                        <div class="element__description"><?=$rental_price_item['rental_price_help_text']?></div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                                <div class="circle"></div>
                                <div class="title">Заточка</div>
                            </div>
                            <div class="item__content">
                                    <div class="element price">
                                        <div class="row">
                                            <div class="element__title"><?= carbon_get_theme_option('sharpening_skates_price');?></div>
                                        </div>
                                    </div>
                            </div>
                        </div>
=======
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                    </div>
                </div>
            </div>
            <div class="rent-block">
<<<<<<< HEAD
                <div class="block-title"  id="block3">
=======
                <div class="block-title">
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">аренда</div>
                </div>
                <div class="block-subtitle">БЦ Фобос предлагает аренду площади:</div>
<<<<<<< HEAD
                <a class="rent-phone" href="tel:78162<?php 
                 $phone = str_replace(array('(',')',' ','-','+'),'',carbon_get_theme_option('rent_phone'));
                echo $phone;
                ?>">
                    <div class="text"><?=carbon_get_theme_option('rent_phone');?></div>
                </a>
                <div class="rent-block__description">
                    <?=carbon_get_theme_option('rent_phone_description');?>
                </div>
            </div>
            <div class="contacts-block">
                <div class="block-title"  id="block4">
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">контакты</div>
                </div>
                <div class="content">
                    <img src="<?php print_r(get_template_directory_uri());?>/image/fobos.png" alt="Фобос">
=======
                <a class="rent-phone">
                    <div class="text">90-00-18</div>
                </a>
                <div class="rent-block__description">
                    Для справок по аренде звонить в рабочее время ежедневно с 9:00–19:00
                </div>
            </div>
            <div class="contacts-block">
                <div class="block-title">
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">аренда</div>
                </div>
                <div class="content">
                    <img src="./image/fobos.png" alt="Фобос">
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                    <div class="contact-items">
                        <div class="item">
                            <div class="contact-item__name">
                                <div class="circle"></div>
                                <div class="name">Каток</div>
                            </div>
<<<<<<< HEAD
                            <a class="link" href="tel:78162<?php 
                            $phone = str_replace(array('(',')',' ','-','+'),'',carbon_get_theme_option('ice_rink_phone'));
                            echo $phone;
                            ?>"><?=carbon_get_theme_option('ice_rink_phone')?></a>
=======
                            <a href="" class="link">90-30-67</a>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                        </div>
                        <div class="item">
                            <div class="contact-item__name">
                                <div class="circle"></div>
                                <div class="name">Аренда</div>
                            </div>
<<<<<<< HEAD
                            <a  href="tel:78162<?php 
                            $phone = str_replace(array('(',')',' ','-','+'),'',carbon_get_theme_option('rent_phone'));
                            echo $phone;
                            ?>" class="link"><?=carbon_get_theme_option('rent_phone')?></a>
=======
                            <a href="" class="link">90-30-67</a>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                        </div>
                        <div class="item">
                            <div class="contact-item__name">
                                <div class="circle"></div>
<<<<<<< HEAD
                                <div class="name"><?=carbon_get_theme_option('address')?></div>
=======
                                <div class="name">Великий Новгород, ул.Народная, 8А</div>
>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-block">
<<<<<<< HEAD
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Afef9bff471884d0659158277bc6d1f3597cc007c0f02eabda6f75191f2a8b254&amp;source=constructor" width="1160" height="396" frameborder="0"></iframe>
=======

>>>>>>> b2fa3ec05221c9c6e5fdcbea03c13ad9cf937d85
            </div>
        </div>
    </main>
<?php
get_footer();
