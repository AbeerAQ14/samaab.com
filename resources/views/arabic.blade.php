<!DOCTYPE html>
<html class="wide wow-animation" dir="rtl" lang="ar">
<head>
    <title>Home</title>
    <meta content="telephone=no" name="format-detection">
    <meta content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
          name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta charset="utf-8">
    <link href="{{asset('assets/images/favicon.ico')}}" rel="icon" type="image/x-icon">
    <link href="https://cdn.rtlcss.com/bootstrap/v4.0.0/css/bootstrap.min.css" rel="stylesheet">
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
                                            <img src="https://cdn.parcellab.com/img/flags/sa.png" alt="user-image" class="me-0 me-sm-1" >
                                            <span class="align-middle d-none d-lg-inline-block">عربى</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
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

                                        <li class="rd-nav-item active"><a class="rd-nav-link active" href="#home">الرئيسية</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link " href="#services">قصتنا</a></li>

                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#team">خدماتنا</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#news">باقاتنا</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">شركاؤنا</a></li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">انضم لفريقنا</a>
                                        </li>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">اتصل بنا</a>
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
                            <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">ترغب في معرفة من تكون سماء؟</h1>
                            <!--<p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">-->
                            <!--    أغمضِ عيناكِ؛ بماذا تذكرك كلمة "سماء"؟ الصفاء ... الاتساع ... الراحة ... الطموح ...-->
                            <!--    الإبداع ... التحليق عالياً.أفتحِ عيناكِ الآن، نعم ما ذكرتهِ من كلمات وجدنا أنه ما تبحثِ-->
                            <!--    عنه خلال يومك بدايةً من الصباح الباكر إلى المساء. الذهاب للدوام في موعدك دون قلق أو-->
                            <!--    ارتباك. أخذ طفلك إلى مكان آمن حتى العودة. إيجاد مساحة تعلم، لعب، وراحة لطفلك. اكتشاف-->
                            <!--    عالم طفلك بشكل حقيقي. </p>-->
                            <ul style="color:#fff;font-size:18px" class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">
                                <li>أغمضِ عيناكِ؛ بماذا تذكرك كلمة "سماء"</li>
                                <li>الصفاء، الاتساع، الراحة، الطموح، الإبداع والتحليق عالياً</li>
                                <li>أفتحِ عيناكِ الآن، نعم ما ذكرتهِ من كلمات وجدنا أنه ما تبحثِ عنه خلال يومك بدايةً من الصباح الباكر إلى المساء</li>
                                <li>الذهاب للدوام في موعدك دون قلق أو ارتباك.</li>
                                <li>أخذ طفلك  إلى مكان آمن حتى العودة.</li>
                                <li>إيجاد مساحة تعلم، لعب، وراحة لطفلك.</li>
                                <li>اكتشاف عالم طفلك بشكل حقيقي</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" data-slide-bg="{{asset('assets/images/slider-1-slide-6-1770x742.jpg')}}">
                    <div class="opacity-class"></div>
                    <div class="swiper-slide-caption section-md">
                        <div class="container">
                            <h1 data-caption-animate="fadeInLeft" data-caption-delay="0">سماء..</h1>
                            <p class="text-width-large" data-caption-animate="fadeInRight" data-caption-delay="100">
                                مساحة آمنة لطفلك</p>

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


                    <h2 class="wow fadeInLeft">لماذا سماء خيارك المثالي؟</h2>
                    <p>لأن احتياج العميل بالنسبة لنا هدف نعمل على تحقيقه في وقت قياسي وبجودة غير مسبوقة من خلال:</p>
                    <ul>
                        <li>تيسير التعامل مع منصتنا الإلكترونية.</li>
                        <li>سرعة الوصول للمركز القريب من محل إقامتكِ.</li>
                        <li>توفر المعلومات الكافية عن المركز لاطمئنان قلبكِ.</li>
                        <li>سهولة الحجز للحصول على خدمتك المطلوبة.</li>
                        <li>متابعة خدمتنا المقدمة لكِ حتى بعد البيع.</li>
                        <li>اقتراح كل ما هو مناسب لطفلك أو طفلتك.</li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="mission section section-sm section-fluid bg-default">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center">

                <div class="col-lg-6 col-12">
                    <h2>رسالتنا..</h2>
                    <p>نسعى لنكون حلقة الوصل الفعالة حيثُ نسمح لمقدمي الضيافة بإحداث فرق حقيقي في حياة أطفالنا بطريقة آمنة وذكية وإبداعية.</p>
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
                    <h2>هدفنا..</h2>
                    <p>نطمح أن نكون ركن أساسي من أركان كل منزل من خلال تلبية احتياجات وتطلعات أطفالنا من عيش لحظات بطعم الراحة والطمأنينة والإبداع؛ لأن أطفالنا يستحقون الأفضل دائماَ.</p>
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
                    <h2>مسؤوليتنا المُجتمعية..</h2>
                    <p>ولأن عمل المرأة بدايةً من منزلها وصولاً إلى مكان عملها جزء لا يتجزأ من كيان المجتمع؛ حرصنا على توفير كل ما يطمئن قلبها على عائلتها ، وكل ما يحقق أحلامها وطموحها، وكل ما يُلهمها للإبداع والمشاركة الفعالة. لذلك أطلقنا منصتنا الإلكترونية "سماء" لتكون شريك نجاح لكل أم، ربة منزل، عاملة من خلال خلق حلقة وصل بينها وبين مقدمي رعاية وضيافة الأطفال من المراكز والحضانات ذات المستوى الرفيع وفق أفضل الآليات والممارسات الإيجابية المُتطورة. إيماننا بأن النجاح يبدأ من المنزل فـ حلمنا أن نكون ركن أساسي من أركان كل منزل من خلال تلبية احتياجات وتطلعات أطفالنا من عيش لحظات بطعم الراحة والطمأنينة والإبداع. لأن أطفالنا يستحقون الأفضل دائما</p>
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
                    <h2>ما يمكن أن نضيفه لكِ؟</h2>
                    <p>مع سماء لا عناء بعد اليوم من التفكير والبحث عن مكان آمن لطفلك خلال دوامك؛ وفرنا لكل أسرة عربية وسعودية منصة واحدة تجمع كل ما يلبي احتياجها من...</p>
                    <ul>
                        <li>مراكز ضيافة ذات جودة غير مسبوقة.</li>
                        <li>مراكز ضيافة بالقرب من موقعك.</li>
                        <li>العروض والخصومات.</li>
                        <li>الحجز والدفع إلكترونياً.</li>
                        <li>التعرف على تجارب الآخرين.</li>
                        <li>مشاركة رحلة أطفالك الممتعة.</li>
                    </ul>
                    <a href="#" data-toggle="modal" data-target="#modalCta" class="button button-primary button-ujarak fadeInUp animated">استكمل معنا قصتنا</a>
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
                    <h3>ماذا تنتظر؟</h3>
                    <p>تواصل معنا الآن و احجز لطفلك مكانه الآمن دون قلق. </p>
                </div>
            </div>
            <form action="#" class="rd-form rd-form-variant-2 rd-mailform"
                  data-form-output="form-output-global" data-form-type="contact" method="post">
                <div class="row row-14 gutters-14">
                    <div class="col-md-4">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-your-name-2" name="name"
                                   type="text">
                            <label class="form-label" for="contact-your-name-2">اسمك</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-email-2"
                                   name="email"
                                   type="email">
                            <label class="form-label" for="contact-email-2">بريد إلكتروني</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-wrap">
                            <input class="form-input"  id="contact-phone-2" name="phone"
                                   type="text">
                            <label class="form-label" for="contact-phone-2">هاتف</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message-2">رسالة</label>
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
                        <p>فكرنا .. خططنا .. وأساسنا منصة إلكترونية توفر لكِ ملاذ آمن لطفلك حيث تضم ما يقرب أكثر من 100 مركز وحضانة لضيافة الأطفال، تعتمد أدق وأحدث الأساليب التربوية والتعليمية والعلمية، وتطبقها بأفضل معايير الجودة والسلامة والإبداع حتى تطمئن قلوب عائلتنا على أطفالها.</p>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="footer-list-category-2">
                            <li><a href="#">قصتنا</a></li>
                            <li><a href="#"> أقسامنا</a></li>
                            <li><a href="#"> خدماتنا</a></li>
                            <li><a href="#"> شركاؤنا</a></li>
                            <li><a href="#"> انضم لفريق عملنا</a></li>
                            <li><a href="#"> سياسية الخصوصية</a></li>
                            <li><a href="#">الشروط والأحكام</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12 pt-3">
                        <h3>بيانات التواصل</h3>
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
                                    <input class="form-input" d id="contact-modal-name"
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
<!--<a href="https://wa.me/1234567890?text=Hello!%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="whatsapp-button" target="_blank">-->
<!--        <img src="{{asset('wa.png')}}" alt="WhatsApp"/>-->
<!--        Chat with us on WhatsApp-->
<!--    </a>-->
    <a style="position:fixed;bottom:20px;left:20px;z-index:999;max-width:200px" aria-label="Chat on WhatsApp" href="https://wa.me/message/BKJYRHUNKJRYJ1"> <img alt="Chat on WhatsApp" src="{{asset('wa.png')}}" /><a />


<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{asset('assets/js/core.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<!-- coded by Himic-->
</body>
</html>
