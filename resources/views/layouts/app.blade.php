<!DOCTYPE html>

<script>
    window.APIURL  = "";
    window.BASEURL = "";
    window.LOGOSURL  = "https://s3.ca-central-1.amazonaws.com/logojoy/logos";
    window.env = "prod";

    window.state = localStorage.state ? JSON.parse(localStorage.state):{};
    window.imgsrc = 'https://s3.ca-central-1.amazonaws.com/logojoy/images'


</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/ddd2yebd';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>
<html>
<head>
    <title>Logorobot | Make a Logo Design Online</title>

    <link rel="stylesheet" href="/css/legacy.css">
    <meta property="og:description" content="Logorobot - A logo maker for simple, beautiful logos.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.logorobot.net" />
    <meta name="description" content="Logorobot is a logo maker that uses artificial intelligence, so it feels like you're working with a real designer and the results are amazing. Our free, easy-to-use online logo maker helps you create an amazing logo in seconds. No design experience necessary — Try It For Free Now!" />
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">

</head>
<body class="landing">

<!-- trigger button for registration -->
<a id="onpage-registration" data-toggle="modal" data-target="#signupModal" data-backdrop="static" data-keyboard="false"  class="active" style="height:0;opacity:0;" data-callback="onpage"></a>


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal">
    <div class="modal-dialog modal__login" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Log In</h3>
                <form id="login-form" name="login">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <p class="alert alert-danger hidden"></p>
                        <button class="btn btn-primary btn-full">Log In</button>
                    </div>
                </form>
                <div class="modal-change">
                    <a data-toggle="modal" data-target="#passwordresetModal" data-dismiss="modal" data-keyboard="false">Forgot Password?</a>  <a data-toggle="modal" data-target="#signupModal" data-dismiss="modal">Create an account</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModal">
    <div class="modal-dialog modal__login" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Create an Account</h3>
                <form id="signup-form" name="signup">
                    <div class="form-group">
                        <input class="form-control" type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="lname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <p class="alert alert-danger hidden"></p>
                        <button class="btn btn-primary btn-full">Sign Up</button>
                    </div>
                </form>
                <div class="modal-change">
                    <a data-toggle="modal" id="loginModalLink" data-target="#loginModal" data-dismiss="modal" data-keyboard="false">Already have an account?</a>
                </div>
            </div>
            <div class="modal-footer">By signing up, you agree to our <a>terms of service</a></div>
        </div>
    </div>
</div>

<div class="modal fade" id="passwordresetModal" tabindex="-1" role="dialog" aria-labelledby="passwordresetModal">
    <div class="modal-dialog modal__login" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Send Reset Email</h3>
                <p class="p1 center">
                    Enter your account email below to recieve reset instructions
                </p>
                <form id="passwordreset-form" name="passwordreset">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <p class="alert alert-danger hidden"></p>
                        <button class="btn btn-primary btn-full">Send</button>
                    </div>
                </form>
                <div class="modal-change">
                    <a data-toggle="modal" data-target="#loginModal" data-dismiss="modal" data-keyboard="false">Back to login</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="passwordretypeModal" tabindex="-1" role="dialog" aria-labelledby="passwordresetModal">
    <div class="modal-dialog modal__login" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Reset Password</h3>
                <p class="p1 center">
                    Enter a new password for your account.
                </p>
                <form id="passwordretype-form" name="passwordretype">
                    <div class="form-group">
                        <input type="hidden" name="activation_token">
                        <input class="form-control" type="password" name="password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <p class="alert alert-danger hidden"></p>
                        <button class="btn btn-primary btn-full">Reset Password</button>
                    </div>
                </form>
                <div class="modal-change">
                    <a data-toggle="modal" data-target="#loginModal" data-dismiss="modal">Back to login</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="top-bar-landing">
    <div class="container">
        <a href="./" class="logo"></a>
        <ul class="nav nav-left">
            <li><a href="./">Tour</a></li>
            <li><a href="./#pricing">Pricing</a></li>
            <li><a href="./how.php">How it works</a></li>
        </ul>
        <ul class="nav nav-right">
            <li><a data-toggle="modal" href="#loginModal" data-target="#loginModal" rel="modal">Login</a></li>
            <li><a data-toggle="modal" href="#loginModal" data-target="#signupModal" class="signup" rel="modal">Signup</a></li>
        </ul>
    </div><!-- end container -->
</div><!-- end top bar -->
<!-- Load  App -->

