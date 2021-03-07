<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting DashBoard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/styledash.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="m-0 p-0">
    <div style="height: 10vh; position: relative;">
        <div style="position: absolute; width: 96%; height: 65%; margin: 1% 2% 1% 2%; background-color: #2A2A2A; border: 1px solid rgb(56, 54, 54);">
            <p class="h6 m-0 heading1" >WELCOME TO DIGITAL ONLINE PORTAL</p>
            <button class="btn btn-success btn-sm border border-white btn-logout">Logout</button>
        </div>
    </div>

    <div class="row no-gutters" style="position: relative; height: 100vh; width:100%;">
        <div class="col-12 col-lg-6 order-2 order-lg-1">
            <div class="bioback">
                <div class="row p-0 m-0" style="position: relative; height: 33vh; border-bottom: 2px solid white;">
                    <div class="cnd1" style="position: absolute;">
                        <img class="cand-img" src="./images/Component 1 – 1.png" alt="Rahul gandhi">
                        <p class="h6 cndtxt" style="color: white; position: absolute;">Candidate 1</p>
                    </div>
                    <div class="pty1" style="position: absolute;">
                        <img style="width: 55%;height: 60%;" class="cand-img" src="./images/Component 2 – 1.png" alt="Congress">
                        <p class="h6 cndpty" style="color: white; position: absolute;">Party 1</p>
                    </div>
                    <button class="btn btn-success border-white btn-vote" style="position: absolute;">Vote</button>
                </div>

                <div class="row p-0 m-0" style="position: relative; height: 33vh; border-bottom: 2px solid white;">
                    <div class="cnd1" style="position: absolute;">
                        <img class="cand-img" src="./images/Component 3 – 1.png" alt="Rahul gandhi">
                        <p class="h6 cndtxt" style="color: white; position: absolute;">Candidate 1</p>
                    </div>
                    <div class="pty2" style="position: absolute;">
                        <img style="width: 55%;height: 60%;" class="cand-img" src="./images/Component 4 – 1.png" alt="Congress">
                        <p class="h6 cndpty2" style="color: white; position: absolute;">Party 1</p>
                    </div>
                    <button class="btn btn-success border-white btn-vote" style="position: absolute;">Vote</button>
                </div>

                <div class="row p-0 m-0" style="position: relative; height: 33vh;">
                    <div class="cnd1" style="position: absolute;">
                        <img class="cand-img" src="./images/Component 5 – 1.png" alt="Rahul gandhi">
                        <p class="h6 cndtxt" style="color: white; position: absolute;">Candidate 1</p>
                    </div>
                    <div class="pty3" style="position: absolute;">
                        <img style="width: 55%;height: 60%;" class="cand-img" src="./images/Component 6 – 1.png" alt="Congress">
                        <p class="h6 cndpty3" style="color: white; position: absolute;">Party 1</p>
                    </div>
                    <button class="btn btn-success border-white btn-vote" style="position: absolute;">Vote</button>
                </div>
            </div>
        </div>



        <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="votebioback" style="color: white;">
                <img src="./images/Component 7 – 1.png" alt="voter" style="height: 80px; width: 80px; position: absolute; left: 13%; top: 26%;">
            <div class="voteinfo" style="position: absolute;top: 17%; left: 44%;">
                <p class="h5">Name:Voter</p>
                <p class="h5">Address:123 Delhi</p>
                <p class="h5">Mob:123456789</p>
                <p class="h5">Uid:987456123</p>
            </div>
            </div>

            <div class="votestat"><p class="h6 votestattxt">Status:Not Voted</p></div>
        </div>
    </div>


</body>
</html>