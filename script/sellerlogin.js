function validateEmail() {
    var email = document.getElementById('email').value;
    if(email == null || email == undefined || email == '') {
      alert('Email is required');
      return;
    }
  
    var mailFormatRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(!email.match(mailFormatRegex)) {
      alert("Invalid email address");
      return ;
    }
  }
  
  function validatePassword() {
      var password = document.getElementById('password').value;
      if(password == null || password == undefined || password == '') {
        alert('Password is required');
        return;
      }
    
      if(password.length < 4) {
        alert('Password should be at least 4 characters long');
        return;
      }
    }
    