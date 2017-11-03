<?php
declare(strict_types=1);

namespace Braddle\Book;

use Mockery as m;
use PHPUnit\Framework\TestCase;

class BookServiceTest extends TestCase
{

    public function testBookServiceReturnsValidJSONWhenBookFound()
    {
        $drNoJson = '{"isbn":"0099576929","ean":"1357924680","title":"Dr No","author":"Ian Fleming","price":3.99,"year_published":1993}';
        $casionRoyaleJson = '{"isbn":"0230037496","ean":"2468013579","title":"Casino Royale","author":"Ian Fleming","price":4.99,"year_published":1990}';

        $drNo = new Book("0099576929", "1357924680", "Dr No", "Ian Fleming", 3.99, 1993);
        $casionRoyale = new Book("0230037496", "2468013579", "Casino Royale", "Ian Fleming", 4.99, 1990);

        $jsonBookService = new JsonBookService($mockedBookRepository);

        $this->assertEquals($drNoJson, $jsonBookService->getBook("0099576929"));
        $this->assertEquals($casionRoyaleJson, $jsonBookService->getBook("0230037496"));
    }

    public function testBookServiceReutrnsValidJsonWhenBookNotFound()
    {
        $errorMoonrakerJson = '{"status":404,"code":1,"title":"Book not found","detail":"Could not find book with ISBN: 0099576872"}';
        $errorGoldfingerJson = '{"status":404,"code":1,"title":"Book not found","detail":"Could not find book with ISBN: 1784871095"}';

        $jsonBookService = new JsonBookService($mockedBookRepository);

        $this->assertEquals($errorMoonrakerJson, $jsonBookService->getBook("0099576872"));
        $this->assertEquals($errorGoldfingerJson, $jsonBookService->getBook("1784871095"));
    }

    public function testBookServiceReturnValidJsonWhenBookRepositoryUnavaiable()
    {
        $errorRepositoryJson = '{"status":500,"code":2,"title":"Repository unavailable","detail":"Service unavailable, try again later"}';

        $jsonBookService = new JsonBookService($mockedBookRepository);

        $this->assertEquals($errorRepositoryJson, $jsonBookService->getBook("009957702X"));
    }
}
