<?php

class MaxValue
{
    public function __construct(
        public readonly int $maxValue,
    ) {}
}

class MinValue
{
    public function __construct(
        public readonly int $minValue,
    ) {}
}

function getResult(): array
{
    return [
        MaxValue::class => new MaxValue(5),
        MinValue::class => new MinValue(1),
    ];
}

$result = getResult();
$minValue = $result[MinValue::class];
$maxValue = $result[MaxValue::class];

echo sprintf('%d / %d', $minValue->minValue, $maxValue->maxValue);
