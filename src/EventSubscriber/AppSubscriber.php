<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\KernelEvents;


class AppSubscriber implements EventSubscriberInterface {

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::RESPONSE => [
                'onKernelResponse',
            ]
        ];
    }

    public function onKernelResponse(ResponseEvent $responseEvent)
    {
        $request = $responseEvent->getRequest();
        
        $response = $responseEvent->getResponse();

        if ($request->getRequestUri() === '/test')
        {
            $response->setContent('Здесь новый контент Урааа! Test');
        }

        $responseEvent->setResponse($response);
    }
}