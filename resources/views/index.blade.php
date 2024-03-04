<!DOCTYPE html>
<html lang="en-US" class="no-js">
  <head>

    <!-- Title -->
    <title>VIA SOCIUM - Innovating Investment, Inspiring Growth.</title>

    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Powered by Enermak">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('css/jquery.fullpage.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/vegas.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}" type="text/css">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CMontserrat:200,300,400,500,700&display=swap">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

  </head>
  <body class="layout-wide">

    <!-- Loader -->
    <div class="loader bg-dark">
      <div class="spinner-grow text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <div id="top"></div>

    <!-- Site navigation -->
    <nav class="site-navbar site-navbar-transparent navbar navbar-expand-lg navbar-dark fixed-top bg-white shadow-light p-lg-4" data-navbar-base="navbar-dark" data-navbar-toggled="navbar-light" data-navbar-scrolled="navbar-light">

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img src="{{ asset('images/logo.png') }}" class="navbar-brand-img" alt="">
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler-alternative" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-alternative-icon"></span>
      </button>

      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="navbarCollapse">

        <!-- Navigation -->
        <ul class="navbar-nav ml-auto" id="navigation">
          <li class="nav-item active" data-menuanchor="home">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item" data-menuanchor="our-mission">
            <a class="nav-link" href="#our-mission">Our mission</a>
          </li>
          <li class="nav-item" data-menuanchor="what-we-do">
            <a class="nav-link" href="#what-we-do">What we do</a>
          </li>
          <li class="nav-item" data-menuanchor="our-solutions">
            <a class="nav-link" href="#our-solutions">Our solutions</a>
          </li>
          <li class="nav-item" data-menuanchor="our-work">
            <a class="nav-link" href="#our-work">Our work</a>
          </li>
          <li class="nav-item" data-menuanchor="contact">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>

        <!-- Button -->
        <button type="button" class="btn btn-soft-white d-block d-lg-none d-xl-inline-block mb-3 mb-lg-0 ml-lg-3 w-100 w-lg-auto" data-toggle="modal" data-target="#documentationModal" data-on-navbar-light="btn-soft-secondary" data-on-navbar-dark="btn-soft-white">Important</button>

