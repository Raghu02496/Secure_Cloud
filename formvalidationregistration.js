
function Validate() {

    var password = regform.password.value;
    var name = regform.username.value;
    var passw = "^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$";

    if (!(password.match(passw))) {
        alert("Password Should Contain At Least One Uppercase Letter, One Lowercase letter, One Number And One Special Character");
        return false;
    }

    else if (password.length < 8) {
        alert("Password Must Be At least 8 Characters long");
        return false;
    }

    if (name.length < 6) {
        alert("Username Must Be At least 6 Characters long");
        return false;
    }

    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(regform.email.value))) {
        alert("You have entered an invalid email address!");
        return false;
    }










}














