<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ProductService{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function getAllProducts(){
        try {
            $response = $this->client->request('GET', 'https://fakestoreapi.com/products', [
                'headers' => [
                    'accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getProductDetail($id){
        try {
            $response = $this->client->request('GET', 'https://fakestoreapi.com/products/' . $id, [
                'headers' => [
                    'accept' => 'application/json',
                ],
            ]);
            $data = json_decode($response->getBody()->getContents(), true);
            return $data;
        } catch (RequestException $e) {
            return ['error' => $e->getMessage()];
        }
    }
}
?>