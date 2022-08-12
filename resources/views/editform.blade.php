<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Resort</title>
</head>


<body>

<div class="container mt-5">
        <div class="row">
            <div class="col-sm-4"> 

            <form action="/" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>