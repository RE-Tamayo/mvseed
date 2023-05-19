<?php

use Mvseed\Router\Router;
use App\controllers\SampleController;

$controller = new SampleController();

Router::add('GET', '/', [$controller, 'index']);
