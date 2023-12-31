
<?php
 include __DIR__ . '/../../controllers/insert_user.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="../../assets/css/loginStyle.css">

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../assets/css/globalStyleFoter-header.css">
</head>
<body>

  <header role="banner">
    <nav class="navbar navbar-expand-md navbar-dark bg-light text-dark">
      <div class="container">
        <a class="navbar-brand text-dark" href="../index.html">Brand</a>
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

        <div class="container containerImg">
            <img id="registerimage" src="../../assets/img/Frame 2.svg" alt="image">
          </div>

        <div class="container">
          <form  method="POST" class="was-validated needs-validation" id="form">
            <h2>Please Fill out form to Register!</h2>
            <form id="register-form">
              <div class="form-group">
                <label for="fullname" for="validationCustom01" >Full name :</label>
                <input type="text" name="fullname" class="form-control" id="validationCustom01" pattern="[A-Za-z]+ +[A-Za-z]{3,}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please enter the correct name.
                </div>
              </div>
              <div class="form-group">
                <label for="username">Username :</label>
                
                <input type="text" name="Username" class="form-control" id="validationCustomUsername" id="username" required pattern="[A-Za-z0-9_%+\-]{4,}">
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please choose a correct username.
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" name="email" id="validationCustomUsername" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" class="form-control" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please choose your email.
              </div>
              <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" name="passwords" id="password" class="form-control" pattern=".{6,}" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
                <div class="invalid-feedback">
                  Please choose a password of at least six characters.
              </div>
              </div>
              <div class="form-group">
                <label for="confirm-password">Confirm password :</label>
                <input type="password" name="confirm_password" id="confirm-password"  pattern=".{6,}" required>

                <div class="valid-feedback" id="valid-feedback-confirm">
                  Formulaire soumis avec succès
                </div>


                <div class="invalid-feedback" id="invalid-feedback-confirm">
                  Les mots de passe ne correspondent pas
              </div>
              </div>
              <div class="form-group">
                <button type="submit">Register</button>
              </div>
            </form>
            <p style="width: 100%; text-align: center;"><a class="creatCpt" href="login.php">Yes i have an account? <strong> Login</strong></a></p>
            <!-- <div class="social-media-icones" style="width: 100%; text-align: center;">
                <a href="#"><img src="../assets/img/Social media icons.svg" height="30px" alt="icon"></a>
            </div> -->
          </form>
        </div>
    </section>

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

    
<script type="text/javascript" src="../../assets/js/registerScript.js"></script>

<script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    
</body>
</html>
