function valid() {

    var password = f1.pass.value;
    
    var passw = "^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$";

    if (!(password.match(passw))) {
        alert("Password Should Contain At Least One Uppercase Letter, One Lowercase letter, One Number And One Special Character");
        return false;
    }

    else if (password.length < 8) {
        alert("Password Must Be At least 8 Characters long");
        return false;
    }
}
