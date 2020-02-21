<?php
namespace HighlightLib\Tokenizer;

use  HighlightLib\Contracts\TokenizerInterface;

class Tokenizer implements TokenizerInterface
{
    private $tokenizedArray;

    /**
     * @param string $in
     * @return array
     */
    public function tokenize(string $in): array
    {
        $this->tokenizedArray = preg_split("/ +/", $in, -1, PREG_SPLIT_OFFSET_CAPTURE);

        return $this->tokenizedArray;
    }
}