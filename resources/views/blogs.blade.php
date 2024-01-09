<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Zurit_Blogs</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="blogs_res/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="blogs_res/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="blogs_res/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="blogs_res/img/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="blogs_res/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="blogs_res/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="blogs_res/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="css/style.css">
      
   </head>
   <main>
   <nav class="navbar nav-dark navbar-expand-lg fixed-top py-3">
        <div class="container">
        <a class="navbar-brand" href="index.html">
            <img src="{{ asset('img/logo-white3.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="{{ url('/about') }}">About us</a>
              </li>
              <li class="nav-item dropdown d-md-inline">
  <a class="nav-link dropdown-toggle" href="#" id="prosperityToolsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Prosperity Tools
  </a>
  <div class="dropdown-menu" aria-labelledby="prosperityToolsDropdown">
    <a class="dropdown-item" href="{{ url('budgetplanner') }}">Budget Planner</a>
    <a class="dropdown-item" href="{{ url('networthcalculator') }}">Networth Calculator</a>
    <a class="dropdown-item" href="{{ url('debtmanager') }}">Debt Manager</a>
    <a class="dropdown-item" href="{{ url('investmentplanner') }}">Investment Planner</a>
  </div>
</li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('training.html') }}">Training</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('contactus') }}">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('books') }}">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('blogs') }}">Blogs</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
              </li>-->
              <li class="nav-item">
              <a href="{{ url('login') }}"><button class="btn-item">Join Us</button></a>
              </li>
            </ul>
          </div>
        </div>
</nav>
<!-- Loop through blog posts fetched from the database -->
<div class="container mainmargin">
    <div class="row">
    @foreach ($blogs as $blog)
<div class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="card card-custom">
                    <img src="{{ asset('blogs_res/img/' . $blog->blog_image) }}" class="card-img-top" alt="Blog Image">
                    <div class="card-body card-body-custom">
                        <div class="like_icon"><img src="{{ asset('blogs_res/img/like-icon.png') }}"></div>
                        <p class="post_text">Posted On: {{ $blog->created_at }}</p>
                        <h2 class="most_text">{{ $blog->blog_title }}</h2>
                        <p class="lorem_text">{{ $blog->blog_summary }}</p>
                        <div class="social_icon_main">
                            <div class="social_icon">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('blogs_res/img/fb-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('blogs_res/img/twitter-icon.png') }}"></a></li>
                                    <li><a href="#"><img src="{{ asset('blogs_res/img/instagram-icon.png') }}"></a></li>
                                </ul>
                            </div>
                            <div class="read_bt"><a href="#">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <!-- Sidebar content or other details -->
                <!-- Example: -->
                <div class="image_5"><img src="{{ asset('blogs_res/img/some_image.png') }}"></div>
                <h1 class="about_taital">Recent Posts</h1>
                <p class="about_text">Some recent posts text or sidebar content</p>
                <div class="read_bt_1"><a href="#">Read More</a></div>
            </div>
        </div>
    </div>
</div>
@endforeach


</div>
</div>


<footer class="py-5">
          <div class="container">
            <div class="row">
              <div class="footer-item col-md-3">
              <!--<img src="img/logo-white3.png" style="width: 50% height: 50%"alt="">-->
                <p>Adress: Zuidier Complex</p>
                <p>Ngumo, Off Mbagathi Road</p>
                <p>Nairobi, KE </p>
                <p>Phone: 254-7000000</p>
                <p>Email: info@zuritconsulting.com</p>
              </div>
              <div class="footer-item col-md-3">
                <p class="footer-item-title">Services</p>
                <p class="footer-text">Budget Management:</p>
                <p>Financial Training</p>
                <p>Investment Advisory</p>
                <p>Debt Management</p>
              </div>
              <div class="footer-item col-md-3">
                <p class="footer-item-title">Links</p>
                <a href="">About Us</a>
                <a href="">Home</a>
                <a href="">Training</a>
                <a href="">Contact Us</a>
              </div>
              <div class="footer-item col-md-3">
              <p class="footer-item-title">Get In Touch</p>
                <form>
                  <div class="mb-3 pb-3">
                    <label for="exampleInputEmail1" class="form-label pb-3">Enter your email and we'll send you more information.</label>
                    <input type="email" placeholder="Your Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <button type="submit" class="btn btn-primary">Subscribe</button>
                </form>
              </div>
              <div class="copyright pt-4 text-center text-muted">
                <p>&copy; 2023 ZURIT CONSULTING</p>
                
            </div>
          </div>
        </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/addshadow.js"></script>
</body>
</html>
