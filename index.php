<?php include('includes/header.php');?>

<!-- Top Navigation Bar -->
<nav class="top-navbar navbar navbar-expand-lg">
    <div class="container-fluid">
        <!-- Brand -->
        <div class="navbar-brand d-flex align-items-center">
            <div class="logo-icon">
                <img src="assets/images/main-logo.svg" alt="Al-Futtaim Logo">
            </div>
            <span class="brand-text">Intranet</span>
        </div>

        <!-- Mobile Menu Button -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Main Navigation -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="navbar-nav-container">
                <ul class="navbar-nav d-lg-flex d-block flex-row">
                    <li class="nav-item dropdown">
                        <a class="nav-link w-100 d-inline-flex dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Company <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">About Us</a></li>
                            <li><a class="dropdown-item" href="#">Leadership</a></li>
                            <li><a class="dropdown-item" href="#">History</a></li>
                            <li><a class="dropdown-item" href="#">Values</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link w-100 d-inline-flex dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Working at Al-Futtaim <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Career Development</a></li>
                            <li><a class="dropdown-item" href="#">Benefits</a></li>
                            <li><a class="dropdown-item" href="#">Training Programs</a></li>
                            <li><a class="dropdown-item" href="#">Employee Resources</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link  w-100 d-inline-flex dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            News <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Company News</a></li>
                            <li><a class="dropdown-item" href="#">Industry Updates</a></li>
                            <li><a class="dropdown-item" href="#">Press Releases</a></li>
                            <li><a class="dropdown-item" href="#">Media Coverage</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link w-100 d-inline-flex dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Policies & Tools <i class="fas fa-chevron-down ms-2"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">HR Policies</a></li>
                            <li><a class="dropdown-item" href="#">IT Policies</a></li>
                            <li><a class="dropdown-item" href="#">Business Tools</a></li>
                            <li><a class="dropdown-item" href="#">Compliance</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        
    </div>
</nav>

<!-- Welcome Banner -->
<section class="welcome-banner">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-4">
                <div class="welcome-content">
                    <div class="greeting d-flex align-items-center">
                        <i class="fas fa-sun"></i>
                        <h1 class="ms-2">Good day, Nina</h1>
                    </div>
                    <p>Explore our latest news, initiatives, and opportunities for you</p>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Quick Access Icons -->
                <div class="navbar-icons d-flex">
                    <div class="icon-item">
                        <div class="icon-circle mx-auto">
                            <i class="fas fa-users"></i>
                        </div>
                        <span>PeopleHub</span>
                    </div>
                    <div class="icon-item">
                        <div class="icon-circle mx-auto">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <span>IT services</span>
                    </div>
                    <div class="icon-item">
                        <div class="icon-circle mx-auto">
                            <i class="fas fa-palette"></i>
                        </div>
                        <span>Brand & assets</span>
                    </div>
                    <div class="icon-item">
                        <div class="icon-circle mx-auto">
                            <i class="fas fa-plane"></i>
                        </div>
                        <span>Business travel</span>
                    </div>
                    <div class="icon-item">
                        <div class="icon-circle mx-auto">
                            <i class="fas fa-comments"></i>
                        </div>
                        <span>Viva Engage</span>
                    </div>
                    <div class="icon-item dropdown">
                        <div class="icon-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" role="button" id="moreDropdown">
                            <i class="fas fa-ellipsis-h"></i>
                        </div>
                        <span>More</span>
                        <ul class="dropdown-menu" aria-labelledby="moreDropdown">
                            <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-question-circle me-2"></i> Help</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-download me-2"></i> Downloads</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Bookmarks</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fas fa-share me-2"></i> Share</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section -->
<section class="hero-section py-0">
    <div class="container-fluid px-0">
        <div class="row m-0">
            <div class="col-lg-8 px-0">
                <a href="#" class="hero-banner">
                    <div class="hero-image">
                        <img src="assets/images/banner.png" alt="Hero Banner" class="img-fluid">
                    </div>
                    <div class="hero-overlay">
                        <h2>Al-Futtaim Launches "Building Bridges" to Empower Emirati Youth and Celebrate 70 Years of UAE-Japan Partnership</h2>
                    </div>
