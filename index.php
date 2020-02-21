<?php
require "vendor/autoload.php";
use HighlightLib\CodeHighlight;
use HighlightLib\Clasifing\Clasifi;
use HighlightLib\Assembler\Assembler;
use HighlightLib\Tokenizer\Tokenizer;


$string = 'NULL NULL $asdssw __CLASS__  asdasd 
  __DIR__';

$token= new Tokenizer();
$clasifier= new Clasifi();
$assembler= new Assembler();


$codeHighlight= new CodeHighlight($token,$clasifier,$assembler);
echo "<pre>".$codeHighlight->highlight($string)."</pre>";



//print_r($token->tokenize($string));
//$tokenizedArray = $token->tokenize($string);
//$clasifiedArray = array();
//foreach ($tokenizedArray as $item) {
//    array_push($clasifiedArray,[$clasifier->clasify($item), $item]);
//}
//
////print_r($clasifiedArray);
//$assemblerArray = array();
//foreach ($clasifiedArray as $item){
//    array_push($assemblerArray, $assembler->assembly($item[0], $item[1]));
//}

