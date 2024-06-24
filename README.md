
# Installation

We are adding the following codes to our composer.json file.

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/SyntaxTR/Film-API"
        }
],
"require": {
      "mucahittopcu/filmapi": "dev-main"
}

```

We are running the composer update command in the project directory.

`composer -update`

We are opening the config/app.php file of our project and adding the following code.

```
  'providers' => [
    Mucahittopcu\Filmapi\Providers\MyPackageServiceProvider::class
  ]

```
Finaly, we are running the HTTP server.

`php artisan serve`


# Example #1

`curl  "http://127.0.0.1:8000/api/advanced-movie-search?name=Star%20Wars"`
```
[
    {
        "Title": "Star Wars",
        "Image": "https://image.tmdb.org/t/p/original/6FfCtAuVAW8XJjZ7eWeLibRLWTw.jpg",
        "Year": "1977"
    },
    {
        "Title": "Star Wars: The Force Awakens",
        "Image": "https://image.tmdb.org/t/p/original/wqnLdwVXoBjKibFRR5U3y0aDUhs.jpg",
        "Year": "2015"
    },
    {
        "Title": "Star Wars: The Last Jedi",
        "Image": "https://image.tmdb.org/t/p/original/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg",
        "Year": "2017"
    },
    {
        "Title": "Star Wars: The Rise of Skywalker",
        "Image": "https://image.tmdb.org/t/p/original/db32LaOibwEliAmSL2jjDF6oDdj.jpg",
        "Year": "2019"
    }
]
```

# Example #2
`curl 'http://127.0.0.1:8000/api/moviesdatabase?name=man%20in%20black'`
```
[
    {
        "Title": "The Man in the Black Suit",
        "Image": "https://m.media-amazon.com/images/M/MV5BOTc0ZGM3YzYtMWI4MS00ZGYwLThkYWUtZWQyMWE0NWZiMGQ2XkEyXkFqcGdeQXVyNDcwNDI2MTk@._V1_.jpg",
        "Year": 2004
    },
    {
        "Title": "All About Yves",
        "Image": "https://m.media-amazon.com/images/M/MV5BNTI5NzA2ODktNmEwYi00NWI1LWFjMzEtNDk4MWQxMzYwMmE5XkEyXkFqcGdeQXVyNTgzMTg5Ng@@._V1_.jpg",
        "Year": 2001
    },
    {
        "Title": "Nightmare at the Braine Hotel",
        "Image": "https://m.media-amazon.com/images/M/MV5BZDRkMzRhOGQtMDRiMS00MDRkLTg5MDAtYjBmYjg0M2UzODIyXkEyXkFqcGdeQXVyNTgzMTg5Ng@@._V1_.jpg",
        "Year": 1987
    },
    {
        "Title": "Lampreys of London",
        "Image": "https://m.media-amazon.com/images/M/MV5BNzM3MTExY2EtNmZmNy00MDQ5LWJmZDMtZTVkMmNhNTI5MTZlXkEyXkFqcGdeQXVyNDgzMjY3MjI@._V1_.jpg",
        "Year": null
    }
]
```




