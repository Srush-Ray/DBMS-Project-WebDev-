function loginValidations()
{
  var username = document.forms["loginpage"]["username"];
    var password = document.forms["loginpage"]["password"];

    if (username.value == "")
    {
        window.alert("Please enter your Username.");
        username.focus();
        return false;
    }
    if (password.value == "")
    {
        window.alert("Please enter password.");
        password.focus();
        return false;
    }    
    return true;

}