</a>
            </div>
            <div class="col-lg-4 px-0">
                <div class="hero-cards">
                    <a href="#" class="hero-card competition-card">
                        <div class="card-image">
                            <img src="assets/images/right-1.png" alt="Competition" class="img-fluid">
                            <div class="card-overlay">
                                <h3>Competition: Cultural Diversity Day</h3>
                            </div>
                        </div>
</a>
                    <a href="#" class="hero-card talks-card">
                        <div class="card-image">
                            <img src="assets/images/right-2.png" alt="Mid-Year Talks" class="img-fluid">
                            <div class="card-overlay">
                                <h3>Mid-Year Talks: Happening Now</h3>
                            </div>
                        </div>
</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="row">
            <!-- Latest News Column -->
            <div class="col-lg-8 px-0">
                <div class="news-column latest-news">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <h2>Latest News</h2>
                        <a href="#" class="see-all-link">See all</a>
                    </div>
                    <div class="row">
                        <!-- Main News Item Column -->
                        <div class="col-lg-5">
                            <a href="#" class="main-news-item">
                                <div class="news-image">
                                    <img src="assets/images/main-news.png" alt="Main News" class="img-fluid">
                                </div>
                                <div class="news-content">
                                    <h3>News title goes here, 2 rows max</h3>
                                    <p>Description goes here, 2 row max</p>
                                </div>
</a>
                        </div>
                        <!-- News Thumbnails Column -->
                        <div class="col-lg-7">
                            <div class="news-list">
                                <div class="news-item">
                                    <div class="news-thumb">
                                        <img src="assets/images/news-1.png" alt="News" class="img-fluid">
                                    </div>
                                    <div class="news-text">
                                        <h4>Al-Futtaim Technologies and Johnson Controls Partner to Launch OpenBlue S...</h4>
                                        <p>Description goes here, 1 row max</p>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <div class="news-thumb">
                                        <img src="assets/images/news-2.png" alt="News" class="img-fluid">
                                    </div>
                                    <div class="news-text">
                                        <h4>News title goes here, 2 rows max</h4>
                                        <p>Description goes here, 1 row max</p>
                                    </div>
                                </div>
                                <div class="news-item">
                                    <div class="news-thumb">
                                        <img src="assets/images/news-3.png" alt="News" class="img-fluid">
                                    </div>
                                    <div class="news-text">
                                        <h4>News title goes here, 2 rows max</h4>
                                        <p>Description goes here, 1 row max</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Al-Futtaim in the Media Column -->
            <div class="col-lg-4">
                <div class="news-column media-section px-0">
                    <div class="section-header d-flex justify-content-between align-items-center">
                        <h2>Al-Futtaim in the Media</h2>
                        <a href="#" class="see-all-link">See all</a>
                    </div>
                    <div class="media-list">
                        <div class="media-item">
                            <div class="media-category">Al-Futtaim news</div>
                            <h4>The Top 21 Schools in Dubai and Their Fees</h4>
                        </div>
                        <div class="media-item">
                            <div class="media-category">Al-Futtaim news</div>
                            <h4>Leo & Loona goes regional: Redefining family edutainment across the Gulf</h4>
                        </div>
                        <div class="media-item">
                            <div class="media-category">Automotive</div>
                            <h4>Charge your EV in under 30 minutes: Parkin, e& to install 200 ultra-fast chargers in Dubai</h4>
                        </div>
                        <div class="media-item">
                            <div class="media-category">Real estate</div>
                            <h4>Dubai's High-Rise Paradox: Peak, Pause, or the New Normal?</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Events & Holidays Section -->
