<?php


namespace HighlightLib\Token;

class Number extends AbstractToken
{
    /**
     * @return string
     */
    public function getCSSType(): string
    {
        // TODO: Implement getCSSType() method.
        return 'number';
    }
}