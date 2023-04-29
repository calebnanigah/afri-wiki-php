<?php

/** 
 * TEST
 * Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.
 * Examples input/output:
 * XO("ooxx") => true
* XO("xooxx") => false
* XO("ooxXm") => true
* XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
* XO("zzoo") => false
 * 
 */

 $str = "xxoo";

function XO($s) {
  
    $o = 0;
    $x= 0;
    
    foreach( str_split($s) as $val){
  
    if($val==='O' OR $val==='o'){
          $o++;
    };
    if($val==='X' OR $val==='x'){
      $x++;
      };

    };
  
    if($o==$x){
        return true; 
    } else{
        return false;
    }

  }


    /**
   * XO2
   *
   * @param  mixed $s
   * @return bool
   */
  function XO2($s):bool {

    $strToLowercase = strtolower($s);
 
    return substr_count($strToLowercase, 'o') === substr_count($strToLowercase, 'x');
 
   }

   
echo XO($str);