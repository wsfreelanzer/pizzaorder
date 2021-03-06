<?php include 'includes/header.php'; ?>

  <!-- Login Form Start -->
  <div class="section">

    <div class="imgs-wrapper">
      <img src="assets/img/veg/11.png" alt="veg" class="d-none d-lg-block">
      <img src="assets/img/prods/3.png" alt="veg" class="d-none d-lg-block">
    </div>

    <div class="container">
      <div class="auth-wrapper">

        <div class="auth-description bg-cover bg-center dark-overlay dark-overlay-2" style="background-image: url('assets/img/auth.jpg')">
          <div class="auth-description-inner">
            <i class="flaticon-chili"></i>
            <h2>Welcome Back!</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          </div>
        </div>
        <div class="auth-form">

          <h2>Log in</h2>

          <form method="post">

            <div class="form-group">
              <input type="text" class="form-control form-control-light" placeholder="Username" name="username" value="">
            </div>
            <div class="form-group">
              <input type="password" class="form-control form-control-light" placeholder="Password" name="password" value="">
            </div>
            <a href="#">Forgot Password?</a>
            <button type="submit" class="btn-custom primary">Login</button>            

            <p>Don't have an account? <a href="register.php">Create One</a> </p>

          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Login Form End -->
  
  <?php include 'includes/footer.php'; ?>