<?php


namespace HighlightLib\Token;


class GetSpan
{
    public function getSpanClass(string $spanClass){
        return "<span class=\".$spanClass.\">";
    }
}