{{--        <!-- Button -->--}}
{{--        <a class="btn btn-primary d-block d-lg-inline-block ml-lg-3" href="#">Close</a>--}}

      </div>
    </nav>

    <!-- Back To Top Button -->
    <a href="#top" class="backtotop">
      <span>Back To Top</span>
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scroll progress -->
    <div class="scroll-progress">
      <div class="sp-left">
        <div class="sp-inner"></div>
        <div class="sp-inner progress"></div>
      </div>
      <div class="sp-right">
        <div class="sp-inner"></div>
        <div class="sp-inner progress"></div>
      </div>
    </div>

    <!-- Fullpage content -->
    <div class="ln-fullpage" data-navigation="true">

      <!-- Section - Home -->
      <section class="ln-section d-flex js-min-vh-100" data-anchor="home" data-tooltip="Home" data-ui="light" data-navbar="navbar-dark">
        <div class="overlay overlay-advanced">
          <div class="overlay-inner bg-image-holder bg-cover bg-bottom-center">
            <img src="{{ asset('images/image-11.jpg') }}" alt="background">
          </div>
          <div class="overlay-inner bg-dark opacity-70"></div>
        </div>
        <div class="container align-self-center text-white">
          <div class="row">
            <div class="col-12 col-lg-9 col-xl-6">

              <h1 class="mb-4 animated" data-animation="fadeInUp">Your vision, our expertise. Together, we build tomorrow.</h1>
              <p class="mb-7 animated" data-animation="fadeInUp" data-animation-delay="200">With a comprehensive suite of services spanning investments, equity solutions, and business consultancy, we are dedicated to providing personalized, innovative strategies that not only address your current needs but also anticipate and shape future opportunities.</p>
              <a href="#our-mission" class="btn btn-white mr-3 scrollto animated" data-animation="fadeInUp" data-animation-delay="400">Learn more</a>
             {{-- <button type="button" class="btn btn-soft-white scrollto animated" data-animation="fadeInUp" data-animation-delay="600" data-toggle="modal" data-target="#subscribeModal">Subscribe</button>--}}

            </div>
          </div>
        </div>
      </section>

      <!-- Section - Our mission -->
      <section class="ln-section d-xl-flex" data-anchor="our-mission" data-tooltip="Our mission" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">

          <div class="row">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp" data-animation-delay="150">Our Mission</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">We strive to empower entrepreneurs and businesses to achieve their fullest potential through innovative investment strategies, equity solutions, and bespoke consultancy services.</p>
                <a href="#what-we-do" class="btn btn-dark mr-3 scrollto animated" data-animation="fadeInUp" data-animation-delay="400">What can we offer?</a>
            </div>
          </div>

        </div>
      </section>

      <section class="ln-section d-xl-flex bg-light" data-anchor="what-we-do" data-tooltip="What we do" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">

          <div class="row">
            <div class="col-12 col-xl-5 mb-8 mb-xl-0">
              <h2 class="animated mb-4" data-animation="fadeInUp">What we Do</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150"><span>At VIA SOCIUM, we unite cutting-edge investment solutions with elite project management and consultancy services, crafting tailored strategies that propel businesses forward. Your vision, our expertise— together, we're building the foundation for tomorrow's success.</span></p>
            </div>
            <div class="col-12 col-xl-6 offset-xl-1">
              <div class="row">

                <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp">
                  <div class="icon-7x text-primary mb-4">
                    <i class="ti-timer"></i>
                  </div>
                  <h3 class="h4 mb-0">Investment Solutions</h3>
                </div>

                <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-7x text-primary mb-4">
                    <i class="ti-money"></i>
                  </div>
                  <h3 class="h4 mb-0">Financial Advisory and Analysis</h3>
                </div>

                <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="300">
                  <div class="icon-7x text-primary mb-4">
                    <i class="ti-book"></i>
                  </div>
                  <h3 class="h4 mb-0">Portfolio Management</h3>
                </div>

                <div class="col-md-6 col-sm-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="450">
                  <div class="icon-7x text-primary mb-4">
                    <i class="ti-user"></i>
                  </div>
                  <h3 class="h4 mb-0">Business Consultancy</h3>
                </div>

                <div class="col-md-6 col-sm-6 mb-8 mb-sm-0 animated" data-animation="fadeInUp" data-animation-delay="600">
                  <div class="icon-7x text-primary mb-4">
                    <i class="ti-settings"></i>
                  </div>
                  <h3 class="h4 mb-0">Project Management Consultancy</h3>
                </div>

                <div class="col-md-6 col-sm-6 animated" data-animation="fadeInUp" data-animation-delay="750">
                  <div class="icon-7x text-primary mb-4">
                    <i class="ti-pencil"></i>
                  </div>
                  <h3 class="h4 mb-0">Bid Support Services</h3>
                </div>

              </div>
            </div>
          </div>

        </div>
      </section>

      <!-- Section - Our solutions -->
      <section class="ln-section d-xl-flex" data-anchor="our-solutions" data-tooltip="Our solutions" data-ui="light" data-navbar="navbar-dark">
        <div class="overlay overlay-advanced">
          <div class="overlay-inner bg-image-holder bg-cover">
            <img src="{{ asset('images/image-3c.jpg') }}" alt="background">
          </div>
          <div class="overlay-inner bg-dark opacity-50"></div>
        </div>
        <div class="container align-self-xl-center text-white">
          <div class="row mb-8">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp">A complete lifecycle solution</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">At VIA SOCIUM, we pride ourselves on offering a complete lifecycle solution that meticulously guides our clients from the initial spark of an idea to the triumphant realization of their goals. This holistic approach ensures not just the achievement of milestones but fosters sustainable growth and long-term success. Our process is segmented into four key steps, each designed to maximize efficiency, innovation, and value creation:</p>
            </div>
          </div>
          <div class="row">

            <div class="col-12 col-lg-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="150">
              <h4>Conceptualization:</h4>
              <p class="mb-0">In this initial phase, we work closely with our clients to understand their vision, objectives, and challenges. Through collaborative workshops and strategic sessions, we help refine ideas, identify opportunities, and lay the groundwork for a viable, actionable plan. This step is crucial for setting clear, attainable goals and aligning expectations.</p>
            </div>

            <div class="col-12 col-lg-6 mb-8 animated" data-animation="fadeInUp" data-animation-delay="300">
              <h4>Strategy Development:</h4>
              <p class="mb-0">With a solid understanding of the concept, we move to strategize. This involves market research, analysis, and leveraging our expertise to develop a comprehensive strategy that outlines the path to success. We focus on creating a robust, flexible plan that can adapt to market dynamics while staying true to the core objectives. This strategy encompasses financial planning, risk assessment, and defining key performance indicators (KPIs).</p>
            </div>

            <div class="col-12 col-lg-6 mb-8 mb-lg-0 animated" data-animation="fadeInUp" data-animation-delay="450">
              <h4>Implementation:</h4>
              <p class="mb-0">The implementation phase is where plans are set into motion. Our project management and consultancy teams work diligently to execute the strategy, overseeing every aspect of the project. From coordinating resources to managing timelines and ensuring quality standards are met, we are committed to bringing the vision to life efficiently and effectively. Regular progress reviews and adjustments keep the project on track toward its goals.</p>
            </div>

            <div class="col-12 col-lg-6 animated" data-animation="fadeInUp" data-animation-delay="600">
              <h4>Evaluation and Finalization:</h4>
              <p class="mb-0">As projects near completion, we engage in a thorough evaluation process, comparing outcomes against initial objectives and KPIs. This step is vital for understanding the project's impact, learning from the process, and making any necessary adjustments before finalization. Upon successful completion, we ensure a smooth transition, whether it involves moving to operational status, market entry, or preparing for the next phase of growth.</p>
            </div>

          </div>
        </div>
      </section>

      <!-- Section - Our work -->
      <section class="ln-section d-xl-flex" data-anchor="our-work" data-tooltip="Our work" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-xl-center">
          <div class="row mb-8">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp">Our Work</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">In showcasing our distinguished past performance, VIA SOCIUM takes pride in presenting a curated selection of our transformative projects. All of these, are a testament to our comprehensive approach, from initiation to full-scale execution. Each project in our slider is accompanied by detailed insights, illustrating our commitment to turning visionary ideas into successful realities. Explore these stories to witness the breadth of our expertise and the depth of our impact.</p>
            </div>
          </div>
          <div class="slider animated" data-animation="fadeInUp" data-animation-delay="300" data-slick='{"dots": true}'>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="{{ asset('images/portfolio/project-6.jpg') }}" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{{ asset('images/portfolio/project-6-min.png') }}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Costimate</h4>
                      <p class="item-cat">AI-Powered CRM Platform</p>
                        <a href="https://www.costimate.net"><p class="item-cat">www.costimate.net</p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row flex-lg-row-reverse">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="{{ asset('images/portfolio/project-1.png') }}" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover" >
                            <img src="{{ asset('images/portfolio/project-1-min.png') }}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5 d-lg-flex justify-content-lg-end text-lg-right">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 ml-auto mr-0 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">Enermak</h4>
                      <p class="item-cat">Energy Delivery Solutions</p>
                        <a href="https://www.enermak.net"><p class="item-cat">www.enermak.net</p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div>
              <div class="portfolio-item mb-8">
                <div class="row">
                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">
                    <div class="item-media">
                      <a href="{{ asset('images/portfolio/project-2.jpeg') }}" class="mfp-image">
                        <div class="media-container">
                          <div class="bg-image-holder bg-cover">
                            <img src="{{ asset('images/portfolio/project-2-min.jpeg') }}" alt="">
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-12 col-lg-5">
                    <div class="pt-lg-8">
                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>
                      <h4 class="h3 item-title">AutoMatch</h4>
                      <p class="item-cat">Vehicle Service platform. First of its kind in UAE</p>
                        <a href="https://www.automatch.ae"><p class="item-cat">www.automatch.ae</p></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

