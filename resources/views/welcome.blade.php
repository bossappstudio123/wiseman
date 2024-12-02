<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Wiseman</title>
            <link rel="stylesheet" href="{{('assets/css/style.css')}}">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
                crossorigin="anonymous">
        </head>
        <link rel="stylesheet" href="{{('assets/css/mediaquiery.css')}}">
        <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="header">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a href="#">
                    <img src="assets/images/Logo.png" alt="logo" title="logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="navbarNav" aria-labelledby="navbarNavLabel">
                    <div class="offcanvas-header">
                        <a href="#">
                            <img src="assets/images/Logo.png" alt="logo" title="logo" />
                        </a>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link menu-link active home" href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link menu-link about" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link menu-link service" href="{{ route('service.page') }}">Services</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-link contact" href="#">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9">
                    <div class="leftside">
                        <h1 class="banner-title">
                            We guarantee to deliver the best <span class="highlight">solution</span> for your business
                        </h1>
                        <p class="banner-text">
                            You can trust us to provide innovative solutions tailored to meet the unique needs and goals
                            of your business.
                        </p>
                        <div class="details">
                            <div class="detail1">
                                <h4 class="detail-head">10</h4>
                                <span class="detail-text">Active projects</span>
                            </div>
                            <div class="vl"></div>
                            <div class="detail1">
                                <h4 class="detail-head">500<span class="highlight">+</span></h4>
                                <span class="detail-text">Completed Projects</span>
                            </div>
                            <div class="vl"></div>
                            <div class="detail1">
                                <h4 class="detail-head">1000<span class="highlight">+</span></h4>
                                <span class="detail-text">Happy Clients</span>
                            </div>
                        </div>
                        <a href="#">Contact us</a>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6 rightside">
                    <img src="assets/images/banner-image-1.png" alt="banner-image" title="banner-image">
                </div>
            </div>
        </div>
    </section>
    <!-- bannersection end -->
    <!-- aboutsection start -->

    <section class="aboutus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="about-left">
                        <img src="assets/images/about-img.png" alt="aboutus">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="about-right">
                        <h5 class="small-title">about us</h5>
                        <h2 class="right-head">Why you should choose <span class="highlight">wiseman</span></h2>
                        <p class="about-text">We are a digital agency that specializes in web design,
                            SEO, social media management. Our experienced team
                            works with clients to deliver customized solutions that
                            meet their specific needs.</p>
                        <a href="#">Learn more</a>
                    </div>
                </div>
                
            </div>

        </div>
    </section>
    <!-- aboutsection end -->
    <!-- servicesection start -->
    <section class="servivesection">
        <div class="container">
            <div class="row top-service">
                <div class="col-lg-6 col-md-6">
                <div class="top-left">
                        <h5 class="small-title shead">our service</h5>
                        <h2 class="servileft-head">what <span class="highlight">services</span> we're offering</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="top-right">
                        <p class="sbottom-text">We offer services that can help businesses improve their visibility and
                            business reputation online, expand market reach and increase
                            turnover through effective digital strategies. Following are the services
                            we provide</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="bottom-left">
                            <h3 class="bleft-title">Marketing</h3>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="bottom-right">
                            <p class="sbottom-text">Marketing is not the art of finding clever ways to dispose of what
                                you
                                make. It is the art of creating genuine customer value.</p>
                        </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="bottom-left">
                            <h3 class="bleft-title">web design</h3>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="bottom-right">
                            <p class="sbottom-text">We create visually appealing. functional and user-friendly websites
                                that
                                help businesses achieve their online goals</p>
                        </div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="bottom-left">
                            <h3 class="bleft-title">seo</h3>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="bottom-right">
                            <p class="sbottom-text">We implement a comprehensive SEO strategy that includes on-page
                                optimization, content creation, link building and analytics to improve our clients’
                                search
                                engine visibility.</p>
                        </div>
                        
                </div>
            </div>
            <div class="hr"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="bottom-left">
                            <h3 class="bleft-title">graphic design</h3>
                        </div>
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="bottom-right">
                            <p class="sbottom-text">We use industry-standard design tools and techniques to create
                                visually
                                compelling and effective designs tailored to our clients’ unique brand and messaging
                                goals,
                                exceeding their expectations.</p>
                        </div>
                </div>
            </div>
            <div class="hr"></div>
            
            <div class="row">
            <div class="learnmore-1">
                        <a href="#"> learn more </a>
                    </div>
            </div>

    </section>
    <!-- servicesection end -->
    <!-- processsection start -->
    <section class="processsection">
        <div class="container">
            <div class="row process-top">
                <div class="col-lg-6 col-md-6">
                    <div class="ptop-left">
                        <h5 class="small-title">here are the steps</h5>
                        <h2 class="pleft-head">how do we <span class="highlight">work?</span></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="ptop-right">
                        <p class="ptop-text">We have a structured work process to ensure that the projects handled
                            can be completed and according to your needs, Here are some
                            common stages in the work process that we offer
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="step1">
                        <h3 class="step-title">briefing</h3>
                        <p class="step-text">Summary of information or instructions given before a project.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="step1">
                        <h3 class="step-title">ideating</h3>
                        <p class="step-text">Generated through brainstorming, research,
                            observation.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="step1">
                        <h3 class="step-title">processing</h3>
                        <p class="step-text">Set of actions that transform Inputs into desired outputs, requiring
                            planning.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="step1">
                        <h3 class="step-title">finishing</h3>
                        <p class="step-text">Final stage of a process where the product or outcome is completed.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- processsection end -->
    <!-- projectsection start -->
    <section class=projectsection>
        <div class="container">
            <div class="row project-top">
                <div class="col-lg-6 col-md-6">
                    <div class="project-left">
                        <h5 class="small-title">our projrcts</h5>
                        <h2 class="pleft-head">discover our <span class="highlight">selected</span> projects</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="project-right">
                        <p class="ptop-text">We provide digital marketing services to help clients increase their
                            visibility and reach their target audience more effectively. We have assisted various
                            clients some of the results that have been achieved include.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 project-bottom">
                    <img src="assets/images/project-1.jpg" alt="banner-image" title="banner-image">
                </div>
                <div class="col-lg-4 col-md-12 project-bottom"><img src="assets/images/project-2.jpg" alt="banner-image"
                        title="banner-image"></div>
                <div class="col-lg-4 col-md-12 project-bottom">
                    <img src="assets/images/project-3.jpg" alt="banner-image" title="banner-image">
                </div>

            </div>
        </div>
    </section>
    <!-- projectsection end -->
    <!-- testimonial section start -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row testi-top ">
                <div class="col-lg-6 col-md-6">
                    <div class="test-left">
                        <h5 class="small-title">testimonials</h5>
                        <h2 class=" ptoject-top">what people <span class="highlight">says</span> about us</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="test-right">
                        <p class="testi-text">We are a digital agency that specializes in web design, SEO, social media
                            management. Our experienced team works closely with clients to deliver customized solutions
                            that
                            meet their specific needs.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 text-center">
                        <p class="parag">
                            This agency helped me build a successful digital marketing campaign for my product
                        </p>
                        <div class="customer-detail">
                            <div class="profile">
                                <img src="assets/images/DP-1.png" alt="profile-picture">
                            </div>
                            <h5 class="customer">pocket lint</h5>
                            <span>
                                leading tech publication
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 text-center">
                        <p class="parag">
                            I highly recommend this agency for anyone who needs app development, They are very skilled
                            and experienced
                        </p>
                        <div class="customer-detail">
                            <div class="profile">
                                <img src="assets/images/DP-2.png" alt="profile-picture">
                            </div>
                            <h5 class="customer">jessica e</h5>
                            <span>
                                hotel manager
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="testi-1 text-center">
                        <p class="parag">
                            “Super easy to set up, and
                            it’s been useful for putting
                            outside my shop for when I
                            am closed”
                        </p>
                        <div class="customer-detail">
                            <div class="profile">
                                <img src="assets/images/DP-3.png" alt="profile-picture">
                            </div>
                            <h5 class="customer">william m</h5>
                            <span>
                                marketing coordinator
                            </span>
                        </div>

                    </div>
                </div>
            </div>

    </section>

    <!-- testimonial section end -->
    <section class="contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 fp-1">
                    <h3 class="f-head">Contact Us</h3>
                    <div class="cont_con">
                        <form action="#" method="post" id="frmm">
                            <input type="hidden" name="_token" value="l6zXomFfE0ojuMJjmmJRttDMUzttiWAiLc4oNrsi">
                            <div class="row">
                                <div>
                                    <div class="cont_box text-box">
                                        <!-- <label>Name</label> -->
                                        <input type="name" class="form-control" id="name" value="" name="name"
                                            placeholder="Enter Full Name" required="">
                                    </div>
                                </div>
                                <div>
                                    <div class="cont_box text-box">
                                        <!-- <label>Mobile Number</label> -->
                                        <input type="text" class="form-control" value=""
                                            placeholder="Enter Mobile Number" name="mobile" pattern="[6-9]{1}[0-9]{9}"
                                            maxlength="10" required="">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="cont_box text-box">
                                        <!-- <label>Message</label> -->
                                        <textarea class="form-control" rows="3" name="message"
                                            placeholder="Enter Message" value="" id="comment" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="sub_mit">
                                        <input class="btn btn-secondary submit-button mt-3 submit-button" type="submit"
                                            value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fp-1">
                    <h3 class="f-head">Contact</h3>
                    <div class="con_tit d-flex align-items-center mb-2">

                        <h5 class="sub-head">Phone Number</h5>
                    </div>
                    <p class="connect-link"><a href="tel:+919443282277">+91 99999 9999X</a></p>


                    <div class="con_tit d-flex align-items-center mb-2">

                        <h5 class="sub-head">Email:</h5>
                    </div>
                    <p class="connect-link"><a
                            href="mailto:wisemanmarketingsolution.com">wisemanmarketingsolution.com</a>
                    </p>
                    <div class="con_tit d-flex align-items-center mb-2">

                        <h3 class="sub-head">Follow Us</h3>
                    </div>
                    <div>
                        <img class="icon" src="assets/images/FacebookLogo.png" alt="Facebook">
                        <img class="icon" src="assets/images/InstagramLogo.png" alt="Instagram">
                        <img class="icon" src="assets/images/LinkedinLogo.png" alt="Linkedin">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 fp-1">
                    <h3 class="f-head">Address</h3>

                    <p class="address-text">4/183, Rala Complex ,
                        Tiruchendur Main road,
                        Palayamkottai - 627002,
                        Tirunelveli District.
                        Tamil Nadu, South India.</p>
                </div>

            </div>
        </div>
    </section>
    <!-- jquery file -->

    
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
</title>
</head>

<body>

</body>

</html>