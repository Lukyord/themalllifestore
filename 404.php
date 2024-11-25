<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-404">
    <section class="not-found-hero">
        <div class="image">
            <?php
            $cover = "./assets/img/design/404.jpg";
            $cover_m = "./assets/img/design/404-m.jpg";
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

        <div class="text c-white">
            <h1 class="fsw-h2 weight-bold">WRONG URL</h1>
            <a href="<?php echo $root ?>index.php">BACK TO MAINPAGE</a>
        </div>
    </section>
</main>

<?php include($root . "footer.php"); ?>