function showPwd() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
  function showPwd1() {
    var x = document.getElementById("passwordr");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
function switchSign() {
    var x = document.getElementById('SignUp');
    var y = document.getElementById('SignIn');
    if (x.style.display == "none") {
        x.style.display = "block";
        y.style.display = "none";
        
    }
    else {
        x.style.display = "none";
        y.style.display = "block";

      }
}