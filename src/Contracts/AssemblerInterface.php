<?php
declare(strict_types=1);

namespace HighlightLib\Contracts;

interface AssemblerInterface
{
    /**
     * @param array $tokens
     * @return string
     */
    public function assemble(array $tokens): string;
}
