<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="<?=base_url('assets/globals.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/styleguide.css')?>" />
    <link rel="stylesheet" href="<?=base_url('assets/style.css')?>" />
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
              <div class="text-wrapper-3">Login to your Account</div>
              <p class="p">See what is going on with your business</p>
            </div>
          </div>

    <form action="sign_in" method="post">
          <div class="frame-3">
            <div class="text-wrapper-4">Email</div>
            <input type="email" class="form-control form-control-lg" style="width: 168%;" name="email" placeholder="example@mail.com">
          </div>
          <div class="frame-4">
            <div class="text-wrapper-4">Password</div>
            <input type="password" class="form-control form-control-lg" style="width: 168%;" name="password" placeholder="**********">
          </div>
          <div class="frame-6">
            <div class="checkbox">
              <div class="check">
                <div class="check-solid"><img class="icons-navigation" src="img/check.svg" /></div>
              </div>
              <div class="text-wrapper-7">Remember Me</div>
            </div>
            <div class="text-wrapper-8">Forgot Password?</div>
          </div>
          <button class="btn frame-7" type="submit">Login</button>
        </div>
    </form>
        <img class="rectangle" src="<?=base_url('assets/img/rectangle.jpg')?>" />
        <img class="raka-x" src="<?=base_url('assets/img/Logo-RakaFintech.png')?>" />
      </div>
    </div>
  </body>
</html>
