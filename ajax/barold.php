<?php
include '../db/config.php';
session_start();

if ($_SESSION['idNumber']!='')
  {
     $result['id_number'] =   $_SESSION['idNumber'];
     $result['name'] =   $_SESSION['name'];
     $result['position'] =   $_SESSION['position'];
     $result['department'] =   $_SESSION['department'];
  }
else
{
  header('location:index.php?msg=1');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>DashBoard</title>
</head>

<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>
<body>
<div id="chartdiv"></div>
<?php
$months = array();
$pass = array();
$fail = array();
$count = 0;
$sql = "SELECT MonthName(date_applied) as months from tbl_applicant group by  MonthName(date_applied) order by Month(date_applied)";
$query = $db->query($sql);
while ($res=$query->fetch_assoc())
{

	$months[] = $res['months'];


	 $sql1 = "SELECT COUNT(listId) as total from tbl_applicant where MonthName(date_applied) like '".$res['months']."' and  assessment_result like 'P'";
	 $query1 = $db->query($sql1);
	 while ($res1 = $query1->fetch_assoc())
	 {
	 	$pass[] = $res1['total'];
	 }
	 $sql2 = "SELECT COUNT(listId) as total from tbl_applicant where MonthName(date_applied) like '".$res['months']."' and  assessment_result like 'F'";
	 $query2 = $db->query($sql2);
	 while ($res2 = $query2->fetch_assoc())
	 {
	 	$fail[] = $res2['total'];
	 }

$count++;
}

$data=array();
for ($i=0; $i < $count; $i++)
{
	$data[]= '{"month": "'.$months[$i].'","Passed": "'.$pass[$i].'","Failed": "'.$fail[$i].'"}';


}


$all= json_encode($data);
?>




<script src="../plugins/amchart/core.js"></script>
<script src="../plugins/amchart/charts.js"></script>
<script src="../plugins/amchart/animated.js"></script>

<script>



am4core.ready(function() {

// Themes begin
am4core.useTheme(am4themes_animated);
// Themes end

// Create chart instance
var chart = am4core.create("chartdiv", am4charts.XYChart3D);
var sdata = <?php echo json_encode($data, JSON_NUMERIC_CHECK); ?>;
var tr = {"month": "February","Passed": "0","Failed": "3"};
alert(sdata);

chart.data = [sdata];


//chart.data = [tr];








// Create axes
var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
categoryAxis.dataFields.category = "month";
categoryAxis.renderer.grid.template.location = 0;
categoryAxis.renderer.minGridDistance = 30;

var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
valueAxis.title.text = "Passed and Failed";
valueAxis.renderer.labels.template.adapter.add("text", function(text) {
  return text + "%";
});

// Create series
var series = chart.series.push(new am4charts.ColumnSeries3D());
series.dataFields.valueY = "Passed";
series.dataFields.categoryX = "month";
series.name = "Year 2017";
series.clustered = false;
series.columns.template.tooltipText = "Passed {category} (2017): [bold]{valueY}[/]";
series.columns.template.fillOpacity = 0.9;

var series2 = chart.series.push(new am4charts.ColumnSeries3D());
series2.dataFields.valueY = "Failed";
series2.dataFields.categoryX = "month";
series2.name = "Year 2018";
series2.clustered = false;
series2.columns.template.tooltipText = "Failed {category} (2017): [bold]{valueY}[/]";

}); // end am4core.ready()
</script>





</body>
</html>
