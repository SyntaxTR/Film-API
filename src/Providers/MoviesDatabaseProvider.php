<?php

namespace Mucahittopcu\Filmapi\Providers;

use GuzzleHttp\Client;

class MoviesDatabaseProvider{
    public function search($searchString): array
    {

        try{
            $client =  new Client([
                'verify' => false, // Güvenlik sertifikası doğrulamasını devre dışı bırak
            ]);
            $response = $client->request('GET', "https://moviesdatabase.p.rapidapi.com/titles/search/keyword/{$searchString}", [
                'headers' => [
                    'X-RapidAPI-Key' => 'aaa25bfc35msh3bdd22eacf66c3bp12e509jsnd1829d27ad15', // RapidAPI Key
                    "x-rapidapi-host: moviesdatabase.p.rapidapi.com",
                    'Accept'    => 'application/json',
                ]
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            $responseArray = [];
            foreach ($data["results"] as $dataArray){
                $responseArray[] = array(
                    "Title" => $dataArray["titleText"]["text"] ?? null,
                    "Image" => $dataArray["primaryImage"]["url"] ?? null,
                    "Year" => $dataArray["releaseYear"]["year"] ?? null
                );
            }
            return $responseArray;

        }catch (RequestException $e) {

            $statusCode = $e->getResponse()->getStatusCode();
            $errorBody = json_decode($e->getResponse()->getBody()->getContents(), true);

            return [
                'status' => 'error',
                'statusCode' => $statusCode,
                'error' => $errorBody
            ];
        }
    }
}