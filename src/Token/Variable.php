<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class Variable implements TokenInterface
{

    public function getCSSClass(): string
    {
        // TODO: Implement getCSSClass() method.
        $span= new GetSpan();
        return $span->getSpanClass("variable");
    }
}