<section class="events-section">
    <div class="container overflow-hidden">
        <div class="section-header">
            <h2>Events & Holidays</h2>
            <a href="#" class="see-all-link">See all</a>
        </div>
        <div class="events-carousel">
            <div id="eventsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-track">
                            <a href="#" class="event-card card-with-content">
                                <div class="event-image">
                                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?fm=jpg&q=80&w=1200&fit=crop" referrerpolicy="no-referrer" alt="LinkedIn AI Training" class="img-fluid w-100">
                                    <div class="position-absolute date-badge-wrap bottom-0 start-3">
                                        <h4>AUG</h4>
                                        <h1 class="fw-bold">14</h1>
                                    </div>
                                </div>
                                <div class="card-content p-3">
                                    <p class="mb-1"><small>Webinar</small></p>
                                    <h4 class="mb-4">LinkedIn AI Training</h4>
                                    <div class="event-details">
                                        <div class="event-time">Aug 14, 10 - 11 AM</div>
                                        <div class="event-location">Online</div>
                                    </div>
                                    <div class="event-icon"><i class="fas fa-calendar-plus"></i></div>
                                </div>
                            </a>
                            <a href="#" class="event-card card-with-content">
                                <div class="event-image">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?fm=jpg&q=80&w=1200&fit=crop&crop=faces" referrerpolicy="no-referrer" alt="Emirati Women's Day" class="img-fluid w-100">
                                    <div class="position-absolute date-badge-wrap bottom-0 start-3">
                                        <h4>AUG</h4>
                                        <h1 class="fw-bold">28</h1>
                                    </div>
                                </div>
                                <div class="card-content p-3">
                                    <p class="mb-1"><small>Event</small></p>
                                    <h4 class="mb-4">Emirati Women's Day</h4>
                                    <div class="event-details">
                                        <div class="event-time">Aug 28, 10 - 11:30 AM</div>
                                        <div class="event-location">Online</div>
                                    </div>
                                    <div class="event-icon"><i class="fas fa-calendar-plus"></i></div>
                                </div>
                            </a>
                            <a href="#" class="event-card card-with-content">
                                <div class="event-image">
                                    <img src="assets/images/prophet.jpg" referrerpolicy="no-referrer" alt="Prophet Muhammad's Birthday" class="img-fluid w-100">
                                    <div class="position-absolute date-badge-wrap bottom-0 start-3">
                                        <h4>SEP</h4>
                                        <h1 class="fw-bold">4</h1>
                                    </div>
                                </div>
                                <div class="card-content p-3">
                                    <p class="mb-1"><small>Holiday</small></p>
                                    <h4 class="mb-4">Prophet Muhammad's Birthday</h4>
                                    <div class="event-details">
                                        <div class="event-time">Sep 4, All day</div>
                                        <div class="event-location"></div>
                                    </div>
                                    <div class="event-icon"><i class="fas fa-calendar-plus"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-track">
                            <a href="#" class="event-card card-with-content">
                                <div class="event-image">
                                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?fm=jpg&q=80&w=1200&fit=crop" referrerpolicy="no-referrer" alt="LinkedIn AI Training" class="img-fluid w-100">
                                    <div class="position-absolute date-badge-wrap bottom-0 start-3">
                                        <h4>AUG</h4>
                                        <h1 class="fw-bold">14</h1>
                                    </div>
                                </div>
                                <div class="card-content p-3">
                                    <p class="mb-1"><small>Webinar</small></p>
                                    <h4 class="mb-4">LinkedIn AI Training</h4>
                                    <div class="event-details">
                                        <div class="event-time">Aug 14, 10 - 11 AM</div>
                                        <div class="event-location">Online</div>
                                    </div>
                                    <div class="event-icon"><i class="fas fa-calendar-plus"></i></div>
                                </div>
                            </a>
                            <a href="#" class="event-card card-with-content">
                                <div class="event-image">
                                    <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?fm=jpg&q=80&w=1200&fit=crop&crop=faces" referrerpolicy="no-referrer" alt="Emirati Women's Day" class="img-fluid w-100">
                                    <div class="position-absolute date-badge-wrap bottom-0 start-3">
                                        <h4>AUG</h4>
                                        <h1 class="fw-bold">28</h1>
                                    </div>
                                </div>
                                <div class="card-content p-3">
                                    <p class="mb-1"><small>Event</small></p>
                                    <h4 class="mb-4">Emirati Women's Day</h4>
                                    <div class="event-details">
                                        <div class="event-time">Aug 28, 10 - 11:30 AM</div>
                                        <div class="event-location">Online</div>
                                    </div>
                                    <div class="event-icon"><i class="fas fa-calendar-plus"></i></div>
                                </div>
                            </a>
                            <a href="#" class="event-card card-with-content">
                                <div class="event-image">
                                    <img src="assets/images/prophet.jpg" referrerpolicy="no-referrer" alt="Prophet Muhammad's Birthday" class="img-fluid w-100">
                                    <div class="position-absolute date-badge-wrap bottom-0 start-3">
                                        <h4>SEP</h4>
                                        <h1 class="fw-bold">4</h1>
                                    </div>
                                </div>
                                <div class="card-content p-3">
                                    <p class="mb-1"><small>Holiday</small></p>
                                    <h4 class="mb-4">Prophet Muhammad's Birthday</h4>
                                    <div class="event-details">
                                        <div class="event-time">Sep 4, All day</div>
                                        <div class="event-location"></div>
                                    </div>
                                    <div class="event-icon"><i class="fas fa-calendar-plus"></i></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#eventsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bulletin Board & Employee Offers Section -->
