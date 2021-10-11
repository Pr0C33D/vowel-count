<?php
// https://www.codewars.com/kata/54ff3102c1bad923760001f3

function getCount($str) {
    $vowelsCount = 0;
    
    return preg_match_all('/[aeiou]/i', $str);
    return $vowelsCount;
  }

?>