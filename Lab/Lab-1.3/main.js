let array = [5, 25, 13, 8, 45, 6, 11]
document.getElementById('arr').innerHTML = 'Input array: ' + array

function findMax() {
    let subArray = array
    let max = array[0]

    for (let value of subArray) {
        if (value > max) max = value
    }
    document.getElementById('findMaxId').innerHTML = max
}

function findMin() {
    let subArray = array
    let min = array[0]

    for (let value of subArray) {
        if (value < min) min = value
    }
    document.getElementById('findMinId').innerHTML = min
}

function sortToMax() {
    let subArray = array
    for (let i = 0; i < subArray.length - 1; i++) {
        for (let j = 0; j < subArray.length - i - 1; j++) {
            if (subArray[j] > subArray[j + 1]) {
                let temp = subArray[j]
                subArray[j] = subArray[j + 1]
                subArray[j + 1] = temp
            }
        }
    }
    document.getElementById('sortToMaxId').innerHTML = subArray
}

function sortToMin() {
    let subArray = array

    for (let i = 0; i < subArray.length - 1; i++) {
        for (let j = 0; j < subArray.length - i - 1; j++) {
            if (subArray[j] < subArray[j + 1]) {
                let temp = subArray[j]
                subArray[j] = subArray[j + 1]
                subArray[j + 1] = temp
            }
        }
    }
    document.getElementById('sortToMinId').innerHTML = subArray
}