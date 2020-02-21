<?php


namespace HighlightLib\Token;


use HighlightLib\Contracts\ElementInterface;
use HighlightLib\Token\GetSpan;

abstract class AbstractToken implements ElementInterface
{
    private $text;
    private $offSet;
    private $span;

    /**
     * AbstractToken constructor.
     * @param string $text
     * @param int $offSet
     */
    public function __construct(string $text, int $offSet)
    {
        $this->text= $text;
        $this->offSet= $offSet;
        $this->span= new GetSpan();
    }

    /**
     * @return mixed
     */
    public function getOffSet()
    {
        return $this->offSet;
    }

    /**
     * @return mixed
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param int $numberOfSpaces
     * @return string
     */
    public function insertSpaces(int $numberOfSpaces): string
    {
        $spaces = "";
            for ($i=0; $i<$numberOfSpaces; $i++){
                $spaces .= $this->span->insertSpace();
            }
            return $spaces;
    }

    /**
     * @return string
     */
    abstract public function getCSSType(): string;

    /**
     * @return string
     */
    public function getCSS(): string {

        return $this->span->getSpanClass($this->getCSSType(), $this->getText());
    }
}