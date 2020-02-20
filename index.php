<?php
require "vendor/autoload.php";
use HighlightLib\CodeHighlight;
$string = "hello every    bod  y! \n Hyy  ";
$na = new CodeHighlight();
print_r($na->highlight($string));