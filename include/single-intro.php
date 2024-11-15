<div class="single-intro" <?php echo ($single_bg)?'style="background:'.$single_bg.'"':''; ?>>
    <div class="wrapper">
        <div class="grid-content grid2 wow fadeIn">
            <div class="grid-media">
                <div class="media-wrapper media1-1">
                    <img src="<?php echo $single_img; ?>" alt="">
                </div>
            </div>
            <div class="grid-context">
                <div class="singleIntro-content c-white">
                    <h3 class="fsw-h3"><?php echo $single_title; ?></h3>
                    <ul class="intro-detail">
<?php
                    foreach ($single_detail as $detail):
?>
                        <li>
                            <p class="fsw-subtitle1 fw-bold margin-bottom-3xs"><?php echo $detail['detail_title']; ?></p>
                            <h5 class="fsw-h5 fw-bold"><?php echo $detail['detail_desc']; ?></h5>
                        </li>
<?php
                    endforeach;
?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>