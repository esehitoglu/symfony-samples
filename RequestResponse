<?php
// src/Controller/RequestResponse.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RequestResponse
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
     * @Route("/lucky/jsonresponse/{max}", name="app_jsonresponse")
     */
    public function jsonResponse(int $max): Response
    {
        $number = random_int(0, $max);

        $response = new Response();
        $response->setContent(json_encode([
            'data' => 123,
        ]));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/lucky/post/{max}", name="app_post", methods={"POST"})
     */
    public function jsonPostResponse(Request $request) : JsonResponse
    {
        $max = $request->get('max');
        
        $number = random_int(0, $max);

        return new JsonResponse(['data' => $number]);
    }
}
