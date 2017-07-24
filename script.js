function main() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var c = document.getElementById("c").value;

    // Check if any field is empty
    if (a == null || a == "" || b == null || b == "" || c == null || c == "") {
        alert("Please fill in all the fields.");
        die(0);
    }

    // Check if any input is not a number (NaN)
    if (isNaN(a) || isNaN(b) || isNaN(c)) {
        alert("Input must be numeric.");
        die(0);
    }

    // Below gets executed if everything is okay
    // Create cookie for PHP to read
    document.cookie = "a=" + parseInt(a) + "; b=" + parseInt(b) + "; c=" + parseInt(c) + "; path=/";
    window.location.replace("result.php");
}
