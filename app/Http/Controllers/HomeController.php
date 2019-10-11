<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        if (!$request->user()->hasAnyRole(['customer', 'admin'])) {
            return abort(401, "This action is not allowed.");
        }
        $user_id = $request->user()->id;
        $posts = Post::all();
        return view('home', [
            "user_id" => $user_id,
            "posts" => $posts
        ]);
    }

    public function report(Request $request)
    {
        if (!$request->user()->hasRole(['admin'])) {
            return abort(401, "This action is not allowed");
        }

        return view('report');
    }
}
