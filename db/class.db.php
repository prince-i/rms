<?php

class DB
{


 private $db;
 public $base_url;
 public $request_url;
 
function __construct($conn)
{
	$this->db = $conn;
	$this->base_url = 'http://'.$_SERVER['HTTP_HOST'];
	$this->request_url = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

public function dateParse($date,$format){
	if($date!=''){
		if($date!='0000-00-00 00:00:00'){
			switch ($format) {
				case 'local':
					return date("n\/j\/Y", strtotime($date));
					break;
				case 'ISO_8601':
					return date('c',strtotime($date));
					break;
				case 'common':
					return date('Y-m-d H:i:s',strtotime($date));
					break;
				case 'date':
					return date('Y-m-d',strtotime($date));
					break;
				case 'date2':
					return date('Y\/m\/d',strtotime($date));
					break;
				case 'word':
					return date('F j, Y',strtotime($date));
					break;
				case 'word-trim':
					return date('M j',strtotime($date));
					break;
				case 'time12':
					return date('h:i a',strtotime($date));
					break;
				case 'time24':
					return date('H:i',strtotime($date));
					break;
				default:
					return 'No selected format.';
					break;
			}
		}else{
			return '';
			// return '<i class="text-muted small">N/A</i>';
		}
	}else{
		return '';
	}
}

public function jpConvert($string){
	// $string = mb_convert_encoding($string, 'UTF-8', array('EUC-JP', 'SHIFT-JIS', 'AUTO'));
	// $string = mb_substr($string, 0, 490, "UTF-8");;
	// $string = utf8_encode($string);
	$string = htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
	// $string = mb_substr($string, 0, 10, 'utf-8');
	return $string;
}

public function getDates($date_start, $date_end){
 	$dates = array();
	$day_interval = ((new DateTime($date_start))->diff((new DateTime($date_end))))->days;
	for ($i=0; $i < $day_interval+1; $i++) {
	  array_push($dates, date('Y-m-d', strtotime($date_start. '+'.$i.' day')));
	}

	return $dates;
}

public function getDateTimeDiff($from, $to){
	$time1 = new DateTime($from);
	$time2 = new DateTime($to);
	$interval = $time1->diff($time2);
	return $interval->format('%i min(s) ago');
}

public function isConnected(){
	$connected = @fsockopen("www.google.com", 80); 
    if ($connected){
        $is_conn = true;
        fclose($connected);
    }else{
        $is_conn = false;
    }
    return $is_conn;
}

public function getQuery($q){
 	try {

	 	$stmt = $this->db->prepare($q);
	 	$stmt->execute();
	 	$result = $stmt->fetchAll();
	 	if($result){
	 		return $result;
	 	}

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function getQueryOne($q){
 	try {

	 	$stmt = $this->db->prepare($q);
	 	$stmt->execute();
	 	$result = $stmt->fetch();
	 	if($result){
	 		return $result;
	 	}

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function execQuery($q){
 	try {

	 	$stmt = $this->db->prepare($q);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}

public function paramFunction($p){
 	try {

	 	$q = "
	 	CALL sp_add_result(
	 		:p_sample
	 	) ";

	 	$stmt = $this->db->prepare($q);
	 	$stmt->bindparam(":p_sample",$p['sample'],PDO::PARAM_STR);
	 	$stmt->execute();
	 	return true;

 	} catch (Exception $e) {
 		echo ($e->getMessage());
 		// print_r($e);
 	}
}


}
