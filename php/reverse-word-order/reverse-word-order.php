<?php 

# "Today is my birthday" => "birthday my is Today"


////// With helper function /////
$string = 'Today is my birthday';

// option #1
// take each word and put them into an array at a different index
    $stringArr = explode(' ', $string);
    print_r($stingArr); 
  // ['Today', 'is', 'my', 'birthday']
  
// reverse the array 
	rsort($stringArr);
    print_r($stringArr); 
    // --> ['birthday', 'my', 'is', 'Today']
  
// join the array as a string split by a space
	$output = implode(' ', $stringArr);


////// Without helper function /////  
$string = 'Today is my birthday';
$strArr = array();

// Attempt #2
$string = 'Today is my birthday';
$strArr = array();
$output = '';
$currentWord = '';

	for($i = 0; $i<strlen($string)-1; $i++){ 
    	if ($string[$i] !== ' ') {
				$currentWord .= $string[$i];
      } elseif ($string[$i] == ' ') {
      	$output = $currentWord . ' ' . $output;
        $currentWord = ''; 
      }
    }
    
   	$output = $currentWord . ' ' . $output;
	    return $output;
        print_r($strArr);
		$outputString = ''; 
       
    // loop through $strArr in the reverse order
    	for($i=count($strArr) - 1; $i = 0; $i--){
     		$outputString .= $strArr[$i] . ' ';
     }
  
     $outputString = 'birthday my is Today'
    // push each index value into outputString and append a ' '
    
    // Get comfortable going character by character when looping thru strings
    // Could have done it with arrays 
  	// Solve problems without helper functions
    // Get familiar with string 
    // This is a pretty standard question 
    // If you don't know if something exists -- 
    // if you don't get it totally syntatically correct that's OK
    	// Keep practicing
      // Concepts and understanding is good
    // Take a step back and pseudo code when feeling flustered. 