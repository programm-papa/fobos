<?php
/*
Template Name: Главной страницы
Template Post Type: page
*/

get_header();

print_r(carbon_get_theme_options('rent_phone'));
?>
   <main>
        <div class="wrapper">
            <div class="partners-block">
                <div class="block-title">
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">партнеры</div>
                </div>
                <div class="partners-block__cards">
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
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">каток</div>
                </div>
                <div class="ice-rink-translation">
                    <div class="description">
                        Посмотреть видео с камеры, которая смотрит на каток
                    </div>
                    <a href="" class="translation-btn">
                        <div class="text">Трансляция с катка</div>
                    </a>
                </div>
                <div class="ice-rink-phone">
                    90-30-67
                </div>
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
                                        <div class="element__title">пн-вс</div>
                                        <div class="element__value">10.00 - 24.00</div>
                                    </div>
                                    <div class="element__description">(без перерывов и выходных)</div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item__title">
                                <div class="circle"></div>
                                <div class="title">Заточка</div>
                            </div>
                            <div class="item__content">
                                <div class="element">
                                    <div class="row">
                                        <div class="element__title">пн-вс</div>
                                        <div class="element__value">10.00 - 24.00</div>
                                    </div>
                                    <div class="element__description">(без перерывов и выходных)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column price-list">
                        <div class="column__title">Прейскурант:</div>
                    </div>
                </div>
            </div>
            <div class="rent-block">
                <div class="block-title">
                    <div class="block-title__small-text">БЦ ФОБОС</div>
                    <div class="block-title__title">аренда</div>
                </div>
                <div class="block-subtitle">БЦ Фобос предлагает аренду площади:</div>
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
                    <div class="contact-items">
                        <div class="item">
                            <div class="contact-item__name">
                                <div class="circle"></div>
                                <div class="name">Каток</div>
                            </div>
                            <a href="" class="link">90-30-67</a>
                        </div>
                        <div class="item">
                            <div class="contact-item__name">
                                <div class="circle"></div>
                                <div class="name">Аренда</div>
                            </div>
                            <a href="" class="link">90-30-67</a>
                        </div>
                        <div class="item">
                            <div class="contact-item__name">
                                <div class="circle"></div>
                                <div class="name">Великий Новгород, ул.Народная, 8А</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-block">

            </div>
        </div>
    </main>
<?php
get_footer();
