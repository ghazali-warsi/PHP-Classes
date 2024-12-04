<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Insert Form</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <a class="btn btn-primary" href="{{route('insertPage')}}">Add User</a>
            </div>
            <div class="col-12 mt-3">
               <table class="table table-success table-striped table-bordered">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Action</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $value)
                    
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->Name}}</td>
                    <td>{{$value->Email}}</td>
                    <td>{{$value->Contact}}</td>
                    <td>{{$value->Address}}</td>
                    <td><a href="" class="btn btn-warning">View</a></td>
                    <td><a href="{{route('userUpdate',$value->id)}}" class="btn btn-info">Update</a></td>
                    <td><a href="{{route('deleteData' , $value->id)}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
               </table>
            </div>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>