<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-template search">
    <section class="search-section template-hero" id="header-bound">
        <div class="wrapper-content wrapper tab-container">
            <!-- TITLE ============================== -->
            <div class="title wow fadeIn">
                <h1>SEARCH RESULT</h1>
            </div>

            <!-- FILTER ============================== -->
            <div class="filter-template">
                <div class="category-filter wow fadeIn">
                    <div class="swiper auto clicked insufficient">
                        <div class="swiper-wrapper">
                            <?php

                            $category_arr = [
                                "promotions" => [
                                    "name" => "PROMOTIONS",
                                    "num" => 6
                                ],
                                "happening" => [
                                    "name" => "HAPPENING",
                                    "num" => 3
                                ],
                                "pr-news" => [
                                    "name" => "PR NEWS / CSR",
                                    "num" => 2
                                ],
                                "blog-and-vlog" => [
                                    "name" => "BLOG & VLOG",
                                    "num" => 1
                                ],
                                "brand-and-shop" => [
                                    "name" => "BRAND & SHOP",
                                    "num" => 1
                                ],
                                "dining" => [
                                    "name" => "DINING",
                                    "num" => 1
                                ],
                            ];

                            foreach ($category_arr as $category => $data) {
                                $first_index = array_key_first($category_arr);
                            ?>
                                <div class="swiper-slide">
                                    <a
                                        href="#<?php echo $category ?>"
                                        class="category-item filter tab-link <?php if ($category == $first_index) echo "active" ?>">
                                        <?php echo $data["name"]; ?> (<?php echo $data["num"]; ?>)
                                    </a>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- GRID CONTENT ============================== -->
            <div class="main-content">
                <?php
                foreach ($category_arr as $category => $data) {
                    $isSmall = in_array($category, ["brand-and-shop", "dining"]);
                ?>
                    <div
                        id="<?php echo $category ?>"
                        class="
                            grid-content-template tab-content 
                            <?php echo $category === $first_index ? 'active' : ''; ?>
                            <?php echo $isSmall ? 'small' : ''; ?>
                            ">
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

                        $content_item_small = [
                            "image" => "./assets/img/design/search-small-mock-image.jpg",
                            "link" => $root . "brand-and-shop-single.php",
                            "title" => "AESOP",
                            "category" => "BEAUTY & HEALTH",
                            "branch" => "ALL BRANCHES",
                        ];

                        for ($i = 0; $i < 10; $i++) {
                            if ($isSmall) {
                                include($root . "include/element-content-item-small.php");
                            } else {
                                include($root . "include/element-content-item.php");
                            }
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

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>