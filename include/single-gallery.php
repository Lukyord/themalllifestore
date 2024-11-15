<div class="single-gallery bg-white">
    <div class="wrapper wrapper-content wow fadeIn">
        <div class="swiper auto">
            <div class="swiper-wrapper">
<?php
        foreach ($singleGallery_arr as $img):
?>
            <div class="swiper-slide">
                <div class="media-wrapper media1-1">
                    <img src="<?php echo $img; ?>" alt="">
                </div>
            </div>
<?php
        endforeach;
?>
            </div>
        </div>
    </div>
</div>