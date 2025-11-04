<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('') }}assets/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnifly: Your Gateway to Digital Asset Investment</title>
    <link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../favicon.svg" />
    <link rel="shortcut icon" href="{{asset('')}}assets/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Magnifly" />
    <link rel="manifest" href="../site.webmanifest.txt" />


    <meta name="description"
        content="Magnifly offers stable passive income through advanced cloud mining and profitable crypto investment plans. Power your daily crypto returns with us.">
    <meta name="keywords"
        content="cloud mining, crypto investment, passive income, Magnifly, digital assets, daily returns, cryptocurrency">
    <meta property="og:title" content="Magnifly | Powering Your Daily Crypto Returns">
    <meta property="og:description"
        content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
    <meta property="og:image" content="https://Magnifly.cc/promo.png">
    <meta property="og:url" content="https://Magnifly.cc/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Magnifly">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Magnifly | Powering Your Daily Crypto Returns">
    <meta name="twitter:description"
        content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
    <meta name="twitter:image" content="https://Magnifly.cc/promo.png">


    <style>
        .contacts-block {
            display: flex;
            gap: 10px;
            align-items: center;
            transition: opacity .25s ease;
        }

        .contact-block-link {
            display: inline-flex;
            width: 32px;
            height: 32px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .1);
        }

        .contact-block-link img {
            max-width: 100%;
            height: 100%;
        }
    </style>

</head>