{{--            <div>--}}
{{--              <div class="portfolio-item mb-8">--}}
{{--                <div class="row flex-lg-row-reverse">--}}
{{--                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">--}}
{{--                    <div class="item-media">--}}
{{--                      <a href="{{ asset('images/portfolio/project-3.jpg') }}" class="mfp-image">--}}
{{--                        <div class="media-container">--}}
{{--                          <div class="bg-image-holder bg-cover">--}}
{{--                            <img src="{{ asset('images/portfolio/project-3-min.jpg') }}" alt="">--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </a>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-12 col-lg-5 d-lg-flex justify-content-lg-end text-lg-right">--}}
{{--                    <div class="pt-lg-8">--}}
{{--                      <div class="divider divider-alt bg-dark mt-0 mb-8 ml-auto mr-0 d-none d-lg-block"></div>--}}
{{--                      <h4 class="h3 item-title">Future City</h4>--}}
{{--                      <p class="item-cat">Web Design</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--            <div>--}}
{{--              <div class="portfolio-item">--}}
{{--                <div class="row">--}}
{{--                  <div class="col-12 col-lg-7 mb-4 mb-lg-0">--}}
{{--                    <div class="item-media">--}}
{{--                      <a href="{{ asset('images/portfolio/project-4.jpg') }}" class="mfp-image">--}}
{{--                        <div class="media-container">--}}
{{--                          <div class="bg-image-holder bg-cover">--}}
{{--                            <img src="{{ asset('images/portfolio/project-4-min.jpg') }}" alt="">--}}
{{--                          </div>--}}
{{--                        </div>--}}
{{--                      </a>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="col-12 col-lg-5">--}}
{{--                    <div class="pt-lg-8">--}}
{{--                      <div class="divider divider-alt bg-dark mt-0 mb-8 d-none d-lg-block"></div>--}}
{{--                      <h4 class="h3 item-title">Golden Gate Bridge</h4>--}}
{{--                      <p class="item-cat">Design</p>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
        </div>
      </section>

      <section class="ln-section d-xl-flex bg-light" data-anchor="contact" data-tooltip="Contact" data-ui="dark" data-navbar="navbar-light">
        <div class="container align-self-center">
          <div class="row mb-7">
            <div class="col-12 col-xl-6">
              <h2 class="mb-4 animated" data-animation="fadeInUp">Contact Us</h2>
              <p class="animated" data-animation="fadeInUp" data-animation-delay="150">Want to say hello? Drop us an email and we will get back to you as soon as we can.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-lg-5 mb-8 mb-lg-0">
              <div class="row">

                <div class="col-12 col-md-4 col-lg-6 mb-8 mb-md-0 mb-lg-5 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-mobile"></i>
                  </div>
                  <p class="mb-0">+971 54 3665640<br/>
                  </p>
                </div>

                <div class="col-12 col-md-4 col-lg-6 mb-8 mb-md-0 mb-lg-5 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-location-pin"></i>
                  </div>
                  <p class="mb-0">Block B, Office – B36-040, Sharjah, <br/>
                  United Arab Emirates</p>
                </div>

                <div class="col-12 col-md-4 col-lg-6 animated" data-animation="fadeInUp" data-animation-delay="150">
                  <div class="icon-5x text-primary mb-4">
                    <i class="ti-email"></i>
                  </div>
                  <p class="mb-0"><a href="mailto:info@viasocium.com" class="text-dark">info@viasocium.com</a></p>
                </div>

              </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-1 animated" data-animation="fadeInUp" data-animation-delay="150">
              <div class="contact-form">
                <form class="mb-0" id="cf" name="cf" action="{{ route('contact.submit') }}" method="post" autocomplete="off">
                  @csrf
                  <div class="form-row">

                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <input type="text" id="cf-name" name="cf-name" placeholder="Enter your name" class="form-control required">
                      </div>
                    </div>

                    <div class="col-12 col-md-6">
                      <div class="form-group">
                        <input type="email" id="cf-email" name="cf-email" placeholder="Enter your email address" class="form-control required">
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-group">
                        <input type="text" id="cf-subject" name="cf-subject" placeholder="Subject (Optional)" class="form-control">
                      </div>
                    </div>

                    <div class="col-12 mb-4">
                      <div class="form-group">
                        <textarea name="cf-message" id="cf-message" placeholder="Here goes your message" class="form-control required" rows="7"></textarea>
                      </div>
                    </div>

                    <div class="col-12 d-none">
                      <input type="text" id="cf-botcheck" name="cf-botcheck" value="">
                    </div>

                    <input type="hidden" name="prefix" value="cf-">

                    <div class="col-12">
                      <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit">Send Message</button>
                    </div>

                  </div>
                </form>
                <div class="contact-form-result"></div>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div>

    <!-- Footer -->
    <footer class="position-relative py-10 py-lg-12 bg-dark text-gray-500">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 col-xl-12 col-xxl-10 mx-auto text-center">
            <ul class="list-inline mb-5">
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-facebook-f btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-twitter btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-linkedin-in btn-icon-inner"></i>
                </a>
              </li>
              <li class="list-inline-item mx-0">
                <a class="btn btn-icon btn-text-secondary text-gray-400" href="#" tabindex="0">
                  <i class="fab fa-dribbble btn-icon-inner"></i>
                </a>
              </li>
            </ul>
            <p class="mb-0">© 2024 Via Socium - All Rights Reserved - <a href="#!" class="text-gray-400">Terms of Service</a></p>
          </div>
        </div>
      </div>
    </footer><!-- footer end -->

    <!-- Fullpage - Social icons -->
    <nav class="ln-social-icons">
      <ul class="mx-auto">
        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#!"><i class="fab fa-pinterest"></i></a></li>
      </ul>
    </nav>

    <!-- Fullpage - Copyright -->
    <div class="ln-copyright text-right">
      <p>© 2024 Via Socium - All Rights Reserved - <a href="#!">Terms of Service</a></p>
    </div>

    <!-- Documentation Modal -->
    <div class="modal fade" id="documentationModal" tabindex="-1" role="dialog" aria-labelledby="documentation" aria-hidden="true">
      <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content hover-parent">

          <!-- Button Close -->
          <button type="button" class="btn btn-sm btn-icon btn-primary position-absolute top-0 right-0 mt-n3 mr-n3 zindex-1" data-dismiss="modal" aria-hidden="true">
            <i class="fas fa-times btn-icon-inner"></i>
          </button>

          <!-- Modal Body -->
          <div class="modal-body py-5 py-lg-8 px-5 px-lg-8 text-center">

            <div class="icon icon-boxed icon-7x rounded bg-soft-primary text-primary mb-8">
              <i class="ti-book"></i>
            </div>
            <h2 id="important" class="mb-3">Important</h2>
            <p class="mb-8">Our portfolio website is still being stitched by our tailors. The final version will be released later this year (2024)</p>

            <!-- Button -->
            <a class="btn btn-primary d-block d-lg-inline-block" href="/">Close</a>

          </div>

        </div>
      </div>
    </div>

	<!-- Subscribe Modal -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-labelledby="subscribeNewsletter" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content hover-parent">

          <!-- Button Close -->
          <button type="button" class="btn btn-sm btn-icon btn-white position-absolute top-0 right-0 mt-n3 mr-n3 zindex-1" data-dismiss="modal" aria-hidden="true">
            <i class="fas fa-times btn-icon-inner"></i>
          </button>

          <!-- Overlay -->
          <div class="overlay overlay-advanced">
            <div class="overlay-inner bg-cover" style="background-image: url('assets/images/image-12.jpg');"></div>
            <div class="overlay-inner bg-primary opacity-70 hover-opacity-80"></div>
            <div class="overlay-inner bg-gradient-v-transparent-dark opacity-90 hover-opacity-80"></div>
          </div>

          <!-- Modal Body -->
{{--          <div class="modal-body py-5 py-lg-8 px-5 px-lg-8 text-white text-center">--}}

{{--            <h2 id="subscribeNewsletter" class="mb-4">Subscribe<br/> to our newsletter</h2>--}}
{{--            <p class="mb-7 mb-lg-10">Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox.</p>--}}
{{--            <div class="subscribe-form">--}}
{{--              <form id="sf" name="sf" action="include/subscribe.php" method="post">--}}
{{--                <div class="form-process"></div>--}}
{{--                <div class="form-group">--}}
{{--                  <input type="email" id="sf-email" name="sf-email" placeholder="Enter Your Email Address" class="form-control required">--}}
{{--                </div>--}}
{{--                <input type="text" id="sf-botcheck" name="sf-botcheck" value="" class="form-control d-none">--}}
{{--                <button class="btn btn-soft-white btn-block" type="submit" id="sf-submit" name="sf-submit">Notify Me</button>--}}
{{--              </form>--}}
{{--              <div class="subscribe-form-result"></div>--}}
{{--            </div>--}}

{{--          </div>--}}

        </div>
      </div>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/scrolloverflow.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js"></script>
    <script src="{{ asset('js/jquery.fullpage.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('js/granim.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/vegas.min.js') }}"></script>
    <!-- Theme JS -->
    <script src="{{ asset('js/main.js') }}"></script>

  </body>
</html>
