<?php $root = ""; ?>

<?php include($root."header.php");?>
<main id="main" class="page-main single">
<?php
	$single_title = 'เอาใจคนรักอาหารญี่ปุ่นรวมร้านมาให้แบบฉ่ำๆ';
	$single_img = './assets/img/design/content3-cover.jpg';
	$single_detail = array(
		array(
			'detail_title' => 'LOCATION',
			'detail_desc' => 'เดอะมอลล์ไลฟ์สโตร์ บางแค',
		),
	);
	
	include($root."./include/single-intro.php");

	$single_content = '<p>ไม่ต้องบินไปถึงญี่ปุ่นก็ฟินได้ที่ <span class="c-theme-red">เดอะมอลล์ไลฟ์สโตร์ บางแค</span></p>
	<ul>
		<li>Sushiro ชั้น 3</li>
		<li>Maguro ชั้น 2</li>
		<li>Shi-Tori Cafe ชั้น 2</li>
		<li>You&I ชั้น 2</li>
		<li>Shabu Tomo ชั้น 3</li>
		<li>A Ramen ชั้น 2</li>
		<li>Kogoro Katsu ชั้น 2</li>
		<li>Ootoya ชั้น 2</li>
	</ul>
	<p>มหานครความสุข สนุกครบทุก GEN 
	เดินทางสะดวกด้วยรถไฟฟ้า MRT สายสีน้ำเงิน ลงสถานี “หลักสอง”​</p>';
	include($root."./include/single-content.php");


	$singleGallery_arr = array(
		'./assets/img/design/content3-01.jpg',
		'./assets/img/design/content3-02.jpg',
		'./assets/img/design/content3-03.jpg',
		'./assets/img/design/content3-04.jpg',
		'./assets/img/design/content3-05.jpg',
		'./assets/img/design/content3-06.jpg',
		'./assets/img/design/content3-07.jpg',
		'./assets/img/design/content3-08.jpg',
		'./assets/img/design/content3-09.jpg',
	);
	include($root."./include/single-gallery.php");
?>
</main>
<?php include($root."footer.php");?>