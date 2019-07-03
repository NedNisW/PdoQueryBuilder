<?php
declare(strict_types=1);

/**
 * @author NedNisW <nednisw@dwandke.de>
 */
namespace NedNisW\PdoQueryBuilder;

class Table
{
    private $tableName;
    private $alias;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
    }

    public function setAlias(string $alias): self
    {
        $this->alias = $alias;
        return $this;
    }

    public function getAlias(): ?string
    {
        return $this->alias;
    }

    public function hasAlias(): bool
    {
        return null === $this->alias;
    }
}