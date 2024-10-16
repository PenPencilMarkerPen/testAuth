<?php

namespace App\Event;

use Symfony\Contracts\EventDispatcher\Event;

class ResponseEvent {


    public const NAME = 'test.response';

    public function getResponse()
    {
        var_dump('ResponseEventGet');
    }
}