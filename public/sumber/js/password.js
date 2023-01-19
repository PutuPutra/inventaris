function myFunction() {
    var x = document.getElementById("password");
    var y = document.getElementById("hide1");
    var z = document.getElementById("hide2");
    if (x.type === 'password') {
        x.type = "type";
        y.style.display = "block";
        z.style.display = "none";

    } else {
        x.type = "password";
        y.style.display = "none";
        z.style.display = "block";
    }
}