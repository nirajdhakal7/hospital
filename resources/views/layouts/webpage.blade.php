@section('header')
    <!--Header start-->
    <header id="header" class="fixedheader">

        <!--Main menu start-->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-xs-6">
                    <a href="https://aristainfotech.com" class="logo">
                        <img src=" {{ asset('images/logo.png')}}" class="normal-logo" alt="logo">
                        <img src=" {{ asset('images/logo-black.png')}}" class="sticky-logo" alt="logo">
                    </a>
                </div>
                <div class="col-sm-9 col-xs-6 desk-menu">
                    <ul class="main-menu">
                        <li class="dropdown  ">
                            <a href="https://aristainfotech.com/#ourservices" class="dropbtn servnonepg">Services</a>
                            <ul class="dropdown-content">
                                <li><a href="website-design-services.php">Website Design</a></li>
                                <li><a href="website-development-services.php">Website Development</a></li>
                                <li><a href="content-management-services.php">Content Management</a></li>
                                <li><a href="digital-marketing-services.php">Digital Marketing</a></li>
                                <li><a href="reporting-and-analysis-services.php">Reporting &amp; Analysis</a></li>
                                <li><a href="customer-support-services.php">Customer Support</a></li>
                            </ul>
                        </li>
                        <li><a href="expertise.php">Expertise</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="work.php">Work</a></li>
                        <li><a href="careers.php">Career</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <!--<li>
                            <a href="#" class="button nav-link">
                                <div class="bottom"></div>
                                <div class="top">
                                    <div class="label">Contact</div>
                                    <div class="button-border button-border-left"></div>
                                    <div class="button-border button-border-top"></div>
                                    <div class="button-border button-border-right"></div>
                                    <div class="button-border button-border-bottom"></div>
                                </div>
                            </a>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
        <!--Main menu end-->

        <!--Mobile menu start-->
        <a href="#" class="ion-navicon-round nav-icon menu-button"></a>
        <div class="menu">
            <div class="container">
                <nav>
                    <ul class="main-menu">
                        <li class=" "><a href="#" class="servnonepg">Services</a><span class="icon ion-ios-arrow-down"></span>
                            <ul class="submenu" style="display: none;">
                                <li><a href="website-design-services.php">Website Design</a></li>
                                <li><a href="website-development-services.php">Website Development</a></li>
                                <li><a href="content-management-services.php">Content Management</a></li>
                                <li><a href="digital-marketing-services.php">Digital Marketing</a></li>
                                <li><a href="reporting-and-analysis-services.php">Reporting &amp; Analysis</a></li>
                                <li><a href="customer-support-services.php">Customer Support</a></li>
                            </ul>
                        </li>
                        <li><a href="expertise.php">Expertise</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="work.php">Work</a></li>
                        <li><a href="careers.php">Career</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!--Mobile menu end-->

    </header>
    <!--Header end-->
