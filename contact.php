<?php
    //   echo '<script>alert("Welcome")</script>';
      $messageSent=false;
      if(isset($_POST['email']) && $_POST['email'] != ''){
         
          if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
             
              $userName = $_POST['name'];
              $emailName = $_POST['email'];
              $message = $_POST['message'];
         
             
              $headers = "From: " . $_POST['email'] . "\r\n";
              $headers .= "Reply-To: ". $_POST['email'] . "\r\n";
              $headers .= "CC: admin@irisind.in\r\n";
              $headers .= "MIME-Version: 1.0\r\n";
              $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
              $actual_link = 'https://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] . "\r\n";
              $ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
             
           
           
              $to = "admin@irisind.in";
              $body = "";
             
         
             
              $body = '<html><body>';
              $body .= '<h3><b>The following are the details filled by ' . $userName . ' in IRIS Diagnostic website Contact form. </b></h3>';
              $body .= '<table  rules="all" style="border:2px solid #000;font-family:calibri, sanserif;" width="600">
              <thead>
                <tr>
                 <th style="padding:5px 8px;border-right:1px solid #2c5dbe; background:#2c5dbe;color:white;font-size: 1.2rem;"><strong>IRIS Diagnostics</strong></th>
                 <th style="background:#2c5dbe;"></th>
                </tr>
              </thead>
              
              <tr >
              <td style="padding:5px 8px;color: white;background: #2c5dbe;border-top: 2px solid white;border-left: 2px solid #000;"><strong>Patient Name</strong></td>
              <td style="padding:5px 8px"><b>' . $userName . '</b></td>
              </tr>
              
              <tr >
              <td style="padding:5px 8px;color: white;background: #2c5dbe;border-top: 2px solid white;border-left: 2px solid #000;"><strong>Email</strong></td>
              <td style="padding:5px 8px"><b>' . $emailName . '</b></td>
              </tr>
              
              <tr >
              <td style="padding:5px 8px;color: white;background: #2c5dbe;border-top: 2px solid white;border-left: 2px solid #000;"><strong>Message</strong></td>
              <td style="padding:5px 8px"><b>' . $message . '</b></td>
              </tr>
              
              <tr >
              <td style="padding:5px 8px;color: white;background: #2c5dbe;border-top: 2px solid white;border-left: 2px solid #000;"><strong>Enquiry From</strong></td><td style="padding:5px 8px"><b>' . strip_tags($actual_link ) . '</b></td>
              </tr>
              
              <tr >
              <td style="padding:5px 8px;color: white;background: #2c5dbe;border-top: 2px solid white;border-left: 2px solid #000;"><strong>IP</strong></td><td style="padding:5px 8px"><b>' . strip_tags($ip ) . '</b></td>
              </tr>
              
              </table>';
              
              $body .= "</body></html>";
         
              mail($to,$userName,$body, $headers );
          $messageSent=true;
          }
        else{
          $messageSent=false;  
        }
      }
     ?>  
     

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- FONTAWESOME -->
    <script
      src="https://kit.fontawesome.com/177f718e6e.js"
      crossorigin="anonymous"
    ></script>
    <!-- owlcarousel -->
    <link
      rel="stylesheet"
      href="./assets/js/owlcarousel/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="./assets/js/owlcarousel/owl.theme.default.min.css"
    />
    <link rel="stylesheet" href="./assets/main.css" />
    <link rel="stylesheet" href="./assets/style/contact.css" />
    <!-- whtasapp  -->
    <link rel="stylesheet" href="./assets/style/floating-wpp.min.css" />
    <title>Contact</title>
  </head>
  <body>
    <!-- Floating whatsapp  -->
    <div class="floating-wpp"></div>
    <div class="social">
      <!-- <a href="#">Whatsapp<i class="fab fa-whatsapp"></i></a> -->
      <a href="tel:+91-8142201414"
        >Make a Call<i class="fa-solid fa-phone"></i
      ></a>
    </div>
    
    

    <!-- HEADER -->
    <header>
      <div class="container">
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg">
              <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                  <img src="./assets/images/iris-diag-logo.png" alt="" />
                </a>
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarNav"
                  aria-controls="navbarNav"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <!-- <span class="navbar-toggler-icon"></span> -->
                  <span><i class="fa-solid fa-bars fa-2x"></i></span>
                </button>
                <div
                  class="collapse navbar-collapse justify-content-end"
                  id="navbarNav"
                >
                  <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        aria-current="page"
                        href="index.html"
                        >Home</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <!-- <li class="nav-item">
                      <a class="nav-link" href="#">Service</a>
                    </li> -->
                    <li class="nav-item">
                      <a class="nav-link" href="gallery.html">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link onapp" href="onlineapp.html"
                        >Book Appointment</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- HEADER -->

    <!-- SUB-HEADER -->
    <section class="sub_header mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="content">
              <div class="title mx-auto">
                <!-- <p>Nice to meet you</p> -->
                <!-- <h2>&#8722; CONTACT US &#8722;</h2> -->
                <h2>
                  <i class="fa-solid fa-receipt"></i> CONTACT US
                  <i class="fa-solid fa-receipt"></i>
                </h2>
              </div>
              <!-- <p class="desc">
                It is managed by a team that follows patient service & and
                Quality norms & monitors work flow & user satisfaction levels in
                accordance with applicable accredition standards.
              </p> -->
            </div>
          </div>
        </div>
      </div>
      <div class="place_image">
        <img src="./assets/images/pattern.svg" class="w-100" alt="" />
      </div>
    </section>
    <!-- SUB-HEADER -->
    


    <!-- CONTACT US -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col">
            <!-- <h2>Contact Us</h2> -->
          </div>
        </div>
        <div class="row pt-5 mt-5">
          <div class="col-md-8">
            <div class="contact_form">
                <form action="" method="POST" class="comment">
                            <div class="row">
                               
                              <div class="col-md-6">
                                <div class="mb-3">
                                 <label for="name" class="form-label">Patient name *</label>
                                 <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name"        />
                                </div>
                              </div>
                                
                              <div class="col-md-6">  
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email"  name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email"   />
                                </div>
                              </div>
                              
                                <div class="mb-3">
                                 <label for="message" class="form-label">Message *</label>
                                 <textarea name="message"  id="message" cols="30"  rows="4" class="form-control"  placeholder="Enter message"></textarea>
                                </div>
                
                                <div class="col-12">
                                    <input type="submit" class="btn_submit" value="Submit">
                                    <a href="tel:+91-8142201414" class="reachus mx-auto my-2">Reach Us &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-phone"></i></a>
                                </div>
 
                            </div>
                   </form>
                   
                   
              <!--<form action="" method="POST" class="comment">-->
              <!--  <div class="mb-3">-->
              <!--    <label for="name" class="form-label">Patient name *</label>-->
              <!--    <input-->
              <!--      type="text"-->
              <!--      name="name"-->
              <!--      class="form-control"-->
              <!--      id="name"-->
              <!--      aria-describedby="nameHelp"-->
              <!--      placeholder="Enter name"-->
              <!--    />-->
              <!--  </div>-->

              <!--  <div class="mb-3">-->
              <!--    <label for="message" class="form-label">Message *</label>-->
              <!--    <textarea-->
              <!--      name="email"-->
              <!--      id="message"-->
              <!--      cols="30"-->
              <!--      rows="4"-->
              <!--      class="form-control"-->
              <!--      placeholder="Enter message"-->
              <!--    ></textarea>-->
              <!--  </div>-->

              <!--  <button class="btn_submit" type="submit" value="send now">Submit</button>-->
              <!--  <a href="tel:+91-8142201414" class="reachus mx-auto my-2"-->
              <!--    >Reach Us &nbsp;&nbsp;&nbsp;<i class="fa-solid fa-phone"></i-->
              <!--  ></a>-->
              <!--</form>-->
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="contact_details">
              <table>
                <tr>
                  <td>
                    <span><i class="fa-solid fa-location-dot fa-2x"></i></span>
                  </td>
                  <td><h3>Adsdress</h3></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <p>
                      #9-4-84/19, Building No.19,Nanal Nagar, Opp GM
                      Garden,Mehdipatnam , Hyderabad – 500008.
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span><i class="fa-solid fa-phone fa-2x"></i></span>
                  </td>
                  <td><h3>MAKE AN APPOINTMENT</h3></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <p>
                      814 220 1133 / 44 / 55 <br />
                      +91-8142201414
                    </p>
                  </td>
                </tr>
                <tr>
                  <td>
                    <span><i class="fa-solid fa-envelope fa-2x"></i></span>
                  </td>
                  <td><h3>E-MAIL US</h3></td>
                </tr>
                <tr>
                  <td></td>
                  <td><p>Iris4ddiagnostic@gmail.com</p></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT US -->

    <!-- MAP -->
    <section class="mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.401051767348!2d78.42307671538339!3d17.392530707233536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb96e3ccd0f71f%3A0x459ffe981f00c603!2sIris%20Diagnostics!5e0!3m2!1sen!2sin!4v1647283063835!5m2!1sen!2sin"
              width="100%"
              height="250"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
            ></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- MAP -->

    <!-- CALL TO ACTION -->
    <section class="cta">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="cta__content">
              <div class="content">
                <p>
                  If you Have Any Questions Call Us On &nbsp;&nbsp; 814 220 1133
                  / 44 / 55
                </p>
              </div>
              <div class="cta_btn">
                <a href="onlineapp.html">Make An Appointment</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CALL TO ACTION -->

    <!-- FOOTER START -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 mbf">
            <a href="index.html" class="mb-4 d-block">
              <img
                src="./assets/images/Iris-logo-white.png"   alt=""  class="footer_logo"    />
            </a>
            <p>
              IRIS scans was started in 2008 to bring high end ultrasound
              technology solutions to patients outside the frame work of
              corporate hospitals.Emphasis on technology...
            </p>
          </div>

          <div class="col-md-3">
            <h3>Quick Links</h3>

            <div class="row">
              <div class="col-md-6">
                <ul class="quick__links">
                  <li>
                    <a href="ultrasound.html">Ultrasound Services</a>
                  </li>
                  <li><a href="laboratory.html">Laboratory Services</a></li>
                  <li><a href="cardiology.html">Cardiology Services</a></li>
                </ul>
              </div>
              <div class="col-md-6 mbf">
                <ul class="quick__links">
                  <li><a href="xray.html">X-RAY SERVICES</a></li>
                  <li><a href="neurology.html">NEUROLOGY SERVICES</a></li>
                  <li>
                    <a href="gastroenterology.html"
                      >GASTROENTEROLOGY SERVICES</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-3 mbf">
            <h3>Contact Us</h3>
            <table>
              <tr>
                <td><i class="fa-solid fa-house"></i></td>
                <td>
                  #9-4-84/19, Building No.19, Nanal Nagar, Opp GM Garden, Mehdipatnam,
                  <br>Hyderabad – 500008. Telangana, India
                </td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-envelope"></i></td>
                <td>admin@irisind.in</td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-phone"></i></td>
                <td>814 220 1133 / 44 / 55</td>
              </tr>
            </table>
          </div>
          <div class="col-md-3">
            <h3>Working Hours</h3>
            <table>
              <tr>
                <td>MON-SAT</td>
                <td>7:00 AM - 9:00 PM</td>
              </tr>

              <tr>
                <td>SUN</td>
                <td>7:00 AM - 1:00 PM</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="gototop">
        <span><i class="fa-solid fa-angle-up"></i></span>
      </div>
    </footer>
    <div class="footer__bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="iris-social">
              <ul
                class="social-icons icon-circle icon-rotate list-unstyled list-inline"
              >
                <li>
                  <a href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-youtube-play"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-google-plus"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 copyright">
            © 2022 Iris Diagnostics. All Rights Reserved.
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER END -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="./assets/js/isotopic.min.js"></script>
    <script src="./assets/js/owlcarousel/owl.carousel.min.js"></script>
    <!-- whtasapp  -->
    <script src="./assets/js/floating-wpp.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <script>
      $(document).ready(function () {
        $(function () {
          $(".floating-wpp").floatingWhatsApp({
            phone: "+91 8142201414",
            popupMessage: "Message Us Here",
            showPopup: true,
            message: "",
            headerTitle: "Welcome to IRIS Diagnostics",
            position: "left",
          });
        });
      });
    </script>
  </body>
</html>
