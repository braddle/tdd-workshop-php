<?php
declare(strict_types=1);

namespace Braddle\Book;

class JsonBookService
{
    private $repository;

    public function __construct(BookRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getBook(string $isbn): string
    {
        try {
            $book = $this->repository->findByISBN($isbn);
        } catch (BookNotFoundException $e) {
            $errorData = [
                'status' => 404,
                'code'   => 1,
                'title'  => 'Book not found',
                'detail' => 'Could not find book with ISBN: ' . $isbn,
            ];

            return json_encode($errorData);
        } catch (BookServiceDownException $e) {
            $errorData = [
                'status' => 500,
                'code'   => 2,
                'title'  => 'Repository unavailable',
                'detail' => 'Service unavailable, try again later',
            ];

            return json_encode($errorData);
        }


        $bookData = [
            'isbn'           => $book->getIsbn(),
            'ean'            => $book->getEan(),
            'title'          => $book->getTitle(),
            'author'         => $book->getAuthor(),
            'price'          => $book->getPrice(),
            'year_published' => $book->getYearPublished(),
        ];

        return json_encode($bookData);
    }
}