@endsection
@section('content')
    <section>
        <!--Home particles start-->
        <div id="particles-js"><canvas class="particles-js-canvas-el" style="width: 100%; height: 100%;" width="1349" height="683"></canvas></div>
        <div class="banner">
            <h1>Amplify Your Business</h1>
            <div class="wrap">
                <div class="type-wrap">
                    <div id="typed-strings" style="display: none;">
                        <span>With Robust Solutions made to Last</span>
                        <span>via Ultimate Digital Experience</span>
                        <span>By Tailor-made Synergists to suit your Needs</span>
                    </div>
                    <span id="typed" style="white-space:pre;">By Tailor-ma</span><span class="typed-cursor">|</span>
                </div>
            </div>
            <a href="https://aristainfotech.com/#letsgrowbtn" class="button nav-link">
                <div class="bottom"></div>
                <div class="top morepadding">
                    <div class="label">Let's Grow</div>
                    <div class="button-border button-border-left"></div>
                    <div class="button-border button-border-top"></div>
                    <div class="button-border button-border-right"></div>
                    <div class="button-border button-border-bottom"></div>
                </div>
            </a>
        </div>
        <!--Home particles end-->

        <!--Serving since start-->
        <div class="home-sec-2">
            <div class="container">
                <div class="achievement-outer achievement-slide swiper-container-horizontal">
                    <div class=" achievement swiper-wrapper" style="transform: translate3d(-1270px, 0px, 0px); transition-duration: 0ms;"><div class="swiper-slide col-1 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 317.5px;">
                            <a href="about.php">
                                <div class="counts fadeInUp animated">
                                    <h3>2014</h3>
                                    Serving Since
                                </div>
                            </a>
                        </div><div class="swiper-slide col-2 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 317.5px;">
                            <a href="work.php">
                                <div class="counts fadeInUp animated">
                                    <h3>11</h3>
                                    Happy Customers
                                </div>
                            </a>
                        </div><div class="swiper-slide col-3 swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 317.5px;">
                            <a href="#">
                                <div class="counts fadeInUp animated">
                                    <h3>36</h3>
                                    Projects Till Date
                                </div>
                            </a>
                        </div><div class="swiper-slide col-4 swiper-slide-duplicate swiper-slide-prev" data-swiper-slide-index="3" style="width: 317.5px;">
                            <a href="#">
                                <div class="counts fadeInUp animated">
                                    <h3>5</h3>
                                    Countries Served
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide col-1 swiper-slide-active" data-swiper-slide-index="0" style="width: 317.5px;">
                            <a href="about.php">
                                <div class="counts fadeInUp animated">
                                    <h3>2014</h3>
                                    Serving Since
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide col-2 swiper-slide-next" data-swiper-slide-index="1" style="width: 317.5px;">
                            <a href="work.php">
                                <div class="counts fadeInUp animated">
                                    <h3>11</h3>
                                    Happy Customers
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide col-3" data-swiper-slide-index="2" style="width: 317.5px;">
                            <a href="#">
                                <div class="counts fadeInUp animated">
                                    <h3>36</h3>
                                    Projects Till Date
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide col-4 swiper-slide-duplicate-prev" data-swiper-slide-index="3" style="width: 317.5px;">
                            <a href="#">
                                <div class="counts fadeInUp animated">
                                    <h3>5</h3>
                                    Countries Served
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide col-1 swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="0" style="width: 317.5px;">
                            <a href="about.php">
                                <div class="counts fadeInUp animated">
                                    <h3>2014</h3>
                                    Serving Since
                                </div>
                            </a>
                        </div><div class="swiper-slide col-2 swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="1" style="width: 317.5px;">
                            <a href="work.php">
                                <div class="counts fadeInUp animated">
                                    <h3>11</h3>
                                    Happy Customers
                                </div>
                            </a>
                        </div><div class="swiper-slide col-3 swiper-slide-duplicate" data-swiper-slide-index="2" style="width: 317.5px;">
                            <a href="#">
                                <div class="counts fadeInUp animated">
                                    <h3>36</h3>
                                    Projects Till Date
                                </div>
                            </a>
                        </div><div class="swiper-slide col-4 swiper-slide-duplicate" data-swiper-slide-index="3" style="width: 317.5px;">
                            <a href="#">
                                <div class="counts fadeInUp animated">
                                    <h3>5</h3>
                                    Countries Served
                                </div>
                            </a>
                        </div></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!--Serving since end-->

        <!--Services start-->
        <div class="home-section-1">
            <div class="home-services container clearfix">
                <div class="anchor">
                    <a name="ourservices" class="letsgrowbtn">&nbsp;</a>
                    <h3>What we can do for you</h3>
                </div>
                <p>Being a rising name in the IT industry across the world, we deliver quality services in a timely fashion to help our clients gain a leading <br>edge in this competitive market.</p>
                <div class="service-main-outer">
                    <div class="col-sm-6 col-6" style="padding: 0;">
                        <div class="col-sm-12 col-12 halfcolsmid" style="padding: 0;">
                            <div class="box b-4">
                                <div class="service-expand dev-serv-expand">
                                    <span class="close ion-close closeright"></span>
                                    <a onclick="window.open('website-development-services.php', '_self');" class="service-tilte clearfix" style="cursor: pointer;">
                                        <h2>Website Development</h2>
                                    </a>
                                    <div class="more-cnt clearfix">
                                        <p>Revamp your business with intuitive experiences via customized, functional and visually satisfying websites.</p>
                                        <ul>
                                            <li><span>Front End Web Development</span></li>
                                            <li><span>Coding (HTML/CSS, PHP, MYSQL)</span></li>
                                            <li><span>Shopify</span></li>
                                            <li><span>Ruby On Rails</span></li>
                                        </ul>
                                        <div class="hide-in-mob" style="margin-top: 30px;">
                                            <a href="website-development-services.php" class="btn-1 btn-white">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-12" style="padding: 0;">
                            <div class="col-sm-6 col-6" style="padding: 0;">
                                <div class="box b-1">
                                    <div class="service-expand">
                                        <span class="close ion-close"></span>
                                        <a onclick="window.open('reporting-and-analysis-services.php', '_self');" class="service-tilte clearfix" style="cursor: pointer;">
                                            <h2>Reporting &amp; <br>Analysis</h2>
                                        </a>
                                        <div class="more-cnt clearfix">
                                            <p>Marketing and sales data integrated into reports to create meticulous analysis for informed business decisions.</p>
                                            <ul>
                                                <li><span>Projection and Forecasting</span></li>
                                                <li><span>User Behavior</span></li>
                                                <li><span>Channel Performance</span></li>
                                                <li><span>Macro to Micro level reports</span></li>
                                            </ul>
                                            <div class="hide-in-mob" style="margin-top: 30px;">
                                                <a href="reporting-and-analysis-services.php" class="btn-1 btn-white">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-6" style="padding: 0;">
                                <div class="box b-7">
                                    <div class="service-expand">
                                        <span class="close ion-close"></span>
                                        <a onclick="window.open('customer-support-services.php', '_self');" class="service-tilte clearfix" style="cursor: pointer;">
                                            <h2>Customer <br>Support</h2>
                                        </a>
                                        <div class="more-cnt clearfix">
                                            <p>We help bridge in the gap between you and your customers with our specialized customer support services.</p>
                                            <ul>
                                                <li><span>Inbound &amp; Outbound Call Center Service</span></li>
                                                <li><span>Chat &amp; Email Support</span></li>
                                            </ul>
                                            <div class="hide-in-mob" style="margin-top: 30px;">
                                                <a href="customer-support-services.php" class="btn-1 btn-white">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-6" style="padding: 0;">
                        <div class="col-sm-6 col-6" style="padding: 0;">
                            <div class="box b-2">
                                <div class="service-expand">
                                    <span class="close ion-close"></span>
                                    <a onclick="window.open('content-management-services.php', '_self');" class="service-tilte clearfix" style="cursor: pointer;">
                                        <h2>Content <br>Management</h2>
                                    </a>
                                    <div class="more-cnt clearfix">
                                        <p>To build a strong web presence, we manage and curate content across various channels to convert your prospects into clients.</p>
                                        <ul>
                                            <li><span>Netsuite Content Management</span></li>
                                            <li><span>Magento Content Management</span></li>
                                            <li><span>Shopify</span></li>
                                            <li><span>Website Content</span></li>
                                        </ul>
                                        <div class="hide-in-mob" style="margin-top: 30px;">
                                            <a href="content-management-services.php" class="btn-1 btn-white">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box b-5">
                                <div class="service-expand">
                                    <span class="close ion-close"></span>
                                    <a onclick="window.open('website-design-services.php', '_self');" class="service-tilte clearfix" style="cursor: pointer;">
                                        <h2>Website<br> Design</h2>
                                    </a>
                                    <div class="more-cnt clearfix">
                                        <p>We conceptualize appealing designs to help you stand out from the competitors.</p>
                                        <ul>
                                            <li><span>Customized Website</span></li>
                                            <li><span>Logo &amp; Banner Design </span></li>
                                            <li><span>Infographics &amp; Emailers</span></li>
                                            <li><span>Social Media Posts</span></li>
                                        </ul>
                                        <div class="hide-in-mob" style="margin-top: 30px;">
                                            <a href="website-design-services.php" class="btn-1 btn-white">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-6" style="padding: 0;">
                            <div class="box b-3">
                                <div class="service-expand">
                                    <span class="close ion-close"></span>
                                    <a onclick="window.open('digital-marketing-services.php', '_self');" class="service-tilte clearfix" style="cursor: pointer;">
                                        <h2>Digital Marketing</h2>
                                    </a>
                                    <div class="more-cnt clearfix">
                                        <p>Create a robust presence across web via our Digital Marketing services. We adept to multiple channels to create ubiquitary presence.</p>
                                        <ul>
                                            <li><span>Pay Per Click Marketing</span></li>
                                            <li><span>Search Engine Optimization</span></li>
                                            <li><span>Email Marketing</span></li>
                                            <li><span>Social Media Marketing</span></li>
                                        </ul>
                                        <div class="hide-in-mob" style="margin-top: 30px;">
                                            <a href="digital-marketing-services.php" class="btn-1 btn-white">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Services end-->

        <!--Perks of choosing start-->
        <div class="choosing-us-section choosing-us-section-home">
            <div class="container">
                <h2>Perks of choosing us</h2>
                <div class="row">
                    <div class="col-md-2">
                        <div class="perkinecol">
                            <span class="hol-solut-icn btn8"></span>
                            <label>Holistic Solutions</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="perkinecol">
                            <span class="comm-icon btn8"></span>
                            <label>360° communication</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="perkinecol">
                            <span class="team-struc-icon btn8"></span>
                            <label>Flexible team structure</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="perkinecol">
                            <span class="busin-trans-icon btn8"></span>
                            <label>Business transparency</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="perkinecol">
                            <span class="exp-prof-icon btn8"></span>
                            <label>Expert professionals</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Perks of choosing end-->

        <!--Sneak-peek start-->
        <div class="sneakpeakrow">
            <div class="container">
                <h2>Sneak-peek into our clientele</h2>
                <p>Our successfully completed projects that catalyzed on what we've achieved so far.</p>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/ui-dev-img.jpg') }}" alt="UI/UX Design Website Development" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>01.</span>
                    <h4>Multifunctional Lifestyle Brand for Men &amp; Women</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>01.</span>
                            <h4>Multifunctional Lifestyle Brand for Men &amp; Women</h4>
                            <ul>
                                <li>Shopify Development</li>
                                <li>Content Management</li>
                                <li>Product Addition</li>
                                <li>Designing</li>
                                <li>Logistic operations</li>
                                <li>Managing Fraud Review And Chargebacks</li>
                                <li>Chat Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/mob-dev-img.jpg') }}" alt="Development Mobile Applications" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>02.</span>
                    <h4>Service Industry - <br> Painting Sector</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>02.</span>
                            <h4>Service Industry - Painting Sector</h4>
                            <ul>
                                <li>Website Development And Maintenance</li>
                                <li>Website Designing</li>
                                <li>Digital Marketing</li>
                                <li>Reporting And Analytics</li>
                                <li>Customer Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/app-05-img.jpg') }}" alt="Development Mobile Applications" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>03.</span>
                    <h4>E-learning <br> Platform</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>03.</span>
                            <h4>E-learning Platform</h4>
                            <ul>
                                <li>Content Management via Magento</li>
                                <li>Frontend Development(HTML, CSS, JavaScript, JQuery, React JS, Angular JS)</li>
                                <li>Website Designing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/qa-test-img.jpg') }}" alt="QA Testing Customization &amp; Report" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>04.</span>
                    <h4>Service Industry -<br> Real Estate Sector</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>04.</span>
                            <h4>Service Industry - Real Estate Sector</h4>
                            <ul>
                                <li>Website Development</li>
                                <li>Designing</li>
                                <li>Digital Marketing</li>
                                <li>Content Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/app-08-img.jpg') }}" alt="Development Mobile Applications" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>05.</span>
                    <h4>Service Industry <br>Demolition &amp; Waste Removal</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>05.</span>
                            <h4>Service Industry <br>Demolition &amp; Waste Removal</h4>
                            <ul>
                                <li>Website Development</li>
                                <li>Website Design</li>
                                <li>Digital Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/app-06-img.jpg') }}" alt="Development Mobile Applications" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>06.</span>
                    <h4>Service Industry –<br> Lifestyle and Fitness</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>06.</span>
                            <h4>Service Industry – Lifestyle and Fitness</h4>
                            <ul>
                                <li>Website Development</li>
                                <li>Email Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/app-07-img.jpg') }}" alt="Development Mobile Applications" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>07.</span>
                    <h4>Home Décor <br>Ecommerce store</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>07.</span>
                            <h4>Home Décor <br>Ecommerce store</h4>
                            <ul>
                                <li>Website Development</li>
                                <li>Digital Marketing</li>
                                <li>Back Office Operations</li>
                                <li>Logistic Operations</li>
                                <li>Customer Support</li>
                                <li>Content Management</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hvrbox">
                <img src=" {{ asset('images/logo-type-img.jpg') }}" alt="Branding Identity Logotypes" class="hvrbox-layer_bottom">
                <div class="priorhovertext">
                    <span>08.</span>
                    <h4>Ecommerce Store - <br> Ecommerce</h4>
                </div>
                <div class="hvrbox-layer_top hvrbox-layer_scale">
                    <div class="hvrbox-text">
                        <div class="priorhovertext">
                            <span>08.</span>
                            <h4>Ecommerce Store - Ecommerce</h4>
                            <ul>
                                <li>Affiliate Marketing</li>
                                <li>Digital Marketing</li>
                                <li>Chat Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!--Sneak-peek end-->

        <!--Contact form start-->
        <!--Contact form end-->

        <!--Contact form start-->
        <div class="min-grey-row">
            <div class="contctpgform ltsconctform">
                <div class="container">
                    <div class="anchor">
                        <a name="letsgrowbtn" class="letsgrowbtn">&nbsp;</a>
                        <h2 class="target-label">Let's Connect</h2>
                    </div>
                    <p>Willing to connect? We would be happy to hear from you too.<br>
                        Just fill this out so we can learn more about you and your needs.
                    </p>
                    <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1566858990656/recaptcha__en.js"></script><script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>

                    <div class="form-group"><div class="col-sm-12"><div id="response"></div></div></div>

                    <!-- Start : Form -->
                    <form id="form" action="" method="post">
                        <div class="conthalf conselect">
                            <select name="option_for_contact" id="option_for_contact">
                                <option value="" disabled="disabled" selected="selected">Please select any one</option>
                                <option value="1">Business Enquiry</option>
                                <option value="2">Apply for Job Opening</option>
                                <option value="3">Other</option>
                            </select>
                        </div>
                        <div class="conthalf">
                            <input type="text" id="name" name="name" value="" placeholder="Name">
                            <span class="error"></span>
                        </div>
                        <div class="conthalf">
                            <input type="text" id="email" name="email" value="" placeholder="Email">
                        </div>
                        <div class="conthalf">
                            <input type="text" id="phone" placeholder="Phone" name="phone" value="">
                        </div>
                        <div class="conthalf conthfll">
                            <input type="text" id="message" name="message" value="" placeholder="Message">
                        </div>

                        <div class="concaptch conthfll">
                            <div id="capcha" class="g-recaptcha" data-sitekey="6LcRMigTAAAAAEsGgMDX135PnhR545V9-zP-G-3K"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcRMigTAAAAAEsGgMDX135PnhR545V9-zP-G-3K&amp;co=aHR0cHM6Ly9hcmlzdGFpbmZvdGVjaC5jb206NDQz&amp;hl=en&amp;v=v1566858990656&amp;size=normal&amp;cb=1nuyuxn4uo2h" width="304" height="78" role="presentation" name="a-ryte1bmj8zdu" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                        </div>
                        <div class="conthsmt">
                            <a href="#" class="button nav-link">
                                <div class="bottom"></div>
                                <div class="top morepadding">
                                    <div class="label"><input type="submit" id="submit-btn" name="submit" value="Submit"></div>
                                    <div class="button-border button-border-left"></div>
                                    <div class="button-border button-border-top"></div>
                                    <div class="button-border button-border-right"></div>
                                    <div class="button-border button-border-bottom"></div>
                                </div>
                            </a>
                        </div>
                    </form>
                    <!-- End : Form -->

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js "></script>
                    <script>
                        $(document).ready(function(){
                            $('#form').submit(function(){

                                $.ajax({
                                    type: 'POST',
                                    url: 'email.php',
                                    data: $(this).serialize()
                                })
                                    .done(function(data){
                                        $('#response').html(data);
                                        if(data == '<div class="alert alert-success" style="color:green;text-align:center;font-weight:bold;margin-bottom:15px;">Thank you for your message, we will contact you shortly.</div>'){
                                            document.getElementById("form").reset();
                                        }
                                    })
                                    .fail(function() {
                                        alert( "Posting failed." );
                                    });
                                return false;
                            });
                        });
                    </script>		</div>
            </div>
        </div>
        <!--Contact form end-->

    </section>
