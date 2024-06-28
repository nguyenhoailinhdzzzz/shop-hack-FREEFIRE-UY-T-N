function signup(e) {
    event.preventDefault();
    var username = document.getElementById(ElementID, "username");
    var email = document.getElementById(ElementID, "email");
    var password = document.getElementById(ElementID, "password");
    var use = {
        username : username,
        email    : email,
        password : password,
    }
    var json = JSON.stringify(value, user)
    localStorage.setItem(key: username, value: json)
    alert("đăng kí thành công")
}