<body>


    <div class="page-wrapper">
        <header>
            <div class="navbar">
                <div class="div-block">
                    <div class="div-block-2">
                        <a href="{{ route('Index') }}" class="brand">
                            <div class="logo"><img src="{{ asset('') }}assets/logo.png" alt="Logo"></div>
                        </a>
                        <nav role="navigation" class="nav-menu">
                            <a href="{{ route('Index') }}" class="nav-link">Home</a>
                            <a href="{{ route('about-us') }}" class="nav-link">About</a>
                            <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                            <a href="{{ route('Index') }}#contact" class="nav-link">Contact</a>
                            <a href="{{ route('Index') }}#features" class="nav-link">Features</a>
                            <a href="{{ route('about-us') }}#reviews" class="nav-link">Reviews</a>
                        </nav>
                    </div>
                    <button class="menu-toggle" id="menuToggle" aria-controls="offcanvas" aria-expanded="false"
                        aria-label="Open menu">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 7h16M4 12h16M4 17h16" stroke="#111827" stroke-width="2"
                                stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <!-- Offcanvas -->
        <div class="offcanvas-backdrop" id="offBackdrop" hidden></div>
        <aside class="offcanvas" id="offcanvas" aria-hidden="true">
            <div class="off-top">
                <a href="{{asset('')}}" class="off-brand">
                    <div class="logo"><img src="/assets/logo.png" alt="Logo"></div>
                </a>
                <button class="off-close" id="offClose" aria-label="Close menu">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="M6 6l12 12M18 6l-12 12" stroke="#111827" stroke-width="2" stroke-linecap="round" />
                    </svg>
                </button>
            </div>
            <div class="off-body">
                <ul class="menu-list" id="offList"></ul>

                <div class="off-contacts" id="offContacts"></div>

                <div class="off-socials">
                    <a href="https://t.me/Magnifly_channel" target="_blank" rel="noopener noreferrer"
                        class="social-link">
                        <div class="social-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.08l11.96-4.4c.79-.29 1.45.12 1.23.93l-1.93 9.04c-.23.94-.84 1.15-1.59.71L12.6 15.3l-2.25 2.15c-.23.24-.43.43-.81.43z" />
                            </svg>
                        </div>
                        <span class="social-title">Telegram Channel</span>
                    </a>
                    <a href="https://t.me/Magnifly_group" target="_blank" rel="noopener noreferrer"
                        class="social-link">
                        <div class="social-icon">
                            <svg viewBox="0 0 24 24" width="36px" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.08l11.96-4.4c.79-.29 1.45.12 1.23.93l-1.93 9.04c-.23.94-.84 1.15-1.59.71L12.6 15.3l-2.25 2.15c-.23.24-.43.43-.81.43z" />
                            </svg>
                        </div>
                        <span class="social-title">Telegram Group</span>
                    </a>
                </div>
            </div>
        </aside>



        <style>
            :root {
                --dark-slate-grey: #30363b;
                --black: #000;
                --dark-grey-lighter: #3d4348;
                --sandy-brown: #9d7bff;
                --text-muted: #a2a5ad;
                --text-light: #f7f7f9;
                --background: #f7f7f9;
                --card-bg: #fff;
                --border-color: #e0e1e2;
                --border-radius: 20px;
                --glow-shadow: 0 12px 48px rgba(244, 161, 89, 0.25);
            }

            @font-face {
                font-family: 'Bowler';
                src: url(../imagen/63fa359f8bb3697d350616c4_BOWLER.otf) format('opentype');
                font-weight: 400;
                font-style: normal;
                font-display: swap;
            }

            html,
            body {
                overflow-x: hidden;
                box-sizing: border-box;
                scroll-behavior: smooth;
            }

            *,
            *:before,
            *:after {
                box-sizing: inherit;
            }

            body {
                font-family: 'Inter', sans-serif;
                color: var(--dark-slate-grey);
                font-size: 16px;
                line-height: 1.6;
                margin: 0;
                background-color: var(--background);
            }

            h1,
            h2,
            h3,
            h4 {
                font-family: 'Bowler', sans-serif;
                font-weight: 400;
                margin: 0 0 15px 0;
                line-height: 1.2;
            }

            .container {
                width: 100%;
                max-width: 1440px;
                margin: 0 auto;
                padding: 0 60px;
            }

            .section {
                padding: 100px 0;
                height: auto !important;
            }

            /* ===================================================================
           SHARED HEADER STYLES
           =================================================================== */
            header {
                position: relative;
                z-index: 20;
                background-color: var(--background);
            }

            .navbar {
                z-index: 7;
                width: 100%;
                max-width: 1440px;
                margin: 0 auto;
                padding: 35px 60px;
                position: relative;
                display: flex;
                align-items: center;
            }

            .div-block {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                gap: 16px;
            }

            .div-block-2 {
                display: flex;
                align-items: center;
                gap: 28px;
            }

            .brand {
                display: flex;
                align-items: center;
                font-family: Bowler, sans-serif;
                font-size: 24px;
                font-weight: 700;
                color: var(--dark-slate-grey);
                text-decoration: none;
            }

            .logo-icon {
                width: 36px;
                height: 36px;
                border-radius: 12px;
                background: var(--dark-slate-grey);
                display: grid;
                place-items: center;
                color: var(--sandy-brown);
                font-weight: 800;
                margin-right: 10px;
            }

            .nav-menu {
                display: flex;
                align-items: center;
                gap: 44px;
            }

            .nav-link {
                color: var(--text-muted);
                font-weight: 500;
                transition: color 0.3s ease;
                text-decoration: none;
            }

            .nav-link:hover,
            .nav-link.active {
                color: var(--dark-slate-grey);
            }

            /* ===================================================================
           HERO SECTION
           =================================================================== */
            .hero-section {
                padding: 60px 0;
                text-align: center;
                background-color: var(--dark-slate-grey);
                color: var(--text-light);
                position: relative;
                overflow: hidden;
            }

            .hero-section::before {
                content: '';
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(244, 161, 89, 0.1), transparent 30%);
            }

            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            .hero-content {
                position: relative;
                z-index: 1;
            }

            .hero-section h1 {
                font-size: 64px;
                color: var(--text-light);
                margin-bottom: 20px;
            }

            .hero-section h1 span {
                color: var(--sandy-brown);
            }

            .hero-section p {
                font-size: 18px;
                color: var(--text-muted);
                max-width: 700px;
                margin: 0 auto;
            }

            /* ===================================================================
           NEW: PROJECT DESCRIPTION SECTION
           =================================================================== */
            .description-grid {
                display: grid;
                grid-template-columns: 1.2fr 1fr;
                gap: 60px;
                align-items: center;
            }

            .description-text h2 {
                font-size: 46px;
                margin-bottom: 25px;
            }

            .description-text h2 span {
                color: var(--sandy-brown);
            }

            .description-text p {
                color: var(--text-muted);
                margin-bottom: 20px;
            }

            .features-list {
                list-style: none;
                padding: 0;
                margin: 30px 0 0 0;
                display: flex;
                flex-direction: column;
                gap: 15px;
            }

            .features-list li {
                display: flex;
                align-items: center;
                gap: 15px;
                font-weight: 500;
            }

            .features-list li::before {
                content: '✓';
                color: var(--sandy-brown);
                font-size: 20px;
                font-weight: 700;
            }

            .certificate-container {
                text-align: center;
            }

            .certificate-container h3 {
                font-size: 22px;
                margin-bottom: 20px;
            }

            .certificate-frame {
                background: var(--card-bg);
                border-radius: var(--border-radius);
                padding: 20px;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
                border: 1px solid var(--border-color);
            }

            .certificate-frame img {
                width: 100%;
                border-radius: 10px;
                border: 1px solid var(--border-color);
            }

            /* ===================================================================
           ROADMAP SECTION
           =================================================================== */
            .roadmap-section h2 {
                text-align: center;
                font-size: 46px;
                margin-bottom: 60px;
            }

            .roadmap-timeline {
                position: relative;
                max-width: 1000px;
                margin: 0 auto;
            }

            .roadmap-timeline::after {
                content: '';
                position: absolute;
                width: 4px;
                background-color: var(--border-color);
                top: 0;
                bottom: 0;
                left: 50%;
                margin-left: -2px;
            }

            .roadmap-item {
                padding: 10px 40px;
                position: relative;
                background-color: inherit;
                width: 50%;
            }

            .roadmap-item::after {
                content: '';
                position: absolute;
                width: 20px;
                height: 20px;
                right: -10px;
                background-color: white;
                border: 4px solid var(--sandy-brown);
                top: 15px;
                border-radius: 50%;
                z-index: 1;
            }

            .roadmap-item.left {
                left: 0;
            }

            .roadmap-item.right {
                left: 50%;
            }

            .roadmap-item.left::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                right: 30px;
                border: medium solid white;
                border-width: 10px 0 10px 10px;
                border-color: transparent transparent transparent white;
            }

            .roadmap-item.right::before {
                content: " ";
                height: 0;
                position: absolute;
                top: 22px;
                width: 0;
                z-index: 1;
                left: 30px;
                border: medium solid white;
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
            }

            .roadmap-item.right::after {
                left: -10px;
            }

            .roadmap-content {
                padding: 20px 30px;
                background-color: white;
                position: relative;
                border-radius: var(--border-radius);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            }

            .roadmap-content h3 {
                font-size: 22px;
                color: var(--sandy-brown);
            }

            .roadmap-content p {
                font-size: 14px;
            }

            /* ===================================================================
           TESTIMONIALS SECTION
           =================================================================== */
            .testimonials-section {
                background-color: var(--dark-slate-grey);
                color: var(--text-light);
            }

            .testimonials-section h2 {
                text-align: center;
                font-size: 46px;
                margin-bottom: 60px;
                color: var(--text-light);
            }

            .testimonials-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
            }

            .testimonial-card {
                background: var(--dark-grey-lighter);
                padding: 30px;
                border-radius: var(--border-radius);
                display: flex;
                flex-direction: column;
            }

            .testimonial-text {
                color: var(--text-light);
                font-style: italic;
                margin-bottom: 20px;
                flex-grow: 1;
            }

            .testimonial-author {
                display: flex;
                align-items: center;
                gap: 15px;
                margin-top: auto;
            }

            .testimonial-author img {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                object-fit: cover;
            }

            .author-name {
                font-weight: 600;
                color: var(--text-light);
            }

            .author-title {
                font-size: 14px;
                color: var(--sandy-brown);
            }

            /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
            @media screen and (max-width: 991px) {
                .container {
                    padding: 0 40px;
                }

                .section {
                    padding: 80px 0;
                }

                .navbar,
                .container {
                    padding-left: 40px;
                    padding-right: 40px;
                }

                .nav-menu,
                .contacts-block {
                    display: none;
                }

                .hero-section h1 {
                    font-size: 48px;
                }

                .description-grid {
                    grid-template-columns: 1fr;
                    gap: 40px;
                }

                .roadmap-timeline::after {
                    left: 10px;
                }

                .roadmap-item {
                    width: 100%;
                    padding-left: 50px;
                    padding-right: 0;
                }

                .roadmap-item.left::after,
                .roadmap-item.right::after {
                    left: 0;
                }

                .roadmap-item.left,
                .roadmap-item.right {
                    left: 0%;
                }

                .roadmap-item.left::before,
                .roadmap-item.right::before {
                    left: 40px;
                    border-width: 10px 10px 10px 0;
                    border-color: transparent white transparent transparent;
                }
            }

            @media screen and (max-width: 767px) {
                .container {
                    padding: 0 20px;
                }

                .section {
                    padding: 60px 0;
                }

                .navbar,
                .container {
                    padding-left: 20px;
                    padding-right: 20px;
                }

                .hero-section h1 {
                    font-size: 36px;
                }

                .hero-section p {
                    font-size: 16px;
                }

                .description-text h2,
                .roadmap-section h2,
                .testimonials-section h2 {
                    font-size: 32px;
                }
            }

            /* === NEW STYLES FOR TESTIMONIALS SECTION === */
            .review-submission-wrapper {
                background: var(--dark-grey-lighter);
                border-radius: var(--border-radius);
                padding: 40px;
                margin-top: 40px;
            }

            .form-tabs-nav {
                display: flex;
                gap: 10px;
                border-bottom: 2px solid rgba(255, 255, 255, 0.1);
                margin-bottom: 30px;
            }

            .form-tab-btn {
                background: transparent;
                border: none;
                color: var(--text-muted);
                font-family: 'Bowler', sans-serif;
                font-size: 20px;
                padding: 10px 20px;
                cursor: pointer;
                position: relative;
                transition: color 0.3s ease;
            }

            .form-tab-btn::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: var(--sandy-brown);
                transform: scaleX(0);
                transition: transform 0.3s ease;
            }

            .form-tab-btn.active {
                color: var(--text-light);
            }

            .form-tab-btn.active::after {
                transform: scaleX(1);
            }

            .form-tab-pane {
                display: none;
            }

            .form-tab-pane.active {
                display: block;
            }

            .review-form .form-group {
                margin-bottom: 20px;
            }

            .review-form label {
                display: block;
                color: var(--text-muted);
                margin-bottom: 8px;
                font-size: 14px;
            }

            .review-form textarea,
            .review-form input[type="text"] {
                width: 100%;
                padding: 15px;
                background: #30363b;
                border: 1px solid rgba(255, 255, 255, 0.1);
                border-radius: 10px;
                color: var(--text-light);
                font-family: 'Inter', sans-serif;
                font-size: 16px;
            }

            .review-form input[type="file"] {
                color: var(--text-muted);
            }

            .review-submit-btn {
                background-color: var(--sandy-brown);
                color: var(--dark-slate-grey);
                padding: 15px 30px;
                border-radius: 10px;
                font-family: 'Bowler', sans-serif;
                font-size: 18px;
                cursor: pointer;
                transition: all 0.3s ease;
                border: none;
                display: inline-block;
                text-decoration: none;
            }

            .review-submit-btn:hover {
                background-color: #fff;
                box-shadow: var(--glow-shadow);
            }

            .login-prompt {
                text-align: center;
                padding: 20px;
            }

            .login-prompt p {
                color: var(--text-light);
                font-size: 18px;
                margin-bottom: 20px;
            }

            .review-submit-btn.login-btn {
                max-width: 200px;
            }

            /* Pagination Styles */
            .pagination-wrapper {
                margin-top: 40px;
                text-align: center;
            }

            .pagination-wrapper a,
            .pagination-wrapper span {
                color: var(--text-muted);
                padding: 8px 12px;
                margin: 0 4px;
                text-decoration: none;
                border-radius: 8px;
                transition: all 0.3s ease;
            }

            .pagination-wrapper a:hover {
                background-color: var(--border-color);
                color: var(--dark-slate-grey);
            }

            .pagination-wrapper .current {
                background-color: var(--sandy-brown);
                color: var(--dark-slate-grey);
                font-weight: 600;
            }

            /* Video Testimonials Styles */
            .video-testimonials-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                gap: 30px;
                margin-top: 40px;
            }

            .video-card {
                position: relative;
                padding-top: 56.25%;
                /* 16:9 Aspect Ratio */
                border-radius: var(--border-radius);
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            }

            .video-card iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }

            /* === PAGINATION STYLES (NEW) === */
            .pagination {
                list-style: none;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10px;
                margin-top: 40px;
            }

            .page-item .page-link {
                display: flex;
                align-items: center;
                justify-content: center;
                width: 42px;
                height: 42px;
                border: 1px solid var(--border-color);
                border-radius: 12px;
                background-color: var(--card-bg);
                color: var(--text-muted);
                font-family: 'Inter', sans-serif;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
            }

            .page-item:not(.disabled) .page-link:hover {
                background-color: var(--border-color);
                color: var(--dark-slate-grey);
                border-color: #d0d1d2;
            }

            .page-item.active .page-link {
                background-color: var(--sandy-brown);
                color: var(--dark-slate-grey);
                border-color: var(--sandy-brown);
                box-shadow: 0 5px 15px rgba(244, 161, 89, 0.4);
                transform: translateY(-2px);
            }

            .page-item.disabled .page-link {
                background-color: #f0f1f3;
                color: #ccc;
                pointer-events: none;
            }

            /* --- фиксы для переполнения отзывов --- */
            .testimonial-card {
                min-width: 0;
                /* на всякий случай, если родитель flex/grid */
                overflow: hidden;
                /* чтобы не появлялся горизонтальный скролл */
            }

            .testimonial-text {
                max-width: 100%;
                white-space: pre-wrap;
                /* сохраняем переносы из текста и можно переносить строки */
                overflow-wrap: anywhere;
                /* разрешаем переносить даже длинные «слова» */
                word-break: break-word;
                /* фолбэк для старых браузеров */
                hyphens: auto;
                /* мягкие переносы для обычных слов */
            }

            .testimonial-text a {
                word-break: break-all;
                /* если в отзыве есть длинная ссылка — пусть ломается */
            }
        </style>


        <main>
            <section class="hero-section">
                <div class="container hero-content">
                    <h1>About <span>Magnifly</span></h1>
                    <p>We are a forward-thinking investment company dedicated to harnessing the power of technology and
                        financial expertise to deliver exceptional returns for our clients.</p>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="description-grid">
                        <div class="description-text">
                            <h2>Our System & <span>Vision</span></h2>
                            <p>At the core of Magnifly lies a sophisticated, AI-driven trading system that analyzes
                                market trends with unparalleled speed and accuracy. Our vision is to democratize access
                                to high-yield investment opportunities, making them accessible, transparent, and secure
                                for everyone.</p>
                            <ul class="features-list">
                                <li>Automated AI-powered trading algorithms</li>
                                <li>Multi-layered security architecture</li>
                                <li>Instant and transparent transaction processing</li>
                                <li>24/7 dedicated customer support</li>
                            </ul>
                        </div>
                        <div class="certificate-container">
                            {{-- <h3>Official Company Certificate</h3> --}}
                            <div class="certificate-frame">
                                <img src="/assets/bots.png" alt="Company Certificate">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section">
                <div class="container">
                    <div class="roadmap-section">
                        <h2>Our Roadmap</h2>
                        <div class="roadmap-timeline">
                            <div class="roadmap-item left">
                                <div class="roadmap-content">
                                    <h3>Q3 2025 - Foundation</h3>
                                    <p>Official launch of the Magnifly platform. Onboarding of the first 1,000 investors
                                        and deployment of initial capital into automated trading algorithms.</p>
                                </div>
                            </div>
                            <div class="roadmap-item right">
                                <div class="roadmap-content">
                                    <h3>Q4 2025 - Expansion</h3>
                                    <p>Introduction of new investment plans with varied risk profiles. Launch of the
                                        multi-level referral program to expand our community.</p>
                                </div>
                            </div>
                            <div class="roadmap-item left">
                                <div class="roadmap-content">
                                    <h3>Q1 2026 - Mobile Integration</h3>
                                    <p>Development of the Magnifly mobile application for iOS and Android, providing
                                        on-the-go access to investment portfolios.</p>
                                </div>
                            </div>
                            <div class="roadmap-item right">
                                <div class="roadmap-content">
                                    <h3>Q2 2026 - Diversification</h3>
                                    <p>Expansion into new asset classes, including decentralized finance (DeFi) staking
                                        and yield farming protocols, to enhance returns.</p>
                                </div>
                            </div>
                            <div class="roadmap-item left">
                                <div class="roadmap-content">
                                    <h3>Q3 2026 - Global Reach</h3>
                                    <p>Establishing regional offices in Asia and Europe. Full localization of the
                                        platform into 5 new languages to better serve our global client base.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section testimonials-section" id="reviews">
                <div class="container">
                    <h2>Leave Your Feedback</h2>

                    <div class="review-submission-wrapper">
                        <div class="login-prompt">
                            <p>Please log in to leave a Review.</p>
                            <a href="{{route('login')}}" class="review-submit-btn login-btn">Log In</a>
                        </div>
                    </div>

               
                  

                </div>
            </section>
        </main>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const formTabButtons = document.querySelectorAll('.form-tab-btn');
                const formTabPanes = document.querySelectorAll('.form-tab-pane');

                formTabButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Deactivate all
                        formTabButtons.forEach(btn => btn.classList.remove('active'));
                        formTabPanes.forEach(pane => pane.classList.remove('active'));

                        // Activate clicked
                        button.classList.add('active');
                        const tabId = button.getAttribute('data-tab');
                        document.getElementById(tabId).classList.add('active');
                    });
                });
            });
        </script>
        <script>
            (function() {
                const header = document.querySelector('header');
                const toggle = document.getElementById('menuToggle');
                const off = document.getElementById('offcanvas');
                const offList = document.getElementById('offList');
                const offContacts = document.getElementById('offContacts');
                const backdrop = document.getElementById('offBackdrop');
                const closeBtn = document.getElementById('offClose');
                const nav = document.querySelector('.nav-menu');
                const contacts = document.querySelector('.contacts-block');

                function buildMenu() {
                    if (!offList) return;
                    offList.innerHTML = '';
                    const links = (nav ? [...nav.querySelectorAll('a')] : []).filter(a => a.href);
                    links.forEach((a, idx) => {
                        const li = document.createElement('li');
                        const link = document.createElement('a');
                        link.href = a.getAttribute('href');
                        link.className = 'off-link';
                        link.innerHTML = '<span class="num">' + String(idx + 1).padStart(2, '0') + '.</span>' +
                            '<span class="menu-title">' + a.textContent.trim() + '</span>';
                        li.appendChild(link);
                        offList.appendChild(li);
                    });
                    if (contacts && offContacts) {
                        offContacts.innerHTML = '';
                        // copy icons into offcanvas
                        const icons = contacts.querySelectorAll('.contact-block-link');
                        icons.forEach(el => offContacts.appendChild(el.cloneNode(true)));
                    }
                }
                buildMenu();

                function openOff() {
                    off.classList.add('open');
                    backdrop.classList.add('open');
                    off.setAttribute('aria-hidden', 'false');
                    toggle.setAttribute('aria-expanded', 'true');
                    backdrop.removeAttribute('hidden');
                    document.documentElement.style.overflow = 'hidden';
                }

                function closeOff() {
                    off.classList.remove('open');
                    backdrop.classList.remove('open');
                    off.setAttribute('aria-hidden', 'true');
                    toggle.setAttribute('aria-expanded', 'false');
                    setTimeout(() => {
                        document.documentElement.style.overflow = '';
                        backdrop.setAttribute('hidden', '');
                    }, 300);
                }

                toggle.addEventListener('click', openOff);
                closeBtn.addEventListener('click', closeOff);
                backdrop.addEventListener('click', closeOff);
                off.addEventListener('click', (e) => {
                    if (e.target.closest('a')) closeOff();
                });
                window.addEventListener('keydown', e => {
                    if (e.key === 'Escape') closeOff();
                });

                const THRESHOLD = 120;
                const MQ_MOBILE = window.matchMedia('(max-width: 991px)');

                function onScroll() {
                    const y = window.scrollY || document.documentElement.scrollTop;

                    if (MQ_MOBILE.matches) {
                        header.classList.remove('collapsing');
                        toggle.classList.add('is-fixed');
                        return;
                    }

                    if (y > THRESHOLD) {
                        header.classList.add('collapsing');
                        toggle.classList.add('is-fixed');
                    } else {
                        header.classList.remove('collapsing');
                        toggle.classList.remove('is-fixed');
                    }
                }

                onScroll();
                window.addEventListener('scroll', onScroll, {
                    passive: true
                });
                MQ_MOBILE.addEventListener?.('change', onScroll);
            })();
        </script>

        <script>
            (function() {
                function tryPlay(v) {
                    v.muted = true;
                    const p = v.play();
                    if (p && typeof p.catch === 'function') {
                        p.catch(() => {

                            v.closest ? v.closest('.main-section, .about, .news')?.classList.add('video-failed') :
                                null;
                        });
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelectorAll('video.video-bg').forEach(function(v) {
                        v.addEventListener('error', function() {
                            v.pause();
                            v.removeAttribute('src');
                            v.load();
                            v.closest?.('.main-section, .about, .news')?.classList.add(
                                'video-failed');
                        });
                        v.addEventListener('canplay', () => tryPlay(v), {
                            once: true
                        });
                        tryPlay(v);
                    });
                });
            })();
        </script>
        <script>
            if ('serviceWorker' in navigator) {
                navigator.serviceWorker.register('/sw.js');
            }
        </script>
       
</body>

</html>
