<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Employee Id</title>
</head>
<body>

    <div class="container">
        <div class="jumbotron text-center">
            <h2>Add Employee</h2>
            @if(Session::has('success'))
            <div class="alert alert-success">
            <strong>{{Session::get('success') }}</strong>
            </div>

            @endif

        </div>

        <div class="section col-md-8 offset-md-2">
        <form method="post" action="{{URL::to('store-employee')}}">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="">Enter Name</label>
                  <input type="text" class="form-control" value="{{old('name') }}" name="name" >
                    @if($errors->first('name'))
                    <div class="alert alert-danger">
                        {{ $errors->first('name') }}
                    </div>
                        @endif
                  </div>

                  <div class="form-group">
                    <label for="">Enter Email</label>
                    <input class="form-control" type="email" value="{{old('email') }}" name="email" >
                    @if($errors->first('email'))
                    <div class="alert alert-danger">
                        {{ $errors->first('email')  }}
                    </div>
                        @endif
                  </div>

                <div class="form-group">

                <label for="">Select Gender</label>
                <select class="form-control" name="gender" value="{{old('gender')}}" id="gender">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                @if($errors->first('gender'))
                <div class="alert alert-danger">
                        {{ $errors->first('gender') }}
                    </div>
                        @endif

                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input class="form-control" type="number" value="{{old('salary')}}" name="salary" id="">

                    @if($errors->first('salary'))
                    <div class="alert alert-danger">
                        {{ $errors->first('salary')  }}
                    </div>
                        @endif
                </div>

                <div class="form-group">
                    <label for="">Date of Birth</label>
                    <input class="form-control" type="date" value="{{old('name')}}" name="dob" id="">
                    @if($errors->first('dob'))
                    <div class="alert alert-danger">
                        {{ $errors->first('dob') }}
                    </div>
                        @endif
                </div>


                <div class="form-group">

                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

                </div>

                <div class="form-group">

                    <input  class="btn btn-success" type="submit" value="Add">
                </div>

            </form>
            
            <div>
                <!--show validation error-->

        @if ($errors->any())
                        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                    @endforeach
                </ul>
         </div>
        @endif
            
</div>
            
        </div>
    </div>



</body>
</html>