<section class="bulletin-offers-section">
    <div class="container">
        <div class="row g-4">
            <!-- Bulletin Board Column -->
            <div class="col-12 col-lg-6">
                <div class="bulletin-board">
                    <div class="section-header">
                        <h2>Bulletin Board</h2>
                        <a href="#" class="see-all-link">See all</a>
                    </div>
                    <div class="bulletin-items">
                        <div class="bulletin-item">
                            <div class="item-image">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&crop=faces&w=120&h=120&q=80" alt="IT Support Agent on call">
                            </div>
                            <div class="item-content">
                                <div class="item-category">IT Update</div>
                                <div class="item-title">MFA Authentication</div>
                                <div class="item-description">Enhanced security via multi-factor authentication</div>
                                <div class="item-date">August 15</div>
                            </div>
                        </div>
                        <div class="bulletin-item">
                            <div class="item-image">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fm=jpg&fit=crop&w=120&h=120&q=80" alt="PeopleHub dashboard preview">
                            </div>
                            <div class="item-content">
                                <div class="item-category">HR Info</div>
                                <div class="item-title">PeopleHub New Features</div>
                                <div class="item-description">Discover the latest enhancements in PeopleHub</div>
                                <div class="item-date">August 11</div>
                            </div>
                        </div>
                        <div class="bulletin-item">
                            <div class="item-image">
                                <img loading="lazy" src="https://images.unsplash.com/photo-1544006659-f0b21884ce1d?auto=format&fm=jpg&fit=crop&crop=faces&w=120&h=120&q=80" alt="Head of Automotive portrait">
                            </div>
                            <div class="item-content">
                                <div class="item-category">People News</div>
                                <div class="item-title">Head of Automotive</div>
                                <div class="item-description">Leading with innovation and growth</div>
                                <div class="item-date">August 7</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Employee Offers Column -->
            <div class="col-12 col-lg-6">
                <div class="employee-offers">
                    <div class="section-header">
                        <h2>Employee Offers</h2>
                        <a href="#" class="see-all-link">See all</a>
                    </div>
                    <div class="offers-carousel">
                        <div id="offersCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="offer-card">
                                        <div class="offer-image">
                                            <img src="https://images.unsplash.com/photo-1517677208171-0bc6725a3e60?auto=format&fm=jpg&fit=crop&w=1280&h=720&q=80" alt="Car Offers">
                                            <div class="offer-overlay">
                                                <div class="offer-title">Car offers</div>
                                                <div class="offer-link">See exclusive offers</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="offer-card">
                                        <div class="offer-image">
                                            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fm=jpg&fit=crop&w=1280&h=720&q=80" alt="Travel Offers">
                                            <div class="offer-overlay">
                                                <div class="offer-title">Travel offers</div>
                                                <div class="offer-link">Explore destinations</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#offersCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#offersCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Divisions News Section -->
