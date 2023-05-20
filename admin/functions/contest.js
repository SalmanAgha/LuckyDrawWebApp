

function tblcontest(){
 
   $("#datatable").DataTable({
        "ajax": "api/Tblcontest.php",
        "columns": [
         { "data": "Empty"},
           { "data": "name"} ,{ "data": "dateofcreation"} ,{ "data": "dateofexpiry"} ,{ "data": "totaltickets"} ,{ "data": "ticketsremaining"} ,{ "data": "ticketsold"} ,{ "data": "amount"} ,{ "data": "status"} ,{ "data": "adminid"} ,{ "data": "winningamount"} 
          
        ],
      });

}


$(document).ready(function()
    {

 tblcontest(); 

$(document).on("click", ".edit-modal", function(){

       
         $("#id2").val($(this).attr("id"));$("#name1").val($(this).data("name"));$("#dateofcreation1").val($(this).data("dateofcreation"));$("#dateofexpiry1").val($(this).data("dateofexpiry"));$("#totaltickets1").val($(this).data("totaltickets"));$("#ticketsremaining1").val($(this).data("ticketsremaining"));$("#ticketsold1").val($(this).data("ticketsold"));$("#amount1").val($(this).data("amount"));$("#status1").val($(this).data("status"));$("#adminid1").val($(this).data("adminid"));$("#winningamount1").val($(this).data("winningamount"));
     
      });



 });


