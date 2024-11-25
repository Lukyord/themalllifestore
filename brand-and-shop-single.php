<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main brand-and-shop-single">
    <section class="banner-hero center brand-and-shop-single-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/brand-and-shop-single-hero.jpg";
            $cover_m = "./assets/img/design/brand-and-shop-single-hero-m.jpg";
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
                        THONGSMITH
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
                            <i class="ic ic-mail"></i>
                            <span>Call : 021731000</span>
                        </a>

                        <a href="mailto:test@gmail.com" class="banner-button">
                            <i class="ic ic-call"></i>
                            <span>Contact Via Email</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="brand-content" id="gallery">
        <div class="page-nav">
            <div class="swiper auto insufficient">
                <div class="swiper-wrapper">
                    <?php
                    $navs_arr = ["gallery", "promotions"];

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

        <div class="wrapper wrapper-content">
            <div class="text">
                <div class="entry-content">
                    <p>
                        หากทองเนื้อเก้า คือทองเนื้อดีมีค่ามาก ‘ทองสมิทธ์’ ก็คงมีความหมายทำนองนั้นได้ แต่คำว่า ‘เนื้อดี’ ของ ทองสมิทธ์ ไม่ได้หมายถึงเนื้อทองคำที่เปล่งประกายให้ตาเห็น แต่มันหมายถึง ‘เนื้อวากิว’ ที่เปล่งประกายอร่อยระดับมีแสงออกจากปากนั่นเอง
                        <br><br>
                        ก๋วยเตี๋ยวเรือเป็นอาหารที่อยู่คู่กับคนไทยมาช้านาน สมัยก่อนพ่อค้าแม่ขายอาจจะต้องพายเรือล่องมาตามลำน้ำเพื่อขายก๋วยเตี๋ยวจากบนเรือ จนเป็นที่มาของชื่อ ‘ก๋วยเตี๋ยวเรือ’ แต่ในสมัยนี้ที่เราไม่จำเป็นต้องไปนั่งรอที่ท่าน้ำทุกวันเพื่อจะได้กินก๋วยเตี๋ยวเรือแสนอร่อยอีกต่อไป
                    </p>
                </div>
            </div>
            <div class="gallery">
                <div class="content-gallery">
                    <?php
                    for ($i = 1; $i <= 6; $i++) {
                        $cover = "./assets/img/design/brand-single-gallery$i.jpg";
                        $cover_m = "./assets/img/design/brand-single-gallery$i.jpg";
                    ?>
                        <div class="media">
                            <?php
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
                        </div>
                <?php }
                        }
                ?>
                </div>
                <div class="content-gallery hidden-device-md">
                    <?php
                    for ($i = 1; $i <= 2; $i++) {
                        $cover = "./assets/img/design/brand-single-gallery-box$i.jpg";
                        $cover_m = "./assets/img/design/brand-single-gallery-box$i.jpg";
                    ?>
                        <div class="media">
                            <?php
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
                        </div>
                <?php }
                        }
                ?>
                </div>
            </div>
        </div>
    </section>

    <section class="template-related-card">
        <div class="wrapper-content wrapper">
            <div class="title wow fadeIn">
                <h1>RELATED BRAND & SHOP</h1>
            </div>

            <!-- GRID CONTENT ============================== -->
            <div
                class="grid-content-template small">
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

                for ($i = 0; $i < 4; $i++) {
                    include($root . "include/element-content-item-small.php");
                } ?>
            </div>
        </div>
    </section>

    <section class="template-related-card" id="promotions">
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