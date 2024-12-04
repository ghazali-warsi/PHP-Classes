<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
{{-- 
        @if ($errors->any())

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
            
        @endif --}}

<form action="{{route('Form')}}" method="post">
   @csrf
    <div class="mt-3">
        <label for="">Name</label>
        <input type="text" value="{{old('name')}}" placeholder="Enter Name" class="form-control" name="name" >
        <span class="text-danger">
            @error('name')
                {{$message}}
            @enderror
        </span>
    </div>

    <div class="mt-3">
        <label for="">Email</label>
        <input type="text" value="{{old('email')}}" placeholder="Enter Email" class="form-control" name="email">
        <span class="text-danger">
            @error('email')
                {{$message}}
            @enderror
        </span>
    </div>

    <div class="mt-3">
        <label for="">Age</label>
        <input type="number" class="form-control" value="{{old('age')}}" name="age">
        <span class="text-danger">
            @error('age')
                {{$message}}
            @enderror
        </span>
    </div>

    <div class="mt-3">
        <label for="">Password</label>
        <input type="text" placeholder="Enter Password" value="{{old('password')}}" class="form-control" name="password">
        <span class="text-danger">
            @error('password')
                {{$message}}
            @enderror
        </span>
    </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-info">Submit</button>
    </div>
</form>
            </div>
        </div>
    </div>
</body>
</html>