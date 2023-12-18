function login() {
  // Add your login logic here
  alert('Login button clicked');
}

function signup() {
  // Add your signup logic here
  alert('Sign Up button clicked');
}

function validate() { 
  
  var patternsignupName = /^[a-zA-Z ]{2,30}$/;
  const patternEmail = /^[a-z A-Z) 0-9]{6, 20}[@][a-z]{1,}[.][a-z]{1,}/;
  const patternCNIC = /^[0-9]{13}$/;
  const patterPhoneNumber = /^[+92]+[0-9]{11}$/;
  const patternUserName = /^[a-zA-Z0-9 ]{8,30}$/;
  const patternPassword = /^[a-zA-Z0-9]{8-12}$/;

  var userName = document.getElementById('signupName').value;
  var userEmail = document.getElementById('signupName').value;
  var userCNIC = document.getElementById('signupCNIC').value;
  var userPhoneNumber = document.getElementById('signupPhone').value;
  var userUserName = document.getElementById('signupUsername').value;
  var userPassword = document.getElementById('signupPassword').value;

  var signupname = patternsignupName.test(userName);
  var signupemail = patternEmail.test(userEmail);
  var signupcnic = patternCNIC.test(userCNIC);
  var signupphonenumber = patterPhoneNumber.test(userPhoneNumber);
  var signupusername = patternUserName.test(userUserName);
  var signuppassword = patternPassword.test(userPassword);


  if(signupname == false){
    alert('Invalid Signup Name');
  }
  if(signupemail == false){
    alert('Invalid Signup Email');
  }
  if(signupcnic == false){
    alert('Invalid Signup CNIC')
  }
  if(signupphonenumber == false){
    alert('Invalid Signup Phone Number');
  }
  if(signupusername == false){
    alert('Invalid Signup UserName');
  }
  if(signuppassword == false){
    alert('Invalid Signup Password');
  }

}

function Lvalidate(){

  // var patternsignupName = /^[a-zA-Z ]{2,30}$/;
  const patternUserName = /^[a-zA-Z0-9 ]{8,30}$/;
  const patternPassword = /^[a-zA-Z0-9]{8-12}$/;

  var LuserName = document.getElementById('loginUsername').value;
  var LuserPassword = document.getElementById('loginPassword').value;

  var loginname = patternUserName.test(LuserName);
  var loginpassword = patternPassword.test(LuserPassword);

  if(loginname == false){
    alert('Invalid Login Name');
  }
  if(loginpassword == false){
    alert('Invalid Login Password');
  }
}

