<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Training_Zurit</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="training_res/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top py-1">
        <div class="container">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo-white3.png') }}" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('about') }}">About us</a>
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
                <a class="nav-link" href="{{ url('training') }}">Training</a>
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
              <li class="nav-item">
              <a href="{{ url('login') }}"><button class="btn-item">Join Us</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
    
      <section class="training_section">
      <h1>Our <span class="monthly_text">Monthly</span> Training Solutions</h1>
          <div class="text-container">              
            <div class="content-right">
                <table>
                    <thead>
                        <tr>
                            <th>Training</th>
                            <th>Program Details</th>
                            <th>ROI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Prosperity Blue Print</td>
                            <td>This masterclass is a 10-week program tailored to individuals, covering the fundamentals of personal finance and investments.</td>
                            <td>
                                <p>We impart our clients with practical knowledge on:</p>
                                <ul>
                                    <li>Wealth building principles.</li>
                                    <li>Best practices for building wealth.</li>
                                    <li>How and where to invest</li>
                                    <li>How to systemize your investment processes.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>Business Structuring Masterclass</td>
                            <td>This masterclass is a 10-week program tailored to SMEs, imparting them with skills crucial in building resilient and sustainable businesses.</td>
                            <td>                        
                                <ul>
                                    <li>How to track business financial performance.</li>
                                    <li>How to streamline an organization's processes.</li>
                                    <li>This program accords the clients an opportunity to expand their networks.</li>
                                </ul>
                            </td>
                        </tr>

                        <tr>
                            <td>Fundamentals of Investments-Trustees</td>
                            <td>This is a three day intense training for pension trustees focused on grounding them</td>
                            <td>                        
                                <ul>
                                    <li>Understand the operations of the Various asset classes</li>
                                    <li>Know how to create winning portfolios for schemes and the individuals</li>
                                    <li>Get a free consultation for the trustees</li>
                                </ul>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
          </div>
      </section>

      <section class="solutions_section">
      <h1>Our <span class="monthly_text">Solutions</span></h1>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="/training_res/img/Self-help-Group-Chama.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carousel_text">Chama Investment Solution (CIS)</h5>
        <p class="carousel_paragraph">Some description for TIS...</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/training_res/img/trustees.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="carousel_text">Trustees Investment Solution (TIS)</h5>
        <p class="carousel_paragraph">Some description for TIS...</p>
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
          
</section>

<section class="contact-us" id="contact-us">
  <div class="container">
    <h2 style= "color:#F2AE30;">Book an appointment with us Today!</h2>
    <div class="contact-content">
      <div class="map">
        <!-- Rate Card -->
        <img src="training_res/img/rate-card.png" alt="Rate Card" style="width: 500px; height: 500px">
      </div>
      <div class="contact-form">
      <form action="">
          <input type="text" placeholder="Your Name">
          <input type="email" placeholder="Your Email">
          <input type="date" placeholder="Booking Date">
          <textarea placeholder="Additional Information"></textarea>
          <button type="submit">Book Now</button>
      </form>
          <div class="contact-icons">
          <div class="contact-icon">
              <i class="fas fa-phone"></i>
              <p>+254 759 092 412</p>
          </div>
          <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
              <p>Zuidier Complex, <br>Mbagathi Hospital Road<br>Off Mbagathi Way</p>
          </div>
          <div class="contact-icon">
              <i class="fas fa-envelope"></i>
              <p>info@zuritconsulting.com</p>
          </div>
      </div>
      </div>
    </div>
  </div>
</section>


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
      
</body>    
    