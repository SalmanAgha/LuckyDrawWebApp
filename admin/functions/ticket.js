

function tblticket(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tblticket.php",
        "columns": [
         { "data": "Empty"},
           { "data": "contestid"} ,{ "data": "userid"} ,{ "data": "status"} ,{ "data": "dateofcreation"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblticket(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#contestid1").val($(this).data("contestid"));$("#userid1").val($(this).data("userid"));$("#status1").val($(this).data("status"));$("#dateofcreation1").val($(this).data("dateofcreation"));
     
      });



 });


function Addticket(){
 
var contestid = $("#contestid").val(); 

 var userid = $("#userid").val(); 

 var status = $("#status").val(); 

 var dateofcreation = $("#dateofcreation").val(); 

 
    
  if(contestid == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid contestid."); 
         $("#contestid").css("border-color", "red");
         $("#contestid").focus();
        

    } else if(userid == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid userid."); 
         $("#userid").css("border-color", "red");
         $("#userid").focus();
        

    } else if(status == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid status."); 
         $("#status").css("border-color", "red");
         $("#status").focus();
        

    } else if(dateofcreation == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid dateofcreation."); 
         $("#dateofcreation").css("border-color", "red");
         $("#dateofcreation").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New ticket!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Addticket.php",
            method: "POST",
            data: {
 
                contestid:contestid,userid:userid,status:status,dateofcreation:dateofcreation
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "ticket Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblticket();
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




function Updateticket() {

  var id = $("#id2").val();

var contestid1 = $("#contestid1").val(); 

 var userid1 = $("#userid1").val(); 

 var status1 = $("#status1").val(); 

 var dateofcreation1 = $("#dateofcreation1").val(); 

 
    
  if(contestid1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid contestid."); 
         $("#contestid1").css("border-color", "red");
         $("#contestid1").focus();
        

    } else if(userid1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid userid."); 
         $("#userid1").css("border-color", "red");
         $("#userid1").focus();
        

    } else if(status1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid status."); 
         $("#status1").css("border-color", "red");
         $("#status1").focus();
        

    } else if(dateofcreation1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid dateofcreation."); 
         $("#dateofcreation1").css("border-color", "red");
         $("#dateofcreation1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this ticket!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updateticket.php",
            method: "POST",
            data: {id:id,
                 contestid1:contestid1,userid1:userid1,status1:status1,dateofcreation1:dateofcreation1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "ticket Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblticket();

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




