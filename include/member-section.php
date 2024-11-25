<section class="member-section">
    <div class="wrapper">
        <div class="section-heading a-center wow fadeIn">
            <h2 class="fsw-h2 c-white">MEMBERSHIP & PRIVILEGE</h2>
        </div>
        <div class="section-content wow fadeIn">
            <div class="swiper auto">
                <div class="swiper-wrapper">
                    <?php
                    $member_arr = array(
                        array(
                            'member_title' => 'M CARD',
                            'member_img' => './assets/img/design/member-bg1.jpg',
                            'member_url' => 'https://www.mcardmall.com/',
                        ),
                        array(
                            'member_title' => 'BANGKOK BANK M',
                            'member_img' => './assets/img/design/member-bg2.jpg',
                            'member_url' => 'https://www.bangkokbank.com/th-TH/Personal/Cards/BangkokBankM/MLegend',
                        ),
                        array(
                            'member_title' => 'GIFT CARD',
                            'member_img' => './assets/img/design/member-bg3.jpg',
                            // 'member_url' => 'https://www.themall.co.th/th/giftcard',
                            "member_url" => $root . "giftcard.php",
                        ),
                        array(
                            'member_title' => 'TOURIST PRIVILEGE',
                            'member_img' => './assets/img/design/member-bg4.jpg',
                            'member_url' => './tourist.php',
                        ),
                    );
                    foreach ($member_arr as $member):
                    ?>
                        <div class="swiper-slide">
                            <a target="_blank" href="<?php echo $member['member_url']; ?>" class="member-item">
                                <div class="media-wrapper media1-1">
                                    <img src="<?php echo $member['member_img']; ?>" alt="">
                                </div>
                                <h4 class="fsw-h4 ff-heading c-white a-center nowrap"><?php echo $member['member_title']; ?></h4>
                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>