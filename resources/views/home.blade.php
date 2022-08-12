<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resort-Bangla</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4"> 

            <form action="" method="POST" enctype="multipart/form-data">
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
                    @foreach ($resorts as $rst)
                    <tr>
                        <th> {{$rst->id}} </th>
                        <td> {{$rst->name}} </td>
                        <td> {{$rst->address}} </td>
                        <td> {{$rst->mobile}} </td>
                        <td> {{$rst->email}} </td>
                        <td> {{$rst->image}} </td>
                        <td>
                            <a href="" class="btn btn-info btn-sm">Edit</a>
                            <a href="" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>

            </div>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>