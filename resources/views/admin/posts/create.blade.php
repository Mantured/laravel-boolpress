@extends('layouts.app')

@section('title', 'New Psot')

@section('content')

<form action="{{route('admin.posts.store')}}" method='post' class="my-height" enctype="multipart/form-data">
@csrf
        <div class="container h-100 ">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12">
                    <label for="image" class="size-label">Image URL</label>
                    <input type="file" class="m-3" name="image" id="image">
                    @error('image')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="title" class="size-label">Title</label>
                    <input type="text" name="title" class="m-3">
                    @error('title')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="col-12 d-flex">
                    <label for="content" class="size-label align-self-center">Content</label>
                    <textarea name="content" class="m-3"></textarea>
                    @error('content')
                        <span class="alert alert-danger">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-4 text-center">
                    <input type="submit" class="btn btn-warning" value="Submit">
                </div>
            </div>
        </div>

</form>

@endsection
