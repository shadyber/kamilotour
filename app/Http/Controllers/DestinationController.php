<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Image;
class DestinationController extends Controller
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
        //
        $destinations=Destination::all()->last();
        if(!$destinations){
            return view('admin.destination.create');
        }

        return view('admin.destination.index')->with(['destinations'=>$destinations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.destination.create');

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
            $destinationPath = 'images/destination/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnails/' . $file_name, 15);

            $request->photo->move(public_path('images/destination'),$newImageName);

        }



        $insert = [
            'slug' => SlugService::createSlug(Destination::class, 'slug', $request->title.'-'.$request->_token),
            'title' => $request->title,
            'detail' => $request->detail,

            'photo'=>'/images/destination/'.$newImageName,
            'thumb'=>'/images/destination/thumbnails/'.$newImageName,
        ];

        Destination ::insertGetId($insert);

        return redirect()->back()->with('success','Greate! Destination created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function show(Destination $destination)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Destination  $destination
     * @return \Illuminate\Http\Response
     */
    public function destroy(Destination $destination)
    {
        //
    }
}
