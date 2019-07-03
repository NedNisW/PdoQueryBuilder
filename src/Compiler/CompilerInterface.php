<?php
declare(strict_types=1);

namespace NedNisW\PdoQueryBuilder\Compiler;

/**
 * @author NedNisW <nednisw@dwandke.de>
 */
interface CompilerInterface
{
    public function __construct(\PDO $pdo);

    public function compile(): string;

    public static function getDriverName(): string;
}