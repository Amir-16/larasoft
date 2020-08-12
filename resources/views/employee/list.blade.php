<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Employee List</title>
</head>
<body>

    <div class="container">
             <div class="jumbotron text-center">
            <h2>List Employee</h2>
    </div>

        <div class="section">

            <div class="table-responsive">
            <table class="table table-hover table-dark">

                <thead>
                    
                    <th> Name</th>
                    <th>Email </th>
                    <th>Gender</th>
                    <th>Salary</th>
                    <th>Description </th>
                    <th>Actions</th>

                </thead>

                <tbody>
                    @foreach($employees as $e)

                   <tr>
                   <td> {{$e->name}}</>
                    <td> {{$e->email}}</td>
                    <td> {{$e->gender}}</td>
                    <td>{{$e->salary}} </td>
                    <td> {{$e->description}}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{URL::to('edit-employee/'.$e->id)}} ">Edit</a>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>

        </div>
    </div>



</body>
</html>
