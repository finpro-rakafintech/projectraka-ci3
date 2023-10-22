<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="<?= base_url('assets/globals.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/styleguide.css') ?>" />
  <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>" />
</head>

// Halaman Register
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
          <div class="frame-4">
            <div class="text-wrapper-4">Email</div>
            <input type="password" class="form-control form-control-lg" style="width: 168%;" name="password" placeholder="**********" required>
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
          <div id="liveAlertPlaceholder"></div>
          <button class="btn frame-7" type="submit">Login</button>
      </div>
      </form>
      <img class="rectangle" src="<?= base_url('assets/img/rectangle.jpg') ?>" />
      <img class="raka-x" src="<?= base_url('assets/img/Logo-RakaFintech.png') ?>" />
    </div>
  </div>

  <script lang="javascript">
    const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
    const appendAlert = (message, type) => {
      const wrapper = document.createElement('div')
      wrapper.innerHTML = [
        `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        ` <div><?php if ($this->session->flashdata('msg')) : ?>
              <p id="flash-msg" class="alert"><?php echo $this->session->flashdata('msg'); ?></p>
            <?php endif; ?></div>`,
        ' <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        '</div>'
      ].join('')

      alertPlaceholder.append(wrapper)
    }

    const alertTrigger = document.getElementById('liveAlertBtn')
    if (alertTrigger) {
      alertTrigger.addEventListener('click', () => {
        appendAlert('Nice, you triggered this alert message!', 'success')
      })
    }
  </script>
</body>

</html>