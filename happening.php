<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-template happening">
    <section class="happening-section template-hero" id="header-bound">
        <div class="wrapper-content wrapper">
            <!-- TITLE ============================== -->
            <div class="title wow fadeIn">
                <h1>HAPPENING</h1>
            </div>

            <!-- FILTER ============================== -->
            <div class="filter-template">
                <!-- Branch Filter -->
                <?php
                include($root . "include/element-branch-select.php");
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
                            "footer" => "",
                            "add-to-calendar" => true,
                        ];
                        $content_item = [
                            "type" => "Happening",
                            "title" => "THE MALL LIFESTORE<br>PET FIESTA",
                            "date" => "23 ก.ย. 67 - 31 ธ.ค. 67",
                            "image" => "./assets/img/design/happening-mock-image.jpg",
                            "link" => $root . "template-single.php",
                            "description" => '“THE MALL LIFESTORE PET FIESTA” สุดเซอร์ไพร์กับกิจกรรมอัดแน่น พบปะเหล่าเพื่อนซี้แสนรัก'
                        ];

                        for ($i = 0; $i < 3; $i++) {
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