@extends('layouts.app')

@section('content')

 <div class="container">


        <div class="row">
            <h4 class="text-center p-5">Resort List</h4>


            @foreach ($resorts as $resort)
                <div class="col-md-4 p-3">
                    <div class="card" style="width: 20rem">
                        <div style="max-width:450px; max-height:450px; overflow: hidden;">
                            <img src="{{ $resort->image }}" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">{{ $resort->name }}</h3>

                            <p class="card-text">
                                {{ $resort->address }}
                            </p>

                            <a class="btn btn-primary btn-sm" href="#"> Book Now</a>
                        </div>
                    </div>
                </div>
        @endforeach

    </div>
 </div>

@endsection