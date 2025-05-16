function chanegpasswordvalidation() {
    var letters = /^[A-Za-z]+$/;
    var numbers = /^\d+$/;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var minlength = '8';
    var maxlength = '24';
    if (document.was.username.value == "") {
        document.getElementById("uname").innerHTML = '<font color="red"> Please enter your correct user name!!</font>';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("cpass").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.getElementById("Answer").innerHTML = '';
        document.was.username.focus();
        return false;
    }
    else if (!letters.test(document.was.username.value)) {
        document.getElementById("uname").innerHTML = '<font color="green">please enter correct user name !!!';
        document.getElementById("opass").innerHTML = '';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("cpass").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.getElementById("Answer").innerHTML = '';
        document.was.username.focus();
        return false;
    } else if (document.was.oldpassword.value == "") {
        document.getElementById("opass").innerHTML = '<font color="red"> Please enter your old password!!</font>';
        document.getElementById("uname").innerHTML = '';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("cpass").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.getElementById("walelgn").innerHTML = '';
        document.was.oldpassword.focus();
        return false;
    } else if (document.was.new_password.value == "") {
        document.getElementById("npass").innerHTML = '<font color="red"> Please enter your new password!!</font>';
        document.getElementById("opass").innerHTML = '';
        document.getElementById("uname").innerHTML = '';
        document.getElementById("cpass").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.getElementById("walelgn").innerHTML = '';
        document.was.new_password.focus();
        return false;
    } else if (document.was.confirmpassword.value == "") {
        document.getElementById("cpass").innerHTML = '<font color="red"> Please enter your confirm password!!</font>';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("opass").innerHTML = '';
        document.getElementById("uname").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.getElementById("walelgn").innerHTML = '';
        document.was.confirmpassword.focus();
        return false;
    }
    else if (!lnumbsers & letters.test(document.was.confirmpassword.value)) {
        document.getElementById("cpass").innerHTML = '<font color="green">Please enter letters only!!';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("opass").innerHTML = '';
        document.getElementById("uname").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.getElementById("walelgn").innerHTML = '';
        document.was.confirmpassword.focus();
        return false;
    } else if (document.was.secreatequestion.value == "") {
        document.getElementById("secrete").innerHTML = '<font color="red"> Please enter your secreatequestion!!</font>';
        document.getElementById("cpass").innerHTML = '';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("opass").innerHTML = '';
        document.getElementById("uname").innerHTML = '';
        document.getElementById("walelgn").innerHTML = '';
        document.was.secreatequestion.focus();
        return false;
     } else if (document.was.Answer.value == "") {
        document.getElementById("walelgn").innerHTML = '<font color="red"> Please enter your new password!!</font>';
        document.getElementById("cpass").innerHTML = '';
        document.getElementById("npass").innerHTML = '';
        document.getElementById("opass").innerHTML = '';
        document.getElementById("uname").innerHTML = '';
        document.getElementById("secrete").innerHTML = '';
        document.was.Answer.focus();
        return false;
    }
    return true;
}
