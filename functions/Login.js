function BtnLoadingTrue(){            
    $("#btnlogin").attr("disabled", true);
    $('#btnlogin').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>Loading...');
}
function BtnLoadingFalse(){            
    $("#btnlogin").attr("disabled", false);
    $('#btnlogin').html('Login');
}
function login(){
 
      $("#v2").css({ 'display': 'none'}); 
      $("#v3").css({ 'display': 'none'});  
      $("#Email").css({ 'border-color': '' });
      $("#Password").css({ 'border-color': '' });
     
    var v_email = $("#Email").val();
    var v_pass = $("#Password").val();
    var valid=true;
    var mailRegEx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
     if ( v_email == "") {  
      $("#Email").css({ 'border-color': 'red' });
   $("#v2").css({ 'display': 'block'}); 
      $("#v2").text("Please Enter Email!");            
  } 
  else if(!v_email.match(mailRegEx))
  {
    $("#Email").css({ 'border-color': 'red' });
      $("#v2").css({ 'display': 'block'}); 
      $("#v2").text("Please Enter Valid Email!");  
}
 else if ( v_pass == "") {
      $("#Password").css({ 'border-color': 'red' });
      $("#v3").css({ 'display': 'block'}); 
      $("#v3").text("Please Enter Password!");              
  } 
else
{
    $.ajax({
        url: "api/Login-Form.php",
        method: "POST",
        data: {
            email : v_email, 
            pass : v_pass
        },
        dataType: "JSON",
        beforeSend: function(){
   // BtnLoadingTrue();
        },
        success: function (data) 
        { BtnLoadingFalse();
        var result = data.result;
        if ( result == "successful")
        {
            var username = data.username;
            Swal.fire({
              title: "Welcome " + username,
              type: "success",
              customClass: 'animated fadeIn',
              timer: 4000
          })
            .then(function () {
                window.location.href = 'Home.php';
            });
        } else if ( result == "inactive")
        {
            var username = data.username;
            Swal.fire({
               title: "User " + username + " is inactive",
               type: "error",
               customClass: 'animated fadeIn',
               timer: 4000
           }).then(function () {
            window.location.href = 'Login.php';
        });
       } else if ( result == "norecord")  { 
           Swal.fire({
            title: 'Account Not Found',
            type: "error",
            customClass: 'animated fadeIn',
            timer: 4000
        }).then(function () {
            window.location.href = 'Login.php';
        });
    }
    else if ( result == "incorrect")  { 
     Swal.fire({
        title: 'Email or Password is incorrect',
        type: "error",
        customClass: 'animated fadeIn'
    })
 }
 return data;
}
});
}
}
