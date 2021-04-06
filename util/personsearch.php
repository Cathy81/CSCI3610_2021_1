<?php
	$dir=dirname(dirname(__FILE__));
	require_once $dir."\sqlsts.php";
	require_once $dir.'\dbops.php';
	if(isset($_GET['PersonFN']))
	{
		$partName=$_GET['PersonFN'];
		$field="PersonFN";
		}
	else if(isset($_GET['PersonLN']))
	{
		$partName=$_GET['PersonLN'];
		$field="PersonLN";
	}
	$conn=connectDB();
	$names=array();
	$query="SELECT DISTINCT $field FROM tblpeople WHERE $field like 
	    \"$partName%\" ORDER BY $field";
	$arr=getResultFromTable($conn,$query);
	foreach($arr as $record)
	{
	 array_push($names,$record["$field"]);
	}
	echo json_encode($names);
?>
