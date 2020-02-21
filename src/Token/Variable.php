<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;
use phpDocumentor\Reflection\Types\AbstractList;

class Variable extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSSType(): string
    {
        // TODO: Implement getCSSType() method.
        return 'variable';
    }
}