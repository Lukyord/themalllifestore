<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-template promotions">
    <section class="promotions-section template-hero" id="header-bound">
        <div class="wrapper-content wrapper">
            <!-- TITLE ============================== -->
            <div class="title wow fadeIn">
                <h1>PROMOTION</h1>
            </div>

            <!-- FILTER ============================== -->
            <div class="filter-template">
                <!-- Branch Filter -->
                <?php
                include($root . "include/element-branch-select.php");
                ?>

                <!-- Category Filter -->
                <?php
                $category_arr = [
                    "ALL PROMOTIONS",
                    "STORE PROMOTION",
                    "CREDIT CARD PROMOTION",
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
                        class="grid-content-template tab-content <?php echo $branch_id === $first_index ? 'active' : ''; ?>">
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

                        for ($i = 0; $i < 10; $i++) {
                            include($root . "include/element-content-item.php");
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
    include($root . "include/element-m-card-section.php");
    ?>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>