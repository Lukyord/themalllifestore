<div class="update-section bg-white">
    <div class="wrapper">
        <div class="section-heading a-center margin-bottom-lg wow fadeIn">
            <h2 class="fsw-h2 c-theme-red margin-bottom-xs"><?php echo $update_title; ?></h2>

            <?php
            include($root . "element-branch-select.php");
            ?>
        </div>
        <?php
        foreach ($update_arr as $branch_id => $data) {
            $first_index = array_key_first($update_arr);
        ?>
            <div
                id="<?php echo $branch_id ?>"
                class="tab-content section-content wow fadeIn <?php echo $branch_id === $first_index ? 'active' : ''; ?>">
                <div class="swiper swiper-update">
                    <div class="swiper-nav">
                        <button class="swiper-button swiper-button-prev"></button>
                        <button class="swiper-button swiper-button-next"></button>
                    </div>
                    <div class="swiper-wrapper">
                        <?php
                        foreach ($data as $update):
                        ?>
                            <div class="swiper-slide">
                                <a href="<?php echo $root; ?>template-single.php" class="blog-item <?php echo "item-style" . rand(1, 4); ?>">
                                    <div class="media-wrapper media1-1">
                                        <img src="<?php echo $update['update_img_hover']; ?>" alt="">
                                        <img class="hover-img" src="<?php echo $update['update_img']; ?>" alt="">
                                    </div>
                                </a>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>