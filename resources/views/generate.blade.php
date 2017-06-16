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
    <title>Logorobot</title>

    <link rel="stylesheet" href="/css/legacy.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="app">

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
<!--<div class="tooltip" id="tooltip"></div>
<div class="tooltip hold-below" id="tooltip"></div>-->
<div id="alert-modal">
    <div class="alert-outer">
        <div class="alert-middle">
            <div class="alert" id="close-modal">
                <p>Are you sure you want to close this modal?</p>
                <ul>
                    <li><a href="#" rel="close-alert" data-option="cancel">Cancel</a></li>
                    <li><a href="#" class="highlighted">Close</a></li>
                </ul>
            </div><!-- end alert -->
        </div><!-- end alert middle -->
    </div>
</div>


<div id="overlay" class="overlay hidden">
    <div class="vheight">
        <div class="vcell">
            <div class="loader hidden"></div>
            <h5 class="hidden"></h5>
        </div>
    </div>
</div>
<header>
    <nav class="main-navbar__app">
        <a id="toggle-side-nav" class="btn-hamburger">&nbsp;</a>
        <a id="btn-previous" class="btn-previous"><img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/back-arrow-white@2x.png"></a>
        <img class="top-bar-logo" src="https://s3.ca-central-1.amazonaws.com/logojoy/images/logojoy-logo-white.png">

        <ul class="menu-right hidden">
            <li class="action" data-tooltip="Share" data-tooltip-class="below" data-toggle="modal" data-target="#shareDialog"><img class="icon" src="https://s3.ca-central-1.amazonaws.com/logojoy/images/share@2x.png"></li>
            <li class="action" onclick="window.duplicateLogo()" data-tooltip="Duplicate" data-tooltip-class="below"><img class="icon" src="https://s3.ca-central-1.amazonaws.com/logojoy/images/duplicate@2x.png"></li>
            <li class="action" onclick="window.favoriteLogo(false)" data-tooltip="Unfavorite" data-tooltip-class="below">
                <img class="icon" src="https://s3.ca-central-1.amazonaws.com/logojoy/images/heart-big-filled-white@2x.png">
                <div id="unfavorite" class="mini-menu">
                    <span>Unfavoriting your logo will remove it from your account</span>
                    <button onclick="window.confirmUnfavorite()">Confirm</button>
                </div>
            </li>
            <li>
                <button id="buy-button" class="buy-button">Buy</button>
            </li>
        </ul>
    </nav>

    <aside id="side-nav" class="side-nav">
        <div class="side-nav__header">
            <span id="username"></span>
        </div>
        <ul class="side-nav__body">
            <div class="notLoggedIn">
                <li><a data-toggle="modal" data-target="#loginModal"  rel="modal">Login</a></li>
                <li><a data-toggle="modal" data-target="#signupModal"  class="signup" rel="modal">Register</a></li>
            </div>
            <div class="isLoggedIn">
                <li><a id="show-dashboard" onclick="window.LoadView('dashboard_view');">My favorites <span id="favorited_logos" class="count"></span></a></li>
                <li><a id="show-generator" onclick="window.state.generatorresults=false;window.LoadView('generator_view');">Logo Generator</a></li>
                <!--<li><a id="show-brandguidelines" onclick="window.LoadView('brandguidelines_view');">Brand Guide Lines</a></li>-->
                <li><a id="show-referral" onclick="window.LoadView('referral_view')">Give $20, Get $20</a></li>
                <li><a id="show-admin" onclick="window.LoadView('admin_view')" style="display:none">Admin</a></li>
            </div>
        </ul>

        <ul class="side-nav__footer">
            <li><a onclick="window.LoadView('settings_view');">Account</a></li>
            <li><a href="terms" target="_blank">Terms of Service</a></li>
            <li><a href="privacy" target="_blank">Privacy</a></li>
            <li><a onclick="window.logout();" >Log Out</a></li>
        </ul>
    </aside>
