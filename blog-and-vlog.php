<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-template blog-and-vlog">
    <section class="blog-and-vlog-section template-hero" id="header-bound">
        <div class="wrapper-content wrapper">
            <!-- TITLE ============================== -->
            <div class="title wow fadeIn">
                <h1>BLOG & VLOG</h1>
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
                    "ALL",
                    "BLOG",
                    "VLOG",
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
                            "type" => "Blog",
                            "title" => "ไอเดียของขวัญวาเลนไทน์ 2024",
                            "date" => "23 ก.ย. 67 - 31 ธ.ค. 67",
                            "image" => "./assets/img/design/blog-and-vlog-mock-image.jpg",
                            "link" => $root . "template-single.php",
                            "description" => 'ไอเดียของขวัญวาเลนไทน์ 2024 เลือกให้ถูกใจตามบุคลิกคนพิเศษ รับรองคนรับเป็นปลื้ม'
                        ];

                        for ($i = 0; $i < 9; $i++) {
                            include($root . "include/element-content-item.php");
                        } ?>
                    </div>
                <?php } ?>
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