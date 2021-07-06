<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;
class PhotoController extends Controller
{ public function __construct()
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
        $photos=Photo::all();

        return view('admin.photo.index')->with(['photos'=>$photos]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $albums=Album::all();
        return view('admin.photo.create')->with(['albums'=>$albums]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'photo' => 'mimes:jpeg,png|max:2024'

        ]);
        $url='/img/slide/slide1.jpg';
        $request->validate([
            'title' => 'required',
            'detail' => 'required',
            'photo'=>'required|mimes:jpg,png,jpeg|max:2048',
        ]);


        if($request->hasFile('photo')) {

            $newImageName=uniqid().'_'. $request->_token.'.'.$request->photo->extension();


            $file = $request->file('photo');
            $file_name =$newImageName;
            $destinationPath = 'images/photos/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnails/' . $file_name, 15);

            $request->photo->move(public_path('images/photos'),$newImageName);



    }else{
            print('Photo not found');
        }



        $insert = [
            'slug' => SlugService::createSlug(Photo::class, 'slug', $request->title.'-'.$request->_token),
            'title' => $request->title,
            'detail' => $request->detail,
            'album_id' => $request->album_id,
            'photo'=>'/images/photos/'.$newImageName,
            'thumb'=>'/images/photos/thumbnails/'.$newImageName,
        ];

        Photo ::insertGetId($insert);

        return redirect()->back()->with('success','Greate! Photo created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {

        return view('admin.photo.index')->with(['photo'=>$photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {


        return view('back.photo.edit')->with([]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        $this->validate($request, [
            'name' => 'required'

        ]);

        $input = $request->all();
        $photo->fill($input)->save();
        return redirect()->back()->with('success','Photo Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {

        $photo->delete();
        return redirect()->back()->with('success','Removed');
    }
}
