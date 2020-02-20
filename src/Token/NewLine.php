<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;

class NewLine implements TokenInterface
{

    public function getCSSClass(): string
    {
        // TODO: Implement getCSSClass() method.
        $span= new GetSpan();
        return $span->getSpanClass("newLine");
    }
}