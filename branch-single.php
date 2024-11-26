<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-branch-single">
    <section class="banner-hero center branch-single-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/branch-single-hero-image.jpg";
            $cover_m = "./assets/img/design/branch-single-hero-image-m.jpg";
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
            <div class="content-wrapper padding-x">
                <div class="content">
                    <h1 class="title fsw-h2 c-white">
                        THE MALL LIFESTORE
                        <br>BANGKAPI
                    </h1>
                    <address>
                        <p class="c-white">3522 ถ. ลาดพร้าว แขวงคลองจั่น เขตบางกะปิ กรุงเทพมหานคร 10240</p>
                    </address>
                    <div class="cta-buttons">
                        <a href="#get-direction" class="banner-button">
                            <i class="ic ic-carbon_map"></i>
                            <span>Get direction</span>
                        </a>

                        <a href="tel:+6621731000" class="banner-button">
                            <i class="ic ic-call"></i>
                            <span>Call : 021731000</span>
                        </a>
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
                    $navs_arr = ["introduction", "plan-your-visit", "directory", "latest-promotions"];

                    foreach ($navs_arr as $nav) {
                        $nav_label = str_replace("-", " ", $nav);
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
                <h2 class="fsw-h2 c-theme-red">BANGKAPI</h2>
                <h3 class="fsw-h3 font-body">THE WONDER OF THE EAST</h3>
                <p>Year-round happening event and activation at our spacious event space and mcc hall Year-round happening event and activation at our spacious event space and mcc hall Year-round happening event and activation at our spacious event space and mcc hall</p>
            </div>


            <div class="parallax rellax image-1" data-rellax-speed="-0.2">
                <img src="./assets/img/design/branch-single-parallax1.jpg" alt="">
            </div>
            <div class="parallax rellax image-2" data-rellax-speed="-0.5">
                <img src="./assets/img/design/branch-single-parallax2.jpg" alt="">
            </div>
            <div class="parallax rellax image-3" data-rellax-speed="-0.75">
                <img src="./assets/img/design/branch-single-parallax3.jpg" alt="">
            </div>
            <div class="parallax rellax image-4" data-rellax-speed="-0.25">
                <img src="./assets/img/design/branch-single-parallax4.jpg" alt="">
            </div>
            <div class="parallax rellax image-5" data-rellax-speed="0.25">
                <img src="./assets/img/design/branch-single-parallax5.jpg" alt="">
            </div>
            <div class="parallax rellax image-6" data-rellax-speed="-0.25">
                <img src="./assets/img/design/branch-single-parallax6.jpg" alt="">
            </div>

        </div>
    </section>

    <?php
    $slide = [
        // "pc" => './assets/vdo/development-intercontinental6.mp4',
        "pc" => "./assets/img/design/branch-single-slide-banner-image.jpg",
        "mobile" => "./assets/img/design/branch-single-slide-banner-image-m.jpg"
    ];
    $hero_slide_images = array_fill(0, 5, $slide);


    include($root . "include/template-banner-slide.php");
    ?>

    <section class="branch-single-hour" id="plan-your-visit">
        <div class="time">
            <div class="time-content">
                <h3 class="title fsw-h3 font-body c-theme-red">OPENING HOURS</h3>
                <div class="time-table">
                    <h5 class="subheading c-theme-red">Department</h5>
                    <ul>
                        <li>
                            <p>Monday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Tuesday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Wednesday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Thursday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Friday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Saturday</p>
                            <p>10am - 10pm</p>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <p>10am - 10pm</p>
                        </li>
                    </ul>

                    <h5 class="subheading c-theme-red">Gourmet Market</h5>
                    <ul>
                        <li>
                            <p>Everyday</p>
                            <p>10am-10pm</p>
                        </li>
                    </ul>
                </div>
                <a href="tel:+6621731000" class="banner-button large">
                    <i class="ic ic-call"></i>
                    <span>THE MALL LIFESTORE BANGKAPI</span>
                </a>
            </div>
        </div>
        <div class="text-slides">
            <div class="swiper auto fade">
                <div class="swiper-wrapper">
                    <?php
                    $slide = [
                        "pc" => "./assets/img/design/front-door.jpg",
                        "mobile" => "./assets/img/design/front-door-m.jpg",
                        "title" => "Front Door",
                        "description" => "a utopia where furry friends roam freely through lush landscapes, enjoying gourmet treats and tailored play areas. This haven is a symphony of joy, with pampering spas and cozy nooks ensuring every pet's happiness. Welcome to a sanctuary where tails wag, feathers flutter, and pure bliss abounds!"
                    ];
                    $slides = array_fill(0, 5, $slide);

                    foreach ($slides as $slide) {
                    ?>
                        <div class="swiper-slide">
                            <div class="content-wrapper">
                                <div class="image">
                                    <?php
                                    $cover = $slide["pc"];
                                    $cover_m = $slide["mobile"];
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
                                                alt="Slide Image"
                                                draggable="false">
                                        </picture>
                                    <?php } ?>
                                </div>

                                <div class="text show-md">
                                    <h4 class="title fsw-h4 font-body"><?php echo $slide["title"] ?></h4>
                                    <p class="description"><?php echo $slide["description"] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <button class="swiper-button swiper-button-prev"></button>
                <button class="swiper-button swiper-button-next"></button>
            </div>
        </div>
    </section>

    <?php
    $one_branch = true;

    include($root . "include/directory-section.php");
    ?>

    <section class="template-related-card" id="latest-promotions">
        <div class="wrapper-content wrapper">
            <div class="title wow fadeIn">
                <h1>PROMOTIONS</h1>
            </div>

            <!-- Filter -->
            <div class="filter-template">
                <!-- Category Filter -->
                <?php
                $category_arr = [
                    "VIEW ALL",
                    "STORE PROMOTION",
                    "CREDIT CARD PROMOTION",
                ];

                include($root . "include/element-category-filter.php");
                ?>
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

                for ($i = 0; $i < 6; $i++) {
                    include($root . "include/element-content-item.php");
                } ?>
            </div>
        </div>
    </section>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>