<?php

class Book
{
    public function __construct(
        public string $author,
        public string $title,
        public int $year,
    ) {}
}

function getBooks(): array
{
    return [
        new Book('Clive Staples Lewis', 'The Lion, the Witch and the Wardrobe', 1950),
        new Book('John Ronald Reuel Tolkien', 'The Hobbit, or There and Back Again', 1937),
    ];
}

foreach (getBooks() as $book) {
    echo $book->title;
}
