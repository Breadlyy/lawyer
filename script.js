const regex_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const regex_phone = /^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$/;
const regex_characters = /^[A-Za-zА-Яа-я].{1,}$/;
const regex_pass = /[A-Za-z0-9]{5,}/;
const reg_characters_digits = /^[A-Za-z]$/;

const form = document.querySelector("form");
const Name = document.getElementById("name");
const last_name = document.getElementById("last_name");
const email = document.getElementById("email");
const phone_number = document.getElementById("phone");
const pass = document.getElementById("pass");
const errorElement = document.getElementById("error");
var fields = document.getElementsByClassName("field");



form.addEventListener('onclick', (e) => {
    e.preventDefault()
    for (var i = 0; i < fields.length; i++) {
        if (!fields[i].value) {
            var element = document.getElementById("button_reg");
            element.style.color = "red"
            element.innerHTML = "All fields must be filled";
        }
    }
    if (pass.value.length <= 5 || pass.value.length >= 30) {
        console.log("wrong length(5-30 characters)")
    }

    if (!reg_phone.test(phone_number)) {
        console.log("Wrong format of phone number")
    }
    if (!reg_characters.test(Name) || !reg_characters.test(last_name)) {
        console.log("Wrong characters");
    }
    if (!reg_characters_digits.test(pass)) {
        console.log("Password can contain only digits and letters")
    }


})

function validateEmail(email) {
    return regex_email.test(email);
}

function validateName(Name) {
    return regex_characters.test(Name);
}

function validatePhoneNumber(phone_number) {
    return regex_phone.test(phone_number);
}

function validatePass(pass) {
    return regex_pass.test(pass);
}

function Validate() {

    Name.oninput = function() {
        if (!validateName(Name.value)) {
            var element = document.getElementById("error_name");
            element.style.color = "red"
            element.innerHTML = "error";
        } else {
            var element = document.getElementById("error_name");
            element.style.color = "#26BB26"
            element.innerHTML = "OK"
        }

    }

    last_name.oninput = function() {
        if (!validateName(last_name.value)) {
            var element = document.getElementById("error_last_name");
            element.style.color = "red"
            element.innerHTML = "error";
        } else {
            var element = document.getElementById("error_last_name");
            element.style.color = "#26BB26"
            element.innerHTML = "OK"
        }
    }

    email.oninput = function() {
        if (!validateEmail(email.value)) {
            var element = document.getElementById("error_email");
            element.style.color = "red"
            element.innerHTML = "error";
        } else {
            var element = document.getElementById("error_email");
            element.style.color = "#26BB26"
            element.innerHTML = "OK"
        }
    }

    phone_number.oninput = function() {
        if (!validatePhoneNumber(phone_number.value)) {
            var element = document.getElementById("error_phone");
            element.style.color = "red"
            element.innerHTML = "error";
        } else {
            var element = document.getElementById("error_phone");
            element.style.color = "#26BB26"
            element.innerHTML = "OK"
        }
    }

    pass.oninput = function() {
        if (!validatePass(pass.value)) {
            var element = document.getElementById("error_pass");
            element.style.color = "red"
            element.innerHTML = "error";
        } else {
            var element = document.getElementById("error_pass");
            element.style.color = "#26BB26"
            element.innerHTML = "OK"
        }
    }
}
setTimeout(Validate, 2000)

$(function() {
    document.getElementById('form_message').addEventListener('submit', function(evt) {
        var http = new XMLHttpRequest(),
            f = this;
        evt.preventDefault();
        http.open("POST", "contact.php", true);
        http.onreadystatechange = function() {
            if (http.readyState == 4 && http.status == 200) {
                alert(http.responseText);
            }
        }
        http.onerror = function() {
            alert('Ошибка, попробуйте еще раз');
        }
        http.send(new FormData(f));
    }, false);

});