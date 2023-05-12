"use strict"

let myInput = document.getElementById('exampleInputPassword1')
let letter = document.getElementById('letter')
let capital = document.getElementById('capital')
let number = document.getElementById('number')
let length = document.getElementById("length");


myInput.onfocus = function () {
    document.getElementById('validatePasswordId').style.display = 'block'
}

myInput.onblur = function () {
    document.getElementById('validatePasswordId').style.display = 'none'
}

// Validation form login
myInput.onkeyup = function () {
    // Validtate lowerCaseLetters
    let lowerCaseLetters = /[a-z]/g;
    if (myInput.value.match(lowerCaseLetters)) {
        letter.classList.remove('invalid')
        letter.classList.add('valid')
    } else {
        letter.classList.remove('valid')
        letter.classList.add('invalid')
    }

    // Validate upperCaseLetters
    let upperCaseLetters = /[A-Z]/g
    if (myInput.value.match(upperCaseLetters)) {
        capital.classList.remove("invalid");
        capital.classList.add("valid");
    } else {
        capital.classList.remove("valid");
        capital.classList.add("invalid");
    }

    // Validate numbers
    let numbers = /[0-9]/g;
    if (myInput.value.match(numbers)) {
        number.classList.remove("invalid");
        number.classList.add("valid");
    } else {
        number.classList.remove("valid");
        number.classList.add("invalid");
    }

    // Validate length
    if (myInput.value.length >= 8) {
        length.classList.remove("invalid");
        length.classList.add("valid");
    } else {
        length.classList.remove("valid");
        length.classList.add("invalid");
    }
}