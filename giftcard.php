<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-giftcard">
    <section class="banner-hero giftcard-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/giftcard-hero-banner.jpg";
            $cover_m = "./assets/img/design/giftcard-hero-banner-m.jpg";
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

        <div class="section-content">
            <div class="content-wrapper">
                <div class="empty"></div>
                <div class="marquee-wrapper wow fadeIn" data-wow-delay="0.6s">
                    <div class="marquee" data-js="liMarquee">
                        <p class="marquee-text">THE MALL GROUP GIFT VOUCHER</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="giftcard-info">
        <div class="info-section" id="info-section-1">
            <div class="content-wrapper">
                <h3 class="title wow fadeIn">บัตรกำนัล (แบบไม่มีเงื่อนไข)</h3>
                <div class="image wow fadeIn">
                    <img src="./assets/img/design/no-condition-card.png" alt="Card Image">
                </div>
                <div class="entry-content entry-fadeIn">
                    <p>เงื่อนไขการใช้บัตร</p>
                    <ul>
                        <li>บัตรนี้ออกโดย บริษัท เดอะมอลล์ กรุ๊ป จำกัด (“บริษัท”)</li>
                        <li>บัตรนี้ใช้ชำระค่าสินค้าที่ห้างสรรพสินค้าและ Gourmet Market ภายในเดอะมอลล์ไลฟ์สโตร์ กรุงเทพฯ ทุกสาขา เท่านั้น</li>
                        <li>บัตรนี้ไม่สามารถใช้ชำระสินค้าประเภท บัตรกำนัล บัตรของขวัญ บัตรเติมเงินทุกประเภท และสินค้าในร้านค้าเช่า</li>
                        <li>บัตรนี้สามารถใช้คู่กับบัตรสมาชิกของห้างฯ เพื่อรับส่วนลดสูงสุด 10% เมื่อซื้อสินค้าราคาปกติที่ห้างสรรพสินค้า และส่วนลด 5% ที่ Gourmet Market (ยกเว้นสินค้าที่กฎหมายห้ามจัดรายการส่งเสริมการขายหรือให้ส่วนลด ซึ่งบังคับใช้อยู่ในปัจจุบันหรืออาจจะมีขึ้นในอนาคต)</li>
                        <li>บัตรนี้มีอายุ 6 ปี นับจากวันที่จำหน่าย</li>
                        <li>บัตรนี้ไม่สามารถเปลี่ยน ทอน หรือคืนเป็นเงินสดได้ ไม่ว่ากรณีใดๆ</li>
                        <li>กรณีบัตรหายหรือชำรุด บริษัทจะไม่รับผิดชอบ หรือชดเชยความเสียหายดังกล่าว</li>
                        <li>บริษัทขอสงวนสิทธิ์การรับคืนบัตรกำนัลที่ซื้อแล้ว หรือการยกเลิกบัตรกำนัล หรือการเปลี่ยนแปลงเงื่อนไข โดยไม่แจ้งให้ทราบล่วงหน้า</li>
                        <li>สอบถามรายละเอียดเพิ่มเติมได้ที่แผนกลูกค้าสัมพันธ์ ณ เดอะมอลล์ไลฟ์สโตร์ สาขาที่ร่วมรับบัตรกำนัล</li>
                    </ul>
                </div>
            </div>
            <a
                href="javascript:;"
                data-shown="SHOW LESS"
                data-hidden="SHOW MORE"
                class="toggle-show hidden-device-md"></a>
        </div>

        <div class="info-section bg-black">
            <div class="content-wrapper">
                <h3 class="title wow fadeIn">บัตรกำนัล (แบบมีเงื่อนไข)</h3>
                <div class="image wow fadeIn">
                    <img src="./assets/img/design/condition-card.png" alt="Card Image">
                </div>
                <div class="entry-content entry-fadeIn c-white">
                    <p>เงื่อนไขการใช้บัตร</p>
                    <ul>
                        <li>บัตรนี้ออกโดย บริษัท เดอะมอลล์ กรุ๊ป จำกัด (“บริษัท”)</li>
                        <li>บัตรนี้ใช้ชำระค่าสินค้าที่ห้างสรรพสินค้าและ Gourmet Market ภายในเดอะมอลล์ไลฟ์สโตร์ กรุงเทพฯ ทุกสาขา เท่านั้น</li>
                        <li>บัตรนี้ไม่สามารถใช้ชำระสินค้าประเภท บัตรกำนัล บัตรของขวัญ บัตรเติมเงินทุกประเภท และสินค้าในร้านค้าเช่า</li>
                        <li>บัตรนี้สามารถใช้คู่กับบัตรสมาชิกของห้างฯ เพื่อรับส่วนลดสูงสุด 10% เมื่อซื้อสินค้าราคาปกติที่ห้างสรรพสินค้า และส่วนลด 5% ที่ Gourmet Market (ยกเว้นสินค้าที่กฎหมายห้ามจัดรายการส่งเสริมการขายหรือให้ส่วนลด ซึ่งบังคับใช้อยู่ในปัจจุบันหรืออาจจะมีขึ้นในอนาคต)</li>
                        <li>บัตรนี้มีอายุ 6 ปี นับจากวันที่จำหน่าย</li>
                        <li>บัตรนี้ไม่สามารถเปลี่ยน ทอน หรือคืนเป็นเงินสดได้ ไม่ว่ากรณีใดๆ</li>
                        <li>กรณีบัตรหายหรือชำรุด บริษัทจะไม่รับผิดชอบ หรือชดเชยความเสียหายดังกล่าว</li>
                        <li>บริษัทขอสงวนสิทธิ์การรับคืนบัตรกำนัลที่ซื้อแล้ว หรือการยกเลิกบัตรกำนัล หรือการเปลี่ยนแปลงเงื่อนไข โดยไม่แจ้งให้ทราบล่วงหน้า</li>
                        <li>สอบถามรายละเอียดเพิ่มเติมได้ที่แผนกลูกค้าสัมพันธ์ ณ เดอะมอลล์ไลฟ์สโตร์ สาขาที่ร่วมรับบัตรกำนัล</li>
                    </ul>
                </div>
            </div>
            <a
                href="javascript:;"
                data-shown="SHOW LESS"
                data-hidden="SHOW MORE"
                class="toggle-show hidden-device-md"></a>
        </div>

    </section>

    <section class="giftcard-buy bg-white">
        <div class="wrapper wrapper-content">
            <div class="topic">
                <h4 class="topic-title wow fadeIn">โปรโมชั่นพิเศษ</h4>
                <p class="wow fadeIn">รับเพิ่มส่วนแถม 3% เมื่อสั่งซื้อบัตรกำนัลห้างฯ ตั้งแต่ 200,000 บาทขึ้นไป / ใบเสร็จรับเงิน โดยบัตรกำนัลห้างฯ ที่ได้รับทั้งจำนวน (ส่วนซื้อและส่วนแถม) แบบมีเงื่อนไข
                    หมายเหตุ: ยกเว้น การชำระด้วยบัตรเครดิต / บัตรเดบิต</p>
            </div>

            <div class="topic">
                <h4 class="topic-title wow fadeIn">เงื่อนไขการชำระค่าบัตรกำนัลห้างฯ</h4>
                <ol class="wow fadeIn">
                    <li>
                        <p>กรณีซื้อที่เคาน์เตอร์ประชาสัมพันธ์ของห้างฯ - เงินสด หรือบัตรเครดิตทุกธนาคาร </p>
                    </li>
                    <li>
                        <p>กรณีสั่งซื้อผ่านฝ่ายการตลาด - โอนเงินผ่านทางธนาคาร, แคชเชียร์เช็ค, เช็คสั่งจ่ายในนามบริษัท</p>
                    </li>
                </ol>
            </div>

            <div class="topic">
                <h4 class="topic-title wow fadeIn">จุดจำหน่ายบัตรกำนัลห้างฯ บริษัท เดอะมอลล์ กรุ๊ป จำกัด </h4>
                <div class="buy-locations">
                    <?php
                    $locations = [
                        [
                            "name" => "THE MALL RAMKHAMHAENG",
                            "location" => "จุด Inspector แผนก Home Fresh Mart (GF)",
                            "tel" => "02-378-7000 ต่อ 1795",
                        ],
                        [
                            "name" => "THE MALL RAMKHAMHAENG",
                            "location" => "จุด Inspector แผนก Home Fresh Mart (GF)",
                            "tel" => "02-378-7000 ต่อ 1795",
                        ],
                        [
                            "name" => "THE MALL RAMKHAMHAENG",
                            "location" => "จุด Inspector แผนก Home Fresh Mart (GF)",
                            "tel" => "02-378-7000 ต่อ 1795",
                        ],
                        [
                            "name" => "THE MALL RAMKHAMHAENG",
                            "location" => "จุด Inspector แผนก Home Fresh Mart (GF)",
                            "tel" => "02-378-7000 ต่อ 1795",
                        ],
                        [
                            "name" => "THE MALL RAMKHAMHAENG",
                            "location" => "จุด Inspector แผนก Home Fresh Mart (GF)",
                            "tel" => "02-378-7000 ต่อ 1795",
                        ],
                    ];

                    foreach ($locations as $location) {
                    ?>
                        <div class="location-item wow fadeIn">
                            <h5 class="fsw-h5 font-body"><?php echo $location["name"] ?></h5>
                            <p><?php echo $location["location"] ?></p>
                            <div class="phone">
                                <p>Phone</p>
                                <p><?php echo $location["tel"] ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="topic">
                <h4 class="topic-title wow fadeIn">สาขาที่ร่วมรับบัตรกำนัลห้างฯ บริษัทเดอะมอลล์ กรุ๊ป จำกัด</h4>
                <div class="branch-participate">
                    <?php
                    $branches = [
                        [
                            "name" => "THE MALL<br>RAMKHAMHAENG",
                            "link" => $root . "branch-single.php",
                            "image" => "./assets/img/design/giftcard-branch1.jpg",
                        ],
                        [
                            "name" => "THE MALL<br>THAPRA",
                            "link" => $root . "branch-single.php",
                            "image" => "./assets/img/design/giftcard-branch2.jpg",
                        ],
                        [
                            "name" => "THE MALL<br>NGAMWONGWAN",
                            "link" => $root . "branch-single.php",
                            "image" => "./assets/img/design/giftcard-branch3.jpg",
                        ],
                        [
                            "name" => "THE MALL<br>BANGKAE",
                            "link" => $root . "branch-single.php",
                            "image" => "./assets/img/design/giftcard-branch4.jpg",
                        ],
                        [
                            "name" => "THE MALL<br>BANGKAPI",
                            "link" => $root . "branch-single.php",
                            "image" => "./assets/img/design/giftcard-branch5.jpg",
                        ]
                    ];

                    foreach ($branches as $branch) {
                    ?>
                        <div class="branch-item wow fadeIn">
                            <a href="<?php echo $branch["link"] ?>" class="link-overlay">&nbsp;</a>
                            <div class="image">
                                <img src="<?php echo $branch["image"] ?>" alt="Participate Branch Image">
                            </div>
                            <h5 class="branch-name font-body fsw-h5"><?php echo $branch["name"] ?></h5>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>