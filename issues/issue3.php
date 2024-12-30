<?php

abstract class AbstractData
{
    final public function __construct(
        private readonly mixed $value,
    ) {}

    public function getValue(): mixed
    {
        return $this->value;
    }
}

class Foo extends AbstractData
{
}

function instantiate(string $class, mixed $value): object
{
    return new $class($value, $value);
}

$object = instantiate(Foo::class, 5);
/** @psalm-trace $value */
$value = $object->getValue();
echo get_debug_type($value);

$object = instantiate(Foo::class, 'test');
/** @psalm-trace $value */
$value = $object->getValue();
echo get_debug_type($value);
