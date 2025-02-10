<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\WsdemandasApi;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'partial' => 'home',
        ]);
    }

    public function create()
    {
        return view('home', [
            'partial' => 'cadastro',
        ]);
    }

    public function store(Request $request)
    {
        $api = new WsdemandasApi();
        dd($api->post($request));

        // return view('home', [
        //     'partial' => 'home',
        // ]);
    }


    public function show(Request $request)
    {
        $api = new WsdemandasApi();
        $response = $api->get($request->tipo, $request->info);

        return view('home', [
            'partial' => 'detalhes',
            'demanda' => $response[0]
        ]);
    }

    public function edit(Request $request)
    {
        $api = new WsdemandasApi();
        dd($api->put($request));

        // return view('home', [
        //     'partial' => 'home',
        // ]);
    }
}
