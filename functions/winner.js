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
else {


 $.ajax({
  url: "api/winner.php",
  method: "POST",
  data: {id : id},
  dataType: "JSON", 
  success: function (data) 
  {  
    var result = data.result;
    if(result == 'error'){
      alert('Opps! Some error Occured');
      window.location.href ='index.php';
    }else if(result == 'success') {
      $('#username').text(data.username);
      $('#contestname').text(data.name);
      $('#contestamount').text(data.winningamount);




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