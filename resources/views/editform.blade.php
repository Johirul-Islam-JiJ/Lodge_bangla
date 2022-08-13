@extends('layouts.app')

@section('content')

<div class="container mt-5">
        <div class="row">
            <div class="col-sm-4"> 

            <form action="{{ route('resort.update', $resort->id) }}" method="POST" enctype="multipart/form-data">
                @csrf

                @method('PUT')

 @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <div class="mb-3">
                    <label for="name" class="form-label">Name
                    </label>
                    <input type="text" class="form-control" id="name" name ="name" value="{{$resort->name}}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address
                    </label>
                    <input type="text" class="form-control" id="address" name ="address" value="{{$resort->address}}">
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile
                    </label>
                    <input type="number" class="form-control" id="mobile" name ="mobile" value="{{$resort->mobile}}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email
                    </label>
                    <input type="email" class="form-control" id="email" name ="email" value="{{$resort->email}}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Image
                    </label>
                    <input type="file" class="form-control" id="image" name ="image" value="{{$resort->image}}">
                </div>

                <button type="submit" class="btn-btn-primary">Submit</button>

            </form>

    </div>

@endsection