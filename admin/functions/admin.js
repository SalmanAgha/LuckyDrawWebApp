

function tbladmin(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tbladmin.php",
        "columns": [
         { "data": "Empty"},
           { "data": "adminname"} ,{ "data": "email"} ,{ "data": "password"} ,{ "data": "doc"} ,{ "data": "status"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tbladmin(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#adminname1").val($(this).data("adminname"));$("#email1").val($(this).data("email"));$("#password1").val($(this).data("password"));$("#doc1").val($(this).data("doc"));$("#status1").val($(this).data("status"));
     
      });



 });


function Addadmin(){
 
var adminname = $("#adminname").val(); 

 var email = $("#email").val(); 

 var password = $("#password").val(); 

 var doc = $("#doc").val(); 

 var status = $("#status").val(); 

 
    
  if(adminname == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid adminname."); 
         $("#adminname").css("border-color", "red");
         $("#adminname").focus();
        

    } else if(email == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid email."); 
         $("#email").css("border-color", "red");
         $("#email").focus();
        

    } else if(password == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid password."); 
         $("#password").css("border-color", "red");
         $("#password").focus();
        

    } else if(doc == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid doc."); 
         $("#doc").css("border-color", "red");
         $("#doc").focus();
        

    } else if(status == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid status."); 
         $("#status").css("border-color", "red");
         $("#status").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New admin!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Addadmin.php",
            method: "POST",
            data: {
 
                adminname:adminname,email:email,password:password,doc:doc,status:status
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "admin Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbladmin();
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




function Updateadmin() {

  var id = $("#id2").val();

var adminname1 = $("#adminname1").val(); 

 var email1 = $("#email1").val(); 

 var password1 = $("#password1").val(); 

 var doc1 = $("#doc1").val(); 

 var status1 = $("#status1").val(); 

 
    
  if(adminname1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid adminname."); 
         $("#adminname1").css("border-color", "red");
         $("#adminname1").focus();
        

    } else if(email1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid email."); 
         $("#email1").css("border-color", "red");
         $("#email1").focus();
        

    } else if(password1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid password."); 
         $("#password1").css("border-color", "red");
         $("#password1").focus();
        

    } else if(doc1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid doc."); 
         $("#doc1").css("border-color", "red");
         $("#doc1").focus();
        

    } else if(status1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid status."); 
         $("#status1").css("border-color", "red");
         $("#status1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this admin!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updateadmin.php",
            method: "POST",
            data: {id:id,
                 adminname1:adminname1,email1:email1,password1:password1,doc1:doc1,status1:status1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "admin Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbladmin();

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




