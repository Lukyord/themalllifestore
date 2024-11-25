<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-template2 dining">
    <section class="banner-hero" id="header-bound">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/dining-hero.jpg";
            $cover_m = "./assets/img/design/dining-hero-m.jpg";
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
                <div class="text-content">
                    <h1 class="title fsw-h2">DISCOVER DINING</h1>
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

                                ];
                                foreach ($slide_logo as $logo):
                                ?>
                                    <img class="slide-logo" src="<?php echo $logo; ?>" alt="">
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

    <section class="template-2-content store-section">
        <div class="content-container">
            <!-- FILTER ============================== -->
            <div class="filter-template">
                <!-- Branch Filter -->
                <?php
                include($root . "include/element-branch-select.php");
                ?>

                <!-- Category Filter -->
                <?php
                $category_arr = [
                    "All RESTAURANTS",
                    "FAST FOOD",
                    "WESTERN",
                    "THAI",
                    "JAPANESE",
                    "KOREN",
                    "CHINESE",
                    "CAFE"
                ];

                include($root . "include/element-category-filter.php");
                ?>
            </div>

            <!-- GRID CONTENT ============================== -->
            <div class="main-content">
                <?php
                foreach ($branch_arr as $branch_id => $data) {
                    $first_index = array_key_first($branch_arr);
                ?>
                    <div
                        id="<?php echo $branch_id ?>"
                        class="grid-content-template tab-content small <?php echo $branch_id === $first_index ? 'active' : ''; ?>">
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

                        for ($i = 0; $i < 10; $i++) {
                            include($root . "include/element-content-item-small.php");
                        } ?>
                    </div>
                <?php } ?>

                <!-- PAGINCATION ============================== -->
                <?php
                include($root . "include/element-pagination.php");
                ?>
            </div>

        </div>
    </section>

    <section class="featured-on">
        <h2 class="title fsw-h2">FEATURE ON</h2>
        <div class="marquee-wrapper">
            <div class="marquee" data-js="liMarquee">
                <?php
                for ($i = 0; $i < 5; $i++) {
                ?>
                    <div class="marquee-item">
                        <a href="#outer" class="link-overlay">&nbsp;</a>
                        <div class="feature">
                            <div class="image">
                                <img src="./assets/img/design/feature-on-image.jpg" alt="Feature Image" draggable="false" loading="lazy">
                            </div>
                            <div class="text">
                                <h5 class="fsw-h5 feature-title font-body">EP.10 Flavors of The Season
                                    <br>ความอร่อยจัดหนักแห่งฤดูกาล
                                </h5>
                                <p class="description">Make A List Eat With Alek</p>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

    <section class="review-section">
        <div class="wrapper wrapper-content">
            <h2 class="title fsw-h2">REVIEWS</h2>
            <div class="masonry-grid">
                <?php
                for ($i = 1; $i <= 8; $i++) {
                    $cover = "./assets/img/design/review-image$i.jpg";
                    $cover_m = "./assets/img/design/review-image$i.jpg";
                ?>
                    <div class="masonry-grid-item">
                        <div class="media">
                            <?php
                            if (preg_match("/\.(mp4)$/", $cover)) { ?>
                                <figure class="object">
                                    <video playsinline muted autoplay loop src="<?php echo $cover; ?>"></video>
                                </figure>
                            <?php } else { ?>
                                <picture class="object">
                                    <source media="(min-width:992px)" srcset="<?php echo $cover ?>">
                                    <source media="(min-width:0px)" srcset="<?php echo $cover_m ?>">
                                    <img
                                        src="<?php echo $cover; ?>"
                                        alt="Hero Image"
                                        draggable="false">
                                </picture>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>