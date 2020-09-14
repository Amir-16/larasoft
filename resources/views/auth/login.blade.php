<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="col-md-8 offset-md-2">
        <form method="post" action="{{URL::to('loginstore')}}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for=""> Email</label>
                <input class="form-control" type="email" name="email" id="">
            </div>

            <div class="form-group">
                <label for=""> Password</label>
                <input class="form-control" type="password" name="password" id="">
            </div>

            <div class="form-group">

                <input class="btn btn-primary" type="submit" name="submit" value="submit">
            </div>

     </form>
        </div>
    </div>
    
</body>
</html>