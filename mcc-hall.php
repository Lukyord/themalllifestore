<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-mcc-hall">
    <section class="banner-hero center mcc-hall-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/mcc-hall-hero.jpg";
            $cover_m = "./assets/img/design/mcc-hall-hero-m.jpg";
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
                        MCC HALL
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

    <section class="mcc-hall-intro" id="introduction">
        <div class="page-nav">
            <div class="swiper auto insufficient">
                <div class="swiper-wrapper">
                    <?php
                    $navs_arr = ["introduction", "gallery", "upcoming-events"];

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

        <div class="two-side-content">
            <div class="left-side">
                <div class="image">
                    <?php
                    $cover = "./assets/img/design/retail-intro-image.jpg";
                    $cover_m = "./assets/img/design/retail-intro-image-m.jpg";
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
                                alt="Slide Image"
                                draggable="false">
                        </picture>
                    <?php } ?>
                </div>

            </div>
            <div class="right-side">
                <div class="text-content">
                    <h3 class="title fsw-h3 font-body c-theme-red">
                        WELCOME
                        <br>TO NEW ERA
                        <br>OF MCC HALL
                    </h3>
                    <p class="description">MCC Hall is a prominent event and exhibition space located within The Mall shopping centers in Bangkok, Thailand. The name "MCC" stands for "Mall Convention Center," reflecting its primary function as a versatile venue for a wide array of events, including trade shows, exhibitions, concerts, seminars, and corporate gatherings. The hall is known for its spacious layout, modern facilities, and convenient location within the bustling commercial environment of The Mall.</p>
                    <a href="tel:+6621731000" class="banner-button large">
                        <i class="ic ic-call"></i>
                        <span>Contact FOR MORE INFORMATION</span>
                    </a>
                    <a href="tel:+6621731000" class="banner-button large">
                        <i class="ic ic-contact-sale"></i>
                        <span>Contact Sale For Rent Space</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="mcc-hall-gallery" id="gallery">
        <div class="wrapper wrapper-content">
            <div class="content-gallery">
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    $cover = "./assets/img/design/retail-gallery$i.jpg";
                    $cover_m = "./assets/img/design/retail-gallery$i.jpg";
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
                    $cover = "./assets/img/design/retail-gallery-box$i.jpg";
                    $cover_m = "./assets/img/design/retail-gallery-box$i.jpg";
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
    </section>

    <?php
    $happening_section_id = "upcoming-events";

    include($root . "./include/happening-section.php");
    ?>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>