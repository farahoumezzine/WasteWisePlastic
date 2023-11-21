function showalert() {
  alert("Welcome to Waste Wise Plastic");
}
const name = document.getElementById("nameId");
function ValidateEmail() {
  var inputText = document.getElementById("emailId");
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  /*
\w+ :the username
([\.-]?\w+)* : (.) (-) 
\w+ :  domain name
(\.\w{2,3})+ : .com,.fr ...
    */
  if (inputText.value.match(mailformat)) {
    alert("Valid email address!");
    inputText.focus();
    return true;
  } else {
    alert("You have entered an invalid email address!");
    inputText.focus();
    return false;
  }
}
