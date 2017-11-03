<?php

namespace Braddle\Book;

interface BookRepository
{
    /**
     * @throws BookNotFoundException
     * @throws BookServiceDownException
     */
    function findByISBN(String $isbn) : Book;
}
