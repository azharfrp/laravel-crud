@extends('layouts.app')
@section('title', 'Form Edit')
@section('content')
<main role="main">
    <div class="container my-3">
        <div class="card">
            <div class="card-header">@yield('title')</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-row">
                        <div class="col-12 form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ $post->title }}">
                            @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                        <div class="col-12 form-group">
                            <label for="body">Body</label>
                            <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror">{{ $post->body }}</textarea>
                            @error('body') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="form-group text-right">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection