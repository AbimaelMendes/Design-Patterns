<?php

Abstract class ConcretePrototype implements PrototypeInterface
{
    /**
     * Summary of field
     * @var int
     */
    private int $field = 0;

    /**
     * Summary of __construct
     * @param ConcretePrototype $concretePrototype
     */
    public function __construct(ConcretePrototype $concretePrototype)
    {
        $this->field = $concretePrototype->field;
    }

    /**
     * Summary of clone
     * @return ConcretePrototype
     */
    abstract function clone (): ConcretePrototype;
}