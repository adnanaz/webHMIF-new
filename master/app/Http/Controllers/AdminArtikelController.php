<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Article;

use Image;
use DB;

class AdminArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(8);

        return view('admin.adminartikel', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahartikel');
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
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'artikel' => 'required',
            'uploadFile' => 'required',
            'uploadFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($image = $request->file('uploadFile')) {
            foreach ($image as $files) {
            $dates = date('YmdHis');
            $random = str_random(10);
            $destinationPath = storage_path('app/public/artikel'); // upload path
            $profileImage = $dates . $random . "." . $files->getClientOriginalExtension();

            if($files->getClientOriginalExtension() != 'svg'){
                $resize_image = Image::make($files->getRealPath());

                $resize_image->resize(1500, 1500, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $profileImage);
            } else {
                $files->move($destinationPath, $profileImage);
            }

            $insert[] = $profileImage;
            }
        }


        $article = new Article;
        $article->judul = $request->judul;
        $article->slug = Str::slug($request->judul);
        $article->penulis = $request->penulis;
        $article->artikel = $request->artikel;
        $article->gambar = json_encode($insert);

        $article->save();
        return('Berhasil');
        // return redirect()->route('admin.product')->with('success', 'Product Berhasil Ditambahkan!');
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
        $artikel = Article::find($id);

        return view('admin.editartikel', compact('artikel'));
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
        $artikel = Article::find($id);

        $this->validate($request, [
            'judul' => 'required|max:255',
            'penulis' => 'required|max:255',
            'artikel' => 'required',
            'uploadFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);      
        
        if ($image = $request->file('uploadFile')) {
            foreach ($image as $files) {
            $dates = date('YmdHis');
            $random = str_random(10);
            $destinationPath = storage_path('app/public/artikel'); // upload pathh
            $profileImage = $dates . $random . "." . $files->getClientOriginalExtension();

            if($files->getClientOriginalExtension() != 'svg'){
                $resize_image = Image::make($files->getRealPath());

                $resize_image->resize(1500, 1500, function($constraint){
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $profileImage);
            } else {
                $files->move($destinationPath, $profileImage);
            }
            

            $insert[] = $profileImage;
            }

            $images = json_decode($artikel->gambar);
            if (is_array($images) || is_object($images))
            {
                foreach ($images as $image) {
                    $path = storage_path("app/public/artikel/{$image}");
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

        }

        $artikel->judul = $request->judul?$request->judul : $artikel->judul;
        $artikel->slug = Str::slug($request->judul);
        $artikel->penulis = $request->penulis?$request->penulis : $artikel->penulis;
        $artikel->artikel = $request->artikel?$request->artikel : $artikel->artikel;
        $artikel->gambar = $request->file('uploadFile')?$insert : $artikel->gambar;

        $artikel->update();

        return redirect()->route('adminartikel.index')->with('success', 'Artikel Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Article::find($id);
        
        $images = json_decode($artikel->gambar);
        if (is_array($images) || is_object($images))
        {
            foreach ($images as $image) {
                $path = storage_path("app/public/artikel/{$image}");
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        $artikel->delete();

        return back()->with('success', 'Artikel Berhasil Di Hapus!');
    }
}
