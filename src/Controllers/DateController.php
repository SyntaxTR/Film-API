<?php
namespace MucahitTopcu\Filmapi\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;

class DateController extends Controller
{
    public static function parseYear($dateString)
    {
        try {
            $dateTime = new DateTime($dateString);
            return $dateTime->format('Y');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Geçersiz tarih formatı'], 400);
        }
    }
}
?>