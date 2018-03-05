//  Input name, passowrd & email address test
function validateForm() {
  var flag = true;
  var name = document.forms["register-form"]["name"].value;
  var name_warn = document.getElementById("name-warning");
  if (name == null || name == "") {
    //alert("Please input name!");
    //name_warn.innerText = "can't be empty";
    name_warn.style.display = "block";
    //return false;
    flag = false;
  } else {
    name_warn.style.display = "none";
  }
  var password = document.forms["register-form"]["password"].value;
  var pwd_warn = document.getElementById("pwd-warning");
  if (password == null || password == "") {
    //alert("Please input password!");
    //pwd_warn.innerText = "can't be empty";
    pwd_warn.style.display = "block";
    //return false;
    flag = false;
  } else {
    pwd_warn.style.display = "none";
  }
  var email_address = document.forms["register-form"]["emailAddress"].value;
  var email_warn = document.getElementById("email-warning");
  var atpos = email_address.indexOf("@");
  var dotpos = email_address.lastIndexOf(".");
  if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= email_address.length) {
    //alert("Please input an email address!");
    //email_warn.innerText = "This isn't an email";
    email_warn.style.display = "block";
    //return false;
    flag = false;
  } else {
    email_warn.style.display = "none";
  }

  return flag;
}