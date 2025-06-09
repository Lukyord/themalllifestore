<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<div id="intro_logo" class="intro-logo">
	<img class="filter-white " data-wow-delay="0.4s" src="./assets/img/design/site-logo.svg" alt="">
</div>

<?php
$entersite = [
	'entersite_img' => './assets/img/design/entersite-image.png',
	'entersite_img_mb' => './assets/img/design/entersite-image.png',
	'background_color' => '#742d95',
];
include($root . "include/element-index-entersite.php");
?>

<?php
$popup = [
	'popup_img' => './assets/img/design/popup-image.jpg',
	'popup_img_mb' => './assets/img/design/popup-image.jpg',
];
include($root . "include/element-index-popup.php");
?>

<main id="main" class="page-main page-homepage">
	<div class="homepage-intro">
		<div class="tab-container no-wow">
			<div class="tab-wrapper">
				<div id="trigger_logo"></div>
				<ul class="tab tab-hover">
					<?php
					$intro_arr = array(
						array(
							'intro_id' =>  'bangkae',
							'intro_name' => 'BANGKAE',
							'intro_img' => './assets/img/design/intro-banner2.jpg',
							'intro_img_mb' => './assets/img/design/intro-banner2-mb.jpg',
						),
						array(
							'intro_id' =>  'bangkapi',
							'intro_name' => 'BANGKAPI',
							'intro_img' => './assets/img/design/intro-banner1.jpg',
							'intro_img_mb' => './assets/img/design/intro-banner1-mb.jpg',
						),
						array(
							'intro_id' =>  'ngamwongwan',
							'intro_name' => 'NGAMWONGWAN',
							'intro_img' => './assets/img/design/intro-banner3.jpg',
							'intro_img_mb' => './assets/img/design/intro-banner3-mb.jpg',
						),
						array(
							'intro_id' =>  'thaphra',
							'intro_name' => 'THAPHRA',
							'intro_img' => './assets/img/design/intro-banner4.jpg',
							'intro_img_mb' => './assets/img/design/intro-banner4-mb.jpg',
						),
						array(
							'intro_id' =>  'korat',
							'intro_name' => 'KORAT',
							'intro_img' => './assets/img/design/intro-banner5.jpg',
							'intro_img_mb' => './assets/img/design/intro-banner5-mb.jpg',
						),
					);
					foreach ($intro_arr as $index => $intro_data):
					?>
						<li>
							<a
								class="tab-hover-link fsw-h2 ff-heading c-theme-red textFlyIn"
								style="animation-delay: <?php echo $index * 0.25; ?>s; animation-duration: <?php echo 1 + ($index * 0.05); ?>s;"
								data-wow-delay="<?php echo $index * 0.25; ?>s"
								data-wow-duration="<?php echo 1 + ($index * 0.05); ?>s"
								data-tab-id="<?php echo '#' . $intro_data['intro_id']; ?>"
								href="<?php echo $root; ?>branch-single.php"><?php echo $intro_data['intro_name']; ?></a>
						</li>
					<?php

					endforeach;
					?>
				</ul>
			</div>
			<div class="tabContent-container">
				<?php
				foreach ($intro_arr as $index => $intro_data):
				?>
					<div id="<?php echo $intro_data['intro_id']; ?>" class="tab-content <?php echo ($index == 0) ? 'active' : ''; ?>">
						<div class="media-wrapper media-h100">
							<picture>
								<source media="(min-width:768px)" srcset="<?php echo $intro_data['intro_img']; ?>">
								<source media="(min-width:0px)" srcset="<?php echo $intro_data['intro_img_mb']; ?>">
								<img src="<?php echo $intro_data['intro_img']; ?>" alt="">
							</picture>
						</div>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</div>
	<div class="slide-section wow fadeIn" id="header-bound">
		<div class="swiper default fade autoplay">
			<div class="swiper-nav">
				<button class="swiper-button swiper-button-prev"></button>
				<button class="swiper-button swiper-button-next"></button>
			</div>
			<div class="swiper-pagination"></div>
			<div class="swiper-wrapper">
				<?php
				$slide_arr = array(
					array(
						'slide_bg' => './assets/img/design/slide3-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide3-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide3-obj.png',
						'slide_subtitle' => '1/7 WONDERS',
						'slide_title' => 'LIFE WONDER OF DINING DESTINATION',
						'slide_desc' => 'อร่อย มหาศาล ที่มหานครแห่งใหม่ สวรรค์ของนักชิมที่ครบครัน FOOD DESTINATION HUB แห่งกรุงเทพตะวันออก รวบรวมอนาจักรร้านอาหารนานาชาติชั้นนำรสเลิศไว้อย่างครบครัน',
						'slide_logo' => array(
							'./assets/img/design/slide-logo5.png',
							'./assets/img/design/slide-logo7.png',
							'./assets/img/design/slide-logo8.png',
							'./assets/img/design/slide-logo9.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
					array(
						'slide_bg' => './assets/img/design/slide2-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide2-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide2-obj.png',
						'slide_subtitle' => '2/7 WONDERS',
						'slide_title' => 'LIFE WONDER OF PET PARADISE',
						'slide_desc' => 'สุข มหาศาล ที่มหานครแห่งใหม่ ไลฟ์สไตล์ของครอบครัวยุคใหม่ ใครๆ ก็เป็น Pet Parents พาน้องๆสัตว์เลี้ยงเดินเที่ยวด้วยกันได้ทั่วบริเวณ',
						'slide_logo' => array(
							'./assets/img/design/slide-logo5.png',
							'./assets/img/design/slide-logo6.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
					array(
						'slide_bg' => './assets/img/design/slide4-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide4-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide4-obj.png',
						'slide_subtitle' => '3/7 WONDERS',
						'slide_title' => 'LIFE WONDER OF FASHION & COMPLETION',
						'slide_desc' => 'ช้อป มหาศาล ที่มหานครแห่งใหม่ รังสรรค์ไลฟ์สไตล์ทันสมัย ยกแบรนด์ที่ครบครันมาไว้ที่เดียว เพื่อความสะดวกและคุณภาพชีวิตที่ดีขึ้น ให้เหล่านักช้อป',
						'slide_logo' => array(
							'./assets/img/design/slide-logo10.png',
							'./assets/img/design/slide-logo11.png',
							'./assets/img/design/slide-logo12.png',
							'./assets/img/design/slide-logo13.png',
							'./assets/img/design/slide-logo14.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
					array(
						'slide_bg' => './assets/img/design/slide5-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide5-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide5-obj.png',
						'slide_subtitle' => '4/7 WONDERS',
						'slide_title' => 'LIFE LIFE WONDER OF ENTERTAINMENT',
						'slide_desc' => 'บันเทิง มหาศาล ที่มหานครแห่งใหม่ ศูนย์รวมทุกความบันเทิงที่ใส่ใจทุก Gen ทุกไลฟ์สไตล์ ด้วยบริการครบครันเต็มแม็กซ์.',
						'slide_logo' => array(
							'./assets/img/design/slide-logo3.png',
							'./assets/img/design/slide-logo4.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
					array(
						'slide_bg' => './assets/img/design/slide7-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide7-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide7-obj.png',
						'slide_subtitle' => '5/7 WONDERS',
						'slide_title' => 'LIFE WONDER OF JAPAN JOY',
						'slide_desc' => 'จอย แจเปน มหาศาล ที่มหานครแห่งใหม่ ไม่ต้องบินก็ช้อปฟินได้ กับการรวมตัวของเมกาแบรนด์ ยกทับแบรนด์ดังมาจากประเทศญี่ปุ่น',
						'slide_logo' => array(
							'./assets/img/design/slide-logo12.png',
							'./assets/img/design/slide-logo13.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
					array(
						'slide_bg' => './assets/img/design/slide1-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide1-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide1-obj.png',
						'slide_subtitle' => '6/7 WONDERS',
						'slide_title' => 'LIFE WONDER OF EXCITEMENT',
						'slide_desc' => 'สนุกมหาศาล 365 วัน ที่มหานครแห่งใหม่ ครบครันด้วยกิจกรรมหลากหลาย ตอบโจทย์ทุกไลฟ์สไตล์ ทุกเจเนอร์เรชั่น ทั่วพื้นที่การจัดงานกิจกรรม และ MCC HALL',
						'slide_logo' => array(
							'./assets/img/design/slide-logo1.png',
							'./assets/img/design/slide-logo2.png',
							'./assets/img/design/slide-logo3.png',
							'./assets/img/design/slide-logo4.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
					array(
						'slide_bg' => './assets/img/design/slide6-bg.jpg',
						'slide_bg_mb' => './assets/img/design/slide6-bg-mb.jpg',
						'slide_obj' => './assets/img/design/slide6-obj.png',
						'slide_subtitle' => '7/7 WONDERS',
						'slide_title' => 'LIFE WONDER OF NATURE',
						'slide_desc' => 'ธรรมชาติรื่นรมย์ มหาศาล ที่มหานครแห่งใหม่ ผสานความรื่นรมย์ของธรรมชาติเข้ากับไลฟ์สไตล์อย่างลงตัว ในทุกพื้นที่ของการใช้ประสบการณ์ที่นี่',
						'slide_logo' => array(
							'./assets/img/design/slide-logo15.png',
						),
						'slide_link' => $root . 'wonder-single.php'
					),
				);
				foreach ($slide_arr as $index => $slide):
				?>
					<div class="swiper-slide">
						<?php
						include($root . "./include/wonder-item.php");
						?>
					</div>
				<?php
				endforeach;
				?>
			</div>
		</div>
	</div>
	<div class="promotion-section">
		<div class="section-heading">
			<div class="text-marquee-container">
				<div class="text-marquee">
					<div class="text-row">
						<h1 class="fsw-h1 c-theme-red ff-heading">PROMOTION & PRIVILEGE</h1>
					</div>
				</div>
			</div>
		</div>
		<div class="section-content">
			<div class="wrapper">
				<div class="grid-content grid-promo">
					<div class="grid-context wow fadeIn">
						<?php
						/*
						<div class="image">
							<a href="<?php echo $root ?>promotions.php" class="link-overlay">&nbsp;</a>
							<img src="./assets/img/design/promotion-cover2.jpg" alt="Promotion Cover 1">
							<h4 class="title fsw-h4 font-body">CREDIT CARD PROMOTION</h4>
						</div>
						*/
						?>
						<?php
						$promo_title = 'STORE PROMOTION';
						$promo_cover = './assets/img/design/promotion-cover1.jpg';
						$promo_grid = array(
							array(
								'branch_id' => 'all',
								'branch_title' => 'ALL BRANCHES',
								'promo_items' => array(
									array(
										'promo_img' => './assets/img/design/promotion-thumb1.jpg',
										'promo_title' => 'Beauty Hall Summer Cation 2024',
										'promo_desc' => 'WOW EXTRA BONUS สวยคุ้มไม่มีอ้าว ดีลว้าวไม่มีหยุด',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/641',
									),
									array(
										'promo_img' => './assets/img/design/promotion-thumb2.jpg',
										'promo_title' => 'Summer Cation Pay Day',
										'promo_desc' => 'แบรนด์เนมลดฉ่ำสูงสุด 70%',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/636',
									),
									array(
										'promo_img' => './assets/img/design/promotion-thumb3.jpg',
										'promo_title' => 'SportsMall Summer Cation',
										'promo_desc' => 'ต้อนรับซัมเมอร์ กับไอเท็มสายฟิต พร้อมโปรสุดฮอต ให้ร้อนนี้ว้าวไม่มีหยุด',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/662',
									),
									array(
										'promo_img' => './assets/img/design/promotion-thumb4.jpg',
										'promo_title' => 'Gourmet Eats x K bank',
										'promo_desc' => 'สะสมใบเสร็จ ณ ร้านอาหารภายในแผนก กูร์เมต์ อีทส์ ที่โซน Food Hall / Take Home Shop / Take Home Local (ยกเว้น Food Court และ ร้านอาหารในศูนย์ฯ) ครบ 800 บาทขึ้นไป/วัน',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/650',
									),
									array(
										'promo_img' => './assets/img/design/promotion-thumb5.jpg',
										'promo_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
										'promo_desc' => 'สมาชิก M CARD  แจก M POINT ทุกร้านค้าในศูนย์การค้าฯทุก 25 บาท รับ 1 คะแนน สำหรับไอที แก็ดเจ็ท, เฟอร์นิเจอร์ คลินิกความงาม และสถาบันการศึกษา ทุก 50 บาท รับ 1 คะแนน',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/625',
									),
									array(
										'promo_img' => './assets/img/design/promotion-thumb6.jpg',
										'promo_title' => 'Watch Galleria SUMMER-CATION',
										'promo_desc' => 'เฟียสไม่มีอ้าว ว้าวไม่มีหยุด ลดสูงสุด 60%',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/645',
									),
									array(
										'promo_img' => './assets/img/design/promotion-thumb7.jpg',
										'promo_title' => 'สมัครบัตร Bangkok Bank M Visa รายใหม่',
										'promo_desc' => 'สมัครบัตร Bangkok Bank M Visa รายใหม่ รับกระเป๋าเดินทาง Caggioni ขนาด 20 นิ้ว จำนวน 1 ใบ มูลค่า 3,990 บาท*',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/540',
									),
								),
							),
						);
						include($root . "./include/promo-grid.php");
						?>
					</div>
					<div class="grid-context wow fadeIn">
						<?php
						/*
						<div class="image">
							<a href="<?php echo $root ?>promotions.php" class="link-overlay">&nbsp;</a>
							<img src="./assets/img/design/promotion-cover1.jpg" alt="Promotion Cover 2">
							<h4 class="title fsw-h4 font-body">STORE PROMOTION</h4>
						</div>
						*/
						?>
						<?php
						$promo_title = 'CREDIT CARD PROMOTION';
						$promo_cover = './assets/img/design/promotion-cover2.jpg';
						$promo_grid = array(
							array(
								'branch_id' => 'all',
								'branch_title' => 'ALL BRANCHES',
								'promo_items' => array(
									array(
										'promo_img' => './assets/img/design/card-thumb1.jpg',
										'promo_title' => 'Bangkok Bank M Summer cation',
										'promo_desc' => 'สิทธิพิเศษสำหรับบัตรเครดิต Bangkok Bank M Visa',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/655',
									),
									array(
										'promo_img' => './assets/img/design/card-thumb2.jpg',
										'promo_title' => 'BBL แบ่งชำระ 0% สูงสุด 10 เดือน ทุกชิ้น + เครดิตเงินคืน 12%',
										'promo_desc' => 'สิทธิพิเศษบัตรเครดิตธนาคารกรุงเทพ',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/640',
									),
									array(
										'promo_img' => './assets/img/design/card-thumb3.jpg',
										'promo_title' => 'Beauty Hall Summer Cation',
										'promo_desc' => 'Beauty Hall Summer Cation รับเครดิตเงินคืนสูงสุด 18,000 บาท + แลกรับเครดิตเงินคืน 12%',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/673',
									),
									array(
										'promo_img' => './assets/img/design/card-thumb4.jpg',
										'promo_title' => 'CardX Summer cation',
										'promo_desc' => 'สิทธิพิเศษบัตรเครดิต CardX',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/656',
									),
									array(
										'promo_img' => './assets/img/design/card-thumb5.jpg',
										'promo_title' => 'UOB Summer cation',
										'promo_desc' => 'สิทธิพิเศษเฉพาะสมาชิกบัตรเครดิต UOB และบัตรเครดิต TMRW',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/652',
									),
									array(
										'promo_img' => './assets/img/design/card-thumb6.jpg',
										'promo_title' => 'บัตรเครดิต BBL M แบ่งชำระ 0% สูงสุด 10 เดือน ทุกชิ้น',
										'promo_desc' => 'สิทธิพิเศษสำหรับบัตรเครดิต Bangkok Bank M Visa',
										'promo_url' => 'https://themalllifestore.themall.co.th/promotion/646',
									),
								),
							),
						);
						include($root . "./include/promo-grid.php");
						?>
					</div>

				</div>
			</div>
		</div>
	</div>

	<?php
	include($root . "./include/happening-section.php");
	?>

	<?php
	include($root . "include/directory-section.php");
	?>

	<?php
	$update_title = 'TRENDS UPDATE';
	$update_arr = [
		"all" => [
			[
				'update_img' => './assets/img/design/content1-cover.jpg',
				'update_img_hover' => './assets/img/design/content1-cover.jpg',
				'update_url' => './content1.php',
			],
			[
				'update_img' => './assets/img/design/content2-cover.jpg',
				'update_img_hover' => './assets/img/design/content2-cover.jpg',
				'update_url' => './content2.php',
			],
			[
				'update_img' => './assets/img/design/content3-cover.jpg',
				'update_img_hover' => './assets/img/design/content3-cover.jpg',
				'update_url' => './content3.php',
			],
			[
				'update_img' => './assets/img/design/content4-cover.jpg',
				'update_img_hover' => './assets/img/design/content4-cover.jpg',
				'update_url' => './content4.php',
			],
			[
				'update_img' => './assets/img/design/content5-cover.jpg',
				'update_img_hover' => './assets/img/design/content5-cover.jpg',
				'update_url' => './content5.php',
			],
		],
		"bangkae" => [
			[
				'update_img' => './assets/img/design/content1-cover.jpg',
				'update_img_hover' => './assets/img/design/content1-cover.jpg',
				'update_url' => './content1.php',
			],
			[
				'update_img' => './assets/img/design/content2-cover.jpg',
				'update_img_hover' => './assets/img/design/content2-cover.jpg',
				'update_url' => './content2.php',
			],
			[
				'update_img' => './assets/img/design/content3-cover.jpg',
				'update_img_hover' => './assets/img/design/content3-cover.jpg',
				'update_url' => './content3.php',
			],
			[
				'update_img' => './assets/img/design/content4-cover.jpg',
				'update_img_hover' => './assets/img/design/content4-cover.jpg',
				'update_url' => './content4.php',
			],
		],
		"bangkapi" => [
			[
				'update_img' => './assets/img/design/content1-cover.jpg',
				'update_img_hover' => './assets/img/design/content1-cover.jpg',
				'update_url' => './content1.php',
			],
			[
				'update_img' => './assets/img/design/content2-cover.jpg',
				'update_img_hover' => './assets/img/design/content2-cover.jpg',
				'update_url' => './content2.php',
			],
			[
				'update_img' => './assets/img/design/content3-cover.jpg',
				'update_img_hover' => './assets/img/design/content3-cover.jpg',
				'update_url' => './content3.php',
			],
		],
		"ngamwongwan" => [
			[
				'update_img' => './assets/img/design/content1-cover.jpg',
				'update_img_hover' => './assets/img/design/content1-cover.jpg',
				'update_url' => './content1.php',
			],
			[
				'update_img' => './assets/img/design/content2-cover.jpg',
				'update_img_hover' => './assets/img/design/content2-cover.jpg',
				'update_url' => './content2.php',
			],
		],
		"thaphra" => [
			[
				'update_img' => './assets/img/design/content1-cover.jpg',
				'update_img_hover' => './assets/img/design/content1-cover.jpg',
				'update_url' => './content1.php',
			],
		],
		"korat" => [
			[
				'update_img' => './assets/img/design/content1-cover.jpg',
				'update_img_hover' => './assets/img/design/content1-cover.jpg',
				'update_url' => './content1.php',
			],
			[
				'update_img' => './assets/img/design/content2-cover.jpg',
				'update_img_hover' => './assets/img/design/content2-cover.jpg',
				'update_url' => './content2.php',
			],
			[
				'update_img' => './assets/img/design/content3-cover.jpg',
				'update_img_hover' => './assets/img/design/content3-cover.jpg',
				'update_url' => './content3.php',
			],
			[
				'update_img' => './assets/img/design/content4-cover.jpg',
				'update_img_hover' => './assets/img/design/content4-cover.jpg',
				'update_url' => './content4.php',
			],
			[
				'update_img' => './assets/img/design/content5-cover.jpg',
				'update_img_hover' => './assets/img/design/content5-cover.jpg',
				'update_url' => './content5.php',
			],
		],
	];

	include($root . "./include/update-section.php");
	?>

	<?php
	include($root . "./include/member-section.php");
	?>
</main>
<?php include($root . "footer.php"); ?>