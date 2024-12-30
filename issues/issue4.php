<?php

abstract class AbstractModel
{
    final public function __construct($properties)
    {
        foreach ($properties as $property => $value) {
            $this->{$property} = $value;
        }
    }
}

final class Book extends AbstractModel
{
    public string $title;
    public int $year;
}

// Should pass
$book = new Book([
    'title' => 'The Lion, the Witch and the Wardrobe',
    'year' => 1950,
]);
echo $book->title;

// Should fail because a value for one of the properties is not provided
$book = new Book([
    'year' => 1950,
]);
echo $book->title;

// Should fail because a value of the wrong type is provided for one of the properties
$book = new Book([
    'title' => 'The Lion, the Witch and the Wardrobe',
    'year' => '1950',
]);
echo $book->title;

// Optional bonus task - should fail because an extra property is provided
$book = new Book([
    'title' => 'The Lion, the Witch and the Wardrobe',
    'year' => 1950,
    'notExistingProperty' => new \stdClass(),
]);
echo $book->title;
