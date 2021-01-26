<?php

function palindrom($input)
{ $a=[];
  $b=[];
  $lenght= strlen($input);
  for($i = 0; $i < strlen($input); $i++){
    // eliminating spaces from the code
    if($input[$i] != " "){
      $a[]=$input[$i];
    }
    
  }

  for($j=0; $j<$lenght; $j++){
     // eliminating spaces from the code
  if($input[$lenght-1-$j] != " "){
    $b[]=$input[$lenght-1-$j];
  }
    
  }
  if($a==$b){
      echo $input." is a Palindrom"."<br>";
      return true;
    } else{
      echo $input. " is not a palindrom"."<br>";
  
return false;
  // code goes here
}
}
// palindrom('madam');
// palindrom('man');

function solution($input)
{
  return palindrom($input);
}


if (!count(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS)))
{
  $input = $argv[1];
  var_dump(solution($input));
}