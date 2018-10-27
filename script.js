function validate(){
  var x = document.forms["login"]["user"].value;
  var y = document.forms["login"]["pass"].value;
    if (x == "") {
        //alert("Username field is required!");
        return false;
    } else if(y == ""){
      //alert("Password field is required!");
      return false;
    }
}
