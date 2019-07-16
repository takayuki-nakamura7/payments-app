<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


// ログインアクセストークンを返す
// Route::get('/login', function () {
//     $user = App\User::find(1);
//     $token = $user->createToken('token_for_user1')->accessToken;
//     return response()->json(['token' => $token]);
// });

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     $user = App\User::all();
//     return $user;
// });





// ユーザー全件取得
Route::get('/user', function () {
    $user = App\User::all();
    return $user;
})->name('userGet');
// ユーザーを登録
Route::post('/user', function (Request $request) {
    $user = new App\User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();
    return redirect('api/user');
})->name('userPost');
// 特定のユーザを変更
Route::post('/user/{id}', function (Request $request, $id) {
    $user = App\User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();
    return $user;
})->name('userEdit');



// 領収書全件取得
Route::get('/payment', function () {
    $payment = App\Payment::all();
    return $payment;
})->name('paymentGet');
// 特定の領収書を取得
Route::get('/payment/{id}', function ($id) {
    $payment = App\Payment::find($id);
    return $payment;
});
// 領収書を発行
Route::post('/payment', function (Request $request) {
    $payment = new App\Payment;
    $payment->customer = $request['customer'];
    $payment->order_no = substr(str_shuffle('1234567890'), 0, 8);;
    $payment->price = $request['price'];
    $payment->note = $request['note'];
    $payment->method = $request['method'];
    $payment->issue_date = $request['issue_date'];
    $payment->save();
    return $payment;
})->name('paymentPost');
// 特定の領収書を変更
Route::post('/payment/{id}', function (Request $request, $id) {
    $payment = App\Payment::find($id);
    $payment->customer = $request['customer'];
    $payment->order_no = substr(str_shuffle('1234567890'), 0, 8);;
    $payment->price = $request['price'];
    $payment->note = $request['note'];
    $payment->method = $request['method'];
    $payment->issue_date = $request['issue_date'];
    $payment->save();
    return redirect('api/payment/' . $id);
})->name('paymentEdit');
// 特定の領収書を削除
Route::delete('/payment/{id}', function ($id) {
    $payment = App\Payment::find($id);
    $payment->delete();
    return $payment;
});
