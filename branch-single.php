<?php $root = ""; ?>

<?php include($root . "header.php"); ?>

<main id="main" class="page-main page-branch-single">
    <section class="banner-hero center branch-single-hero">
        <div class="background-image">
            <?php
            $cover = "./assets/img/design/branch-single-hero-image.jpg";
            $cover_m = "./assets/img/design/branch-single-hero-image-m.jpg";
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
            <div class="content-wrapper padding-x">
                <div class="content">
                    <h1 class="title fsw-h2 c-white">
                        THE MALL LIFESTORE
                        <br>BANGKAPI
                    </h1>
                    <address>
                        <p class="c-white">3522 ถ. ลาดพร้าว แขวงคลองจั่น เขตบางกะปิ กรุงเทพมหานคร 10240</p>
                    </address>
                    <div class="cta-buttons">
                        <a href="#get-direction" class="banner-button">
                            <i class="ic ic-carbon_map"></i>
                            <span>Get direction</span>
                        </a>

                        <a href="tel:+6621731000" class="banner-button">
                            <i class="ic ic-call"></i>
                            <span>Call : 021731000</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="parallax-sticky" id="introduction">
        <div class="page-nav">
            <div class="swiper auto insufficient">
                <div class="swiper-wrapper">
                    <?php
                    $navs_arr = ["introduction", "plan-your-visit", "directory", "latest-promotions"];

                    foreach ($navs_arr as $nav) {
                        $nav_label = str_replace("-", " ", $nav);
                    ?>
                        <div class="swiper-slide">
                            <a href="#<?php echo $nav ?>" class="page-nav-link link-scroll">
                                <?php echo $nav_label ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="sticky">
            <div class="text">
                <h2 class="fsw-h2 c-theme-red">BANGKAPI</h2>
                <h3 class="fsw-h3 font-body">THE WONDER OF THE EAST</h3>
                <p>Year-round happening event and activation at our spacious event space and mcc hall Year-round happening event and activation at our spacious event space and mcc hall Year-round happening event and activation at our spacious event space and mcc hall</p>
            </div>


            <div class="parallax rellax image-1" data-rellax-speed="-0.2">
                <img src="./assets/img/design/branch-single-parallax1.jpg" alt="">
            </div>
            <div class="parallax rellax image-2" data-rellax-speed="-0.5">
                <img src="./assets/img/design/branch-single-parallax2.jpg" alt="">
            </div>
            <div class="parallax rellax image-3" data-rellax-speed="-0.75">
                <img src="./assets/img/design/branch-single-parallax3.jpg" alt="">
            </div>
            <div class="parallax rellax image-4" data-rellax-speed="-0.25">
                <img src="./assets/img/design/branch-single-parallax4.jpg" alt="">
            </div>
            <div class="parallax rellax image-5" data-rellax-speed="0.25">
                <img src="./assets/img/design/branch-single-parallax5.jpg" alt="">
            </div>
            <div class="parallax rellax image-6" data-rellax-speed="-0.25">
                <img src="./assets/img/design/branch-single-parallax6.jpg" alt="">
            </div>

        </div>
    </section>

    <?php
    $slide = [
        // "pc" => './assets/vdo/development-intercontinental6.mp4',
        "pc" => "./assets/img/design/branch-single-slide-banner-image.jpg",
        "mobile" => "./assets/img/design/branch-single-slide-banner-image-m.jpg"
    ];
    $hero_slide_images = array_fill(0, 5, $slide);


    include($root . "include/template-banner-slide.php");
    ?>

    <section class="branch-single-hour" id="plan-your-visit">
        <div class="time">
            <div class="time-content">
                <h3 class="title fsw-h3 font-body c-theme-red">OPENING HOURS</h3>
                <div class="time-table">
                    <h5 class="subheading c-theme-red">Department</h5>
                    <ul>
                        <li>
                            <p>Monday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Tuesday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Wednesday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Thursday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Friday</p>
                            <p>10am - 9pm</p>
                        </li>
                        <li>
                            <p>Saturday</p>
                            <p>10am - 10pm</p>
                        </li>
                        <li>
                            <p>Sunday</p>
                            <p>10am - 10pm</p>
                        </li>
                    </ul>

                    <h5 class="subheading c-theme-red">Gourmet Market</h5>
                    <ul>
                        <li>
                            <p>Everyday</p>
                            <p>10am-10pm</p>
                        </li>
                    </ul>
                </div>
                <a href="tel:+6621731000" class="banner-button large">
                    <i class="ic ic-call"></i>
                    <span>THE MALL LIFESTORE BANGKAPI</span>
                </a>
            </div>
        </div>
        <div class="text-slides">
            <div class="swiper auto fade">
                <div class="swiper-wrapper">
                    <?php
                    $slide = [
                        "pc" => "./assets/img/design/front-door.jpg",
                        "mobile" => "./assets/img/design/front-door-m.jpg",
                        "title" => "Front Door",
                        "description" => "a utopia where furry friends roam freely through lush landscapes, enjoying gourmet treats and tailored play areas. This haven is a symphony of joy, with pampering spas and cozy nooks ensuring every pet's happiness. Welcome to a sanctuary where tails wag, feathers flutter, and pure bliss abounds!"
                    ];
                    $slides = array_fill(0, 5, $slide);

                    foreach ($slides as $slide) {
                    ?>
                        <div class="swiper-slide">
                            <div class="content-wrapper">
                                <div class="image">
                                    <?php
                                    $cover = $slide["pc"];
                                    $cover_m = $slide["mobile"];
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
                                                alt="Slide Image"
                                                draggable="false">
                                        </picture>
                                    <?php } ?>
                                </div>

                                <div class="text show-md">
                                    <h4 class="title fsw-h4 font-body"><?php echo $slide["title"] ?></h4>
                                    <p class="description"><?php echo $slide["description"] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <button class="swiper-button swiper-button-prev"></button>
                <button class="swiper-button swiper-button-next"></button>
            </div>
        </div>
    </section>

    <section class="directory-section" id="directory">
        <div class="wrapper wrapper-content">
            <div class="section-heading a-center margin-bottom-md wow fadeIn">
                <h2 class="fsw-h2 c-white">DIRECTORY</h2>
            </div>
            <div class="section-content wow fadeIn">
                <div class="grid-content grid-directory">
                    <?php
                    $directory_arr = [
                        array(
                            'branch_id'     => 'bangkapi',
                            'branch_name'     => 'BANGKAPI',
                            'branch_floor'    => array(
                                array(
                                    'floor_id' => 'gfloor',
                                    'floor_name' => 'G FLOOR',
                                    'floor_img' => './assets/img/design/branch2-floor1.jpg',
                                    'floor_store' => array(
                                        array(
                                            'store_group' => 'DINING',
                                            'store_list' => array(
                                                'BONCHON',
                                                'CAFÉ AMAZON',
                                                'CHESTER\'S',
                                                'FARMERIES & YENLYYOURS ',
                                                'HOKKAIDO BAKED CHEESE TART',
                                                'KFC',
                                                'KOI THE\'',
                                                'MCDONALD\'S',
                                                'MOM\'S TOUCH',
                                                'MOS BURGER',
                                                'ONE TO TWO ',
                                                'PACAMARA COFFEE ROASTERS',
                                                'PARIS MIKKI X WWA',
                                                'SECRET RECIPE ',
                                                'STARBUCKS ',
                                                'SWENSEN\'S',
                                                'WOO GOGI',
                                                'XING FU TANG',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'FASHION & ACCESSORIES',
                                            'store_list' => array(
                                                'A\'MAZE',
                                                'ANELLO',
                                                'CITY CHAIN',
                                                'CLASSY',
                                                'HLA CONCEPT STORE ',
                                                'LISM',
                                                'ON CAT',
                                                'SARIN',
                                                'SOS - SENSE OF STYLE ',
                                                'THIRTY LOVE',
                                                'URTHE',
                                                'VNC',
                                                'YUEDPAO',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'OPTICAL',
                                            'store_list' => array(
                                                'EYELAB EXCLUSIVE',
                                                'INFINITE EYEWEAR',
                                                'MISTER EYE',
                                                'O.W.L.',
                                                'SEVEN DAYS',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'SKINCARE & COSMETIC',
                                            'store_list' => array(
                                                'BOTANIFIQUE',
                                                'CUTE PRESS',
                                                'EVEANDBOY',
                                                'FIRST AID KISS HOUSE OF SCENTS',
                                                'GNC',
                                                'KIKO MILANO',
                                                'LAVELIER',
                                                'ORIENTAL PRINCESS',
                                                'THE FACE SHOP',
                                                'YVES ROCHER',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'LIFESTYLE',
                                            'store_list' => array(
                                                'BOOTS',
                                                'HEALTH PLUS',
                                                'MATSUKIYO',
                                                'PHUTAWAN ',
                                                'SE-ED BOOK CENTER',
                                                'WATSONS',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'KEY ANCHOR',
                                            'store_list' => array(
                                                'DON DON DONKI',
                                                'MUJI',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'IT & SERVICE',
                                            'store_list' => array(
                                                'BB BEYOND D-BOX',
                                                'LC LIFE GADGET',
                                                'STUDIO 7',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'GOLD & JEWELRY',
                                            'store_list' => array(
                                                'AURORA',
                                                'KHONGKWAN BY AURORA',
                                                'MENG HENG LEE GOLD',
                                                'PETCH BUALUANG',
                                                'SENG HENG',
                                                'SSNP GOLD',
                                                'SUPORN GEMS',
                                                'TAE SENG HENG',
                                                'UNG HENG LEE',
                                                'WATCHARIN GOLD',
                                                'YAOWARACH GOLD ',
                                                'SANG CHAROEN YAOWARAT',
                                                'DIAMOND 91',
                                                'GALA DIAMOND',
                                                'JUBILEE DIAMOND',
                                                'MARRY GEMS',
                                                'PARIN GEMS',
                                                'PETCH THAI',
                                                'REGENT DIAMOND ',
                                                'ROSE JEWELRY',
                                                'VIJITTRA\’S JEWELLERY',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'floor_id' => 'mfloor',
                                    'floor_name' => 'M FLOOR',
                                    'floor_img' => './assets/img/design/branch2-floor2.jpg',
                                    'floor_store' => array(
                                        array(
                                            'store_group' => 'DINING',
                                            'store_list' => array(
                                                'CATH KIDSTON TEA ROOM',
                                                'FAM TIME STEAK AND PASTA',
                                                'KOI THE\'',
                                                'MINI ORIENTAL SPEEDBAR',
                                                'SUNDUBUBU & MIL TOAST EXPRESS',
                                                'STARBUCKS ',
                                                'TWIN MADE',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'FASHION & ACCESSORIES',
                                            'store_list' => array(
                                                'ALDO',
                                                'BIRKENSTOCK',
                                                'CATH KIDSTON',
                                                'CC DOUBLE O',
                                                'CHARLES & KEITH',
                                                'CPS CHAPS',
                                                'FITFLOP',
                                                'GENTLEWOMAN',
                                                'H&M ',
                                                'JASPAL',
                                                'JELLY BUNNY',
                                                'KOMEHYO',
                                                'LYN',
                                                'LYN  AROUND',
                                                'MANGO',
                                                'MISTY MYNX',
                                                'PANDORA',
                                                'PLAYBOY',
                                                'ROMEO AND JULIETA\'S',
                                                'STEVE MADDEN',
                                                'UNIQLO',
                                                'URBAN REVIVO',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'OPTICAL',
                                            'store_list' => array(
                                                'THE NEXT',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'SKINCARE & COSMETIC',
                                            'store_list' => array(
                                                'BATH & BODY WORKS',
                                                'BEAUTY BUFFET',
                                                'HARNN',
                                                'KONVY',
                                                'LALIL',
                                                'LAVELIER',
                                                'VICTORIA\'S SECRET',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'BEAUTY CLINIC',
                                            'store_list' => array(
                                                'APEX',
                                                'DALA ROSE CLINIC',
                                                'L.A.B.X',
                                                'LIENJANG CLINIC',
                                                'MAKALIN CLINIC',
                                                'ROMRAWIN CLINIC',
                                                'SLC CLINIC',
                                                'THE KLINIQUE',
                                                'URANUS CLINIC',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'BEAUTY SERVICE',
                                            'store_list' => array(
                                                'CUT & CURL',
                                                'NGAM TA',
                                                'SAYLEB STUDIO',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'SERVICE',
                                            'store_list' => array(
                                                'ASA SHOE & KEY REPAIR',
                                                'POLI-CHEM',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'floor_id' => '1floor',
                                    'floor_name' => '1 FLOOR',
                                    'floor_img' => './assets/img/design/branch2-floor3.jpg',
                                    'floor_store' => array(
                                        array(
                                            'store_group' => 'DINING',
                                            'store_list' => array(
                                                'BEARHOUSE',
                                                'CHATIME ',
                                                'COTTI COFFEE',
                                                'DUNKIN\' ',
                                                'INTHANIN',
                                                'NOSE TEA',
                                                'WISDOM INTERNATIONAL BUFFET',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'FASHION & ACCESSORIES',
                                            'store_list' => array(
                                                '4F',
                                                '7th STREET',
                                                'ALBERDO',
                                                'BATA',
                                                'BODY GLOVE',
                                                'DOUBLE GOOSE',
                                                'FREAK',
                                                'GIORDANO',
                                                'GQ',
                                                'H.H',
                                                'HAVAIANAS',
                                                'HYBRID OUTFITTERS',
                                                'KAMIMURA',
                                                'KHAKI BROS',
                                                'MC JEANS',
                                                'PAUL FRANK',
                                                'POLIGAN',
                                                'SUITCUBE',
                                                'TAYWIN ORIGINAL STYLE',
                                                'VACRAZY',
                                                'VANS',
                                                'WALKING HABIT',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'OPTICAL',
                                            'store_list' => array(
                                                'BETTER VISION',
                                                'GOLDEN OPTIC',
                                                'OPTICAL 88',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'SPORTS',
                                            'store_list' => array(
                                                '24 KILATES BANGKOK',
                                                'ADIDAS',
                                                'ARI FOOTBALL',
                                                'CONVERSE ',
                                                'CROCS',
                                                'DICKIES',
                                                'FAIRTEX',
                                                'FOOT LOCKER',
                                                'FOOTGEAR',
                                                'NEW BALANCE',
                                                'NYLA',
                                                'PUMA ',
                                                'REV RUNNR',
                                                'ROOKIE USA',
                                                'SKECHERS TH',
                                                'THE NORTH FACE',
                                                'WAKING BEE',
                                                'WARRIX',
                                                'XOLO',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'BEAUTY CLINIC',
                                            'store_list' => array(
                                                'CENTER DE\' BEAUTE',
                                                'DOCTOR LIFE',
                                                'GRANEDA',
                                                'NITIPON CLINIC',
                                                'PAN CLINIC',
                                                'PORNKASEM CLINIC',
                                                'RAJDHEVEE CLINIC',
                                                'SPARSHA',
                                                'TALISA CLINIC',
                                                'THE VENISIA CLINIC',
                                                'V SQUARE CLINIC',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'BEAUTY SERVICE',
                                            'store_list' => array(
                                                'CE-LEB SALON',
                                                'GLAM AND GLOW SALON',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'LIFESTYLE',
                                            'store_list' => array(
                                                'WATSONS',
                                                '555 PAPERPLUS',
                                                'DAISO',
                                                'H.Q.LUGGAGE',
                                                'MOSHI MOSHI',
                                                'THE TRAVEL STORE',
                                                'YAAKZ SHOP',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'KEY ANCHOR',
                                            'store_list' => array(
                                                'NITORI',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'IT & SERVICE',
                                            'store_list' => array(
                                                'FOTOFILE',
                                                'SARAMONIC',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'SERVICE',
                                            'store_list' => array(
                                                'BAANPAI MY PRINTING',
                                                'Parcel We Ship',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'floor_id' => '2floor',
                                    'floor_name' => '2 FLOOR',
                                    'floor_img' => './assets/img/design/branch2-floor4.jpg',
                                    'floor_store' => array(
                                        array(
                                            'store_group' => 'DINING',
                                            'store_list' => array(
                                                'CAFÉ AMAZON',
                                                'FUNKY FRIES',
                                                'HAKAO ON CRAFT',
                                                'MIXUE ',
                                                'SUSHIRO',
                                                'THE ALLEY',
                                                'YODCHA',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'LIFESTYLE',
                                            'store_list' => array(
                                                'COWAY',
                                                'LUNIO',
                                                'ERGOTREND',
                                                'LEECO',
                                                'MINISO',
                                                'MR. D.I.Y.',
                                                'MUSIC COLLECTION',
                                                'TOTAL',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'IT & ELECTRONICS',
                                            'store_list' => array(
                                                'AIS',
                                                'AIS PARTNER',
                                                'BANANA ',
                                                'BEBE PHONE',
                                                'BIG CAMERA',
                                                'CASE TOWN',
                                                'COMCOM',
                                                'DOTLIFE',
                                                'EC MALL ',
                                                'GARMIN',
                                                'HONOR BY COM 7',
                                                'HP FLAGSHIP STORE',
                                                'I CARE',
                                                'I SEE T GADGET',
                                                'IT CITY + CSC',
                                                'J I B',
                                                'JAYMART IOT',
                                                'OPPO ',
                                                'PICO',
                                                'SAMSUNG BY JAYMART',
                                                'SAMSUNG SERVICE BY JAYMART',
                                                'SONY STORE',
                                                'TG ',
                                                'THE GADGET',
                                                'TRUE l DTAC',
                                                'VIVO IOT',
                                                'VIVO+VIVO SERVICE BY TG',
                                                'XIAOMI STORE BY LAKECOM',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'BANK & NON BANK',
                                            'store_list' => array(
                                                'KRUNGSRI FIRST CHOICE',
                                                'BANGKOK BANK (BBL)',
                                                'KRUNG THAI BANK (KTB)',
                                                'BANK OF AYUDHYA (BAY)',
                                                'KASIKORNBANK',
                                                'KIATNAKIN PHATRA BANK (KKP)',
                                                'CIMB THAI  ',
                                                'TMBTHANACHART BANK (TTB)',
                                                'TISCO',
                                                'THE THAICREDIT RETAIL BANK (TCR)',
                                                'SIAM COMMERCIAL BANK OF THAILAND (SCB)',
                                                'UNITED OVERSEAS BANK (UOB )',
                                                'LAND AND HOUSES BANK (LH)',
                                                'GOVERNMENT SAVINGS BANK (GSB)',
                                                'GOVERNMENT HOUSING BANK (GHB)',
                                                'UMAY+',
                                                'UOB XPRESS',
                                                'AEON',
                                                'SUPERRICH 1965 ',
                                                'BANGKOK INSURANCE',
                                                'THAI LIFE INSURANCE',
                                                'MUANG THAI LIFE ASSURANCE (MTL)',
                                                'SYN MUN KONG INSURANCE',
                                            ),
                                        ),
                                    ),
                                ),
                                array(
                                    'floor_id' => '3floor',
                                    'floor_name' => '3 FLOOR',
                                    'floor_img' => './assets/img/design/branch2-floor5.jpg',
                                    'floor_store' => array(
                                        array(
                                            'store_group' => 'DINING',
                                            'store_list' => array(
                                                'AKA',
                                                'AMPHAWA',
                                                'BAFLE WAFFLE',
                                                'BAR B Q PLAZA',
                                                'BOON TONG KEE',
                                                'COCO ICHIBANYA',
                                                'DOU',
                                                'FUJI RESTAURANT ',
                                                'HACHIBAN RAMEN',
                                                'HAPPY PIG',
                                                'HASUL KOREAN RESTAURANT',
                                                'HUA SENG HONG',
                                                'KOFUKU',
                                                'KOGORO KATSU',
                                                'LA MEOW',
                                                'LA PIZZA FAHANA',
                                                'LAEM CHAROEN SEAFOOD',
                                                'LAOYUAN ',
                                                'LT FISH RESTAURANT',
                                                'MAE SRI RUEN',
                                                'MALAKOR',
                                                'ME MORE GELATO ',
                                                'MK RESTAURANTS',
                                                'MO-MO-PARADISE',
                                                'OHKAJHU',
                                                'OISHI BUFFET ',
                                                'OISHI RAMEN',
                                                'ON THE TABLE',
                                                'OOTOYA',
                                                'PEPPER LUNCH',
                                                'PONN',
                                                'PRANAKORN NOODLE',
                                                'SAEMAEUL EXPRESS',
                                                'SANTA FE\'',
                                                'SEKI',
                                                'SENJU SHABU  & SUSHI PREMIUM BUFFET',
                                                'SHABUSHI',
                                                'SHINING TASTE BRAISED POT EXPRESS',
                                                'SHINKANZEN SUSHI',
                                                'SIZZLER',
                                                'STARBUCKS ',
                                                'TENJO SUSHI & YAKINIKU PREMIUM BUFFET',
                                                'WUAGYU',
                                                'YAKINIKU LIKE',
                                                'YAYOI JAPANESE RESTAURANT',
                                                'YUZU RAMEN  ',
                                                'ZEN RESTAURANT',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'BEAUTY SERVICE',
                                            'store_list' => array(
                                                'MOS DENTAL CLINIC',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'EDUCATION',
                                            'store_list' => array(
                                                'ATMA THE ASIAN TAEKWONDO',
                                                'CURTAIN CALL PERFORMING ARTS STUDIO',
                                                'MORTIMER ENGLISH CLUB',
                                                'STAR ART',
                                                'YAMAHA MUSIC SCHOOL',
                                            ),
                                        ),
                                        array(
                                            'store_group' => 'ATTRACTION & ENTERTAINMENT',
                                            'store_list' => array(
                                                'FITNESS FIRST',
                                                'HARBORLAND',
                                                'JOYLIDAY',
                                                'MAJOR CINEPLEX : BANGKAPI CINEPLEX',
                                            ),
                                        ),
                                    ),
                                ),
                            ),
                        ),
                    ]

                    ?>
                    <div class="directory-select">
                        <div class="floorSelect-container">
                            <?php
                            foreach ($directory_arr as $index => $directory):
                            ?>
                                <div class="floorSelect-item <?php echo ($index == 0) ? 'active' : ''; ?>" data-id="<?php echo $directory['branch_id']; ?>">
                                    <div class="select">
                                        <select name="" id="" class="select2 select-floor">
                                            <?php
                                            foreach ($directory['branch_floor'] as $floor):
                                            ?>
                                                <option value="<?php echo $floor['floor_id']; ?>"><?php echo $floor['floor_name']; ?></option>
                                            <?php
                                            endforeach;
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <div class="directory-store">
                        <div class="directoryContent-container">
                            <?php
                            foreach ($directory_arr as $index => $directory):
                            ?>
                                <div class="directoryContent-item <?php echo ($index == 0) ? 'active' : ''; ?>" data-id="<?php echo $directory['branch_id']; ?>">
                                    <div class="tab-container">
                                        <?php
                                        foreach ($directory['branch_floor'] as $index => $branch_floor):
                                        ?>
                                            <div class="tab-content <?php echo ($index == 0) ? 'active' : ''; ?>" data-floor="<?php echo $branch_floor['floor_id']; ?>" data-lenis-prevent>
                                                <div class="directory-content c-white">
                                                    <?php
                                                    foreach ($branch_floor['floor_store'] as $floor_store):
                                                    ?>
                                                        <h5 class="fsw-h5 c-theme-red ff-body"><?php echo $floor_store['store_group']; ?></h5>
                                                        <ul>
                                                            <?php
                                                            foreach ($floor_store['store_list'] as $store_list):
                                                            ?>

                                                                <li>
                                                                    <span class="store"><?php echo $store_list; ?></span> <span class="store-code">G44</span>
                                                                </li>
                                                            <?php
                                                            endforeach;
                                                            ?>
                                                        </ul>
                                                    <?php
                                                    endforeach; // EACH STORE
                                                    ?>
                                                </div>
                                            </div>
                                        <?php
                                        endforeach; // EACH FLOOR
                                        ?>
                                    </div>
                                </div>
                            <?php
                            endforeach; // EACH BRANCH
                            ?>
                        </div>
                    </div>
                    <div class="directory-maps">
                        <div class="mapsContent-container">
                            <?php
                            foreach ($directory_arr as $index => $directory):
                            ?>
                                <div class="mapsContent-item <?php echo ($index == 0) ? 'active' : ''; ?>" data-id="<?php echo $directory['branch_id']; ?>">
                                    <div class="tab-container">
                                        <?php
                                        foreach ($directory['branch_floor'] as $index => $branch_floor):
                                        ?>
                                            <div class="tab-content <?php echo ($index == 0) ? 'active' : ''; ?>" data-floor="<?php echo $branch_floor['floor_id']; ?>">
                                                <div class="map-buttons">
                                                    <a class="graphic-map directory-popup" href="<?php echo $branch_floor['floor_img']; ?>">
                                                        <i class=" ic ic-map"></i>
                                                        <span>GRAPHIC MAP</span>
                                                    </a>
                                                    <a class="google-map" href="#outer_map">
                                                        <img src="./assets/img/design/google-map.svg" alt="Google Map Icon">
                                                        <span>GOOGLE MAP</span>
                                                    </a>
                                                </div>
                                                <div class="media-wrapper media-auto">
                                                    <img class="" src=" <?php echo $branch_floor['floor_img']; ?>" alt="">
                                                </div>
                                            </div>
                                        <?php
                                        endforeach; // EACH FLOOR
                                        ?>
                                    </div>
                                </div>
                            <?php
                            endforeach; // EACH BRANCH
                            ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="template-related-card" id="latest-promotions">
        <div class="wrapper-content wrapper">
            <div class="title wow fadeIn">
                <h1>PROMOTIONS</h1>
            </div>

            <!-- Filter -->
            <div class="filter-template">
                <!-- Category Filter -->
                <?php
                $category_arr = [
                    "VIEW ALL",
                    "STORE PROMOTION",
                    "CREDIT CARD PROMOTION",
                ];

                include($root . "include/element-category-filter.php");
                ?>
            </div>

            <!-- GRID CONTENT ============================== -->
            <div
                class="grid-content-template">
                <?php
                $item_config = [
                    "footer" => "justify-content-between",
                    "add-to-calendar" => false,
                ];
                $content_item = [
                    "type" => "Store Promotion",
                    "title" => "FASHION BANGKOK SHOPPING FESTIVAL SALE UP TO 50% A LOT OF PRODUCTS",
                    "date" => "31 พ.ค. 67 - 27 มิ.ย. 67",
                    "branch-available" => "ทุกสาขา / บางกะปิ / บางแค / งามวงศ์วาน / ท่าพระ / โคราช",
                    "image" => "./assets/img/design/promotions-mock-image.jpg",
                    "link" => $root . "template-single.php",
                    "description" => "มาเหนือทุกโปรจึ้ง พร้อมปึ้งทุกลุคสายแฟ กับแบรนด์ชั้นนำ MEN'S FASHION SALE UP TO 50% BAGGAGE LUGGAGE / DAPPER / DEVY / FITFLOP / G2000/ DAPPER / DEVY / FITFLOP / DAPPER / DEVY / FITFLOP / G2000/ DAPPER / DEVY / FITFLOP"
                ];

                for ($i = 0; $i < 6; $i++) {
                    include($root . "include/element-content-item.php");
                } ?>
            </div>
        </div>
    </section>

    <?php
    include($root . "./include/member-section.php");
    ?>
</main>

<?php include($root . "footer.php"); ?>