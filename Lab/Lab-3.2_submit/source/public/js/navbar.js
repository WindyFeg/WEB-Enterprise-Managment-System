"use strict"

let idSearchAjax = document.getElementById('idSearchAjax')
idSearchAjax.onblur = function () {
    let ul = document.getElementById('w-ajax-searching')
    ul.innerHTML = ''
}

function showHint(str) {
    if (str.length != 0) {
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                let ul = document.getElementById('w-ajax-searching')
                ul.innerHTML = ''

                let items = this.responseText.split(',')
                items.forEach(function (item) {
                    if (item != "") {
                        ul.innerHTML += `<li class="px-2 mx-1 py-1" style="border-bottom:1px solid #ccc"><a style="color: #666666; " href="https://github.com/issoe">${item}</a></li>`
                        console.log("hello nha")
                    }
                })
            }
        }
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    } else {
        let ul = document.getElementById('w-ajax-searching')
        ul.innerHTML = ''
    }
    
}