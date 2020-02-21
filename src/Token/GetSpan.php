<?php


namespace HighlightLib\Token;


class GetSpan
{
    /**
     * @param string $spanClass
     * @param string $text
     * @return string
     */
    public function getSpanClass(string $spanClass, string $text) : string {
        return "<span class=\"$spanClass\">".$text."</span>";
    }

    /**
     * @return string
     */
    public function insertSpace(): string
    {
        return " ";
    }
}