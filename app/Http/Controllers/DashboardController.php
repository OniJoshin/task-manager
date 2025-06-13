<?php

namespace App\Http\Controllers;

use App\Models\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::with('projectGroups.tasks')->get();

        return view('dashboard.index', compact('clients'));
    }
}
