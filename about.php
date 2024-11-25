<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-about">
    <section class="about-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/about-hero.jpg";
            $cover_m = "./assets/img/design/about-hero-m.jpg";
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

        <div class="text-content c-white">
            <h1 class="title fsw-h2">
                ABOUT
                <br>THE MALL <br class="hidden-device-sm">LIFE STORE
            </h1>
            <p class="description">
                The Seven Wonders of the World have captivated imaginations for centuries, representing extraordinary feats of human achievement and natural beauty.
            </p>
        </div>
    </section>

    <section class="about-intro">
        <div class="two-side-content">
            <div class="left-side">
                <div class="homepage-intro">
                    <div class="tab-container no-wow">
                        <div class="tab-wrapper">
                            <div id="trigger_logo"></div>
                            <ul class="tab tab-hover">
                                <?php
                                $intro_arr = array(
                                    array(
                                        'intro_id' =>  'bangkae',
                                        'intro_name' => 'BANGKAE',
                                        'intro_img' => './assets/img/design/about-intro.jpg',
                                        'intro_img_mb' => './assets/img/design/about-intro-m.jpg',
                                    ),
                                    array(
                                        'intro_id' =>  'bangkapi',
                                        'intro_name' => 'BANGKAPI',
                                        'intro_img' => './assets/img/design/about-intro.jpg',
                                        'intro_img_mb' => './assets/img/design/about-intro-m.jpg',
                                    ),
                                    array(
                                        'intro_id' =>  'ngamwongwan',
                                        'intro_name' => 'NGAMWONGWAN',
                                        'intro_img' => './assets/img/design/about-intro.jpg',
                                        'intro_img_mb' => './assets/img/design/about-intro-m.jpg',
                                    ),
                                    array(
                                        'intro_id' =>  'thaphra',
                                        'intro_name' => 'THAPHRA',
                                        'intro_img' => './assets/img/design/about-intro.jpg',
                                        'intro_img_mb' => './assets/img/design/about-intro-m.jpg',
                                    ),
                                    array(
                                        'intro_id' =>  'korat',
                                        'intro_name' => 'KORAT',
                                        'intro_img' => './assets/img/design/about-intro.jpg',
                                        'intro_img_mb' => './assets/img/design/about-intro-m.jpg',
                                    ),
                                );
                                foreach ($intro_arr as $index => $intro_data):
                                ?>
                                    <li>
                                        <a
                                            class="tab-hover-link fsw-h2 ff-heading c-theme-red wow textFlyIn"
                                            data-wow-delay="<?php echo $index * 0.25; ?>s"
                                            data-wow-duration="<?php echo 1 + ($index * 0.05); ?>s"
                                            data-tab-id="<?php echo '#' . $intro_data['intro_id']; ?>"
                                            href="<?php echo $root; ?>branch-single.php"><?php echo $intro_data['intro_name']; ?></a>
                                    </li>
                                <?php

                                endforeach;
                                ?>
                            </ul>
                        </div>
                        <div class="tabContent-container">
                            <?php
                            foreach ($intro_arr as $index => $intro_data):
                            ?>
                                <div id="<?php echo $intro_data['intro_id']; ?>" class="tab-content <?php echo ($index == 0) ? 'active' : ''; ?>">
                                    <div class="image">
                                        <picture>
                                            <source media="(min-width:768px)" srcset="<?php echo $intro_data['intro_img']; ?>">
                                            <source media="(min-width:0px)" srcset="<?php echo $intro_data['intro_img_mb']; ?>">
                                            <img src="<?php echo $intro_data['intro_img']; ?>" alt="">
                                        </picture>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-side">
                <div class="text-content">
                    <h3 class="title fsw-h3 font-body c-theme-red wow fadeIn">
                        WELCOME
                        <br>TO NEW ERA
                        <br>OF PARADISE
                    </h3>
                    <p class="description wow fadeIn">is a renowned chain of shopping centers located in Thailand, particularly known for its presence in Bangkok and other major cities. It is part of The Mall Group, one of Thailand's largest and most influential retail corporations. The Mall is celebrated for offering a diverse and high-quality shopping experience, catering to a wide array of customer needs with its extensive range of stores, services, and amenities.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="about-history happening-section bg-white">
        <?php
        $history_arr = [
            "all" => [

                "1990" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ],
                "1992" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ],
                "1995" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ],
                "1997" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ],
                "2001" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ],
                "2002" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ],
                "2004" => [
                    [
                        'history_img' => './assets/img/design/history-image.jpg',
                        'history_img_mb' => './assets/img/design/history-image-m.jpg',
                        'history_content' => 'ในปี 1997 ทางบริษัทของเราได้ทำการเปิดสาขาเดอะมอลล์ 3 ขึ้นที่ถนนรามคำแหง เน้นเจาะกลุ่มนักศึกษามหาวิทยาลัย ตัวห้างเน้นความทันสมัย และครบครันไปด้วยแบรนด์ชั้นนำเป็นครั้งแรกที่มีการแบ่งฝั่งห้างและฝั่งดีพาร์ทเม้นท์',
                    ],
                ]
            ]
        ];

        ?>
        <div class="marquee-wrapper wow fadeIn">
            <div class="marquee" data-js="liMarquee">
                <?php
                $branches = ["BANGKAE", "BANGKAPI", "NGAMWONGWAN", "THAPHRA", "KORAT"];

                foreach ($branches as $branch) {
                ?>
                    <h2 class="c-theme-red marquee-item"><?php echo $branch ?></h2>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="wrapper">
            <?php
            $first_index = array_key_first($history_arr);
            foreach ($history_arr as $branch_id => $history_data) {
                $first_date = array_key_first($history_data);
            ?>
                <div
                    id="<?php echo $branch_id; ?>"
                    class="tab-content section-content <?php echo $branch_id === $first_index ? 'active' : ''; ?>">
                    <div class="happening-container wow fadeIn">
                        <?php foreach ($history_data as $date => $events) {
                            $date_class = strtolower(str_replace(' ', '-', $date));
                        ?>
                            <div
                                id="<?php echo strtolower(str_replace(' ', '-', $date)); ?>"
                                class="happening-date tab-content <?php echo $date === $first_date ? 'active' : ''; ?>">

                                <!-- Nested image slide for events on this date -->
                                <div class="swiper nested-swiper">
                                    <div class="swiper-wrapper">
                                        <?php foreach ($events as $data): ?>
                                            <div class="swiper-slide">
                                                <div class="happening-item">
                                                    <div class="grid-content grid2">
                                                        <div class="grid-media">
                                                            <div class="media-wrapper media4-3">
                                                                <picture>
                                                                    <source media="(min-width:768px)" srcset="<?php echo $data['history_img']; ?>">
                                                                    <source media="(min-width:0px)" srcset="<?php echo $data['history_img_mb']; ?>">
                                                                    <img src="<?php echo $data['history_img']; ?>" alt="">
                                                                </picture>
                                                            </div>
                                                        </div>
                                                        <div class="grid-context">
                                                            <div class="happening-desc a-center c-white">
                                                                <p class="description fsw-h4"><?php echo $data['history_content']; ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>

                                    <!-- Controls for nested slides -->
                                    <div class="swiper-nav">
                                        <button class="swiper-button swiper-button-prev swiper-button-prev-<?php echo $date_class; ?>"></button>
                                        <button class="swiper-button swiper-button-next swiper-button-next-<?php echo $date_class; ?>"></button>
                                    </div>
                                    <div class="swiper-pagination swiper-pagination-<?php echo $date_class; ?>"></div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <!-- Date thumbnail navigation -->
                        <div class="swiper swiper-happeningThumb">
                            <div class="swiper-wrapper">
                                <?php foreach ($history_data as $date => $events): ?>
                                    <div class="swiper-slide" data-target-date="<?php echo strtolower(str_replace(' ', '-', $date)); ?>">
                                        <div class="happening-thumb">
                                            <p class="fsw-subtitle1 a-center"><?php echo $date; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </section>

    <section class="awards-section bg-white">
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