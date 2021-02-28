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
                <h1>Students Record</h1>
            </div>
            <div class="col-md-6">
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
            <div class="col-md-6">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Phone</th>
                        <th>Phone</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
