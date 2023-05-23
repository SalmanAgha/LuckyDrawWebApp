

function tblfinancial(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tblfinancial.php",
        "columns": [
         { "data": "Empty"},
           { "data": "date"} ,{ "data": "amount"} ,
           { "data": "type"} ,{ "data": "userid"} ,
           { "data": "description"} ,
           { "data": "status"},
           { "data": "previousbalance"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblfinancial(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#date1").val($(this).data("date"));$("#amount1").val($(this).data("amount"));$("#type1").val($(this).data("type"));$("#userid1").val($(this).data("userid"));$("#description1").val($(this).data("description"));$("#status1").val($(this).data("status"));
     
      });



 });


function Addfinancial(){
 
var date = $("#date").val(); 

 var amount = $("#amount").val(); 

 var type = $("#type").val(); 

 var userid = $("#userid").val(); 

 var description = $("#description").val(); 

 var status = $("#status").val(); 

 
    
  if(date == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid date."); 
         $("#date").css("border-color", "red");
         $("#date").focus();
        

    } else if(amount == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid amount."); 
         $("#amount").css("border-color", "red");
         $("#amount").focus();
        

    } else if(type == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid type."); 
         $("#type").css("border-color", "red");
         $("#type").focus();
        

    } else if(userid == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid userid."); 
         $("#userid").css("border-color", "red");
         $("#userid").focus();
        

    } else if(description == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid description."); 
         $("#description").css("border-color", "red");
         $("#description").focus();
        

    } else if(status == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid status."); 
         $("#status").css("border-color", "red");
         $("#status").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New financial!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Addfinancial.php",
            method: "POST",
            data: {
 
                date:date,amount:amount,type:type,userid:userid,description:description,status:status
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "financial Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblfinancial();
                } 
                else 
                { 
                    Swal.fire({
            title: "Opps! Some Error Occured!",
            type: "error",
            text: "Please login first",
             timer: 4000,
            showConfirmButton: true,
          }).then(function () {
            window.location.href = "index.php";
          });
                }
                return data;
            }
        });

  } })
        
    }
}




function Updatefinancial() {

  var id = $("#id2").val();

var date1 = $("#date1").val(); 

 var amount1 = $("#amount1").val(); 

 var type1 = $("#type1").val(); 

 var userid1 = $("#userid1").val(); 

 var description1 = $("#description1").val(); 

 var status1 = $("#status1").val(); 

 
    
  if(date1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid date."); 
         $("#date1").css("border-color", "red");
         $("#date1").focus();
        

    } else if(amount1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid amount."); 
         $("#amount1").css("border-color", "red");
         $("#amount1").focus();
        

    } else if(type1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid type."); 
         $("#type1").css("border-color", "red");
         $("#type1").focus();
        

    } else if(userid1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid userid."); 
         $("#userid1").css("border-color", "red");
         $("#userid1").focus();
        

    } else if(description1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid description."); 
         $("#description1").css("border-color", "red");
         $("#description1").focus();
        

    } else if(status1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid status."); 
         $("#status1").css("border-color", "red");
         $("#status1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this financial!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updatefinancial.php",
            method: "POST",
            data: {id:id,
                 date1:date1,amount1:amount1,type1:type1,userid1:userid1,description1:description1,status1:status1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "financial Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblfinancial();

                } 
                else 
                { 
                    Swal.fire({
            title: "Opps! Some Error Occured!",
            type: "error",
            text: "Please login first",
             timer: 4000,
            showConfirmButton: true,
          }).then(function () {
            window.location.href = "Home.php";
          });
                }
                return data;
            }
        });
          } })
    }
}




