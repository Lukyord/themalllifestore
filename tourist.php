<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-tourist">
    <section class="tourist-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/tourist-hero-bg.jpg";
            $cover_m = "./assets/img/design/tourist-hero-bg-m.jpg";
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
                        alt="Index Hero Image"
                        data-animation="matrixZoomOut"
                        class="inside-animation ease-out-cubic"
                        data-wow-duration="1s"
                        draggable="false">
                </picture>
            <?php } ?>
        </div>

        <div class="section-content">
            <div class="content-wrapper">
                <div class="card wow fadeIn" data-wow-delay="0.3s">
                    <div class="image">
                        <img src="./assets/img/design/tourist-card.png" alt="Tourist Card">
                    </div>
                </div>

                <div class="marquee-wrapper wow fadeIn" data-wow-delay="0.6s">
                    <div class="marquee" data-js="liMarquee">
                        <p class="marquee-text">TOURIST BENEFITS</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tourist-info">
        <div class="content-wrapper">
            <div class="info">
                <div class="layout">
                    <div class="get-discount">
                        <div class="qr-code wow fadeIn">
                            <div class="image show-md">
                                <img src="./assets/img/design/qr-transparent.png" alt="QR Code">
                            </div>
                            <a href="javascript:;" class="get-discount-btn">
                                GET DISCOUNT
                            </a>
                        </div>
                    </div>
                    <p class="instruction wow fadeIn">
                        Scan QR code or Click the link and enjoy Tourist card discounts at THE MALL, THE MALL LIFESTORE, EMPORIUM, EMQUARTIER, EMSPHERE, PARAGON's department store(s) and up to 50% at EM Shopping Complex.
                        <br class="show-md"><br class="show-md">
                        Download or save the tourist card and simply show at cashier counter to enjoy privileges.
                    </p>
                    <div class="conditions">
                        <h4 class="fsw-h4 weight-bold weight-bold wow fadeIn">CONDITIONS</h4>
                        <ul class="wow fadeIn">
                            <li>Receive 5%* discount on regular priced merchandises in Department Store, Selected Thai Designer and Sport Mall.</li>
                            <li>Receive up to 50%* discount from participating shops in the Shopping Complex at Emporium, EmQuartier and Emsphere</li>
                            <li class="show-md">Receive 5%* discount on regular priced merchandises in Gourmet Market, Power Mall, Another Story and Another Man Story</li>
                            <li class="show-md">Receive up to 6%* VAT Refund. * VAT Refund Application for Tourists Form (P.P. 10, E-P.P. 10)</li>
                            <li class="show-md">Discount is not applicable for Pharmacy, Liquor & Wine Cellar, Food Hall, Take Home, Gift voucher, Gift cards, Top-up cards, partial deposit, service shop, rental shop, M-online, M Chat&Shop and delivery fee.</li>
                        </ul>
                        <p class="disclaimer wow fadeIn"> * Terms and conditions may apply</p>
                    </div>
                </div>
            </div>

            <div class="slides wow fadeIn">
                <div class="swiper auto fade">
                    <div class="swiper-wrapper">
                        <?php
                        for ($i = 1; $i <= 4; $i++) {
                        ?>
                            <div class="swiper-slide">
                                <div class="image">
                                    <img src="./assets/img/design/tourist-slide-mock-image.jpg" alt="Slide Image">
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <button class="swiper-button swiper-button-prev"></button>
                    <button class="swiper-button swiper-button-next"></button>
                </div>
            </div>
        </div>
    </section>

    <section class="tourist-promotion bg-white">
        <div class="wrapper wrapper-content">
            <div class="section-title wow fadeIn">
                <h1>PROMOTION & PRIVILEGE</h1>
            </div>
            <a class="promotion-image image-popup-no-margins" href="./assets/img/design/tourist-promotion-mock-image.jpg">
                <img src="./assets/img/design/tourist-promotion-mock-image.jpg" alt="Promotion Image">
            </a>
        </div>
    </section>

    <section class="services-section bg-white">
        <div class="wrapper wrapper-content">
            <div class="section-title wow fadeIn">
                <h1>SERVICES</h1>
            </div>

            <div class="services-grid">
                <?php
                $service_item = [
                    "image" => "./assets/img/design/service-mock-image.jpg",
                    "title" => "EVENT SPACE",
                    "branch" => "All Branches",
                    "item" => [
                        [
                            "name" => "M EVENT HALL",
                            "branch" => "Thaphra",
                            "floor" => "BF",
                        ],
                        [
                            "name" => "M LIFESTYLE HALL",
                            "branch" => "Ngamwongwan",
                            "floor" => "GF",
                        ],
                        [
                            "name" => "THE MALL CONVENTION CENTER",
                            "branch" => "Ngamwongwan",
                            "floor" => "4F",
                        ],

                    ]
                ];
                $services_arr = array_fill(0, 15, $service_item);


                foreach ($services_arr as $service) {
                ?>
                    <div class="service-item">
                        <div class="background-image">
                            <img src="<?php echo $service["image"] ?>" alt="Service Image">
                        </div>

                        <div class="content">
                            <div class="header">
                                <h5 class="title"><?php echo $service_item["title"] ?></h5>
                                <p class="subtitle"><?php echo $service_item["branch"] ?></p>
                            </div>

                            <div class="list">
                                <?php
                                foreach ($service["item"] as $item) {
                                ?>
                                    <div class="list-item">
                                        <div class="name-and-branch">
                                            <h6><?php echo $item["name"] ?></h6>
                                            <p><?php echo $item["branch"] ?></p>
                                        </div>

                                        <p><?php echo $item["floor"] ?></p>

                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>