<?php

namespace Mucahittopcu\Filmapi\Providers;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use MucahitTopcu\Filmapi\Controllers\DateController;

class AdvancedMovieSearchProvider{
    public function search($searchString): array
    {

        try{
            $client =  new Client([
                'verify' => false, // Güvenlik sertifikası doğrulamasını devre dışı bırak
            ]);
            $response = $client->request('GET', "https://advanced-movie-search.p.rapidapi.com/search/movie?query={$searchString}", [
                'headers' => [
                    'x-rapidapi-host' => 'advanced-movie-search.p.rapidapi.com',
                    'x-rapidapi-key' => 'aaa25bfc35msh3bdd22eacf66c3bp12e509jsnd1829d27ad15',
                    'Accept'    => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);

            $responseArray = [];
            foreach ($data["results"] as $dataArray){
                $responseArray[] = array(
                    "Title" => $dataArray["title"] ?? null,
                    "Image" => $dataArray["poster_path"] ?? null,
                    "Year" => DateController::parseYear($dataArray["release_date"])
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