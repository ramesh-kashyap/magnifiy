<html lang="en"><head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{sitename()}}: User Dashboard</title>
        <link rel="icon" type="image/png" href="/favicon-96x96.png"
            sizes="96x96">
        <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    <link rel="shortcut icon" href="{{asset('')}}assets/favicon.ico" />
        <link rel="apple-touch-icon" sizes="180x180"
            href="/apple-touch-icon.png">
        <meta name="apple-mobile-web-app-title" content="TeMining">
        <!-- <link rel="manifest" href="/site.webmanifest"> -->

        <meta name="description"
            content="TeMining offers stable passive income through advanced cloud mining and profitable crypto investment plans. Power your daily crypto returns with us.">
        <meta name="keywords"
            content="cloud mining, crypto investment, passive income, TeMining, digital assets, daily returns, cryptocurrency">
        <meta property="og:title"
            content="TeMining | Powering Your Daily Crypto Returns">
        <meta property="og:description"
            content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
        <meta property="og:image" content="https://temining.cc/promo.png">
        <meta property="og:url" content="https://temining.cc/">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="TeMining">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title"
            content="TeMining | Powering Your Daily Crypto Returns">
        <meta name="twitter:description"
            content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
        <meta name="twitter:image" content="https://temining.cc/promo.png">

    </head><body><header>
            <div class="navbar">
                <div class="div-block">
                    <div class="div-block-2">
                        <a href="{{route('user.dashboard')}}" class="brand">
                            <img class="logo" src="{{asset('')}}assets/logo-magnifly.png" alt>
                        </a>
                        <nav role="navigation" class="nav-menu">
                            <a href="{{route('user.dashboard')}}"
                                class="nav-link  active">Dashboard</a>
                            <a href="{{route('user.invest')}}" class="nav-link  ">
                                Deposit</a>
                            <a href="{{route('user.Withdraw')}}"
                                class="nav-link  ">Withdraw</a>
                            <a href="{{route('user.re-invest')}}"
                                class="nav-link  ">Re-invest</a>
                            <a href="{{route('user.DepositHistory')}}"
                                class="nav-link  ">Transactions</a>
                            <a href="{{route('user.profile')}}"
                                class="nav-link  ">Settings</a>
                            <a href="{{route('user.referral-team')}}" class="nav-link  ">Referral </a>
                        </nav>

                        <div class="contacts-block">
                            <a href="{{route('logout')}}" class="get-button">
                                LOGOUT
                                <div class="div-block-8">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        width="20" height="20"
                                        viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        style="color: #fff;"><path
                                            d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline
                                            points="16 17 21 12 16 7"></polyline><line
                                            x1="21" y1="12" x2="9"
                                            y2="12"></line></svg>
                                </div>
                            </a>
                        </div>
                    </div>

                    <button class="menu-toggle" id="menuToggle"
                        aria-controls="offcanvas" aria-expanded="false"
                        aria-label="Open menu">
                        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"
                            stroke="#111827" stroke-width="2"
                            stroke-linecap="round">
                            <path d="M4 7h16M4 12h16M4 17h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </header>
  <style>

      /* math */
