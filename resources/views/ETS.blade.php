<!DOCTYPE html>
<html lang="en">

<head>
  <title>Frans's page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/css/styles1.css">
  <script src="/js/script.js"></script>
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <ul class="navbar-nav" style="margin-left: 2em;">
      <li class="nav-item">
        <a class="nav-link text-light" style="font-size: 17px;" href="#">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto" style="margin-right: 2em;">
      <li class="nav-item">
        <a class="nav-link text-light" style="font-size: 17px;" href="#aboutme">About Me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" style="font-size: 17px;" href="#education">Education</a>
      </li>
      <li class="nav-item text-*right">
        <a class="nav-link text-light" style="font-size: 17px;" href="#moments">Moments</a>
      </li>
      <li class="nav-item text-*right">
        <a class="nav-link text-light" style="font-size: 17px;" href="#contact">Contact Me</a>
      </li>
    </ul>
  </nav>

  <!-- Home Page -->
  <div class="jumbotron jumbotron-fluid jumbobackground">
    <div class="container-fluid">
      <div class="text-center" style="margin-top: 15em;">
        <h2 class="text-light">Welcome to my page!</h2>
        <h1 class="text-light">IT'S NICE TO MEET YOU</h1>
        <a href="#aboutme" class="btn btn-secondary" style="font-size:20px" role="button">Learn More!</a>
      </div>
    </div>
  </div>

  <!-- About Me -->
  <div class="container aboutme" style="margin-bottom:7em;padding-top:5em;" id="aboutme">
    <div class="text-center">
      <h1>ABOUT ME!</h1>
    </div>
    <div class="row">
      <div class="col-sm-5">
        <img class="gambargede" src="{{ asset('./image/fotofrans.png')}}" alt="">
      </div>
      <div class="col-sm-7 text-start bg-dark text-light" style="margin-top:40px;border-radius:25px">
        <h2 style="font-size:25px;padding-top:20px">
          Welcome to my corner of the digital realm! I'm Frans Nicklaus Gusyanto, a passionate Information Systems
          student at Institut Teknologi Sepuluh Nopember. This website is not just a personal space; it's a gateway to
          my world, where I blend technology, sports, and a zest for coding and competitive programming. I'm currently
          trying a couple of new things like web design and UI/UX.</h2>
      </div>
    </div>
  </div>

  <!-- Education -->
  <div class="container-fluid edu-bg" id="education" style="padding-top:7em;padding-bottom:7em">
    <div class="text-center">
      <h1 style="margin-bottom:2em">MY EDUCATION</h1>
    </div>
    <div class="row">
      <div class="col-sm-4 text-center">
        <img src="{{ asset('./image/SD.jpeg')}}" class="rounded education" alt="" style="margin-bottom:2em">
        <h4><a href="https://st.caroline.sch.id/">Saint Caroline Junior High</a></h4>
        <h6><span class="badge badge-pill badge-dark" style="font-size:15px">2010-2016</span></h6>
      </div>
      <div class="col-sm-4 text-center">
        <img src="{{ asset('./image/SMP.jpg')}}" class="rounded education" alt="" style="margin-bottom:2em">
        <h4><a href="https://st.caroline.sch.id/">Saint Caroline Junior High</a></h4>
        <h6><span class="badge badge-pill badge-dark" style="font-size:15px">2016-2019</span></h6>
      </div>
      <div class="col-sm-4 text-center">
        <img src="{{ asset('./image/SMA.jpg')}}" class="rounded education" alt="" style="margin-bottom:2em">
        <h4><a href="https://fonsvitae-1.sch.id/">Fons Vitae 1 High School</a></h4>
        <h6><span class="badge badge-pill badge-dark" style="font-size:15px">2019-2022</span></h6>
      </div>
    </div>
  </div>

  <!-- Memorable Moments -->
  <div class="container-fluid" id="moments" style="padding-top: 4em;">
    <div class="text-center">
      <h1 style="margin-bottom:2em;margin-top:2em">Memorable Moments</h1>
    </div>
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{ asset('./image/logistik.jpeg')}}" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="trans-dark" style="margin-left:auto;margin-right:auto;width: 15em;">
                  <h5>KKR Logistik PKMBK</h5>
                  <p>4 Agustus 2023</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('./image/batikday.jpeg')}}" alt="Second slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="trans-dark" style="margin-left:auto;margin-right:auto;width: 15em;">
                  <h5>Batik Day 2023</h5>
                  <p>2 Oktober 2023</p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('./image/isclass.JPG')}}" alt="Third slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="trans-dark" style="margin-left:auto;margin-right:auto;width: 15em;">
                  <h5>Operator IS Class</h5>
                  <p>27 Agustus 2023</p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact form -->
  <div class="container-fluid formbackground" id="contact" style="margin-top:4em;padding-top:1em">
    <div class="text-white">
      <div class="text-center">
        <h1 class="contact">CONTACT ME</h1>
        <h4 style="padding-bottom:2em">Get to know me better!</h4>
      </div>
      <form class="needs-validation" action="https://wa.me/+6282297907465" method="post" novalidate>
        <div class="row">
          <div class="col-sm-1"></div>
          <div class="col-sm-5">
            <div class="form-group contact-pad">
              <select class="form-control form-control-lg" id="exampleFormControlSelect1">
                <option>Invitation</option>
                <option>Reply</option>
                <option>Chatting</option>
                <option>Work-related</option>
              </select>
            </div>
            <div class="form-group contact-pad">
              <input type="text" class="form-control form-control-lg" id="nama" placeholder="Your Name*" required>
              <div class="invalid-feedback">
                Please enter your name
              </div>
            </div>
            <div class="form-group contact-pad">
              <input type="text" class="form-control form-control-lg" placeholder="Your Phone Number*" id="phone" required>
              <div class="invalid-feedback">
                Please enter a valid phone number
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="form-group">
              <textarea class="form-control" placeholder="Enter Your Message" id="message" rows="8" required></textarea>
              <div class="invalid-feedback">
                Please enter your message
              </div>
            </div>
          </div>
          <div class="col-sm-1"></div>
        </div>
        <div class="container-fluid text-center">
          <button type="submit" class="btn btn-secondary" style="font-size: 25px;">SUBMIT</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Footer -->
  <div class="container-fluid">
    <footer class="page-footer font-small blue">
      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-3">
          <div class="footer-copyright py-3" style="padding-left: 20px;">© 2023 Copyright:
            <a href="https://fransnicklaus.github.io/"> fransnicklaus.github.io</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="text-center" style="padding-top: 6px;padding-bottom:auto">
            <div style="display: inline;">
              <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/franspulse10" aria-label="Twitter"
                style="border-radius:999px">
                <svg class="svg-inline--fa" aria-hidden="true" focusable="false" data-prefix="fab"
                  data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                  data-fa-i2svg="">
                  <path fill="currentColor"
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                  </path>
                </svg>
              </a>
            </div>
            <div style="display: inline;">
              <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/frans.nicklaus/"
                aria-label="Facebook" style="border-radius: 999px;">
                <svg class="svg-inline--fa" aria-hidden="true" focusable="false" data-prefix="fab"
                  data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                  data-fa-i2svg="">
                  <path fill="currentColor"
                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                  </path>
                </svg>
              </a>
            </div>
            <div style="display: inline;">
              <a class="btn btn-dark btn-social mx-2" style="border-radius: 999px;"
                href="https://www.linkedin.com/in/fransnicklaus/" aria-label="LinkedIn">
                <svg class="svg-inline--fa" aria-hidden="true" focusable="false" data-prefix="fab"
                  data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                  data-fa-i2svg="">
                  <path fill="currentColor"
                    d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                  </path>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>
