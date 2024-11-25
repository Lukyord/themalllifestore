<div class="service-item wow fadeIn">
    <div class="background-image">
        <img src="<?php echo $service["image"] ?>" alt="Service Image">
    </div>

    <div class="content">
        <div class="header">
            <h5 class="title"><?php echo $service_item["title"] ?></h5>
            <p class="subtitle"><?php echo $service_item["branch"] ?></p>
        </div>

        <div class="list">
            <?php
            foreach ($service["item"] as $item) {
            ?>
                <div class="list-item">
                    <div class="name-and-branch">
                        <h6><?php echo $item["name"] ?></h6>
                        <p><?php echo $item["branch"] ?></p>
                    </div>

                    <p><?php echo $item["floor"] ?></p>

                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>