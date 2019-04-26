// function calculForm() {
//     var x = document.forms["calculatriceJs"]["number1Choice"].value;
//     if (x == "") {
//         alert("Name must be filled out");
//         return false;
//     }
// }
function maxLength(element, max) {
    value = element.value;
    max = parseInt(max);
    if (value.length > max) {
        element.value = value.substr(0, max);
    }
}

function calculForm() {
    var number1Choice, number2Choice, operatorsCalcul, resultsCalcul, text;
    //Déclaration des éléments du DOM -------------------------------------------------------------------------------------
    number1Choice = document.getElementById("number1Choice").value;
    number2Choice = document.getElementById("number2Choice").value;
    operatorsCalcul = document.getElementById("operatorsCalcul").value;

    // resultsCalcul = document.getElementById("resultsCalcul").value;

    //Verification string number1Choice
    if (isNaN(number1Choice)) {
        document.getElementById("number1Choice").style.backgroundColor = "red";
    } else if (isNaN(number2Choice)) {
        document.getElementById("number2Choice").style.backgroundColor = "red";
    } else {
        // Addition
        if ((operatorsCalcul) == "+") {
            resultsCalcul = parseInt(number1Choice) + parseInt(number2Choice)
            console.log(resultsCalcul)
            document.getElementById("results").innerHTML = resultsCalcul;
        }

        // Multiplication
        if ((operatorsCalcul) == "*") {
            resultsCalcul = parseInt(number1Choice) * parseInt(number2Choice)
            console.log(resultsCalcul)
            document.getElementById("results").innerHTML = resultsCalcul;
        }

        // Soustraction
        if ((operatorsCalcul) == "-") {
            resultsCalcul = parseInt(number1Choice) - parseInt(number2Choice)
            console.log(resultsCalcul)
            document.getElementById("results").innerHTML = resultsCalcul;
        }

        // Division
        if ((operatorsCalcul) == "/") {
            resultsCalcul = parseInt(number1Choice) / parseInt(number2Choice)
            console.log(resultsCalcul)
            document.getElementById("results").innerHTML = resultsCalcul;
        }

        // Modulo
        if ((operatorsCalcul) == "%") {
            resultsCalcul = parseInt(number1Choice) % parseInt(number2Choice)
            console.log(resultsCalcul)
            document.getElementById("results").innerHTML = resultsCalcul;
        }
    }


}

function reset() {
    windows.location.reload();
}