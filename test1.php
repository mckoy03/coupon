<?php

use Test\Coupon;

$coupon = new Coupon();
$coupon->fetchCoupons();

// getting list of coupons
$coupons = $coupon->getCoupons();

$smarty = new Smarty;
$smarty->assign('testNum', '1');
$smarty->assign("coupons", $coupons);

$smarty->display('index.tpl');
