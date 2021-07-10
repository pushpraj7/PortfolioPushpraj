<?php
if(isset($_POST['submit'])){
    $to = "bhuriy_871958@student.nitw.ac.in"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Encode+Sans+SC&family=Righteous&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <link rel="stylesheet" href="./owlcls/oc/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./owlcls/oc/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="style.css">


    <title>Pushpraj Bhuriya</title>
  </head>
  <body>
      <header class="header-content">
        <div class="main-menu">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="index.html">portfo<span style="color:purple">lio</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="ms-auto"></div>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about-ref">about</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#skills-ref">skills</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#courses-ref">courses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#education-ref">education</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#contact-ref">contact</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
        </div>


      </header>

      <main class="main-content">
        <section class="main-poster">
          <div class="container ">
            <div class="row">
              <div class="col-lg-6 col-md-12 title-site">
                <h3 class="title-text">Hey</h3>
                <h1 class="title-text text-uppercase">i am pushpraj</h1>
                <h4 class="title-text">CSE student at NIT Warangal</h4>
                <div class="buttons-site">
                  <div class="d-flex flex-row flex-wrap">
                    <button type="button" class="btn button primary-button text-uppercase" name="button">hire me</button>
                    <form action="./files/resume.pdf" method="get">
                      <button type="submit" class="btn button secondary-button text-uppercase" name="button">get resume</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-12 main-img">
                <div class="container">
                  <img src="./img/try3.png" alt="Loading" class="img-fluid">

                </div>

              </div>

            </div>
          </div>
        </section>

<!-- -------------------------------------------------------------------------------- -->

  <section id="about-ref" class="about-area">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="container mike">
            <img style="width:50%; padding-top:18%;" src="./img/mike3.png" alt="">
          </div>
        </div>

        <div class="col-lg-6 col-md-12 about-title">
            <h2 class="text-uppercase pt-5">
              <span>let me</span>
              <span>introduce</span>
              <span>myself</span>
            </h2>
            <div class="paragraph py-4 w-75">
              <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>

            <a href="index.html" download="./files/resume.pdf">
              <button type="button" class="btn button primary-button text-uppercase" name="button">download resume</button>
            </a>
        </div>

      </div>
    </div>

  </section>


<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->

  <section id="skills-ref" class="brand-area">
    <div class="container-fluid">
      <div class="first-row row">
        <div class="col-xl-6 col-lg-12 col-md-12">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo1.png" alt="Brand-1">
                </div>

            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo2.png" alt="Brand-2">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo7.jpg" alt="Brand-7">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo4.png" alt="Brand-4">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo5.png" alt="Brand-5">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo9.png" alt="Brand-9">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo3.png" alt="Brand-3">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo8.jpg" alt="Brand-8">
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-brand" >
                  <img style="display:block;width:100%;" src="./img/logo6.jpg" alt="Brand-6">
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-12 col-md-12">
          <div class="experience-area">
            <div class="d-flex flex-row years-area">
              <h2 class="p-3 years">10</h2>
              <h2>
                <span>Years</span>
                <span>Experience</span>
                <span>Working</span>
              </h2>

            </div>
            <div class="d-flex flex-row flex wrap call-area">
              <span><i class="fas fa-phone-alt fa-3x"></i></span>
              <div class="call-now">
                <a href="#" class="text-uppercase h4 font-roboto">Call Now</a>
                <span class="font-roboto py-2">(+91)-800-555-4986</span>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section>

<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->

  <section id="courses-ref" class="courses-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center courses-title">
          <h1 class="text-uppercase title-text">Courses Known</h1>
            <p class="para">
              ghgvdsgq qdggyqd gvqv qyqvd gyvqd ydgdyv dvvdqd vdgdv vqt
              cvgvdc gbhc  v v c gvwec.
            </p>
        </div>
      </div>
      <div class="container courses-list">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12" >
            <div class="courses">
              <div class="courses-img text-center py-4">
                <img style="display:block;width:70%; height:50%;padding-left:25%" src="./img/sub/dsa1.png" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase font-roboto">DSA</h5>
                <p class="card-text text-secondary">
                  here is the some quick examples of
                  th title and given things
                  which will be done.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="courses">
              <div class="courses-img text-center py-4">
                <img style="display:block;width:70%; height:50%;padding-left:25%" src="./img/sub/cn.png" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase font-roboto">CN</h5>
                <p class="card-text text-secondary">
                  here is the some quick examples of
                  th title and given things
                  which will be done.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="courses">
              <div class="courses-img text-center py-4">
                <img style="display:block;width:70%; height:50%;padding-left:25%" src="./img/sub/dbms.png" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase font-roboto">DBMS</h5>
                <p class="card-text text-secondary">
                  here is the some quick examples of
                  th title and given things
                  which will be done.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="courses">
              <div class="courses-img text-center py-4">
                <img style="display:block;width:70%; height:50%;padding-left:25%" src="./img/sub/oop.png" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase font-roboto">OOPs</h5>
                <p class="card-text text-secondary">
                  here is the some quick examples of
                  th title and given things
                  which will be done.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="courses">
              <div class="courses-img text-center py-4">
                <img style="display:block;width:70%; height:50%;padding-left:25%" src="./img/sub/daa.png" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase font-roboto">DAA</h5>
                <p class="card-text text-secondary">
                  here is the some quick examples of
                  th title and given things
                  which will be done.
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="courses">
              <div class="courses-img text-center py-4">
                <img style="display:block;width:70%; height:50%;padding-left:25%" src="./img/sub/os.png" alt="">
              </div>
              <div class="card-body text-center">
                <h5 class="card-title text-uppercase font-roboto">OS</h5>
                <p class="card-text text-secondary">
                  here is the some quick examples of
                  th title and given things
                  which will be done.
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>

  </section>

<!-- -------------------------------------------------------------------------------- -->

  <section id="education-ref" class="about-area">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <div class="about-title">
            <h1 class="text-uppercase title-h1">About my education</h1>
            <p class="para">
              lovcdgsd hbhcsd hbcds hsbc sc cbscc hscs c hbsc shh schbsc bscc scbscjc hbschscn hsc scubcs cs;
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="container carousel py-lg-5">
      <div class="owl-carousel owl-theme ">

        <div class="standard row">
          <div class="col-lg-4 col-md-12 standard-img">
            <img src="./img/nitw.png" alt="img1" class="img-fluid">
          </div>
          <div class="col-lg-8 col-md-12 about-standard">
            <h4 class="text-uppercase">B.Tech</h4>
            <p class="para">wnchwdoc uiwc uhwcu hwucw buwc ubwc uwbc uwcbjwc uwcbbuw cjbrv ej vube vuev </p>
          </div>
        </div>

        <div class="standard row">
          <div class="col-lg-4 col-md-12 standard-img">
            <img src="./img/kv.png" alt="img2" class="img-fluid">
          </div>
          <div class="col-lg-8 col-md-12 about-standard">
            <h4 class="text-uppercase">12th</h4>
            <p class="para">wnchwdoc uiwc uhwcu hwucw buwc ubwc uwbc uwcbjwc uwcbbuw cjbrv ej vube vuev </p>
          </div>
        </div>

        <div class="standard row">
          <div class="col-lg-4 col-md-12 standard-img">
            <img src="./img/kv.png" alt="img1" class="img-fluid">
          </div>
          <div class="col-lg-8 col-md-12 about-standard">
            <h4 class="text-uppercase">10th</h4>
            <p class="para">wnchwdoc uiwc uhwcu hwucw buwc ubwc uwbc uwcbjwc uwcbbuw cjbrv ej vube vuev </p>
          </div>
        </div>

      </div>

    </div>
  </section>

<!-- -------------------------------------------------------------------------------- -->

<!-- -------------------------------------------------------------------------------- -->

  <section id="contact-ref" class="contact">
    <div class="container">
      <div class="section-title">
        <h2 style="padding-left:4%;">Contact</h2>
        <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="row" data-aos="fade-in">
        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="fas fa-map-marker-alt fa-2x"></i>
              <h4>Location:</h4>
              <p class="para">Home No. 308/013, kishanpuri Jhabua, MP 457661</p>
            </div>

            <div class="email">
              <i class="fas fa-envelope-open fa-2x"></i>
              <h4>Email:</h4>
              <p class="para">bhuriy_871958@student.nitw.ac.in</p>
            </div>

            <div class="phone">
              <i class="fas fa-phone fa-2x"></i>
              <h4>Call:</h4>
              <p class="para">(+91)-822-589-7856</p>
            </div>

          <!-- google map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d13836.625056391731!2d74.62584704367842!3d22.745120357704163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1shome%20no.%20308%2F013%20kishanpuri%20jhabua%20mp!5e1!3m2!1sen!2sin!4v1625847881857!5m2!1sen!2sin" width="400" height="270" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>

        <!-- form -->
        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form class="php-email-form" action="" method="post">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" id="fname" placeholder="Name" required>
              </div>

              <div class="form-group col-md-6">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" id="lname" placeholder="Name" required>
              </div>

              <div class="form-group col-md-6">
                <label for="email">Your Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email" >
                </div>
              </div>

            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject" required>
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="10" cols="70" required></textarea>
            </div>
            <!-- button -->
            <div class="text-center">
              <button type="submit" class="btn button primary-button" name="submit">Send Message</button>
            </div>
          </form>
         </div>

        </div>

      </div>

    </div>
  </section>

<!-- -------------------------------------------------------------------------------- -->





      </main>

<!-- -------------------------------------------------------------------------------- -->

    <footer class"footer-area">
      <div class="container downn">
        <div class="ffaa">
          <div class="logo col-lg-3">
            <img style="width:50%; height:50%;" src="./img/logo.png" alt="">
          </div>
          <div class="col-lg-9 social ">
            <p class="para">Let me <span style="color:#e63946">KNOW</span> <br> if there is any <span style="color:#f1faee">POSSIBILITY</span>  to <span style="color:#00b4d8">WORK</span>  <br> <span style="color:#197278">TOGETHER !</span> </p>

            <h5 class="text-uppercase">Follow me</h5>
            <div class="icons">
              <a href="#"> <i style="color:#17AAE7;" class="fab fa-facebook fa-4x"></i> </a>
              <a href="#"> <i style="color:#A31289;" class="fab fa-instagram fa-4x"></i> </a>
              <a href="https://www.linkedin.com/in/pushpraj-bhuriya-763756205"> <i style="color:#3F66E6;" class="fab fa-linkedin fa-4x"></i> </a>
              <a href="https://github.com/pushpraj7"> <i style="color:#ffffff;" class="fab fa-github fa-4x"></i> </a>
            </div>

          </div>
          <div class="copyrights text-center">
            <p style="padding-left:12%" class="para">Copyright ©2021 All rights reserved | Developer : <a href="#" style="text-decoration:none;"> <span style="color:#ccdbfd;">Pushpraj Bhuriya</span></a> </p>
          </div>

        </div>

      </div>

    </footer>

<!-- -------------------------------------------------------------------------------- -->

      <script src="jquery.js"></script>

      <!-- bootstrap javascript file -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>


      <script src="./owlcls/oc/js/owl.carousel.min.js"></script>
      <script src="./owlcls/oc/js/owl.carousel.js"></script>

      <script src="myscript.js"></script>



  </body>
</html>
