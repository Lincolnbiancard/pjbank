<?php

namespace App\Services;

class ApiPjbank
{
    public function __construct()
    {
        $this->url = 'https://api.pjbank.com.br/recebimentos/d3418668b85cea70aa28965eafaf927cd34d004c/transacoes';
    }

    public function generate($headers, $body, $method)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($body),
            CURLOPT_HTTPHEADER => $headers,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        return $err ? $err : $response;
    }
}