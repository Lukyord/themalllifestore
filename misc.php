<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-misc">
    <section class="misc misc-tabs">
        <div class="content-wrapper">
            <div class="tab-container toggle no-wow">
                <div class="tabs">
                    <div class="swiper auto insufficient">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#contact-us" class="tab-link backtotop">CONTACT US</a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#retail-space-solution" class="tab-link backtotop active">RETAIL SPACE SOLUTION</a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#faq" class="tab-link backtotop">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contents">
                    <!-- CONTACT US -->
                    <div id="contact-us" class="tab-content contact-us-section">
                        <h2 class="title fsw-h2">CONTACT US</h2>

                        <div class="main-content">
                            <div class="map-image">
                                <img src="./assets/img/design/branches-map.jpg" alt="Branch Map">
                            </div>

                            <div class="map-list">
                                <?php
                                $branch_map_arr = [
                                    [
                                        "name" => "THAPHRA",
                                        "address" => "129 ถ. รัชดาภิเษก แขวงบุคคโล เขตธนบุรี กรุงเทพมหานคร 10600",
                                        "phone" => "(+66)2-173-1000",
                                        "open" => "จันทร์ - อาทิตย์ 10.00 AM - 21.00 PM",
                                        "url" => "https://www.google.co.th/maps/place/%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B9%8C+%E0%B9%84%E0%B8%A5%E0%B8%9F%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%A3%E0%B9%8C+%E0%B8%87%E0%B8%B2%E0%B8%A1%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B9%8C%E0%B8%A7%E0%B8%B2%E0%B8%99/@13.8553706,100.539453,17z/data=!3m2!4b1!5s0x30e29cbb4444a1f5:0xdb78b1ee0a47610!4m6!3m5!1s0x30e29cbb43982553:0xaacc07b2dd7dbbde!8m2!3d13.8553706!4d100.5420279!16s%2Fg%2F11bzwmdncv?hl=th&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D"
                                    ],
                                    [
                                        "name" => "NGAMWONGWAN",
                                        "address" => "430 ถนน งามวงศ์วาน ตำบลบางเขน อำเภอเมืองนนทบุรี นนทบุรี 11000",
                                        "phone" => "(+66)2-173-1000",
                                        "open" => "จันทร์ - อาทิตย์ 10.00 AM - 21.00 PM",
                                        "url" => "https://www.google.co.th/maps/place/%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B9%8C+%E0%B9%84%E0%B8%A5%E0%B8%9F%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%A3%E0%B9%8C+%E0%B8%87%E0%B8%B2%E0%B8%A1%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B9%8C%E0%B8%A7%E0%B8%B2%E0%B8%99/@13.8553706,100.539453,17z/data=!3m2!4b1!5s0x30e29cbb4444a1f5:0xdb78b1ee0a47610!4m6!3m5!1s0x30e29cbb43982553:0xaacc07b2dd7dbbde!8m2!3d13.8553706!4d100.5420279!16s%2Fg%2F11bzwmdncv?hl=th&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D"
                                    ],
                                    [
                                        "name" => "BANGKAE",
                                        "address" => "518 ถ.เพชรเกษม แขวงบางแคเหนือ เขตบางแค กรุงเทพมหานคร 10160",
                                        "phone" => "(+66)2-173-1000",
                                        "open" => "จันทร์ - อาทิตย์ 10.00 AM - 21.00 PM",
                                        "url" => "https://www.google.co.th/maps/place/%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B9%8C+%E0%B9%84%E0%B8%A5%E0%B8%9F%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%A3%E0%B9%8C+%E0%B8%87%E0%B8%B2%E0%B8%A1%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B9%8C%E0%B8%A7%E0%B8%B2%E0%B8%99/@13.8553706,100.539453,17z/data=!3m2!4b1!5s0x30e29cbb4444a1f5:0xdb78b1ee0a47610!4m6!3m5!1s0x30e29cbb43982553:0xaacc07b2dd7dbbde!8m2!3d13.8553706!4d100.5420279!16s%2Fg%2F11bzwmdncv?hl=th&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D"
                                    ],
                                    [
                                        "name" => "BANGKAPI",
                                        "address" => "3522 ถ. ลาดพร้าว แขวงคลองจั่น เขตบางกะปิ กรุงเทพมหานคร 10240",
                                        "phone" => "(+66)2-173-1000",
                                        "open" => "จันทร์ - อาทิตย์ 10.00 AM - 21.00 PM",
                                        "url" => "https://www.google.co.th/maps/place/%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B9%8C+%E0%B9%84%E0%B8%A5%E0%B8%9F%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%A3%E0%B9%8C+%E0%B8%87%E0%B8%B2%E0%B8%A1%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B9%8C%E0%B8%A7%E0%B8%B2%E0%B8%99/@13.8553706,100.539453,17z/data=!3m2!4b1!5s0x30e29cbb4444a1f5:0xdb78b1ee0a47610!4m6!3m5!1s0x30e29cbb43982553:0xaacc07b2dd7dbbde!8m2!3d13.8553706!4d100.5420279!16s%2Fg%2F11bzwmdncv?hl=th&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D"
                                    ],
                                    [
                                        "name" => "KORAT",
                                        "address" => "1242/2 ถ. มิตรภาพ ตำบลในเมือง อำเภอเมืองนครราชสีมา นครราชสีมา 30000",
                                        "phone" => "(+66)2-173-1000",
                                        "open" => "จันทร์ - อาทิตย์ 10.00 AM - 21.00 PM",
                                        "url" => "https://www.google.co.th/maps/place/%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%AD%E0%B8%A5%E0%B8%A5%E0%B9%8C+%E0%B9%84%E0%B8%A5%E0%B8%9F%E0%B9%8C%E0%B8%AA%E0%B9%82%E0%B8%95%E0%B8%A3%E0%B9%8C+%E0%B8%87%E0%B8%B2%E0%B8%A1%E0%B8%A7%E0%B8%87%E0%B8%A8%E0%B9%8C%E0%B8%A7%E0%B8%B2%E0%B8%99/@13.8553706,100.539453,17z/data=!3m2!4b1!5s0x30e29cbb4444a1f5:0xdb78b1ee0a47610!4m6!3m5!1s0x30e29cbb43982553:0xaacc07b2dd7dbbde!8m2!3d13.8553706!4d100.5420279!16s%2Fg%2F11bzwmdncv?hl=th&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D"
                                    ],
                                ];

                                foreach ($branch_map_arr as $branch) {
                                ?>
                                    <div class="map-item">
                                        <div class="map">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11200.675829730526!2d-75.6876061!3d45.42609535!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce04ff4fe494ef%3A0x26bb54f60c29f6e!2sParliament+Hill!5e0!3m2!1sen!2sca!4v1528808935681" title="mock iframe"></iframe>
                                        </div>
                                        <div class="text">
                                            <h5 class="branch-name"><?php echo $branch["name"] ?></h5>

                                            <div class="info">
                                                <div class="info-item">
                                                    <h6 class="info-item-ittle">Address</h6>
                                                    <p class="info-item-content"><?php echo $branch["address"] ?></p>
                                                </div>
                                                <div class="info-item">
                                                    <h6 class="info-item-ittle">Phone</h6>
                                                    <p class="info-item-content"><?php echo $branch["phone"] ?></p>
                                                </div>
                                                <div class="info-item">
                                                    <h6 class="info-item-ittle">Open Hours</h6>
                                                    <p class="info-item-content"><?php echo $branch["open"] ?></p>
                                                </div>
                                            </div>

                                            <a href="<?php echo $branch["url"] ?>" class="map-link">GET DIRECTION</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- RETAIL SPACE -->
                    <div id="retail-space-solution" class="tab-content retail-space-section active">
                        <h2 class="title fsw-h2">RETAIL SPACE SOLUTION</h2>

                        <div class="main-content">
                            <div class="tab-container">
                                <div class="tabs show-md">
                                    <a href="#shop-rental" class="tab-link-inner active">
                                        Shop Rental
                                    </a>

                                    <a href="#promotion-area" class="tab-link-inner">
                                        Promotion Area</a>

                                    <a href="#mcc-hall" class="tab-link-inner">
                                        MCC HALL
                                    </a>

                                    <a href="#special-event" class="tab-link-inner">
                                        Special Event
                                    </a>
                                </div>
                                <div class="tabs-mobile hidden-device-md">
                                    <div class="select">
                                        <select name="" id="" class="select2 retail-space-select" data-placeholder="MCC HALL">
                                            <option value="shop-rental">Shop Rental</option>
                                            <option value="promotion-area">Promotion Area</option>
                                            <option value="mcc-hall" selected>MCC HALL</option>
                                            <option value="special-event">Special Event</option>
                                        </select>
                                    </div>
                                </div>

                                <?php
                                $tabs_arr = ["shop-rental", "promotion-area", "mcc-hall", "special-event"];

                                foreach ($tabs_arr as $index => $tab) {
                                    $tab_name = [
                                        "shop-rental" => "Shop Rental",
                                        "promotion-area" => "Promotion Area",
                                        "mcc-hall" => "MCC HALL",
                                        "special-event" => "Special Event",
                                    ];
                                ?>
                                    <div id="<?php echo $tab ?>" class="tab-content nested-tab <?php if ($index == 0) echo "active" ?>">
                                        <div class="image-banner">
                                            <img src="./assets/img/design/retail-space-banner.jpg" alt="Retail Space Banner">
                                        </div>

                                        <div class="sub-section main">
                                            <h3 class="sub-section-title fsw-h3">
                                                <?php echo $tab_name[$tab] ?>
                                            </h3>
                                            <p class="description">We offer event venues at MCC Hall for anyone interested in hosting an event. All our event spaces come with the latest technology and innovation amidst the modern decoration design to meet various needs and applications such as networking events, press conferences, exhibitions or presenting products and businesses.</p>
                                            <div class="space-grid">
                                                <?php
                                                for ($i = 0; $i < 5; $i++) {
                                                ?>
                                                    <div class="space-item">
                                                        <div class="swiper auto fade">
                                                            <div class="swiper-wrapper">
                                                                <?php
                                                                for ($j = 0; $j < 3; $j++) {
                                                                ?>
                                                                    <div class="swiper-slide">
                                                                        <div class="space-item-inner">
                                                                            <div class="image">
                                                                                <img src="./assets/img/design/retail-gallery<?php echo $i + 1 ?>.jpg" alt="Space Image">
                                                                            </div>
                                                                            <div class="text">
                                                                                <h5 class="space-name font-body">NGAMWONGWAN <?php echo $j + 1 ?></h5>
                                                                                <div class="size">
                                                                                    <p>Size : 2,800 square meters </p>
                                                                                    <p>(Pre-Function 850 square meters)</p>
                                                                                </div>
                                                                                <address>Address : 430 ถนน งามวงศ์วาน ตำบลบางเขน อำเภอเมืองนนทบุรี นนทบุรี 11000</address>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="swiper-button swiper-button-prev"></div>
                                                            <div class="swiper-button swiper-button-next"></div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>

                                        <div class="sub-section type">
                                            <h3 class="sub-section-title fsw-h4">TYPE OF RENTAL SPACE</h3>
                                            <p class="description">Expand your business to new heights with The Mall's diverse retail space options. Whether you're looking for a long-term commitment or a short-term opportunity, we have the perfect space to meet your business needs.</p>
                                            <div class="text-grid">
                                                <?php
                                                for ($i = 0; $i < 5; $i++) {
                                                ?>
                                                    <div class="text-grid-item">
                                                        <p class="item-title font-heading">Inline Shop</p>
                                                        <p class="item-content font-heading">
                                                            Ideal for established brands looking for a permanent presence within our bustling shopping centers. Enjoy high foot traffic and prime visibility to maximize your brand's exposure and sales.
                                                        </p>
                                                    </div>
                                                <?php
                                                } ?>
                                            </div>
                                        </div>

                                        <div class="sub-section form">
                                            <h3 class="sub-section-title fsw-h4">CONTACT US</h3>
                                            <p class="description">Please fill out the information below so that our sales team can contact you.</p>

                                            <form action="#outer" class="">
                                                <h5 class="fields-title weight-bold">ข้อมูลผลิตภัณฑ์หรือบริการ</h5>
                                                <div class="fields">
                                                    <div class="field wow fadeIn">
                                                        <div class="input">
                                                            <label class="label" for="fullname-<?php echo $tab ?>">ชื่อ</label>
                                                            <input type="text" name="fullname-<?php echo $tab ?>" id="fullname-<?php echo $tab ?>" autocomplete="given-name" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn">
                                                        <div class="input">
                                                            <label class="label" for="lastname-<?php echo $tab ?>">นามสกุล</label>
                                                            <input type="text" name="lastname-<?php echo $tab ?>" id="lastname-<?php echo $tab ?>" autocomplete="family-name" placeholder="">
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn">
                                                        <div class="input">
                                                            <label class="label" for="email-<?php echo $tab ?>">อีเมล์</label>
                                                            <input type="email" name="email-<?php echo $tab ?>" id="email-<?php echo $tab ?>" autocomplete="email" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn">
                                                        <div class="input">
                                                            <label class="label" for="tel-<?php echo $tab ?>">โทรศัพท์มือถือ</label>
                                                            <input type="tel" name="tel-<?php echo $tab ?>" id="tel-<?php echo $tab ?>" autocomplete="tel" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn">
                                                        <div class="input">
                                                            <label class="label" for="business-name-<?php echo $tab ?>">ชื่อแบรนด์</label>
                                                            <input type="text" name="business-name-<?php echo $tab ?>" id="business-name-<?php echo $tab ?>" autocomplete="business-name" placeholder="" required>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn">
                                                        <div class="input">
                                                            <label class="label" for="business-type-<?php echo $tab ?>">ประเภทธุรกิจ</label>
                                                            <div class="select">
                                                                <select class="select2" data-placeholder="Please select an option" name="business-type-<?php echo $tab ?>" id="business-type-<?php echo $tab ?>" required>
                                                                    <option value="Option1">นิติบุคคล</option>
                                                                    <option value="Option2">บุคคลธรรมดา</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn w-full">
                                                        <div class="input">
                                                            <label class="label" for="business-franchise-status-<?php echo $tab ?>">เป็นธุรกิจ Franchise หรือไม่</label>
                                                            <div class="select">
                                                                <select class="select2" data-placeholder="Please select an option" name="business-franchise-status-<?php echo $tab ?>" id="business-franchise-status-<?php echo $tab ?>">
                                                                    <option value="Option1">ไม่ใช่ธุรกิจ Franchise</option>
                                                                    <option value="Option2">ธุรกิจ Franchise - เป็น Franchisor/เจ้าของแบรนด์</option>
                                                                    <option value="Option3">ธุรกิจ Franchise - เป็น Franchisee/ผู้ได้รับสิทธิ์ในการดำเนินธุรกิจและใช้ชื่อแบรนด์</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn w-full">
                                                        <div class="input">
                                                            <label class="label" for="product-category-<?php echo $tab ?>">ประเภทสินค้า</label>
                                                            <div class="select">
                                                                <select class="select2 other" multiple="multiple" data-placeholder="Please select an option" name="product-category-<?php echo $tab ?>" id="product-category-<?php echo $tab ?>" required>
                                                                    <option value="Option1">Beauty & Clinic service</option>
                                                                    <option value="Option2">Education service</option>
                                                                    <option value="Option3">Entertainment</option>
                                                                    <option value="Option4">Fashion</option>
                                                                    <option value="Other">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn w-full">
                                                        <div class="input">
                                                            <label class="label" for="product-detail-<?php echo $tab ?>">รายละเอียดสินค้า</label>
                                                            <textarea name="product-detail-<?php echo $tab ?>" placeholder="รายละเอียดสินค้า และช่องการการจำหน่าย (โปรดระบุ)" id="product-detail-<?php echo $tab ?>" autocomplete="off" required></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="field wow fadeIn w-full">
                                                        <div class="input">
                                                            <label class="label" for="product-file-<?php echo $tab ?>">เอกสารนำเสนอของแบรนด์ / รูปภาพผลิตภัณฑ์/ร้านค้า</label>
                                                            <input type="file" name="product-file-<?php echo $tab ?>" id="product-file-<?php echo $tab ?>" autocomplete="product-file" placeholder="Choose file" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php if ($tab !== "special-event") { ?>
                                                    <h5 class="fields-title weight-bold">ข้อมูลการเช่าพื้นที่</h5>
                                                    <div class="fields">
                                                        <div class="field wow fadeIn">
                                                            <div class="input">
                                                                <label class="label" for="branch-select--<?php echo $tab ?>">สาขา</label>
                                                                <div class="select">
                                                                    <select class="select2" data-placeholder="Please select an option" name="branch-select--<?php echo $tab ?>" id="branch-select--<?php echo $tab ?>" required>
                                                                        <option value="Option1">ท่าพระ</option>
                                                                        <option value="Option2">งามวงศ์วาน</option>
                                                                        <option value="Option3">บางแค</option>
                                                                        <option value="Option4">บางกะปิ</option>
                                                                        <option value="Option5">โคราช</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="field wow fadeIn">
                                                            <div class="input">
                                                                <label class="label" for="size-<?php echo $tab ?>">ขนาดของพื้นที่</label>
                                                                <div class="select">
                                                                    <select class="select2" data-placeholder="Please select an option" name="size-<?php echo $tab ?>" id="size-<?php echo $tab ?>" required>
                                                                        <?php if ($tab == "shop-retail") { ?>
                                                                            <option value="Option1">1-20 square meters</option>
                                                                            <option value="Option2">Option2</option>
                                                                            <option value="Option3">Option3</option>
                                                                            <option value="Option4">Option4</option>
                                                                            <option value="Option5">Option5</option>
                                                                        <?php } elseif ($tab == "promotion-area") { ?>
                                                                            <option value="Option1">พื้นที่ใหญ่ ขนาด 200*200 เมตร</option>
                                                                            <option value="Option2">พื้นที่เล็ก ขนาดไม่เกิน 10 ตารางเมตร (FOOD)</option>
                                                                            <option value="Option3">พื้นที่เล็ก ขนาดไม่เกิน 10 ตารางเมตร (NON-FOOD)</option>
                                                                        <?php } elseif ($tab == "mcc-hall") { ?>
                                                                            <option value="Option1">1-20 square meters</option>
                                                                            <option value="Option2">Option2</option>
                                                                            <option value="Option3">Option3</option>
                                                                            <option value="Option4">Option4</option>
                                                                            <option value="Option5">Option5</option>
                                                                        <?php } else { ?>
                                                                            <option value="Option1">1-20 square meters</option>
                                                                            <option value="Option2">Option2</option>
                                                                            <option value="Option3">Option3</option>
                                                                            <option value="Option4">Option4</option>
                                                                            <option value="Option5">Option5</option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <?php if ($tab !== "promotion-area") { ?>
                                                            <div class="field wow fadeIn">
                                                                <div class="input">
                                                                    <label class="label" for="type-<?php echo $tab ?>">
                                                                        <?php if ($tab == "shop-rental") {
                                                                            echo "รูปแบบห้องเช่า";
                                                                        } elseif ($tab == "mcc-hall") {
                                                                            echo "รูปแบบการจัดงาน";
                                                                        } else {
                                                                            echo "Type Of Rental Space";
                                                                        } ?>
                                                                    </label>
                                                                    <div class="select">
                                                                        <select class="select2" data-placeholder="Please select an option" name="type-<?php echo $tab ?>" id="type-<?php echo $tab ?>" required>
                                                                            <?php if ($tab == "shop-rental") { ?>
                                                                                <option value="Option1">ห้องเช่าแฟชั่น</option>
                                                                                <option value="Option2">ห้องเช่าคลินิก</option>
                                                                                <option value="Option3">ห้องเช่าร้านอาหาร</option>
                                                                                <option value="Option4">ร้านค้าชั่วคราวหรืออื่นๆ</option>
                                                                            <?php } elseif ($tab == "mcc-hall") { ?>
                                                                                <option value="Option1">งานสัตว์เลี้ยง</option>
                                                                                <option value="Option2">งานอาหารหาร</option>
                                                                                <option value="Option3">งานประกาศรางวัล</option>
                                                                                <option value="Option4">งานจัดแสดงสินค้า</option>
                                                                                <option value="Option5">งานคอนเสิร์ต</option>
                                                                            <?php } else { ?>
                                                                                <option value="Option1">Inline Shop</option>
                                                                                <option value="Option2">Option2</option>
                                                                                <option value="Option3">Option3</option>
                                                                                <option value="Option4">Option4</option>
                                                                                <option value="Option5">Option5</option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <?php if ($tab !== "promotion-area") { ?>
                                                            <div class="field wow fadeIn">
                                                                <div class="input">
                                                                    <label class="label" for="duration-<?php echo $tab ?>">ระยะเวลาการเช่า</label>
                                                                    <div class="select">
                                                                        <select class="select2" data-placeholder="Please select an option" name="duration-<?php echo $tab ?>" id="duration-<?php echo $tab ?>" required>
                                                                            <?php if ($tab == "shop-rental") { ?>
                                                                                <option value="Option1">3 เดือน</option>
                                                                                <option value="Option2">6 เดือน</option>
                                                                                <option value="Option3">1 ปี</option>
                                                                                <option value="Option4">3 ปีขึ้นไป</option>
                                                                            <?php } elseif ($tab == "mcc-hall") { ?>
                                                                                <option value="Option1">3 เดือน</option>
                                                                                <option value="Option2">6 เดือน</option>
                                                                                <option value="Option3">1 ปี</option>
                                                                                <option value="Option4">3 ปีขึ้นไป</option>
                                                                            <?php } else { ?>
                                                                                <option value="Option1">1 month</option>
                                                                                <option value="Option2">Option2</option>
                                                                                <option value="Option3">Option3</option>
                                                                                <option value="Option4">Option4</option>
                                                                                <option value="Option5">Option5</option>
                                                                            <?php } ?>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } ?>

                                                        <div class="field wow fadeIn">
                                                            <div class="input">
                                                                <label class="label" for="start-date-<?php echo $tab ?>">เดือนที่เริ่มเช่า</label>
                                                                <input type="month" name="start-date-<?php echo $tab ?>" id="start-date-<?php echo $tab ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>


                                                <div class="form-footer">
                                                    <div class="input checkbox border-none">
                                                        <input type="checkbox" name="terms" id="terms" autocomplete="off" class="checkbox" required>

                                                        <label class="label size-subtitle1" for="terms">
                                                            I have read and accept all the terms specified in the Privacy Policy and consent to the collection, use,
                                                            and disclosure of my personal information for the purposes stated above. <a href="<?php echo $root ?>privacy.php">Privacy Policy</a>
                                                        </label>
                                                    </div>

                                                    <button type="submit" class="button light-bg">SUBMIT</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ -->
                    <div id="faq" class="tab-content faq-section">
                        <div class="header">
                            <h2 class="title fsw-h2">FAQ</h2>
                            <?php
                            include($root . "include/element-branch-select.php");
                            ?>
                        </div>

                        <div class="main-content">
                            <?php
                            $faq_arr = [
                                "all" => [
                                    [
                                        "question" => "เวลาเปิดปิดของห้าง",
                                        "answer" => "<p>วันอาทิตย์ - วันพฤหัสบดี เปิด 10.00-21.00 น.
                                                    <br>วันศุกร์ เสาร์ และวันหยุกนักขัตฤกษ์ 10.00 - 22.00 น.
                                                    <br>กูร์เมต์ มาร์เก็ต 10.00 - 22.00 น.</p>"
                                    ],
                                    [
                                        "question" => "ราคาที่จอดรถ",
                                        "answer" => "<p>จอดฟรี 2 ชั่วโมงแรก หลังจากนั้น 20</p>"
                                    ],
                                    [
                                        "question" => "ต้องซื้อของครบเท่าไหร่ถึงจะจอดฟรี",
                                        "answer" => "<p>ไม่จำกัด</p>"
                                    ],
                                    [
                                        "question" => "ราคาที่จอดรถมอเตอร์ไซต์",
                                        "answer" => "<p>จอดฟรี 2 ชั่วโมงแรก หลังจากนั้น 20</p>"
                                    ],
                                    [
                                        "question" => "เบอร์ติดต่อของแต่ละสาขา",
                                        "answer" => "<p>เบอร์ติดต่อของแต่ละสาขา</p>"
                                    ],
                                    [
                                        "question" => "สามารถนำสัตว์เลี้ยงมาได้หรือไม่ และมีข้อปฎิบัติอย่างไรบ้าง",
                                        "answer" => "<p>สามารถนำสัตว์เลี้ยงเข้ามาได้ แต่ต้องใช้สายจูง และต้องทำความสะอาดหลังจากนำสัตว์เลี้ยงออก</p>"
                                    ],
                                    [
                                        "question" => "หากทีเรื่องร้องเรียนสามารถแจ้งได้ที่ไหน",
                                        "answer" => "<p>สามารถแจ้งเรื่องร้องเรียนได้ที่หน้างานของเจ้าหน้าที่หรือที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                    [
                                        "question" => "สามารถนำสัตว์เลี้ยงมาได้หรือไม่ และมีข้อปฎิบัติอย่างไรบ้าง",
                                        "answer" => "<p>สามารถนำสัตว์เลี้ยงเข้ามาได้ แต่ต้องใช้สายจูง และต้องทำความสะอาดหลังจากนำสัตว์เลี้ยงออก</p>"
                                    ],
                                    [
                                        "question" => "ต้องการเช่าพื้นที่ในศูนย์การค้าติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                    [
                                        "question" => "สนใจออกงานอาหารกับเดอะมอลล์กรุ๊ปติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                    [
                                        "question" => "สนใจเช่าพื้นที่ MMC HALL ติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],

                                ],
                                "bangkae" => [
                                    [
                                        "question" => "เวลาเปิดปิดของห้าง",
                                        "answer" => "<p>วันอาทิตย์ - วันพฤหัสบดี เปิด 10.00-21.00 น.
                                                    <br>วันศุกร์ เสาร์ และวันหยุกนักขัตฤกษ์ 10.00 - 22.00 น.
                                                    <br>กูร์เมต์ มาร์เก็ต 10.00 - 22.00 น.</p>"
                                    ],
                                ],
                                "bangkapi" => [
                                    [
                                        "question" => "ต้องการเช่าพื้นที่ในศูนย์การค้าติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                    [
                                        "question" => "สนใจออกงานอาหารกับเดอะมอลล์กรุ๊ปติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                ],
                                "ngamwongwan" => [
                                    [
                                        "question" => "ต้องการเช่าพื้นที่ในศูนย์การค้าติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                    [
                                        "question" => "สนใจออกงานอาหารกับเดอะมอลล์กรุ๊ปติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                    [
                                        "question" => "สนใจเช่าพื้นที่ MMC HALL ติดต่อที่ไหน",
                                        "answer" => "<p>ติดต่อที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],

                                ],
                                "thaphra" => [
                                    [
                                        "question" => "เบอร์ติดต่อของแต่ละสาขา",
                                        "answer" => "<p>เบอร์ติดต่อของแต่ละสาขา</p>"
                                    ],
                                    [
                                        "question" => "สามารถนำสัตว์เลี้ยงมาได้หรือไม่ และมีข้อปฎิบัติอย่างไรบ้าง",
                                        "answer" => "<p>สามารถนำสัตว์เลี้ยงเข้ามาได้ แต่ต้องใช้สายจูง และต้องทำความสะอาดหลังจากนำสัตว์เลี้ยงออก</p>"
                                    ],
                                ],
                                "korat" => [
                                    [
                                        "question" => "หากทีเรื่องร้องเรียนสามารถแจ้งได้ที่ไหน",
                                        "answer" => "<p>สามารถแจ้งเรื่องร้องเรียนได้ที่หน้างานของเจ้าหน้าที่หรือที่หน้างานของศูนย์บริการลูกค้า</p>"
                                    ],
                                ],
                            ];

                            foreach ($faq_arr as $branch_id => $data) {
                                $first_index = array_key_first($branch_arr);
                            ?>
                                <div
                                    id="<?php echo $branch_id ?>"
                                    class="tab-content nested-tab <?php echo $branch_id === $first_index ? 'active' : ''; ?>">
                                    <div class="accordion-container trigger-first">
                                        <?php
                                        foreach ($data as $faq) {
                                        ?>
                                            <div class="accordion">
                                                <h3 class="entry-title"><?php echo $faq["question"] ?></h3>
                                                <div class="entry-panel">
                                                    <div class="entry-content">
                                                        <?php echo $faq["answer"] ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>