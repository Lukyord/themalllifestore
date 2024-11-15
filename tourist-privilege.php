<?php $root = ""; ?>

<?php include($root . "header.php"); ?>
<main id="main" class="page-main single">
	<?php
	$single_bg = 'linear-gradient(270deg, #AA9363 0%, #806939 100%);';
	$single_title = 'Tourist card benefits ';
	$single_img = './assets/img/design/tour-img.jpg';
	$single_detail = array(
		array(
			'detail_title' => '',
			'detail_desc' => 'Scan QR code and enjoy Tourist card discounts at THE MALL, THE MALL LIFESTORE, EMPORIUM, EMQUARTIER, EMSPHERE, PARAGON’s department store(s) and up to 50% at EM Shopping Complex.',
		),
	);

	include($root . "./include/single-intro.php");

	$single_content = '
	<img style="width: 385px; margin: 0 auto; display: block;" src="./assets/img/design/qr-img.png" alt="">
	<h4 class="c-theme-red">CONDITIONS</h4>
<ul>
	<li><span class="c-theme-red">Receive 5%*</span> discount on regular priced merchandises in Department Store, Selected Thai Designer and Sport Mall.</li>

	<li><span class="c-theme-red">Receive up to 50%*</span> discount from participating shops in the Shopping Complex at Emporium, EmQuartier and Emsphere</li>

	<li><span class="c-theme-red">Receive 5%*</span> discount on regular priced merchandises in Gourmet Market, Power Mall, Another Story and Another Man Story</li>

	<li><span class="c-theme-red">Receive up to 6%*</span> VAT Refund. * VAT Refund Application for Tourists Form (P.P. 10, E-P.P. 10)</li>

	<li>Discount is not applicable for Pharmacy, Liquor & Wine Cellar, Food Hall, Take Home, Gift voucher, Gift cards,  Top-up cards, partial deposit, service shop, rental shop,  M-online, M Chat&Shop and delivery fee.</li>

	<li>This card is not applicable when in use with other promotional campaigns or special discounts.</li>

	<li>The company reserves the right to any change without prior notice.</li>
</ul>
<small>* Terms and conditions may apply</small>
<p>For more information, please contact
<br>Paragon Department Store: <a class="c-theme-red" href="tel:+662-269-1000">+662-269-1000</a>
<br>Emporium, EmQuartier and Emsphere:  <a class="c-theme-red" href="tel:+662-269-1000">+662-269-1000</a>
<br>The Mall : <a class="c-theme-red" href="tel:+662-310-1000">+662-310-1000</a></p>';
	include($root . "./include/single-content.php");
	?>
</main>
<?php include($root . "footer.php"); ?>