<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    <title>Allergy</title>
  </head>
  <body>
  	<div class="container">
  	<div class="card">
		<div class="card-header">
		 <h4>Allergy</h4>

		</div>
        <div class="card-body">
    
			<form>
			  <div class="form-group row">
			    <label for="MedAllergyID" class="col-3 col-form-label ">MedAllergyID</label> 
			    <div class="col-3">
			      <input id="MedAllergyID" name="MedAllergyID" cols="40" rows="" class="form-control"></input>
			    </div>
			    <label for="fkClassDetailID" class="col-3 col-form-label ">Class Detail ID</label> 
			    <div class="col-3">
			      <input id="fkClassDetailID" name="fkClassDetailID" type="text" class="form-control" required="required">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="AllergyType" class="col-2 col-form-label">Allergy Type</label> 
			    <div class="col-3">
			      <select id="AllergyType" name="AllergyType" class="custom-select">
			        <option value="rabbit">Pollen</option>
			        <option value="duck">Bees</option>
			        <option value="fish">Fish</option>
			      </select>
			    </div>
			  </div>
			  
			   <div class="form-group row">
			    <label for="AllergyNote" class="col-1 col-form-label" >Allergy Note</label> 
			    <div class="col-8">
			         <textarea id="AllergyNote" name="AllergyNote" type="text" required="required" class="form-control"> 
			         </textarea>
			    </div>
			  </div>
			  <div class="form-group row">
			    <div class="col-2">
			      <button name="submit" type="submit" class="btn btn-primary">Add</button>
			    </div>
			  </div>
			</form>
		<div class="card-body">
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>


