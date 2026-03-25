<?php

namespace App\Http\Controllers;

use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home', ['message' => 'Hello World!']);
    }
}
