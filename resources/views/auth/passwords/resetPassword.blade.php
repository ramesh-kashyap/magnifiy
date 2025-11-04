



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - {{sitename()}}</title>
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('')}}assets/favicon.svg" />
    <link rel="shortcut icon" href="{{asset('')}}assets/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('')}}assets/apple-touch-icon.png" />




    <style>
        :root {
            --dark-slate-grey: #30363b;
            --black: #2b2b2b;
            --dark-grey-lighter: #3d4348;
            --sandy-brown: #f4a159;
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
        <a href="{{route('Index')}}" class="brand">
            <div class="logo"><img src="{{asset('')}}assets/logo.png" alt="Logo"></div>
        </a>

     
        <div class="tab-pane active" id="login">
            <h1>Reset your password </h1>
            <form class="form-grid" method="post" action="{{route('submitResetPassword')}}">
               {{ csrf_field() }}

                            {{-- Error Message --}}
                            @if ($errors->any())
                            <div style="background: #ffe6e6; color: #cc0000; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                                @foreach ($errors->all() as $error)
                                <div>⚠️ {{ $error }}</div>
                                @endforeach
                            </div>
                            @endif

                            {{-- Success Message --}}
                            @if (session('status'))
                            <div style="background: #e6ffed; color: #008000; padding: 10px; border-radius: 5px; margin-bottom: 15px;">
                                ✅ {{ session('status') }}
                            </div>
                            @endif
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="hidden" name="email" value="{{ $email }}">
                <div class="input-group">
                    <label for="username">Password</label>
                    <input type="password" class="input-field" name="password" value="" required autocomplete="" placeholder="Enter new password" required>

                </div>
                <div class="input-group">
                    <label for="password">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="input-field" value="" placeholder="Confirm Password" required autocomplete="password" required>
                </div>
                <div class="form-options">
                    <label class="remember-me">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="javascript:void(0);" data-modal-target="forgot-modal">Forgot Password?</a>

                </div>
                <button type="submit" class="btn-submit">Reset</button>
            </form>
        </div>


    </div>






</body>

</html>