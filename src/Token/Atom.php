<?php


namespace HighlightLib\Token;

class Atom extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSSType(): string
    {
        // TODO: Implement getCSSType() method.
        return "atom";
    }

}