<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\TokenInterface;


class Atom implements TokenInterface
{

    public function getCSSClass(): string
    {
        $span= new GetSpan();
        return $span->getSpanClass("atom");
    }
}