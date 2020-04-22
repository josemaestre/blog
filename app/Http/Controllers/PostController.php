<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postses = Post::orderby('created_at','desc')->get();

    // $cursos = Cache::tags('cursos')->rememberForever('cursos.all', function () {
        return view('post.index',compact('postses'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        // dd(Auth::Roles());
        if (Auth::user()->hasRole('user')) {
            //is a guest so redirect
            // dd('ssss');
            return redirect('post');
           }
        $postses = Post::orderby('created_at','desc')->get();

    // $cursos = Cache::tags('cursos')->rememberForever('cursos.all', function () {
        return view('post.list',compact('postses'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $rules = [
            'post' => 'required|min:10',
            'content' => 'required'
          ];

          $validation = Validator::make($data, $rules);

          if( $validation->fails() )
          {
            return redirect()->back()
              ->withErrors( $validation->errors() )
              ->withInput();
          }
          $Post = Post::create([
            'post'=> request('post'),
            'content'=> request('content'),
            'user_id' =>  Auth::id()

            ]);

        return $request;
        //
    }


    public function posts(Request $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $sqlComment =' select c.*, u.name from comments c
          join users u on  c.user_id = u.id
          where c.post_id = ' . $id . ' order by created_at desc;' ;

        $sqlPost = 'select p.*,p.post as tittle,u.name from posts p
            join users u on p.user_id = u.id
            where p.id = '  . $id;

         $comments =DB::connection('sqlite')->select(DB::raw($sqlComment));
         $post =DB::connection('sqlite')->select(DB::raw($sqlPost));
        return view('post.show',compact('post','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit',['post'=> $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'post' => 'required|min: 10',
            'content' => 'required'
          ];

          $validation = Validator::make($data, $rules);

          if( $validation->fails() )
          {
            return redirect()->back()
              ->withErrors( $validation->errors() )
              ->withInput();
          }
          $post->update($request->all());
          return redirect()->route('list')->with('success','Post updated successfully...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('list')
                         ->with('success','Post deleted successfully...');
    }
}
