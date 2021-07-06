@extends('layouts.admin')

@section('title' ,'Create Photo')
@section('content')

    <form action="/photo" method="post" class="form-horizontal form-material" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Title')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <input type="text" name="title" placeholder="{{__('Title')}}" class="form-control p-0 border-0   @error('title') is-invalid @enderror" required> </div>
            @error('title')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Photo')}}</label>
            <div class="col-md-12 border-bottom p-0   @error('photo') is-invalid @enderror">
                <input type="file" name="photo"  class="form-control p-0 border-0" required>
                @error('photo')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Album Id')}}</label>
            <div class="col-md-12 border-bottom p-0   @error('photo') is-invalid @enderror">
                <select name="album_id"  class="form-control p-0 border-0" required>
                    @foreach($albums as $album)
                        <option value="{{$album->id}}">{{$album->title}}</option>
                    @endforeach
                </select>
                @error('photo')
                <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>


        <div class="form-group mb-4">
            <label class="col-md-12 p-0">{{__('Detail')}}</label>
            <div class="col-md-12 border-bottom p-0">
                <textarea rows="5" name="detail" class="form-control p-0 border-0 ckeditor   @error('detail') is-invalid @enderror"></textarea>
            </div>
            @error('detail')
            <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                    </span>
            @enderror
        </div>


        <div class="form-group mb-4">
            <div class="col-sm-12">
                <button class="btn btn-success">Post Photo</button>
            </div>
        </div>
    </form>

    <div class="row">
        <div class="col-md-12">
            List All Here
        </div>

    </div>

@endsection
