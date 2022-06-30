var email=document.getElementById("email").value;
//var name=document.getElementById("username").value;  
var password=document.getElementById("password").value;

 var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

function Validate() {

    if (password.length < 8) {
        alert("Password Must Be At least 8 Characters long");
        return false;
    }

   
}  
    //  if (email.match(mailformat)==false) {
        // return false;
    // }


    //if (uname.length < 6) {
      //  alert("User Name Must Be At least 6 Characters long");
        //return false;

    //}

    

    // if(password.length<8 && uname.length<6){
        // alert("User Name Must Be At least 6 Characters long And Password Must Be At least 8 Characters long");
        // return false; 
    // }

    // else {
        // alert("You have entered an invalid email address!");
        // return false;
    // }









