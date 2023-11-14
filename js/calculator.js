const mainDisplay = document.getElementById('main_display')
const secondaryDisplay = document.getElementById('secondary_display')

let displayValue = '';
let operador = '';
let firtsValor = 0;
let secondValor = 0;

const appendToDisplay = (value) => {
    displayValue += value;
    mainDisplay.value = displayValue;
}

const clearDisplay = () => {
    displayValue = 0;
    mainDisplay.value = displayValue;
    secondaryDisplay.value = displayValue;
}

const calculateResult = () => {
    try {
        const result = eval(displayValue);
        displayValue = result.toString();
        mainDisplay.value = displayValue;
    } catch (error) {
        displayValue = 'Error';
        mainDisplay.value = displayValue;
    }
}

const setFirtsValor = (ope) => {
    firtsValor = mainDisplay.value
    operador = ope
    mainDisplay.value = 0
    displayValue = '';
    secondaryDisplay.value = firtsValor   
}

const result = () => {
    
    secondValor = mainDisplay.value
    switch (operador) {
        case '+':
            displayValue = Number(firtsValor) + Number(secondValor);
            break;
        case '-':
            displayValue = Number(firtsValor) - Number(secondValor);
            break;
        case '*':
            displayValue = Number(firtsValor) * Number(secondValor);
            break;
        case '/':
            displayValue = Number(firtsValor) / Number(secondValor);
            break;
        default:
            displayValue = 'Operador no válido';
            break;
    }
    mainDisplay.value = displayValue
}