<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/voteresultsstyle.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body style="background-color: #272724;">
    <div class="container" style="display: flex; height: 100vh; width: 100%; justify-content: center; align-items: center;">
        <div class="m-0 p-0 maindiv" style="position: relative; height: 60%; justify-content: center; align-items: center; background-color: #1B4AB8; border-radius: 7px;">
            <div class="row cnd1" style="position: absolute;height: 10vh;width: 100%;border-bottom: 1px solid white;">
                <img src="./images/Component 1 – 1.png" alt="" style="height: 50px;position: absolute;width: 50px;left: 1%;">
                <p class="h6 m-0" style="    color: white;top: 21%;left: 16%;position: absolute;">Candidate1</p>
                <div class="bg-success" style="position: absolute;width: 23%;height: 53%;left: 76%;top: 12%; border-radius: 3px;display: flex; justify-content: center; align-items: center;"><p class="h6" style="color: white;">1 Votes</p></div>
            </div>

            <div class="row cnd2 " style="position: absolute;height: 10vh;width: 100%;;border-bottom: 1px solid white;">
                <img src="./images/Component 3 – 1.png" alt="" style="height: 50px;position: absolute;width: 50px;left: 1%;">
                <p class="h6 m-0" style="    color: white;top: 21%;left: 16%;position: absolute;">Candidate2</p>
                <div class="bg-success" style="position: absolute;width: 23%;height: 53%;left: 76%;top: 12%; border-radius: 3px;display: flex; justify-content: center; align-items: center;"><p class="h6" style="color: white;">1 Votes</p></div>
            </div>

            <div class="row cnd3" style="position: absolute;height: 10vh;width: 100%;border-bottom: 1px solid white;">
                <img src="./images/Component 5 – 1.png" alt="" style="height: 50px;position: absolute;width: 50px;left: 1%;">
                <p class="h6 m-0" style="    color: white;top: 21%;left: 16%;position: absolute;">Candidate3</p>
                <div class="bg-success" style="position: absolute;width: 23%;height: 53%;left: 76%;top: 12%; border-radius: 3px;display: flex; justify-content: center; align-items: center;"><p class="h6" style="color: white;">1 Votes</p></div>
            </div>
        
        </div>
    </div>
</body>
</html>