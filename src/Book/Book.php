<?php
declare(strict_types=1);

namespace Braddle\Book;

class Book
{

    private $isbn;
    private $ean;
    private $title;
    private $author;
    private $price;
    private $yearPublished;

    public function __construct(string $isbn, string $ean, string $title, string $author, float $price, int $yearPublished)
    {
        $this->isbn = $isbn;
        $this->ean = $ean;
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
        $this->yearPublished = $yearPublished;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getEan(): string
    {
        return $this->ean;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getYearPublished(): int
    {
        return $this->yearPublished;
    }


}
