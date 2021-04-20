<?php

 function optionGen($id,$field,$arr,$selectedValue)
 {
  $optionStr= "<select id=\"$id\" name=\"$field\">";
               
   foreach ($arr as $row) 
   {
    foreach ($row as $key => $value) {
      # code...
    
     if ($value==$selectedValue)
     {
       $optionStr.= "<option value=\"$value\" selected>$value</option>";
     }    
     else
      $optionStr.= "<option value=\"$value\" >$value</option>";
    }
  }
  $optionStr.=" </select>";
  return $optionStr;
    
   }
?>