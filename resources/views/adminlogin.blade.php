<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/adminlogstyle.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin Login</title>
</head>
<body>
    <div class="container" style="position: relative;height: 100vh;width: 100%;display: flex;justify-content: center;align-items: center;;">
        <div class="row" style="    position: absolute;background-color: white;border-radius: 10px; display: flex;height: 50%;align-items: center;justify-content: center;box-shadow: -2px 0px 13px 1px rgba(0,0,0,0.75);-webkit-box-shadow: -2px 0px 13px 1px rgba(0,0,0,0.75);-moz-box-shadow: -2px 0px 13px 1px rgba(0,0,0,0.75);">
            <form action="">
                <p class="h6">Please Enter Your Detail</p>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</body>
</html>