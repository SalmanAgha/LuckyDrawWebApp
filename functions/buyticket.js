//getting id from url
var getUrlParameter = function getUrlParameter(sParam) {
  var sPageURL = window.location.search.substring(1),
  sURLVariables = sPageURL.split('&'),
  sParameterName,
  i;
  for (i = 0; i < sURLVariables.length; i++) {
    sParameterName = sURLVariables[i].split('=');
    if (sParameterName[0] === sParam) {
      return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
    }
  }
};


function onload(){
 var id = getUrlParameter('id');
 if(id == '' || id == null){
  window.location.href = 'index.php';
}
 

}


function buyticket(){ 
 
 var id = getUrlParameter('id'); 
 if(id == '' || id == null){
  window.location.href = 'index.php';
}
else {


 $.ajax({
  url: "api/buyticket.php",
  method: "POST",
  data: {id : id},
  dataType: "JSON", 
  success: function (data) 
  {  
    var result = data.result;
    if(result == 'Not Inserted'){
      alert('Opps! Some error Occured');
      window.location.href ='index.php';
    }else if(result == 'Inserted') { 
     Swal.fire({
            title: 'Congratulaltions, you purchased this ticket',
            type: "success",
            customClass: 'animated fadeIn',
            timer: 4000
        }).then(function () {
            window.location.href = 'index.php';
        });
    }
    else if(result == 'Insuficiant Balance') { 
   Swal.fire({
            title: 'You have Insuficiant Balance for this ticket.',
            type: "error",
            customClass: 'animated fadeIn',
            timer: 4000
        }).then(function () {
            window.location.href = 'index.php';
        });

      
    }

    return data;
  }
});

}



}

$(document).ready(function()
{

  onload();


});