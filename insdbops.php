<?php
 
 function getMeds($conn, $personID)
 {
   $query="SELECT tblpeople.PersonID,tblpeople.PersonFN,tblpeople.PersonLN,tblmeds.* FROM tblmeds JOIN tblclassdetails on tblclassdetails.ClassDetailID=tblmeds.fkClassDetailID JOIN tblcadets on tblclassdetails.fkCadetID=tblcadets.CadetID JOIN tblpeople on tblpeople.PersonID=tblcadets.fkPersonID WHERE tblpeople.PersonID=\"$personID\"";
   $arr=getResultFromTable($conn,$query);
 	return $arr;

 }
 function getPeople($conn, $fn,$ln)
 {
 	
 	$query="SELECT * FROM tblpeople WHERE PersonFN=\"$fn\" AND PersonLN=\"$ln\"";
 	
 	$arr=getResultFromTable($conn,$query);
 	return $arr;
 }

 function getPersonByID($conn, $personID)
 {
 	$query="SELECT * FROM tblpeople WHERE PersonID=\"$personID\"";
 	$arr=getResultFromTable($conn,$query);
 	return $arr;
 }
 function getResultFromTable($conn, $query)
{

	//get the content
	$arr=array();
	$result=$conn->query($query);
	if(!$result) die("Fatal Error on query:".$query);

	$rows=$result->num_rows;
	for($i=0;$i<$rows;$i++)
	{
		array_push($arr, $result->fetch_assoc());
    }
    
    $result->free();
    return $arr;

}
function getColumnNames($conn,$table)
{
	$query="SELECT COLUMN_NAME AS name FROM information_schema.columns WHERE table_name=\"$table\"";
	$arr=getResultFromTable($conn, $query);
	return $arr;


}
function getClassDetailID($conn, $personID)
{
	$query="SELECT CadetID FROM tblcadets JOIN tblpeople ON fkPersonID=tblpeople.PersonID where tblpeople.PersonID=$personID";
	$arr=getResultFromTable($conn, $query);
	if(count($arr)==1)
	{
	  $cadetID=$arr['CadetID'];
	
	  $query="SELECT ClassDetailID FROM tblclassdetailsJOIN tblcadets on fkCadetID=tblcadets.CadetID WHERE tblcadets.CadetID=$cadetID";
	  $arr=getResultFromTable($conn, $query);
	  if(count($arr)==1)
	     return $arr['ClassDetailID'];
     }
     return array();
}

?>