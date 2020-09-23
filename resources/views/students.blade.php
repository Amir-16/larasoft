<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>All students</h2>
        <table class="table table-striped table-dark", id="studentstbl">
            <thead class="thead-dark" >
                <th> Name </th>
                <th> Email </th>
                <th> DOB </th>
                <th> Salary </th>
                <th> Contact </th>
                <th> City </th>
                <th> Ip </th>

            </thead>
            <tbody>
                @foreach ($data as $s)
                <tr> 
                    <th>{{ $s->name }}</th>
                    <th>{{ $s->email }}</th>
                    <th>{{ $s->dob }}</th>
                    <th>{{ $s->salary }}</th>
                    <th>{{ $s->contact }}</th>
                    <th>{{ $s->city }}</th>
                    <th>{{ $s->ip_address }}</th>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    
    <script>
        //show datable in DaaTable Style
       $(document).ready(function() {
        $('#studentstbl').DataTable();
       });

    </script>
</body>
</html>