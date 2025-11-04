<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{asset('')}}assets/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnifly: Your Gateway to Digital Asset Investment</title>
    <link rel="icon" type="image/png" href="../favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="../favicon.svg" />
    <link rel="shortcut icon" href="../favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Magnifly" />
    <link rel="manifest" href="../site.webmanifest.txt" />


    <meta name="description" content="Magnifly offers stable passive income through advanced cloud mining and profitable crypto investment plans. Power your daily crypto returns with us.">
    <meta name="keywords" content="cloud mining, crypto investment, passive income, Magnifly, digital assets, daily returns, cryptocurrency">
    <meta property="og:title" content="Magnifly | Powering Your Daily Crypto Returns">
    <meta property="og:description" content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
    <meta property="og:image" content="https://Magnifly.cc/promo.png">
    <meta property="og:url" content="https://Magnifly.cc/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Magnifly">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Magnifly | Powering Your Daily Crypto Returns">
    <meta name="twitter:description" content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
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
                        <a href="{{route('Index')}}" class="brand">
                            <div class="logo"><img src="{{asset('')}}assets/logo.png" alt="Logo"></div>
                        </a>
                        <nav role="navigation" class="nav-menu">
                            <a href="{{route('Index')}}" class="nav-link">Home</a>
                            <a href="{{route('about-us')}}" class="nav-link">About</a>
                            <a href="{{route('faq')}}" class="nav-link">FAQ</a>
                            <a href="{{route('Index')}}#contact" class="nav-link">Contact</a>
                            <a href="{{route('Index')}}#features" class="nav-link">Features</a>
                            <a href="{{route('about-us')}}#reviews" class="nav-link">Reviews</a>
                        </nav>
                    </div>
                    <button class="menu-toggle" id="menuToggle" aria-controls="offcanvas" aria-expanded="false" aria-label="Open menu">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                            <path d="M4 7h16M4 12h16M4 17h16" stroke="#111827" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </header>
        <!-- Offcanvas -->
        <div class="offcanvas-backdrop" id="offBackdrop" hidden></div>
        <aside class="offcanvas" id="offcanvas" aria-hidden="true">
            <div class="off-top">
                <a href="{{route('Index')}}" class="off-brand">
                    <div class="logo"><img src="{{asset('')}}assets/logo.png" alt="Logo"></div>
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
                    <a href="https://t.me/Magnifly_channel" target="_blank" rel="noopener noreferrer" class="social-link">
                        <div class="social-icon">
                            <svg viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.08l11.96-4.4c.79-.29 1.45.12 1.23.93l-1.93 9.04c-.23.94-.84 1.15-1.59.71L12.6 15.3l-2.25 2.15c-.23.24-.43.43-.81.43z" />
                            </svg>
                        </div>
                        <span class="social-title">Telegram Channel</span>
                    </a>
                    <a href="https://t.me/Magnifly_group" target="_blank" rel="noopener noreferrer" class="social-link">
                        <div class="social-icon">
                            <svg viewBox="0 0 24 24" width="36px" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.08l11.96-4.4c.79-.29 1.45.12 1.23.93l-1.93 9.04c-.23.94-.84 1.15-1.59.71L12.6 15.3l-2.25 2.15c-.23.24-.43.43-.81.43z" />
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
                font-family: 'Anta', sans-serif;
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
                font-family: 'Anta', sans-serif;
                font-weight: 400;
                margin: 0 0 15px 0;
                line-height: 1.2;
            }

            .container {
                width: 100%;
                max-width: 1200px;
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
                font-family: Anta, sans-serif;
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
           FAQ ACCORDION
           =================================================================== */
            .faq-section h2 {
                text-align: center;
                font-size: 46px;
                margin-bottom: 60px;
            }

            .accordion {
                max-width: 900px;
                margin: 0 auto;
            }

            .accordion-item {
                background-color: var(--card-bg);
                border-radius: var(--border-radius);
                margin-bottom: 20px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
                border: 1px solid var(--border-color);
                transition: all 0.3s ease;
            }

            .accordion-item:hover {
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
            }

            .accordion-header {
                padding: 25px 30px;
                cursor: pointer;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .accordion-header h3 {
                margin: 0;
                font-size: 20px;
                font-family: 'Inter', sans-serif;
                font-weight: 600;
            }

            .accordion-icon {
                font-size: 24px;
                color: var(--sandy-brown);
                transition: transform 0.3s ease-in-out;
            }

            .accordion-item.active .accordion-icon {
                transform: rotate(45deg);
            }

            .accordion-body {
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease-in-out, padding 0.4s ease-in-out;
            }

            .accordion-body-content {
                padding: 0 30px 25px 30px;
                color: var(--text-muted);
                line-height: 1.7;
            }

            /* ===================================================================
           CONTACT CALLOUT
           =================================================================== */
            .contact-callout {
                background-color: var(--dark-slate-grey);
                color: var(--text-light);
                text-align: center;
            }

            .contact-callout h2 {
                color: var(--text-light);
                font-size: 36px;
            }

            .contact-callout p {
                color: var(--text-muted);
                margin-bottom: 30px;
            }

            .btn-contact {
                background-color: var(--sandy-brown);
                color: var(--dark-slate-grey);
                padding: 15px 35px;
                border-radius: 14px;
                font-family: 'Anta', sans-serif;
                font-size: 16px;
                cursor: pointer;
                transition: all 0.3s ease;
                border: none;
                text-decoration: none;
            }

            .btn-contact:hover {
                background-color: #fff;
                color: var(--dark-slate-grey);
                box-shadow: var(--glow-shadow);
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
                    height: auto !important;
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

                .faq-section h2,
                .contact-callout h2 {
                    font-size: 32px;
                }

                .accordion-header h3 {
                    font-size: 18px;
                }
            }
        </style>
        </head>


        <main>
            <section class="hero-section">
                <div class="container hero-content">
                    <h1>Frequently Asked <span>Questions</span></h1>
                    <p>Find answers to common questions about our platform, investments, and account management.</p>
                </div>
            </section>

            <section class="section faq-section">
                <div class="container">
                    <h2>General Questions</h2>

                    <div class="accordion">
                        <!-- What is Magnifly? -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>What is Magnifly?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>Magnifly is a platform focused on digital-asset investments and cloud mining. Users can allocate funds into our plans and receive returns according to the selected plan’s terms without running their own hardware.</p>
                                </div>
                            </div>
                        </div>

                        <!-- How to start -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>How can I start investing?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>Register, log in to your dashboard, choose a plan, and make a deposit in a supported currency. Accruals will follow the plan schedule automatically.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Company registration -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Is your company officially registered?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>Yes. You can view the official company certificate on the “About Us” page.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Multi accounts -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Can I create multiple accounts?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>No. Multiple accounts per user are prohibited to prevent referral abuse; violating accounts may be blocked.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="margin-top: 80px;">Financial Questions</h2>
                    <div class="accordion">

                        <!-- Min & Max deposit -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>What are the minimum and maximum deposit amounts?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p><strong>USD limits:</strong> Minimum <strong>$10</strong>, maximum <strong>$100,000</strong> (applies to all rate plans). Other currencies are calculated at the site’s internal rate for 1 USD. </p>

                                    <div class="faq-table-wrap" style="overflow:auto">
                                        <table class="faq-table" style="min-width:640px;width:100%;border-collapse:collapse">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:left;padding:10px;border-bottom:1px solid var(--border-color)">Currency</th>
                                                    <th style="text-align:left;padding:10px;border-bottom:1px solid var(--border-color)">Min deposit</th>
                                                    <th style="text-align:left;padding:10px;border-bottom:1px solid var(--border-color)">Max deposit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding:10px;">USD / USDT</td>
                                                    <td style="padding:10px;">10.00</td>
                                                    <td style="padding:10px;">100,000.00</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">BTC</td>
                                                    <td style="padding:10px;">0.00008100</td>
                                                    <td style="padding:10px;">0.81000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">LTC</td>
                                                    <td style="padding:10px;">0.08300000</td>
                                                    <td style="padding:10px;">830.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">DOGE</td>
                                                    <td style="padding:10px;">39.00000000</td>
                                                    <td style="padding:10px;">390,000.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">ETH</td>
                                                    <td style="padding:10px;">0.00220000</td>
                                                    <td style="padding:10px;">22.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">XRP</td>
                                                    <td style="padding:10px;">3.30000000</td>
                                                    <td style="padding:10px;">33,000.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">TRX</td>
                                                    <td style="padding:10px;">29.30000000</td>
                                                    <td style="padding:10px;">293,000.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">BNB</td>
                                                    <td style="padding:10px;">0.00860000</td>
                                                    <td style="padding:10px;">86.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">TON</td>
                                                    <td style="padding:10px;">3.60000000</td>
                                                    <td style="padding:10px;">36,000.00000000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p style="margin-top:10px;opacity:.8">Note: these currency figures correspond to the internal “units per USD” displayed in the calculator and are updated together with the site’s rates.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Payments accepted -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>What payment systems do you accept?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>We accept: <strong>USDT</strong> (TRC20, BEP20, TON), <strong>BTC</strong>, <strong>ETH</strong>, <strong>LTC</strong>, <strong>DOGE</strong>, <strong>XRP</strong>, <strong>TRX</strong>, <strong>BNB</strong>, and <strong>TON</strong>.</p>
                                    <p style="opacity:.8;margin-top:6px">Choose the preferred network (for USDT) in the calculator on the home page.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Min withdrawal -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>What is the minimum withdrawal amount?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>Minimum withdrawal limits by currency are:</p>

                                    <div class="faq-table-wrap" style="overflow:auto">
                                        <table class="faq-table" style="min-width:560px;width:100%;border-collapse:collapse">
                                            <thead>
                                                <tr>
                                                    <th style="text-align:left;padding:10px;border-bottom:1px solid var(--border-color)">Currency</th>
                                                    <th style="text-align:left;padding:10px;border-bottom:1px solid var(--border-color)">Min withdrawal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="padding:10px;">BTC</td>
                                                    <td style="padding:10px;">0.00002430</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">LTC</td>
                                                    <td style="padding:10px;">0.02490000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">DOGE</td>
                                                    <td style="padding:10px;">11.70000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">ETH</td>
                                                    <td style="padding:10px;">0.00066000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">XRP</td>
                                                    <td style="padding:10px;">0.99000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">TRX</td>
                                                    <td style="padding:10px;">8.79000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">BNB</td>
                                                    <td style="padding:10px;">0.00258000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">USDT</td>
                                                    <td style="padding:10px;">3.00000000</td>
                                                </tr>
                                                <tr>
                                                    <td style="padding:10px;">TON</td>
                                                    <td style="padding:10px;">1.08000000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <p style="margin-top:10px;opacity:.8">Network fees apply and are not controlled by the platform.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Fees -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Are there any withdrawal fees?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>The platform does not charge a withdrawal commission; only standard blockchain fees apply.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Processing time -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>How quickly are withdrawals processed?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>Withdrawals are <strong>instant</strong> for active plans; in rare cases, additional security checks may be required.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 style="margin-top: 80px;">Referral Program</h2>
                    <div class="accordion">
                        <!-- Referral program -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>How does the referral program work?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>Earn from deposits across three levels:</p>
                                    <ul>
                                        <li><strong>Level 1:</strong> 7% from your direct invitees’ deposits.</li>
                                        <li><strong>Level 2:</strong> 2% from deposits of users invited by your referrals.</li>
                                        <li><strong>Level 3:</strong> 1% from third-level referrals’ deposits.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Active deposit for referrals? -->
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <h3>Do I need an active deposit to earn referral commissions?</h3>
                                <div class="accordion-icon">+</div>
                            </div>
                            <div class="accordion-body">
                                <div class="accordion-body-content">
                                    <p>No. Commissions accrue simply by sharing your personal referral link and growing your structure.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section contact-callout">
                <div class="container">
                    <h2>Still Have Questions?</h2>
                    <p>Our support team is ready to assist you 24/7. Don't hesitate to reach out.</p>
                    <a href="{{route('Index')}}#contact" class="btn-contact">Contact Us</a>
                </div>
            </section>
        </main>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const accordionItems = document.querySelectorAll('.accordion-item');

                accordionItems.forEach(item => {
                    const header = item.querySelector('.accordion-header');
                    const body = item.querySelector('.accordion-body');
                    const content = item.querySelector('.accordion-body-content');

                    header.addEventListener('click', () => {
                        const isActive = item.classList.contains('active');

                        // Close all items
                        accordionItems.forEach(i => {
                            i.classList.remove('active');
                            i.querySelector('.accordion-body').style.maxHeight = '0px';
                            i.querySelector('.accordion-icon').textContent = '+';
                        });

                        // Open the clicked one if it wasn't active
                        if (!isActive) {
                            item.classList.add('active');
                            body.style.maxHeight = content.scrollHeight + 'px';
                            item.querySelector('.accordion-icon').textContent = '×';
                        }
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

                            v.closest ? v.closest('.main-section, .about, .news')?.classList.add('video-failed') : null;
                        });
                    }
                }

                document.addEventListener('DOMContentLoaded', function() {
                    document.querySelectorAll('video.video-bg').forEach(function(v) {
                        v.addEventListener('error', function() {
                            v.pause();
                            v.removeAttribute('src');
                            v.load();
                            v.closest?.('.main-section, .about, .news')?.classList.add('video-failed');
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
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/68e4c527b760c0195195763c/1j6uq495h';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
</body>

</html>