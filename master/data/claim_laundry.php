<?php 
require_once('../class/Laundry.php');
require_once('../class/Sales.php');
if(isset($_POST['id'])){
	$id = $_POST['id'];

	$details = $laundry->get_laundry2($id);
	$customer = $details['customer_name'];
	$type_desc = $details['laun_type_desc'];
	$laundry_rec = $details['laun_date_received'];
	$amount = $details['laun_weight'] * $details['laun_type_price'];
	$saleRes = $sales->new_sales($customer, $type_desc, $laundry_rec, $amount);
	$claimRes = $laundry->claim_laundry($id);
}

$laundry->Disconnect();