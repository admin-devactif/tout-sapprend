<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use Inertia\Controller;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Home', [
            'teamMembers' => $this->getTeamMembers(),
        ]);
    }

    public function orthopedagogie(): Response
    {
        return Inertia::render('Orthopedagogie');
    }

    public function intervention(): Response
    {
        return Inertia::render('Intervention', [
            'teamMembers' => $this->getTeamMembers(),
        ]);
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

    private function getTeamMembers(): array
    {
        return TeamMember::query()
            ->latest()
            ->orderBy(TeamMember::NAME)
            ->get()
            ->map(fn (TeamMember $teamMember): array => [
                'id' => $teamMember->id,
                'name' => $teamMember->name,
                'role' => $teamMember->role,
                'description' => $teamMember->description,
                'image_url' => $teamMember->getPhotoUrl(),
            ])
            ->all();
    }
}
