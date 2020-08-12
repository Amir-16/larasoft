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
            <strong>{{Session::get('success')}}</strong>
            </div>

            @endif

        </div>

        <div class="section">
        <form method="post" action="{{URL::to('store-employee')}}">
                {{ csrf_field() }}


                  <div class="form-group">
                    <label for="">Enter Name</label>
                    <input type="text" class="form-control" name="name">
                  </div>

                  <div class="form-group">
                    <label for="">Enter Email</label>
                    <input class="form-control" type="text" name="email">
                  </div>

                <div class="form-group">

                <label for="">Select Gender</label>
                <select class="form-control" name="gender" id="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                </div>

                <div class="form-group">
                    <label for="">Salary</label>
                    <input class="form-control" type="number" name="salary">
                </div>

                <div class="form-group">

                    <label for="">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

                </div>

                <div class="form-group">

                    <input  class="btn btn-success" type="submit" value="Add">
                </div>

            </form>
        </div>
    </div>



</body>
</html>
