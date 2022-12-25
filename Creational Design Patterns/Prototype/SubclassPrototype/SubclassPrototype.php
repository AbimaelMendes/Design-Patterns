<?php

class SubclassPrototype extends ConcretePrototype
{
    /**
     * Summary of field
     * @var int
     */
    private int $field = 0;

    /**
     * @param SubclassPrototype $subclassPrototype
     */
    public function __construct(SubclassPrototype $subclassPrototype)
    {
        $this->field = $subclassPrototype->field;
    }

    public function clone (): SubclassPrototype
    {
        return new SubclassPrototype($this);
    }
}