<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\Storage;




class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $shops = Shop::query();

        $name = $request->get('name');
        if (!is_null($name)) {
            $shops->where('name', 'like', "%{$name}%");
        }

        $zipCode = $request->get('zip_code');
        if (!is_null($zipCode)) {
            $shops->where('zip_code', $zipCode);
        }


        return view('shops.index')->with('shops', $shops->get());
    }

    public function filter(Request $request)
    {
        $shops = Shop::query();
        $filter_name = $request->name;
        $filter_zip_code = $request->zip_code;
        $name = $request->get('name');
        if (!is_null($name)) {
            $shops->where('name', 'like', "%{$name}%");
        }
        return view('shops.filter')->with(['shops' => $shops->get(), 'name' => $filter_name, 'zip_code' => $filter_zip_code]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'zip_code' => 'required|digits:7|integer' ,
            'address1' => 'required',
        ]);
        if ($request->file)
        {
            $request->validate([
                'file' => [
                    // アップロードされたファイルであること
                    'file',
                    // 画像ファイルであること
                    'image',
                    // MIMEタイプを指定
                    'mimes:jpeg,png',
                    // 最小縦横120px 最大縦横400px
//                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
                ]
            ]);
            if ($request->file('file')->isValid([])) {
                $path = request()->file('file')->storePublicly(
                    'my-file',
                    's3'
                );
                $url = \Illuminate\Support\Facades\Storage::disk('s3')->url($path);

            } else {
                return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
            }

            $shop= new Shop();
            $shop->company_seal = $url;
        }



        $shop= new Shop();
        $shop->name= $request['name'];
        $shop->zip_code= $request['zip_code'];
        $shop->address1= $request['address1'];
        $shop->address2= $request['address2'];
        $shop->save();


        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    public function upload(Request $request)
    {


//        if ($request->file('file')->isValid([])) {
//            $path = request()->file('file')->storePublicly(
//                'my-file',
//                's3'
//            );
//            $url = \Illuminate\Support\Facades\Storage::disk('s3')->url($path);
//            $shop= new Shop();
//            $shop->company_seal = $url;
//            return redirect('/shops')->with('success', '保存しました。');
//        } else {
//            return redirect()
//                ->back()
//                ->withInput()
//                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
//        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop = Shop::find($id);
        $shops = Shop::all();

        return view('shops.edit')->with(['shop' => $shop, 'shops' => $shops]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'zip_code' => 'required|digits:7|integer' ,
            'address1' => 'required',
            'file' => [
                // アップロードされたファイルであること
                'file',
                // 画像ファイルであること
                'image',
                // MIMEタイプを指定
                'mimes:jpeg,png',
                // 最小縦横120px 最大縦横400px
//                'dimensions:min_width=120,min_height=120,max_width=400,max_height=400',
            ]
        ]);

        if ($request->file('file')->isValid([])) {
            $path = request()->file('file')->storePublicly(
                'my-file',
                's3'
            );
            $url = \Illuminate\Support\Facades\Storage::disk('s3')->url($path);

        } else {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors(['file' => '画像がアップロードされていないか不正なデータです。']);
        }


        $shop= Shop::find($id);
        $shop->name= $request['name'];
        $shop->zip_code= $request['zip_code'];
        $shop->address1= $request['address1'];
        $shop->address2= $request['address2'];
        $shop->company_seal = $url;
        $shop->save();

        return redirect('shops')->with('status', '編集完了!');
    }


    public function destroy(Shop $shop, $id)
    {
//        dd($shop::find('1')->toArray());
        $shop::find($id)->delete();
//        $shop->delete();
        return redirect()->back();
    }
}