function advalidations()
{
  var username = document.forms["addad"]["ID"];
    var password = document.forms["addad"]["Password"];
    var confirmpassword =  document.forms["addad"]["Confirm_Password"];
   if(username.value.length < 5 || username.value.length > 20 ){
      window.alert("Username can have 5 to 20 characters.");
      username.focus();
      return false;
    }
     if(password.value.length<5 || password.value.length >20){
      window.alert("Password can have 5 to 20 characters.");
      password.focus();
      return false;
    }
    if (confirmpassword.value != password.value)
    {
      window.alert("Password and Confirm password is not same");
      confirmpassword.focus();
      return false;
    }

    return true;

}
