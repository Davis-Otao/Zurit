<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams">
    <title>Zurit Consultancy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top py-1">
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
                <a class="nav-link active" aria-current="page" href="{{ url('index') }}">Home</a>
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
      <header class="header-background">
        <div class="img-circle"><img src="img/second-circle.svg" alt=""></div>
        <div class="img-dots"><img src="img/dots.svg" alt=""></div>
        <div class="container">
            <div class="header row py-md-5">
                <div class="header-text col-md-6">
                    <h1>Zurit <span class="consult-text" style="color: #F2AE30">Consulting</span></h1>
                    <p>We are a bespoke Wealth Management Company focused on both individuals and corporates looking at growing wealth sustainably.</p>
                    <a class="btn btn-light header-btn">Read More <img src="img/arrow-right.svg" alt="" style="width:20px"></a>
                </div>
            </div>
        </div>
    </header>
    <main>

<section class="light-section2">
    <div class="solutions_heading">
        <h2>Our Solutions</h2>
    </div>
    <div class="video-container">
        <video id="sectionVideo" controls autoplay>
            <source src="{{ asset('videos/zurit.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>


        <section class="light-gray-section py-5">
          <div class="container">
            <div class="row">

              <div class="col-lg-6 text">
              <h2>Why Choose Us</h2>
              <p class="sub-header">At Zurit Financial Consultancy, we stand out in the financial consulting industry for several compelling reasons:</p>
            <ol class="ps-0 col-lg-9">
              <li>
                Financial Expertise
                <p>Benefit from our wealth of experience and expertise in wealth management and financial planning. Our track record speaks for itself.</p>
              </li>
              <li>
                Tailored Solutions 
                <p>We customize financial strategies to meet your unique goals and challenges, ensuring your plan is as individual as you are.</p>
              </li>
              <li>
                Unwavering Commitment
                <p>We're passionately committed to your financial prosperity. Our core values drive us to work tirelessly to help you achieve your financial goals.</p>
              </li>
            </ol>
            </div>
          </div>
        </div>
          <div class="bg-img">
          <img src="img/why-us.png" alt="">
          </div>
      </section>
        <section class="light-section">
            <div class="container text-center">
                <h2>How It Works: Accessing Prosperity Tools</h2>
                <p class="sub-header">Easily understand how to access and use the prosperity tools on our website</p>
                <div class="row light-section-items">
                    <div class="light-section-item col-md-4">
                        <img src="img/signup.svg" alt="">
                        <p class="title">Step 1: Sign Up or Log In</p>
                        <p>Sign up for an account if you're new, or log in if you're a returning user to access our prosperity tools.</p>
                        <a>More <img src="img/arrow-right.svg" alt="" style="width:20px"></a>
                    </div>
                    <div class="light-section-item col-md-4">
                        <img src="img/finance.svg" alt="">
                        <p class="title">Step 2: Choose Your Tool</p>
                        <p>Explore our suite of prosperity tools. Whether you need a budget planner, investment calculator, net worth calculator, or debt management, we've got you covered.</p>
                        <a>More <img src="img/arrow-right.svg" alt="" style="width:20px"></a>
                    </div>
                    <div class="light-section-item col-md-4">
                        <img src="img/manage.svg" alt="">
                        <p class="title">Step 3: Start Managing Your Finances</p>
                        <p>Input your financial data and goals, save your progress, and track your financial journey. Access personalized recommendations to help you achieve financial success.</p>
                        <a>More <img src="img/arrow-right.svg" alt="" style="width:20px"></a>
                    </div>
                 </div>
            </div>
        </section>
        <section class="contact-us" id="contact-us">
  <div class="container">
    <h2>Contact Us</h2>
    <div class="contact-content">
      <div class="map">
        <!-- Embed your map here -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.772966870618!2d36.79918977496576!3d-1.3116021986759463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f139a2af6edab%3A0xa6fa99525e66f680!2sZuidier%20Ltd.!5e0!3m2!1sen!2ske!4v1699780330698!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="contact-form">
        <form action="">
          <input type="text" placeholder="Your Name">
          <input type="email" placeholder="Your Email">
          <textarea placeholder="Your Message"></textarea>
          <button type="submit">Send Message</button>
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
        <div class="light-gray-section bottom py-5">
          <div class="img-circle-left"><img src="img/circle.svg" alt=""></div>
          <div class="img-circle-right"><img src="img/circle.svg" alt=""></div>
          <div class="container">
            <h2>Check testimonials for our satisfied clients</h2>
            <div id="carouseltestimonials" class="carousel slide w-100" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="testimonial">
                    <div class="client">
                      <div class="photo"><img style="height: 90%; width: 90%;" src="img/Davis.jpg" alt=""></div>
                        <p class="name">Davis Otao</p>
                        <p class="position">DevOps Engineer</p>
                    </div>
                    <div class="testimonial-text">
                      <p>Zurit Financial Consultancy has been an invaluable asset to our team, providing expert financial guidance tailored to the unique challenges of our DevOps environment. Their strategic insights and tailored solutions have significantly optimized our financial processes. With a commitment to excellence, their team's responsiveness and proactive approach set them apart. I highly recommend Zurit Financial Consultancy to any DevOps professional seeking top-notch financial expertise.</p>
                    </div>
                    <div class="quote"><img src="img/left-quote.svg" alt=""></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="testimonial">
                    <div class="client">
                      <div class="photo"><img style="height: 90%; width: 90%;" src="img/Bramwel.jpg" alt=""></div>
                        <p class="name">Bramwel Tum</p>
                        <p class="position">Project Manager</p>
                    </div>
                    <div class="testimonial-text">
                      <p>Zurit Financial Consultancy has been an indispensable partner for our project management team. Their astute financial solutions and strategic insights have played a pivotal role in optimizing our project budgets and resource allocations. The team's responsiveness and dedication to client success make them stand out in the industry. I enthusiastically recommend Zurit Financial Consultancy to any project manager seeking a reliable financial ally for project success.</p>
                    </div>
                    <div class="quote"><img src="img/left-quote.svg" alt=""></div>
                  </div>
                </div>
                <div class="controllers">
                  <button  type="button" data-bs-target="#carouseltestimonials" data-bs-slide="prev">
                    <img src="img/arrow-left.svg" alt="" style="width:40px">
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button  type="button" data-bs-target="#carouseltestimonials" data-bs-slide="next">
                    <img src="img/arrow-right.svg" alt="" style="width:40px">
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>   
            </div>
             <!--PARTNERS SECTION-->
             <div class="container">
    <h2>Our Partners</h2>
    <div class="partners-grid">
        <img src="img/beyond-the-stethescope.png" alt="Logo 1">
        <img src="img/college-of-insurance.png" alt="Logo 2">
        <img src="img/kozi.png" alt="Logo 3">
        <img src="img/look-up-tv.png" alt="Logo 4">
        <img src="img/mol logistics.png" alt="Logo 5">
        <img src="img/mywage-pay.png" alt="Logo 6">
        <img src="img/nca.png" alt="Logo 7">
        <img src="img/nita.png" alt="Logo 8">
        <img src="img/parkland.png" alt="Logo 9">
        <img src="img/salaam.png" alt="Logo 10">
        <img src="img/sinapis.png" alt="Logo 11">
        <img src="img/sme.png" alt="Logo 12">
        <img src="img/taaj.png" alt="Logo 13">
    </div>
</div>
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
                <p>&copy; 2024 ZURIT CONSULTING</p>
                
            </div>
          </div>
        </footer>
    </main>
    <div class="fb2022-copy"> 2022 copyright</div>

    <script>
    const video = document.getElementById('sectionVideo');
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.5 // Intersection ratio to consider (0.5 means at least 50% of the element is visible)
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                video.play();
                observer.unobserve(entry.target);
            }
        });
    }, options);

    observer.observe(document.querySelector('.light-section2'));
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/addshadow.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
