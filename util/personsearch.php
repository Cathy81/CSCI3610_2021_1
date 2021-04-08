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
	$query="SELECT DISTINCT $field FROM tblpeople 
		         WHERE $field like \"$partName%\" 
		         ORDER BY $field";
	if(isset($_GET['need']))
	{
		$field="PersonLN";
		$fieldFN="PersonFN";
		$query="SELECT DISTINCT $field FROM tblpeople 
		         WHERE $fieldFN like \"$partName%\" 
		         ORDER BY $field";
	}
	$conn=connectDB();
	$names=array();
	
	$arr=getResultFromTable($conn,$query);
	foreach($arr as $record)
	{
	 array_push($names,$record["$field"]);
	}
	$conn->close();
	echo json_encode($names);
?>
