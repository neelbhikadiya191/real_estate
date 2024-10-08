<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Picgram | SignUp</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
  <div class="container">
    <div class="main-container">
      <div class="main-content">
        <div class="slide-container" style="background-image: url('assets/images/mobile-frame.png')">
          <div class="slide-content" id="slide-content">
            <img src="assets/images/screen1.jpg" class="active" alt="screen1" />
            <img src="assets/images/screen2.jpg" alt="screen2" />
            <img src="assets/images/screen3.jpg" alt="screen3" />
            <img src="assets/images/screen4.jpg" alt="screen4" />
            <img src="assets/images/screen5.jpg" alt="screen5" />
          </div>
        </div>
        <div class="form-container">
          <div class="form-content box">
            <div class="logo">
              <img src="assets/images/logo.png" alt="" class="logo-img" />
            </div>
            <form action="includes/process_signup.php" class="login-form" id="signup-form" method="POST">

              <?php if (isset($_GET['error_message'])) {  ?>

                <p class="text-center alert-danger" id="error_message">
                  <?php echo $_GET["error_message"]; ?>
              </p >

              <?php } ?>


              <div class="form-group">
                <div class="login-input">
                  <input type="text" name="email" placeholder="Type your email..." required />
                </div>
              </div>

              <div class="form-group">
                <div class="login-input">
                  <input type="text" name="username" placeholder="Type your username..." required />
                </div>
              </div>

              <div class="form-group">
                <div class="login-input">
                  <input type="password" name="password" id="password" placeholder="Type your password..." required />
                </div>
              </div>

              <div class="form-group">
                <div class="login-input">
                  <input type="password" name="password_confirm" id="password_confirm"
                    placeholder="Type your password again..." required />
                </div>
              </div>

              <div class="btn-group">
                <button class="login-btn" id="signup_btn" type="submit" name="signup_btn">
                  Sign Up
                </button>
              </div>
            </form>
            <div class="or">
              <hr />
              <span>OR</span>
              <hr />
            </div>
            <div class="goto">
              <p>Already have an account? <a href="login.php">Login</a></p>
            </div>
            <div class="app-download">
              <p>Get the app.</p>
              <div class="store-link">
                <a href="#">
                  <img src="assets/images/appstore.png" alt="" />
                </a>
                <a href="#">
                  <img src="assets/images/google-play.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="links" id="links">
        <a href="#">About</a>
        <a href="#">Blog</a>
        <a href="#">Jobs</a>
        <a href="#">Help</a>
        <a href="#">Privacy</a>
        <a href="#">API</a>
        <a href="#">Terms</a>
        <a href="#">Top Accounts</a>
        <a href="#">Hashtags</a>
        <a href="#" id="dark-btn">Dark</a>
      </div>
      <div class="copyright">@ 2024 Picgram from capstone.</div>
    </div>
  </div>

  <!-- script -->

  <script>
    setInterval(() => {
      changeImage();
    }, 2000);

    function changeImage() {
      var images = document
        .getElementById("slide-content")
        .getElementsByTagName("img");

      var i = 0;

      for (i = 0; i < images.length; i++) {
        var image = images[i];

        if (image.classList.contains("active")) {
          //remove active class from this image
          image.classList.remove("active");

          //if we are at the last image, then go back to the first image
          if (i == images.length - 1) {
            var nextImage = images[0];
            nextImage.classList.add("active");
            break;
          }

          var nextImage = images[i + 1];
          nextImage.classList.add("active");
          break;
        }
      }
    }





  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>