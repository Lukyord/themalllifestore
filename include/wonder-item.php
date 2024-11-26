<div class="slide-container">
    <img class="slide-obj hidden-mb" src="<?php echo $slide['slide_obj']; ?>" alt="">
    <div class="bg-obj">
        <picture>
            <source media="(min-width:768px)" srcset="<?php echo $slide['slide_bg']; ?>">
            <source media="(min-width:0px)" srcset="<?php echo $slide['slide_bg_mb']; ?>">
            <img src="<?php echo $slide['slide_bg']; ?>" alt="">
        </picture>
    </div>
    <div class="slide-content">
        <p class="fsw-subtitle c-white"><?php echo $slide['slide_subtitle']; ?></p>
        <a href="<?php echo $slide['slide_link']; ?>">
            <h3 class="fsw-h3 c-white"><?php echo $slide['slide_title']; ?></h3>
        </a>
        <h5 class="c-white ff-heading fsw-h5"><?php echo $slide['slide_desc']; ?></h5>
        <div class="slide-brand">
            <p class="fsw-subtitle2 c-white margin-bottom-md hidden-mb">Related Brands</p>
            <div class="logo-marquee-container">
                <div class="logo-marquee">
                    <div class="logo-row">
                        <?php
                        foreach ($slide['slide_logo'] as $logo):
                        ?>
                            <div class="logo-image">
                                <img class="slide-logo" src="<?php echo $logo; ?>" alt="">
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>