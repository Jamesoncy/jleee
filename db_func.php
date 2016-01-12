<?php
	require_once("dbconn.php");

	function insertData($data =array(),$conn,$tableName =''){
		
		if (empty($data)){
			echo 'nothing to save.';
		}
		$arr_params = array();
		$ctr = 0;
		$dataField = '';
		$mark = '';
		foreach($data as $field => $data){
			if( $ctr != 0 ){
				$dataField .= ",";
				$mark .= ",";
			}
			$dataField .= $field;
			$mark .= "?";
			array_push($arr_params, $data);
			$ctr++;
		}
		// $dataField = substr($dataField,0,strlen($dataField)-1);
		// $mark = substr($mark,0,strlen($mark)-1);
		
		$stmt = $conn->prepare('INSERT INTO '.$tableName." ( " .$dataField." ) VALUES( ".$mark." )");
		$stmt->execute($arr_params);
		// var_dump('INSERT INTO '.$tableName." ( " .$dataField." ) VALUES( ".$mark." )");
	// var_dump()
	
	}
	
	function display_date($date){
		
		$tmpDate = explode('/',$date);
		$date = $tmpDate['1'].'/'. $tmpDate['2'].'/'. $tmpDate['0'];
		
		return $date;
	}
	
	function format_date($date){
		
		$tmpDate = explode('-',$date);
		$date = $tmpDate['2'].'/'. $tmpDate['0'].'/'. $tmpDate['1'];
		
		return $date;
	}

	function isAllowedToReserve($id)
	{
		global $conn;
		
		$string = "SELECT * FROM reserve WHERE user_id = ? AND ( Rstatus = 'Sold' OR Rstatus = 'Reserved' )";
		$stmt = $conn->prepare($string);
		$stmt->execute(array($id));
		
		$rs = $stmt->fetchAll();

		if(count($rs) <= 1){
			return true;
		}
		return false;
	}
	
?>