function Addcontest(){
 
var name = $("#name").val(); 

 var dateofcreation = $("#dateofcreation").val(); 

 var dateofexpiry = $("#dateofexpiry").val(); 

 var totaltickets = $("#totaltickets").val(); 

 var ticketsremaining = $("#ticketsremaining").val(); 

 var ticketsold = $("#ticketsold").val(); 

 var amount = $("#amount").val(); 

 var status = $("#status").val(); 

 var adminid = $("#adminid").val(); 

 var winningamount = $("#winningamount").val(); 

 
    
  if(name == "" ){

     $("#1v").css("display", "block");
      $("#1v").text("Invalid name."); 
         $("#name").css("border-color", "red");
         $("#name").focus();
        

    } else if(dateofcreation == "" ){

     $("#2v").css("display", "block");
      $("#2v").text("Invalid dateofcreation."); 
         $("#dateofcreation").css("border-color", "red");
         $("#dateofcreation").focus();
        

    } else if(dateofexpiry == "" ){

     $("#3v").css("display", "block");
      $("#3v").text("Invalid dateofexpiry."); 
         $("#dateofexpiry").css("border-color", "red");
         $("#dateofexpiry").focus();
        

    } else if(totaltickets == "" ){

     $("#4v").css("display", "block");
      $("#4v").text("Invalid totaltickets."); 
         $("#totaltickets").css("border-color", "red");
         $("#totaltickets").focus();
        

    } else if(ticketsremaining == "" ){

     $("#5v").css("display", "block");
      $("#5v").text("Invalid ticketsremaining."); 
         $("#ticketsremaining").css("border-color", "red");
         $("#ticketsremaining").focus();
        

    } else if(ticketsold == "" ){

     $("#6v").css("display", "block");
      $("#6v").text("Invalid ticketsold."); 
         $("#ticketsold").css("border-color", "red");
         $("#ticketsold").focus();
        

    } else if(amount == "" ){

     $("#7v").css("display", "block");
      $("#7v").text("Invalid amount."); 
         $("#amount").css("border-color", "red");
         $("#amount").focus();
        

    } else if(status == "" ){

     $("#8v").css("display", "block");
      $("#8v").text("Invalid status."); 
         $("#status").css("border-color", "red");
         $("#status").focus();
        

    } else if(adminid == "" ){

     $("#9v").css("display", "block");
      $("#9v").text("Invalid adminid."); 
         $("#adminid").css("border-color", "red");
         $("#adminid").focus();
        

    } else if(winningamount == "" ){

     $("#10v").css("display", "block");
      $("#10v").text("Invalid winningamount."); 
         $("#winningamount").css("border-color", "red");
         $("#winningamount").focus();
        

    }
    else 
    {   

 
         Swal.fire({
  title: "Are you sure?",
  text: "You want to add New contest!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
    $.ajax( {
            url: "api/Addcontest.php",
            method: "POST",
            data: {
 
                name:name,dateofcreation:dateofcreation,dateofexpiry:dateofexpiry,totaltickets:totaltickets,ticketsremaining:ticketsremaining,ticketsold:ticketsold,amount:amount,status:status,adminid:adminid,winningamount:winningamount
               
              
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result;
                if ( result == "Inserted" )
                {
                       Swal.fire({
            title: "contest Added Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 


 $("#btncancel").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblcontest();
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




function Updatecontest() {

  var id = $("#id2").val();

var name1 = $("#name1").val(); 

 var dateofcreation1 = $("#dateofcreation1").val(); 

 var dateofexpiry1 = $("#dateofexpiry1").val(); 

 var totaltickets1 = $("#totaltickets1").val(); 

 var ticketsremaining1 = $("#ticketsremaining1").val(); 

 var ticketsold1 = $("#ticketsold1").val(); 

 var amount1 = $("#amount1").val(); 

 var status1 = $("#status1").val(); 

 var adminid1 = $("#adminid1").val(); 

 var winningamount1 = $("#winningamount1").val(); 

 
    
  if(name1 == "" ){

     $("#1v1").css("display", "block");
      $("#1v1").text("Invalid name."); 
         $("#name1").css("border-color", "red");
         $("#name1").focus();
        

    } else if(dateofcreation1 == "" ){

     $("#2v1").css("display", "block");
      $("#2v1").text("Invalid dateofcreation."); 
         $("#dateofcreation1").css("border-color", "red");
         $("#dateofcreation1").focus();
        

    } else if(dateofexpiry1 == "" ){

     $("#3v1").css("display", "block");
      $("#3v1").text("Invalid dateofexpiry."); 
         $("#dateofexpiry1").css("border-color", "red");
         $("#dateofexpiry1").focus();
        

    } else if(totaltickets1 == "" ){

     $("#4v1").css("display", "block");
      $("#4v1").text("Invalid totaltickets."); 
         $("#totaltickets1").css("border-color", "red");
         $("#totaltickets1").focus();
        

    } else if(ticketsremaining1 == "" ){

     $("#5v1").css("display", "block");
      $("#5v1").text("Invalid ticketsremaining."); 
         $("#ticketsremaining1").css("border-color", "red");
         $("#ticketsremaining1").focus();
        

    } else if(ticketsold1 == "" ){

     $("#6v1").css("display", "block");
      $("#6v1").text("Invalid ticketsold."); 
         $("#ticketsold1").css("border-color", "red");
         $("#ticketsold1").focus();
        

    } else if(amount1 == "" ){

     $("#7v1").css("display", "block");
      $("#7v1").text("Invalid amount."); 
         $("#amount1").css("border-color", "red");
         $("#amount1").focus();
        

    } else if(status1 == "" ){

     $("#8v1").css("display", "block");
      $("#8v1").text("Invalid status."); 
         $("#status1").css("border-color", "red");
         $("#status1").focus();
        

    } else if(adminid1 == "" ){

     $("#9v1").css("display", "block");
      $("#9v1").text("Invalid adminid."); 
         $("#adminid1").css("border-color", "red");
         $("#adminid1").focus();
        

    } else if(winningamount1 == "" ){

     $("#10v1").css("display", "block");
      $("#10v1").text("Invalid winningamount."); 
         $("#winningamount1").css("border-color", "red");
         $("#winningamount1").focus();
        

    }
    else 
    { 
 
        Swal.fire({
  title: "Are you sure?",
  text: "You want to update this contest!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#3085d6",
  cancelButtonColor: "#d33",
  confirmButtonText: "Yes!"
}).then((result) => {
  if (result.value) {  
        $.ajax( {
            url: "api/Updatecontest.php",
            method: "POST",
            data: {id:id,
                 name1:name1,dateofcreation1:dateofcreation1,dateofexpiry1:dateofexpiry1,totaltickets1:totaltickets1,ticketsremaining1:ticketsremaining1,ticketsold1:ticketsold1,amount1:amount1,status1:status1,adminid1:adminid1,winningamount1:winningamount1
            },
            dataType: "JSON",
            success: function (data) 
            {
                var result = data.result; 
                if ( result == "Done" )
                { 
                      Swal.fire({
            title: "contest Updated Successfully!",
            type: "success",
             timer: 4000,
            showConfirmButton: true,
          }) 

$("#btncancel1").trigger("click");
   $("#datatable").DataTable().destroy(); 
 tblcontest();

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




