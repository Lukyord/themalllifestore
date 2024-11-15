<div class="content-item blog-item wow fadeIn <?php echo "item-style" . rand(1, 1); ?>">
    <a href="<?php echo $content_item["link"] ?>" class="link-overlay">&nbsp;</a>
    <div class="media-wrapper media1-1">
        <img src="<?php echo $content_item['image']; ?>" alt="">
        <img class="hover-img" src="<?php echo $content_item['image']; ?>" alt="">
    </div>
    <div class="text-content">
        <div class="body">
            <p class="type fsw-sub2"><?php echo $content_item["type"] ?></p>
            <h5 class="item-title fsw-h5"><?php echo $content_item["title"] ?></h5>
            <?php if (isset($content_item["date"]) && $content_item["date"] !== "") { ?>
                <p class="date font-heading"><?php echo $content_item["date"] ?></p>
            <?php } ?>
            <?php if (isset($content_item["branch-available"]) && $content_item["branch-available"] !== "") { ?>
                <p class="branch-available font-heading c-theme-red"><?php echo $content_item["branch-available"] ?></p>
            <?php } ?>
            <p class="description show-md fsw-sub2"><?php echo $content_item["description"] ?></p>
        </div>
        <div class="footer <?php echo $item_config["footer"] ?> show-sm">
            <!-- Read More -->
            <a href="<?php echo $content_item["link"] ?>" class="read-more">+ อ่านต่อ</a>
            <!-- Add to Calendar -->
            <?php
            if ($item_config["add-to-calendar"]) {
                include($root . "element-add-to-calendar.php");
            } ?>
            <!-- Share -->
            <?php
            include($root . "element-share.php");
            ?>
        </div>
    </div>
</div>