</header>
<!-- Load  App -->
<section class="main-content">
    <section id="app-packages" class="app-view app-packages hidden">
        <div class="container checkout package-options">
            <div class="row copy-header">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <h1>Checkout</h1>
                </div>
            </div>

            <div class="design-callout"><img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/designer-callout@2x.png"/></div>
            <div class="package-option">
                <h5>Basic</h5>
                <h1>$20</h1>

                <ul>
                    <li>Low resolution logo</li>
                    <li>Colored background</li>
                </ul>
                <button type="submit" class="btn btn-hollow" onclick="window.initCheckout('basic');">Buy Basic</button>
                <h6>USD</h6>
            </div>

            <div class="package-option premium">
                <h5>Premium</h5>
                <h1>$65</h1>
                <h6 class="save"><strike>was $130</strike> save 50%</h6>
                <ul>
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
                </ul>
                <button type="submit" class="btn" onclick="window.initCheckout('premium');">Buy Premium</button>
                <h6>USD</h6>
            </div>

            <div class="package-option">
                <h5>Enterprise</h5>
                <h1>$165</h1>

                <ul>
                    <li>Everything in Premium</li>
                    <li>One hour design session with one of our designers</li>
                </ul>

                <button type="submit" class="btn btn-hollow" onclick="window.initCheckout('enterprise');">Buy Enterprise</button>
                <h6>USD</h6>
            </div>
        </div>
    </section>
    <div id="app-referral" class="app-view app-referral hidden">
        <div class="referral-header">
            <h1>Give $20, Get $20</h1>
        </div>
        <div class="container">
            <h2>Know any other entrepreneurs? Share your promo code with them and give them $20 off their purchase of a premium logo. Once they purchase, you’ll get $20 off a premium logo.</h2>
            <div class="invite-options">
                <form>
                    <label>
                        <span class="label">Your promo code:</span>
                        <input type="text" class="form-control referralCode" name="promo-code" value="">
                    </label>
                </form>
                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.logojoy.com/" target="_blank" class="option fb referralCode">Facebook</a>
                <a href="https://twitter.com/home?status=Entrepreneurs,%20now%20you%20can%20make%20your%20own%20logo.%20Use%20my%20code%20'x3waxn'%20for%20$20%20off.%20https%3A//www.logojoy.com/" target="_blank" class="option twitter referralCode">Tweet</a>
                <a href="mailto:?&subject=Cool new tool to make your own logo&body=Hey!%20Thought%20this%20might%20interest%20you,%20it's%20a%20site%20that%20allows%20you%20to%20make%20a%20logo.%20Use%20my%20code%20'x3waxn'%20for%20$20%20off.%0A%0ACheck%20it%20out%3A%20https%3A//www.logojoy.com/" target="_blank" class="option email referralCode">Email</a>
            </div>
        </div>
    </div>
    <div id="app-admin" class="app-view hidden" style="padding:100px">
        <div class="container">
            <div class="cols">
                <div class="col">
                    <h3>Resend emails</h3>
                    <div class="form-group">
                        <button id="sendLogoEmail" class="btn btn-default btn-block">Send Logo Email</button>
                    </div>
                    <div class="form-group">
                        <button id="sendNominationEmail" class="btn btn-default btn-block">Send Nomination Email</button>
                    </div>
                </div>
                <div class="col">
                    <h3>Change account credit</h3>
                    <form id="addCredit" class="form">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">$</div>
                                <input type="number" class="form-control" id="credit" name="credit" placeholder="Amount">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Change credit</button>
                    </form>
                </div>
                <div class="col">
                    <h3>Add New Coupon</h3>
                    <form id="addCoupon" class="form">
                        <div class="form-group">
                            <input type="text" pattern="^\S{5,30}$" class="form-control" placeholder="Coupon code" name="couponName" id="couponName">
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" placeholder="Description" name="description">
                        </div>
                        <div class="form-inline form-group">
                            <select class="form-control" name="type">
                                <option value="percent">%</option>
                                <option value="amount">$</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="discountAmount" id="discountAmount" placeholder="Amount">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="number" name="remaining_uses" placeholder="Remaining Uses">
                        </div>
                        <button class="btn btn-default" type="submit">Add Coupon</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="app-dashboard" class="app-view hidden app-dashboard">
        <div id="logo-favorites">
            <section class="copy-header">
                <div class="vheight">
                    <div class="vcell">
                        <h1>Your Favorites</h1>
                    </div>
                </div>
            </section>

            <div class="container">
                <section id="favorite-logos" class="favorite-logos"></section>
                <button class="btn btn-primary loadmorelogos hidden">Load More Logos</button>
            </div>

            <div class="snackbar">
                <span class="message"></span>
            </div>
        </div>

        <div id="logo-editor" class="hidden">
            <div class="snackbar">
                <span class="message"></span>
            </div>
            <section class="edit-header">
                <div class="edit-nav">
                    <div class="vheight"><div class="vcell">
                            <ul id="edit-logo-nav" class="sub-nav">
                                <li data-option="preview-logo" class="active">Preview</li>
                                <li data-option="edit-font">Fonts</li>
                                <li data-option="edit-color">Colors</li>
                                <li data-option="edit-layout">Layout</li>
                                <li data-option="edit-symbol" class="hidden">Symbol</li>
                                <li data-option="edit-container" class="hidden">Container</li>
                            </ul>
                        </div></div>
                </div>

                <form name="edit-logo" class="edit-logo" >
                    <section class="edit-options edit-font hidden">
                        <div class="edit-sub-nav menu edit-nav-font">
                            <div class="vheight"><div class="vcell">
                                    <ul id="edit-logo-font-nav" class="sub-nav">
                                        <li class="active" data-options="company-name-options">Company Name Options</li>
                                        <li data-options="company-name-font">Company Name Font</li>
                                        <li data-options="company-slogan-options">Slogan Options</li>
                                        <li data-options="company-slogan-font">Slogan Fonts</li>
                                    </ul>
                                </div></div>
                        </div>
                        <div class="edit-sub-nav edit-nav-font option-menu company-name-font hidden">
                            <ul id="company-font-options" class="font-options">
                                <li data-font="sans_serif" data-tooltip="Clean logotypes that convey simplicity, power, and confidence." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/sans-serif@2x.png">
                                </li>
                                <li data-font="serif" data-tooltip="Serif logotypes convey authenticity, grace, and elegance in a non-confrontational manner." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/serif@2x.png">
                                </li>
                                <li data-font="vintage" data-tooltip="Classical logotypes that scream authenticity and old-style ways." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/vintage@2x.png">
                                </li>
                                <li data-font="handwritten" data-tooltip="Handwritten logotypes that seem relatable and natural." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/handwritten@2x.png">
                                </li>
                                <li data-font="modern" data-tooltip="Give a sense of innovation and forward-looking goals." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/modern@2x.png">
                                </li>
                                <li data-font="slab" data-tooltip="Timeless, powerful logotypes that have hints of vintage and hints of modern." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/slab@2x.png">
                                </li>
                                <li data-font="funky" data-tooltip="Funky logotypes for alternative companies." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/funky@2x.png">
                                </li>
                                <li data-font="calligraphic" data-tooltip="Fancy calligraphic logotypes that give a sense of elegance." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/calligraphic@2x.png">
                                </li>
                                <li data-font="bubbly" data-tooltip="Fun, bubbly logotypes for the playful offering." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/bubbly@2x.png">
                                </li>
                                <li data-font="futuristic" data-tooltip="Let your customers know you're innovative." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/futuristic@2x.png" style="height:13px">
                                </li>
                                <li data-font="elegant" data-tooltip="Impressively elegant logotypes for the classiest of offerings." data-tooltip-class="hold-below big tooltip--fontoption">
                                    <img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/font-types/elegant@2x.png" style="height:13px">
                                </li>
                            </ul>
                        </div>
                        <div class="edit-sub-nav edit-nav-font option-menu company-name-options">
                            <div class="input-size-picker font-size-picker">
                                <button type="button" class="minus"></button>
                                <input type="text" class="numerical" name="font_size" value="">
                                <button type="button" class="plus"></button>
                                <p>Font-size</p>
                            </div>
                            <div class="input-size-picker letter-spacing-picker">
                                <button type="button" class="minus"></button>
                                <input type="text" class="numerical" name="font_letter_spacing" value="">
                                <button type="button" class="plus"></button>
                                <p>Letter Spacing</p>
                            </div>
                            <div class="input-text company-name">
                                <input type="text" id="company_name" name="company_name">
                                <a class="upp">UPP</a>
                                <a class="low">low</a>
                                <p>Company Name</p>
                            </div>
                        </div>
                        <div class="edit-sub-nav edit-nav-font option-menu company-slogan-options hidden">
                            <div class="input-size-picker font-size-picker">
                                <button type="button" class="minus"></button>
                                <input type="text" class="numerical" name="font_size" value="">
                                <button type="button" class="plus"></button>
                                <p>Font-size</p>
                            </div>
                            <div class="input-size-picker letter-spacing-picker">
                                <button type="button" class="minus"></button>
                                <input type="text" class="numerical" name="font_letter_spacing" value="">
                                <button type="button" class="plus"></button>
                                <p>Letter Spacing</p>
                            </div>
                            <div class="input-text company-name">
                                <input type="text" class="" id="company_slogan" name="company_slogan">
                                <a class="upp">UPP</a>
                                <a class="low">low</a>
                                <p>Slogan</p>
                            </div>
                        </div>
                    </section>

                    <section class="edit-options edit-color hidden">
                        <div class="color-variants">
                            <div class="input-wrapper">
                                <input id="color-picker" class="hidden" type="text"/>
                                <p style="margin-top: 7px;">Custom color</p>
                            </div>
                            <div class="input-wrapper">
                                <button type="button" id="reverse-colors" class="btn btn-light"><img src="https://s3.ca-central-1.amazonaws.com/logojoy/images/switch-dark-bg@2x.png"/></button>
                                <p style="margin-top: 7px;">Reverse</p>
                            </div>
                            <div class="color-options">
                                <ul id="color-options">
                                    <li style="background-color:#111111" class="black" data-color="#111111" data-color-class="greyscale" data-tooltip="Power, elegance, reliability, intelligence, modesty, maturity, functionality, and formality" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#0066D0" class="blue" data-color="#0066D0" data-color-class="blue" data-tooltip="Depth and stability, trust, loyalty, wisdom, confidence, intelligence, faith, truth, heaven, tranquility and calmness" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#04ADAD" class="teal" data-color="#04ADAD" data-color-class="teal" data-tooltip="Creativity, inspiration, credibility, reliability, spiritual development" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#12AB0F" class="green" data-color="#12AB0F" data-color-class="green" data-tooltip="Nature, growth, harmony, freshness, fertility, safety, healing, money" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#6E40C0" class="purple" data-color="#6E40C0" data-color-class="purple" data-tooltip="Royalty, power, nobility, luxury, ambition, wealth, extravagance, wisdom, dignity, independence, creativity, mystery, and magic" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#C23BAB" class="pink" data-color="#C23BAB" data-color-class="pink" data-tooltip="Girly, sweet, innocent, sensitive, passionate, playful, sensual and loving" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#EA1B1B" class="red" data-color="#EA1B1B" data-color-class="red" data-tooltip="Power, energy, passion, desire, speed, strength, love, fire, intensity, and celebration" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#ED7928" class="orange" data-color="#ED7928" data-color-class="orange" data-tooltip="Joy, enthusiasm, fascination, happiness, creativity, determination, attraction, success, encouragement, and stimulation" data-tooltip-class="hold-below big"></li>
                                    <li style="background-color:#EEC821" class="yellow" data-color="#EEC821" data-color-class="yellow" data-tooltip="Sunshine, joy, happiness, intellect, cheerfulness, and energy" data-tooltip-class="hold-below big"></li>
                                </ul>
                                <p>Browse color variations</p>
                            </div>
                        </div>
                    </section>

                    <section class="edit-options edit-symbol hidden">
                        <div class="edit-sub-nav menu symbol-menu">
                            <div class="vheight"><div class="vcell">
                                    <ul id="edit-logo-symbol-nav" class="sub-nav">
                                        <li class="active" data-options="symbol-edit">Edit symbol</li>
                                        <li data-options="symbol-browser">Browse Icons</li>
                                        <li data-options="monograms-browser">Browse Monograms</li>
                                        <li data-options="symbol-container-browser">Browse Monogram Containers</li>
                                    </ul>
                                </div></div>
                        </div>
                        <div class="edit-sub-nav option-menu symbol-edit">
                            <div class="input-size-picker symbol-size-picker">
                                <button type="button" class="minus"></button>
                                <input type="text" class="numerical" name="symbol_size" value="">
                                <button type="button" class="plus"></button>
                                <p>Symbol size</p>
                            </div>

                            <div class="input-size-picker monogram-size-picker hidden">
                                <button type="button" class="minus"></button>
                                <input type="text" class="numerical" name="monogram_size" value="">
                                <button type="button" class="plus"></button>
                                <p>Monogram size</p>
                            </div>

                            <div class="input-text">

                                <input type="text" class="" id="monogram_text" name="monogram_text">
                                <p>Monogram Text</p>
                            </div>
                        </div>
                        <div class="edit-sub-nav option-menu symbol-browser hidden">
                            <input type="text" name="icon-search" class="search" placeholder="Search for icons" autocomplete="off">
                        </div>
                    </section>

                    <section class="edit-options edit-container hidden">
                        <div class="edit-sub-nav menu container-menu">
                            <div class="vheight"><div class="vcell">
                                    <ul id="edit-logo-container-nav" class="sub-nav">
                                        <li class="active" data-options="filled-container-variations">Filled container</li>
                                        <li data-options="outline-container-variations">Outline container</li>
                                    </ul>
                                </div></div>
                        </div>
                    </section>
                </form>
            </section>

            <div class="container container--editor">
                <div id="errors"></div>
                <section class="edit-logos preview-logo hidden">
                    <div class="preview-full preview-svg"></div>
                    <div class="preview-half preview-business-card"><div class="realism"></div></div>
                    <div class="preview-half preview-letterhead"><div class="realism"></div></div>
                    <div class="preview-half preview-envelope"><div class="realism"></div></div>
                    <div class="preview-half preview-iphone"><div class="realism"></div></div>
                    <div class="preview-full preview-building"><div class="realism"></div></div>
                    <div class="preview-half preview-box2"><div class="realism"></div></div>
                    <div class="preview-half preview-box"><div class="realism"></div></div>
                </section>

                <section class="favorite-logos edit-logos company-name-options company-slogan-options symbol-edit edit-color" data-view="main"></section>
                <div class="swiper-container newload"><section class="favorite-logos swiper-wrapper edit-logos company-name-font company-slogan-font edit-layout container-browser container-browser symbol-container-browser monograms-browser symbol-browser color-browser hidden"></section></div>
                <!--<div class="swiper-container sloganload"><section class="favorite-logos swiper-wrapper edit-logos company-slogan-font hidden"></section></div>-->
                <div class="swiper-container load"><section class="favorite-logos swiper-wrapper edit-logos  hidden"></section></div>
                <!--<div class="swiper-container load"><section class="favorite-logos swiper-wrapper edit-logos edit-layout hidden"></section></div>-->
                <!--<div class="swiper-container load"><section class="favorite-logos swiper-wrapper edit-logos symbol-browser hidden"></section></div>-->
                <div class="swiper-container load"><section class="favorite-logos swiper-wrapper edit-logos hidden"></section></div>
                <!--<div class="swiper-container load"><section class="favorite-logos swiper-wrapper edit-logos container-browser hidden"></section></div>-->
                <!--<div class="swiper-container load"><section class="favorite-logos swiper-wrapper edit-logos symbol-container-browser hidden"></section></div>-->

                <div class="arrow-keys hidden">
                    <a href="#" class="arrow-key arrow-key-2 left"></a>
                    <!-- <a href="#" class="arrow-key fav tip" title="Save this logo and we'll get a better sense of your taste."></a> -->
                    <a href="#" class="arrow-key arrow-key-2 right"></a>
                    <span>use arrow keys</span>
                </div>


            </div>
        </div>
    </div>
    <div id="app-generator" class="app-view hidden app-generator">
        <!-- Helpers -->

        <div class="generator-sub-views generator-step1 active">
            <section class="generator-header">
                <h1>Pick 5 or more logos you like.</h1>
                <h2>We'll use these as inspiration. These were all made with Logojoy.</h2>
            </section>

            <section class="generator">
                <div class="container">
                    <div id="inspiration-logos" class="row"></div>
                </div>
            </section>

            <div id="progress-bar" class="bottom-bar">
                <div class="progress-outer"><div class="progress-inner"></div></div>
                <a class="btn btn-primary continue generator-continue hidden" data-nav-direction="right" data-step="1">Continue</a>
            </div>
        </div>

        <div class="generator-sub-views generator-step2 right">
            <section class="generator-header">
                <h1>Pick any colors your like</h1>
            </section>

            <section class="generator">
                <div class="container">
                    <div id="inspiration-colors" class="row"></div>
                </div>
            </section>

            <div id="progress-bar" class="bottom-bar hidden">
                <a class="btn btn-primary btn-hollow generator-continue gnr-step2-btn-skip" data-nav-direction="right" data-step="2">Skip This Step</a>
                <a class="btn btn-primary generator-continue gnr-step2-btn-con hidden" data-nav-direction="right" data-step="2">Continue</a>
            </div>
        </div>

        <div class="generator-sub-views generator-step3 right">
            <section class="generator-header">
                <h1>Tell us about yourself</h1>
            </section>

            <section class="generator">
                <div class="container">
                    <div id="inspiration-company" class="row company-details">
                        <div class="col-sm-6 col-sm-offset-3">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Company Name" name="company_name">
                                <span class="cLengthWarning">Logos look better with shorter company names. Consider moving a word into your slogan.</span>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Slogan (Optional)" name="company_slogan">
                                <span class="sLengthWarning">Logos look better with shorter slogans. The longest it should be is about the length of "Design Studio".</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="progress-bar" class="bottom-bar hidden">
                <a class="btn btn-primary generator-continue gnr-step3-btn" data-nav-direction="right" data-step="3">Continue</a>
            </div>
        </div>

        <div class="generator-sub-views generator-step4 right">
            <section class="generator-header">
                <h1>Search for & add up to 3 symbols</h1>
                <h2>Optional. You can change these later.</h2>
            </section>

            <section class="generator">
                <div class="container">
                    <div id="inspiration-symbols" class="row inspiration-symbols">
                        <div class="col-sm-12 col-md-10 col-md-offset-1 symbol-mobile">
                            <div class="col-sm-12 col-md-10 col-md-offset-1 symbol-mobile">
                                <div class="selected-symobls">
                                    <div class="favorite-symbol open" data-symbol-placeholder-number="0"></div>
                                    <div class="favorite-symbol open" data-symbol-placeholder-number="1"></div>
                                    <div class="favorite-symbol open" data-symbol-placeholder-number="2"></div>
                                </div>

                                <div class="symbol-search">
                                    <form id="symbol-search">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Search for icons" name="symbol-search">
                                        </div>
                                        <button class="btn btn-primary">Search</button>
                                    </form>

                                    <div class="helper-onboarding"><p class="marquee"><span class="all-items"><span>Coffee</span><span>fire</span><span>leaf</span><span>animals</span><span>cup</span><span>building</span><span>circle</span><span>brush</span><span>sushi</span><span>tree</span><span>plate</span><span>wave</span><span>water</span><span>gorilla</span><span>heart</span><span>plant</span><span>gift</span><span>truck</span><span>bee</span><span>pizza</span><span>rings</span><span>wedding</span><span>wine</span><span>chopsticks</span><span>globe</span><span>hammer</span><span>chair</span><span>bullseye</span><span>flag</span><span>palm</span><span>bowtie</span><span>rocket</span><span>shoe</span><span>flower</span><span>infinity</span><span>lips</span><span>map</span><span>pin</span><span>gaming</span><span>diamond</span><span>lightbulb</span><span>arrow</span><span>bell</span><span>hat</span><span>mustache</span><span>floral</span><span>gears</span><span>charts</span><span>hair</span><span>angel</span></span></p></div>

                                    <div id="symbol-search-results" class="symbol-search-results"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div id="progress-bar" class="bottom-bar hidden">
                <a class="btn btn-primary btn-hollow generator-continue gnr-step4-btn-skip" data-nav-direction="right" data-step="4">Skip This Step</a>
                <a class="btn btn-primary generator-continue gnr-step4-btn-con hidden" data-nav-direction="right" data-step="4">Continue & See Logos</a>
            </div>
        </div>

    </div>
    <div id="app-generator-results" class="app-view hidden app-generator-results">
        <div class="svg-placeholders"></div><!-- end svg placeholders -->

        <div class="header">
            <h1>Your logo options</h1>
            <h2>Click to favourite and see logo variations.</h2>
        </div>
        <div class="container container--editor">
            <div id="results-swiper" class="app-generator-results__container swiper-container nonglobal-load">
                <section class="favorite-logos edit-logos new-logos swiper-wrapper"></section>
            </div>
        </div>
        <div class="arrow-keys arrow-keys--generator">
            <a href="#" class="arrow-key arrow-key-3 left"></a>
            <!-- <a href="#" class="arrow-key fav tip" title="Save this logo and we'll get a better sense of your taste."></a> -->
            <a href="#" class="arrow-key arrow-key-3 right"></a>
            <span>use arrow keys</span>
        </div>


    </div>
    <div id="app-brandguidelines" class="app-view hidden app-brandguidelines">
        <div class="container">
            <div class="row">
                <div class="col col-xs-12 col-sm-6 col-md-6">
                    <div class="vheight"><div class="vcell">
                            <section class="left">
                                <h1>Brand Guide Lines</h1>

                                <form id="brandguidelines-form">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input name="company_name" type="text" class="form-control" placeholder="Master Smiths">
                                    </div>
                                    <div class="form-group">
                                        <label>Vanity Url</label>
                                        <input name="company_name_slug" type="text" class="form-control" placeholder="ex. master-smiths">
                                    </div>

                                    <div id="brandlogo-selected" class="selected-logo" >
                                        <div class="logo-slot"></div>
                                        <div class="msg">Select a logo</div>
                                    </div>

                                    <button class="btn btn-primary">Activate</button>
                                </form>
                            </section>
                        </div></div>
                </div>
                <div class="col col-xs-12 col-sm-6 col-md-6">
                    <section class="right">
                        <div id="brandlogo-selector" class="brandlogos-selector">
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <div id="app-checkout" class="app-view hidden app-checkout">
        <div class="container">
            <div class="row copy-header">
                <div class="col-sm-6 col-sm-offset-3 text-center">
                    <h1>Checkout</h1>
                </div>
            </div>
            <div class="row itemPay" style="text-align:left;margin: 10px 20px;">
                <p>Package: <span id="purchase-product" style="text-transform:capitalize"></span></p>
                <p class="credit" style="display:none">Credit: $<span id="account-credit" style="text-transform:capitalize"></span></p>
                <p>Total: $<b id="purchase-price"></b></p>
            </div>
            <div id="purchase-flow">
                <form id="purchase" style="text-align:left">
                    <div class="row">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="cc-name" autocomplete="cc-name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label>Card Number</label>
                            <input type="number" class="form-control" name="cc-card" autocomplete="cc-number">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4 noPadding">
                            <div class="form-group">
                                <label>Month</label>
                                <input type="number" class="form-control" name="exp-month" placeholder="MM" autocomplete="cc-exp-month">
                            </div>
                        </div>
                        <div class="col-xs-4 noPadding">
                            <div class="form-group">
                                <label>Year</label>
                                <input type="number" class="form-control" name="exp-year" autocomplete="cc-exp-year" placeholder="YY">
                            </div>
                        </div>
                        <div class="col-xs-4 noPadding">
                            <div class="form-group">
                                <label>CVC</label>
                                <input type="number" class="form-control" name="cc-cvc" autocomplete="cc-csc" placeholder="123">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <p class="alert alert-danger alert-success hidden"></p>
                            <button class="btn btn-primary">Purchase</button>
                        </div>
                    </div>
                    <div class="row haveCoupon">
                        <a id="haveCoupon">Have a coupon?</a>
                    </div>
                </form>

                <form id="apply-coupon">
                    <div class="row couponCode hidden">
                        <div class="form-group col-xs-6 col-sm-5">
                            <label>Coupon Code</label>
                            <div class="form-inline">
                                <input type="text" style="margin: 0;" class="form-control" name="coupon-code" autocomplete="coupon-code" placeholder="x2sxuf">
                            </div>
                        </div>
                        <div class="col-xs-4 apply-coupon">
                            <button class="btn btn-primary">Apply</button>
                        </div>
                    </div>
                </form>
            </div>
            <div id="purchase-credit"></div>
        </div>
    </div>
    <div id="app-settings" class="app-view app-settings hidden">
        <div id="account-settings">
            <h1>Your Account</h1>
            <div id="account">
                <form name='updateAccount'>
                    <label>
                        <h5>Email:</h5>
                        <input type='text' name='email' value=''/>
                    </label>
                    <label>
                        <h5>Current Password:</h5>
                        <input type='password' name='password' />
                    </label>
                    <label>
                        <h5>New Password:</h5>
                        <input type='password' name='newpassword' />
                    </label>
                    <label>&nbsp;</label>
                    <input type='submit' value='Update' class='submit button' />
                </form>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('#account').onsubmit = function(e){
            e.preventDefault();
            let payload = {
                data:{
                    email: document.querySelector('#account [name="email"]').value,
                    password: document.querySelector('#account [name="password"]').value,
                    newpassword: document.querySelector('#account [name="newpassword"]').value
                }
            };
            document.querySelector('#account [type="submit"]').value = 'Updating';
            console.log(payload);
            fetch(window.APIURL+'/users/',{
                method: 'PUT',
                mode: 'cors',
                headers: new Headers({
                    'Authorization':'JWT '+ window.state.token,
                    'Content-Type':'application/json'
                }),
                body:JSON.stringify(payload)
            }).then(response => {
                console.log(response);
            if(response.status === 200){
                response.json().then(res => {
                    console.log(res);
                window.state.user.email = document.querySelector('#account [name="email"]').value;
                window.setState('user',window.state.user);
                document.querySelector('#account [type="submit"]').value = 'Updated';
            });
            }
            else{
                document.querySelector('#account [type="submit"]').value = 'Error';
            }
        })
            .catch(err => {
                console.log(err);
            document.querySelector('#account [type="submit"]').value = 'Error';
        })
        }


    </script>
