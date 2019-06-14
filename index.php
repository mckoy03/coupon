<?php

require 'vendor/autoload.php';

if (isset($_GET['test'])) {
	switch ($_GET['test']) {
		case '1':
			require 'test1.php';
			break;
	}
}

if (isset($_GET['insert_coupon'])) {
	require 'insert.php';
}
