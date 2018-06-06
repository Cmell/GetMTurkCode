<?php
function rndmCode($codeForm = null) {
  // This function will generate a random code.
  // The codeForm argument should be comprised of  the letters "n" and "l".
  // For each "n", a random integer (0-9) is chosen. For each "l" a random
  // letter is chosen (A-X). Only uppercase is currently supported.
  // Default is "nnnlll", which is 3 numbers followed by 3 letters.
  if ($codeForm === null) {
    $codeForm = "nnnlll";
  }
  $codeForm = str_split($codeForm);
  $code = "";

  foreach ($codeForm as $i) {
    if ($i == 'n') {
      $code = $code.chr(mt_rand(48,57));
    } elseif ($i == 'l'){
      $code = $code.chr(mt_rand(65,90));
    }
  }

  return($code);
}

$code = rndmCode();
echo $code;
?>
