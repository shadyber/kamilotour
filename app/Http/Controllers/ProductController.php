<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use Cviebrock\EloquentSluggable\Services\SlugService;
use Image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {
        $packages=Product::orderBy('id','desc')->paginate(9);
        return view('package.index')->with(['packages'=>$packages]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.package.create');
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
            $destinationPath = 'images/package/';
            $new_img = Image::make($file->getRealPath())->resize(true, true);

// save file with medium quality
            $new_img->save($destinationPath . $file_name, 100);
            $new_img->save($destinationPath.'thumbnails/' . $file_name, 15);

            $request->photo->move(public_path('images/package'),$newImageName);

        }



        $insert = [
            'slug' => SlugService::createSlug(Product::class, 'slug', $request->title.'-'.$request->_token),
            'title' => $request->title,
            'detail' => $request->detail,
            'offer' => $request->offer,
            'length' => $request->length,
            'tags' => $request->tags,
            'photo'=>'/images/package/'.$newImageName,
            'thumb'=>'/images/package/thumbnails/'.$newImageName,
        ];

        Product::insertGetId($insert);

        return redirect()->back()->with('success','Greate! Package created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return Response
     */
    public function show($slug)
    {
        $package=Product::where('slug',$slug)->first();
        $package->visit++;
        $package->save();

        return view('package.show')->with('package',$package);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
