<?php

namespace Previewtechs\App\Controller;


use Slim\Http\Request;
use Slim\Http\Response;

class DefaultController extends AppController
{
    public function home(Request $request, Response $response, $arg = [])
    {
        return $this->getView()->render($response, 'dashboard.twig');
    }
}