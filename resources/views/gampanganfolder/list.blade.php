@extends('layouts.app')
@section('title', 'List Global')
@section('content')
<main role="main">
    <div class="container my-3">
        @if( session()->has( 'alert' ) && session()->has( 'message' ) )
        <div class="{{ session()->get('alert') }}">
            <h4 class="alert-heading">Hasil</h4>
            <p>{{ session()->get('message') }}</p>
        </div>
        @endif

        <!-- Card List Query Builder - Mulai -->
        <div class="card">
            <div class="card-header">
                <strong>List - Query Builder</strong>
            </div>
            <div class="card-body">
                <a href="{{ route('crud.add.query') }}" class="btn btn-dark mb-2">Buat Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No.</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th class="text-center" colspan="2" width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($lq AS $query)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $query->title }}</td>
                                <td>{{ $query->body }}</td>
                                <td><a href="edit_query/{{ $query->id }}">Edit</a></td>
                                <td><a href="delete_query/{{ $query->id }}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Card List Query Builder - Selesai -->

        <hr/>

        <!-- Card List Eloquent - Mulai -->
        <div class="card">
            <div class="card-header">
                <strong>List - Eloquent</strong>
            </div>
            <div class="card-body">
                <a href="{{ route('crud.add.eloquent') }}" class="btn btn-dark mb-2">Buat Data</a>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" width="5%">No.</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th class="text-center" colspan="2" width="10%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($le AS $eloquent)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $eloquent->title }}</td>
                                <td>{{ $eloquent->body }}</td>
                                <td><a href="edit_eloquent/{{ $eloquent->id }}">Edit</a></td>
                                <td><a href="delete_eloquent/{{ $eloquent->id }}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Card List Eloquent - Selesai -->

    </div>
</main>
@endsection