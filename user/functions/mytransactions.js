

function tbltable2(){

 $("#datatable2").DataTable({
    "ajax": "api/tblmytransactions.php",
    "columns": [ 
       { "data": "financialid"} ,
       { "data": "description"} ,
       { "data": "date"}, 
       { "data": "type"},
        { "data": "amount"} ,
        { "data": "previousbalance"} 

       

       ],
});

}


$(document).ready(function()
{

   tbltable2(); 

 


});

 