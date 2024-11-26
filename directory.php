<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-directory">
    <section class="banner-hero directory-hero">
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
            <div class="content-wrapper">
                <div class="empty"></div>
                <div class="marquee-wrapper wow fadeIn" data-wow-delay="0.6s">
                    <div class="marquee" data-js="liMarquee">
                        <p class="marquee-text">DIRECTORY & SERVICES</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include($root . "include/directory-section.php");
    ?>

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
                $services_arr = array_fill(0, 8, $service_item);


                foreach ($services_arr as $service) {
                    include($root . "include/service-item.php");
                }
                ?>
            </div>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>