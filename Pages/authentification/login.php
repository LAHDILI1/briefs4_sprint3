<?php
// include __DIR__ . '/../../controllers/login_user.php';

// global $Username_error;
// $Username_error = '';
// global $passwords_error;
// $passwords_error='';

// if(isset($_POST['submit'])) {
  
//   submit($Username_error,$passwords_error);
// }

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="../../assets/css/loginStyle.css">
    
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../assets/css/globalStyleFoter-header.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  
<!-- <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi nisi error unde, corrupti libero necessitatibus, consequatur rem eligendi optio, animi possimus a eveniet. Quas sunt laborum molestiae exercitationem praesentium sed!</h1> -->

  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-light text-dark">
      <div class="container">
        <a class="navbar-brand text-dark" href="index.html">Brand</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-dark"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
            <li class="nav-item">
              <a class="nav-link active text-dark" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Recipes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item text-dark" href="#">Food Catering</a>
                <a class="dropdown-item text-dark" href="#">Drink &amp; Beverages</a>
                <a class="dropdown-item text-dark" href="#">Wedding &amp; Birthday</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">News</a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item cta-btn">
              <a class="nav-link text-dark" href="#">Contact Us</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
  </header>


    <section class="containerGlobal">

        <div class="container">
            <h2>Welcome Back!</h2>
            <form id="register-form" action="../../controllers/login_user.php" method="POST">
              <div class="form-group">
                <label for="email">Username:</label>
                <input name="Username" type="text" value="<?php if(isset($_SESSION["Username"])) echo $_SESSION["Username"];?>" class="form-control" pattern="[A-Za-z0-9_%+\-]{4,}" id="email" required>
                <!-- <div class="invalid-feedback"></div> -->
                <div style="display:block;" class="invalid-feedback" ><?php if(!empty($_SESSION["Username_error"])) echo $_SESSION["Username_error"];?></div>
              </div>
              <div class="form-group">
                <label for="password">Password:</label>

                <input name="passwords" type="password" value="<?php if(isset($_SESSION["passwords"])) echo $_SESSION["passwords"];?>" id="password" pattern=".{6,}" class="form-control" required>
                <div style="display:block;" class="invalid-feedback">
                <?php if(!empty($_SESSION["passwords_error"])) echo $_SESSION["passwords_error"];?>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" name="submit">Login</button>
              </div>
            </form>
            <p style="width: 100%; text-align: center;"><a class="creatCpt" href="register.php">Dont  have and account? <strong> Register</strong></a></p>
            <!-- <div class="social-media-icones" style="width: 100%; text-align: center;">
                <a href="#"><img src="../assets/img/Social media icons.svg" height="30px" alt="icon"></a>
            </div> -->
          </div>

          <div class="container containerImg">
            <img src="../../assets/img/Frame 1.svg" alt="image">
          </div>

          <?php
           // remove all session variables
            session_unset();

           // destroy the session
           session_destroy();
            ?>

    </section>
   
    
      <!-- <script>
        const form = document.getElementById('register-form');
    
        form.addEventListener('submit', function(event) {
          event.preventDefault();
    
          const email = document.getElementById('email').value;
          const password = document.getElementById('password').value;
    
          if (email === '' || password === '') {
            alert('Veuillez remplir tous les champs');
          } else {
            alert('Formulaire soumis avec succès');
            form.reset();
          }
        });
      </script> -->

<footer>
  <!-- tp-footer-area-start -->
  <div class="tp-footer-area footer-bg pt-130">
    <div class="container">
      
      <div class="row">
        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-30">
          <div class="tp-footer-widget z-index-3">
            <div class="tp-footer-widget__title">
              <h4 class="tp-footer-title">Product</h4>
            </div>
            <div class="tp-footer-widget__list">
              <ul>
                <li><a href="index.html">Landing Page</a></li>
                <li><a href="#">Popup Builder</a></li>
                <li><a href="#">Web-design</a></li>
                <li><a href="#">Content</a></li>
                <li><a href="#">Integrations</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-2 col-md-3 col-6 mb-30">
          <div class="tp-footer-widget footer-space-one z-index-3">
            <div class="tp-footer-widget__title">
              <h4 class="tp-footer-title">Use Cases</h4>
            </div>
            <div class="tp-footer-widget__list">
              <ul>
                <li><a href="#">Web-designers</a></li>
                <li><a href="#">Marketers</a></li>
                <li><a href="#">Small Business</a></li>
                <li><a href="#">Website Builder</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-30">
          <div class="tp-footer-widget footer-space-two z-index-3">
            <div class="tp-footer-widget__title">
              <h4 class="tp-footer-title">Resources</h4>
            </div>
            <div class="tp-footer-widget__list">
              <ul>
                <li><a href="#">Academy</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="#">Themes</a></li>
                <li><a href="#">Hosting</a></li>
                <li><a href="#">Developers</a></li>
                <li><a href="contact.html">Support</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-3 col-6 mb-30">
          <div class="tp-footer-widget footer-space-three z-index-3">
            <div class="tp-footer-widget__title">
              <h4 class="tp-footer-title">Product</h4>
            </div>
            <div class="tp-footer-widget__list">
              <ul>
                <li><a href="index.html">Landing Page</a></li>
                <li><a href="#">Popup Builder</a></li>
                <li><a href="#">Web-design</a></li>
                <li><a href="#">Content</a></li>
                <li><a href="#">Integrations</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-12 mb-30">
          <div class="tp-footer-widget z-index-3">
            <div class="tp-footer-widget__title">
              <h4 class="tp-footer-title">Contact Us</h4>
            </div>
            <div class="tp-footer-widget__list">
              <ul class="footer-position">
                <li>
                  <a href="#" target="_blank">
                    <span><i class="fal fa-map-marker-alt"></i></span>
                    Wisconsin Ave, Suite 700 Chevy Chase, Maryland 20815</a
                  >
                </li>

                <li>
                  <a href="tel:778886664">
                    <span><i class="fal fa-phone-alt"></i></span>
                    088 (778 886 664)</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <br />
      <br />

      <div class="copy-right-wrapper z-index-3">
        <div class="row">
          <div class="col-xl-6 col-lg-7 col-12">
            <div class="copyright-left text-center text-lg-start">
              <p>©Copy RIght @2023 All Rights Reserved - C3Group</p>
            </div>
          </div>
          <div class="col-xl-6 col-lg-5 col-12">
            <div class="copyright-right-side text-center text-lg-end">
              <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Sales and Refunds</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script
src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
crossorigin="anonymous"
></script>
<script
src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
crossorigin="anonymous"
></script>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
</body>
</html>