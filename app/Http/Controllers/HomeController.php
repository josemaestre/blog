<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Illuminate\Support\Facades\Cache;
use App\Repositories\Cursos;
use Barryvdh\Debugbar\Facade as Debugbar;

use App\Repositories\CacheCursos;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CacheCursos $curso)
    {
       // $this->middleware('auth');
       $this->cursos = $curso;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function minor()
    {
        //return 'hola';
         return view('test');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function landing()

    {

        $cursos     =   $this->cursos->getLandingAll();
        //$misCursos  =   $this->cursos->getLandingMisCursos();

        return view('landing',compact('cursos'));
    }


     /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findCourses(Request $request)   

    {
        $findWhat = $request->get('top_search');
        // \Log::info($result);
        // \Log::info('buscando....');
        // \Log::info($findWhat);
        // \Log::info('buscando....');
        // //Debugbar::error('Error! ' +  $findWhat);
        $key = 'Find_cursos_' . $findWhat;

        $result = Cache::tags($key)->rememberForever($key, function () use ($findWhat) {
        return Curso::query()
                    ->where('nombre', 'LIKE', "%{$findWhat}%") 
                    ->get();
        });

        return view('partials.grid',['cursos' => $result,'etiqueta' => 'Mi busqueda (' . $findWhat . ')']);

    }


     /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findMostPopularCourses(Request $request)   

    {
        $key = 'MostPopular' ;

        $result = Cache::tags($key)->rememberForever($key, function ()  {
        return Curso::query()
                    //->where('nombre', 'LIKE', "%{$findWhat}%") 
                    ->get();
        });
        //  \Log::info($result);

        // 'partials.grid',['cursos' => $misCursos,'etiqueta' => 'Mi busqueda']
        return view('partials.grid',['cursos' => $result,'etiqueta' => 'Los mas populares']);

    }




}