<section class="main-content">
    <div class="landing">

        <section class="hero section">
            <div class="container">
                <div class="content center">
                    <h1>Logojoy makes it <strong>easy and fun</strong> to create a logo that you'll be proud of.</h1>
                    <div class="company-name-container">
                        <form action="/app">
                            <input type="text" name="company_name" value="" placeholder="Company name">
                            <button type="submit" target="_blank" class="button huge">Make your logo</button>
                        </form>
                    </div><!-- end company name form -->
                </div><!-- end content -->
            </div><!-- end container -->
        </section><!-- end hero -->


        <section class="section press center">
            <div class="container">
                <div class="press-logo taxi" data-parallax='{"x" : -100}'></div>
                <div class="press-logo tc" data-parallax='{"x" : -50}'></div>
                <div class="press-logo dw"></div>
                <div class="press-logo cr" data-parallax='{"x" : 50}'></div>
                <div class="press-logo lh" data-parallax='{"x" : 100}'></div>
            </div><!-- end container -->
        </section><!-- end press -->


        <aside class="case-study beanery">
            <div class="container">
                <div class="case-content" data-parallax='{"y" : -100}'>
                    <div class="case-logo"></div>
                    <span class="case-line">The Beanery Coffee Roasters, Chicago</span>
                </div><!-- end case content -->
            </div><!-- end container -->
        </aside>

        <div class="section stats center">
            <div class="container">
                <div class="stat">
                    <h1 class="logos-made">412,974</h1>
                    <p>Logos made to date</p>
                </div><!-- end -->
                <div class="stat">
                    <div class="stars"></div>
                    <p>Avg. customer rating</p>
                </div><!-- end -->
            </div><!-- end container -->
        </div><!-- end press -->

        <div class="container talking">
            <h1>Design your logo with the best tool.</h1>
            <p>Using artificial intelligence and advanced learning algorithms, our logo maker is able to produce designs just like a designer would. Whether you're starting a blog or re-branding your business, our online logo design tool will make it easy for you to get a great logo.</p>
            <a href="app.php" target="_blank" class="button">Design your logo</a>
        </div><!-- end talking -->


        <div class="section story">
            <div class="container" id="particles-js">
                <div class="content">
                    <p>Logojoy was <strong>created by award-winning designers</strong> who believe that technology can empower anyone to be a designer. <br><br>We use <strong>artificial intelligence, premium design assets, and a delightful experience</strong> to provide professional-quality design instantly and 10x cheaper.</p>
                    <div class="line"></div>
                    <div class="quick-testimonial">
                        <h3>“The result is astonishingly good, actually.”</h3>
                        <h6>- Haje Jan Kamps, <a href="https://techcrunch.com/2016/12/01/logojoy-makes-designers-unemployed/" target="_blank">TechCrunch</a></h6>
                    </div><!-- end quick testimonial -->
                </div><!-- end content -->
            </div><!-- end cta -->
        </div><!-- end story -->

        <div class="section two-points">
            <div class="container">
                <div class="point production-ready">
                    <h1>Production-ready files</h1>
                    <p>Your new logo comes with ready-to-go files for use in print or digital. We deliver everything a designer would.</p>
                </div><!-- end point -->
                <div class="point fully-custom">
                    <h1>Fully custom logos</h1>
                    <p>We don’t use templates, instead we generate each logo as needed, so you can be sure it’s unique.</p>
                </div><!-- end point -->
            </div><!-- end container -->
        </div><!-- end two-points -->

        <div class="section examples">
            <div class="container">
                <h1>Incredible logos made easy</h1>
                <p>With more premium fonts, icons and graphics than any other logo maker, making a great logo has never been so easy.</p>
            </div><!-- end container -->
            <div class="logo-examples-wrapper">
                <div class="logo-examples">
                    <div class="logo-example e1"></div>
                    <div class="logo-example e2"></div>
                    <div class="logo-example e3"></div>
                    <div class="logo-example e4"></div>
                    <div class="logo-example e5"></div>
                    <div class="logo-example e6"></div>
                    <div class="logo-example e7"></div>
                    <div class="logo-example e8"></div>
                    <div class="logo-example e9"></div>
                </div><!-- end logo examples -->
            </div><!-- end logo examples wrapper -->
            <h1 class="mt80">Create a logo using the best logo maker in the world.</h1>
            <a href="app.php" class="button hover">Make your logo</a>
        </div><!-- end step1 -->

        <div class="section pricing" id="pricing">
            <div class="container">
                <span class="designer-callout"></span>
                <div class="package-option basic reg" data-package="basic">
                    <h5>Basic</h5>
                    <h1 class="update">$<span class="price">20</span></h1>
                    <ul class="points">
                        <li>Low resolution logo</li>
                        <li>Colored background</li>
                    </ul>
                    <a href="#" class="button light">Get started</a>
                    <h6 class="fine-print">USD</h6>
                </div><!-- end package option -->
                <div class="package-option premium discountable" data-package="premium">
                    <h5>Premium</h5>
                    <h1 class="update">$<span class="price">65</span></h1>
                    <div class="old-prices">
                        <h6 class="crossed-out">was $130</h6>
                        <h6 class="green">save 50%</h6>
                    </div><!-- end old prices -->
                    <ul class="points col">
                        <li>High resolution PNG</li>
                        <li>Vector EPS and SVG files</li>
                        <li>Transparent PNG</li>
                        <li>Lifetime phone support</li>
                        <li>Font names & color palette</li>
                        <li>Brand guidelines</li>
                        <li>Social media assets</li>
                        <li>Professional watermark</li>
                        <li>Full copyright ownership</li>
                        <li>Make changes and re-download</li>
                        <li>Print-ready</li>
                        <li><a href="https://s3.ca-central-1.amazonaws.com/logojoy/logos/moovaudio.zip" target="_target">View Sample Deliverable</a></li>
                        <!-- <li>Email signature</li> -->
                    </ul>
                    <a href="#" class="button">Get started</a>
                    <h6 class="fine-print">USD</h6>
                </div><!-- end package option -->
                <div class="package-option reg enterprise">
                    <h5>Enterprise</h5>
                    <h1>$165</h1>
                    <ul class="points">
                        <li>Everything in Premium</li>
                        <li>One hour design session with one of our designers</li>
                    </ul>
                    <a href="#" class="button light">Get started</a>
                    <h6 class="fine-print">USD</h6>
                </div><!-- end package option -->
            </div><!-- end container -->
        </div><!-- end cta -->
        <div class="section cta">
            <h1>Join thousands of companies using Logojoy.</h1>
            <a href="app.php" target="_blank" class="button">Make your logo</a>
        </div><!-- end cta -->

    </div>