@font-face {
  font-family: 'Anta';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/assets/fonts/gyBzhwQ3KsIyVCc7PWim.woff2) format('woff2');
  unicode-range: U+0302-0303, U+0305, U+0307-0308, U+0310, U+0312, U+0315, U+031A, U+0326-0327, U+032C, U+032F-0330, U+0332-0333, U+0338, U+033A, U+0346, U+034D, U+0391-03A1, U+03A3-03A9, U+03B1-03C9, U+03D1, U+03D5-03D6, U+03F0-03F1, U+03F4-03F5, U+2016-2017, U+2034-2038, U+203C, U+2040, U+2043, U+2047, U+2050, U+2057, U+205F, U+2070-2071, U+2074-208E, U+2090-209C, U+20D0-20DC, U+20E1, U+20E5-20EF, U+2100-2112, U+2114-2115, U+2117-2121, U+2123-214F, U+2190, U+2192, U+2194-21AE, U+21B0-21E5, U+21F1-21F2, U+21F4-2211, U+2213-2214, U+2216-22FF, U+2308-230B, U+2310, U+2319, U+231C-2321, U+2336-237A, U+237C, U+2395, U+239B-23B7, U+23D0, U+23DC-23E1, U+2474-2475, U+25AF, U+25B3, U+25B7, U+25BD, U+25C1, U+25CA, U+25CC, U+25FB, U+266D-266F, U+27C0-27FF, U+2900-2AFF, U+2B0E-2B11, U+2B30-2B4C, U+2BFE, U+3030, U+FF5B, U+FF5D, U+1D400-1D7FF, U+1EE00-1EEFF;
}
/* symbols */
@font-face {
  font-family: 'Anta';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/assets/fonts/gyBzhwQ3KsIyVDU7PWim.woff2) format('woff2');
  unicode-range: U+0001-000C, U+000E-001F, U+007F-009F, U+20DD-20E0, U+20E2-20E4, U+2150-218F, U+2190, U+2192, U+2194-2199, U+21AF, U+21E6-21F0, U+21F3, U+2218-2219, U+2299, U+22C4-22C6, U+2300-243F, U+2440-244A, U+2460-24FF, U+25A0-27BF, U+2800-28FF, U+2921-2922, U+2981, U+29BF, U+29EB, U+2B00-2BFF, U+4DC0-4DFF, U+FFF9-FFFB, U+10140-1018E, U+10190-1019C, U+101A0, U+101D0-101FD, U+102E0-102FB, U+10E60-10E7E, U+1D2C0-1D2D3, U+1D2E0-1D37F, U+1F000-1F0FF, U+1F100-1F1AD, U+1F1E6-1F1FF, U+1F30D-1F30F, U+1F315, U+1F31C, U+1F31E, U+1F320-1F32C, U+1F336, U+1F378, U+1F37D, U+1F382, U+1F393-1F39F, U+1F3A7-1F3A8, U+1F3AC-1F3AF, U+1F3C2, U+1F3C4-1F3C6, U+1F3CA-1F3CE, U+1F3D4-1F3E0, U+1F3ED, U+1F3F1-1F3F3, U+1F3F5-1F3F7, U+1F408, U+1F415, U+1F41F, U+1F426, U+1F43F, U+1F441-1F442, U+1F444, U+1F446-1F449, U+1F44C-1F44E, U+1F453, U+1F46A, U+1F47D, U+1F4A3, U+1F4B0, U+1F4B3, U+1F4B9, U+1F4BB, U+1F4BF, U+1F4C8-1F4CB, U+1F4D6, U+1F4DA, U+1F4DF, U+1F4E3-1F4E6, U+1F4EA-1F4ED, U+1F4F7, U+1F4F9-1F4FB, U+1F4FD-1F4FE, U+1F503, U+1F507-1F50B, U+1F50D, U+1F512-1F513, U+1F53E-1F54A, U+1F54F-1F5FA, U+1F610, U+1F650-1F67F, U+1F687, U+1F68D, U+1F691, U+1F694, U+1F698, U+1F6AD, U+1F6B2, U+1F6B9-1F6BA, U+1F6BC, U+1F6C6-1F6CF, U+1F6D3-1F6D7, U+1F6E0-1F6EA, U+1F6F0-1F6F3, U+1F6F7-1F6FC, U+1F700-1F7FF, U+1F800-1F80B, U+1F810-1F847, U+1F850-1F859, U+1F860-1F887, U+1F890-1F8AD, U+1F8B0-1F8BB, U+1F8C0-1F8C1, U+1F900-1F90B, U+1F93B, U+1F946, U+1F984, U+1F996, U+1F9E9, U+1FA00-1FA6F, U+1FA70-1FA7C, U+1FA80-1FA89, U+1FA8F-1FAC6, U+1FACE-1FADC, U+1FADF-1FAE9, U+1FAF0-1FAF8, U+1FB00-1FBFF;
}
/* latin-ext */
@font-face {
  font-family: 'Anta';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/assets/fonts/gyBzhwQ3KsIyVFU7PWim.woff2) format('woff2');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Anta';
  font-style: normal;
  font-weight: 400;
  font-display: swap;
  src: url(/assets/fonts/gyBzhwQ3KsIyVFs7PQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Geist';
  font-style: normal;
  font-weight: 100 900;
  font-display: swap;
  src: url(/assets/fonts/gyByhwUxId8gMEwYGFWfOw.woff2) format('woff2');
  unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* latin-ext */
@font-face {
  font-family: 'Geist';
  font-style: normal;
  font-weight: 100 900;
  font-display: swap;
  src: url(/assets/fonts/gyByhwUxId8gMEwSGFWfOw.woff2) format('woff2');
  unicode-range: U+0100-02BA, U+02BD-02C5, U+02C7-02CC, U+02CE-02D7, U+02DD-02FF, U+0304, U+0308, U+0329, U+1D00-1DBF, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20C0, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Geist';
  font-style: normal;
  font-weight: 100 900;
  font-display: swap;
  src: url(/assets/fonts/gyByhwUxId8gMEwcGFU.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
        /* ===================================================================
           BASE STYLES (Inherited from Homepage)
           =================================================================== */
        :root {
            --dark-slate-grey: #30363b;
                --cp-accent: #9d7bff;
            --dark-grey-lighter: #3d4348;
            --sandy-brown: #9d7bff;
            --text-muted: #a2a5ad;
            --text-light: #f7f7f9;
            --background: #f7f7f9;
            --card-bg: #fff;
            --card-dark-bg: #3d4348;
            --border-radius: 20px;
            --glow-shadow: 0 12px 48px rgba(110, 71, 226, 0.25);
            --futuristic-glow: 
              radial-gradient(140px 60px at 120% -10%, rgba(134, 70, 224, 0.45), rgba(244,161,89,0) 70%) no-repeat,
              radial-gradient(220px 120px at -10% 110%, rgba(48,54,59,.08), rgba(48,54,59,0) 70%) no-repeat;
        }

        html, body {
            overflow-x: hidden;
        }

        body {
            background-color: #151515;
            font-family: 'Inter', sans-serif;
            color: var(--dark-slate-grey);
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }
        
        a {
            text-decoration: none;
            color: var(--sandy-brown);
        }

        h1, h2, h3, h4 {
            font-family: 'Anta', sans-serif;
            font-weight: 400;
            margin: 0 0 15px 0;
            color: #ffffff;
            line-height: 1.2;
        }

        /* ===================================================================
           RESPONSIVE HEADER & OFF-CANVAS MENU (From Homepage)
           =================================================================== */
        header {
            position: relative;
            z-index: 20;
        }
        .navbar {
            z-index: 7;
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            padding: 35px 60px;
            position: relative;
            display:flex;
            align-items:center;
        }
        .div-block { display: flex; justify-content: space-between;     justify-content: center; align-items: center; width: 100%; gap: 16px; }
        .div-block-2 { display:flex; align-items:center; gap:100px; }
        .brand { display: flex; align-items: center; font-family: Anta, sans-serif; font-size: 24px; font-weight: 700; color: var(--dark-slate-grey); }
        .logo-icon { width: 36px; height: 36px; border-radius: 12px; background: var(--dark-slate-grey); display: grid; place-items: center; color: var(--sandy-brown); font-weight: 800; margin-right: 10px; }
        .nav-menu { display: flex; align-items: center; gap: 44px; transition:opacity .3s ease, transform .4s ease; }
        .nav-link { color: var(--text-muted); font-weight: 500; transition: color 0.3s ease; }
        .nav-link:hover, .nav-link.active { color: #9d7bff; }
        
        .contacts-block { display:flex; gap:10px; align-items:center; transition:opacity .25s ease }
        .get-button {
            background-color: var(--sandy-brown);
            border-radius: 14px;
            padding: 0 5px 0 20px;
            height: 56px;
            display: inline-flex;
            align-items: center;
            color: #fff;
            font-family: 'Anta', sans-serif;
            font-size: 14px;
            transition: all 0.4s ease;
        }
        .get-button .div-block-8 { background-color: var(--dark-slate-grey); border-radius: 11px; width: 40px; height: 40px; display: grid; place-items: center; margin-left: 15px; }
        .get-button:hover { background-color: var(--dark-slate-grey); color: #fff; }
        .get-button:hover .div-block-8 { background-color: var(--sandy-brown); }

        .menu-toggle {
            position:absolute; cursor: pointer; top: 50%; right: 0;
            transform: translateY(-50%);
            border-radius: 14px; width: 60px; height: 60px;
            background:#fff; border: 1px solid #e0e1e2;
            display:flex; align-items:center; justify-content:center;
            opacity:0; pointer-events:none;
            transition: opacity .35s ease, background .2s ease;
        }
        .menu-toggle.is-fixed{
            position: fixed; top: 30px; right: 40px; z-index: 101;
            box-shadow: 0 8px 24px rgba(0,0,0,.1);
        }

        /* Offcanvas Styles */
        .offcanvas-backdrop{
            position:fixed; inset:0; background:rgba(0,0,0,0.5);
            opacity:0; pointer-events:none; transition:opacity .3s ease; z-index:99;
        }
        .offcanvas{
            position:fixed; inset:0 0 0 auto; width:min(480px, 92vw); height:100vh;
            background:#fff; box-shadow:-10px 0 30px rgba(16,24,40,.2); transform:translateX(100%);
            transition:transform .35s ease; z-index:100; display:flex; flex-direction:column;
        }
        .offcanvas.open{transform:translateX(0)}
        .offcanvas-backdrop.open{opacity:1; pointer-events:auto;}
        .off-top{display:flex;align-items:center;justify-content:space-between;padding:18px 22px;border-bottom:1px solid rgba(0,0,0,.06)}
        .off-brand{display:inline-flex;align-items:center;gap:10px;color:inherit;text-decoration:none}
        .off-close{width:42px;height:42px;border-radius:12px;border:1px solid rgba(0,0,0,.08);background:#fff;display:grid;place-items:center; cursor: pointer;}
        .off-body{padding:20px 24px 28px;overflow:auto;}
        .menu-list{list-style:none;margin:0;padding:4px 0;display:flex;flex-direction:column;gap:8px}
        .menu-list a{display:flex;align-items:center;gap:12px;text-decoration:none;color:#111827;padding:14px 12px;border-radius:12px;font-weight:700}
        .menu-list a:hover{background:rgba(0,0,0,.04)}
        .num{color:#c1c7d0;font-weight:700;min-width:2ch;text-align:right}
        .menu-title{font-family:'Inter', sans-serif; letter-spacing:.4px}
        .off-contacts{margin-top:24px; padding-top: 24px; border-top: 1px solid #e0e1e2;}
        
        /* ===================================================================
           NEW MOBILE MENU STYLES
           =================================================================== */
        .mobile-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr 1fr; /* Two columns */
            gap: 15px;
        }
        
        .mobile-menu-item a {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px 10px;
            background-color: var(--background);
            border-radius: var(--border-radius);
            border: 1px solid #e0e1e2;
            text-decoration: none;
            color: var(--dark-slate-grey);
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s ease;
            height: 120px;
        }

        .mobile-menu-item a:hover {
            transform: translateY(-5px);
            border-color: var(--sandy-brown);
            box-shadow: 0 8px 20px rgba(244, 161, 89, 0.2);
        }

        .mobile-menu-item .menu-icon {
            width: 36px;
            height: 36px;
            color: var(--sandy-brown);
            margin-bottom: 12px;
        }

        .mobile-menu-item .menu-title {
            font-family: 'Anta', sans-serif;
            font-size: 16px;
            line-height: 1.2;
        }
        
        /* ===================================================================
           DASHBOARD WRAPPER & LAYOUT
           =================================================================== */
        .dashboard-wrapper {
            padding: 40px 60px 60px;
            max-width: 1440px;
            margin: 0 auto;
            position: relative;
        }

        .dashboard-header {
            margin-bottom: 40px;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .dashboard-header h1 {
            font-size: 46px;
            margin-bottom: 0;
        }
        
        .dashboard-header h1 span {
            color: var(--sandy-brown);
        }
        
        .dashboard-quick-actions {
            display: flex;
            gap: 15px;
        }

        .btn-action {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 12px 24px;
            border-radius: 14px;
            font-family: 'Anta', sans-serif;
            font-size: 16px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .btn-deposit {
            background-color: var(--sandy-brown);
            color: var(--dark-slate-grey);
        }
        .btn-deposit:hover {
            background-color: transparent;
            border-color: var(--sandy-brown);
            color: var(--dark-slate-grey);
        }
        
        .btn-withdraw {
            background-color: var(--dark-slate-grey);
            color: #fff;
        }
        .btn-withdraw:hover {
            background-color: transparent;
            border-color: var(--dark-slate-grey);
            color: var(--dark-slate-grey);
        }


        /* ===================================================================
           MAIN STATS GRID
           =================================================================== */
        .main-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            background-color: var(--card-dark-bg);
            padding: 30px;
            border-radius: var(--border-radius);
            position: relative;
            overflow: hidden;
            color: var(--text-light);
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        
        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--glow-shadow);
        }

        /* Futuristic glow effect */
        .stat-card::before {
            content: "";
            position: absolute;
            inset: -1px;
            border-radius: var(--border-radius);
            background: var(--futuristic-glow);
            pointer-events: none;
            z-index: 0;
            opacity: 0.7;
        }
        
        .stat-card-content {
            position: relative;
            z-index: 1;
        }

        .stat-card .label {
            font-size: 16px;
            color: var(--text-muted);
            margin-bottom: 10px;
            display: block;
        }

        .stat-card .value {
            font-family: 'Anta', sans-serif;
            font-size: 38px;
            color: #fff;
            line-height: 1;
        }

        .stat-card .value-accent {
            color: var(--sandy-brown);
        }

        .stat-card .sub-value {
            font-size: 14px;
            color: var(--text-muted);
            margin-top: 5px;
        }

        .stat-card-icon {
            position: absolute;
            right: 20px;
            top: 20px;
            font-size: 48px;
            color: rgba(255,255,255,0.05);
            transform: rotate(-15deg);
        }

        /* ===================================================================
           DASHBOARD MAIN LAYOUT (2 Columns)
           =================================================================== */
        .dashboard-main-layout {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            align-items: start;
        }

        .main-column, .sidebar-column {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .dashboard-card {
            background: #2c2c2c;
            border-radius: var(--border-radius);
            padding: 30px;
            box-shadow: 0 10px 40px rgba(48, 54, 59, 0.05);
            border: 1px solid rgba(48, 54, 59, 0.08);
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }
        
        .card-header h3 {
            margin: 0;
            font-size: 24px;
        }


        /* ===================================================================
           ACCOUNT BALANCES
           =================================================================== */
        .balances-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .balance-item {
            padding: 20px;
            border-radius: 16px;
            background-color: var(--background);
            border: 1px solid #202223;
            text-align: center;
            transition: all 0.3s ease;
            background: linear-gradient(252deg, #4d4d4d 0%, #353434 21%, #313131 39%, #3c3c3c 100%);
        }
        
        .balance-item:hover {
            transform: scale(1.05);
            border-color: var(--sandy-brown);
        }

        .balance-item img {
            width: 48px;
            height: 48px;
            margin-bottom: 15px;
        }
        
        .balance-item .currency-name {
            font-weight: 600;
            font-size: 18px;
            color: #9d7bff;
        }
        
        .balance-item .currency-amount {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: var(--text-muted);
        }

        /* ===================================================================
           ACTIVE DEPOSITS TABLE
           =================================================================== */
        .deposits-table {
            width: 100%;
            border-collapse: collapse;
        }

        .deposits-table th, .deposits-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e1e2;
        }
        
        .deposits-table thead th {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: var(--text-muted);
            font-weight: 500;
            text-transform: uppercase;
        }

        .deposits-table tbody tr:last-child td {
            border-bottom: none;
        }
        
        .deposits-table tbody tr:hover {
            background-color: #fafafa;
        }

        .plan-name {
            font-weight: 600;
        }

        .amount-value {
            font-weight: 500;
            color: var(--dark-slate-grey);
        }
        
        .profit-value {
            color: #28a745;
            font-weight: 600;
        }
        
        .progress-bar-container {
            width: 100%;
            height: 8px;
            background-color: #e0e1e2;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress-bar {
            height: 100%;
            background-color: var(--sandy-brown);
            border-radius: 4px;
            animation: progress-shine 2s linear infinite;
            background-image: linear-gradient(90deg, var(--sandy-brown) 25%, #f7ba7a 50%, var(--sandy-brown) 75%);
            background-size: 200% 100%;
        }

        @keyframes progress-shine {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        /* ===================================================================
           SIDEBAR: REFERRAL & TRANSACTIONS
           =================================================================== */
        .referral-card .ref-link-wrapper {
            background-color: #272626;
            padding: 10px 15px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }
        
        .referral-card .ref-link {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-family: monospace;
            font-size: 14px;
        }
        
        .referral-card .btn-copy {
            background: var(--sandy-brown);
            color: var(--dark-slate-grey);
            border: none;
            padding: 8px 12px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            margin-left: 10px;
        }
        
        .referral-stats {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
            text-align: center;
        }
        
        .referral-stats .label {
            font-size: 14px;
            color: var(--text-muted);
        }

        .referral-stats .value {
            font-size: 20px;
            font-weight: 600;
            color: #fff;
        }

        .transactions-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .transaction-item {
            display: flex;
            align-items: center;
            padding: 15px 0;
            border-bottom: 1px solid #e0e1e2;
        }
        .transaction-item:last-child { border-bottom: none; }

        .transaction-item .icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            margin-right: 15px;
        }
        
        .transaction-item .icon.deposit { background-color: rgba(40, 167, 69, 0.1); color: #28a745; }
        .transaction-item .icon.withdrawal { background-color: rgba(220, 53, 69, 0.1); color: #dc3545; }

        .transaction-item .details {
            flex-grow: 1;
        }
        
        .transaction-item .details .type { font-weight: 600; }
        .transaction-item .details .date { font-size: 14px; color: var(--text-muted); }

        .transaction-item .amount {
            font-weight: 600;
            font-size: 18px;
        }
        .transaction-item .amount.deposit { color: #28a745; }
        .transaction-item .amount.withdrawal { color: #dc3545; }


        /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
        @media (max-width: 1200px) {
            .dashboard-main-layout {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 991px) {
            .navbar { padding: 30px 40px; }
            .nav-menu, .contacts-block { display: none !important; }
            .menu-toggle { opacity:1; pointer-events:auto; position: absolute;         right: 15px; }
            .menu-toggle.is-fixed { right: 40px; top: 20px; }
            .brand { margin-right: auto; }
            
            .dashboard-wrapper { padding: 40px; }
            .dashboard-header { margin-top: 20px; }
            
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
            }
            .deposits-table {
                display: block;
                overflow-x: auto;
            }
        }

        @media (max-width: 767px) {
            .navbar { padding: 20px; }
            .menu-toggle.is-fixed { right: 20px; top: 15px; }
            .dashboard-wrapper { padding: 20px; }
            .dashboard-header h1 { font-size: 36px; }

            .main-stats-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .dashboard-main-layout, .main-column, .sidebar-column {
                gap: 20px;
            }

            .dashboard-card, .stat-card {
                padding: 20px;
            }
            
            .balances-grid {
                grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
                gap: 15px;
            }
            
            /* Make table more mobile-friendly */
            .deposits-table thead {
                display: none;
            }
            .deposits-table, .deposits-table tbody, .deposits-table tr, .deposits-table td {
                display: block;
                width: 100%;
            }
            .deposits-table tr {
                margin-bottom: 15px;
                border: 1px solid #e0e1e2;
                border-radius: 16px;
                padding: 10px;
            }
            .deposits-table td {
                padding: 8px 0;
                text-align: right;
                border: none;
                position: relative;
                padding-left: 50%;
            }
            .deposits-table td::before {
                content: attr(data-label);
                position: absolute;
                left: 10px;
                width: calc(50% - 20px);
                text-align: left;
                font-weight: bold;
                color: var(--text-muted);
            }
            
            /* Offcanvas Mobile Styles */
            .offcanvas{width:100vw}
            .off-body{padding:26px 22px 60px}

            .mobile-menu-item a {
                height: 110px;
                padding: 15px 5px;
            }
        }
.details .system-name {
    color: #a2a5ad; /* text-muted color */
    font-size: 0.8em;
    margin-left: 5px;
}

.date .status-pending {
    color: #9d7bff; /* sandy-brown color */
    font-weight: 600;
}

.transaction-item-empty {
    text-align: center;
    padding: 30px 20px;
    color: #a2a5ad;
}

@media (max-width: 991px) {

  .dashboard-wrapper {
    padding-left: 20px;
    padding-right: 20px;
  }

  .dashboard-main-layout {
    display: block; 
  }
    .reinvest-wrapper{
    display: block;
  }

  .main-column,
  .sidebar-column {
    width: 100%;    
  }
  .main-content {
    width: 100%;   
  }
  .main-column {
    margin-bottom: 30px; 
  }
}


@media (max-width: 767px) {
  .main-column {
    margin-bottom: 20px;
    
  }
  .logo {
    width: 200px;
  }
}
.offcanvas .mobile-menu .menu-icon {
  width: 24px; height: 24px; flex: 0 0 24px;
  display: inline-block; vertical-align: middle;
}
.offcanvas .mobile-menu .menu-icon,
.offcanvas .mobile-menu .menu-icon * {
  stroke: currentColor; fill: none;
  stroke-width: 1.8;
  stroke-linecap: round; stroke-linejoin: round;
  vector-effect: non-scaling-stroke;
}
.offcanvas .mobile-menu .menu-title {
  line-height: 1.2;
  transform: translateY(-0.5px);
}

 .mobile-menu { list-style: none; margin: 0; padding: 0; display: grid; gap: 12px; }
  .mobile-menu-item a {
    display: flex; align-items: center; gap: 12px;
    padding: 14px 16px; border-radius: 14px;
    text-decoration: none; font-weight: 700;
    border: 1px solid rgba(48,54,59,.12); background: #fff; color: #30363b;
  }
  .mobile-menu-item a:active { transform: translateY(1px); }
  .mobile-menu .menu-icon {
    width: 24px; height: 24px; flex: 0 0 24px; display: inline-block;
    color: currentColor; /* inherit text color */
  }
  .mobile-menu .menu-icon, .mobile-menu .menu-icon * { vector-effect: non-scaling-stroke; }
  .menu-title { display: inline-block; }
  .off-contacts .get-button { width: 100%; justify-content: center; }
  .logo {
  width: 160px;
}
    </style>

        <!-- Off-canvas backdrop -->
        <div class="offcanvas-backdrop" id="offBackdrop" hidden></div>

        <!-- Off-canvas panel -->
        <aside class="offcanvas" id="offcanvas" aria-hidden="true">
            <div class="off-top">
                <a href="{{route('user.dashboard')}}" class="off-brand brand">
                    <img class="logo" src="{{asset('')}}assets/logo.png" alt>
                </a>
                <button class="off-close" id="offClose" aria-label="Close menu">
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true"
                        stroke="#111827" stroke-width="2"
                        stroke-linecap="round">
                        <path d="M6 6l12 12M18 6l-12 12"></path>
                    </svg>
                </button>
            </div>

            <div class="off-body">
                <ul class="mobile-menu" id="offList"><li
                        class="mobile-menu-item"><a href="{{route('user.dashboard')}}">

                            <svg class="menu-icon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="3" width="8" height="8"
                                    rx="2"></rect>
                                <rect x="13" y="3" width="8" height="5"
                                    rx="2"></rect>
                                <rect x="13" y="10" width="8" height="11"
                                    rx="2"></rect>
                                <rect x="3" y="13" width="8" height="8"
                                    rx="2"></rect>
                            </svg>

                            <span class="menu-title">Dashboard</span>
                        </a></li><li class="mobile-menu-item"><a
                            href="{{route('user.invest')}}">

                            <svg class="menu-icon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M12 3v14m0 0l-4-4m4 4l4-4M4 19h16"></path>
                            </svg>

                            <span class="menu-title">Deposit</span>
                        </a></li><li class="mobile-menu-item"><a
                            href="{{route('user.Withdraw')}}">

                            <svg class="menu-icon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M12 21V7m0 0l4 4m-4-4l-4 4M4 5h16"></path>
                            </svg>

                            <span class="menu-title">Withdraw</span>
                        </a></li><li class="mobile-menu-item"><a
                            href="{{route('user.re-invest')}}">

                            <svg class="menu-icon"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="512" height="512" x="0" y="0"
                                viewBox="0 0 64 64"
                                style="enable-background:new 0 0 512 512"
                                xml:space="preserve"><g><path
                                        d="M34.187 3.187c-15.248 0-27.76 11.908-28.743 26.912L2.84 26.195a1.004 1.004 0 1 0-1.671 1.115l4.02 6.025a1.004 1.004 0 0 0 1.392.278l6.025-4.02a1.005 1.005 0 0 0-1.115-1.67L7.417 30.64c.71-14.151 12.446-25.446 26.77-25.446 14.78 0 26.805 12.025 26.805 26.805S48.967 58.805 34.187 58.805A26.768 26.768 0 0 1 10.486 44.53a1.005 1.005 0 0 0-1.775.94 28.773 28.773 0 0 0 25.476 15.342C50.075 60.813 63 47.888 63 32S50.075 3.187 34.187 3.187z"
                                        fill="#000000" opacity="1"
                                        data-original="#000000"></path></g></svg>

                            <span class="menu-title">Re-invest</span>
                        </a></li><li class="mobile-menu-item"><a
                            href="{{route('user.DepositHistory')}}">

                            <svg class="menu-icon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 7h16M4 12h16M4 17h16"></path>
                            </svg>

                            <span class="menu-title">Transactions</span>
                        </a></li><li class="mobile-menu-item"><a
                            href="{{route('user.profile')}}">

                            <svg class="menu-icon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <path
                                    d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"></path>
                                <path
                                    d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.07a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.07a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06A2 2 0 1 1 7.02 3.3l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.07a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06A2 2 0 1 1 20.7 7.02l-.06.06a1.65 1.65 0 0 0-.33 1.82V9c0 .66.38 1.26 1 1.51.15.06.32.09.49.09H21a2 2 0 1 1 0 4h-.07a1.65 1.65 0 0 0-1.51 1Z"></path>
                            </svg>

                            <span class="menu-title">Settings</span>
                        </a></li><li class="mobile-menu-item"><a
                            href="{{route('user.referrals')}}">

                            <svg class="menu-icon" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor"
                                stroke-width="1.8" stroke-linecap="round"
                                stroke-linejoin="round" aria-hidden="true">
                                <circle cx="8" cy="7" r="3"></circle>
                                <path d="M2 21v-2a6 6 0 0 1 6-6h0"></path>
                                <circle cx="17" cy="10" r="3"></circle>
                                <path d="M22 21v-2a6 6 0 0 0-6-6h0"></path>
                            </svg>

                            <span class="menu-title">Referral</span>
                        </a></li></ul>
                <div class="off-contacts" id="offContacts"><a href="{{route('logout')}}"
                        class="get-button"
                        style="width: 100%; justify-content: center;">
                        LOGOUT
                        <div class="div-block-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                height="20" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                style="color: #fff;"><path
                                    d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline
                                    points="16 17 21 12 16 7"></polyline><line
                                    x1="21" y1="12" x2="9" y2="12"></line></svg>
                        </div>
                    </a></div>
            </div>
        </aside>

        <script>
(function(){
  // ---- 1) ICONS: put your per-item SVGs here ----
  //
  // Each value can be:
  //  - Inline full SVG string: `<svg viewBox="0 0 24 24" ...>...</svg>`
  //  - Sprite reference:       `use:#icon-id`
  //  - Empty/undefined:        fallback simple icon will be used
  //
  // Keys are arbitrary (e.g., 'dashboard', 'deposit'), and you choose them on links with data-icon="…"

  const ICONS = {
    dashboard: `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <rect x="3" y="3" width="8" height="8" rx="2"></rect>
        <rect x="13" y="3" width="8" height="5" rx="2"></rect>
        <rect x="13" y="10" width="8" height="11" rx="2"></rect>
        <rect x="3" y="13" width="8" height="8" rx="2"></rect>
      </svg>
    `,
    deposit: `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M12 3v14m0 0l-4-4m4 4l4-4M4 19h16" />
      </svg>
    `,
    withdraw: `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M12 21V7m0 0l4 4m-4-4l-4 4M4 5h16" />
      </svg>
    `,
    reinvest: `
     <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><path d="M34.187 3.187c-15.248 0-27.76 11.908-28.743 26.912L2.84 26.195a1.004 1.004 0 1 0-1.671 1.115l4.02 6.025a1.004 1.004 0 0 0 1.392.278l6.025-4.02a1.005 1.005 0 0 0-1.115-1.67L7.417 30.64c.71-14.151 12.446-25.446 26.77-25.446 14.78 0 26.805 12.025 26.805 26.805S48.967 58.805 34.187 58.805A26.768 26.768 0 0 1 10.486 44.53a1.005 1.005 0 0 0-1.775.94 28.773 28.773 0 0 0 25.476 15.342C50.075 60.813 63 47.888 63 32S50.075 3.187 34.187 3.187z" fill="#000000" opacity="1" data-original="#000000"></path></g></svg>
    `,
    transactions: `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M4 7h16M4 12h16M4 17h16" />
      </svg>
    `,
    settings: `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 1 1-4 0v-.07a1.65 1.65 0 0 0-1-1.51 1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 1 1 0-4h.07a1.65 1.65 0 0 0 1.51-1 1.65 1.65 0 0 0-.33-1.82l-.06-.06A2 2 0 1 1 7.02 3.3l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 1 1 4 0v.07a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06A2 2 0 1 1 20.7 7.02l-.06.06a1.65 1.65 0 0 0-.33 1.82V9c0 .66.38 1.26 1 1.51.15.06.32.09.49.09H21a2 2 0 1 1 0 4h-.07a1.65 1.65 0 0 0-1.51 1Z"/>
      </svg>
    `,
    referral: `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <circle cx="8" cy="7" r="3"></circle>
        <path d="M2 21v-2a6 6 0 0 1 6-6h0"/>
        <circle cx="17" cy="10" r="3"></circle>
        <path d="M22 21v-2a6 6 0 0 0-6-6h0"/>
      </svg>
    `,

  };

  function renderIcon(spec){
    const fallback = `
      <svg viewBox="0 0 24 24" class="menu-icon" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <rect x="4" y="4" width="16" height="16" rx="3"></rect>
      </svg>`;
    if (!spec) return fallback;

    if (typeof spec === 'string' && spec.trim().startsWith('use:')) {
      const id = spec.replace(/^use:/,'').trim();
      const hash = id.startsWith('#') ? id : ('#' + id);
      return `
        <svg viewBox="0 0 24 24" class="menu-icon" aria-hidden="true">
          <use href="${hash}"></use>
        </svg>`;
    }

    if (typeof spec === 'string' && spec.includes('<svg')) {
      return spec.replace('<svg', '<svg class="menu-icon"');
    }

    return fallback;
  }

  const toggle      = document.getElementById('menuToggle');
  const off         = document.getElementById('offcanvas');
  const offList     = document.getElementById('offList');
  const offContacts = document.getElementById('offContacts');
  const backdrop    = document.getElementById('offBackdrop');
  const closeBtn    = document.getElementById('offClose');
  const nav         = document.querySelector('.nav-menu');
  const contacts    = document.querySelector('.contacts-block');

  if (!toggle || !off || !backdrop || !closeBtn) return;

  const TEXT_TO_KEY = {
    'Dashboard':      'dashboard',
    'Deposit':   'deposit',
    'Withdraw':       'withdraw',
    'Re-invest':      'reinvest',
    'Transactions':   'transactions',
    'Settings':       'settings',
    'Referral':       'referral',

    'Панель':         'dashboard',
    'Пополнить':      'deposit',
    'Вывод':          'withdraw',
    'Реинвест':       'reinvest',
    'Транзакции':     'transactions',
    'Настройки':      'settings',
    'Рефералы':       'referral',
  };

  function toKey(a){
    const data = (a.getAttribute('data-icon') || '').trim();
    if (data) return data.toLowerCase();

    const text = (a.textContent || '').trim();
    return (TEXT_TO_KEY[text] || text || 'dashboard').toLowerCase();
  }

  function buildMenu(){
    if (!offList) return;
    offList.innerHTML = '';

    const links = (nav ? [...nav.querySelectorAll('a')] : []).filter(a => a.href);

    links.forEach((a)=>{
      const li = document.createElement('li');
      li.className = 'mobile-menu-item';

      const link = document.createElement('a');
      const title = (a.textContent || '').trim();
      const href  = a.getAttribute('href') || '#';

      const key = toKey(a);
      const iconHTML = renderIcon(ICONS[key]);

      link.href = href;
      link.innerHTML = `
        ${iconHTML}
        <span class="menu-title">${title}</span>
      `;

      li.appendChild(link);
      offList.appendChild(li);
    });

    if (contacts && offContacts){
      offContacts.innerHTML = '';
      const actionButton = contacts.querySelector('.get-button');
      if(actionButton) {
        const clonedButton = actionButton.cloneNode(true);
        clonedButton.style.width = '100%';
        clonedButton.style.justifyContent = 'center';
        offContacts.appendChild(clonedButton);
      }
    }
  }

  buildMenu();

  function openOff(){
    off.classList.add('open');
    backdrop.classList.add('open');
    off.setAttribute('aria-hidden','false');
    toggle.setAttribute('aria-expanded','true');
    backdrop.removeAttribute('hidden');
    document.body.style.overflow = 'hidden';
  }
  function closeOff(){
    off.classList.remove('open');
    backdrop.classList.remove('open');
    off.setAttribute('aria-hidden','true');
    toggle.setAttribute('aria-expanded','false');
    setTimeout(()=>{
      document.body.style.overflow = '';
      backdrop.setAttribute('hidden','');
    }, 350);
  }

  toggle.addEventListener('click', openOff);
  closeBtn.addEventListener('click', closeOff);
  backdrop.addEventListener('click', closeOff);
  off.addEventListener('click', (e)=>{ if (e.target.closest('a')) closeOff(); });
  window.addEventListener('keydown', e=>{ if (e.key === 'Escape' && off.classList.contains('open')) closeOff(); });

  const THRESHOLD = 50;
  function onScroll(){
    const y = window.scrollY || document.documentElement.scrollTop;
    if (window.innerWidth <= 991){
      if (y > THRESHOLD) toggle.classList.add('is-fixed');
      else toggle.classList.remove('is-fixed');
    } else {
      toggle.classList.remove('is-fixed');
    }
  }
  onScroll();
  window.addEventListener('scroll', onScroll, {passive:true});
  window.addEventListener('resize', onScroll, {passive:true});
})();
</script>
   <style>
    .referral-wrapper { padding: 40px 60px 60px; max-width: 1440px; margin: 0 auto; display: flex; flex-direction: column; gap: 40px; }
    .page-header { margin-bottom: 0; }
    .page-header h1 { font-size: 46px; margin-bottom: 5px; }
    .page-header h1 span { color: var(--sandy-brown); }
    .page-header p { color: var(--text-muted); font-size: 18px; max-width: 600px; margin: 0; }
    .section-card { background: #2c2c2c; border-radius: var(--border-radius); padding: 30px; box-shadow: 0 10px 40px rgba(48, 54, 59, 0.05); border: 1px solid var(--border-color); }
    .section-card h3 { font-size: 24px; margin-bottom: 25px; }
    .referral-main-grid { display: grid; grid-template-columns: 2fr 1fr; gap: 40px; align-items: start; }
    .referral-link-card { background: var(--card-dark-bg); color: var(--text-light); border-radius: var(--border-radius); padding: 30px; position: relative; overflow: hidden; }
    .referral-link-card::before { content: ""; position: absolute; inset: -1px; border-radius: var(--border-radius); background: var(--futuristic-glow); pointer-events: none; z-index: 0; opacity: 0.7; }
    .referral-link-content { position: relative; z-index: 1; }
    .referral-link-content h3 { color: #fff; }
    .ref-link-wrapper { background-color: var(--dark-slate-grey); padding: 10px 15px; border-radius: 12px; display: flex; align-items: center; justify-content: space-between; margin-top: 20px; border: 1px solid var(--dark-grey-lighter); }
    .ref-link { white-space: nowrap; overflow: hidden; text-overflow: ellipsis; font-family: monospace; font-size: 16px; color: gray; }
    .btn-copy { background: var(--sandy-brown); color: var(--dark-slate-grey); border: none; padding: 10px 15px; border-radius: 8px; cursor: pointer; font-weight: 700; margin-left: 15px; transition: background-color 0.3s ease; }
    .btn-copy:hover { background-color: #fff; }
    .stats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 30px; }
    .stat-card { background-color: var(--dark-grey-lighter); padding: 20px; border-radius: 16px; text-align: center; }
    .stat-card .label { font-size: 14px; color: var(--text-muted); margin-bottom: 8px; }
    .stat-card .value { font-family: 'Bowler', sans-serif; font-size: 32px; color: #fff; line-height: 1; }
    .stat-card .value.accent { color: var(--sandy-brown); }
    .inviter-card { padding: 30px;
         background-color: #2c2c2c; 
         border-radius: var(--border-radius); border: 1px solid var(--border-color); display: flex; flex-direction: column; align-items: center; text-align: center; }
    .inviter-card .inviter-label { font-size: 18px; font-weight: 700; color: var(--text-muted); }
    .inviter-card .inviter-name { font-family: 'Bowler', sans-serif; font-size: 36px; color: var(--sandy-brown); margin: 10px 0; line-height: 1; }
    .inviter-card .inviter-icon { font-size: 48px; margin-bottom: 15px; }
    .premium-levels-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
    .premium-card { border-radius: var(--border-radius); border: 1px solid var(--border-color); padding: 25px; display: flex; flex-direction: column; gap: 15px; background: linear-gradient(145deg, var(--card-bg) 0%, var(--background) 100%); }
    .premium-header { display: flex; align-items: center; gap: 15px; }
    .premium-icon { font-size: 32px; }
    .silver .premium-icon { color: #c0c0c0; }
    .gold .premium-icon { color: #ffd700; }
    .platinum .premium-icon { color: #e5e4e2; }
    .premium-title { font-family: 'Bowler', sans-serif; font-size: 22px; margin: 0; }
    .premium-benefits { font-size: 14px; font-weight: 600; color: var(--sandy-brown); }
    .progress-info { display: flex; justify-content: space-between; font-size: 12px; color: var(--text-muted); margin-bottom: 8px; }
    .progress-bar-container { width: 100%; height: 8px; background-color: #e0e1e2; border-radius: 4px; overflow: hidden; }
    .progress-bar { height: 100%; background-color: var(--sandy-brown); border-radius: 4px; animation: progress-shine 2s linear infinite; background-image: linear-gradient(90deg, var(--sandy-brown) 25%, #f7ba7a 50%, var(--sandy-brown) 75%); background-size: 200% 100%; }
    @keyframes progress-shine { 0% { background-position: 200% 0; } 100% { background-position: -200% 0; } }
    .progress-left { font-size: 14px; font-weight: 500; text-align: center; margin-top: 10px; }
    .progress-left span { font-weight: 700; color: var(--sandy-brown); }
    .levels-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
    .level-card { text-align: center; padding: 30px; border-radius: var(--border-radius); 
    background-color: var(--dark-grey-lighter);
            border: 1px solid var(--border-color); transition: all 0.3s ease; }
    .level-card:hover { transform: translateY(-8px); box-shadow: 0 15px 30px rgba(0,0,0,0.08); }
    .level-card .level-title { font-size: 18px; font-weight: 700; color: var(--text-muted); }
    .level-card .level-percent { font-family: 'Bowler', sans-serif; font-size: 64px; color: var(--sandy-brown); margin: 15px 0; line-height: 1; }
    .level-card .level-description { font-size: 14px; color: #7c7f81; }
    .level-card:nth-child(2) .level-percent { opacity: 0.8; }
    .level-card:nth-child(3) .level-percent { opacity: 0.6; }
    .referrals-table-wrapper { overflow-x: auto; }
    .referrals-table { width: 100%; min-width: 600px; border-collapse: collapse; }
    .referrals-table th, .referrals-table td { padding: 15px; text-align: left; border-bottom: 1px solid var(--border-color); }
    .referrals-table thead th { font-family: 'Inter', sans-serif; font-size: 14px; color: var(--text-muted); font-weight: 500; text-transform: uppercase; }
    .referrals-table tbody tr:hover { background-color: var(--background); }
    .referrals-table .username { font-weight: 600; }
    .referrals-table .commission { font-weight: 600; color: var(--status-success); }
    .banners-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }
    .banner-card { display: flex; flex-direction: column; gap: 15px; }
    .banner-preview { border-radius: 16px; overflow: hidden; border: 1px solid var(--border-color); }
    .banner-preview img { width: 100%; display: block; }
    .banner-code-wrapper { position: relative; }
    .banner-code { width: 100%; padding: 12px 15px; padding-right: 90px; border-radius: 12px; background-color: var(--background); border: 1px solid var(--border-color); font-family: monospace; font-size: 12px; color: var(--dark-slate-grey); border: 1px solid #9d7bff;    white-space: normal;
    overflow-wrap: anywhere;
    word-break: break-word;
    line-height: 1.35; }
    .banner-code-wrapper .btn-copy { position: absolute; right: 5px; top: 50%; transform: translateY(-50%); padding: 8px 12px; }
    @media (max-width: 1200px) { .referral-main-grid { grid-template-columns: 1fr; } }
    @media (max-width: 991px) { .referral-wrapper { padding: 30px 40px; } .levels-grid { grid-template-columns: 1fr; } }
    @media (max-width: 767px) { .referral-wrapper { padding: 20px; gap: 30px; } .page-header h1 { font-size: 36px; } .page-header p { font-size: 16px; } .section-card { padding: 20px; } .referral-link-card { padding: 20px; } .stats-grid { grid-template-columns: 1fr; } .stat-card { text-align: left; display: flex; justify-content: space-between; align-items: center; } }
    .ref-link-wrapper{ display:flex; align-items:center; gap:8px; max-width:100%; }
    .ref-link{ flex:1 1 auto; min-width:0; white-space: normal; overflow-wrap:anywhere; word-break: break-word; line-height:1.35; }
    .btn-copy{ flex:0 0 auto; }
.ref-money .usd { font-weight: 700; }
.ref-money .cur { color: var(--text-muted); font-size: 12px; line-height: 1.2; margin-top: 2px; }
.banners-grid-tight {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 18px;
}

.banner-card.nice {
  display: flex;
  flex-direction: column;
  gap: 10px;
  border: 1px solid var(--border-color);
  border-radius: 16px;
  background: var(--background);
  padding: 14px;
}

.banner-head {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.badge {
  display: inline-block;
  padding: 4px 8px;
  font-size: 12px;
  border: 1px solid #e0e1e2;
  border-radius: 8px;
  background: #fff;
  color: #111827;
}
.badge.soft { background: #f8fafc; color: #475569; }

.banner-preview {
  position: relative;
  border: 1px dashed #e0e1e2;
  border-radius: 12px;
  background-image:
    linear-gradient(45deg, #f6f7f9 25%, transparent 25%),
    linear-gradient(-45deg, #f6f7f9 25%, transparent 25%),
    linear-gradient(45deg, transparent 75%, #f6f7f9 75%),
    linear-gradient(-45deg, transparent 75%, #f6f7f9 75%);
  background-size: 16px 16px;
  background-position: 0 0, 0 8px, 8px -8px, -8px 0;
  overflow: hidden;
}
.banner-preview .ar-fallback { width: 100%; } 

.banner-preview img {
  position: absolute;
  inset: 0;
  width: 100%;
  height: 100%;
  object-fit: contain; 
}

.banner-actions {
  display: flex;
  gap: 8px;
  align-items: center;
}
.btn-link.subtle,
.btn-copy.subtle {
  border: 1px solid #e0e1e2;
  background: #fff;
  color: #111827;
  padding: 6px 10px;
  border-radius: 10px;
  font-size: 13px;
  text-decoration: none;
  cursor: pointer;
}
.btn-link.subtle:hover,
.btn-copy.subtle:hover { background: #f8fafc; }

</style>

