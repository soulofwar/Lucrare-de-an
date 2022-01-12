$(document).ready(function () {
  

  $("#submitBtn").on("click", function (e) {
    e.preventDefault();
    var usernameField = $("#username").val();
    var passwordField = $("#password").val();
    size = checkInputs();
    console.log(size);
    if(size === true) {
      document.getElementById("form").submit();
    }
   
 
  });
  });


 function checkInputs() {

  const usernameValue = username.value.trim();
  const passwordValue = password.value.trim();

  var status = true;
  
  
  if (usernameValue === '') {
  setErrorFor(username, 'Numele de utilizator nu este completat!');
  status = false;
  }
  
  else {
  setSuccesFor (username);
  }

    
    var textLength = passwordValue.length;

    if (passwordValue === '') {
      setErrorFor(password, 'Introduceti campul!');
      status = false;
      } else if (textLength<=8) {
        setErrorFor(password, 'Completati campul cu minim 8 caractere!');
        status = false;
      }
      
      else {
      setSuccesFor (password);
      }

    return status;
  }


function setErrorFor (input, message) {
  const formControl = input.parentElement;
  const small = formControl.querySelector('small');

  small.innerText = message;

  formControl.className = 'form-control error';
}

function setSuccesFor (input, message) {

  const formControl = input.parentElement;

  formControl.className = 'form-control succes';

}
