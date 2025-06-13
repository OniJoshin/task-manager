<?php

namespace App\Http\Controllers;

use App\Models\Client;


class ClientController extends Controller
{

    public function index()
    {
        return view('clients.index', [
            'clients' => Client::all()
        ]);
    }

    public function show(Client $client)
    {
        return view('project-groups.index', [
            'client' => $client,
            'projectGroups' => $client->projectGroups
        ]);
    }
}
