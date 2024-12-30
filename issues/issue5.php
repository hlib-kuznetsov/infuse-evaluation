<?php

class Book
{
    public function __construct(
        public readonly string $title,
        public readonly string $year,
    ) {}
}

class Author
{
    public function __construct(
        public readonly string $firstName,
        public readonly string $lastName,
        public readonly string $middleName,
    ) {}
}

abstract class AbstractRepository
{
    abstract public function getModelClass(): string;

    public function get(array $data): object
    {
        $modelClass = $this->getModelClass();

        return new $modelClass(...$data);
    }
}

class BooksRepository extends AbstractRepository
{
    public function getModelClass(): string
    {
        return Book::class;
    }
}

class AuthorsRepository extends AbstractRepository
{
    public function getModelClass(): string
    {
        return Author::class;
    }
}

$book = (new BooksRepository)->get(['title' => 'The Lion, the Witch and the Wardrobe', 'year' => 1950]);
$author = (new AuthorsRepository)->get(['firstName' => 'Clive', 'middleName' => 'Staples', 'lastName' => 'Lewis']);

echo $author->firstName . ' ' . $author->middleName . ' ' . $author->lastName. ':' . PHP_EOL;
echo $book->title . ' (' . $book->year . ')' . PHP_EOL;
