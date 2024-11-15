<?php $root = ""; ?>

<?php include($root."header.php");?>
<main id="main" class="page-main single">
<?php
	$single_title = 'ทาด๊า! 19 โซนสุดปัง ช้อปฉ่ำ ไม่มีอ่อม ใน Gourmet Market';
	$single_img = './assets/img/design/content1-cover.jpg';
	$single_detail = array(
		array(
			'detail_title' => 'LOCATION',
			'detail_desc' => 'เดอะมอลล์ไลฟ์สโตร์ บางแค ชั้น G',
		),
	);
	
	include($root."./include/single-intro.php");

	$single_content = '<p>พาทัวร์โซนเด็ดที่รวบรวมไอเทมน่าตำใน Gourmet Market ครบครันทั้งของกิน ของใช้ ด้วยสินค้า และวัตถุดิบสุดพรีเมียม </p>
	<ul>
		<li>Gourmet Natural ผัก ผลไม้สด และสินค้าออร์แกนิก </li>
		<li>Local Fruits ผลไม้ท้องถิ่นจากทั่วประเทศไทย </li>
		<li>Imported Fruits ผลไม้นำเข้าจากต่างประเทศ</li>
		<li>Local & Imported Vegetables ผักสดจากประเทศไทย และต่างประเทศ </li>
		<li>Seafood วัตถุดิบสดจากทะเล </li>
		<li>Pork & Poultry โซนเนื้อสัตว์ </li>
		<li>Butcher โซนเนื้อวัวจากไทย และต่างประเทศ </li>
		<li>James Madison โซนเนื้อวัวนำเข้าเกรดพรีเมียมจากแหล่งที่ดีที่สุด</li>
		<li>Gourmet Soup & Salad Bar ซุป และสลัดผัก </li>
		<li>Grab & Go อาหารพร้อมทาน </li>
		<li>Thai Deli โซนอาหารไทยพร้อมทาน </li>
		<li>Cheese โซนชีสนำเข้าจากหลากหลายประเทศ </li>
		<li>Charcuterie & Sausage แฮม และไส้กรอก </li>
		<li>Dairy ผลิตภัณฑ์จากนม </li>
		<li>The Talad ของดีตลาดเด่น รวมสินค้าจากตลาดดังทั่วไทย อาทิ OR TOR KOR ที่สุดความอร่อยจากตลาด อตก. กว่า 40 เมนู</li>
		<li>You Hunt We Cook บริการปรุงเมนูโดยเชฟมืออาชีพ จากวัตถุดิบที่คุณเลือก และเมนูพร้อมทานกว่า 70 เมนู</li>
		<li>Beauty Parlour รวมสินค้าเพื่อสุขภาพและความงามจากแบรนด์ชั้นนำ พร้อม Tokyo Nail it Shop เนลซาลอนสัญชาติญี่ปุ่น</li>
		<li>The Asian & International Grocer โซนวัตถุดิบและเครื่องปรุงจากทั้งประเทศไทยและต่างประเทศ</li>
		<li>PET Club Select โซนสินค้าสำหรับสัตว์เลี้ยง</li>
	</ul>
	<p>ใครมองหาวัตถุดิบสุดพรีเมียม ครบ จบ ในที่เดียว ต้อง Gourmet Market สาขาเดอะมอลล์ไลฟ์สโตร์ บางแค ชั้น G
	มหานครความสุข สนุกครบทุก GEN 
	เดินทางสะดวกด้วยรถไฟฟ้า MRT สายสีน้ำเงิน ลงสถานี “หลักสอง”​</p>';
	include($root."./include/single-content.php");


	$singleGallery_arr = array(
		'./assets/img/design/content1-01.jpg',
		'./assets/img/design/content1-02.jpg',
		'./assets/img/design/content1-03.jpg',
		'./assets/img/design/content1-04.jpg',
		'./assets/img/design/content1-05.jpg',
		'./assets/img/design/content1-06.jpg',
		'./assets/img/design/content1-07.jpg',
		'./assets/img/design/content1-08.jpg',
		'./assets/img/design/content1-09.jpg',
		'./assets/img/design/content1-10.jpg',
		'./assets/img/design/content1-11.jpg',
		'./assets/img/design/content1-12.jpg',
		'./assets/img/design/content1-13.jpg',
		'./assets/img/design/content1-14.jpg',
		'./assets/img/design/content1-15.jpg',
		'./assets/img/design/content1-16.jpg',
		'./assets/img/design/content1-17.jpg',
		'./assets/img/design/content1-18.jpg',
		'./assets/img/design/content1-19.jpg',
		'./assets/img/design/content1-20.jpg',
	);
	include($root."./include/single-gallery.php");
?>
</main>
<?php include($root."footer.php");?>