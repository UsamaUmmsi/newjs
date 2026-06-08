// Function to append values to the display
function appendToDisplay(value) {
    document.getElementById('display').value += value;
}

// Function to clear the display
function clearDisplay() {
    document.getElementById('display').value = '';
}

// Function to calculate the result
function calculate() {
    try {
        let result = eval(document.getElementById('display').value);
        document.getElementById('display').value = result;
    } catch (e) {
        document.getElementById('display').value = 'Error';
    }
}

// Function to handle scientific calculations
function scientificFunction(fn) {
    let display = document.getElementById('display').value;
    let result;

    // Checking for valid number input
    if (isNaN(display) || display === '') {
        document.getElementById('display').value = 'Invalid Input';
        return;
    }
    switch (fn) {
        case 'sqrt':
            result = Math.sqrt(parseFloat(display));
            break;
        case 'sin':
            result = Math.sin(parseFloat(display));
            break;
        case 'cos':
            result = Math.cos(parseFloat(display));
            break;
        case 'tan':
            result = Math.tan(parseFloat(display));
            break;
        default:
            result = 'Invalid Function';
    }

    document.getElementById('display').value = result;
}
