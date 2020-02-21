<?php


namespace HighlightLib\Contracts;


interface ElementInterface
{
    /**
     * @return string
     */
    public function getCSS(): string;
}