@endsection
@section('script')
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <script src="js/jquery-1.10.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.main-menu li').on('click', function () {
                $(this).find('ul').slideToggle();
            });
        });
    </script>
    <script src="js/swiper.min.js"></script>
    <script src="js/custom.js?ver=1.1"></script>
    <script>var swiper_awards;
        var swiper = new Swiper('.swiper-slider', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true
            // effect: 'cube',
            // grabCursor: true,
            // cube: {
            //     shadow: true,
            //     slideShadows: true,
            //     shadowOffset: 20,
            //     shadowScale: 0.94
            // }
        });

        var m_cords= null;
        var slope = 9999;
        $(".menu").mousemove(function(e){
            m_cords = e;
        });
        $(".menu nav>ul>li").hover(function(e){
            if(m_cords!==null){
                slope = Math.abs((e.pageY-m_cords.pageY)/(e.pageX-m_cords.pageX));
            }else{
                slope = 9999;
            }
            /*console.log(slope);*/
            if(slope<=2){
                return false;

            }
            $(".menu nav>ul .active").removeClass('active');
            $(this).addClass('active');
        },function(){
            setTimeout(function(){
                m_cords= null;
            },500);
        });

        $(".acodez-won ").hover(
            function() {
                $(".acodie-gif",$(this)).attr("src", $(".acodie-gif",$(this)).attr("src"));
            }
        );

        var swiper = new Swiper('.banner-slider', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: 3500,
            autoplayDisableOnInteraction: false,
            speed: 3000,
            effect: 'fade',
            loop: true
        });

        var swiper = new Swiper('.client-slider', {
            paginationClickable: true,
            slidesPerView: 5,
            spaceBetween: 0,
            autoplay: 2500,
            speed: 1000,
            loop: true,
            breakpoints: {
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 0
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                320: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });

        var swiper = new Swiper('.achievement-slide', {
            paginationClickable: true,
            slidesPerView: 4,
            spaceBetween: 0,
            loop: true,
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            breakpoints: {
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 35
                },
                767: {
                    slidesPerView: 2,
                    spaceBetween: 35
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 35
                }
            }
        });

        var swiper = new Swiper('.location-slide', {
            paginationClickable: true,
            slidesPerView: 4,
            spaceBetween: 0,
            paginationClickable: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            breakpoints: {
                1020: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                900: {
                    slidesPerView: 2,
                    spaceBetween: 0
                },
                600: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        });

        var swiper = new Swiper('.tsml-slider', {
            pagination: '.swiper-pagination',
            paginationClickable: true
        });

        $(window).load(function() {
            var swiper = new Swiper('.blog-slide', {
                direction: 'horizontal',
                slidesPerView: 1,
                slidesPerColumn: 2,
                nextButton: '.swiper-button-next',
                prevButton: '.swiper-button-prev',
                spaceBetween: 38,
                loop: false,

                speed: 1000,
                breakpoints: {
                    639: {
                        slidesPerColumn: 1
                    }
                }
            });
        });
    </script>
    <!--For Homepage Header Typing Effects-->
    <script src="js/typed.js" type="text/javascript"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function(){
            Typed.new("#typed", {
                stringsElement: document.getElementById('typed-strings'),
                typeSpeed: 150,
                backDelay: 300,
                loop: true,
                contentType: 'html', // or text
                // defaults to null for infinite loop
                loopCount: null,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });
            var resetElement = document.querySelector('.reset');
            if(resetElement) {
                resetElement.addEventListener('click', function() {
                    document.getElementById('typed')._typed.reset();
                });
            }
        });
        function newTyped(){ /* A new typed object */ }
        function foo(){ console.log("Callback"); }
    </script>
    <link href="css/typewriter.css" rel="stylesheet">
    <!--For Homepage Header Effect-->
    <script src="js/particles.js"></script>
    <script>
        particlesJS("particles-js", {
            "particles": {
                "number": {
                    "value": 120,
                    "density": {
                        "enable": true,
                        "value_area": 1000
                    }
                },
                "color": {
                    "value": "#ffffff"
                },
                "shape": {
                    "type": "circle",
                    "stroke": {
                        "width": 0,
                        "color": "#ffffff"
                    },
                    "polygon": {
                        "nb_sides": 5
                    },
                    "image": {
                        "src": "img/github.svg",
                        "width": 300,
                        "height": 300
                    }
                },
                "opacity": {
                    "value": 0.5,
                    "random": false,
                    "anim": {
                        "enable": false,
                        "speed": 1,
                        "opacity_min": 0.1,
                        "sync": false
                    }
                },
                "size": {
                    "value": 3,
                    "random": true,
                    "anim": {
                        "enable": false,
                        "speed": 40,
                        "size_min": 0.5,
                        "sync": false
                    }
                },
                "line_linked": {
                    "enable": true,
                    "distance": 220,
                    "color": "#ffffff",
                    "opacity": 0.2,
                    "width": 1
                },
                "move": {
                    "enable": true,
                    "speed": 4,
                    "direction": "none",
                    "random": false,
                    "straight": false,
                    "out_mode": "out",
                    "bounce": false,
                    "attract": {
                        "enable": false,
                        "rotateX": 1200,
                        "rotateY": 1200
                    }
                }
            },
            "interactivity": {
                "detect_on": "canvas",
                "events": {
                    "onhover": {
                        "enable": true,
                        "mode": "grab"
                    },
                    "onclick": {
                        "enable": true,
                        "mode": "push"
                    },
                    "resize": true
                },
                "modes": {
                    "grab": {
                        "distance":300,
                        "line_linked": {
                            "opacity": 1
                        }
                    },
                    "bubble": {
                        "distance": 400,
                        "size": 80,
                        "duration": 2,
                        "opacity": 1,
                        "speed": 3
                    },
                    "repulse": {
                        "distance": 200,
                        "duration": 0.4
                    },
                    "push": {
                        "particles_nb": 4
                    },
                    "remove": {
                        "particles_nb": 2
                    }
                }
            },
            "retina_detect": true
        });

        requestAnimationFrame();
    </script>
    <script>
        $("#button").click(function() {
            $('html, body').animate({
                scrollTop: $("#scrollDivTTB").offset().top
            }, 2000);
        });
    </script>
