<?php
declare(strict_types=1);

namespace NedNisW\PdoQueryBuilder\Compiler\Factory;

use PDO;
use NedNisW\PdoQueryBuilder\Compiler\CompilerInterface;

/**
 * @author NedNisW <nednisw@dwandke.de>
 */
interface CompilerFactoryInterface
{
    public static function build(PDO $pdo): CompilerInterface;
}