
<?php


// require_once 'medication.php';
function viewCadet($arr)
{
	  
    foreach ($arr as $row) {
    	$pid=$row["PersonID"];
		echo<<<_END
	    <div class="card row mt-2 mb-2 ml-4 ">
	     <div class="card-header">
		    <ul class="nav nav-tabs card-header-tabs">
		      <li class="nav-item">
		        <a class="nav-link active" href="#">Cadet Info</a>
		      </li>
		       <li class="nav-item">
		        
		        <a class="nav-link" href="./medication/insmedication.php?PersonID=$pid">Medication</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Insureance</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Sick Call</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Allergies</a>
		      </li>
		    </ul>
        </div>
  <div class="card-body">
	    <h5 class="card-title">{$row["PersonFN"]} {$row["PersonLN"]}</h5>
	    
	   
	<form>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PersonID" class="col-1 col-form-label">PersonID</label> 
	    <div class="col-3">
	      <input id="PersonID" name="PersonID" type="text" value="{$row["PersonID"]}" class="form-control">
	    </div>
	  
	      <label for="PSalutation" class="col-2 col-form-label">PSalutation</label> 
	    <div class="col-2">
	      <input id="PSalutation" name="PSalutation" type="text" value="{$row["PSalutation"]} " class="form-control">
	    </div>
	  </div>
	  
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="Address" class="col-1 col-form-label">PAddress</label> 
	    <div class="col-8">
	      <input id="PAddress" name="PAddress" type="text" value="{$row["PAddress"]} " class="form-control">
	    </div>
	  </div>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PAddress2" class="col-1 col-form-label">PAddress2</label> 
	    <div class="col-8">
	      <input id="PAddress2" name="PAddress2" type="text" value="{$row["PAddress2"]} " class="form-control">
	    </div>
	  </div>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PCity" class="col-1 col-form-label">PCity</label> 
	    <div class="col-2">
	      <input id="PCity" name="PCity" type="text" value="{$row["PCity"]} " class="form-control">
	    </div>
	  
	    <label for="PState" class="col-1 col-form-label">PState</label> 
	    <div class="col-1">
	      <input id="PState" name="PState" type="text" value="{$row["PState"]} " class="form-control">
	    </div>
	  
	    <label for="PZip" class="col-1 col-form-label">PZip</label> 
	    <div class="col-1">
	      <input id="PZip" name="PZip" type="text" value="{$row["PZip"]} " class="form-control">
	    </div>
	  </div>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PMailAddress" class="col-2 col-form-label">PMailAddress</label> 
	    <div class="col-8">
	      <input id="PMailAddress" name="PMailAddress" type="text" value="{$row["PMailAddress"]} " class="form-control">
	    </div>
	  </div>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PMailAddress2" class="col-2 col-form-label">PMailAddress2</label> 
	    <div class="col-8">
	      <input id="PMailAddress2" name="PMailAddress2" type="text" value="{$row["PMailAddress2"]} " class="form-control">
	    </div>
	  </div>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PMailCity" class="col-1 col-form-label">MailCity</label> 
	    <div class="col-1">
	      <input id="PMailCity" name="PMailCity" type="text" value="{$row["PMailCity"]} " class="form-control">
	    </div>
	  
	    <label for="PMailState" class="col-1 col-form-label">MailState</label> 
	    <div class="col-1">
	      <input id="PMailState" name="PMailState" type="text" value="{$row["PMailState"]} " class="form-control">
	    </div>
	  
	    <label for="PMailZip" class="col-1 col-form-label">Mail Zip</label> 
	    <div class="col-1">
	      <input id="PMailZip" name="PMailZip" type="text" value="{$row["PMailZip"]} " class="form-control">
	    </div>
	 
	    <label for="PCounty" class="col-1 col-form-label">County</label> 
	    <div class="col-1">
	      <input id="PCounty" name="PCounty" type="text" value="{$row["PCounty"]} " class="form-control">
	    </div>
	  </div>
	  <div class="form-group row mt-2 mb-2 ml-4 ">
	    <label for="PDOB" class="col-1 col-form-label">DOB</label> 
	    <div class="col-2">
	      <input id="PDOB" name="PDOB" type="text" value="{$row["PDOB"]} " class="form-control">
	    </div>
	  
	    <label for="PGender" class="col-1 col-form-label">Gender</label> 
	    <div class="col-1">
	      <input id="PGender" name="PGender" type="text" value="{$row["PGender"]} " class="form-control">
	    </div>
	  </div> 
	 
	</form>
	
	  </div>
	</div>

_END;
}

 
}


function printTableHeader($columns)
{
	echo "<thead><tr>";
	foreach ($columns as $colName) {
		echo "<th scope=\"col\">$colName</th>";
	}
     echo '</tr></thead>';
}

?>