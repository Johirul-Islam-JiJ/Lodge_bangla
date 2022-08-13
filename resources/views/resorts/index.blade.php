@extends('layouts.app')
@section('content')

 <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4"> 

            <form action="{{route('resort.create')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name
                    </label>
                    <input type="text" class="form-control" id="name" name ="name">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address
                    </label>
                    <input type="text" class="form-control" id="address" name ="address">
                </div>

                <div class="mb-3">
                    <label for="mobile" class="form-label">Mobile
                    </label>
                    <input type="number" class="form-control" id="mobile" name ="mobile">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email
                    </label>
                    <input type="email" class="form-control" id="email" name ="email">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Image
                    </label>
                    <input type="file" class="form-control" id="image" name ="image">
                </div>

                <button type="submit" class="btn-btn-primary">Submit</button>

            </form>
            @if(session()->has('status'))
            <div class="alert alert-success">
                {{session('status')}}
            </div>

            @endif


            </div>

        

            <div class="col-sm-8"> 

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Image</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($resort as $rst)
                    <tr>
                        <th> {{$rst->id}} </th>
                        <td> {{$rst->name}} </td>
                        <td> {{$rst->address}} </td>
                        <td> {{$rst->mobile}} </td>
                        <td> {{$rst->email}} </td>
                        <td>
                                <img src="{{ $rst->image }}" width="80px" height="80px" alt=""
                                class="img-fluid">
                         </td>
                        <td>
                            <a href="{{route('resort.edit',$rst->id)}}" class="btn btn-info btn-sm">Edit</a>
                            <a href="{{route('resort.destroy',$rst->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            </div>

        </div>

    </div>
@endsection
