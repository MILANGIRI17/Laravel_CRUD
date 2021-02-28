<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('bootstrap/css/bootstrap.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 style="background-color: #2aabd2 ">Students Record</h1>

                @if(Session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>@endif

                @if(Session('error'))
                <div class="alert alert-success">
                    {{session('error')}}
                </div>@endif
            </div>
            <div class="col-md-4">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <lable for="name">Name: <h5 style="color:red;">{{$errors->first('name')}}</h5></lable>
                        <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <lable for="email">Email: <h5 style="color:red;">{{$errors->first('email')}}</h5></lable>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <lable for="phone">Phone: <h5 style="color:red;">{{$errors->first('phone')}}</h5></lable>
                        <input type="text" name="phone" value="{{old('phone')}}" class="form-control" id="phone">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Add Record</button>
                    </div>
                </form>
            </div>
            <div class="col-md-8">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usersData as $key => $user)
                    <tr>

                        <td>{{++$key}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>
                            <a href="{{route('edit').'/'.$user->id}}" class="btn btn-primary btn-sm">Update</a>
                            <a href="{{route('delete').'/'.$user->id}}" onclick="return confirm('Are You Sure to Delete ?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                {{$usersData->links()}}
            </div>
        </div>
    </div>
    <script src="{{url('bootstrap/js/jquery.js ')}}"></script>
    <script src="{{url('bootstrap/js/bootstrap.js ')}}"></script>
    <script>
        $(document).ready(function(){
           setTimeout(function(){
               $('.alert').hide('slow');
           },2000);
        });
    </script>

</body>
</html>
