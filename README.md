
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

`curl  "http://127.0.0.1:8000/api/movies/advanced-movie-search?name=Star%20Wars"`
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
`curl 'http://127.0.0.1:8000/api/movies/moviesdatabase?name=man%20in%20black'`
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

# Example #3
`curl 'http://127.0.0.1:8000/api/movies?name=star%20wars'`
```
[
    [
        {
            "Title": "Star Wars",
            "Image": "https://image.tmdb.org/t/p/original/6FfCtAuVAW8XJjZ7eWeLibRLWTw.jpg",
            "Year": "1977"
        },
        {
            "Title": "Star Wars: The Last Jedi",
            "Image": "https://image.tmdb.org/t/p/original/kOVEVeg59E0wsnXmF9nrh6OmWII.jpg",
            "Year": "2017"
        },
        {
            "Title": "Star Wars: The Force Awakens",
            "Image": "https://image.tmdb.org/t/p/original/wqnLdwVXoBjKibFRR5U3y0aDUhs.jpg",
            "Year": "2015"
        },
        {
            "Title": "Solo: A Star Wars Story",
            "Image": "https://image.tmdb.org/t/p/original/4oD6VEccFkorEBTEDXtpLAaz0Rl.jpg",
            "Year": "2018"
        },
        {
            "Title": "Star Wars: The Rise of Skywalker",
            "Image": "https://image.tmdb.org/t/p/original/db32LaOibwEliAmSL2jjDF6oDdj.jpg",
            "Year": "2019"
        },
        {
            "Title": "Star Wars: Episode I - The Phantom Menace",
            "Image": "https://image.tmdb.org/t/p/original/6wkfovpn7Eq8dYNKaG5PY3q2oq6.jpg",
            "Year": "1999"
        },
        {
            "Title": "Rogue One: A Star Wars Story",
            "Image": "https://image.tmdb.org/t/p/original/i0yw1mFbB7sNGHCs7EXZPzFkdA1.jpg",
            "Year": "2016"
        },
        {
            "Title": "LEGO Star Wars Terrifying Tales",
            "Image": "https://image.tmdb.org/t/p/original/fYiaBZDjyXjvlY6EDZMAxIhBO1I.jpg",
            "Year": "2021"
        },
        {
            "Title": "Star Wars: Episode III - Revenge of the Sith",
            "Image": "https://image.tmdb.org/t/p/original/xfSAoBEm9MNBjmlNcDYLvLSMlnq.jpg",
            "Year": "2005"
        },
        {
            "Title": "Doraemon: Nobita's Little Star Wars",
            "Image": "https://image.tmdb.org/t/p/original/n4IPqrfXEEtMC8hzV5PaCElkdNP.jpg",
            "Year": "1985"
        },
        {
            "Title": "Doraemon the Movie: Nobita's Little Star Wars 2021",
            "Image": "https://image.tmdb.org/t/p/original/48gKZioIDeUOI0afbYv3kh9u9RQ.jpg",
            "Year": "2022"
        },
        {
            "Title": "Star Wars: Episode II - Attack of the Clones",
            "Image": "https://image.tmdb.org/t/p/original/oZNPzxqM2s5DyVWab09NTQScDQt.jpg",
            "Year": "2002"
        },
        {
            "Title": "Phineas and Ferb: Star Wars",
            "Image": "https://image.tmdb.org/t/p/original/2XGlp5x232CeZM0PVjMMYQcXViA.jpg",
            "Year": "2014"
        },
        {
            "Title": "Star Wars: Heroes & Villains",
            "Image": "https://image.tmdb.org/t/p/original/9ReI6qt3bvsIxUZkDpOzaCpiLwx.jpg",
            "Year": "2005"
        },
        {
            "Title": "Star Wars: The Clone Wars",
            "Image": "https://image.tmdb.org/t/p/original/iJQfixW818LUdSXlCDL3JZm0S0g.jpg",
            "Year": "2008"
        },
        {
            "Title": "LEGO Star Wars Holiday Special",
            "Image": "https://image.tmdb.org/t/p/original/zyzJSI7UZZzz5Toj10rYGF5689z.jpg",
            "Year": "2020"
        },
        {
            "Title": "Creatures from Star Wars",
            "Image": "https://image.tmdb.org/t/p/originalnull",
            "Year": "2006"
        },
        {
            "Title": "Star Wars Kid: The Rise of the Digital Shadows",
            "Image": "https://image.tmdb.org/t/p/original/zspMlOFJ76g5KyfmucgnvnkJnuN.jpg",
            "Year": "2022"
        },
        {
            "Title": "The Star Wars Holiday Special",
            "Image": "https://image.tmdb.org/t/p/original/2X17DnEtlI6ULf95wXC6sA4GrlL.jpg",
            "Year": "1978"
        },
        {
            "Title": "LEGO Star Wars Summer Vacation",
            "Image": "https://image.tmdb.org/t/p/original/2SatEFCs04oFRqkZuY1fODYXeFI.jpg",
            "Year": "2022"
        }
    ],
    [
        {
            "Title": "Star Wars: Ewoks",
            "Image": "https://m.media-amazon.com/images/M/MV5BMmNkNDkxOTMtYmEwMy00YTk5LTg5NTctNTIxNjY0ZTc5YjY3XkEyXkFqcGdeQXVyMjg5NDMwMQ@@._V1_.jpg",
            "Year": 1985
        },
        {
            "Title": "Star Wars: TIE Fighter",
            "Image": "https://m.media-amazon.com/images/M/MV5BM2EyNWMyN2ItMTgyMy00NGJhLTg4NWYtYzU4OGY2OGI1NzgxXkEyXkFqcGdeQXVyNjExODE1MDc@._V1_.jpg",
            "Year": 1994
        },
        {
            "Title": "Star Wars: Shadows of the Empire",
            "Image": "https://m.media-amazon.com/images/M/MV5BZjZhNWIxMjktYmQxYi00OTI0LTkwNTMtYTUxZDMwMzEwZWFhXkEyXkFqcGdeQXVyMTk5NDI0MA@@._V1_.jpg",
            "Year": 1996
        },
        {
            "Title": "Star Wars: Jedi Knight - Dark Forces II",
            "Image": "https://m.media-amazon.com/images/M/MV5BODg4NDNjNzctMzAzOS00Mjc0LTk2MzEtNWE3OWM1ZDVkNWNmL2ltYWdlL2ltYWdlXkEyXkFqcGdeQXVyNjg3MDM4Mzc@._V1_.jpg",
            "Year": 1997
        },
        {
            "Title": "Star Wars: Dark Forces",
            "Image": "https://m.media-amazon.com/images/M/MV5BZDk4NjE3OTktMDIwOS00OWEwLTk5YTctNzA3MGU2NDNjMzVmXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg",
            "Year": 1995
        },
        {
            "Title": "Star Wars: X-Wing",
            "Image": "https://m.media-amazon.com/images/M/MV5BMTFkZDhkYmEtNzQyNi00N2Y4LWE4NWItNmQ1MzAzMWY3MzU2XkEyXkFqcGdeQXVyNjExODE1MDc@._V1_.jpg",
            "Year": 1993
        },
        {
            "Title": "Star Wars: Jedi Knight - Mysteries of the Sith",
            "Image": "https://m.media-amazon.com/images/M/MV5BOWRlMzk4NjYtNWQ5Ni00YWI0LTkyMzEtNmZhMzU2NzZlMzFlXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg",
            "Year": 1998
        },
        {
            "Title": "Star Wars: Rebel Assault II - the Hidden Empire",
            "Image": "https://m.media-amazon.com/images/M/MV5BNDRiNTkyMTktNjc0Yi00NDc3LWE4OTMtNDUwODU4NTY5Y2JmXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg",
            "Year": 1995
        },
        {
            "Title": "Super Star Wars: Return of the Jedi",
            "Image": "https://m.media-amazon.com/images/M/MV5BYzQ2MjEzNzctYTczMi00MjY2LTk5NTQtNWQ4Zjg3ZWRhNmQ3XkEyXkFqcGdeQXVyMjY3MjUzNDk@._V1_.jpg",
            "Year": 1994
        },
        {
            "Title": "Star Wars: Masters of Teräs Käsi",
            "Image": "https://m.media-amazon.com/images/M/MV5BOTZiYWRkOTktZGI0NS00ZjE4LWI0NzctZjMyZWU0ZDlkN2VhXkEyXkFqcGdeQXVyMTA1OTEwNjE@._V1_.jpg",
            "Year": 1997
        }
    ]
]
```




