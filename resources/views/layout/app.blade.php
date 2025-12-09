<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <meta name="description" content="@yield('description')">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:type" content="article">
    

        <link rel="shortcut icon" href="/assets/img/favicon.png" type="image/png" />

        <!-- Header Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/css/style.css?v=2" rel="stylesheet" />
        
        <link href="/assets/css/course.css?v=1.1" rel="stylesheet" />

        <!-- Google Fonts -->
        <link  href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Poppins:wght@400;700&display=swap"  rel="stylesheet" />
        
</head>
<body class="bg-gray-50 text-gray-800">

        <!-- Header -->
        <header class="site-header" id="siteHeader" role="banner">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand d-flex align-items-center" href="/">
                        <img src="/assets/img/logowebwhite.png" alt="LearnToDigital logo" />
                    </a>
            
                    <!-- Mobile toggle (opens full-width offcanvas) -->
                    <button
                        class="btn mobile-toggle d-lg-none border-0"
                        type="button"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#mobileMenu"
                        aria-controls="mobileMenu"
                        aria-label="Open menu"
                    >
                        <span class="hamburger"><span></span><span></span><span></span></span>
                    </button>
            
                    <!-- Desktop Navigation -->
                    <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex" id="navbarNav">
                        <ul class="navbar-nav align-items-lg-center">
            
                            <li class="nav-item me-2">
                                <a class="nav-link" href="/">Home</a>
                            </li>
            
                            <li class="nav-item me-2">
                                <a class="nav-link" href="/about/">About Us</a>
                            </li>
            
                            <!-- Courses Mega Menu -->
                            <li class="nav-item dropdown me-2">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="coursesDropdown"
                                    role="button"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false"
                                >Courses</a>
            
                                <div class="dropdown-menu p-3 mega-menu shadow" aria-labelledby="coursesDropdown">
                                    <div class="row gx-4">
            
                                        <!-- Digital Courses -->
                                        <div class="col-md-4">
                                            <div class="col-title">Digital Courses</div>
                                            <a href="/course/digital-marketing-training/">Digital Marketing</a>
                                            <a href="/course/seo-training/">SEO</a>
                                            <a href="/course/smo-training/">SMO</a>
                                            <a href="/course/ppc-training/">PPC</a>
                                            <a href="/course/orm-training/">ORM</a>
                                        </div>
            
                                        <!-- Website Designing / Dev -->
                                        <div class="col-md-4">
                                            <div class="col-title">Website Designing</div>
                                            <a href="/course/wordpress-training/">WordPress</a>
                                            <a href="/course/html-css-js-training/">HTML, CSS, JS</a>
                                            <a href="/course/react-js-next-js-training/">React JS / NEXT JS</a>
                                            <a href="/course/python-training/">Python</a>
                                            <a href="/course/shopify-training/">Shopify</a>
                                            <a href="/course/php-training/">PHP</a>
                                        </div>
            
                                        <!-- More Courses -->
                                        <div class="col-md-4">
                                            <div class="col-title">More Courses</div>
                                            <a href="/course/graphic-designing-training/">Graphic Designing</a>
                                            <a href="/course/software-development-training/">Software Development</a>
                                            <a href="/course/app-development-training/">App Development</a>
                                            <a href="/course/computer-training/">Computer Training</a>
                                            <a href="/course/ai-expert-training/">AI Expert</a>
                                            <a href="/course/creator-influencer-training/">Become a Creator/Influencer</a>
                                        </div>
            
                                    </div>
                                </div>
                            </li>
            
                            <li class="nav-item me-2">
                                <a class="nav-link" href="https://learntodigital-ltd.blogspot.com/">Blogs</a>
                            </li>
            
                            <li class="nav-item me-2">
                                <a class="nav-link" href="/video-testimonials/">Testimonials</a>
                            </li>
            
                            <li class="nav-item me-3">
                                <a class="nav-link" href="/contact/">Contact Us</a>
                            </li>
            
                            <li class="nav-item">
                                <a class="btn btn-cta" href="#" data-bs-toggle="modal" data-bs-target="#courseDemoModalLabel">
                                    <i class="bi bi-calendar2-plus me-2"></i>Book Free Demo
                                </a>
                            </li>
            
                        </ul>
                    </div>
                </div>
            </nav>
        


        </header>

        <!-- Offcanvas Mobile Menu (full width) -->
        <div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
            <div class="offcanvas-header">
                <a class="d-flex align-items-center text-decoration-none" href="/">
                    <img src="/assets/img/logowebwhite.png" alt="logo" style="height: 36px" />
                    <div class="ms-2">
                        <div style="font-weight: 700; color: #fff">LearnToDigital</div>
                        <div style="font-size: 0.85rem; color: rgba(255, 255, 255, 0.6)">Best Digital Courses</div>
                    </div>
                </a>
                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                ></button>
            </div>
            <div class="offcanvas-body">
                <nav class="nav flex-column">
                    <a class="nav-link" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
                
                    <a class="nav-link" href="/about/">
                        <i class="bi bi-person-lines-fill"></i> About Us
                    </a>
                
                    <!-- Digital Courses -->
                    <div class="mt-2 mb-2">
                        <strong class="text-uppercase" style="color: var(--accent)">Courses</strong>
                    </div>
                
                    <a class="nav-link" href="/course/digital-marketing-training/">Digital Marketing</a>
                    <a class="nav-link" href="/course/seo-training/">SEO</a>
                    <a class="nav-link" href="/course/smo-training/">SMO</a>
                    <a class="nav-link" href="/course/ppc-training/">PPC</a>
                    <a class="nav-link" href="/course/orm-training/">ORM</a>
                
                    <!-- Website / Dev -->
                    <div class="mt-3 mb-2">
                        <strong class="text-uppercase" style="color: var(--accent)">Website Designing</strong>
                    </div>
                
                    <a class="nav-link" href="/course/wordpress-training/">WordPress</a>
                    <a class="nav-link" href="/course/html-css-js-training/">HTML, CSS, JS</a>
                    <a class="nav-link" href="/course/react-js-next-js-training/">React / Next JS</a>
                    <a class="nav-link" href="/course/python-training/">Python</a>
                    <a class="nav-link" href="/course/shopify-training/">Shopify</a>
                    <a class="nav-link" href="/course/php-training/">PHP</a>
                
                    <!-- More Courses -->
                    <div class="mt-3 mb-2">
                        <strong class="text-uppercase" style="color: var(--accent)">More Courses</strong>
                    </div>
                
                    <a class="nav-link" href="/course/graphic-designing-training/">Graphic Designing</a>
                    <a class="nav-link" href="/course/software-development-training/">Software Development</a>
                    <a class="nav-link" href="/course/app-development-training/">App Development</a>
                    <a class="nav-link" href="/course/computer-training/">Computer Training</a>
                    <a class="nav-link" href="/course/ai-expert-training/">AI Expert</a>
                    <a class="nav-link" href="/course/creator-influencer-training/">Become a Creator/Influencer</a>
                
                    <div class="divider"></div>
                
                    <a class="nav-link" href="https://learntodigital-ltd.blogspot.com/">
                        <i class="bi bi-journal-text"></i> Blogs
                    </a>
                
                    <a class="nav-link" href="/video-testimonials/">
                        <i class="bi bi-chat-quote-fill"></i> Testimonials
                    </a>
                
                    <a class="nav-link" href="/contact/">
                        <i class="bi bi-telephone-fill"></i> Contact Us
                    </a>
                
                    <!-- Demo Button -->
                    <div class="mt-4">
                        <a
                            class="btn btn-cta w-100"
                            href="#"
                            data-bs-dismiss="offcanvas"
                            data-bs-toggle="modal"
                            data-bs-target="#courseDemoModalLabel"
                        >
                            <i class="bi bi-calendar2-plus me-2"></i> Book Free Demo
                        </a>
                    </div>
                
                    <!-- Contact Info -->
                    <div class="mt-4 muted">
                        <div><strong>Call:</strong> +91 99994 03032</div>
                        <div class="mt-1"><strong>Email:</strong> info@learntodigital.com</div>
                    </div>
                </nav>
            </div>
        </div>

    <main>
        @yield('content')
    </main>
            <footer id="site-footer" class="ltd-footer">
            <div class="container">
                <div class="row gy-4">
                    <!-- Brand & Contact -->
                    <div class="col-lg-4">
                        <div class="footer-brand">
                            <img src="/assets/img/logowebwhite.png" alt="LearnToDigital logo" class="footer-logo" />
                            <div class="brand-text">
                                <h4 class="brand-title">LearnToDigital</h4>
                                <p class="brand-tag">Premium practical courses • Live projects • 100% Job Assistance</p>
                            </div>
                        </div>
        
                        <div class="footer-contact mt-3">
                            <a class="contact-line" href="tel:+919999403032"
                                ><i class="bi bi-telephone-fill"></i> +91 99994 03032</a
                            >
                            <a class="contact-line" href="mailto:info@learntodigital.com"
                                ><i class="bi bi-envelope-fill"></i> info@learntodigital.com</a
                            >
                            <div class="contact-address mt-2">
                                909, 9th floor, Vipul Business Park, Badshahpur Sohna Rd, Sector 48, Gurugram, Haryana 122018
                            </div>
                        </div>
        
                        <div class="footer-cta mt-3">
                            <a href="tel:+919999403032" class="btn btn-footer-call"
                                ><i class="bi bi-telephone-fill me-2"></i> Call</a
                            >
                            <a href="https://wa.me/919999403032" target="_blank" rel="noopener" class="btn btn-footer-wts"
                                ><i class="bi bi-whatsapp me-2"></i> WhatsApp</a
                            >
                        </div>
                    </div>
        
                    <!-- Courses -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <h6 class="footer-heading">Courses</h6>
                        <ul class="footer-links list-unstyled">
                            <li><a href="/course/digital-marketing-training/">Digital Marketing</a></li>
                            <li><a href="/course/seo-training/">SEO</a></li>
                            <li><a href="/course/ppc-training/">PPC</a></li>
                            <li><a href="/course/wordpress-training/">WordPress</a></li>
                            <li><a href="/course/react-js-next-js-training/">React / Next.js</a></li>
                            <li><a href="/course/python-training/">Python</a></li>
                        </ul>
                    </div>
        
                    <!-- Quick Links -->
                    <div class="col-6 col-md-4 col-lg-2">
                        <h6 class="footer-heading">Quick Links</h6>
                        <ul class="footer-links list-unstyled">
                            <li><a href="/about/">About</a></li>
                            <li><a href="/blogs/">Blog</a></li>
                            <li><a href="/video-testimonials/">Testimonials</a></li>
                            <li><a href="/contact/">Contact</a></li>
                            <li><a href="/sitemap.xml">Sitemap</a></li>
                        </ul>
                    </div>
        
                    <!-- Branches -->
                    <div class="col-12 col-lg-4">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="footer-heading mb-0">Branches</h6>
                            <button
                                class="btn btn-sm btn-toggle-branches d-lg-none"
                                type="button"
                                aria-expanded="false"
                                aria-controls="branchesList"
                            >
                                <i class="bi bi-chevron-down"></i> View
                            </button>
                        </div>
        
                        <div id="branchesList" class="branches-list mt-3">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>107, 1st Floor, Vipul Trade Center, Sector 48, Sohna
                                    Road, Gurugram, Haryana 122018
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>A 180 Kabir Nagar, 04, Main 100 Feet Rd, Babarpur
                                    Village, Shahdara, Delhi, 110094
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>Unit No 2002, Supertech Ecovillage 3, Noida, Uttar
                                    Pradesh 201009
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>2nd Floor, Badkhal Mor Metro, Plot no. 19AA,
                                    Faridabad, Haryana 121007
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>Floor-1B, 3rd, 23/320, Rajinder Nagar, Ghaziabad,
                                    Uttar Pradesh 201002
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>2nd Floor, Commercial Plaza, Office no 22, Plot no
                                    12, Sector 12, Dwarka 110075
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>26/100, New Sanganer Rd, Rajiv Nagar, Sodala, Jaipur,
                                    Rajasthan 302019
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>1st Floor, AFC Building, Jhalawar Rd, Kota, Rajasthan
                                    324001
                                </li>
                                <li>
                                    <i class="bi bi-geo-alt-fill me-2"></i>Pratham Academy, Mangalpura, Jhalawar, Rajasthan
                                    326001
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
        
                <hr class="footer-sep" />
        
                <div class="row align-items-center gy-3">
                    <div class="col-md-4 d-flex align-items-center gap-3">
                        <div class="socials">
                            <a class="social facebookbtn" href="https://www.facebook.com/learntodigital" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                            <a class="social instgrambtn" href="https://www.instagram.com/learntodigital/" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                            <a class="social youtubebtn" href="https://www.youtube.com/@learntodigital3942" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                            <a class="social linkedinbtn" href="https://www.linkedin.com/company/learn-to-digital/" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
        
                    <div class="col-md-8 text-md-end">
                        <div class="small muted copyright"></div>
                        <div class="small muted">
                            &copy; <span id="footerYear"></span> LearnToDigital. All rights reserved. | Designed for
                            Professionals • Built by <a href="https://www.brainvative.com/" class="link-muted" title="Digital Marketing Agency">Brainvative</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <div class="ltd-floating-actions" aria-hidden="false">
            <a class="fa-btn fa-call" href="tel:+919999403032" aria-label="Call LearnToDigital">
                <i class="bi bi-telephone-fill" aria-hidden="true"></i>
                <span class="fa-label">Call</span>
            </a>

            <a
                class="fa-btn fa-wats"
                href="https://wa.me/919999403032?text=Hi%20LearnToDigital%20team%2C%20I%20want%20to%20book%20a%20free%20demo."
                target="_blank"
                rel="noopener"
                aria-label="WhatsApp LearnToDigital"
            >
                <i class="bi bi-whatsapp" aria-hidden="true"></i>
                <span class="fa-label">WhatsApp</span>
            </a>

            <button class="fa-btn fa-top" id="ltdBackTop" aria-label="Back to top" title="Back to top">
                <i class="bi bi-arrow-up-short" aria-hidden="true"></i>
            </button>
        </div>
        
        
        <div
            class="modal fade"
            id="courseDemoModalLabel"
            tabindex="-1"
            aria-labelledby="courseDemoModalLabelLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="courseDemoModalLabelLabel">Book Free Demo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="courseDemoForm" novalidate  action="/PHPMailer/mail/" method="post">
                            <div class="mb-2">
                                <label class="form-label small">Full name</label>
                                <input class="form-control form-control-sm" type="text" name="name" required />
                            </div>
                            <div class="mb-2">
                                <label class="form-label small">Email</label>
                                <input class="form-control form-control-sm" type="email" name="email" required />
                            </div>
                            <div class="mb-2">
                                <label class="form-label small">Mobile</label>
                                <input class="form-control form-control-sm" type="tel" name="phone" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label small">City</label>
                                <input
                                    class="form-control form-control-sm"
                                    type="text" name="city"
                                    placeholder="City name (optional)"
                                />
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-cta" type="submit" name="submit">Request Demo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        


        <!-- Footer Css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <!-- Footer JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="/assets/js/js.js?aa"></script>

    </body>
</html>


