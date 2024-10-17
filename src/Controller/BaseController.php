<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class BaseController extends AbstractController {

    public function getUserInfo()
    {
        return $this->getUser()->getUserIdentifier();
    }

}