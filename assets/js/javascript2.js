function Checkformulaire() {
  var password1 = document.getElementById("pass1").value;
  var password2 = document.getElementById("pass2").value;
  if (password1 != password2) {
    alert("password must be same!");
  }
}
function showalert2() {
  alert("Welcome to REGISTER");
}
function checklengthpass() {
  var name = document.getElementById("fullnameID").value;
  if (name.length < 3) {
    document.getElementById("passwordloc").innerHTML =
      "Name must be at least 3 char long ";
  }
  if (name.length == 3) {
    document.getElementById("passwordloc").remove("invalid");
    document.getElementById("passwordloc").add("valid");
  }
}
function checklengthpass2() {
  var username = document.getElementById("usernameID").value;
  if (username.length < 5) {
    document.getElementById("passwordloc2").innerHTML =
      "UserName must be at least 5 char long ";
  }
  if (username.length == 5) {
    document.getElementById("passwordloc2").remove("invalid");
    document.getElementById("passwordloc2").add("valid");
  }
}
var password1 = document.getElementById("pass1");

var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

password1.onkeyup = function () {
  //lowercase
  var lowerCaseLetters = /[a-z]/g;
  if (password1.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  //capital letters
  var upperCaseLetters = /[A-Z]/g;
  if (password1.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  //numbers
  var numbers = /[0-9]/g;
  if (password1.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  //length
  if (password1.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
};
