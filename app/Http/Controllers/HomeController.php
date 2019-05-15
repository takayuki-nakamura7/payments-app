<?php
namespace App\Http\Controllers;

use App\Payment;
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

    }
    /**
     * 特定のIDの支払い情報を表示する
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {

    }
    /**
     * 特定のIDの支払い情報を削除する
     *
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
    }
}