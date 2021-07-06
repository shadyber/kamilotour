<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
class AlbumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $albums=Album::all();

        return view('admin.album.index')->with(['albums'=>$albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums=Album::all();

        return view('admin.album.create')->with(['albums'=>$albums]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:2048',
        ]);


        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->_token.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/albums/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnails/' . $file_name, 15);

            $request->photo->move(public_path('images/albums'),$newImageName);

        }



        $insert = [
            'slug' => SlugService::createSlug(Album::class, 'slug', $request->title.'-'.$request->_token),
            'title' => $request->title,
            'detail' => $request->detail,

            'photo'=>'/images/albums/'.$newImageName,
            'thumb'=>'/images/albums/thumbnails/'.$newImageName,
        ];

        Album ::insertGetId($insert);

        return redirect()->back()->with('success','Greate! Album created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {

        return view('admin.album.show')->with(['album'=>$album]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {

        return view('admin.album.edit')->with(['album'=>$album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);

        $input = $request->all();
        $album->fill($input)->save();
        return redirect()->back()->with('success','Album Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        //
        $album->delete();
        return redirect()->back()->with('success','Removed');

    }
}
