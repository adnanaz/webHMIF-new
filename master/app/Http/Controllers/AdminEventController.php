<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Event;
use Image;
use DB;

class AdminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'DESC')->paginate(8);

        return view('admin.adminberita', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tambahberita');
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
            'tanggal_kegiatan' => 'required|max:255',
            'berita_acara' => 'required',
            'uploadFile' => 'required',
            'uploadFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if ($image = $request->file('uploadFile')) {
            foreach ($image as $files) {
            $dates = date('YmdHis');
            $random = str_random(10);
            $destinationPath = storage_path('app/public/event'); // upload path
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


        $event = new Event;
        $event->judul = $request->judul;
        $event->slug = Str::slug($request->judul);
        $event->tanggal_kegiatan = $request->tanggal_kegiatan;
        $event->berita_acara = $request->berita_acara;
        $event->gambar = json_encode($insert);

        $event->save();
        return('Berhasil');
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
        $event = Event::find($id);

        return view('admin.editberita', compact('event'));
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
        $event = Event::find($id);

        $this->validate($request, [
            'judul' => 'required|max:255',
            'tanggal_kegiatan' => 'required|max:255',
            'berita_acara' => 'required',
            'uploadFile.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);      
        
        if ($image = $request->file('uploadFile')) {
            foreach ($image as $files) {
            $dates = date('YmdHis');
            $random = str_random(10);
            $destinationPath = storage_path('app/public/event'); // upload pathh
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

            $images = json_decode($event->gambar);
            if (is_array($images) || is_object($images))
            {
                foreach ($images as $image) {
                    $path = storage_path("app/public/event/{$image}");
                    if (file_exists($path)) {
                        unlink($path);
                    }
                }
            }

        }

        $event->judul = $request->judul?$request->judul : $event->judul;
        $event->slug = Str::slug($request->judul);
        $event->tanggal_kegiatan = $request->tanggal_kegiatan?$request->tanggal_kegiatan : $event->tanggal_kegiatan;
        $event->berita_acara = $request->berita_acara?$request->berita_acara : $event->berita_acara;
        $event->gambar = $request->file('uploadFile')?$insert : $event->gambar;

        $event->update();

        return redirect()->route('adminberita.index')->with('success', 'Berita Acara Berhasil Di Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        
        $images = json_decode($event->gambar);
        if (is_array($images) || is_object($images))
        {
            foreach ($images as $image) {
                $path = storage_path("app/public/event/{$image}");
                if (file_exists($path)) {
                    unlink($path);
                }
            }
        }

        $event->delete();

        return('berhasil dihapus');
        // return back()->with('success', 'Product Berhasil Di Hapus!');
    }
}
