<?php
namespace HighlightLib\Clasifing;

use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Contracts\TokenInterface;


class Clasifi implements ClasifierInterface
{
    private $configArray;

    public function clasify(string $stringToken): TokenInterface
    {
        foreach ($this->getConfigArray() as $item => $value){
            if (preg_match_all($item, $stringToken))
            {
                return new $value;
            }

        }

    }

    private function getConfigArray(): array {
        return $this->configArray = require('/var/www/codeHighlightLib/src/Config/config.php');
    }
}