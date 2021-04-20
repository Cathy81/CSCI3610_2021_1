<?php
 
 function connectDB()
 {
 	//db server on your local pc
  $hn="localhost";
  $un="phpUser2"; //need create a user for php again
  $pw="Phpadmin@1234";
  $db="minerva2021";

  //db server on production server

  //  $hn="localhost";
  //  //Mine, please do not use my db server username and pwd!!!!
  // $un="id16078697_minerval2021";
  // $pw="WebAdmin@1234";
  // $db="id16078697_minerval";
 
  $conn=new mysqli($hn,$un, $pw, $db);
  if($conn->connect_error) die("Fatal error on connecting to DB. ");

  return $conn;

 }


?>