<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Tokenizer\Tokenizer;
class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

//    public function __contruct(TokenizerInterface $tokenizer,
//                               ClasifierInterface $clasifier,
//                               AssemblerInterface $assembler){
//
//    }
    public function highlight(string $string): array
    {
        // use the defined classes/services to perform the highlighting on $string
        $tokenizer = new Tokenizer();
        return $tokenizer->tokenize($string);
    }
}