@endsection
@section('footer')
    <!--Footer start-->
    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src=" {{ asset('images/logo.png') }}" alt="Arista Infotech">
                        <p>Arista Infotech is a leading IT technology company &amp; Web Service Provider, established to serve today's online business needs.</p>
                        <div class="footersocial">
                            <a href="https://www.facebook.com/Arista-Infotech-India-1192992207395796/?fref=ts" target="_blank" class="fbicon" title="Facebook"></a>
                            <a href="https://twitter.com/AristaInfotech" target="_blank" class="twicon" title="Twitter"></a>
                            <a href="https://www.linkedin.com/company/arista-infotech-india" target="_blank" class="lnicon" title="Linkedin"></a>
                        </div>
                    </div>
                    <div class="col-md-3 fservcolonly">
                        <h2>Services</h2>
                        <ul>
                            <li><a href="website-design-services.php">Website Design</a></li>
                            <li><a href="website-development-services.php">Website Development</a></li>
                            <li><a href="content-management-services.php">Content Management</a></li>
                            <li><a href="digital-marketing-services.php">Digital Marketing</a></li>
                            <li><a href="reporting-and-analysis-services.php">Reporting &amp; Analysis</a></li>
                            <li><a href="customer-support-services.php">Customer Support</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 qlinkscolonly">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="https://aristainfotech.com/#ourservices">Services</a></li>
                            <li><a href="expertise.php">Expertise</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="work.php">Work</a></li>
                            <li><a href="careers.php">Career</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 gintouchcol">
                        <h2>Get in touch</h2>
                        <div class="frowcont">
                            <label class="addrs"></label>
                            <span><a href="https://goo.gl/maps/mwJVipZpNrN2" target="_blank">18/1, Advance Technology, IT Park, Gayatri Nagar Rd, Parsodi, Nagpur, Maharashtra 440022</a></span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="frowcont">
                            <label class="calicm"></label>
                            <span>
							<a href="tel:+917028001906">(+91) 702-8001-906</a>
							<a href="tel:+19178298442">(+1) 917-829-8442</a>
						</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="frowcont">
                            <label class="emailidicn"></label>
                            <span>
							<a href="mailto:info@aristainfotech.com">info@aristainfotech.com</a>
						</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="frowcont">
                            <label class="workday"></label>
                            <span>Monday to Friday</span>
                            <div class="clearfix"></div>
                            <label class="worktime"></label>
                            <span>3 A.M. to 3 P.M. EST</span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="copyright">
            <p>Copyright © 2019 Arista Infotech. All Rights Reserved</p>
        </div>
    </footer>
    <!--Footer end-->
