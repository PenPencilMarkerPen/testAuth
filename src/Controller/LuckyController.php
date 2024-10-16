<?php

namespace App\Controller;

use App\Event\ResponseEvent;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky', name: 'lucky')]
    public function lucky(
    ): Response
    {
        return new Response('Hello');
    }

    #[Route('/test', name: 'test')]
    public function test(
    ): Response
    {
        return new Response('Hello');
    }

    #[Route('/custom_event', name: 'custom_event')]
    public function customEvent(
        EventDispatcherInterface $eventDispatcher
    ): Response
    {
        $customEvent = new ResponseEvent();
        $eventDispatcher->addListener('test.response', [$customEvent, 'getResponse']);
        $eventDispatcher->dispatch($customEvent, ResponseEvent::NAME);
        return new Response('customEvent');
    }
}
