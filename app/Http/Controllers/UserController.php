<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Shop;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);

        return view('users.index')->with('users', $users);
    }


    public function filter(Request $request)
    {
        $users = User::query();
        $name = $request->get('name');
        if (!is_null($name)) {
            $users->where('name', 'like', "%{$name}%");
        }
        $request->flash();
        return view('users.filter')->with('users', $users->get());
    }

    public function show($id, $name)
    {
        $payments = Payment::query();
        $shops = Shop::query();
        $user_id = $id;
        $user_name = $name;
        if (!is_null($user_id)) {
            $payments->where('user_id', $user_id);
        }

        return view('users.paymentsList')->with(['payments' => $payments->get(), 'name' => $user_name, 'shops' => $shops->get()]);
    }

}