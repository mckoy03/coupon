<?php

namespace Test;

use Test\Connection;

class Coupon {

	protected $db;

	public $coupons;

	public function __construct() {
		$this->db = new Connection();
	}

	public function fetchCoupons() {
		$this->coupons = $this->db->conn()->fetchRowMany('SELECT * FROM coupons');
	}

	public function getCoupons() {
		return $this->coupons;
	}

	public function getCoupon($id) {
		$coupon = $this->db->conn()->fetchRow('SELECT * FROM coupons WHERE id = :id', ['id' => $id]);
		return $coupon;
	}

	public function insertCoupon($data) {
		$result = $this->db->conn()->insert('coupons', $data);
		return $result;
	}
}