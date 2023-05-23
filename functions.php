<?php

function passGenerator(){
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
  return $password;
}



?>