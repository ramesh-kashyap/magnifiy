
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{asset('')}}assets/styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnifly: Your Gateway to Digital Asset Investment</title>
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('')}}assets/favicon.svg" />
    <link rel="shortcut icon" href="{{asset('')}}assets/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}assets/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Magnifly" />
    <link rel="manifest" href="site.webmanifest.txt" />

    <meta name="description"
      content="Magnifly offers stable passive income through advanced cloud mining and profitable crypto investment plans. Power your daily crypto returns with us.">
    <meta name="keywords"
      content="cloud mining, crypto investment, passive income, Magnifly, digital assets, daily returns, cryptocurrency">
    <meta property="og:title"
      content="Magnifly | Powering Your Daily Crypto Returns">
    <meta property="og:description"
      content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title"
      content="Magnifly | Powering Your Daily Crypto Returns">
    <meta name="twitter:description"
      content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">

    <style>.contacts-block {
    display: flex
;
    gap: 10px;
    align-items: center;
    transition: opacity .25s 
ease;
}
.contact-block-link {
    display: inline-flex
;
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
                <a href="#contact" class="nav-link">Contact</a>
                <a href="#features" class="nav-link">Fearures</a>
                <a href="{{route('about-us')}}#reviews" class="nav-link">Reviews</a>
              </nav>
            </div>
            <button class="menu-toggle" id="menuToggle"
              aria-controls="offcanvas" aria-expanded="false"
              aria-label="Open menu">
              <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="#111827"
                  stroke-width="2" stroke-linecap="round" />
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
              <path d="M6 6l12 12M18 6l-12 12" stroke="#111827" stroke-width="2"
                stroke-linecap="round" />
            </svg>
          </button>
        </div>
        <div class="off-body">
          <ul class="menu-list" id="offList"></ul>

          <div class="off-contacts" id="offContacts"></div>

          <div class="off-socials">
            <a href="https://t.me/Magnifly_channel" target="_blank"
              rel="noopener noreferrer" class="social-link">
              <div class="social-icon">
                <svg viewBox="0 0 24 24" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"><path
                    d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.08l11.96-4.4c.79-.29 1.45.12 1.23.93l-1.93 9.04c-.23.94-.84 1.15-1.59.71L12.6 15.3l-2.25 2.15c-.23.24-.43.43-.81.43z" /></svg>
              </div>
              <span class="social-title">Telegram Channel</span>
            </a>
            <a href="https://t.me/Magnifly_group" target="_blank"
              rel="noopener noreferrer" class="social-link">
              <div class="social-icon">
                <svg viewBox="0 0 24 24" width="36px" fill="currentColor"
                  xmlns="http://www.w3.org/2000/svg"><path
                    d="M9.78 18.65l.28-4.23 7.68-6.92c.34-.31-.07-.46-.52-.19L7.74 13.3 3.64 12c-.88-.25-.89-.86.2-1.08l11.96-4.4c.79-.29 1.45.12 1.23.93l-1.93 9.04c-.23.94-.84 1.15-1.59.71L12.6 15.3l-2.25 2.15c-.23.24-.43.43-.81.43z" /></svg>
              </div>
              <span class="social-title">Telegram Group</span>
            </a>
          </div>
        </div>
      </aside>
