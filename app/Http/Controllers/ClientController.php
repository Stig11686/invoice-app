<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    function index(){
        $clients = Client::all();


        return view('clients', [
            'clients' => $clients
        ]);
    }
}
