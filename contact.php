<?php

    $error = ""; $successMessage = "";

    if ($_POST) {

        if (!$_POST["email"]) {

            $error .= "An email address is required.<br>";

        }

        if (!$_POST["content"]) {

            $error .= "The content field is required.<br>";

        }

        if (!$_POST["subject"]) {

            $error .= "The subject is required.<br>";

        }

        if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {

            $error .= "The email address is invalid.<br>";

        }

        if ($error != "") {

            $error = '<div class="alert alert-danger" role="alert"><p>There were error(s) in your form:</p>' . $error . '</div>';

        } else {

            $emailTo = "info@example.co.uk"; //replace the email address with your here

            $subject = $_POST['subject'];

            $content = $_POST['content'];

            $headers = "From: ".$_POST['email'];

            if (mail($emailTo, $subject, $content, $headers)) {

                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent, we\'ll get back to you ASAP!</div>';


            } else {

                $error = '<div class="alert alert-danger" role="alert"><p><strong>Your message couldn\'t be sent - please try again later</div>';

            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RESTAURANT</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </head>
  <body>

    <section id="nav-bar">
      <nav class="navbar navbar-expand-sm navbar-custom">
          <a href="/" class="navbar-brand">RESTAURANT NAME</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCustom">
              <i class="fa fa-bars fa-lg py-1 text-white"></i>
          </button>

          <div class="navbar-collapse collapse" id="navbarCustom">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MENU
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="Dinner.pdf">DINNER</a>
                          <a class="dropdown-item" href="Dessert.pdf">DESSERT</a>
                      </div>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT</a>
                  </li>
              </ul>
          </div>
      </nav>
    </section>


    <!--Image Slider-->
    <div id="slider">
      <div id="headerSlider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
          <li data-target="#headerSlider" data-slide-to="1"></li>
          <li data-target="#headerSlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/img3.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/img2.png" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="img/img1.png" class="d-block w-100">
          </div>
        </div>
        <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!--CONTACT US-->
    <section id="enquiry">
      <div class="borders">
        <div class="about-content">
          <h1>Your Enquiry</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <hr>

          <div id="error"></div>
            <form method="post">
              <fieldset class="form-group">
                <label for="email"><b>Email Address</b></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
              </fieldset>
              <fieldset class="form-group">
                <label for="subject"><b>Subject</b></label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter email subject">
              </fieldset>
              <fieldset class="form-group">
                <label for="exampleTextarea"><b>Your Enquiry</b></label>
                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter your enquiry"></textarea>
              </fieldset>
              <button type="submit" id="submit" class="btn-submit">Submit</button>
            </form>

            <hr>

            <div class="reservation">
              <p><b>Location:</b> 675 Example Address Avenue, Example City</p>
              <p><b>Email:</b> example@email.com</p>
              <p><b>Tel:</b> +44 116 287 5739</p>
            </div>
        </div>
        </div>
     </section>


    <!--<section id="contact">
      <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
          <div class="contact-info">

            <div class="follow">
              <i class="fa fa-id-badge"></i> <a>Full Name</a>
            </div>

            <div class="follow">
              <i class="fa fa-phone"></i><a href="tel:">Mobile Number</a>
            </div>

            <div class="follow">
              <i class="fa fa-envelope"></i><a href="mailto:"> Email Address </a>
            </div>
        </div>
      </div>
    </section>-->

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>


    <script type="text/javascript">

          $("form").submit(function(e) {

              var error = "";

              if ($("#email").val() == "") {

                  error += "The email field is required.<br>"

              }

              if ($("#subject").val() == "") {

                  error += "The subject field is required.<br>"

              }

              if ($("#content").val() == "") {

                  error += "The content field is required.<br>"

              }

              if (error != "") {

                 $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');

                  return false;

              } else {

                  return true;

              }
          })

    </script>

    <!--footer-->
    <section id="footer">
      <div class="socials">
        <a class="socials" href="mailto: "><i class="fa fa-envelope"></i></a> <!-- mailto:example@gmail.com -->
        <a href="tel: "><i class="fa fa-phone"></i></a> <!-- tel:+447564987654 -->
        <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a> <!--enter instagram link inside href tags like: href="https://www.instagram.com"-->
        <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a> <!--enter twitter link inside href tags like: href="https://www.twitter.com"-->
      </div>
      <p class="footer-msg">Developed by <a href="https://isbdevelopers.com/">www.isbdevelopers.com</a></p>
    </section>

  </body>
</html>
