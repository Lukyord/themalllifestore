<div class="promotion-wrapper">
    <div class="bg-obj">
        <img src="<?php echo $promo_cover; ?>" alt="">
    </div>
    <div class="promotion-cover">
        <img src="<?php echo $promo_cover; ?>" alt="">
        <h4 class="promoCover-text fsw-h4 ff-body c-white hidden-mb"><?php echo $promo_title; ?></h4>
    </div>
    <div class="promotion-container">
        <div class="promotion-heading">
            <h4 class="fsw-h4 ff-body c-white"><?php echo $promo_title; ?></h4>
            <div class="select hidden">
                <select name="" id="" class="select2 promotion-select" data-placeholder="ALL BRANCHES">
                    <option></option>
<?php
                    foreach ($promo_grid as $promo):
?>
                    <option value="<?php echo $promo['branch_id']; ?>"><?php echo $promo['branch_title']; ?></option>
<?php
                    endforeach;
?>
                </select>
            </div>
        </div>
        <div class="promotion-list" data-lenis-prevent>
<?php
            foreach ($promo_grid as $index => $promo):
?>          
            <div data-id="<?php echo $promo['branch_id']; ?>" class="promoGroup-container <?php echo ($index==0)?'active':''; ?>">
                <div class="swiper swiper-promo">
                    <div class="swiper-wrapper">
<?php
                foreach ($promo['promo_items'] as $promo_item):
?>
                    <div class="swiper-slide">
                        <a target="_blank" href="<?php echo $promo_item['promo_url']; ?>" class="promo-item">
                            <div class="media-wrapper media16-9">
                                <img src="<?php echo $promo_item['promo_img']; ?>" alt="">
                            </div>
                            <div class="promo-desc c-white margin-top-2xs ff-heading">
                                <p class="fsw-subtitle2"><?php echo $promo_item['promo_title']; ?></p>
                                <p class="fsw-body2 c-gray margin-top-3xs"><?php echo $promo_item['promo_desc']; ?></p>
                            </div>
                        </a>
                    </div>
<?php
                endforeach;
?>
                    </div>
                </div>
            </div>
<?php
            endforeach;
?>
        </div>
    </div>
</div>