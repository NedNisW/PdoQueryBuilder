<?php
declare(strict_types=1);

namespace NedNisW\PdoQueryBuilder\Exceptions;

/**
 * @author NedNisW <nednisw@dwandke.de>
 */
class DriverUnsupportedException extends QueryBuilderException
{
    public function __construct(string $driver)
    {
        parent::__construct(sprintf('Driver "%s" is not supported.'), $driver);
    }
}