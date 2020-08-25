<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function postRequest()
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', 'http://localhost:8001/api/store', [
            'form_params' => [
                'name' => 'krunal',
            ]

            // 'name' => 'anybody' //server 500 error. It need the form_params tag
        ]);
        $response = $response->getBody()->getContents();
        echo '<pre>';
        print_r($response);
    }

    public function getRequest()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('http://localhost:8001/api/index');
        $response = $request->getBody()->getContents();
        echo '<pre>';
        print_r($response);
        exit;
    }


    public function test()
    {
        return $this->test_post(); // string 'success'
    }

    public function test_post()
    {
        return 'success';
    }
}
