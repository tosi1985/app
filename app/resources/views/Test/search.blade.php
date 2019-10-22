<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Lisitng Categories layout template for realestate">
    <title>検索結果/search</title>
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/fonts/fontawesome/css/all.css">
    <link rel="stylesheet" href="/assets/flag-icon/flag-icon.min.css">
    <link rel="stylesheet" href="/assets/css/theme-style.css">
    <link rel="stylesheet" type="text/css" href="/assets/select2/select2.min.css">
</head>

<body>
<div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div class="main-wrapper">
        <!-- header start -->
        <div class="header-classic">
            <!-- navigation start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <nav class="navbar navbar-expand-lg navbar-classic">
                            <a class="navbar-brand" href="/index"> <img src="/assets/images/logo.png" alt=""></a>
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar top-bar mt-0"></span>
                                <span class="icon-bar middle-bar"></span>
                                <span class="icon-bar bottom-bar"></span>
                            </button>
                            
                            <div class="collapse navbar-collapse" id="navbar-classic">
                                <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">

                                    <li>
                                    <a class="nav-link" href="/index">Homepage</a>       
                                    </li>

                                    <li>
                                    <a class="nav-link" href="/framework/form">framework作成</a>       
                                    </li>

                                    <li>
                                    <a class="nav-link" href="/member">member</a>       
                                    </li>

                                </ul>

                                <div class="header-btn d-xl-block d-lg-none">
                                    <a href="login-page.html" class="btn btn-outline-primary" data-toggle="modal" data-target="#loginmodal">
                                        Login
                                    </a>
                                </div>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>   
        <!-- header close -->
        <!-- pageheader start  -->
  
        <!-- pageheader close  -->
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <!-- breadcrumb start  -->
                    <div class="custom-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active">Lisitng Categories</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- breadcrumb close  -->
                </div>
            </div>
        </div>
        <div class="space-lg space-md space-xs">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">

                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-1.jpg" alt="" class="img-fluid"></a>
                                <div class="listing-badge">注目</div>
                                <a href="#" class="listing-category-badge badge-light-brose">
                                    Office Space
                                </a>

                                <div class="like-icon"></div>

                            </div>

                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> 
                                    
                                    @foreach ($query  as $list)
                                    <a href="/framework/detail?id={{ $list->id}}">
                                    {{ $list->name }}          
                                    </a>
                                    @endforeach
                                
                                    </h3>  

                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">4.0</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Monthly</span> <br> <span class="value">$2250</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">12</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">1200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block close -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-2.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="listing-category-badge badge-light-orange">
                                    Meeting Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="#">Meeting Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Surat, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">5.0</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Hourly</span> <br> <span class="value">$50</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">3</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">360</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block close -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-3.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="listing-category-badge badge-light-purple">
                                    Coworking Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="#">Coworking Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Vadodara, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star half"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">4.5</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Weekly</span> <br> <span class="value">$250</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">24</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">2200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block close -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-3.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="listing-category-badge badge-light-purple">
                                    Office Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="#">Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Bhuj, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">4</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Weekly</span> <br> <span class="value">$350</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">20</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">2800</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block close -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-2.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="listing-category-badge badge-light-orange">
                                    Meeting Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="#">Meeting Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Surat, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">5.0</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Hourly</span> <br> <span class="value">$50</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">3</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">360</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block close -->
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                        <!-- listing block start -->
                        <div class="listing-block">
                            <div class="listing-img">
                                <a href="#"> <img src="/assets/images/listing-img-1.jpg" alt="" class="img-fluid"></a>
                                <a href="#" class="listing-category-badge badge-light-brose">
                                    Office Space
                                </a>
                                <div class="like-icon"></div>
                            </div>
                            <div class="listing-content">
                                <div class="listing-content-head">
                                    <h3 class="listing-content-head-title"> <a href="#">Heading for Office Space Title</a></h3>
                                    <p class="listing-content-head-text">Ahmedabad, Gujarat, India</p>
                                </div>
                                <div class="review-content-rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star empty"></span>
                                    <a href="#" class="rating-review">4.0</a>
                                </div>
                                <div class="listing-content-meta">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Monthly</span> <br> <span class="value">$2250</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">People</span> <br> <span class="value">12</span>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                            <span class="lable">Sq.Ft</span> <br> <span class="value">1200</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listing block close -->
                    </div>
                </div>
            </div>
        </div>
              <!-- footer section start -->
        <div class="footer-dark">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                          <!-- footer widget  -->
                        <div class="footer-widget">
                            <div class="brand-logo"><img src="/assets/images/primary-white-logo.png" alt=""></div>
                            <p class="footer-widget-text">Welcome to the largest office space marketplace in the world. This is your one-stop shop for renting coworking space, serviced offices, shared office space and virtual offices in World. </p>
                            <div class="footer-location">
                                <p class="phone-numbers">1800 123 345 789</p>
                                <p class="address">3 Doris St, North Sydney, NSW 2060</p>
                            </div>
                            <div class="social-media">
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-twitter-square"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                                <a href="#"><i class="fab fa-pinterest-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                      <!-- footer widget  -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Type of spaces</h3>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="#">Coworking space</a></li>
                                    <li><a href="#">Meeting space</a></li>
                                    <li><a href="#">Office space</a></li>
                                    <li><a href="#">Retail Space</a></li>
                                    <li><a href="#">Event space</a></li>
                                    <li><a href="#">Virtual Space</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- footer widget  -->
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-6 col-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Company</h3>
                            <div class="footer-links">
                                <ul class="list-unstyled">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="#">Clients</a></li>
                                    <li><a href="#">Team</a> </li>
                                    <li><a href="#">Help Center</a></li>
                                    <li><a href="#">Press</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                      <!-- footer widget  -->
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Language</h3>
                            <div class="footer-langauge">
                                <select class="form-control" id="select2-flag-icons">
                                      <option value="AK" data-flag="ad"> Alaska</option>
                                        <option value="HI" data-flag="ae"> Hawaii</option>
                                        <option value="in" data-flag="in"> India</option>
                                        <option value="CA" data-flag="af"> California</option>
                                        <option value="NV" data-flag="ag"> Nevada</option>
                                        <option value="OR" data-flag="ao"> Oregon</option>
                                        <option value="WA" data-flag="at"> Washington</option>
                                        <option value="AZ" data-flag="gm"> Arizona</option>
                                        <option value="CO" data-flag="az"> Colorado</option>
                                        <option value="ID" data-flag="be"> Idaho</option>
                                        <option value="MT" data-flag="bi"> Montana</option>
                                        <option value="NE" data-flag="bn"> Nebraska</option>
                                        <option value="NM" data-flag="aw"> New Mexico</option>
                                        <option value="ND" data-flag="bj"> North Dakota</option>
                                        <option value="UT" data-flag="bh"> Utah</option>
                                        <option value="WY" data-flag="bm"> Wyoming</option>
                                        <option value="AL" data-flag="br"> Alabama</option>
                                        <option value="AR" data-flag="bs"> Arkansas</option>
                                        <option value="IL" data-flag="au"> Illinois</option>
                                        <option value="IA" data-flag="ba"> Iowa</option>
                                        <option value="KS" data-flag="bt"> Kansas</option>
                                        <option value="KY" data-flag="bq"> Kentucky</option>
                                        <option value="LA" data-flag="ci"> Louisiana</option>
                                        <option value="MN" data-flag="cn"> Minnesota</option>
                                        <option value="MS" data-flag="cz"> Mississippi</option>
                                        <option value="MO" data-flag="ec"> Missouri</option>
                                        <option value="OK" data-flag="dk"> Oklahoma</option>
                                        <option value="SD" data-flag="cz"> South Dakota</option>
                                        <option value="TX" data-flag="ee"> Texas</option>
                                        <option value="TN" data-flag="cl"> Tennessee</option>
                                        <option value="WI" data-flag="cf"> Wisconsin</option>
                                        <option value="CT" data-flag="co"> Connecticut</option>
                                        <option value="DE" data-flag="cy"> Delaware</option>
                                        <option value="FL" data-flag="cu"> Florida</option>
                                        <option value="GA" data-flag="cn"> Georgia</option>
                                        <option value="IN" data-flag="cz"> Indiana</option>
                                        <option value="ME" data-flag="dm"> Maine</option>
                                        <option value="MD" data-flag="ec"> Maryland</option>
                                        <option value="MA" data-flag="cw"> Massachusetts</option>
                                        <option value="MI" data-flag="ee"> Michigan</option>
                                        <option value="NH" data-flag="hm"> New Hampshire</option>
                                        <option value="NJ" data-flag="gu"> New Jersey</option>
                                        <option value="NY" data-flag="hr"> New York</option>
                                        <option value="NC" data-flag="gr"> North Carolina</option>
                                        <option value="OH" data-flag="hn"> Ohio</option>
                                        <option value="PA" data-flag="hk"> Pennsylvania</option>
                                        <option value="RI" data-flag="ht"> Rhode Island</option>
                                        <option value="SC" data-flag="hu"> South Carolina</option>
                                        <option value="VT" data-flag="il"> Vermont</option>
                                        <option value="VA" data-flag="im"> Virginia</option>
                                        <option value="WV" data-flag="gi"> West Virginia</option>
                                </select>
                            </div>
                        </div>
                          <!-- footer widget  -->
                    </div>
                </div>
            </div>
              <!-- tiny footer  -->
            <div class="tiny-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <p class="tiny-footer-text">Copyright © 2020 Spacely Companies Inc. All rights reserved</p>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="tiny-footer-links">
                                <ul>
                                    <li><a href="#">Privacy</a></li>
                                    <li><a href="#">Terms</a></li>
                                    <li><a href="#">Cookies</a></li>
                                    <li><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- footer section close  -->
        </div>
         <!-- footer section close -->
    </div>
       <!-- Modal -->
    <div class="modal fade" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="loginmodalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- login form start -->
                    <div class="login-form border-0">
                        <div class="login-form-body">
                            <h4 class="login-form-title">Login</h4>
                            <form>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="example@gmail.com" required="">
                                </div>
                                <div class="form-group">
                                    <label id="password">Password</label>
                                    <input id="password-field" type="password" class="form-control" name="password" value="" placeholder="*************">
                                    <span toggle="#password-field" class="fa fa-fw fa-eye password-hide-icon showhidepassword"></span>
                                    <small>Must be 8-20 characters long.</small>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <div class="login-remember-password-block">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                    <label class="custom-control-label" for="rememberme">Remember Me</label>
                                </div>
                                <div class="forgot-password-link">
                                    <a href="forget-password-page.html"> Forgot Password?</a>
                                </div>
                            </div>
                        </div>
                        <div class="login-form-footer">
                            <p class="login-form-footer-text">Don’t have a Spacely account? <a href="register-page.html">Create Account</a> and we’ll set you up so you can list your space.</p>
                        </div>
                    </div>
                    <!-- login form close -->
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/main-js.js"></script>
    <script src="/assets/select2/select2.full.min.js"></script>
    <script src="/assets/select2/select2.min.js"></script>
</body>

</html>