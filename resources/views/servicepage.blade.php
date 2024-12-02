<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wiseman</title>
    <link rel="stylesheet" href="{{('assets/css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            <li class="nav-item"><a class="nav-link menu-link service"
                                    href="{{ route('service.page') }}">Services</a>
                            </li>
                            <li class="nav-item"><a class="nav-link menu-link contact" href="#">Contact</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- banner section start -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9">
                    <div class="leftside">
                        <h1 class="banner-title">
                            Marketing <span class="highlight">solution</span> for your business
                        </h1>
                        <p class="banner-text">
                            Our agency provides comprehensive marketing solutions to help business succeed in the
                            competitive digital landscape. From web design to SEO, from graphic design to content
                            marketing, we offer a range of services that cater to every aspect of your marketing needs,
                            Our affordable pricing, 24/7 support, and commitment to high-quality outcomes make us the
                            ideal partner for businesses looking to boost their online presence and growth.
                        </p>
                        <!-- <div class="details">
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
                        </div> -->
                        <a href="#">Contact us</a>
                    </div>

                </div>
                <div class="col-lg-5 col-md-6 rightside">
                    <img src="assets/images/service-banner-img.png" alt="banner-image" title="banner-image">
                </div>
            </div>
        </div>
    </section>
    <!-- bannersection end    -->
    <!-- physical section start -->
    

    <section class="phycalsection">
        <div class="container">

            <h2 class="marketing-head">
                We offer wide range of marketing services to <span class="highlight">Help Business </span>suceeded
                online
            </h2>
            <h5 class="physical">physical marketing</h5>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 1.png" alt="">
                        <h4 class="phy-head">
                            print advertising
                        </h4>
                        <p class="phy-text">
                            Print advertising uses physical media to promote products or services. Its impact depends on
                            visual appeal, messaging and audience targeting.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1  marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 2.png" alt="">
                        <h4 class="phy-head">
                            digital mail advertising
                        </h4>
                        <p class="phy-text">
                            Direct mail advertising targets specific audiences by sending physical mail pieces. It can
                            be
                            effective when targeting the right audience with the right offer.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 3.png" alt="">
                        <h4 class="phy-head">
                            outdoor advertising
                        </h4>
                        <p class="phy-text">
                            Outdoor advertising, like billboards or signage, targets audiences on the go. It must
                            quickly
                            communicate a message to capture attention and create impact.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 4.png" alt="">
                        <h4 class="phy-head">
                            event marketing
                        </h4>
                        <p class="phy-text">
                            Event marketing involves promoting products or services through in-person or virtual events.
                            It
                            can build brand awareness, engage audience and drive sales.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1  marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 5.png" alt="">
                        <h4 class="phy-head">
                            product sampling and demos
                        </h4>
                        <p class="phy-text">
                            Product sampling and demos allow customers to experience products firsthand. This can
                            increase
                            sales, brand loyalty and create word-of-mouth marketing.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 6.png" alt="">
                        <h4 class="phy-head">
                            public relations
                        </h4>
                        <p class="phy-text">
                            Public relations is the practice of managing communication between an organization and its
                            stakeholders, to build or maintain a positive reputation and relationships.</p>

                    </div>

                </div>
            </div>

        </div>
    </section>
    <!-- physical section end -->
    <section class="phycalsection">
        <div class="container">

            
            <h5 class="physical">digital marketing</h5>
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 1.png" alt="">
                        <h4 class="phy-head">
                            print advertising
                        </h4>
                        <p class="phy-text">
                            Print advertising uses physical media to promote products or services. Its impact depends on
                            visual appeal, messaging and audience targeting.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 2.png" alt="">
                        <h4 class="phy-head">
                            digital mail advertising
                        </h4>
                        <p class="phy-text">
                            Direct mail advertising targets specific audiences by sending physical mail pieces. It can
                            be
                            effective when targeting the right audience with the right offer.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 3.png" alt="">
                        <h4 class="phy-head">
                            outdoor advertising
                        </h4>
                        <p class="phy-text">
                            Outdoor advertising, like billboards or signage, targets audiences on the go. It must
                            quickly
                            communicate a message to capture attention and create impact.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 4.png" alt="">
                        <h4 class="phy-head">
                            event marketing
                        </h4>
                        <p class="phy-text">
                            Event marketing involves promoting products or services through in-person or virtual events.
                            It
                            can build brand awareness, engage audience and drive sales.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 5.png" alt="">
                        <h4 class="phy-head">
                            product sampling and demos
                        </h4>
                        <p class="phy-text">
                            Product sampling and demos allow customers to experience products firsthand. This can
                            increase
                            sales, brand loyalty and create word-of-mouth marketing.
                        </p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1  marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 6.png" alt="">
                        <h4 class="phy-head">
                            public relations
                        </h4>
                        <p class="phy-text">
                            Public relations is the practice of managing communication between an organization and its
                            stakeholders, to build or maintain a positive reputation and relationships.</p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1  marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 6.png" alt="">
                        <h4 class="phy-head">
                            public relations
                        </h4>
                        <p class="phy-text">
                            Public relations is the practice of managing communication between an organization and its
                            stakeholders, to build or maintain a positive reputation and relationships.</p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1 marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 6.png" alt="">
                        <h4 class="phy-head">
                            public relations
                        </h4>
                        <p class="phy-text">
                            Public relations is the practice of managing communication between an organization and its
                            stakeholders, to build or maintain a positive reputation and relationships.</p>

                    </div>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="testi-1  marketing-1 text-center">
                        <img class="physical-img" src="assets/images/Group 6.png" alt="">
                        <h4 class="phy-head">
                            public relations
                        </h4>
                        <p class="phy-text">
                            Public relations is the practice of managing communication between an organization and its
                            stakeholders, to build or maintain a positive reputation and relationships.</p>

                    </div>

                </div>
            </div>

        </div>
    </section>



    <!-- <section class="phycalsection">
        <div class="container">

            <h5 class="physical">digital marketing</h5>
            <div class="row">
            <div class="col-lg-4 col-md-12">
                    <div class="testi-1 text-center">
                        <img class="physical-img" src="assets/images/Group 6.png" alt="">
                        <h4 class="phy-head">
                            public relations
                        </h4>
                        <p class="phy-text">
                            Public relations is the practice of managing communication between an organization and its
                            stakeholders, to build or maintain a positive reputation and relationships.</p>

                    </div>

                </div>










                <div class="col-lg-3 col-sm-12 phy-1 ">
                    <div class="test-1 text-center">
                        
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 8.png" alt="">
                        <h4 class="phy-head">
                            pay-per click advertising
                        </h4>
                        <p class="phy-text">
                            PPC advertising charges for each click on ads. It requires keyword research, ad creation,
                            targeting and bid management to increase website traffic and conversions.
                        </p>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 9.png" alt="">
                        <h4 class="phy-head">
                            social media marketing
                        </h4>
                        <p class="phy-text">
                            Social media marketing promotes on social platforms with content, community management,
                            influencers and ads to engage audiences and drive results.
                        </p>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 10.png" alt="">
                        <h4 class="phy-head">
                            content marketing
                        </h4>
                        <p class="phy-text">
                            Mobile marketing targets audiences on mobile devices. It can increase engagement,
                            conversions and customer lifetime value.
                        </p>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 11.png" alt="">
                        <h4 class="phy-head">
                            email marketing
                        </h4>
                        <p class="phy-text">
                            Email marketing sends targeted messages to subscribers. It can nurture leads, drive sales
                            and increase customer loyalty.
                        </p>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 12.png" alt="">
                        <h4 class="phy-head">
                            influencer marketing
                        </h4>
                        <p class="phy-text">
                            Influencer marketing leverages social media influencers to promote products or services, It
                            can increase reach, credibility and conversions.</p>

                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 13.png" alt="">
                        <h4 class="phy-head">
                            mobile marketing
                        </h4>
                        <p class="phy-text">
                            Mobile marketing targets audiences on mobile devices. It can increase engagement,
                            conversions and customer lifetime value.</p>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 14.png" alt="">
                        <h4 class="phy-head">
                            website design and development
                        </h4>
                        <p class="phy-text">
                            Website design and development creates visually appealing sites. It involves user
                            experience, coding, content management and design to drive business results.</p>
                    </div>

                </div>
                <div class="col-lg-3 col-sm-12 phy-1">
                    <div class="test-1 text-center">
                        <img class="physical-img" src="assets/images/Group 15.png" alt="">
                        <h4 class="phy-head">
                            ui/ux designing
                        </h4>
                        <p class="phy-text">
                            UX design is all about identifying and solving user problems; UI design is all about
                            creating intuitive, aesthetically-pleasing, interactive interfaces. UX design usually comes
                            first in the product development process, followed by UI</p>
                    </div>

                </div>
            </div>
        </div>
    </section> -->
   
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
                        Tirunelveli.
                        </p>
                </div>

            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>