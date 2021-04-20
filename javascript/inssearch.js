function searchPersonFN(id) {
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
	 	opt+=`<option value="${personFNs[n]}">`;
	  document.getElementById("listPersonFN").innerHTML=opt;
  }
}
};
xhr.send();
}
}

function searchPersonLN(id) {
  var partName=id.value;
 
    if(partName.length>=1)
    {
      const xhr = new XMLHttpRequest();
      method = "GET";
      url = "./util/personsearch.php?PersonLN="+partName;

xhr.open(method, url, true);
xhr.onreadystatechange = function () {
  // In local files, status is 0 upon success in Mozilla Firefox
  if(xhr.readyState === XMLHttpRequest.DONE) {
    var status = xhr.status;
    if (status === 0 || (status >= 200 && status < 400)) {
      // The request has been completed successfully
      var personLNs=JSON.parse(this.responseText);
      var opt=``;
    for(n in personLNs)
    opt+=`<option value="${personLNs[n]}">`;
    document.getElementById("listPersonLN").innerHTML=opt;
  }
}
};
xhr.send();
}
}

function showPersonLN(id) {
  var partName=id.value;
  var personFNId=document.getElementById("PersonFN");
  var personFN=personFNId.value;
    if(personFN.length>=1)
    {
      const xhr = new XMLHttpRequest();
      method = "GET";
      if(personFNId.value.length>=1){
       var partFN=personFNId.value;
       url = "./util/personsearch.php?PersonFN="+partFN+"&need=PersonLN";
       xhr.open(method, url, true);
      xhr.onreadystatechange = function () {
        // In local files, status is 0 upon success in Mozilla Firefox
        if(xhr.readyState === XMLHttpRequest.DONE) {
          var status = xhr.status;
          if (status === 0 || (status >= 200 && status < 400)) {
            // The request has been completed successfully
            var personLNs=JSON.parse(this.responseText);
            var opt=``;
          for(n in personLNs)
          opt+=`<option value="${personLNs[n]}">`;
          document.getElementById("listPersonLN").innerHTML=opt;
             }
          }
        };
        xhr.send();
       }
      }

}

    	