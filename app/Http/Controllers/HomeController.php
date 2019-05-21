<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return View
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
            $payments = Payment::query();

            // 名前でフィルタリング
            $name = $request->get('customer');
            if (!is_null($name)) {
                $payments->where('customer', 'like', "%{$name}%");
            }



            // 今回のリクエストデータをセッションに保存
//            $request->flash();

            return view('test')->with('payments', $payments->get());
        }
}
