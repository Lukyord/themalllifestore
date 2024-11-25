<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<div id="intro_logo" class="intro-logo">
	<img class="filter-white " data-wow-delay="0.4s" src="./assets/img/design/site-logo.svg" alt="">
</div>
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
								class="tab-hover-link fsw-h2 ff-heading c-theme-red wow textFlyIn"
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
						<div class="image">
							<img src="./assets/img/design/promotion-cover2.jpg" alt="Promotion Cover 1">
						</div>
						<?php
						// $promo_title = 'STORE PROMOTION';
						// $promo_cover = './assets/img/design/promotion-cover1.jpg';
						// $promo_grid = array(
						// 	array(
						// 		'branch_id' => 'all',
						// 		'branch_title' => 'ALL BRANCHES',
						// 		'promo_items' => array(
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb1.jpg',
						// 				'promo_title' => 'Beauty Hall Summer Cation 2024',
						// 				'promo_desc' => 'WOW EXTRA BONUS สวยคุ้มไม่มีอ้าว ดีลว้าวไม่มีหยุด',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/641',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb2.jpg',
						// 				'promo_title' => 'Summer Cation Pay Day',
						// 				'promo_desc' => 'แบรนด์เนมลดฉ่ำสูงสุด 70%',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/636',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb3.jpg',
						// 				'promo_title' => 'SportsMall Summer Cation',
						// 				'promo_desc' => 'ต้อนรับซัมเมอร์ กับไอเท็มสายฟิต พร้อมโปรสุดฮอต ให้ร้อนนี้ว้าวไม่มีหยุด',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/662',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb4.jpg',
						// 				'promo_title' => 'Gourmet Eats x K bank',
						// 				'promo_desc' => 'สะสมใบเสร็จ ณ ร้านอาหารภายในแผนก กูร์เมต์ อีทส์ ที่โซน Food Hall / Take Home Shop / Take Home Local (ยกเว้น Food Court และ ร้านอาหารในศูนย์ฯ) ครบ 800 บาทขึ้นไป/วัน',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/650',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb5.jpg',
						// 				'promo_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						// 				'promo_desc' => 'สมาชิก M CARD  แจก M POINT ทุกร้านค้าในศูนย์การค้าฯทุก 25 บาท รับ 1 คะแนน สำหรับไอที แก็ดเจ็ท, เฟอร์นิเจอร์ คลินิกความงาม และสถาบันการศึกษา ทุก 50 บาท รับ 1 คะแนน',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/625',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb6.jpg',
						// 				'promo_title' => 'Watch Galleria SUMMER-CATION',
						// 				'promo_desc' => 'เฟียสไม่มีอ้าว ว้าวไม่มีหยุด ลดสูงสุด 60%',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/645',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/promotion-thumb7.jpg',
						// 				'promo_title' => 'สมัครบัตร Bangkok Bank M Visa รายใหม่',
						// 				'promo_desc' => 'สมัครบัตร Bangkok Bank M Visa รายใหม่ รับกระเป๋าเดินทาง Caggioni ขนาด 20 นิ้ว จำนวน 1 ใบ มูลค่า 3,990 บาท*',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/540',
						// 			),
						// 		),
						// 	),
						// );
						// include($root . "./include/promo-grid.php");
						?>
					</div>
					<div class="grid-context wow fadeIn">
						<div class="image">
							<img src="./assets/img/design/promotion-cover1.jpg" alt="Promotion Cover 2">
						</div>
						<?php
						// $promo_title = 'CREDIT CARD PROMOTION';
						// $promo_cover = './assets/img/design/promotion-cover2.jpg';
						// $promo_grid = array(
						// 	array(
						// 		'branch_id' => 'all',
						// 		'branch_title' => 'ALL BRANCHES',
						// 		'promo_items' => array(
						// 			array(
						// 				'promo_img' => './assets/img/design/card-thumb1.jpg',
						// 				'promo_title' => 'Bangkok Bank M Summer cation',
						// 				'promo_desc' => 'สิทธิพิเศษสำหรับบัตรเครดิต Bangkok Bank M Visa',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/655',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/card-thumb2.jpg',
						// 				'promo_title' => 'BBL แบ่งชำระ 0% สูงสุด 10 เดือน ทุกชิ้น + เครดิตเงินคืน 12%',
						// 				'promo_desc' => 'สิทธิพิเศษบัตรเครดิตธนาคารกรุงเทพ',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/640',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/card-thumb3.jpg',
						// 				'promo_title' => 'Beauty Hall Summer Cation',
						// 				'promo_desc' => 'Beauty Hall Summer Cation รับเครดิตเงินคืนสูงสุด 18,000 บาท + แลกรับเครดิตเงินคืน 12%',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/673',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/card-thumb4.jpg',
						// 				'promo_title' => 'CardX Summer cation',
						// 				'promo_desc' => 'สิทธิพิเศษบัตรเครดิต CardX',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/656',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/card-thumb5.jpg',
						// 				'promo_title' => 'UOB Summer cation',
						// 				'promo_desc' => 'สิทธิพิเศษเฉพาะสมาชิกบัตรเครดิต UOB และบัตรเครดิต TMRW',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/652',
						// 			),
						// 			array(
						// 				'promo_img' => './assets/img/design/card-thumb6.jpg',
						// 				'promo_title' => 'บัตรเครดิต BBL M แบ่งชำระ 0% สูงสุด 10 เดือน ทุกชิ้น',
						// 				'promo_desc' => 'สิทธิพิเศษสำหรับบัตรเครดิต Bangkok Bank M Visa',
						// 				'promo_url' => 'https://themalllifestore.themall.co.th/promotion/646',
						// 			),
						// 		),
						// 	),
						// );
						// include($root . "./include/promo-grid.php");
						?>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="happening-section bg-white">
		<?php
		$happening_arr = [
			"all" => [
				"30 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img4.jpg',
						'happening_img_mb' => './assets/img/design/happening-img4-mb.jpg',
						'happening_title' => 'FASHION - SUMMER-CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/173',
					],
				],
				"22 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
				],
				"8 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
				"7 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
				"14 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
				"15 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
			],
			"bangkae" => [
				"2 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img4.jpg',
						'happening_img_mb' => './assets/img/design/happening-img4-mb.jpg',
						'happening_title' => 'FASHION - SUMMER-CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/173',
					],
				],
				"22 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
				],
				"23 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
			],
			"bangkapi" => [
				"3 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img4.jpg',
						'happening_img_mb' => './assets/img/design/happening-img4-mb.jpg',
						'happening_title' => 'FASHION - SUMMER-CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/173',
					],
				],
				"4 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
				],
				"5 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
			],
			"ngamwongwan" => [
				"4 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img4.jpg',
						'happening_img_mb' => './assets/img/design/happening-img4-mb.jpg',
						'happening_title' => 'FASHION - SUMMER-CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/173',
					],
				],
				"5 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
				],
				"6 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
			],
			"thaphra" => [
				"5 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img4.jpg',
						'happening_img_mb' => './assets/img/design/happening-img4-mb.jpg',
						'happening_title' => 'FASHION - SUMMER-CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/173',
					],
				],
				"6 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
				],
				"7 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
			],
			"korat" => [
				"6 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img4.jpg',
						'happening_img_mb' => './assets/img/design/happening-img4-mb.jpg',
						'happening_title' => 'FASHION - SUMMER-CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/173',
					],
				],
				"7 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img3.jpg',
						'happening_img_mb' => './assets/img/design/happening-img3-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER-CATION HEATWAVE HITTING',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/171',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
				],
				"8 MAR" => [
					[
						'happening_img' => './assets/img/design/happening-img2.jpg',
						'happening_img_mb' => './assets/img/design/happening-img2-mb.jpg',
						'happening_title' => 'THE LIVING - SUMMER CATION 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/172',
					],
					[
						'happening_img' => './assets/img/design/happening-img1.jpg',
						'happening_img_mb' => './assets/img/design/happening-img1-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE PRESENTS STRIDER CUP THAILAND CHAMPIONSHIP 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/179',
					],
					[
						'happening_img' => './assets/img/design/happening-img5.jpg',
						'happening_img_mb' => './assets/img/design/happening-img5-mb.jpg',
						'happening_title' => 'THE MALL LIFESTORE SUMMER - CATION FOOD FEST 2024',
						'happening_url' => 'https://themalllifestore.themall.co.th/happening/177',
					],
				],
			],
		];

		?>
		<div class="wrapper">
			<div class="section-heading a-center wow fadeIn">
				<h2 class="fsw-h2 c-theme-red margin-bottom-xs">HAPPENING</h2>
				<div class="select">
					<select name="" id="" class="select2 happening-select" data-placeholder="ALL BRANCHES">
						<?php
						$branch_arr = [
							"all" => "ALL BRANCHES",
							"bangkae" => "BANGKAE",
							"bangkapi" => "BANGKAPI",
							"ngamwongwan" => "NGAMWONGWAN",
							"thaphra" => "THAPHRA",
							"korat" => "KORAT",
						];
						foreach ($branch_arr as $branch_id => $branch_name):
						?>
							<option value="<?php echo $branch_id; ?>"><?php echo $branch_name; ?></option>
						<?php
						endforeach;
						?>
					</select>
				</div>
			</div>
			<?php
			$first_index = array_key_first($happening_arr);
			foreach ($happening_arr as $branch_id => $happening_data) {
				$first_date = array_key_first($happening_data);
			?>
				<div
					id="<?php echo $branch_id; ?>"
					class="tab-content section-content <?php echo $branch_id === $first_index ? 'active' : ''; ?>">
					<div class="happening-container wow fadeIn">
						<?php foreach ($happening_data as $date => $events) {
							$date_class = strtolower(str_replace(' ', '-', $date));
						?>
							<div
								id="<?php echo strtolower(str_replace(' ', '-', $date)); ?>"
								class="happening-date tab-content <?php echo $date === $first_date ? 'active' : ''; ?>">

								<!-- Nested image slide for events on this date -->
								<div class="swiper nested-swiper">
									<div class="swiper-wrapper">
										<?php foreach ($events as $data): ?>
											<div class="swiper-slide">
												<div class="happening-item">
													<div class="grid-content grid2">
														<div class="grid-media">
															<div class="media-wrapper media4-3">
																<picture>
																	<source media="(min-width:768px)" srcset="<?php echo $data['happening_img']; ?>">
																	<source media="(min-width:0px)" srcset="<?php echo $data['happening_img_mb']; ?>">
																	<img src="<?php echo $data['happening_img']; ?>" alt="">
																</picture>
															</div>
														</div>
														<div class="grid-context">
															<div class="happening-desc a-center c-white">
																<h4 class="fsw-h4 margin-bottom-2xs"><?php echo $data['happening_title']; ?></h4>
																<a href="<?php echo $data['happening_url']; ?>">อ่านต่อ</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										<?php endforeach; ?>
									</div>

									<!-- Controls for nested slides -->
									<div class="swiper-nav">
										<button class="swiper-button swiper-button-prev swiper-button-prev-<?php echo $date_class; ?>"></button>
										<button class="swiper-button swiper-button-next swiper-button-next-<?php echo $date_class; ?>"></button>
									</div>
									<div class="swiper-pagination swiper-pagination-<?php echo $date_class; ?>"></div>
								</div>
							</div>
						<?php
						}
						?>

						<!-- Date thumbnail navigation -->
						<div class="swiper swiper-happeningThumb">
							<div class="swiper-wrapper">
								<?php foreach ($happening_data as $date => $events): ?>
									<div class="swiper-slide" data-target-date="<?php echo strtolower(str_replace(' ', '-', $date)); ?>">
										<div class="happening-thumb">
											<p class="fsw-subtitle1 a-center"><?php echo $date; ?></p>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>
			<?php
			}
			?>
		</div>
	</div>

	<div class="directory-section">
		<div class="wrapper wrapper-content">
			<div class="section-heading a-center margin-bottom-md wow fadeIn">
				<h2 class="fsw-h2 c-white">DIRECTORY</h2>
			</div>
			<div class="section-content wow fadeIn">
				<div class="grid-content grid-directory">
					<?php
					$directory_arr = array(
						array(
							'branch_id' 	=> 'bangkae',
							'branch_name' 	=> 'BANGKAE',
							'branch_floor'	=> array(
								array(
									'floor_id' => 'gfloor',
									'floor_name' => 'G Floor',
									'floor_img' => './assets/img/design/branch1-floor1.jpg',
									'floor_store' => array(
										array(
											'store_group' => '',
											'store_list' => array(),
										),
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'BONCHON',
												'CHESTER\'S',
												'FARMERIES & YENLYYOURS ',
												'KFC',
												'KOI THE\'',
												'MCDONALD\'S',
												'MOM\'S TOUCH',
												'MOS BURGER',
												'OLINO CREPE & TEA',
												'PARIS MIKKI X WWA',
												'SWENSEN\'S',
												'STARBUCKS ',
												'BEARHOUSE',
												'DOU',
												'MINI ORIENTAL SPEEDBAR',
												'SUNDUBUBU & MIL TOAST EXPRESS',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'AIIZ',
												'CITY CHAIN',
												'DOUBLE GOOSE',
												'GQ',
												'JASPAL',
												'JELLY BUNNY',
												'MC JEANS',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'MISTER EYE',
												'O.W.L.',
												'OPTICAL 88',
												'THE NEXT',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'EVEANDBOY',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'SE-ED BOOK CENTER',
												'BOOTS',
												'DAISO',
												'I CARE BY PHARMAX',
												'WATSONS',
											),
										),
										array(
											'store_group' => 'IT & SERVICE',
											'store_list' => array(
												'STUDIO 7',
											),
										),
										array(
											'store_group' => 'GOLD & JEWELRY',
											'store_list' => array(
												'AURORA',
												'CHAOSUA YAWARAJ',
												'CHIB SENG HENG',
												'JL. JEWELRY & THONGSUK',
												'MAE THONG SUK',
												'MAETHONGBAI CLASSIC',
												'PETCH THONG JAMES',
												'PETCHTHONGBAIYAOWARAT',
												'PUTCHAROENSOOK2 GOLDSMITH SHOP ',
												'SENG HENG',
												'SO SENG HENG GOLDSMITH',
												'ALICE GEMS ',
												'ASAWA DIAMOND & PINK GOLD',
												'GALA DIAMOND',
												'GEMS DESIGN',
												'JUBILEE DIAMOND',
												'NAPASARAH GEMS',
												'REGENT DIAMOND ',
												'VIJITTRA’S JEWELLERY',
											),
										),
									),
								),
								array(
									'floor_id' => 'mfloor',
									'floor_name' => 'M Floor',
									'floor_img' => './assets/img/design/branch1-floor2.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'CHATIME ',
												'CAFÉ AMAZON',
												'GAGA',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'ALBERDO',
												'ALIN BRAND',
												'AMERICAN EAGLE',
												'BATA',
												'BIRKENSTOCK',
												'BUTTER SCOTCH',
												'CC DOUBLE O',
												'GENTLEWOMAN',
												'H&M ',
												'HIGH SCHOOL',
												'HLA CONCEPT STORE ',
												'KAMIMURA',
												'LYN',
												'LYN  AROUND',
												'PAUL FRANK',
												'PRADAP',
												'SUNNY DAY',
												'UNIQLO',
												'URTHE',
												'VACRAZY',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'OWNDAYS',
											),
										),
										array(
											'store_group' => 'SPORTS',
											'store_list' => array(
												'CROCS',
												'JD SPORTS',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'BEAUTY BUFFET',
												'BEAUTY EXPRESS',
												'CUTE PRESS',
												'LALIL',
												'ORIENTAL PRINCESS',
												'THE FACE SHOP',
												'YVES ROCHER',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'APEX',
												'PORNKASEM CLINIC',
												'SLC CLINIC',
												'SPARSHA',
												'THE KLINIQUE',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'Beauty Service',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'WATSONS',
												'MOSHI MOSHI',
											),
										),
										array(
											'store_group' => 'KEY ANCHOR',
											'store_list' => array(
												'MUJI',
											),
										),
									),
								),
								array(
									'floor_id' => '1floor',
									'floor_name' => '1 Floor',
									'floor_img' => './assets/img/design/branch1-floor3.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'COCOWALK CAFÉ',
												'DUNKIN\'',
												'INTHANIN',
												'PICK A CHOUX',
												'TORA CHA',
												'YOGURUTO',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'BETTER VISION',
											),
										),
										array(
											'store_group' => 'SPORTS',
											'store_list' => array(
												'ADIDAS',
												'FOOTGEAR',
												'PUMA ',
												'SKECHERS TH',
												'WARRIX',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'AT MEDICAL CLINIC',
												'DOCTOR LIFE',
												'ETOILE CLINIC',
												'L.A.B.X',
												'NITIPON CLINIC',
												'PAN CLINIC',
												'PBS DENTAL CLINIC',
												'RAJDHEVEE CLINIC',
												'URANUS CLINIC',
												'V SQUARE CLINIC',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'ENERGY WELLNESS PLUS',
												'HOSHI  WELLNESS & MASSAGE',
												'PEN THE STYLE SALON',
												'SEXY LACE HEALTH AND WELLNESS ',
												'THE HERITAGE NAIL SPA',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'MR. D.I.Y.',
												'MUSIC ARMS',
												'TOTAL',
												'GAC AION',
												'MOMO SHOP',
												'WANNEEFILM',
												'VEJPONGOSOT',
											),
										),
										array(
											'store_group' => 'IT & SERVICE',
											'store_list' => array(
												'AIS',
												'AIS PARTNER',
												'BANANA ',
												'BEBE PHONE',
												'BIG CAMERA',
												'CASE TOWN',
												'GARMIN',
												'GIZMO',
												'IT CITY + CSC',
												'J I B',
												'JAYMART IOT',
												'K PLUS ACCESSORIES',
												'OPPO ',
												'PICO',
												'REALME BY TG',
												'SONY STORE',
												'TG ',
												'TRUE l DTAC',
												'XIAOMI STORE BY VIRATMALEE',
											),
										),
									),
								),
								array(
									'floor_id' => '2floor',
									'floor_name' => '2 Floor',
									'floor_img' => './assets/img/design/branch1-floor4.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'A RAMEN',
												'AKA',
												'AMPHAWA',
												'BAR B Q PLAZA',
												'COCO ICHIBANYA',
												'COTTI COFFEE',
												'FOUR SEASONS CHINESE RESTAURANT',
												'FUJI RESTAURANT ',
												'HACHIBAN RAMEN',
												'KATSUYA',
												'KOFUKU',
												'KOGORO KATSU',
												'LAEM CHAROEN SEAFOOD',
												'LAOYUAN ',
												'MAE SRI RUEN',
												'MAGURO ',
												'MEE KHWAM SOOK',
												'MIXUE ',
												'MK RESTAURANTS',
												'MO-MO-PARADISE',
												'MR.JOLLY YOGURT',
												'NICE TWO MEAT U',
												'OOTOYA',
												'PEPPER LUNCH',
												'SAEMAEUL EXPRESS',
												'SALAD FACTORY',
												'SANTA FE\'',
												'SHABUSHI',
												'SHI-TORI CAFÉ',
												'SIZZLER',
												'SOMTAM NUA',
												'STARBUCKS ',
												'SUKISHI KOREAN CHARCOAL GRILL ',
												'THE ALLEY',
												'THE BIBIMBAB',
												'TOROFRIES',
												'XING FU TANG ',
												'YAKINIKU LIKE',
												'YAYOI JAPANESE RESTAURANT',
												'YOU & I',
												'ZEN RESTAURANT',
												'BAFLE WAFFLE',
												'HOKKAIDO BAKED CHEESE TART',
												'SECRET RECIPE ',
												'YODCHA',
												'ZHANGLIANG MALA TANG',
											),
										),
										array(
											'store_group' => 'IT & ELECTRONICS',
											'store_list' => array(
												'I CARE',
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
												'SYN MUN KONG INSURANCE',
											),
										),
										array(
											'store_group' => 'SERVICE',
											'store_list' => array(
												'3BB',
											),
										),
									),
								),
								array(
									'floor_id' => '3floor',
									'floor_name' => '3 Floor',
									'floor_img' => './assets/img/design/branch1-floor5.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'CAFÉ AMAZON',
												'FUNKY FRIES',
												'HONGDAE BUFFET ',
												'KOOMI',
												'NOBI CHA',
												'OHKAJHU',
												'RED PANDA YAKINIKU',
												'SENJU SHABU  & SUSHI PREMIUM BUFFET',
												'SHABU TOMO',
												'SUSHIRO',
												'TENJO SUSHI & YAKINIKU PREMIUM BUFFET',
												'VITSAVA NOODLE',
												'WISDOM INTERNATIONAL BUFFET',
											),
										),
										array(
											'store_group' => 'SPORTS',
											'store_list' => array(
												'JASON',
											),
										),
										array(
											'store_group' => 'ATTRACTION & ENTERTAINMENT',
											'store_list' => array(
												'FITNESS FIRST',
												'HARBORLAND',
												'JOYLIDAY',
												'SF CINEMA',
											),
										),
									),
								),
							),
						),
						array(
							'branch_id' 	=> 'bangkapi',
							'branch_name' 	=> 'BANGKAPI',
							'branch_floor'	=> array(
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
						array(
							'branch_id' 	=> 'ngamwongwan',
							'branch_name' 	=> 'NGAMWONGWAN',
							'branch_floor'	=> array(
								array(
									'floor_id' => 'gfloor',
									'floor_name' => 'G FLOOR',
									'floor_img' => './assets/img/design/branch3-floor1.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'ARUNN',
												'BEARHOUSE',
												'GAVINSON',
												'INTHANIN',
												'OLINO CREPE & TEA',
												'ON THE TABLE',
												'PAN KHAM HOM',
												'SAINT CROISSANT',
												'"WISDOM ',
												'INTERNATIONAL BUFFET"',
												'BONCHON',
												'FIRE TIGER BY SEOULCIAL CLUB',
												'MOS BURGER',
												'RUNJUAN PUNPUANJAI ',
												'TIM HORTONS',
												'STARBUCKS ',
												'SWENSEN\'S',
												'CAFÉ AMAZON',
												'KFC',
												'CHESTER\'S',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'GNC',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'BAIMIANG',
												'BOOTS',
												'LAB PHARMACY',
												'PHUTAWAN ',
												'POOMJAITHAI',
												'VEJPONGOSOT',
											),
										),
										array(
											'store_group' => 'GOLD & JEWELRY',
											'store_list' => array(
												'AURORA',
												'BANGKOK GOLDS',
												'CHAOSUA YAWARAJ',
												'HANGTHONG MAESOMBOON',
												'HANGTHONG PETCH THONGSUK',
												'MS GEMS',
												'MTB GOLDSMITH',
												'PETCHPANTONG',
												'LUCKY GEMS',
											),
										),
									),
								),
								array(
									'floor_id' => '1floor',
									'floor_name' => '1 FLOOR',
									'floor_img' => './assets/img/design/branch3-floor2.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'CASA LAPIN',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'BELLDILAR',
												'CC DOUBLE O',
												'CHARLES & KEITH',
												'ESP',
												'FITFLOP',
												'GIORDANO',
												'H&M ',
												'JASPAL',
												'LEVI\'S',
												'PANDORA',
												'POMELO',
												'RED WAREHOUSE BY FLYNOW',
												'TAYWIN ORIGINAL STYLE',
												'VNC',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'EYELAB EXCLUSIVE',
												'O.W.L.',
												'THE NEXT',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'HARNN',
												'IT\'S SKIN',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'CHABA NAILS & EYELASHES PRO',
												'CHALACHOL',
												'EIGHTY THAI MASSAGE',
											),
										),
									),
								),
								array(
									'floor_id' => '2floor',
									'floor_name' => '2 FLOOR',
									'floor_img' => './assets/img/design/branch3-floor3.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'GAGA',
												'MEE KHWAM SOOK',
												'STARBUCKS',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'AIIZ',
												'ELEMENT 72',
												'GENTLEWOMAN',
												'SMILEYHOUND',
												'THE TIARA',
												'UNIQLO',
												'YUEDPAO',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'GOLDEN OPTIC',
											),
										),
										array(
											'store_group' => 'SPORTS',
											'store_list' => array(
												'JD SPORTS',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'ALL ABOUT YOU',
												'COS MARCHE',
												'EVEANDBOY',
												'MTI',
												'TWENTY FOUR HOURS MINERALS',
												'YVES ROCHER',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'GAMO',
												'THE KLINIQUE NAIL PALETTES',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'MOSHI MOSHI',
											),
										),
										array(
											'store_group' => 'KEY ANCHOR',
											'store_list' => array(
												'MUJI',
											),
										),
									),
								),
								array(
									'floor_id' => '3floor',
									'floor_name' => '3 FLOOR',
									'floor_img' => './assets/img/design/branch3-floor4.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'BATA',
												'SUITCUBE',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'BETTER VISION ',
												'INFINITE EYEWEAR',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'SIZZERS HAIR SALON',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'MUSIC ARMS',
												'SE-ED BOOK CENTER',
												'STRAWBERRY CLUB',
												'WATSONS',
												'WATTS',
											),
										),
										array(
											'store_group' => 'IT & ELECTRONICS',
											'store_list' => array(
												'I STUDIO BY UFICON',
											),
										),
									),
								),
								array(
									'floor_id' => '4floor',
									'floor_name' => '4 FLOOR',
									'floor_img' => './assets/img/design/branch3-floor5.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'PETA  PET  SHOP',
											),
										),
									),
								),
								array(
									'floor_id' => '5floor',
									'floor_name' => '5 FLOOR',
									'floor_img' => './assets/img/design/branch3-floor6.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'AKA',
												'AMPHAWA',
												'BAAN YING',
												'BAKE A WISH',
												'BAN KUAI TIAO',
												'BAR B Q PLAZA',
												'COCO ICHIBANYA',
												'DOU',
												'EARW THAI',
												'FUJI RESTAURANT ',
												'GUGU CHICKEN',
												'HACHIBAN RAMEN',
												'JAGUEMSONG',
												'JINLONG HOUSE',
												'KAGONOYA',
												'KAMU TEA',
												'KIN DONBURI',
												'KOFUKU',
												'LAEM CHAROEN SEAFOOD',
												'MK RESTAURANTS',
												'MONGKOK SUKIYAKI',
												'MR.BAO MALATANG',
												'NEN NHE',
												'NICE TWO MEAT U',
												'OHKAJHU',
												'OISHI RAMEN',
												'OOTOYA',
												'PRANAKORN NOODLE',
												'RAMENGA',
												'S & P',
												'SALAD FACTORY',
												'SANTA FE\'',
												'SEKI',
												'SEOULCHON',
												'SHABUSHI',
												'SIZZLER',
												'SUSHIRO',
												'SWENSEN\'S',
												'TENJO SUSHI & YAKINIKU PREMIUM BUFFET',
												'TUMMOUR',
												'XING FU TANG ',
												'YAKINIKU LIKE',
												'YAYOI JAPANESE RESTAURANT',
												'YOU & I',
												'ZEN RESTAURANT',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'DAISO',
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
												'TMBTHANACHART BANK (TTB)',
												'TISCO',
												'THE THAICREDIT RETAIL BANK (TCR)',
												'SIAM COMMERCIAL BANK OF THAILAND (SCB)',
												'LAND AND HOUSES BANK (LH)',
												'GOVERNMENT SAVINGS BANK (GSB)',
												'GOVERNMENT HOUSING BANK (GHB)',
												'UMAY+',
												'UOB XPRESS',
												'SUPERRICH 1965 ',
												'NGERN TID LOR',
												'MUANG THAI LIFE ASSURANCE (MTL)',
												'THE VIRIYAH INSURANCE',
											),
										),
										array(
											'store_group' => 'SERVICE',
											'store_list' => array(
												'JEWELRY CLINIC',
											),
										),
									),
								),
								array(
									'floor_id' => '6floor',
									'floor_name' => '6 FLOOR',
									'floor_img' => './assets/img/design/branch3-floor7.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'CAFÉ AMAZON',
												'CHESTER\'S',
												'DAIRY QUEEN',
												'FUKU MUTCHA',
												'KFC',
												'MIXUE ',
												'TEA TO ONE',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'APEX',
												'AURA BANGKOK CLINIC',
												'DANAINUT CLINIC',
												'DOCTOR LIFE',
												'INKFAH CLINIC',
												'NITIPON CLINIC',
												'PAN CLINIC',
												'RAJDHEVEE CLINIC',
												'SPARSHA',
												'THE KLINIQUE',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'TRUST DENTAL & AESTHETIC CLINIC',
											),
										),
										array(
											'store_group' => 'KEY ANCHOR',
											'store_list' => array(
												'CHIVIT-D BY SCG',
											),
										),
										array(
											'store_group' => 'IT & ELECTRONICS',
											'store_list' => array(
												'AIS',
												'BANANA ',
												'BIG CAMERA',
												'CASE TOWN',
												'CSC',
												'EC MALL ',
												'FOCUS STORE',
												'IT CITY',
												'J I B',
												'JAYMART',
												'PA PHONE',
												'REALME BY JAYMART',
												'REMAX',
												'SAMSUNG BY TG',
												'TG ',
												'TRUE l DTAC',
												'XIAOMI STORE BY LAKECOM',
											),
										),
										array(
											'store_group' => 'EDUCATION',
											'store_list' => array(
												'YAMAHA MUSIC SCHOOL',
											),
										),
										array(
											'store_group' => 'ATTRACTION & ENTERTAINMENT',
											'store_list' => array(
												'HARBORLAND',
												'FANTASIA LAGOON',
											),
										),
									),
								),
							),
						),
						array(
							'branch_id' 	=> 'thaphra',
							'branch_name' 	=> 'THAPHRA',
							'branch_floor'	=> array(
								array(
									'floor_id' => 'bfloor',
									'floor_name' => 'B FLOOR',
									'floor_img' => './assets/img/design/branch4-floor1.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'INTHANIN',
												'KAMU TEA',
												'POTATO CORNER',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'BOOTS',
												'VEJPONGOSOT',
												'WATSONS',
											),
										),
										array(
											'store_group' => 'GOLD & JEWELRY',
											'store_list' => array(
												'AURORA',
												'PETCH BUALUANG',
												'PETCHTHONGBAIYAOWARAT',
												'PREMIUM DIAMOND',
												'SRITHONG GOLDS',
												'SUI SENG HENG',
												'VGOLD YAOWARAT',
												'YAOWARAT THAPHRA',
												'AKKHRAMANI',
												'JUBILEE DIAMOND',
												'KANJANA DIAMOND',
												'MOTTA',
												'NA PITSAMAI',
												'PROUD DIAMOND',
											),
										),
									),
								),
								array(
									'floor_id' => 'gfloor',
									'floor_name' => 'G FLOOR',
									'floor_img' => './assets/img/design/branch4-floor2.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'KOI THE\'',
												'MILK LAND ',
												'STARBUCKS',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'AIIZ',
												'BIRKENSTOCK',
												'CATH KIDSTON',
												'GIORDANO',
												'H&M ',
												'KEDS',
												'MATCHBOX',
												'PANDORA',
												'UNIQLO',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'EYELAB EXCLUSIVE',
												'O.W.L.',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'CUTE PRESS',
												'Dr.PONG',
												'GRATIAE',
												'KARMART',
												'MTI',
												'ORIENTAL PRINCESS',
												'YVES ROCHER',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'RICHES BROW',
												'SAYLEB STUDIO',
												'THE KLINIQUE NAIL PALETTES',
											),
										),
									),
								),
								array(
									'floor_id' => '1floor',
									'floor_name' => '1 FLOOR',
									'floor_img' => './assets/img/design/branch4-floor3.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'CAFÉ AMAZON',
												'COFFEE 101',
												'LA LA SHABU',
												'MIXUE ',
												'RUNJUAN PUNPUANJAI ',
												'YAKINIKU LIKE',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'BATA',
												'TAYWIN ORIGINAL STYLE',
												'YUEDPAO',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'BETTER VISION ',
												'CHOKEDEE OPTICAL',
												'THE NEXT',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'EVEANDBOY',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'MOSHI MOSHI',
												'MR. D.I.Y.',
											),
										),
										array(
											'store_group' => 'IT & SERVICE ',
											'store_list' => array(
												'APPLE HOUSE',
												'STUDIO 7',
											),
										),
									),
								),
								array(
									'floor_id' => '2floor',
									'floor_name' => '2 FLOOR',
									'floor_img' => './assets/img/design/branch4-floor4.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'BANK & NON BANK',
											'store_list' => array(
												'KTC TOUCH',
												'A MONEY',
											),
										),
									),
								),
								array(
									'floor_id' => '3floor',
									'floor_name' => '3 FLOOR',
									'floor_img' => './assets/img/design/branch4-floor5.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'BAR B Q PLAZA',
												'BEARHOUSE',
												'BONCHON',
												'COCO ICHIBANYA',
												'FUJI RESTAURANT ',
												'HACHIBAN RAMEN',
												'HO HO KITCHEN ',
												'IRON MAN',
												'KOFUKU',
												'LA MEOW',
												'MENG ZAP NUA ',
												'MISAWA OSAKA  TONKOTSU RAMEN',
												'MK RESTAURANTS',
												'OISHI BIZTORO',
												'OOTOYA',
												'PEPPER LUNCH',
												'PRANAKORN NOODLE',
												'PUNG SIAM',
												'REDSUN',
												'SANTA FE\'',
												'SENJU SHABU  & SUSHI PREMIUM BUFFET',
												'SEOULCHON',
												'SHABUSHI',
												'SIZZLER',
												'SUSHIRO',
												'SWENSEN\'S',
												'TENJO SUSHI & YAKINIKU PREMIUM BUFFET',
												'TEOW REAUA BIN',
												'THE ALLEY',
												'THE PIZZA COMPANY',
												'TUM MAI YUD',
												'YAYOI JAPANESE RESTAURANT',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'NITIPON CLINIC',
												'PAN CLINIC',
												'PORNKASEM CLINIC',
												'SPARSHA',
												'THE KLINIQUE',
												'URANUS CLINIC',
												'V SQUARE CLINIC',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'BAANSAIFON MASSAGE',
												'FIRST SMILE DENTAL CLINIC',
												'MILK KIDS SALON & NAILS',
												'MIND HAIR',
												'NANCY',
												'PEN THE STYLE SALON',
											),
										),
										array(
											'store_group' => 'IT & ELECTRONICS',
											'store_list' => array(
												'AIS',
												'BANANA ',
												'CSC',
												'FOCUS STORE',
												'JAYMART',
												'OPPO ',
												'SAMSUNG BY COM 7',
												'TG ',
												'TRUE l DTAC',
											),
										),
										array(
											'store_group' => 'ATTRACTION & ENTERTAINMENT ',
											'store_list' => array(
												'FITNESS FIRST',
												'HARBORLAND',
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
												'TMBTHANACHART BANK (TTB)',
												'TISCO',
												'THE THAICREDIT RETAIL BANK (TCR)',
												'SIAM COMMERCIAL BANK OF THAILAND (SCB)',
												'UNITED OVERSEAS BANK (UOB )',
												'LAND AND HOUSES BANK (LH)',
												'GOVERNMENT SAVINGS BANK (GSB)',
												'UMAY+',
												'AEON',
												'EASY BUY',
												'BANGKOK INSURANCE',
												'THAI LIFE INSURANCE',
												'MUANG THAI LIFE ASSURANCE (MTL)',
											),
										),
									),
								),
								array(
									'floor_id' => '4floor',
									'floor_name' => '4 FLOOR',
									'floor_img' => './assets/img/design/branch4-floor6.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'ATTRACTION & ENTERTAINMENT',
											'store_list' => array(
												'SF CINEMA',
											),
										),
									),
								),
							),
						),
						array(
							'branch_id' 	=> 'korat',
							'branch_name' 	=> 'KORAT',
							'branch_floor'	=> array(
								array(
									'floor_id' => 'bfloor',
									'floor_name' => 'B FLOOR',
									'floor_img' => './assets/img/design/branch5-floor1.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'BEAUTY BUFFET',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'INSPIRE CLINIC',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'WATSONS',
											),
										),
										array(
											'store_group' => 'BANK & NON BANK',
											'store_list' => array(
												'KRUNGSRI FIRST CHOICE',
												'KRUNG THAI BANK (KTB)',
												'KASIKORNBANK',
												'LAND AND HOUSES BANK (LH)',
												'GOVERNMENT SAVINGS BANK (GSB)',
												'A MONEY',
												'THE VIRIYAH INSURANCE',
											),
										),
									),
								),
								array(
									'floor_id' => '1floor',
									'floor_name' => '1 FLOOR',
									'floor_img' => './assets/img/design/branch5-floor2.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'AFTER YOU',
												'BEARHOUSE',
												'BONCHON',
												'BURGER KING',
												'CHA TRA MUE',
												'CHESTER\'S',
												'CLASS CAFÉ',
												'FUJI RESTAURANT ',
												'KFC',
												'MCDONALD\'S',
												'MISTER DONUT',
												'MOS BURGER',
												'PIZZA HUT',
												'POTATO CORNER',
												'STARBUCKS ',
												'SWENSEN\'S',
												'TEXAS CHICKEN',
												'THE PIZZA COMPANY',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'AIIZ',
												'BATA',
												'CC DOUBLE O',
												'CPS CHAPS',
												'DAPPER ',
												'EXPORT SHOP',
												'FINDIG',
												'H&M ',
												'HAAS',
												'HOLLYWOOD STUDIO STORE',
												'JASPAL',
												'LEE/WRANGLER',
												'LOUIS  MORAIS',
												'LYN',
												'MC JEANS',
												'MISTY MYNX',
												'PENA HOUSE',
												'PLAYBOY',
												'POMELO',
												'POY',
												'SUITCUBE',
												'TAYWIN ORIGINAL STYLE',
												'UDOMAGG',
												'UNIQLO',
												'YUEDPAO',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'EYELAB EXCLUSIVE',
												'THE NEXT',
											),
										),
										array(
											'store_group' => 'SPORTS',
											'store_list' => array(
												'DECATHLON',
												'SKECHERS TH',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'KEDMA',
												'ORIENTAL PRINCESS',
												'THE FACE SHOP',
												'YVES ROCHER',
												'CUTE PRESS',
												'IT\'S SKIN',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'BOOTS',
												'SE-ED BOOK CENTER',
											),
										),
										array(
											'store_group' => 'GOLD & JEWELRY',
											'store_list' => array(
												'KEERATI GOLDS',
												'KHUNHEN GOLD',
												'PETCHSUWAN GOLD',
												'PETCHSUWAN GOLD',
												'PETCHSUWAN GOLD ',
												'PHANTHONG GOLD',
												'SUCHEERA JEWELRY',
												'THONG SUAY GOLDS',
												'JUBILEE DIAMOND',
											),
										),
										array(
											'store_group' => 'BANK & NON BANK',
											'store_list' => array(
												'BANGKOK BANK (BBL)',
											),
										),
									),
								),
								array(
									'floor_id' => '2floor',
									'floor_name' => '2 FLOOR',
									'floor_img' => './assets/img/design/branch5-floor3.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'AKA',
												'BAR B Q PLAZA',
												'BLACK CANYON COFFEE',
												'DUNKIN\' ',
												'HACHIBAN RAMEN',
												'HOT POT BUFFET',
												'KAMU TEA',
												'MEZZO',
												'MK RESTAURANTS',
												'S & P',
												'SIZZLER',
												'YAYOI JAPANESE RESTAURANT',
											),
										),
										array(
											'store_group' => 'FASHION & ACCESSORIES',
											'store_list' => array(
												'AEROSOFT',
												'CITY CHAIN',
												'DISCOUNT OUTLET',
												'DR. KONG ',
												'JELLY BUNNY',
												'LYN  AROUND',
												'MCM BY มีจงมี',
											),
										),
										array(
											'store_group' => 'OPTICAL',
											'store_list' => array(
												'THE NEXT',
												'BETTER VISION ',
												'GOLDEN OPTIC',
												'LUX OPTIC',
												'O.D. OPTIC',
												'OPTICAL 88',
												'OPTICAL ONE',
												'OWNDAYS',
											),
										),
										array(
											'store_group' => 'SPORTS',
											'store_list' => array(
												'ARI FOOTBALL',
												'CONVERSE',
												'REV OUTLET',
											),
										),
										array(
											'store_group' => 'SKINCARE & COSMETIC',
											'store_list' => array(
												'KEDMA',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'GANGNAM CLINIC',
												'PAN CLINIC',
												'RAMAWIN SKIN & LASER CLINIC',
												'SLIM UP CENTER',
												'The BEST Clinic',
												'THE KLINIQUE',
												'THE VENISIA CLINIC',
												'URANUS CLINIC',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'PEN THE STYLE SALON',
												'SASSY NAIL SOCIETY',
												'SOMPONG DENTAL CLINIC',
											),
										),
										array(
											'store_group' => 'LIFESTYLE',
											'store_list' => array(
												'AIR STUDIO',
												'DAISO',
												'KONCEPT',
												'MOSHI MOSHI',
												'MR. D.I.Y.',
												'MUSIC ARMS',
												'PINN SHOP',
												'WATSONS',
											),
										),
										array(
											'store_group' => 'KEY ANCHOR',
											'store_list' => array(
												'SB DESIGN SQUARE',
											),
										),
										array(
											'store_group' => 'IT & SERVICE',
											'store_list' => array(
												'CSC',
												'JAYMART',
												'SAMSUNG BY JAYMART',
											),
										),
										array(
											'store_group' => 'EDUCATION',
											'store_list' => array(
												'GUMPUN MUAY THAI ',
												'INLINGUA',
											),
										),

									),
								),
								array(
									'floor_id' => '3floor',
									'floor_name' => '3 FLOOR',
									'floor_img' => './assets/img/design/branch5-floor4.jpg',
									'floor_store' => array(
										array(
											'store_group' => 'DINING',
											'store_list' => array(
												'CRISPY CREPES',
												'LA MOON CAFE',
												'NOBI CHA',
												'KFC',
												'OISHI RAMEN',
												'PRANAKORN NOODLE',
												'SANTA FE\'',
												'SHABUSHI',
											),
										),
										array(
											'store_group' => 'BEAUTY CLINIC',
											'store_list' => array(
												'MARIZA CLINIC',
												'PORNKASEM CLINIC',
												'SLIM CONCEPT',
											),
										),
										array(
											'store_group' => 'BEAUTY SERVICE',
											'store_list' => array(
												'FUTURE CUT',
												'TOB1 HAIR STATION',
											),
										),
										array(
											'store_group' => 'KEY ANCHOR',
											'store_list' => array(
												'SB DESIGN SQUARE',
											),
										),
										array(
											'store_group' => 'IT & ELECTRONICS',
											'store_list' => array(
												'JAYMART',
												'BANANA ',
												'BIG CAMERA',
												'FOCUS STORE',
												'I CARE',
												'IT CITY',
												'MINE BY J I B',
												'OPPO ',
												'PA PHONE',
												'SAMSUNG BY TG',
												'STUDIO 7 ',
												'TG ',
												'TRUE l DTAC',
												'XIAOMI STORE BY COM 7',
											),
										),
										array(
											'store_group' => 'BANK & NON BANK',
											'store_list' => array(
												'BANK OF AYUDHYA (BAY)',
												'KGI SECURITIES',
												'MUANG THAI LIFE ASSURANCE (MTL)',

											),
										),
										array(
											'store_group' => 'ATTRACTION & ENTERTAINMENT',
											'store_list' => array(
												'FITNESS FIRST',
												'MAJOR CINEPLEX : KORAT CINEPLEX',
											),
										),
									),
								),
							),
						),
					);
					?>
					<div class="directory-select">
						<div class="select">
							<select name="" id="" class="select2 select-branch">
								<?php
								foreach ($directory_arr as $directory):
								?>
									<option value="<?php echo $directory['branch_id']; ?>"><?php echo $directory['branch_name']; ?></option>
								<?php
								endforeach;
								?>
							</select>
						</div>
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
	</div>
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