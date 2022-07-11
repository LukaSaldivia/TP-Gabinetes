const button = document.getElementById("send");

var check = function() {
    if (document.getElementById("password").value != document.getElementById("confPassword").value || document.getElementById("confPassword").value == null) {
        button.disabled = true;
    } else {}

}

var loadFile = function(event) {
    var image = document.getElementById("image");
    image.src = URL.createObjectURL(event.target.files[0]);
    image.onload = function() {
        URL.revokeObjectURL(image.src)
    }

};