<section class="divisions-section">
    <div class="container">
        <div class="section-header d-flex justify-content-between align-items-start">
            <div class="header-left">
                <h2>Divisions News on Viva Engage</h2>
            </div>
            <div class="header-right">
                <p>Stay informed with the latest news that is specifically tailored to your division. Never miss out on important updates that matter most to you.</p>
            </div>
        </div>
        <div class="divisions-grid">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="division-card">
                        <div class="division-image">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop&crop=center" alt="Automotive" class="img-fluid">
                        </div>
                        <div class="division-bar">
                            <span>Automotive <i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="division-card">
                        <div class="division-image">
                            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=250&fit=crop&crop=center" alt="Health" class="img-fluid">
                        </div>
                        <div class="division-bar">
                            <span>Health <i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="division-card">
                        <div class="division-image">
                            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop&crop=center" alt="Orient" class="img-fluid">
                        </div>
                        <div class="division-bar">
                            <span>Orient <i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="division-card">
                        <div class="division-image">
                            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=400&h=250&fit=crop&crop=center" alt="Real Estate" class="img-fluid">
                        </div>
                        <div class="division-bar">
                            <span>Real Estate <i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="division-card">
                        <div class="division-image">
                            <img src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=250&fit=crop&crop=center" alt="Retail" class="img-fluid">
                        </div>
                        <div class="division-bar">
                            <span>Retail <i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="division-card">
                        <div class="division-image">
                            <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&h=250&fit=crop&crop=center" alt="Schools" class="img-fluid">
                        </div>
                        <div class="division-bar">
                            <span>Schools <i class="fas fa-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Assets & Employee Handbook Section -->
<section class="brand-handbook-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="brand-assets-card">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=500&h=300&fit=crop&crop=center" alt="Brand Assets" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <h3>Brand Assets & Templates</h3>
                        <a href="#" class="card-link">Action</a>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="handbook-card">
                    <div class="card-image">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=500&h=300&fit=crop&crop=center" alt="Employee Handbook" class="img-fluid">
                    </div>
                    <div class="card-content">
                        <h3>Employee Handbook</h3>
                        <a href="#" class="card-link">Action</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="row align-items-center gy-3 gy-md-0">
            <div class="col-12 col-md-3 order-1 order-md-1 d-flex justify-content-center justify-content-md-start">
                <div class="footer-logo">
                    <div class="logo-icon"></div>
                    <span class="brand-text">Al-Futtaim</span>
                </div>
            </div>
            <div class="col-12 col-md-6 order-2 order-md-2">
                <nav class="footer-nav">
                    <ul class="d-flex justify-content-center flex-wrap gap-3">
                        <li><a href="#">Our Company</a></li>
                        <li><a href="#">Working at Al-Futtaim</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Policies & Tools</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-12 col-md-3 order-3 order-md-3">
                <div class="footer-right d-flex justify-content-center justify-content-md-end align-items-center flex-wrap gap-3">
                    <div class="social-icons d-flex justify-content-center">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-microsoft"></i></a>
                    </div>
                    <span class="copyright text-center text-md-end w-100">© 2025 Al-Futtaim. All rights reserved.</span>
                </div>
            </div>
        </div>
    </div>
</footer>

    <?php include('includes/footer.php');?>
    <!-- pagescript here... -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
// Add any custom JavaScript here
</script>
    <!-- End pagescript here... -->
</body>
</html>