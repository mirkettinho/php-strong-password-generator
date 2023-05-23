<?php



$lower_letter = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
$letter = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
$numbers = ["!", "£", "$", "%", "&", "/", "(", ")", "=", "?", "^", ";", ",", ":", ".", "ç", "@", "-", "_", "°", "#", "[", "]", "*", "+", "{", "}", "§",];
$symbols = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

$password = "";

if (isset($_GET["pass"])) {
  $length = $_GET["pass"];
  

  $pass_array = array_merge($letter, $lower_letter, $symbols, $numbers);

  for ($i = 0; $i < $length; $i++) {
      $random = rand(0, (count($pass_array) - 1));
      $password .= $pass_array[$random];
  }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Password Generator</title>
</head>
<body>

<!-- CONTAINER -->
  <div class="pw-container">

    <div class="pw-header">
      <div class="pw">
        <span id="pw"> <?php echo $password ?> </span>
      </div>
    </div>

    <div class="pw-body">

      <form  action="index.php" method="GET">
        <div class="form-control">
          <lable for="length">Password Length</lable>
          <input id="len"  type="number" name="pass" placeholder="Max 25">
        </div>
        <button class="generate" id="generate">Generate Password</button>
      </form>

    </div>
  </div>
  
</body>
</html>