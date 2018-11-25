<?php

function randomString($length = 32) {
        $randstr=0;
        srand((double) microtime() * 1000000);
        //our array add all letters and numbers if you wish
        $chars = array(
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p',
        'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5',
        '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 
        'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        '0','1','2','3','4','5','6','7','8','9');

         for ($rand = 0; $rand <= $length; $rand++) {
         $random = rand(0, count($chars) - 1);
         $randstr .= $chars[$random];
         }
           return $randstr;
         }
?>
