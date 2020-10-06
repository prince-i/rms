


<?php
include '../db/config.php';
$months = array();
$pass = array();
$fail = array();
$count = 0;
$sql = "SELECT MonthName(date_applied) as months from tbl_applicant group by  MonthName(date_applied) order by Month(date_applied)";
$query = $db->query($sql);
while ($res=$query->fetch_assoc()) 
{

	$months = $res['months'];


	 $sql1 = "SELECT COUNT(listId) as total from tbl_applicant where MonthName(date_applied) like '".$res['months']."' and  assessment_result like 'P'";
	 $query1 = $db->query($sql1);
	 while ($res1 = $query1->fetch_assoc()) 
	 {
	 	//$pass[] = $res1['total'];
	 	$pass[] = array("label"=> "".$months."", "y"=> "".$res1['total']."");
	 }


	 $sql2 = "SELECT COUNT(listId) as total from tbl_applicant where MonthName(date_applied) like '".$res['months']."' and  assessment_result like 'F'";
	 $query2 = $db->query($sql2);
	 while ($res2 = $query2->fetch_assoc()) 
	 {
	 	//$fail[] = $res2['total'];
	 	$fail[] = array("label"=> "".$months."", "y"=> "".$res2['total']."");
	 }

$count++;
}
?>




<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Passed and Failed"
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Passed",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($pass, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Failed",
		indexLabel: "{y}",
		//yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($fail, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="../plugins/canvasjs/canvasjs.min.js"></script>
</body>
</html>    