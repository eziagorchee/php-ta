<?php

function fibonacci($input)
{
  $arr = array();

  for ($i=0; $i < $input; $i++)
  {
    if ($i === 0 || $i === 1){
      $arr[$i] = $i;
    } else {
      $arr[$i] = $arr[$i - 1] + $arr[$i - 2];
    }
  }

  return $arr;
}

function solution($input)
{
  // Solution
  return fibonacci($input);
}


$input = (int)$argv[1];
echo solution($input);
