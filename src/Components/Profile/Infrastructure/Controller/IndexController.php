<?php

namespace App\Components\Profile\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    /**
     * @return Response
     */
    public function indexAction() : Response {
        return $this->render('index.html.twig');
    }
}