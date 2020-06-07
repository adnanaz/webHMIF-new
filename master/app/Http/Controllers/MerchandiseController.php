<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Merchandise;

use Image;
use DB;

class MerchandiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahmerchandise');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'url' => 'required|max:255'
        ]);

        $image = $request->file('gambar');

        $dates = date('YmdHis');
        $random = str_random(10);
        $destinationPath = storage_path('app/public/merchandise'); // upload path
        $profileImage = $dates . $random . "." . $image->getClientOriginalExtension();

        if($image->getClientOriginalExtension() != 'svg'){
            $resize_image = Image::make($image->getRealPath());

            $resize_image->resize(1500, 1500, function($constraint){
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $profileImage);
        } else {
            $image->move($destinationPath, $profileImage);
        }

        $merchandise = new Merchandise;
        $merchandise->gambar = $profileImage;
        $merchandise->url = $request->url;

        $merchandise->save();
        return('Berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $merchandise = Merchandise::findOrFail($id);
        unlink(storage_path("app/public/merchandise/{$merchandise->gambar}"));

        $merchandise->delete();

        return('Berhasil dihapus');
        // return redirect()->route('adminartikel.index')->withDanger('Artikel Berhasil Dihapus!!!');
    }
}
