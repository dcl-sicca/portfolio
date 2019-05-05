<?php
// Cut a sentence without cutting a word
function cutString($string, $start, $length, $endStr = '[&hellip]')
{
   if( strlen( $string ) <= $length ) return $string;
   $str = mb_substr( $string, $start, $length - strlen( $endStr ) + 1, 'UTF-8');
   return substr( $str, 0, strrpos( $str,' ') ).$endStr;
}

