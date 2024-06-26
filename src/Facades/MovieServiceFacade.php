<?php

namespace Mucahittopcu\Filmapi\Facades;

use Mucahittopcu\Filmapi\Services\MovieService;
use Mucahittopcu\Filmapi\Providers\AdvancedMovieSearchProvider;
use Mucahittopcu\Filmapi\Providers\MoviesDatabaseProvider;

class MovieServiceFacade
{
    protected $movieService;

    public function __construct(MovieService $movieService)
    {
        $this->movieService = $movieService;
    }
    public function searchMoviesDatabase($searchString)
    {
        return $this->movieService->setProviders([new MoviesDatabaseProvider()])->get($searchString);
    }
    public function searchAdvancedMovieSearch($searchString)
    {
        return $this->movieService->setProviders([new AdvancedMovieSearchProvider()])->get($searchString);
    }
    public function searchConcurrencyMovies($searchString)
    {
        return $this->movieService->setProviders([new AdvancedMovieSearchProvider(),new MoviesDatabaseProvider()])->get($searchString);
    }
}
