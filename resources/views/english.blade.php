<!DOCTYPE html>
<html class="wide wow-animation"  lang="en">
<head>
    <title>Home</title>
    <meta content="telephone=no" name="format-detection">
    <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
          name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta charset="utf-8">
    <link href="{{asset('assets/images/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css?v='.time())}}" rel="stylesheet">
    <style>.ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }</style>
</head>
<body>
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img
            alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."
            height="42" src="{{asset('assets/images/ie8-panel/warning_bar_0000_us.jpg')}}"
            width="820"></a>
</div>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
    </div>
</div>
<div class="page">
    <div id="home">
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed"
                     data-lg-device-layout="rd-navbar-fixed"
                     data-lg-layout="rd-navbar-static" data-lg-stick-up="true"
                     data-lg-stick-up-offset="46px" data-md-device-layout="rd-navbar-fixed"
                     data-md-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                     data-xl-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
                     data-xl-stick-up="true" data-xl-stick-up-offset="46px" data-xxl-device-layout="rd-navbar-static"
                     data-xxl-layout="rd-navbar-static" data-xxl-stick-up="true" data-xxl-stick-up-offset="46px">
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap">
                                    <span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand"><a class="brand" href="/"><img
                                            alt="" height="50" src="{{asset('assets/images/sama_colored.png')}}" width="223"/></a></div>
                            </div>
                            <div class="rd-navbar-main-element">
                                <div class="rd-navbar-nav-wrap">
                                    <!-- RD Navbar Share-->

                                    <div class="dropdown">
                                        <a class="dropdown-toggle arrow-none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{asset('us.jpg')}}" alt="user-image" class="me-0 me-sm-1" >
                                            <span class="align-middle d-none d-lg-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated" aria-labelledby="dropdownMenuLink">

                                            <!-- item-->
                                            <a href="{{route('landing',['lang'=>'en'])}}" class="dropdown-item">
                                                <img src="{{asset('us.jpg')}}" alt="user-image" class="me-1" > <span class="align-middle">English</span>
                                            </a>

                                            <!-- item-->
                                            <a href="{{route('landing',['lang'=>'ar'])}}" class="dropdown-item">
                                                <img src="https://cdn.parcellab.com/img/flags/sa.png" alt="user-image" class="me-1" > <span class="align-middle">عربى</span>
                                            </a>
                                        </div>
                                    </div>


                                    <ul class="rd-navbar-nav ml-20">

                                        <li style="margin-right: 42px;" class="rd-nav-item active"><a class="rd-nav-link active" href="#home">Home</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link " href="#services">Our Story</a></li>

                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Our Services</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#news">Our Packages</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Our Partners</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Join our team</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Contact us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- Swiper-->
        <section class="section swiper-container swiper-slider swiper-slider-classic" data-autoplay="4859"
                 data-direction="vertical" data-loop="true" data-nav="false" data-simulate-touch="true">
            <div class="swiper-wrapper text-center">
                <div class="swiper-slide" data-slide-bg="{{asset('assets/images/slider-1-slide-2-1770x742.jpg')}}">
                    <div class="opacity-class"></div>
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <h2 style="color: #fff" data-caption-animate="fadeInLeft" data-caption-delay="0">Want to know who Samaa is?</h2>
                            <ul style="color:#fff;font-size:18px" class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">
                                <li>Close your eyes; What does the word "SAMA" remind you of?</li>
                                <li>Serenity, spaciousness, comfort, ambition, creativity and soaring highً</li>
                                <li>Open your eyes now. Yes, the words you mentioned are what you are looking for during your day, from early morning until evening.</li>
                                <li>Go to work at your appointment without worry or confusion.</li>
                                <li>Take your child to a safe place until you return.</li>
                                <li>Create a learning, playing, and resting space for your child.</li>
                                <li>Really discover your child's world</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="{{asset('assets/images/slider-1-slide-6-1770x742.jpg')}}">
                    <div class="opacity-class"></div>
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">SAMA</h1>
                            <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">A safe space for your child</p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination__module">
                <div class="swiper-pagination__fraction"><span class="swiper-pagination__fraction-index">00</span><span
                        class="swiper-pagination__fraction-divider">/</span><span
                        class="swiper-pagination__fraction-count">00</span></div>
                <div class="swiper-pagination__divider"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
    </div>

    <section class="mission section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-12">


                    <h2 class="wow fadeInLeft">Why Is Sama Your Ideal Choice?</h2>
                    <p>Because the customer’s need is a goal for us that we work to achieve in record time and with unprecedented quality through:
                    </p>
                    <ul>
                        <li>Facilitating dealing with our electronic platform.
                        </li>
                        <li>Quick access to the center near your residence.
                        </li>
                        <li>Provide sufficient information about the center to reassure your heart.
                        </li>
                        <li>Easy reservation to get your required service.
                        </li>
                        <li>Follow up on our service provided to you even after the sale.
                        </li>
                        <li>Suggest whatever is appropriate for your boy or girl.
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mission section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-6 col-12">
                    <h2>Our Message..
                    </h2>
                    <p>We seek to be the effective link where we allow hospitality providers to make a real difference in the lives of our children in a safe, smart and creative way.

                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img style="width:100%;height:auto;border:10px solid #ededed" src="{{asset('assets/images/mission.jpg')}}">
                </div>
            </div>
        </div>
    </section>
    <section class="mission section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-6 col-12">
                    <h2>Our Goal..
                    </h2>
                    <p>We aspire to be an essential cornerstone of every home by meeting the needs and aspirations of our children to live moments of comfort, reassurance, and creativity. Because our children always deserve the best.

                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img style="width:100%;height:auto;border:10px solid #ededed" src="{{asset('assets/images/goal_1745x977_500.jpeg')}}">
                </div>
            </div>
        </div>
    </section>


    <section class="mission section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <h2>Our Social Responsibility..
                    </h2>
                    <p>Because women's work, from their home to their workplace, is an integral part of society; We were keen to provide everything that reassures her heart about her family, everything that fulfills her dreams and ambitions, and everything that inspires her to creativity and active participation. Therefore, we launched our electronic platform “Samaa” to be a success partner for every mother, housewife, or worker by creating a link between her and child care and hospitality providers from high-level centers and nurseries in accordance with the best advanced mechanisms and positive practices. Our belief is that success begins at home, so our dream is to be an essential pillar of every home by meeting the needs and aspirations of our children to live moments with a taste of comfort, reassurance, and creativity. Because our children always deserve the best

                    </p>
                </div>
                <div class="col-lg-6 col-12">
                    <img style="width:100%;height:auto;border:10px solid #ededed" src="{{asset('assets/images/social.jpg')}}">
                </div>
            </div>
        </div>
    </section>


    <section class="mission section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6 col-12">
                    <h2>What Can We Add For You?
                    </h2>
                    <p>
                        With Samaa, you no longer have to worry about thinking and searching for a safe place for your child during your work day We have provided one platform that brings together everything that meets their needs......
                    </p>
                    <ul>
                        <li>Hospitality centers of unsurpassed quality.
                        </li>
                        <li>Hospitality centers near your location.
                        </li>
                        <li>Offers and discounts.
                        </li>
                        <li>Book and pay online.
                        </li>
                        <li>Learn about the experiences of others.
                        </li>
                        <li>Share your children's fun trip.
                        </li>
                    </ul>
                    <a href="#" data-toggle="modal" data-target="#modalCta" class="button button-primary button-ujarak fadeInUp animated">Continue our story with us</a>
                </div>
                <div class="col-lg-6 col-12">
                    <img style="width:100%;height:auto;border:10px solid #ededed" src="{{asset('assets/images/down.jpg')}}">
                </div>
            </div>
        </div>
    </section>


    <!-- Contact information-->
    <section class="section section-sm bg-default">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <article class="box-contacts">
                        <div class="box-contacts-body">
                            <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                            <div class="box-contacts-decor"></div>
                            <p class="box-contacts-link"><a href="#">KSA Riyadh</a>
                            </p>
                        </div>
                    </article>
                </div>
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <article class="box-contacts">
                        <div class="box-contacts-body">
                            <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                            <div class="box-contacts-decor"></div>
                            <p class="box-contacts-link"><a href="mailto:contact@samaab.com">contact@samaab.com</a></p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form-->
    <section class="section section-sm section-last bg-default text-left" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>What Are You Waiting For?
                    </h3>
                    <p>Contact us now and reserve a safe place for your child without worry.
                    </p>
                </div>
            </div>
            <form action="#" class="rd-form rd-form-variant-2 rd-mailform"
                  data-form-output="form-output-global" data-form-type="contact" method="post">
                <div class="row row-14 gutters-14">
                    <div class="col-md-4">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-your-name-2" name="name"
                                   type="text">
                            <label class="form-label" for="contact-your-name-2">Your Name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-email-2"
                                   name="email"
                                   type="email">
                            <label class="form-label" for="contact-email-2">e-mail</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-phone-2" name="phone"
                                   type="text">
                            <label class="form-label" for="contact-phone-2">Phone</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message-2">Message</label>
                            <textarea class="form-input textarea-lg"  id="contact-message-2"
                                      name="message"></textarea>
                        </div>
                    </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
            </form>
        </div>
    </section>


    <!-- RD Google Map-->
    <section class="section section-fluid">
        <section class="section">
            <div id="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.2117861684965!2d46.6462108!3d24.7196084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f1d5b39b21a09%3A0x4177056c8f375271!2zVGhlIEdhcmFnZSDYp9mE2YPYsdin2Kw!5e0!3m2!1sen!2sbd!4v1713645281503!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </section>
    <style>
        #map-container{
            width: 100%;
            height: 450px;
        }
    </style>

    <!-- Page Footer-->
    <footer class="section section-fluid footer-minimal context-dark ">
        <div class="bg-gray-15">
            <div class="container-fluid">
                <div class="row pb-5">
                    <div class="col-lg-4 col-12">
                        <img style="max-height:130px; padding: 20px 0" src="{{asset('assets/images/sama_white.png')}}">
                        <p>We thought, we planned, and we established an electronic platform that provides you with a safe haven for your child, as it includes more than 100 centers and nurseries to accommodate children, adopting the most accurate and latest educational, educational and scientific methods, and applying them with the best standards of quality, safety and creativity so that the hearts of our family are reassured about their children.</p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="footer-list-category-2">
                            <li><a href="#">OUR STORY</a></li>
                            <li><a href="#"> OUR DEPARTMENTS</a></li>
                            <li><a href="#"> OUR SERVICES</a></li>
                            <li><a href="#"> OUR PARTNERS</a></li>
                            <li><a href="#">JOIN OUR TEAM</a></li>
                            <li><a href="#">PRIVACY POLICY</a></li>
                            <li><a href="#">TERMS AND CONDITIONS</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12 pt-3">
                        <h3>Contact Information
                        </h3>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <div aria-hidden="true" class="modal fade" id="modalCta" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Contact Us</h4>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body">
                    <form action="bat/rd-mailform.php" class="rd-form rd-form-variant-2 rd-mailform"
                          data-form-output="form-output-global" data-form-type="contact-modal" method="post">
                        <div class="row row-14 gutters-14">
                            <div class="col-12">
                                <div class="form-wrap">
                                    <input class="form-input"  id="contact-modal-name"
                                           name="name"
                                           type="text">
                                    <label class="form-label" for="contact-modal-name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <input class="form-input"
                                           id="contact-modal-email" name="email"
                                           type="email">
                                    <label class="form-label" for="contact-modal-email">E-mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <input class="form-input"  id="contact-modal-phone"
                                           name="phone"
                                           type="text">
                                    <label class="form-label" for="contact-modal-phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-wrap">
                                    <label class="form-label" for="contact-modal-message">Message</label>
                                    <textarea class="form-input textarea-lg"
                                              id="contact-modal-message"
                                              name="message"></textarea>
                                </div>
                            </div>
                        </div>
                        <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Area-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div>
                    <ul>
                        <li>ترغبِ في معرفة من تكون سماء؟</li>
                        <li>أغمضِ عيناكِ؛ بماذا تذكرك كلمة "سماء"</li>
                        <li>الصفاء، الاتساع، الراحة، الطموح، الإبداع والتحليق عالياً.</li>
                        <li>أفتحِ عيناكِ الآن، نعم ما ذكرتهِ من كلمات وجدنا أنه ما تبحثِ عنه خلال يومك بدايةً من الصباح الباكر إلى المساء.</li>
                        <li>الذهاب للدوام في موعدك دون قلق أو ارتباك.</li>
                        <li>أخذ طفلك  إلى مكان آمن حتى العودة.</li>
                        <li>إيجاد مساحة تعلم، لعب، وراحة لطفلك.</li>
                        <li>اكتشاف عالم طفلك بشكل حقيقي.</li>
                        <li>لذلك فكرنا، خططنا، وأساسنا منصة إلكترونية بضغطة زر واحدة توفر لكِ ملاذ آمن لطفلك حيث تضم ما يقرب من 100 مركز وحضانة لضيافة الأطفال،</li>
                        <li>تعتمد أدق وأحدث الأساليب التربوية والتعليمية والعلمية، وتطبقها بأفضل معايير الجودة والسلامة والإبداع حتى يطمئن قلب كل أم وسيدة عاملة وربة منزل على أطفالها.
                            وأطلقنا عليها اسم "سماء" حيثُ لا حدود لراحة طفلك</li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
  <a style="position:fixed;bottom:20px;left:20px;z-index:999;max-width:200px" aria-label="Chat on WhatsApp" href="https://wa.me/message/BKJYRHUNKJRYJ1"> <img alt="Chat on WhatsApp" src="{{asset('wa.png')}}" /><a />

<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{asset('assets/js/core.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<!-- coded by Himic-->
</body>
</html>
