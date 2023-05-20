

$(document).ready(function() {
  $('#registerform').on('submit', function(event) {

    var form = this; 
    if (!form.checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
      form.classList.add('was-validated');
      validatePasswords(form);
      // return;
  } 
  else {
    event.preventDefault();
    validatePasswords(form);

}
});
});

function validatePasswords(form) {
  var formData = new FormData(form);
  var passwordInput = formData.get('password');
  var confirmPasswordInput = formData.get('cpassword');
  var confirmPasswordInput2 = $('#cpassword');
  var passwordMatchTooltip = $('.password-match-tooltip');
  var validationcheck = 'Not Done';

  if ((passwordInput !== "" ||  confirmPasswordInput !== "")  && (passwordInput === confirmPasswordInput)) { 

      confirmPasswordInput2.get(0).setCustomValidity('');
      passwordMatchTooltip.text('Password matches');
      passwordMatchTooltip.css('color',"green");
      validationcheck = 'Done';
  } else  { 

      confirmPasswordInput2.get(0).setCustomValidity('Passwords do not match');
      passwordMatchTooltip.text('Password does not match');
      passwordMatchTooltip.css('color',"red");
      validationcheck = 'Not Done';

  } 

  if(validationcheck=='Done') {

    var username='test';
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
            url: "api/signup.php",
            method: "POST",
            data: formData,
            dataType: "JSON",
              contentType: false, // Set content type to false for file upload
              processData: false, // Set processData to false for file upload
              success: function (data) 
              {



                                                    return data;
                                                }
                                            });

    } })





}

        // form.classList.add('was-validated');

}



