<?php
ini_set('display_errors',true);
error_reporting(E_ALL);
	require_once('./json.php');
	require_once('./dbconn.php');
	require_once('./db_func.php');
	
	@session_start();
	
	$data = $_POST['data'];
	$data['start_date']= format_date($data['start_date']);
	$data['terms'] = str_replace(',','',$data['terms']);
	$data['downpayment'] = str_replace(',','',$data['downpayment']);
	$data['annual_interest_percent'] = str_replace(',','',$data['annual_interest_percent']);
	$data['costprice'] = str_replace(',','',$data['costprice']);
	$data['amount_finance'] = str_replace(',','',$data['amount_finance']);
	$data['month_payment'] = str_replace(',','',$data['month_payment']);
	$data['month_payment_pmi'] = str_replace(',','',$data['month_payment_pmi']);
	$data['total_amort'] = str_replace(',','',$data['total_amort']);
	$data['amort'] = $data['total_amort'];
	$data['address'] = $_SESSION['address'];
	$data['email'] = $_SESSION['email'];
	$data['buyer'] = $_SESSION['name'];
	$data['mobile'] =isset($_SESSION['mobile'])?$_SESSION['mobile']:'';
	$data['user_id'] = $_SESSION['id'];
	$data['date'] = date('Y-m-d H:i:s',strtotime('now'));
	insertData($data,$conn,'reserve');

	$json = new Services_JSON();
	echo $json->encode('success');
	

?>