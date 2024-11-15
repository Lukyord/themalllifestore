<?php $root = ""; ?>

<?php include($root."header.php");?>
<main id="main" class="page-main single">
<?php
	$single_title = 'ยกขบวนศิลปินดารามาแบบจัดเต็ม ร่วมเฉลิมฉลองการเปิดตัวครั้งยิ่งใหญ่';
	$single_img = './assets/img/design/content4-cover.jpg';
	$single_detail = array(
		array(
			'detail_title' => 'LOCATION',
			'detail_desc' => 'เดอะมอลล์ไลฟ์สโตร์ บางแค ชั้น G',
		),
	);
	
	include($root."./include/single-intro.php");

	$single_content = '<h4 class="c-theme-red">เดินทางสะดวกได้ดังนี้</h4>
	<ul>
		<li>รถยนต์ส่วนบุคคลสามารถใช้บริการจุดจอดรถได้ดังนี้</li>
		<li>อาคารจอดรถ ศูนย์การค้าเดอะมอลล์ไลฟ์สโตร์ บางแค</li>
		<li>อาคารจอดรถ SB DESIGN SQUARE เดอะมอลล์ไลฟ์สโตร์ บางแค</li>
	</ul>
	
	<h4 class="c-theme-red">เดินทางด้วยรถไฟฟ้า</h4>
	<ul>
		<li>MRT สถานีหลักสอง และใช้สกายวอล์คมาศูนย์การค้า</li>
		<li>รถโดยสารประจำทาง</li>
		<li>เดินทางด้วยรถตู้</li>
		<li>เดินทางด้วยรถสองแถว</li>
	</ul>';
	include($root."./include/single-content.php");


	$singleGallery_arr = array(
		'./assets/img/design/content4-01.jpg',
		'./assets/img/design/content4-02.jpg',
		'./assets/img/design/content4-03.jpg',
		'./assets/img/design/content4-04.jpg',
		'./assets/img/design/content4-05.jpg',
		'./assets/img/design/content4-06.jpg',
		'./assets/img/design/content4-07.jpg',
	);
	include($root."./include/single-gallery.php");
?>
</main>
<?php include($root."footer.php");?>