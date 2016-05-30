<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use \App\Page;
use \App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Page::where('release_date', '>', date('U'))
            ->orderBy('id', 'desc')
            ->Paginate(15);

        return view('index')
            ->with('index', $index);
    }

    public function post($url)
    {
        $post = Page::where('url', $url)->firstOrFail();

        return view('post')
            ->with('post', $post);
    }

    public function by($name)
    {
        $user = User::whereName($name)->firstOrFail();
        $index = $user->pages()
            ->where('release_date', '>', date('U'))
            ->orderBy('id', 'desc')
            ->Paginate(15);

        return view('index')
            ->with('index', $index);
    }

    public function mockup()
    {
        return view('mockup');
    }
}
