<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Cashzway</title>
<link rel="icon" 
      type="image/png" 
      href="img/core-img/preesoft-logo.png">
    <!-- Favicon -->
  
	   <link rel="stylesheet" href="form/fonts/material-icon/css/material-design-iconic-font.min.css">
       <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
       <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
       <link rel="stylesheet" href="css/sd_calculator.css" type="text/css">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
<script language="javascript" type="text/javascript">
  function myFunction() {
    var loan = $('#amount').val(),
        month = $('#months').val(),
        int = $('#interest').val(),
        years = $('#years').val(),
        down = $('#down').val(),
        amount = parseInt(loan),
        months = parseInt(month),
        down = parseInt(down),
        annInterest = parseFloat(int),
        monInt = annInterest / 1200,
        calculation = ((monInt + (monInt / (Math.pow((1 + monInt), months) -1))) * (amount - (down || 0))).toFixed(2);
  
    document.getElementById("output").innerHTML = calculation;
}


$(function(){
  var month = $(this).val(),
      doneTypingInterval = 500,
      months = parseInt(month),
      typingTimer;

  $('#months').keyup(function(){
      month = $(this).val();
      months = parseInt(month);
  
      clearTimeout(typingTimer);
      if (month) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    $('#years').val(months/12);  
  }
})

$(function(){
  var month = $(this).val(),
      doneTypingInterval = 500,
      months = parseInt(month),
      typingTimer;

  $('#months').keyup(function(){
      month = $(this).val();
      months = parseInt(month);
  
      clearTimeout(typingTimer);
      if (month) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    $('#years').val(months/12);  
  }
})

$(function(){
  var year = $(this).val(),
      doneTypingInterval = 500,
      years = parseInt(year),
      typingTimer;

  $('#years').keyup(function(){
      year = $(this).val();
      myears = parseInt(year);
  
      clearTimeout(typingTimer);
      if (year) {
          typingTimer = setTimeout(doneTyping, doneTypingInterval);
      }
  });

  function doneTyping () {
    $('#months').val(year * 12);  
  }
})



         </script>

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
            <style>
            
            .open
            {
                
                
                color : : #fff !important ;
                
            }
            
            .fa{
                margin-right: 5%;
            }
            .icon{
                    height: 100px;

                    padding-bottom: 20px;
                }
                
                
.subscribe-area 
  {
      
      
      background-color : #ffc107 !important;
      
      
  }
        </style>

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <!-- Line -->
        <div class="line-preloader"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- ***** Top Header Area ***** -->
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex flex-wrap align-items-center justify-content-between">
                            <!-- Top Header Meta -->
                            <div class="top-header-meta d-flex flex-wrap">
                                <a href="#" class="open" data-toggle="tooltip" data-placement="bottom" title="9 Am to 9 PM"><i class="fa fa-clock-o" aria-hidden="true"></i> <span>Opening Hours - 09 Am to 09 PM</span></a>
                                <!-- Social Info -->
                                <div class="top-social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                            <!-- Top Header Meta -->
                            <div class="top-header-meta">
                                <a href="mailto:info.deercreative@gmail.com" class="email-address"><i class="fa fa-envelope" aria-hidden="true"></i> <span>info@cashzway.ca</span></a>
                                <a href="#" class="phone"><i class="fa fa-phone" aria-hidden="true"></i> <span>416 243 2100</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Top Header Area ***** -->

        <!-- ***** Navbar Area ***** -->
        <div class="crose-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="croseNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="img/core-img/preesoft-logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    
                                      
                  
                  
                  <li><a href="#">Loans / Advance </a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="installment-loans.php">Installment Loans</a></li>
                                                 <li><a href="application-form.php">Apply Now</a></li>
                         <li><a href="installment-loans-faq.php">FAQs</a></li>
                                                <li><a href="eligibility-calculator.php">Eligibility Calculator</a></li>
                                                
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="Cash-advance.php">Cash Advance</a></li>
                         <li><a href="cash-advance-faq.php">How it works</a></li>
                                                 <li><a href="application-form.php">Apply Now</a></li>
                         <li><a href="cash-advance-faq.php">FAQs</a></li>
                        <li><a href="cash-advance-pricing.php">Pricing</a></li>
                                                <li><a href="cash-advance-dept-repayment.php">Debt Repayment</a></li>
                                                <li><a href="loan-comparison.php">Compare Loans</a></li>
                                                <li><a href="#">Payment Calculator</a></li>
                                            </ul>
                                                 <ul class="single-mega cn-col-4">
                                                 <li><a href="loan-comparison.php">Mortagage Finance</a></li>
                                                <!--<li><a href="#">Payment Calculator</a></li>-->
                        
                                            </ul>
                                         
                                        </div>
                                    </li>
                  
                  
                     <li><a href="#"> Consumer Services </a>
                                        <ul class="dropdown">
                                            <li><a href="titanium.php">Titanium + Prepaid</a></li>
                                            <li><a href="cheque-cashing.php">Cheque Cashing</a></li>
                                            <li><a href="currency-exchange.php">Currency Exchange</a></li>
                      <li><a href="bill-payments.php">Bill Payment</a></li>
                                            <li><a href="bill-payments.php">Rapid X </a></li>
                                             <li><a href="western-union.php">Western Union </a></li>

                                        </ul>
                                    </li>
                     <li><a href="#"> Other Services</a>
                                        <ul class="dropdown wdth_css">
                                            <li><a href="#">Tax Filling</a></li>
                                            <li><a href="#">Courier Services</a></li>
                                            <li><a href="#">Calling Card</a></li>
                                            <li><a href="#">Accounting & Book Keeping</a></li>
                                         
                                        </ul>
                                    </li>
                  <li><a href="cheque-cashing.php"> Cheque Cashing </a></li>
                                  <li><a href="#"> Gold & Silver </a></li>

                 <li><a href="#"> About</a>
                                        <ul class="dropdown">
                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact-us.php">Contact us</a></li>
                                            <li><a href="careers.php">Careers</a></li>
                       <li><a href="#">Corporate</a></li>
                      <li><a href="#">Consumer Education</a></li>
     
                                         
                                        </ul>
                                    </li>
                  
                                    <li><a href="#"> Store</a></li>
                                 
                                </ul>

                                <!-- Donate Button -->
                                <a href="#" class="btn crose-btn header-btn">Apply Now</a>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ***** Search Form Area ***** -->
            <div class="search-form-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="searchForm">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Enter keywords &amp; hit enter...">
                                    <button type="submit" class="d-none"></button>
                                </form>
                                <div class="close-icon" id="searchCloseIcon"><i class="fa fa-close" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Navbar Area ***** -->
    </header>
    <!-- ##### Header Area End ##### -->
