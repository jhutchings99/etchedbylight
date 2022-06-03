function validateForm() {
    if (document.forms[0].Name.value == "") {
        alert("Please fill out your name");
        return false;
    }
    if (document.forms[0].Email.value == "") {
        alert("Please fill out your email");
        return false;
    }
    if (document.forms[0].Subject.value == "") {
        alert("Please fill out your subject");
        return false;
    }
    if (document.forms[0].Comments.value == "") {
        alert("Please fill out your message");
        return false;
    }
}