<?php

include_once __DIR__ . "/functions.php";

$password = passGenerator();
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
    <h1>Password Generator</h1>
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