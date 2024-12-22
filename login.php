<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SAW</title>
    <link rel="icon" href="assets/image/logo.png">    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
</head>

<body>
    <div id="auth">
    <div class="f"></div>
    <div class="b">
        <div class="c">
            <div class="t">
                <div class="box">
                    <!-- <div class="bn"> -->
                        <img src="assets/image/team2.png" alt="">
                        <h1>ProTeam</h1>
                        <p>This Team Is Legend</p>
                    </div>
                <!-- </div> -->
            </div>
            <div class="v">
                <div class="z" id="ket"> Team7</div>
                <div class="x" id="ket">Log in</div>
                <form action="login-act.php" method="post">
                <div class="em" id="ket">Username</div>
                <input type="text" id="emi" class="form-control form-control-xl" placeholder="Username" name="username" required>
                <div class="ep" id="ket">Password</div>
                <input type="password" id="epi" class="form-control form-control-xl" placeholder="Password" name="password" require>
                <button class="lb btn btn-primary btn-block btn-lg shadow-lg mt-5 text-white" type="submit">Login</button>
                </form>
                
            </div>
        </div>
    </div>

    </div>
</body>

</html>
