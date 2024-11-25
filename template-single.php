<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main template-single">
    <?php

    $slide = [
        // "pc" => './assets/vdo/development-intercontinental6.mp4',
        "pc" => "./assets/img/design/template-single-mock-image1.jpg",
        "mobile" => "./assets/img/design/template-single-m-mock-image1.jpg"
    ];
    $hero_slide_images = array_fill(0, 15, $slide);


    include($root . "include/template-banner-slide.php");
    ?>

    <section class="template-single-content">
        <div class="wrapper wrapper-content">
            <div class="content-header">
                <p class="type fsw-subtitle2 c-gray weight-regular">Credit Card Promotion</p>
                <div class="buttons">
                    <?php
                    include($root . "include/element-add-to-calendar.php");
                    ?>
                    <?php
                    include($root . "include/element-share.php");
                    ?>
                </div>
                <h1 class="title fsw-h4">FASHION BANGKOK SHOPPING FESTIVAL SALE UP TO 50% A LOT OF PRODUCTS</h1>
                <p class="date-and-branch fsw-subtitle2 weight-regular">
                    <span>31 พ.ค. 67 - 27 มิ.ย. 67 : </span><span class="c-theme-red">ทุกสาขา, THE MALL KORAT</span>
                </p>
            </div>
            <div class="content-body">
                <div class="entry-content">
                    <p>
                        มาเหนือทุกโปรจึ้ง พร้อมปึ้งทุกลุคสายแฟ กับแบรนด์ชั้นนำ MEN'S FASHION SALE UP TO 50% BAGGAGE LUGGAGE / DAPPER / DEVY / FITFLOP / G2000 / GQ / HEAVY / JACK RUSSEL / LEE / LEVI'S / NIYOM JEANS / POLO WORLD / TIMBERLAND / VANS / WRANGLER WOMEN'S FASHION & LINGERIE SALON SALE UP TO 60% BOSSINI / BOUTON BLUE / CIERA / ELITE / G2000 / HUSH PUPPIES / J'NICHE / MIRAH / MIXX / SABINA / ST.JAMES / TRIUMPH / VILLAINS SF / WACOAL ที่ แผนก MEN'S FASHION, WOMEN'S FASHION & LINGERIE SALON
                        <br><br>
                        เดอะมอลล์ไลฟ์สโตร์ ท่าพระ / เดอะมอลล์ไลฟ์สโตร์ งามวงศ์วาน / เดอะมอลล์ไลฟ์สโตร์ บางแค / เดอะมอลล์ไลฟ์สโตร์ บางกะปิ เงื่อนไขเพิ่มเติม (*) •เฉพาะที่แผนก MEN'S FASHION, WOMEN'S FASHION & LINGERIE SALON เท่านั้น •เงื่อนไขเพิ่มเติมตามที่บริษัทฯกำหนด โปรดตรวจสอบเพิ่มเติม ณ จุดขาย
                        <br><br>
                        มาเหนือทุกโปรจึ้ง พร้อมปึ้งทุกลุคสายแฟ กับแบรนด์ชั้นนำ <strong>MEN'S FASHION SALE UP TO 50%</strong> BAGGAGE LUGGAGE / DAPPER / DEVY / FITFLOP / G2000 / GQ / HEAVY / JACK RUSSEL / LEE / LEVI'S / NIYOM JEANS / POLO WORLD
                    </p>
                </div>

                <div class="media-banner">
                    <?php
                    // $cover = './assets/vdo/development-intercontinental6.mp4';
                    // $cover = "./assets/img/design/template-single-mock-image2.jpg";
                    $cover = "https://www.youtube.com/embed/jmh3iruf4RA?si=VuTexb-twe_ByCaf";
                    $cover_m = "https://www.youtube.com/embed/jmh3iruf4RA?si=VuTexb-twe_ByCaf";
                    // $cover_m = "./assets/img/design/template-single-mock-image2.jpg";
                    // $cover_m = './assets/vdo/development-intercontinental6-m.mp4';


                    if (preg_match("/\.mp4$/", $cover)) { ?>
                        <figure class="object">
                            <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                        </figure>
                    <?php } elseif (preg_match("/^https:/", $cover)) { ?>
                        <iframe
                            id="<?php echo $development_project["project-name"] ?>-iframe"
                            title="?php echo $development_project['project-name'] ?> video link"
                            src="<?php echo $cover; ?>">
                            allow="accelerometer; modestbranding; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen
                        </iframe>
                    <?php } elseif (preg_match("/\.(png|jpg|jpeg|gif)$/", $cover)) { ?>
                        <picture class="object">
                            <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                            <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                            <img src="<?php echo $cover; ?>" alt="Content Image">
                        </picture>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="template-gallery animate fadeIn">
            <div class="swiper auto insufficient">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                    ?>

                        <div class="swiper-slide">
                            <a class="gallery-popup image-popup-no-margins" href="./assets/img/design/template-single-mock-image<?php echo $i % 4 + 1 ?>.jpg">
                                <div class="image">
                                    <img src="./assets/img/design/template-single-mock-image<?php echo $i % 4 + 1 ?>.jpg" alt="Marquee Gallery Image">
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="template-related-card">
        <div class="wrapper-content wrapper">
            <div class="title wow fadeIn">
                <h1>RELATED PROMOTION</h1>
            </div>

            <!-- GRID CONTENT ============================== -->
            <div
                class="grid-content-template">
                <?php
                $item_config = [
                    "footer" => "justify-content-between",
                    "add-to-calendar" => false,
                ];
                $content_item = [
                    "type" => "Store Promotion",
                    "title" => "FASHION BANGKOK SHOPPING FESTIVAL SALE UP TO 50% A LOT OF PRODUCTS",
                    "date" => "31 พ.ค. 67 - 27 มิ.ย. 67",
                    "branch-available" => "ทุกสาขา / บางกะปิ / บางแค / งามวงศ์วาน / ท่าพระ / โคราช",
                    "image" => "./assets/img/design/promotions-mock-image.jpg",
                    "link" => $root . "template-single.php",
                    "description" => "มาเหนือทุกโปรจึ้ง พร้อมปึ้งทุกลุคสายแฟ กับแบรนด์ชั้นนำ MEN'S FASHION SALE UP TO 50% BAGGAGE LUGGAGE / DAPPER / DEVY / FITFLOP / G2000/ DAPPER / DEVY / FITFLOP / DAPPER / DEVY / FITFLOP / G2000/ DAPPER / DEVY / FITFLOP"
                ];

                for ($i = 0; $i < 4; $i++) {
                    include($root . "include/element-content-item.php");
                } ?>
            </div>
        </div>
    </section>

    <?php
    $extra_class = "gold";

    include($root . "include/element-m-card-section.php");
    ?>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>