window.onload = function () {
    document.getElementById("password").onchange = cekPassword;
    document.getElementById("recheck-password").onchange = cekPassword;
}

function cekPassword() {
    const password1 = document.getElementById("password").value;
    const password2 = document.getElementById("recheck-password").value;
    if (password1 != password2)
        document.getElementById("recheck-password").setCustomValidity("Passwords confirmation doesn't match");
    else
        document.getElementById("recheck-password").setCustomValidity('');
}
