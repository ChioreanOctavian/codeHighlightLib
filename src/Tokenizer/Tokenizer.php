<?php
namespace HighlightLib\Tokenizer;

use  HighlightLib\Contracts\TokenizerInterface;

class Tokenizer implements TokenizerInterface
{
    private $tokenizedArray;

    public function tokenize(string $in): array
    {
        $this->tokenizedArray = preg_split("/ +/", $in);

        return $this->tokenizedArray;
    }
}