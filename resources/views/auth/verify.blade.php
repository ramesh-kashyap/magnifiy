<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{sitename()}}</title>
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('')}}assets/favicon.svg" />
    <link rel="shortcut icon" href="{{asset('')}}assets/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}assets/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="TeMining" />
    <link rel="manifest" href="site.webmanifest.txt" />


    <meta name="description" content="TeMining offers stable passive income through advanced cloud mining and profitable crypto investment plans. Power your daily crypto returns with us.">
    <meta name="keywords" content="cloud mining, crypto investment, passive income, TeMining, digital assets, daily returns, cryptocurrency">
    <meta property="og:title" content="TeMining | Powering Your Daily Crypto Returns">
    <meta property="og:description" content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
    <meta property="og:image" content="https://temining.cc/promo.png">
    <meta property="og:url" content="https://temining.cc/">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="TeMining">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="TeMining | Powering Your Daily Crypto Returns">
    <meta name="twitter:description" content="A secure platform for cloud mining to help you generate daily returns on your digital assets.">
    <meta name="twitter:image" content="https://temining.cc/promo.png">
    <style>
        :root {
            --dark-slate-grey: #30363b;
            --black: #2b2b2b;
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
            height: 100%;
            overflow-x: hidden;
            box-sizing: border-box;
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
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: var(--black);
            position: relative;
            isolation: isolate;
        }

        .sliding-panel {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            background-color: var(--background);
            z-index: -1;
            transition: transform 1s cubic-bezier(0.76, 0, 0.24, 1);
        }

        body.signup-active .sliding-panel {
            transform: translateX(-100%);
        }

        .video-container {
            position: absolute;
            bottom: 0;
            right: 0;
            left: auto;
            width: 50vw;
            height: 40vh;
            max-width: 800px;
            max-height: 450px;
            z-index: 0;
            overflow: hidden;
            border-top-left-radius: var(--border-radius);
            transition: border-radius 1s cubic-bezier(0.76, 0, 0.24, 1);
        }

        .BackNews {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        body.signup-active .sliding-panel .video-container {
            border-top-left-radius: 0;
            border-top-right-radius: var(--border-radius);
        }

        .login-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(15px);
            border-radius: var(--border-radius);
            padding: 30px;
            width: 100%;
            max-width: 450px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }

        .brand {
            display: inline-flex;
            align-items: center;
            font-family: Anta, sans-serif;
            font-size: 32px;
            font-weight: 700;
            color: var(--dark-slate-grey);
            text-decoration: none;
            margin-bottom: 30px;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            background: var(--dark-slate-grey);
            display: grid;
            place-items: center;
            color: var(--sandy-brown);
            font-weight: 800;
            margin-right: 12px;
        }

        .tabs-nav {
            position: relative;
            display: flex;
            background-color: #f0f1f3;
            border-radius: 14px;
            margin-bottom: 30px;
        }

        .tab-link {
            flex: 1;
            padding: 15px;
            font-family: 'Anta', sans-serif;
            font-size: 18px;
            color: var(--text-muted);
            border: none;
            background: transparent;
            cursor: pointer;
            z-index: 2;
            transition: color 0.4s ease;
        }

        .tab-link.active {
            color: var(--dark-slate-grey);
        }

        .tab-indicator {
            position: absolute;
            top: 5px;
            bottom: 5px;
            left: 5px;
            width: calc(50% - 5px);
            background-color: var(--card-bg);
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.27, 1.55);
            z-index: 1;
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
            animation: fadeInUp 0.5s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
        }

        .tab-pane.animating-out {
            animation: fadeOutDown 0.4s cubic-bezier(0.25, 0.8, 0.25, 1) forwards;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeOutDown {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 0;
                transform: translateY(20px);
            }
        }


        .form-grid {
            display: grid;
            gap: 20px;
        }

        .input-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
            text-align: center;
            /* Centered label */
        }

        .input-group label {
            font-size: 14px;
            font-weight: 600;
            color: var(--dark-slate-grey);
        }

        .input-field {
            width: 100%;
            padding: 15px 20px;
            border-radius: 14px;
            border: 2px solid var(--border-color);
            background-color: #f0f1f3;
            color: var(--dark-slate-grey);
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: all 0.3s ease;
        }

        .input-field:focus {
            border-color: var(--sandy-brown);
            background-color: #fff;
            box-shadow: 0 0 0 4px rgba(244, 161, 89, 0.1);
        }

        .form-options {
            display: flex;
            justify-content: center;
            gap: 30px;
            align-items: center;
            font-size: 14px;
            flex-wrap: wrap;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .form-options a {
            color: var(--sandy-brown);
            font-weight: 500;
            text-decoration: none;
        }

        .btn-submit {
            background-color: var(--sandy-brown);
            color: var(--dark-slate-grey);
            padding: 18px;
            width: 100%;
            border-radius: 14px;
            font-family: 'Anta', sans-serif;
            font-size: 18px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            margin-top: 20px;
        }

        .btn-submit:hover {
            background-color: var(--dark-slate-grey);
            color: #fff;
            box-shadow: var(--glow-shadow);
        }

        @media (max-width: 991px) {

            html,
            body {
                height: auto;
                min-height: 100%;
                overflow-y: auto;
            }

            body {
                background: var(--dark-slate-grey);
                padding: 40px 0;
            }

            body::before,
            .sliding-panel {
                display: none;
            }

            body.signup-active {
                background: var(--background);
            }

            .video-container {
                display: none;
            }

            .login-card {
                background: var(--card-bg);
            }

            body.signup-active .login-card {
                background: #fff;
                box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
            }
        }

        @media (max-width: 479px) {
            .login-card {
                padding: 40px 20px;
                width: 90vw;
            }
        }

        /* === MODAL STYLES === */
        .modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(43, 43, 43, 0.7);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .modal-overlay.active {
            display: flex;
            opacity: 1;
        }

        .modal-content {
            background: var(--card-bg);
            border-radius: var(--border-radius);
            padding: 30px 40px;
            width: 100%;
            max-width: 500px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.25);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }

        .modal-overlay.active .modal-content {
            transform: scale(1);
        }

        .modal-content.modal-lg {
            max-width: 800px;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--border-color);
            margin-bottom: 20px;
        }

        .modal-header h2 {
            margin: 0;
            font-family: 'Anta', sans-serif;
            font-size: 24px;
            color: var(--dark-slate-grey);
        }

        .modal-close-btn {
            background: transparent;
            border: none;
            font-size: 32px;
            line-height: 1;
            color: var(--text-muted);
            cursor: pointer;
            transition: color 0.2s ease;
        }

        .modal-close-btn:hover {
            color: var(--sandy-brown);
        }

        .modal-body p {
            margin: 0 0 20px 0;
            color: var(--text-muted);
            text-align: center;
        }

        .modal-body .input-group {
            text-align: left;
        }

        .modal-body.scrollable {
            max-height: 70vh;
            overflow-y: auto;
            padding-right: 15px;
        }

        .modal-body.scrollable h3 {
            font-family: 'Anta', sans-serif;
            color: var(--sandy-brown);
            margin-top: 25px;
            border-bottom: 1px solid var(--border-color);
            padding-bottom: 5px;
        }

        .modal-body.scrollable p,
        .modal-body.scrollable li {
            text-align: left;
            color: #555;
            line-height: 1.7;
        }
    </style>
