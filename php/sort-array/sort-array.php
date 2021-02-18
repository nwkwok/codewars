<?php
// Create a sorting function 
// Take in an array of numbers
// Return the array sorted 
// No built in sorting function
// Ascending sorted

$numbersArr = [4, 3, 2, 0, 8, 8, 1, 9];
$changed = true;
while ($changed) {
  $changes = 0;
  for($i=0; $i<count($numbersArr)-1; $i++){
    if ($numbersArr[$i] > $numbersArr[$i+1]){
      $placeholder = $numbersArr[$i];
      $numbersArr[$i] = $numbersArr[$i+1];
      $numbersArr[$i+1] = $placeholder;
      $changes++;
      } 
    }
    if ($changes == 0) {
      $changed = false;
    }
  }

print_r($numbersArr);

# Option A
// Loop through the array
