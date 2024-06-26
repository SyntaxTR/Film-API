<?php

namespace Mucahittopcu\Filmapi\Services;
class MovieService
{
    protected array $providers = [];

    public function setProviders(array $providers)
    {
        $this->providers = $providers;
        return $this;
    }

    public function get($searchString): array
    {
        $results = [];
        foreach ($this->providers as $provider) {
            $results[] = $provider->search($searchString);
        }
        return $results;

    }
}
