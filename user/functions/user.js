

function tbluser(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tbluser.php",
        "columns": [
         { "data": "Empty"},
           { "data": "username"} ,{ "data": "email"} ,{ "data": "password"} ,{ "data": "doc"} ,{ "data": "status"} ,{ "data": "pancard"} ,{ "data": "aadharcard"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tbluser(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#username1").val($(this).data("username"));$("#email1").val($(this).data("email"));$("#password1").val($(this).data("password"));$("#doc1").val($(this).data("doc"));$("#status1").val($(this).data("status"));$("#pancard1").val($(this).data("pancard"));$("#aadharcard1").val($(this).data("aadharcard"));
     
      });



 });


function Adduser(){
 
var username = $("#username").val(); 

 var email = $("#email").val(); 

 var password = $("#password").val(); 

 var doc = $("#doc").val(); 

 var status = $("#status").val(); 

 var pancard = $("#pancard").val(); 

 var aadharcard = $("#aadharcard").val(); 

 
    
  if(username == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid username."); 
         $("#username").css("border-color", "red");
         $("#username").focus();
        

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
        

    } else if(pancard == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid pancard."); 
         $("#pancard").css("border-color", "red");
         $("#pancard").focus();
        

    } else if(aadharcard == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid aadharcard."); 
         $("#aadharcard").css("border-color", "red");
         $("#aadharcard").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New user!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Adduser.php",
            method: "POST",
            data: {
 
                username:username,
                email:email,
                password:password,
                doc:doc,
                status:status,
                pancard:pancard,
                aadharcard:aadharcard
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "user Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbluser();
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




function Updateuser() {

  var id = $("#id2").val();

var username1 = $("#username1").val(); 

 var email1 = $("#email1").val(); 

 var password1 = $("#password1").val(); 

 var doc1 = $("#doc1").val(); 

 var status1 = $("#status1").val(); 

 var pancard1 = $("#pancard1").val(); 

 var aadharcard1 = $("#aadharcard1").val(); 

 
    
  if(username1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid username."); 
         $("#username1").css("border-color", "red");
         $("#username1").focus();
        

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
        

    } else if(pancard1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid pancard."); 
         $("#pancard1").css("border-color", "red");
         $("#pancard1").focus();
        

    } else if(aadharcard1 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid aadharcard."); 
         $("#aadharcard1").css("border-color", "red");
         $("#aadharcard1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this user!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updateuser.php",
            method: "POST",
            data: {id:id,
                 username1:username1,email1:email1,password1:password1,doc1:doc1,status1:status1,pancard1:pancard1,aadharcard1:aadharcard1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "user Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tbluser();

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