</section>

<div class="modal modal--social fade" tabindex="-1" role="dialog" id="shareDialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Share your logo</h3>
                <p>Each time a user visits your page and then goes on to purchase a logo, you'll get $20 towards a new logo and so will they!</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="form-group">
                            <input type="text" class="form-control form-control--share-url shareUrls" value="http://{URL}}">
                        </div>
                        <a  href="" target="_blank" class="btn btn-primary btn-block shareUrls">Go to link</a>
                    </div>
                </div>
                <div class="row">
                    <div class=" col-sm-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A//www.logojoy.com/gallery/" target="_blank" class="btn btn--social btn--fb">
                            Facebook
                        </a>
                    </div>
                    <div class=" col-sm-4">
                        <a href="https://twitter.com/home?status=" target="_blank" class="btn btn--social btn--twitter">
                            Twitter
                        </a>
                    </div>
                    <div class=" col-sm-4">
                        <a href="mailto:?&amp;subject=?&amp;body=https://www.logojoy.com/gallery/" target="_blank" class="btn btn--social btn--email">
                            Email
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal modal--purchased fade" tabindex="-1" role="dialog" id="purchasedLogo">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Your logo files</h3>
                <p>This is exciting! Thanks for purchasing from Logojoy, your logo is ready to download in this zip file.</p>
                <p class="alert alert-warning delayed-files" style="display:none"></p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <a href="" id="downloadLink" target="_blank" class="btn btn-primary btn-block delayed-files">Download your Logo</a>
                    </div>
                    <!--<div class="col-md-12 brandg">

                      <hr>
                      <h3 class="modal-title">Your brand guidelines</h3>
                        <div class="brandguidelines brandguidelines-url hidden">
                          <p>Check out your custom brand guidelines below.</p>
                          <a href="" id="brandguidelinesLink" target="_blank" class="btn btn-default">Brand Guidelines</a>
                        </div>

                        <div class="brandguidelines brandguidelines-disabled hidden">
                          <p>Brand guidelines are in beta and accounts can only have on set at the moment. We'll let you know once you can configure more! </p>
                        </div>

                        <form class="form-inline brandguidelines brandguidelines-form">
                          <p>Set up a personalized URL to show off your logo and share some pointers on how to use it below.</p>
                          <div class="form-group">
                            <label class="sr-only" for="brandGuidelinesSlug">Brand guideline url</label>
                            <div class="input-group">
                              <div class="input-group-addon">http://logojoy.com/b/</div>
                              <input type="text" class="form-control" id="brandGuidelinesSlug" placeholder="your-url">
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Set URL</button>
                        </form>

                      </div>

                    </div>-->
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal modal--purchased fade" tabindex="-1" role="dialog" id="delayedpurchasedLogo">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Your logo files</h3>
                <p>Your logo is taking a little longer than usual to generate, so instead of keeping you waiting we'll send you an email when it's ready. You can also check back in a few minutes and look for the download link when you select your logo.</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <!--<a href="" id="downloadLink" target="_blank" class="btn btn-primary btn-block">Download your Logo</a>-->
                    </div>

                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal modal--purchased fade" tabindex="-1" role="dialog" id="errorpurchasedLogo">
    <div class="modal-dialog" role="document">
        <div class="modal-content text-center">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Your logo files</h3>
                <p style="text-align:center">There was an error generating your logo files. Click below to try again or contact support if the problem continues</p>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <a  id="downloadLink" target="_blank" class="btn btn-primary btn-block" onclick="window.GenerateLogoFiles()">Regenerate your Logo</a>
                    </div>

                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--<script src="dist/js/vendor.min.js"></script>-->

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/logorobot.js?v=41"></script>
</body>
<script>
    if(!window.state.lastview) window.state.lastview = 'dashboard_view';
    window.state && window.state.token ? GetUser(window.LoadView(window.state.lastview)):UserNotLoggedIn();
</script>
</html>
<script>
</script>
