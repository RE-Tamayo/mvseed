<?php
namespace App\controllers;

use Mvseed\Application\BaseController;

class SampleController extends BaseController
{

    public function index()
    {
        view('welcome');
    }
}
