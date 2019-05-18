<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return View
     */

    public function write1(Request $request)
    {
        $data = collect(['a', 'b', 'c']);

        $result = $data->map(function ($item) {
            return 'prefix_' . $item;
        });

        dd($result->toJson());

        return view('test2', $request->all());
    }

    public function __construct()
    {
        $this->middleware('auth');
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
}
