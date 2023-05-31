<!DOCTYPE html>
<html>
<head>
  <title>Odd or Even Checker</title>
  <script>
    function checkOddEven() {
      var input = document.getElementById("number").value;
      var resultElement = document.getElementById("result");

      if (input % 2 == 0) {
        resultElement.innerHTML = input + " is an even number.";
      } else {
        resultElement.innerHTML = input + " is an odd number.";
      }
    }
  </script>
</head>
<body>
  <h1>Odd or Even Checker</h1>
  
  <label for="number">Enter a number:</label>
  <input type="number" id="number" name="number" min="1">
  <button onclick="checkOddEven()">Check</button>

  <p id="result"></p>
</body>
</html>