<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-template pr-news">
    <section class="pr-news-section template-hero" id="header-bound">
        <div class="wrapper-content wrapper">
            <!-- TITLE ============================== -->
            <div class="title wow fadeIn">
                <h1>PR NEWS/CSR</h1>
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
                            "footer" => "justify-content-between",
                            "add-to-calendar" => false,
                        ];
                        $content_item = [
                            "type" => "PR News",
                            "title" => "คุณศุภลักษณ์ อัมพุช เข้ารับรางวัล Her Awards, UNFPA Thailand 2024: ประชากรหญิง ผู้สร้างแรงบันดาลใจ",
                            "date" => "23 ก.ย. 67 - 31 ธ.ค. 67",
                            "image" => "./assets/img/design/pr-news-mock-image.jpg",
                            "link" => $root . "template-single.php",
                            "description" => 'ประธานกรรมการบริหาร บริษัท เดอะมอลล์ กรุ๊ป จำกัด นักธุรกิจหญิงผู้สร้างปรากฎการณ์รีเทลระดับโลก เข้ารับรางวัล Her Awards, UNFPA Thailand 2024: ประชากรหญิง ผู้สร้างแรงบันดาลใจ'
                        ];

                        for ($i = 0; $i < 12; $i++) {
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

    <section class="awards-section">
        <div class="wrapper">
            <div class="title wow fadeIn">
                <h2 class="fsw-h2 c-theme-red weight-bold a-center">AWARDS</h2>
            </div>

            <div class="swiper awards">
                <div class="swiper-wrapper">
                    <?php
                    for ($i = 0; $i < 10; $i++) {
                    ?>
                        <div class="swiper-slide">
                            <div class="award-wrapper wow fadeIn">
                                <div class="bg-image">
                                    <img src="./assets/img/design/award-mock-image.jpg" alt="Award Image">
                                </div>

                                <div class="text-content">
                                    <h5 class="award-title fsw-h5">CTC CREATIVE BUSINESS AWARD 2024</h5>
                                    <div class="year-and-num fsw-subtitle2">
                                        <span class="year">2024</span>
                                        <span class="num">2 AWARDS</span>
                                    </div>
                                    <ul>
                                        <li>Creative Leader Award (คุณวรลักษณ์ ตุลาภรณ์)</li>
                                        <li>Creative Business Award</li>
                                    </ul>

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
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>