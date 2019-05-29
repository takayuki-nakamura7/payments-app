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


            $order_no = $request->get('order_no');
            if (!is_null($order_no)) {
                $payments->where('order_no', 'like', "{$order_no}%");
            }

            $price = $request->get('price');
            $price_operator = $request->get('price_operator');
            if (!is_null($price)) {
                $payments->where('price', $price_operator, $price);
            }

            $self_issued_payments = $request->get('self_issued_payments');
            if (intval($self_issued_payments) === 1) {
                $payments->where('user_id', \Auth::user()->id);
                dump(\Auth::user()->id);
            }


            // 今回のリクエストデータをセッションに保存
            $request->flash();

            return view('test')->with('payments', $payments->get());
        }

        public function show($id)
        {
            $payment = Payment::find($id);
            return view('bill',compact('payment'));

        }

        public function destroy($id)
        {
            $payment = Payment::find($id);
            $order_no = $payment->order_no;
            $payment->delete();

            \Session::flash('test', $order_no . 'を削除しましたよ！！');

            return redirect('/test');
        }

        public function create(Request $request) {

            $customer = $request->input('customer');
            $data = array('customer'=>$customer);
            DB::table('payments')->insert($data);

            echo 'success';
        }
}
