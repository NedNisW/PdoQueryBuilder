<?php
declare(strict_types=1);

namespace NedNisW\PdoQueryBuilder\Compiler\Factory;

use PDO;
use NedNisW\PdoQueryBuilder\Exceptions\DriverUnsupportedException;
use NedNisW\PdoQueryBuilder\Compiler\CompilerInterface;
use NedNisW\PdoQueryBuilder\Exceptions\InvalidArgumentException;

/**
 * @author NedNisW <nednisw@dwandke.de>
 */
class AbstractCompilerFactory
{
    
    public static function buildCompiler(PDO $pdo): CompilerInterface
    {
        return call_user_func([self::getFactory($pdo), 'build'], $pdo);
    }

    /**
     * @return CompilerFactoryInterface|string
     */
    private static function getFactory(PDO $pdo): string
    {
        switch ($pdo->getAttribute(PDO::ATTR_DRIVER_NAME)) {
            case MysqlCompiler::getDriverName():
                $factory = MysqlCompilerFactory::class;
            default:
                throw new DriverUnsupportedException($pdo->getAttribute(PDO::ATTR_DRIVER_NAME));
        }

        if (!in_array(CompilerFactoryInterface::class, class_implements($factory))) {
            throw new InvalidArgumentException(sprintf('Class %s is not a instance of FactoryInterface!'));
        }

        return $factory;
    }
}