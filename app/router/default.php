<?php

use Previewtechs\App\Controller\DefaultController;

$app->get('/', DefaultController::class . ':home');