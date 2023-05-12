"use strict"


/* SECTION: USERNAME */
let inputUsername = document.getElementById('usernameRegister')
let regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
let checkUname = document.getElementById('_uname_re')

inputUsername.onkeyup = function () {
    if (inputUsername.value.match(regexEmail)) {
        checkUname.classList.remove('invalid')
        checkUname.classList.add('valid')
    }
    else {
        checkUname.classList.remove('valid')
        checkUname.classList.add('invalid')
    }
}

/* SECTION: PASSWORD */
let inputPassword = document.getElementById('passwordRegister')
let letter = document.getElementById('letter_pword_re')
let capital = document.getElementById('capital_pword_re')
let number = document.getElementById('number_pword_re')
let length = document.getElementById('length_pword_re');

// Validation form login
inputPassword.onkeyup = function () {
    // Validtate lowerCaseLetters
    let lowerCaseLetters = /[a-z]/g;
    if (inputPassword.value.match(lowerCaseLetters)) {
        letter.classList.remove('invalid')
        letter.classList.add('valid')
    } else {
        letter.classList.remove('valid')
        letter.classList.add('invalid')
    }

    // Validate upperCaseLetters
    let upperCaseLetters = /[A-Z]/g
    if (inputPassword.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    let numbers = /[0-9]/g;
    if (inputPassword.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if (inputPassword.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}

/* SECTION: LEVEL */
let radioSelection = document.getElementById('_level_re')
document.mainForm.onclick = function () {
    let level = document.querySelector('input[name = getLevel]:checked');
    if (level.value == 'Admin' || level.value == 'Customer') {
        radioSelection.classList.remove("invalid");
        radioSelection.classList.add("valid");
    }
}
/* SECTION: ADDRESS */
let inputAddress = document.getElementById('addressRegister')
let letterAddress = document.getElementById('_char_re')
let numberAddress = document.getElementById('_num_re')

inputAddress.onkeyup = function () {
    let letterRegex = /[A-Za-z]/g
    if (inputAddress.value.match(letterRegex)) {
        letterAddress.classList.remove('invalid')
        letterAddress.classList.add('valid')
    } else {
        letterAddress.classList.remove('valid')
        letterAddress.classList.add('invalid')
    }

    let numberRegex = /[0-9]/g
    if (inputAddress.value.match(numberRegex)) {
        numberAddress.classList.remove('invalid')
        numberAddress.classList.add('valid')
    } else {
        numberAddress.classList.remove('valid')
        numberAddress.classList.add('invalid')
    }

}

/* SECTION: PHONE */
let phoneInput = document.getElementById('phoneRegister')
let phoneShow = document.getElementById('_phone_re')

phoneInput.onkeyup = function() {
    let numberRegex = /[0-9]/g
    if (phoneInput.value.match(numberRegex)){
        phoneShow.classList.remove('invalid')
        phoneShow.classList.add('valid')
    } else {
        phoneShow.classList.remove('valid')
        phoneShow.classList.add('invalid')
    }

}