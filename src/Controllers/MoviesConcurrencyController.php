<?php
namespace MucahitTopcu\Filmapi\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mucahittopcu\Filmapi\Facades\MovieServiceFacade;

class MoviesConcurrencyController extends Controller
{
    protected $movieServiceFacade;
    public function __construct(MovieServiceFacade  $movieServiceFacade)
    {
        $this->movieServiceFacade = $movieServiceFacade;
    }

    public function processConcurrentRequests(Request $request){

        $searchString = $request->input('name');
        $result = $this->movieServiceFacade->searchConcurrencyMovies($searchString);
        return response()->json($result);
    }
}
?>