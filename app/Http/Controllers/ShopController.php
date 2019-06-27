<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;
use App\Http\Controllers\Storage;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops = Shop::paginate(10);

        return view('shops.index')->with('shops', $shops);
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

        $zipCode = $request->get('zip_code');
        if (!is_null($zipCode)) {
            $shops->where('zip_code', $zipCode);
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
            'zip_code' => 'required|digits:7|integer',
            'address1' => 'required',
        ]);
        if ($request->file) {
            if ($request->file('file')) {
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

            $shop = new Shop();
            $shop->name = $request['name'];
            $shop->zip_code = $request['zip_code'];
            $shop->address1 = $request['address1'];
            $shop->address2 = $request['address2'];
            $shop->company_seal = $url;
            $shop->save();

            return redirect()->back();

        }

        $shop = new Shop();
        $shop->name = $request['name'];
        $shop->zip_code = $request['zip_code'];
        $shop->address1 = $request['address1'];
        $shop->address2 = $request['address2'];
        $shop->save();


        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Shop $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Shop $shop
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
            'zip_code' => 'required|digits:7|integer',
            'address1' => 'required',
        ]);
        if ($request->file) {
            if ($request->file('file')) {
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

            $shop = Shop::find($id);
            $shop->name = $request['name'];
            $shop->zip_code = $request['zip_code'];
            $shop->address1 = $request['address1'];
            $shop->address2 = $request['address2'];
            $shop->company_seal = $url;
            $shop->save();

            return redirect('shops')->with('status', '編集完了!');

        }


        $shop = Shop::find($id);
        $shop->name = $request['name'];
        $shop->zip_code = $request['zip_code'];
        $shop->address1 = $request['address1'];
        $shop->address2 = $request['address2'];
        $shop->save();

        return redirect('shops')->with('status', '編集完了!');
    }


//    public function destroy(Shop $shop, $id)
//    {
//        $shop::find($id)->delete();
//        return redirect()->back();
//    }
}