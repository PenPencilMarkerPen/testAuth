<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class ResponseListener {

    public function __construct()
    {}

    public function onKernelResponse(ResponseEvent $responseEvent)
    {
        $request = $responseEvent->getRequest();

        $response = $responseEvent->getResponse();

        if ($request->getRequestUri() === '/lucky')
        {
            $response->setContent('Здесь новый контент Урааа! Lucky');
        }

        $responseEvent->setResponse($response);
    }
}