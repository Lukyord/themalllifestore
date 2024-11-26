<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-wonder">
    <section class="banner-hero wonder-single-hero" id="header-bound">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/slide1-bg.jpg";
            $cover_m = "./assets/img/design/wonder-single-hero-bg-m.jpg";
            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                <figure class="object blurred-media">
                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                </figure>
            <?php } else { ?>
                <picture class="object blurred-media">
                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                    <img
                        src="<?php echo $cover; ?>"
                        alt="Hero Image"
                        draggable="false">
                </picture>
            <?php } ?>
        </div>


        <div class="section-content">
            <div class="content-wrapper">
                <div class="bg-obj">
                    <?php
                    $cover = "./assets/img/design/wonder-single-hero-object.png";
                    $cover_m = "./assets/img/design/wonder-single-hero-object-m.png";
                    ?>
                    <picture class="object blurred-media">
                        <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                        <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                        <img
                            src="<?php echo $cover; ?>"
                            alt="Hero Image"
                            draggable="false">
                    </picture>
                </div>
                <div class="text-content">
                    <h1 class="title fsw-h2">WONDER OF EXCITEMENT</h1>
                    <p class="description">Building and managing a strong brand identity along with operating a retail establishment where products or services associated with that brand are sold. This can involve various marketing strategies, merchandising techniques, and customer experiences aimed at promoting the brand and driving sales within the shop.</p>
                    <div class="logo-marquee-container">
                        <div class="logo-marquee large">
                            <div class="logo-row">
                                <?php
                                $slide_logo = [
                                    './assets/img/design/slide-logo1.png',
                                    './assets/img/design/slide-logo2.png',
                                    './assets/img/design/slide-logo3.png',
                                    './assets/img/design/slide-logo4.png',
                                    './assets/img/design/slide-logo5.png',
                                    './assets/img/design/slide-logo6.png',
                                    './assets/img/design/slide-logo7.png',

                                ];
                                foreach ($slide_logo as $logo):
                                ?>
                                    <div class="logo-image">
                                        <img class="slide-logo" src="<?php echo $logo; ?>" alt="">
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-sticky" id="introduction">
        <div class="page-nav">
            <div class="swiper auto insufficient">
                <div class="swiper-wrapper">
                    <?php
                    $navs_arr = ["introduction", "gallery", "brands-and-activities"];

                    foreach ($navs_arr as $nav) {
                        $nav_label = str_ireplace("-and-", " & ", $nav);
                        $nav_label = str_replace("-", " ", $nav_label);
                    ?>
                        <div class="swiper-slide">
                            <a href="#<?php echo $nav ?>" class="page-nav-link link-scroll">
                                <?php echo $nav_label ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="sticky">
            <div class="text">
                <h2 class="fsw-h2 c-theme-red">ENJOY <br class="show-md">THE EXCITEMENT</h2>
                <p>Year-round happening event and activation at our spacious event space and mcc hall Year-round happening event and activation at our spacious event space and mcc hall Year-round happening event and activation at our spacious event space and mcc hall</p>
                <div class="logo-marquee-container">
                    <div class="logo-marquee large">
                        <div class="logo-row">
                            <?php
                            $slide_logo = [
                                './assets/img/design/slide-logo1.png',
                                './assets/img/design/slide-logo2.png',
                                './assets/img/design/slide-logo3.png',
                                './assets/img/design/slide-logo4.png',
                                './assets/img/design/slide-logo5.png',
                                './assets/img/design/slide-logo6.png',
                            ];
                            foreach ($slide_logo as $logo):
                            ?>
                                <div class="logo-image">
                                    <img class="slide-logo" src="<?php echo $logo; ?>" alt="">
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>


            <div class="parallax rellax image-1" data-rellax-speed="-0.3">
                <img src="./assets/img/design/wonder-parallax1.jpg" alt="">
            </div>
            <div class="parallax rellax image-2" data-rellax-speed="-0.6">
                <img src="./assets/img/design/wonder-parallax2.jpg" alt="">
            </div>
            <div class="parallax rellax image-3" data-rellax-speed="-0.75">
                <img src="./assets/img/design/wonder-parallax3.jpg" alt="">
            </div>
            <div class="parallax rellax image-4" data-rellax-speed="-0.35">
                <img src="./assets/img/design/wonder-parallax4.jpg" alt="">
            </div>
            <div class="parallax rellax image-5" data-rellax-speed="0.35">
                <img src="./assets/img/design/wonder-parallax5.jpg" alt="">
            </div>
            <div class="parallax rellax image-6" data-rellax-speed="-0.25">
                <img src="./assets/img/design/wonder-parallax6.jpg" alt="">
            </div>

        </div>
    </section>

    <?php

    $slide = [
        // "pc" => './assets/vdo/development-intercontinental6.mp4',
        "pc" => "./assets/img/design/wonder-slide.jpg",
        "mobile" => "./assets/img/design/wonder-slide-m.jpg"
    ];
    $hero_slide_images = array_fill(0, 5, $slide);

    $section_id = "gallery";


    include($root . "include/template-banner-slide.php");
    ?>

    <section class="wonder-store-section" id="brands-and-activities">
        <div class="main-content">
            <div class="grid-content-template small">
                <?php
                $item_config = [
                    "footer" => "justify-content-between",
                    "add-to-calendar" => false,
                ];

                $content_item_small = [
                    "image" => "./assets/img/design/search-small-mock-image.jpg",
                    "link" => $root . "brand-and-shop-single.php",
                    "title" => "AESOP",
                    "category" => "BEAUTY & HEALTH",
                    "branch" => "ALL BRANCHES",
                ];

                for ($i = 0; $i < 16; $i++) {
                    include($root . "include/element-content-item-small.php");
                } ?>
            </div>
    </section>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>