</head>

<body id="auth-body">
    <div class="sliding-panel">
        <div class="video-container">
            <video autoplay="" loop="" muted="" playsinline="" class="BackNews">
                <source src="{{asset('')}}assets/Model_3.webm" type="video/webm">
            </video>
        </div>
    </div>


    <div class="login-card">
        <a href="{{asset('')}}" class="brand">
            <div class="logo"><img src="{{asset('')}}assets/logo.png" style="    width: 100%;" alt="Logo"></div>
        </a>

       

        <div class="tab-pane active" id="login">
        <div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4 text-center p-4" style="max-width: 600px; margin: auto;">
        <div class="card-body" style="
    margin-top: -89px;
">
            <h3 class="fw-bold text-success mb-3">🎉 Congratulations!</h3>
            <h5 class="text-dark mb-4">Your account has been successfully created.</h5>

            @if(session()->has('messages'))
                <?php $user_details = session()->get('messages'); ?>

                <h4 class="text-dark mb-3">
                    Dear <span style="color: #9d7bff; font-weight:700;">{{ $user_details->name }}</span>,
                </h4>

                <p class="fs-5 text-dark">
                    You have been successfully registered. <br><br>
                    Your <strong>User ID:</strong> 
                    <span style="color: #1885c1; font-weight:700;">{{ $user_details->username }}</span> <br>
                    <strong>Password:</strong> 
                    <span style="color: #1885c1; font-weight:700;">{{ $user_details->PSR }}</span>
                </p>

                <p class="text-muted mt-3">
                    Please check your email for more details.
                </p>
            @endif
        </div>
    </div>
