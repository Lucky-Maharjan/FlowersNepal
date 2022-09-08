// Login Form Validation
function userLoginValidation()
{
    var email = document.forms["usrLoginValidation"]["email"].value;
    var password = document.forms["usrLoginValidation"]["password"].value;
    if (email=="")
    {
        alert("Please enter email!!!");
        return false;
    }
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.usrLoginValidation.email.value))
    {
        alert("Email address format invalid!");
        return (false);
    }
    if(password==""){
        alert("Please enter password!!!");
        return false;
    }
}
// User Registration Validation
function userRegistrationValidation()
{
    if (!/^[a-zA-Z]*$/g.test(document.usrReg.fname.value)) {
        alert("Only Alphabets Allowed in first name!");
        return false;
    }
    if (!/^[a-z A-Z]*$/g.test(document.usrReg.lname.value)) {
        alert("Only Alphabets Allowed in last name!");
        return false;
    }
    if (document.usrReg.fname.value == "") {
        alert("Enter First Name!");
        return false;
    }
    if (document.usrReg.lname.value == "") {
        alert("Enter Last Name!");
        return false;
    }
    if (document.usrReg.email.value == "") {
        alert("Enter Email!");
        return false;
    }
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.usrReg.email.value))
    {
        alert("Email address format invalid!");
        return (false);
    }
    if (document.usrReg.telephone.value == "") {
        alert("Enter telephone number!");
        return false;
    }
    if (!/^[0-9]*$/g.test(document.usrReg.telephone.value)) {
        alert("Only numbers allowed in telephone!");
        return false;
    }
    if (document.usrReg.address.value == "") {
        alert("Enter Address!");
        return false;
    }
    if (document.usrReg.city.value == "") {
        alert("Enter City!");
        return false;
    }
    if (document.usrReg.country.value == "") {
        alert("Enter Country!");
        return false;
    }
    if (document.usrReg.region.value == "") {
        alert("Enter Region!");
        return false;
    }
    if (document.usrReg.password.value == "") {
        alert("Enter Password");
        return false;
    }
    if (document.usrReg.confirm_password.value == "") {
        alert("Enter Confirm Password!");
        return false;
    }
    if(document.usrReg.password.value != document.usrReg.confirm_password.value){
        alert("Re-Password Doesnot match!");
        return false;
    }
}
// Email Subscribe Validation
function subscribeValidation(){
    var arrValue = document.getElementsByClassName("email");
    var insertedEmail = arrValue[0].value;
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(insertedEmail))
    {
        alert("Email address format invalid!");
        return (false);
    }
}

// Contafct Form Validation
function contactValidation(){
    // Name
    var arrName = document.getElementsByClassName("name");
    var insertedName = arrName[0].value;
    if (insertedName == "")
    {
        alert("Enter Your Name!");
        return (false);
    }
    if (!/^[a-z A-Z]*$/g.test(insertedName))
    {
        alert("Only Alphanets Allowed in Name!");
        return (false);
    }

    // Email
    var arrEmail = document.getElementsByClassName("email");
    var insertedEmail = arrEmail[0].value;
    if (insertedEmail == "")
    {
        alert("Enter Your Email!");
        return (false);
    }
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(insertedEmail))
    {
        alert("Email address format invalid!");
        return (false);
    }

    // Subject
    var arrSubject = document.getElementsByClassName("subject");
    var insertedSubject = arrSubject[0].value;
    if (insertedSubject == "")
    {
        alert("Enter your subject!");
        return (false);
    }
    if (!/^[a-z A-Z]*$/g.test(insertedSubject))
    {
        alert("Subject should only contain alphabets!");
        return (false);
    }

    // Message
    var arrMessage = document.getElementsByClassName("message");
    var insertedMessage = arrMessage[0].value;
    if (insertedMessage == "")
    {
        alert("Enter your Message!");
        return (false);
    }
}
// Admin Form Validation
function adminLoginValidation()
{
    var username = document.forms["adLoginValidation"]["a_username"].value;
    var password = document.forms["adLoginValidation"]["a_password"].value;
    if (username=="")
    {
        alert("Please enter username!!!");
        return false;
    }
    if (!/^[a-zA-Z]*$/g.test(document.adLoginValidation.a_username.value))
    {
        alert("Username is not an email!");
        return (false);
    }
    if(password==""){
        alert("Please enter password!!!");
        return false;
    }
}