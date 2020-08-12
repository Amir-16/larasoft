<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Employee List</title>
    <style>
        .modal{
            color: black;
        }
    </style>
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
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal{{$e->id}}">Delete </button>

                        <!-- The Modal -->
                    <div class="modal" id="modal{{$e->id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Delete Confirmation</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>

                              <!-- Modal body -->
                              <div class="modal-body">
                              are you sure to delete <b> <i>{{$e->name}}</i></b> ?
                              </div>

                              <!-- Modal footer -->
                              <div class="modal-footer">
                              <a class="btn btn-success" href="{{URL::to('delete-employee/'.$e->id)}}">Yes</a>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>

                            </div>
                          </div>
                        </div>
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
