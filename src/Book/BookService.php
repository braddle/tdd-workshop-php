<?php

namespace Braddle\Book;

interface BookService
{
    function getBook(string $isbn): string;
}
