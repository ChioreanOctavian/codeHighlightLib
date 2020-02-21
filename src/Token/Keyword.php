<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class Keyword extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSSType(): string
    {
        // TODO: Implement getCSSType() method.
        return "keyword";
    }
}