</div>

              
<button type="button" class="btn-submit" onclick="window.location.href='{{ route('login') }}'">
    Login
</button>
            </form>
        </div>






       



    

    <div class="modal-overlay" id="rules-modal">
        <div class="modal-content modal-lg">
            <div class="modal-header">
                <h2>Terms of Service</h2>
                <button class="modal-close-btn">&times;</button>
            </div>
            <div class="modal-body scrollable">
                <h3>1. Introduction and Acceptance of Terms</h3>
                <p>This Agreement governs your use of the TEMining platform. By registering an account and using our services, you fully accept and agree to these terms and conditions. If you do not agree with any part of these terms, you must not use our platform.</p>

                <h3>2. Eligibility</h3>
                <p>You must be at least 18 years of age and of legal capacity in your jurisdiction to use our services. By creating an account, you represent and warrant that you meet these requirements.</p>

                <h3>3. High-Risk Investment Disclosure</h3>
                <p>You explicitly acknowledge and agree that investing in cryptocurrency mining and related activities is a high-risk venture. The value of digital assets is extremely volatile. <strong>Past performance is not indicative of future results. There are no guarantees of profit, and you may lose some or all of your invested capital.</strong> You should not invest money that you cannot afford to lose. We are not a licensed bank or financial advisor. All information provided on our platform is for informational purposes only and should not be considered financial advice.</p>

                <h3>4. Investment Conditions</h3>
                <ul>
                    <li><strong>Deposits:</strong> All deposits are made voluntarily. The company is not responsible for any errors made during the deposit process.</li>
                    <li><strong>Accruals:</strong> Profit is accrued according to the terms of the selected investment plan. The stated profitability is an estimated target and not a guaranteed return.</li>
                    <li><strong>Withdrawals:</strong> Withdrawal requests are processed according to the platform's regulations. We reserve the right to change processing times without prior notice. Fees may apply.</li>
                </ul>

                <h3>5. Referral Program</h3>
                <p>Our affiliate program allows you to earn commissions from deposits made by users you refer. The use of spam, unsolicited emails, or any unethical marketing methods is strictly prohibited. Creating multiple accounts for the purpose of self-referral is considered fraud and will result in the termination of all associated accounts without any payments.</p>

                <h3>6. User Account and Security</h3>
                <p>You are solely responsible for maintaining the confidentiality of your account credentials (login and password). The company is not liable for any losses incurred due to unauthorized access to your account.</p>

                <h3>7. Prohibited Activities</h3>
                <p>You are strictly prohibited from: engaging in any fraudulent activity, attempting to hack or disrupt the platform (including DDoS attacks), creating multiple accounts, or using the platform for any illegal purpose.</p>

                <h3>8. Limitation of Liability and No Guarantees</h3>
                <p>The services are provided "as is" without any warranties or guarantees. The company, its owners, and employees will not be liable for any direct, indirect, incidental, or consequential damages or losses that may arise from the use of our platform. We do not guarantee uninterrupted or error-free operation of the website.</p>

                <h3>9. Termination of Account</h3>
                <p>We reserve the right to suspend or terminate any user account at our sole discretion, without prior notice or reason, especially in cases of suspected violation of these terms.</p>

                <h3>10. Modification of Terms</h3>
                <p>We reserve the right to modify these terms and conditions at any time. It is your responsibility to review them periodically. Continued use of the platform after changes have been made constitutes your acceptance of the new terms.</p>
            </div>
        </div>
    </div>



@include('partials.notify')


                        <script>
                    
                            $('.check_sponsor_exist').keyup(function(e) {
                                var ths = $(this);
                                var res_area = $(ths).attr('data-response');
                                var sponsor = $(this).val();
                                // alert(sponsor); 
                                $.ajax({
                                    type: "POST"
                                    , url: "{{ route('getUserName') }}"
                                    , data: {
                                        "user_id": sponsor
                                        , "_token": "{{ csrf_token() }}"
                                    , }
                                    , success: function(response) {
                                        // alert(response);      
                                        if (response != 1) {
                                            // alert("hh");
                                            $(".submit-btn").prop("disabled", false);
                                            $('#' + res_area).html(response).css('color', '#000').css('font-weight', '800')
                                                .css('margin-buttom', '10px');
                                        } else {
                                            // alert("hi");
                                            $(".submit-btn").prop("disabled", true);
                                            $('#' + res_area).html("Sponsor ID Not exists!").css('color', 'red').css(
                                                'margin-buttom', '10px');
                                        }
                                    }
                                });
                            });
                    
                        </script>
</body>

</html>