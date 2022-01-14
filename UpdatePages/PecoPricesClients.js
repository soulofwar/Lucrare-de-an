$(document).ready(function () {
  
  $("#submitBtn").on("click", function (e) {
    e.preventDefault();
    var usernameField = $("#company").val();
    var combustibilField = $("#combustibil").val();
    var pretField = $('#pret').val();
    size = checkInputs();
    console.log(size);
    if(size === true) {
      document.getElementById("form").submit();
    }
   
 
  });
  });


 function checkInputs() {

  const usernameValue = company.value.trim();
  const combustibilValue = combustibil.value.trim();
  const pretValue = pret.value.trim();
  var status = true;
  
  
  if (usernameValue === '') {
  setErrorFor(company, 'Campul este liber!');
  status = false;
  
  }
  
  else {
  setSuccesFor (company);
  }

  if (combustibilValue === '') {
    setErrorFor(combustibil, 'Campul este liber!');
    status = false;
   
    }
    
    else {
    setSuccesFor (combustibil);
    }

      if (pretValue === '') {
        setErrorFor(pret, 'Campul este liber!');
        status = false;
        console.log('YES');
        }
        
        else {
        setSuccesFor (pret);
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
