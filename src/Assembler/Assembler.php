<?php


namespace HighlightLib\Assembler;

use HighlightLib\Contracts\AssemblerInterface;
use HighlightLib\Contracts\TokenInterface;
use phpDocumentor\Reflection\Types\String_;

class Assembler implements AssemblerInterface
{

    private $assembledString;

    /**
     * @param array $tokens
     * @return string
     */
    public function assemble(array $tokens): string
    {
        $this->assembledString = (string) null;
        $index=0;


        // TODO: Implement assemble() method.
        foreach ($tokens as $item){
//            $this->assembledString .=  $item[0]->getCSSClass($item[1]);
            if ($index != 0) {
                $numberOfSpaces = $item->getOffSet() - ($tokens[$index-1]->getOffSet() + strlen($tokens[$index-1]->getText()));
                $this->assembledString .= $item->insertSpaces($numberOfSpaces);
            }

            $this->assembledString .= $item->getCSS();

            $index++;
        }

        return $this->assembledString;
    }
}