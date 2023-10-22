<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="login">
        <div class="div">
            <div class="overlap-group">
                <div class="frame">
                    <div class="text-wrapper">Not Registered Yet?</div>
                    <div class="text-wrapper-2">Create an account</div>
                </div>
                <div class="frame-wrapper">
                    <div class="frame-2">
                        <div class="text-wrapper-3">Bergabung ke RakaFintech</div>
                        <p class="p">Sudah punya akun? Masuk</p>
                    </div>
                </div>

                <form action="sign_up" method="post">
                    <div class="frame-3">
                        <div class="text-wrapper-4">Fullname</div>
                        <input type="text" class="form-control form-control-lg" style="width: 168%;" name="fullname" placeholder="John Doe" required>
                    </div>
                    <div class="frame-4">
                        <div class="text-wrapper-4">Password</div>
                        <input type="password" class="form-control form-control-lg" style="width: 168%;" name="password" placeholder="**********" required>
                    </div>
                    <div class="frame-6">
                        <div class="checkbox">
                            <div class="check">
                                <div class="check-solid"><img class="icons-navigation" src="img/check.svg" /></div>
                            </div>
                            <div class="text-wrapper-7">Remember Me</div>
                        </div>
                    </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>