
<?php
  
function pageheader($img, $title,$logged)
{
	

  echo "<div class=\"row\">"; 
	echo "<div class=\"col-sm-3\">";	
	echo "<img src=\"$img\" class=\"rounded float-start\" alt=\"$img\" width=\"200\" height=\"200\">";
	echo "</div>";
	echo "<div class=\"col-sm-7\">";
	echo "<nav class=\"navbar navbar-light bg-light mt-3\">";

    $loginPage='/project2/inslogin.php'	;
   
    echo "<a class=\"nav-link\" href=\"$loginPage\">Home</a>";
	  
   if($logged)
   	 echo "<a class=\"nav-link\" href=\"/project2/inslogout.php\">Log Out</a>";
   else
   	echo "<a class=\"nav-link\" href=\"/project2/inslogin.php\">Log In</a>";
	   
	echo "</div>";
	echo "</nav>";
  echo "</div>"; 

echo "<br><hr>";
}


?>