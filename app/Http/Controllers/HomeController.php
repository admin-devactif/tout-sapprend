<?php

namespace App\Http\Controllers;

use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home');
    }

    public function orthopedagogie(): Response
    {
        return Inertia::render('Orthopedagogie');
    }

    public function intervention(): Response
    {
        return Inertia::render('Intervention');
    }

    public function stimulation(): Response
    {
        return Inertia::render('Stimulation');
    }

    public function cpe(): Response
    {
        return Inertia::render('Cpe');
    }

    public function contact(): Response
    {
        return Inertia::render('Contact');
    }

    public function appointment(): Response
    {
        return Inertia::render('Appointment');
    }
}
