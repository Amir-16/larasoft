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
            <h2>Edit Employee</h2>
            @if(Session::has('success'))
            <div class="alert alert-success">
            <strong>{{Session::get('success')}}</strong>
            </div>

            @endif

        </div>

        <div class="section">
        <form method="post" action="{{URL::to('update-employee/'.$employee->id)}}">
                {{ csrf_field() }}


                  <div class="form-group">
                    <label for="">Enter Name</label>
                  <input type="text" value="{{$employee->name}}" class="form-control" name="name">
                  </div>

                  <div class="form-group">
                    <label for="">Enter Email</label>
                    <input class="form-control" value="{{$employee->email}}"  type="text" name="email">
                  </div>

                <div class="form-group">
                <label for="">Select Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option {{($employee->gender)=="Male" ? 'selected':'' }} value="Male">Male</option>
                    <option {{($employee->gender)=="Female" ? 'selected':'' }} value="Female">Female</option>
                </select>

                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input class="form-control" value="{{$employee->salary}}" type="number" name="salary">
                </div>

                <div class="form-group">

                    <label for="">Description</label>
                    <textarea class="form-control" value="" name="description" id="description" cols="30" rows="10">{{$employee->description}}</textarea>

                </div>

                <div class="form-group">

                    <input  class="btn btn-success" type="submit" value="Update">
                </div>

            </form>
        </div>
    </div>



</body>
</html>
