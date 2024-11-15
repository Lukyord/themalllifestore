<div class="category-filter wow fadeIn">
    <div class="swiper auto clicked insufficient">
        <div class="swiper-wrapper">
            <?php
            foreach ($category_arr as $index => $category) {
            ?>
                <div class="swiper-slide">
                    <a
                        href="javascript:;"
                        class="category-item filter <?php if ($index == 0) echo "active" ?>">
                        <?php echo $category; ?>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>