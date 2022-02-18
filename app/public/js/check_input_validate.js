function checkInputValidation() {
    let input_string = document.getElementById("array_number").value;
    let number_string = input_string.replace(/[, ]+/g,' ');
    let number_array = number_string.split(' ');
    let flag = true;
    for (let number of number_array) {
        if(isNaN(number)) {
            flag = false;
            let element = document.getElementById("alert");
            element.innerHTML = 'Please enter input is string number!';
        }
    }
    return flag;
}