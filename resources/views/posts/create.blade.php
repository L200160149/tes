@extends('layouts.app', ['title' => 'New Post'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Input New Post
                </div>
                    <div class="card-body">
                        <form action="/posts/store" method="post">
                            @csrf
                            {{-- input file hidden _token --}}

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                                @error('title')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body">Description</label>
                                <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                                @error('body')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add Post</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection