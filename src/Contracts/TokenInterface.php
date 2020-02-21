<?php


namespace HighlightLib\Contracts;


interface TokenInterface
{
    /**
     * @param string $text
     * @return string
     */
    public function getCSSClass(string $text): string;
}