</section>


<footer class="footer">
    <div class="container">
        <div class="cols">
            <div class="col">
                <h6>Logojoy</h6>
                <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="./how">How it works</a></li>
                    <li><a href="./#pricing">Pricing</a></li>
                    <li><a href="./app">Logo Maker</a></li>
                    <li><a href="http://blog.logojoy.com/" target="_blank">Blog</a></li>
                </ul>
            </div><!-- end col -->
            <div class="col">
                <h6>Company</h6>
                <ul>
                    <li><a href="./about">About us</a></li>
                    <li><a href="./contact">Contact us</a></li>
                    <li><a href="./partners">Partners</a></li>
                    <li><a href="./press">Press</a></li>
                    <li><a href="./affiliate-program">Affiliate Program</a></li>
                    <li><a href="https://angel.co/logojoy/jobs/" target="_blank">We're hiring!</a></li>
                </ul>
            </div><!-- end col -->
            <div class="col">
                <h6>Support</h6>
                <ul>
                    <li><a href="http://help.logojoy.com/" target="_blank">Help Center</a></li>
                    <li><a href="mailto:support@logojoy.com" target="_blank">support@logojoy.com</a></li>
                    <li><a href="tel:18889660917">1 (888) 966-0917</a></li>
                </ul>
            </div><!-- end col -->
        </div>
        <div class="social-container">
            <ul>
                <li><a href="https://www.facebook.com/logojoyapp/" target="_blank" class="facebook"></a></li>
                <li><a href="https://www.instagram.com/logojoyapp/" target="_blank" class="instagram"></a></li>
                <li><a href="https://twitter.com/logojoyapp" target="_blank" class="twitter"></a></li>
                <li><a href="https://dribbble.com/logojoy" target="_blank" class="dribbble"></a></li>
                <li><a href="https://www.linkedin.com/company/logojoy" target="_blank" class="linkedin"></a></li>
                <li><a href="https://angel.co/logojoy" target="_blank" class="angellist"></a></li>
            </ul>
        </div>
        <div class="logo-container">
            <a href="" class="logo"></a>
            <p class="copyright">&copy; 2017 Logojoy Inc. <a href="./privacy">Privacy</a> / <a href="./terms">Terms</a></p>
        </div><!-- end logo-container -->
    </div><!-- end container -->
</footer><!-- end footer -->
<!--
<script scssdist/js/vendor.min.js"></script>-->

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/logorobot.js?v=42"></script>

<script>
    //window.state && window.state.token ? GetUser():{};
    if(!window.state.lastview) window.state.lastview = null;
</script>
</body>
</html>
<script>
</script>
