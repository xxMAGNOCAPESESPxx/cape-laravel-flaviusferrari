<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WsdemandasApi
{
    private $url = 'https://k1qrd5-tst-protheus.totvscloud.com.br:33389/api/WSDEMANDAS';
    private $user = 'candidato';
    private $password = 'cape123';

    public function get($tipo, $info)
    {
        $this->url .= '?TIPO=' . $tipo . '&INFO=' . $info;

        $response = Http::withBasicAuth($this->user, $this->password)->get($this->url);

        if ($response->failed()) {
            return $response->json();
        }

        return $response->object();
    }

    public function post(Request $request)
    {
        $data = $this->setData($request, 'POST');

        $response = Http::withBasicAuth($this->user, $this->password)
                        ->withBody(json_encode($data), 'application/json')
                        ->post($this->url);

        return $response->json();
    }

    public function put(Request $request)
    {
        $data = $this->setData($request, 'PUT');

        $response = Http::withBasicAuth($this->user, $this->password)
                        ->withBody(json_encode($data), 'application/json')
                        ->post($this->url);

        return $response->json();
    }

    public function delete($codigo)
    {
        $data = ['codigo' => $codigo];

        $response = Http::withBasicAuth($this->user, $this->password)
                        ->withBody(json_encode($data), 'application/json')
                        ->post($this->url);

        return $response->object();
    }

    private function setData($request, $tipo)
    {
        $data = [
            'descricao' => $request->descricao,
            'descriweb' => $request->descricao_web,
            'tipo' => $request->tipo,
            'grupo' => $request->grupo,
            'area' => $request->area,
            'ativo' => $request->ativo,
            'atendimento' => $request->atendimento,
            'prazo' =>  $request->prazo,
        ];

        if ($tipo == 'PUT') {
            $data['codigo'] = $request->codigo;
        }

        return $data;
    }

}