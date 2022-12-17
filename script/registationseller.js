function validateid() {
    var ID = document.getElementById('ID').value;
    if (ID == null || ID == undefined || ID == '') {
        alert('User id is required');
        return;
    }
    if (ID.length < 0) {
        alert('id number should be gater then 0');
        return;
    }
}
function validateName() {
    var username = document.getElementById('username').value;
    if (username == null || username == undefined || username == '') {
        alert('User Name is required');
        return;
    }
    if (username.length < 2) {
        alert('Name should be at least 2 characters long');
        return;
    }
}
function validateShopName() {
    var shopname = document.getElementById('shopname').value;
    if (shopname == null || shopname == undefined || shopname == '') {
        alert('Shop Name is required');
        return;
    }
    if (shopname.length < 2) {
        alert('Name should be at least 2 characters long');
        return;
    }
}
function validateEmail() {
    var email = document.getElementById('email').value;
    if (email == null || email == undefined || email == '') {
        alert('Email is required');
        return;
    }

    var mailFormatRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (!email.match(mailFormatRegex)) {
        alert("Invalid email address");
        return;
    }
}
function validatetln() {
    var Tradelicencenumber = document.getElementById('Tradelicencenumber').value;
    if (Tradelicencenumber == null || Tradelicencenumber == undefined || Tradelicencenumber == '') {
        alert('Trade licence number is required');
        return;
    }
    if (Tradelicencenumber.length < 8) {
        alert('Trade licence number should be at least 8 number long');
        return;
    }
}
function validatePassword() {
    var password = document.getElementById('password').value;
    if (password == null || password == undefined || password == '') {
        alert('Password is required');
        return;
    }

    if (password.length < 5) {
        alert('Password should be at least 5 characters long');
        return;
    }
}


function validateDob() {
    var dob = document.getElementById('dob').value;
    var today = new Date();
    var dobDate = new Date(dob);

    if (today < dobDate) {
        alert('DOB cannot be later than current date');
    }
}

function resetRegistration() {
    document.getElementById('ID').value = '';
    document.getElementById('username').value = '';
    document.getElementById('email').value = '';
    document.getElementById('password').value = '';
    document.getElementById('shopname').value = '';
    document.getElementById('Tradelicencenumber').value = '';
    document.getElementById('male').checked = false;
    document.getElementById('female').checked = false;
    document.getElementById('other').checked = false;
    document.getElementById('dob').value = '';
}