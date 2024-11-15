<?php $root = ""; ?>

<?php include($root."header.php");?>
<main id="main" class="page-main single">
<?php
	$single_title = 'พาส่องแฟชั่นสุดฮอต ปลุกความร้อนแรงรับซัมเมอร์ ';
	$single_img = './assets/img/design/content2-cover.jpg';
	$single_detail = array(
		array(
			'detail_title' => 'LOCATION',
			'detail_desc' => 'เดอะมอลล์ไลฟ์สโตร์ บางแค',
		),
	);
	
	include($root."./include/single-intro.php");

	$single_content = '<p>พาส่องแฟชั่นสุดฮอต ปลุกความร้อนแรงรับซัมเมอร์ 
	นักช้อปสายแฟห้ามพลาด กับคอลเลกชันสุดปังต้อนรับซัมเมอร์สุดฮอตปรอทแตก ที่รวบรวมมาแล้วให้ทุกคนได้แต่งสวย หล่อ สุดจึ้ง รับซัมเมอร์ ร้านไหนจะตรงสไตล์คุณบ้าง ไปดูกัน</p>
	<ul>
		<li>Moshi Moshi ชั้น M</li>
		<li>Uniqlo ชั้น M</li>
		<li>Better Vision (หอแว่น) ชั้น 1</li>
		<li>HLA Concept Store ชั้น M</li>
		<li>CC DOUBLE O ชั้น M</li>
		<li>H&M ชั้น M</li>
		<li>JASPAL ชั้น G</li>
	</ul>
	<p>ครยังไม่อัปเดตแฟชั่นซัมเมอร์ อย่าลืมมาช้อปกันที่...
	ที่เดอะมอลล์ไลฟ์สโตร์ บางแค
	เดินทางสะดวกด้วยรถไฟฟ้า MRT สายสีน้ำเงิน ลงสถานี “หลักสอง”</p>';
	include($root."./include/single-content.php");


	$singleGallery_arr = array(
		'./assets/img/design/content2-01.jpg',
		'./assets/img/design/content2-02.jpg',
		'./assets/img/design/content2-03.jpg',
		'./assets/img/design/content2-04.jpg',
		'./assets/img/design/content2-05.jpg',
		'./assets/img/design/content2-06.jpg',
		'./assets/img/design/content2-07.jpg',
		'./assets/img/design/content2-08.jpg',
		'./assets/img/design/content2-09.jpg',
		'./assets/img/design/content2-10.jpg',
		'./assets/img/design/content2-11.jpg',
		'./assets/img/design/content2-12.jpg',
	);
	include($root."./include/single-gallery.php");
?>
</main>
<?php include($root."footer.php");?>