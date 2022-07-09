<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sample002</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('/CSS/style.css')}}">
  </head>
<body>
  <div class="calculator">
    <div class="input" id="input"></div>
    <div class="buttons">
      <div class="operators">
        <div>+</div>
        <div>-</div>
        <div>×</div>
        <div>÷</div>
      </div>
      <div class="leftPanel">
        <div class="numbers">
          <div>7</div>
          <div>8</div>
          <div>9</div>
        </div>
        <div class="numbers">
          <div>4</div>
          <div>5</div>
          <div>6</div>
        </div>
        <div class="numbers">
          <div>1</div>
          <div>2</div>
          <div>3</div>
        </div>
        <div class="numbers">
          <div>0</div>
          <div>.</div>
          <div id="clear">C</div>
        </div>
      </div>
      <div class="equal" id="result">=</div>
    </div>
  </div>
  <script src="sample002.js"></script>
  
  
  <script>
  "use strict";

var input = document.getElementById('input');
var number = document.querySelectorAll('.numbers div');
var operator = document.querySelectorAll('.operators div');
var result = document.getElementById('result'); 
var clear = document.getElementById('clear');
var resultDisplayed = false;

// 数字ボタンをクリックした時の処理
for (var i = 0; i < number.length; i++) {
  number[i].addEventListener("click", function(e) {

    var currentString = input.innerHTML;
    var lastChar = currentString[currentString.length - 1];
    if (resultDisplayed === false) {
      input.innerHTML += e.target.innerHTML;
    } else if (resultDisplayed === true && lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") {
      resultDisplayed = false;
      input.innerHTML += e.target.innerHTML;
    } else {
      resultDisplayed = false;
      input.innerHTML = "";
      input.innerHTML += e.target.innerHTML;
    }
  });
}

// 「＋」「ー」「x」「÷」をクリックした時の処理
for (var i = 0; i < operator.length; i++) {
  operator[i].addEventListener("click", function(e) {

    var currentString = input.innerHTML;
    var lastChar = currentString[currentString.length - 1];

    if (lastChar === "+" || lastChar === "-" || lastChar === "×" || lastChar === "÷") {
      var newString = currentString.substring(0, currentString.length - 1) + e.target.innerHTML;
      input.innerHTML = newString;
    } else if (currentString.length == 0) {
      console.log("enter a number first");
    } else {
      input.innerHTML += e.target.innerHTML;
    }

  });
}

result.addEventListener("click", function() {

  var inputString = input.innerHTML;
  var numbers = inputString.split(/\+|\-|\×|\÷/g);
  var operators = inputString.replace(/[0-9]|\./g, "").split("");

  var divide = operators.indexOf("÷");
  while (divide != -1) {
    numbers.splice(divide, 2, numbers[divide] / numbers[divide + 1]);
    operators.splice(divide, 1);
    divide = operators.indexOf("÷");
  }

  var multiply = operators.indexOf("×");
  while (multiply != -1) {
    numbers.splice(multiply, 2, numbers[multiply] * numbers[multiply + 1]);
    operators.splice(multiply, 1);
    multiply = operators.indexOf("×");
  }

  var subtract = operators.indexOf("-");
  while (subtract != -1) {
    numbers.splice(subtract, 2, numbers[subtract] - numbers[subtract + 1]);
    operators.splice(subtract, 1);
    subtract = operators.indexOf("-");
  }

  var add = operators.indexOf("+");
  while (add != -1) {
    numbers.splice(add, 2, parseFloat(numbers[add]) + parseFloat(numbers[add + 1]));
    operators.splice(add, 1);
    add = operators.indexOf("+");
  }

  input.innerHTML = numbers[0];
  resultDisplayed = true; 
});

clear.addEventListener("click", function() {
  input.innerHTML = "";
})

  </script>
  
</body>
</html>