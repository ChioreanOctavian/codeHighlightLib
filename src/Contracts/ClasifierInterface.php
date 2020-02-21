<?php
declare(strict_types=1);
namespace HighlightLib\Contracts;

use HighlightLib\Token\AbstractToken;
use phpDocumentor\Reflection\Types\Integer;

interface ClasifierInterface
{
    /**
     * @param string $stringToken
     * @param int $offSet
     * @return AbstractToken
     */
    public function clasify(string $stringToken, int $offSet) : AbstractToken;
}
