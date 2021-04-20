function searchPersonFN(id)
{
	var partName=id.value;
	if(partName.length>=1)
	{

			const xhr = new XMLHttpRequest(),
	    method = "GET",
	    url = "./util/personsearch.php?PersonFN="+partName;

	xhr.open(method, url, true);
	xhr.onreadystatechange = function () {
	  // In local files, status is 0 upon success in Mozilla Firefox
	  if(xhr.readyState === XMLHttpRequest.DONE) {
	    var status = xhr.status;
	    if (status === 0 || (status >= 200 && status < 400)) {
	      // The request has been completed successfully
	      var personFNs=JSON.parse(this.responseText);
	      var opt=``;
	      for(n in personFNs)
	      {
	      	opt+=`<option value="${personFNs[n]}"></option>`;
	      }
	      document.getElementById("listPersonFN").innerHTML=opt;
	  }
	};
	};
	xhr.send();
 }
}