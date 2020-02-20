<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class Bracket implements TokenInterface
{

    public function getCSSClass(): string
    {
        // TODO: Implement getCSSClass() method.
        $span= new GetSpan();
        return $span->getSpanClass("bracket");
    }
}