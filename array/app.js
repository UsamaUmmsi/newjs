// const numbers = [1, 3, 5, 7, 9];

// let found = false;

// for (let i = 0; i < numbers.length; i++) {
//   if (numbers[i] === 5) {
//     found = true;
//     break;
//   }
// }

// if (found) {
//   document.getElementById("result").innerText = "Number Found";
// } else {
//   document.getElementById("result").innerText = "Number Not Found";
// }


const numbers = [1,2,3,4,15,6,7];

let found = false;

for (let i = 0; i < numbers.length; i++) {
  if(numbers[i] === 5){
    found = true;
    break;
  }
  
}

if(found){
  document.writeln("Number Found");``
 } else{
  document.writeln("Number Not Found");
   
  }


  let studentNames = [
    "Faheem",
    "Nasir",
    "Hammad",
    "Hamza",
    "Abdullah",
    "Ali",
    "Rizwan",
    "Ahmed",
    "Bilal",
    "Usman",
    "Ayaan",
    "Saad",
    "Zain",
    "Huzaifa",
    "Talha",
    "Danish",
    "Areeb",
    "Sameer",
    "Fahad",
    "Ibrahim"
];  

for (let i = 0; i < studentNames.length; i++) {
    document.writeln("Student " + i + " " + studentNames[i] + "<br>");
}

for (var i = 10; i <= 100; i = i + 5) {
    document.writeln(i + "<br />");
}
for (var a = 1; a <= 10; a++) {
    document.writeln("2 x " + a + " = " + 2 * a + "<br />");
}
