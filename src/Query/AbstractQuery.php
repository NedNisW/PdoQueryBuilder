<?php
declare(strict_types=1);

namespace NedNisW\PdoQueryBuilder\Query;

/**
 * Abstract Query
 * 
 * @author NedNisW <nednisw@dwandke.de>
 */
abstract class AbstractQuery implements QueryInterface
{
    public function setCompiler(CompilerInterface $compiler): QueryInterface
    {
        $this->compiler = $compiler;
        return self;
    }

    public function setTable(Table $table): QueryInterface
    {
        $this->table = $table;
        return self;
    }

    public function getTable(): Table
    {
        return $this->table;
    }

}