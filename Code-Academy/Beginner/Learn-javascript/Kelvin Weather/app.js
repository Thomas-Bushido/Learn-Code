

let kelvin = 293;
kelvin = 300;
// the forecast today in kelvin
const Celsius = kelvin - 273;
// convert Kelvin to Celsius by subtracting 273 from the kelvin variable

const Farenheit = Math.floor(Celsius * (9/5)+32);

// Fahrenheit = Celsius * (9/5) + 32
console.log(`The temperature is ${Farenheit}degrees Fahrenheit`);


