<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Upload Image using Intervention</h2>
        <div>
        <form method="post" action="{{URL::to('storeimage')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
            <label for="">Select Image</label>
            <input type="file" name="picture" id ="picture">
            <br>

            <button type="submit">Upload Image</button>

            </form>

        
        </div>
    </div>

</body>
</html>