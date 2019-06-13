<?php
namespace App\Http\Controllers;
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
    public function index(Request $request)
    {
        $users = User::query();
        $name = $request->get('name');
        if (!is_null($name)) {
            $users->where('name', 'like', "%{$name}%");
        }
        $request->flash();
        return view('users.index')->with('users', $users->get());
    }

//    public function destroy(User $user, $id)
//    {
//
//        $user::find($id)->delete();
//        return redirect()->back();
//    }

}