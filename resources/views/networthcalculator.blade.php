<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Zurit_about</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
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
<div class="container mainmargin">
        <div class="main">
            <section id="what-is-budget-planner">
                <div class="content">
                    <h2 class="text-center pb-4">What is a Networth Calculator</h2>
                    <p class="text-gray">
                    A Net Worth Calculator is a financial tool that evaluates an individual's wealth by subtracting their liabilities (debts) from their assets. It offers insights into one's financial health.
                    </p>
                </div>
                <div class="image">
                    <img src="img/networth1.jpg" alt="Budget Image">
                </div>
</section>

<section id="why-use-our-planner">
    <div class="content">
        <h2 class="text-center pb-4">Why Use Our Networth Calculator?</h2>
        <p class="text-gray">
        Our Net Worth Calculator isn't just a tool; it's a personalized financial guide designed to:
        </p>
        <ul class="text-list">
            <li>Offer personalized financial insights</li>
            <li>Provide comprehensive analysis of your assets and liabilities</li>
            <li>Guide financial decisions towards your objectives</li>
            <li>Help assess your overall financial health</li>
        </ul>
    </div>
    <div class="image-right">
        <img src="img/Calculator.png" alt="Budget 2 Image">
    </div>
</section>

<section id="how-it-works">
    <h2 class="text-center pb-4">How It Works</h2>
    <div class="steps">
        <div class="step">
            <h3>Step 1: Sign Up</h3>
            <p>Get started by signing up for our net worth calculator. It's quick and easy!</p>
            <img src="img/login1.png" alt="Step 1 Image">
        </div>
        <div class="step">
            <h3>Step 2: Set Your Goals</h3>
            <p>Define your financial goals and priorities. Whether it's saving, investing, or debt reduction, we've got you covered.</p>
            <img src="img/step2.png" alt="Step 2 Image">
        </div>
        <div class="step">
            <h3>Step 3: Track and Analyze</h3>
            <p>Use our intuitive dashboard to track your expenses, analyze your spending patterns, and get insights.</p>
            <img src="img/step3.png" alt="Step 3 Image">
        </div>
    </div>
</section>
<section id="budget-planning-made-simple">
    <h2 class="text-center pb-4">Net Worth Calculating Made Simple</h2>
    <p class="text-gray">
    At Zurit, we believe in simplifying the process of calculating your net worth. Our tool is designed for easy navigation and user-friendly interfaces.
    </p>
    <a href="budget_planner_dashboard.html" class="button">Go to Net Worth Calculatorr</a>
</section>

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
    <div class="fb2022-copy">Fbee 2022 copyright</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/addshadow.js"></script>
</body>
</html>