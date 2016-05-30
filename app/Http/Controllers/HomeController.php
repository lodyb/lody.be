<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use \App\Page;

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
        $index = Page::paginate(15);

        return view('index')
            ->with('index', $index);
    }

    public function post($url)
    {
        $post = Page::where('url', $url)->firstOrFail();

        return view('post')
            ->with('post', $post);
    }

    public function mockup()
    {
        return view('mockup');
    }
}
