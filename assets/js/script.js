/*document.getElementById("togglePassword").addEventListener("click", function() {
    let passwordInput = document.getElementById("password");
    passwordInput.type = passwordInput.type === "password" ? "text" : "password";
});*/


function validateForm() {
    let fields = ["firstName", "lastName", "nrc", "dob", "phone", "email", "physicalAddress", "area", "street", "town", "province", "country", "sex", "clientType", "hobbies", "bankName", "bankAccount", "bankBranch", "bankAddress", "bankPhone", "bankEmail"];
    for (let field of fields) {
        let value = document.forms["registerForm"][field].value;
        if (value.trim() === "") {
            alert("Please fill in all fields");
            return false;
        }
    }
    return true;
}       