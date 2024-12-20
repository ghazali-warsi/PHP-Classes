<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update</title>
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <h1>Update Form</h1>
            <div class="col-10">
                <form action="{{route('updataData' , $value->id)}}" method="post">
                    @csrf
                    <div class="mt-2">
                        <label for="id">ID</label>
                        <input type="number" id="id" value="{{$value->id}}" readonly  class="form-control"
                            required>
                    </div>


                    <div class="mt-2">
                        <label for="n">Name</label>
                        <input type="text" id="n" placeholder="Enter Name" value="{{$value->Name}}" name="username" class="form-control"
                            required>
                    </div>

                    <div class="mt-2">
                        <label for="e">Email</label>
                        <input type="text" id="e" placeholder="Enter Email" name="useremail" value="{{$value->Email}}" class="form-control"
                            required>
                    </div>

                    <div class="mt-2">
                        <label for="c">Contact</label>
                        <input type="text" id="c" placeholder="Enter Contact" name="usercontact" value="{{$value->Contact}}" class="form-control"
                            required>
                    </div>

                    <div class="mt-2">
                        <label for="ad">Address</label>
                        <input type="text" id="ad" value="{{$value->Address}}" placeholder="Enter Address" name="useraddress" class="form-control"
                            required>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary" name="updateUser">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>