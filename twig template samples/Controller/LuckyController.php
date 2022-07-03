<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     */
    public function number(int $max): Response
    {
        $number = random_int(0, $max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/books/", name="app_get_books")
     */
    public function getBooks(): Response
    {
        $books = ['kitab1','kitab2','kitap3'];
        print_r( $books );

        return new Response(
   		
        );
    }
 
    /**
     * @Route("/book/{id}", name="app_get_book")
     */
    public function getBook(int $id): Response
    {
	    $books = ['kitab1','kitab2','kitap3'];
        $r = "not found";

        if ( !empty ($books[$id]) ){
        	$r = $books[$id];
        }
        return new Response(
   			$r
        );
    }
}