<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@100&display=swap" rel="stylesheet">    
    <title>E-Matadaan </title>
</head>
<body >
    <div style="overflow: hidden;">
        <div class="row no-gutters">
            <div class="col-lg-4 col-sm-12 col-md-12 col-12 " style="height: 100vh; position: relative; overflow: hidden;">
                <div style="height: 100vh; width: 50ch; position: absolute;">
                    <img src="./images/election.png" alt="Election picture" class="img-fluid col-12 col-lg-12 col-md-12" style="transform: translate(-3px, 154px) scale(2.2); object-fit: contain; overflow: hidden;">
                </div>
                <div style="background-color: #170C01; height: 100vh; width: 100%; opacity: 85%; position: absolute;">
                    <img src="./images/icon.png" alt="Logo"  style="border-radius: 20px; height: 75px; width: 75px; position: absolute; top: 10%; left: 40%;">
                    <p class="h3" style="color: white; position: absolute; text-align: center; top: 25%; font-family: 'Londrina Solid', cursive; left: 5%;">WELCOME TO DIGITAL ONLINE VOTING</p>
                    <p class="h5 px-2" style="color: white; position: absolute; text-align: center; top: 37%;">"Elections belong to the people. <br> 
                        It's their decision. <br> 
                        If they decide to turn their back <br>
                         on the fire and burn their behinds, <br> 
                        then they will just have to sit on their blisters." <br>
                        - Abraham Lincoln
                    </p>
                    <p class="h5 pl-5" style="color: white; position: absolute; text-align: left; top: 70%;">
                        • One vote can rock the boat. <br><br>
                        • Envision your future. Vote. <br><br>
                        • Vote. It’s What Keeps Us Free.
                    
                    </p>
                    
                </div> 
            
            </div>





            <div class="col-lg-8 col-sm-12 col-md-12 col-12"  >
                    <div class="row m-0" style="height: 20vh; width: 100%; position: relative;">
                        <p class="h5 m-0" style="color: black; position: absolute; top: 40%; left: 10%;"><span class="font-weight-bold">Sign up</span>/ Login</p>
                        <p class="h5 m-0" style="color: #1B4AB8; position: absolute; top: 80%; left: 10%;">We need....</p>
                        <p class="h5 m-0" style="color: #1B4AB8; position: absolute; top: 80%; left: 70%;">You can....</p>
                    </div>

                    <div id="log-sec" class="row  m-0" style="width: 100%; position: relative;">
                        <div id="reg-col" class=" col-12 col-sm-12 col-md-12 col-lg-6 p-0">
                            <form method="POST" action="/signup" style="position: absolute; top: 5%; left: 10%; width: 70%;"> 
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="username" id="signupusername" placeholder="Your Name" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-smile'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" id="signupemail" placeholder="Email" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-mobile-alt'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" id="signuppass" placeholder="Password" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-lock'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="password" class="form-control" name="conpassword" id="signupconpass" placeholder="Confirm Password" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-lock'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="text" class="form-control" id="signupuid" name="uid" placeholder="UID" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-id-card'></i></span>
                                        </div>
                                    </div>
                                    <div class="input-group" style="position: relative;">
                                        <input class="btn" type="submit" value="Signup" style="background-color: #1B4AB8; color: white;">
                
                                    </div>
                                    
                                </div>    
                                    
                                

                            </form>
                        </div>

                         <div id="line-col" class=" col-12 col-sm-12 col-md-12 col-lg-1 p-0">
                            <div id="mar-line"></div> 
                        </div>

                        <div id="sign-col" class="col-12 col-sm-12 col-md-12 col-lg-5 p-0">
                            <form method="POST" action="/login" style="position: relative; top: 5%; left: 10%; width: 70%;"> 
                                @csrf
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="signupusername" name="username" placeholder="Your Name" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-smile'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="email" class="form-control" id="signupemail" name="email" placeholder="Email" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-mobile-alt'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="password" class="form-control" id="signuppass" name="password" placeholder="Password" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-lock'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group">
                                        <input type="text" class="form-control" id="signupuid" name="uid" placeholder="UID" style="border-left: none;border-top: none;border-right: none;padding: 0;">
                                        <div class="input-group-append">
                                            <span class="input-group-item"><i style="margin-top: 13px; font-size: 26px; " class='bx bx-id-card'></i></span>
                                        </div>
                                    </div>

                                    <div class="input-group" style="position: relative;">
                                        <input class="btn" type="submit" value="Login"  style="background-color: #1B4AB8; color: white;">
                                        <p class="h6" style="color: black;margin-left: 50%;margin-top: -8%;font-size: .80rem; ">
                                            <a href="#" style="text-decoration: none; color: black;">Forget Password</a>
                                        </p>
                                    </div>
                                </div>    
                                    
                                

                            </form>
                        </div>

                    </div>
            </div>
            
        </div>
    </div>
</body>
</html>