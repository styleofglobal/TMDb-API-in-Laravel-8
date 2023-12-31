<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

use App\Services\MovieAPIService;

use App\Models\Movie;
use App\Models\Production;
use App\Models\Genre;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $movieAPIService;
    protected $cache_min;

    public function __construct(MovieAPIService $movieAPIService)
    {
        $this->movieAPIService = $movieAPIService;
        $this->cache_min = env('CACHE_MIN');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $APP_TMDB_SYNC = env('APP_TMDB_SYNC');
        if ($APP_TMDB_SYNC == 0) {

            $movie_added = $this->movieAPIService->syncMovies();

            if (!empty($movie_added)) {
                $this->setEnv('APP_TMDB_SYNC', '1');

                return redirect()->route('welcome')->with('success', count($movie_added) . ' New Movies added successfully.');
            } else {

                return redirect()->route('welcome')->with('danger', 'Movies data not synced successfully.');
            }
        }

        return view('home');
    }

    public function show(Request $request, $id)
    {
        $movie_details = $this->movieAPIService->getMovie($id);
        return view('movies.movie', $movie_details);
    }


    public function edit(Request $request, $id)
    {
        
        $movie_edit_details = $this->movieAPIService->editMovie($request,$id);

        return view('movies.edit',$movie_edit_details);
    }

    function setEnv($name, $value)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $name . '=' . env($name),
                $name . '=' . $value,
                file_get_contents($path)
            ));
        }
    }
}
