<?php
namespace MucahitTopcu\Filmapi\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mucahittopcu\Filmapi\Facades\MovieServiceFacade;
class MoviesDatabaseController extends Controller
{
    protected $movieServiceFacade;

    public function __construct(MovieServiceFacade $movieServiceFacade)
    {
        $this->movieServiceFacade = $movieServiceFacade;
    }

    public function search(Request $request)
    {
        $searchString = $request->input('name');
        $result = $this->movieServiceFacade->searchMoviesDatabase($searchString);
        return response()->json($result);
    }
}
