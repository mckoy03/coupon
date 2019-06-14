<?php

use Test\Coupon;

$coupon = new Coupon();

if (isset($_POST['insert'])) {
	$data = [
		'id' => false,
		'resellercode' => $_POST['resellercode'],
		'discount' => $_POST['discount'],
		'commission' => $_POST['commission'],
		'product' => $_POST['product']
		];

	$id = $coupon->insertCoupon($data);
	
	if ($id) {
		echo json_encode($coupon->getCoupon($id));
	}
}
else {
	echo 0;
}
