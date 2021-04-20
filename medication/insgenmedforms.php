<?php
  $dir=dirname(dirname(__FILE__));
  
require_once $dir.'/sqlsts.php';
require_once $dir.'/insdbops.php';
require_once $dir.'/util/supporting.php';

function printCadetName($fname, $lname)
{
   echo<<<_END
  <div class="row ml-1">
        <label for="fname" class="col-1 col-form-label">First Name</label> 
        <div class="col-3">
          <input id="fname" name="fname" type="text" class="form-control" required="required"  
           value="$fname" readonly>
        </div>
        <label for="text" class="col-1 col-form-label">Last Name</label> 
        <div class="col-3">
          <input id="lname" name="lname" type="text" class="form-control" 
          value="$lname" readonly>
        </div>
        
  </div>
 
_END;
}

	
function printMedicationForm($conn, $record,$fkClassDetailID)
{
  if ($record!=null)
  {
    $MedID=$record["MedID"];
    $fkClassDetailID=$record["fkClassDetailID"];
   $fkMedType=$record["fkMedType"];
   $MedName=$record["MedName"];
    $Dose=$record["Dose"];
    $Frequency=$record["Frequency"];
    $TakenWhen=$record["TakenWhen"];
    $MedStartDate=date("Y-m-d",strtotime($record["MedStartDate"]));
    $MedEndDate=date("Y-m-d",strtotime($record["MedEndDate"]));
   // echo "$MedStartDate";
    $MedNote=$record["MedNote"];
    
    $query="SELECT MedType FROM tlkpmedtype";
    
    $arr=getResultFromTable($conn, $query);
    $MedTypeOptions=optionGen("fkMedType","fkMedType",$arr,$fkMedType);
    $query="SELECT MedFrequency FROM tlkpmedfrequency";
    $arr=getResultFromTable($conn, $query);
    $FrequencyTypeOptions=optionGen("Frequency","Frequency",$arr,$Frequency);
     
  }
  else
  {
    $MedID="";

   $fkMedType="";
   $MedName="";
    $Dose="";
    $Frequency="";
    $TakenWhen="";
    $MedStartDate="";
    $MedEndDate="";
    $MedNote="";
    $query="SELECT MedType FROM tlkpmedtype";
    
    $arr=getResultFromTable($conn, $query);

    $MedTypeOptions=optionGen("fkMedType","fkMedType",$arr,$fkMedType);
    $query="SELECT MedFrequency FROM tlkpmedfrequency";
    $arr=getResultFromTable($conn, $query);
    $FrequencyTypeOptions=optionGen("Frequency","Frequency",$arr,$Frequency);
  }
   echo <<<_END
           <div class="form-group row mt-1 ml-1">
              <label for="MedID" class="col-2 col-form-label">Medication ID</label> 
              <div class="col-2">
                <input id="MedID" name="MedID" type="text" required="required" class="form-control" 
                value="$MedID" readonly>       
              </div>
              <label for="fkClassDetailID" class="col-2 col-form-label">Class Detail ID</label> 
              <div class="col-2">
                <input id="fkClassDetailID" name="fkClassDetailID" type="text" required="required" class="form-control" 
                value="$fkClassDetailID" readonly>        </div>
             </div> 
            <div class="form-group row mt-1 ml-1">
              <label for="medType" class="col-2 col-form-label">Medication Type</label> 
              <div class="col-2">
                $MedTypeOptions
              </div>
              <label for="MedName" class="col-2 col-form-label">Medication Name</label> 
              <div class="col-2">
                <input id="MedName" name="MedName" type="text" required="required" class="form-control" 
                value="$MedName" required="required">       </div>
              <label for="medDos" class="col-1 col-form-label">Dose</label> 
              <div class="col-2">
                <input id="Dose" name="Dose" type="text" required="required" class="form-control" 
                value="$Dose" required="required">       </div>
               
              
            </div>
            <div class="form-group row mt-1 ml-1">
              <label for="Frequency" class="col-2 col-form-label">Frequency</label> 
              <div class="col-2">
                $FrequencyTypeOptions
              </div>    
              <label for="TakenWhen" class="col-2 col-form-label">Taken When</label> 
              <div class="col-2">
                <input id="TakenWhen" name="TakenWhen" type="text" class="form-control" required="required" 
                value="$TakenWhen" required="required">       </div>
            </div>

            <div class="form-group row mt-1 ml-1">
            
              <label for="MedStartDate" class="col-2 col-form-label">Medication Start Date</label>

              <div class="col-2">
                <input id="MedStartDate" name="MedStartDate" type="date" required="required" 
                value="$MedStartDate" required="required">       </div>
              <label for="MedEndDate" class="col-2 col-form-label">Medication End Date</label> 
              <div class="col-2">
                <input id="MedEndDate" name="MedEndDate" type="date" class="form-control" 
                value="$MedEndDate" required="required">       </div>
            </div>
            
            <div class="form-group row mt-1 ml-1">
              <label for="MedNote" class="col-2 col-form-label">Notes</label> 
              <div class="col-8">
                <textarea id="MedNote" name="MedNote" cols="40" rows="3" class="form-control"> $MedNote </textarea>
              </div>
            </div> 
            
_END;
}

?>