<?php
namespace HighlightLib\Clasifing;

use HighlightLib\Contracts\ClasifierInterface;
use HighlightLib\Token\AbstractToken;
use HighlightLib\Token\NormalCharachter;


class Clasifi implements ClasifierInterface
{
    private $configArray;

    /**
     * @param string $stringTokenized
     * @param int $offSet
     * @return AbstractToken
     */
    public function clasify(string $stringTokenized, int $offSet): AbstractToken
    {
        foreach ($this->getConfigArray() as $item => $value){
            if (preg_match_all($item, $stringTokenized))
            {
                return new $value($stringTokenized, $offSet);
            }

        }
        return new NormalCharachter($stringTokenized, $offSet);

    }

    /**
     * @return array
     */
    private function getConfigArray(): array {
        return $this->configArray = require('/var/www/codeHighlightLib/Config/config.php');
    }
}