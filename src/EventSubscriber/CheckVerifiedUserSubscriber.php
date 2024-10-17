<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\CheckPassportEvent;
use Symfony\Component\Security\Core\Exception\AuthenticationException;


class CheckVerifiedUserSubscriber implements EventSubscriberInterface {
    
    public static function getSubscribedEvents()
    {
        return [
            CheckPassportEvent::class => ['onCheckPassport', -10],
        ];
    }
    
    public function onCheckPassport(CheckPassportEvent $event){
        $user = $event->getPassport()->getUser();
        var_dump($user);
        if (!$user)
            throw new AuthenticationException();
    }
}