@endsection
@section('bg')
    <div style="background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); box-shadow: rgba(0, 0, 0, 0.2) 2px 2px 3px; position: absolute; transition: visibility 0s linear 0.3s, opacity 0.3s linear 0s; opacity: 0; visibility: hidden; z-index: 2000000000; left: 0px; top: -10000px;"><div style="width: 100%; height: 100%; position: fixed; top: 0px; left: 0px; z-index: 2000000000; background-color: rgb(255, 255, 255); opacity: 0.05;"></div><div class="g-recaptcha-bubble-arrow" style="border: 11px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -11px; z-index: 2000000000;"></div><div class="g-recaptcha-bubble-arrow" style="border: 10px solid transparent; width: 0px; height: 0px; position: absolute; pointer-events: none; margin-top: -10px; z-index: 2000000000;"></div><div style="z-index: 2000000000; position: relative;"><iframe title="recaptcha challenge" src="https://www.google.com/recaptcha/api2/bframe?hl=en&amp;v=v1566858990656&amp;k=6LcRMigTAAAAAEsGgMDX135PnhR545V9-zP-G-3K&amp;cb=x9c6mgq6grk2" name="c-ryte1bmj8zdu" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" style="width: 100%; height: 100%;"></iframe></div></div></body></html>
@endsection

<html lang="en"><!--<![endif]--><head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Arista Infotech | Website Design Development, Digital Marketing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Arista Infotech is a leading IT technology company &amp; web service provider, established to serve today's online business needs since 2014. We are expert in IT and Web services right from website design and development, digital marketing, content management, reporting and business analysis to customer support.">
    <meta name="keywords" content="digital marketing company, website development company, web design services, web development company, website services, web design and development, content management services, website design services, customer support services, digital marketing services, web design company">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
</head>
<body style="">
<button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block;">⇧</button>
@yield('content')
@yield('header')
@yield('script')
@yield('footer')
</body>
</html>

