<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\TokenizerInterface;
use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\AssemblerInterface;
class CodeHighlight
{
    private $tokenizer;
    private $clasifier;
    private $assembler;

    /**
     * CodeHighlight constructor.
     * @param TokenizerInterface $tokenizer
     * @param ClasifierInterface $clasifier
     * @param AssemblerInterface $assembler
     */
    public function __construct
    (
        TokenizerInterface $tokenizer,
        ClasifierInterface $clasifier,
        AssemblerInterface $assembler
    )
    {
        $this->tokenizer= $tokenizer;
        $this->clasifier= $clasifier;
        $this->assembler= $assembler;

    }

    /**
     * @param string $string
     * @return string
     */
    public function highlight(string $string): string
    {
        // use the defined classes/services to perform the highlighting on $string
        $tokenizedArray = $this->tokenizer->tokenize($string);
        $clasifiedArray = array();
        foreach ($tokenizedArray as $item) {
//            array_push($clasifiedArray,[$this->clasifier->clasify($item), $item]);
            array_push($clasifiedArray, $this->clasifier->clasify($item[0], $item[1]));
        }

        return $this->assembler->assemble($clasifiedArray);
    }
}
