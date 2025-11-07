<style>
    /* ===================================================================
           SETTINGS PAGE LAYOUT
           =================================================================== */
    .settings-wrapper {
        padding: 40px 60px 60px;
        max-width: 1440px;
        margin: 0 auto;
    }

    .page-header {
        margin-bottom: 40px;
    }

    .page-header h1 {
        font-size: 46px;
        margin-bottom: 5px;
    }

    .page-header h1 span {
        color: var(--sandy-brown);
    }

    .page-header p {
        color: var(--text-muted);
        font-size: 18px;
        max-width: 600px;
        margin: 0;
    }

    .settings-layout {
        display: grid;
        grid-template-columns: 1fr 420px;
        gap: 40px;
        align-items: start;
    }

    .main-content {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .sidebar {
        position: sticky;
        top: 40px;
    }

    .section-card {
        background: #2c2c2c;
        border-radius: var(--border-radius);
        padding: 30px;
        box-shadow: 0 10px 40px rgba(48, 54, 59, 0.05);
        border: 1px solid var(--border-color);
    }

    .section-card h3 {
        font-size: 24px;
        margin-bottom: 25px;
    }

    .card-footer {
        margin-top: 30px;
        border-top: 1px solid var(--border-color);
        padding-top: 20px;
        display: flex;
        justify-content: flex-end;
    }

    /* ===================================================================
           FORMS & INPUTS
           =================================================================== */
    .form-grid {
        display: grid;
        gap: 20px;
    }

    .input-group {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input-group label {
        font-size: 14px;
        font-weight: 600;
        color: white;
    }

    .input-field {
        width: 100%;
        padding: 15px 20px;
        border-radius: 14px;
        border: 1px solid #545454;
        background-color: #2c2c2c;
        color: #a2a5ad;
        font-size: 16px;
        font-family: 'Inter', sans-serif;
        outline: none;
        transition: all 0.3s ease;
    }

    .input-field:focus {
        border-color: var(--sandy-brown);
        background-color: #30363b;
        box-shadow: 0 0 0 4px rgba(244, 161, 89, 0.1);
    }

    .input-field[readonly] {
        background-color: var(--border-color);
        color: var(--text-muted);
        cursor: not-allowed;
    }

    .btn-primary {
        background-color: var(--sandy-brown);
        color: #fff;
        padding: 15px 30px;
        border-radius: 14px;
        font-family: 'Bowler', sans-serif;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
    }

    .btn-primary:hover {
        background-color: var(--dark-slate-grey);
        color: #fff;
        box-shadow: var(--glow-shadow);
    }

    .wallet-list {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .wallet-item {
        display: flex;
        align-items: center;
        gap: 20px;
    }

    .wallet-icon {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
    }

    .wallet-input-group {
        flex-grow: 1;
    }

    .wallet-input-group .wallet-label {
        font-size: 16px;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
        color: var(--sandy-brown);
    }

    .security-card {
        background-color: var(--card-dark-bg);
        color: var(--text-light);
        padding: 30px;
        border-radius: var(--border-radius);
        position: relative;
        overflow: hidden;
    }

    .security-card::before {
        content: "";
        position: absolute;
        inset: -1px;
        border-radius: var(--border-radius);
        background: var(--futuristic-glow);
        pointer-events: none;
        z-index: 0;
        opacity: 0.7;
    }

    .security-content {
        position: relative;
        z-index: 1;
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    .security-card h3 {
        color: #fff;
    }

    .security-feature {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 15px;
        padding: 20px;
        background: var(--dark-grey-lighter);
        border-radius: 16px;
    }

    .security-feature-icon {
        font-size: 48px;
        line-height: 1;
    }

    .security-feature-title {
        font-family: 'Bowler', sans-serif;
        font-size: 20px;
        color: #fff;
        margin: 0;
    }

    .security-feature-desc {
        font-size: 14px;
        color: var(--text-muted);
        margin: 0;
        max-width: 300px;
    }

    .btn-security {
        background-color: var(--sandy-brown);
        color: #fff;
        padding: 12px 25px;
        border-radius: 12px;
        font-family: 'Bowler', sans-serif;
        font-size: 16px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
    }

    .btn-security:hover {
        background-color: #fff;
        color: var(--dark-slate-grey);
    }

    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 12px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 600;
    }

    .status-badge.enabled {
        background-color: rgba(40, 167, 69, 0.1);
        color: var(--status-success);
    }

    .status-badge.enabled::before {
        content: '';
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: var(--status-success);
    }

    .status-badge.disabled {
        background-color: rgba(220, 53, 69, 0.1);
        color: var(--status-danger);
    }

    .status-badge.disabled::before {
        content: '';
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background-color: var(--status-danger);
    }

    /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
    @media (max-width: 1200px) {
        .settings-layout {
            grid-template-columns: 1fr;
        }

        .sidebar {
            position: static;
        }
    }

    @media (max-width: 991px) {
        .settings-wrapper {
            padding: 30px 40px;
        }
    }

    @media (max-width: 767px) {
        .settings-wrapper {
            padding: 20px;
        }

        .page-header h1 {
            font-size: 36px;
        }

        .page-header p {
            font-size: 16px;
        }

        .settings-layout {
            gap: 30px;
        }

        .section-card {
            padding: 20px;
        }

        .wallet-item {
            flex-direction: column;
            align-items: flex-start;
        }
    }

    /* STATUS BADGE (COMPIT style) */
    .status-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 6px 10px;
        border-radius: 999px;
        font-weight: 700;
        font-size: 12px;
        letter-spacing: .3px;
        border: 1px solid rgba(48, 54, 59, .18);
        background: #fff;
        color: var(--dark-slate-grey);
        box-shadow: 0 8px 24px rgba(48, 54, 59, .06);
    }

    .status-badge .text {
        line-height: 1;
    }

    .status-badge .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, .04) inset;
    }

    .status-badge.enabled {
        border-color: rgba(34, 197, 94, .32);
        background: linear-gradient(180deg, #e8fdf3, #d8faeb);
        color: #146c43;
        box-shadow: 0 8px 24px rgba(16, 185, 129, .12);
    }

    .status-badge.enabled .dot {
        background: #22c55e;
    }

    .status-badge.disabled {
        border-color: rgba(239, 68, 68, .28);
        background: linear-gradient(180deg, #fff5f5, #ffecec);
        color: #7f1d1d;
        box-shadow: 0 8px 24px rgba(239, 68, 68, .10);
    }

    .status-badge.disabled .dot {
        background: #ef4444;
    }

    .btn-security {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 12px;
        border: 2px solid var(--dark-slate-grey);
        padding: .6rem 1rem;
        border-radius: 12px;
        background: var(--dark-slate-grey);
        color: #fff;
        font-weight: 800;
        text-decoration: none;
        transition: .15s ease;
    }

    .btn-security:hover {
        background: #fff;
        color: var(--dark-slate-grey);
    }

    .modal-overlay {
        position: fixed;
        inset: 0;
        background: rgba(11, 15, 26, 0.8);
        backdrop-filter: blur(10px);
        z-index: 999;
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    .modal-overlay.visible {
        opacity: 1;
        pointer-events: auto;
    }

    .modal-content {
        /* Применяем стиль темной карточки */
        background-color: var(--card-dark-bg);
        color: var(--text-light);
        padding: 30px;
        border-radius: var(--border-radius);
        width: 90%;
        max-width: 500px;
        border: 1px solid var(--dark-grey-lighter);
        transform: scale(0.95);
        transition: transform 0.3s ease;
    }

    .modal-overlay.visible .modal-content {
        transform: scale(1);
    }

    .modal-content h3 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .modal-content p {
        color: var(--text-muted);
        margin-bottom: 25px;
        font-size: 16px;
    }

    .modal-content p strong {
        color: var(--sandy-brown);
        font-weight: 600;
    }

    /* Используем твой класс .input-group для отступов */
    .modal-content .input-group {
        gap: 10px;
    }

    .modal-buttons {
        margin-top: 30px;
        display: flex;
        justify-content: flex-end;
        gap: 15px;
    }

    /* Кнопка "Отмена" */
    .btn-cancel {
        background-color: #30363b;
        color: #fff;
        padding: 18px;
        text-align: center;
        border-radius: 14px;
        font-family: 'Bowler', sans-serif;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        width: 100%;
    }

    .btn-ca {
        background-color: #914ef0ff;
        color: #fff;
        padding: 18px;
        text-align: center;
        border-radius: 14px;
        font-family: 'Bowler', sans-serif;
        font-size: 18px;
        cursor: pointer;
        transition: all 0.3s ease;
        border: none;
        width: 100%;
    }

    .btn-cancel:hover {
        background-color: #454c52;
        color: #fff;
    }
</style>

<main class="settings-wrapper">
    <div class="page-header">
        <h1>Account <span>Settings</span></h1>
        <p>Manage your account details, security settings, and payment
            information.</p>
    </div>

    <div class="settings-layout">
        <div class="main-content">
            <section class="section-card">
                <h3>Personal Profile</h3>
                <form method="post" action="{{route('user.update-profile')}}"
                    class="form-grid">
                    @csrf


                    <div class="input-group">
                        <label for="field-old_password">Username
                        </label>
                        <input type="text" id=""
                            name="username" value="{{$profile_data->username}}" class="input-field"
                            placeholder="" readonly required>
                    </div>
                    <div class="input-group">
                        <label for="field-new_password">Name
                        </label>
                        <input type="text" id="field-new_password"
                            name="name" value="{{$profile_data->name}}" class="input-field"
                            placeholder="Enter your name" required>
                    </div>
                    <div class="input-group">
                        <label for="">Email
                        </label>
                        <input type="text"
                            id="" value="{{$profile_data->email}}"
                            name="email"
                            class="input-field" placeholder="Enter your email"
                            required>
                    </div>
                    <div class="input-group">
                        <label for="">Country
                        </label>
                        <input type="text"
                            id="" value="{{$profile_data->country}}"
                            name="country"
                            class="input-field" placeholder="Enter your country"
                            required>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="save_password"
                            value="1" class="btn-primary"style="font-family: Anta;">Update
                        </button>
                    </div>
                </form>
            </section>
            @include('partials.notify')

            <section class="section-card">
                <h3>Payment Details</h3>
                <form id="wallet-form" action="{{route('user.wallet_change')}}" method="post">
                    @csrf
                    <div class="wallet-list">
                        <div class="wallet-item">
                            <img src="{{asset('')}}assets/icons/usdt_trc20.png" alt="USDT_TRC20_USDT" class="wallet-icon">
                            <div class="wallet-input-group">
                                <label class="wallet-label">USDT_TRC20, USDT</label>
                                <input type="text" id="wallet-usdt_trc20_usdt" name="usdtTrc20" value="" class="input-field" required placeholder="Your Wallet Address">
                            </div>
                        </div>

                        <div class="wallet-item">
                            <img src="{{asset('')}}assets/icons/usdt_bep20.png" alt="USDT_BEP20_USDT" class="wallet-icon">
                            <div class="wallet-input-group">
                                <label class="wallet-label">USDT_BEP20, USDT</label>
                                <input type="text" id="wallet-usdt_bep20_usdt" name="usdtBep20" value="" required class="input-field" placeholder="Your Wallet Address">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <input type="hidden" id="userEmail" value="{{ Auth::user()->email }}">
                        <button type="button" id="send-otp-btn" class="btn-primary"style="font-family: Anta;">Confirm</button>
                        <div id="otp-status" style="margin-top: 10px;margin-right: 10px; color: green; font-weight: bold; display: none;">
                            ✅ Verified!
                        </div>
                        <button type="submit" id="save-wallet-btn" class="btn-primary" style="display:none;font-family: Anta;">Save Wallets</button>
                    </div>
                </form>

                <!-- OTP Modal -->
                <div id="wallet-modal" class="modal-overlay">
                    <div class="modal-content">
                        <form id="otp-verify-form" action="{{route('user.verify-otp')}}" method="POST">
                            @csrf

                            <h3>Verify OTP</h3>
                            <p>Please enter the OTP sent to your registered email.</p>
                            <div class="input-group">
                                <label for="otp-input" class="input-group-label">Verification Code</label>
                                <input type="hidden" id="userEmail" value="{{ Auth::user()->email }}">

                                <input id="otp-input" class="input-field" name="code" type="text" placeholder="Enter verification code" required>
                            </div>
                            <div class="modal-buttons">
                                <button type="button" id="modal-close-btn" class="btn-cancel"style="font-family: Anta;">Cancel</button>
                                <button type="submit" class="btn-ca"style="font-family: Anta;">Verify</button>
                            </div>
                        </form>
                    </div>
                </div>

            </section>
      
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                const modal = document.getElementById('wallet-modal');
                const closeBtn = document.getElementById('modal-close-btn');
                const sendOtpBtn = document.getElementById('send-otp-btn');
                const saveWalletBtn = document.getElementById('save-wallet-btn');
                const otpStatus = $('#otp-status');
                const otpForm = document.getElementById('otp-verify-form');
                const otpInput = document.getElementById('otp-input');

                sendOtpBtn.addEventListener('click', function() {
                    const email = document.getElementById('userEmail').value;

                    // console.log("Sending OTP to:", email); // Debugging

                    $.ajax({
                        url: "{{ route('user.send-otp') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            email: email
                        },
                        beforeSend: function() {
                            sendOtpBtn.textContent = "Sending...";
                            sendOtpBtn.disabled = true;
                        },
                        success: function(response) {

                            // alert(response.message || "OTP has been sent to your registered email.");
                            modal.classList.add('visible');
                        },
                        error: function(xhr) {
                            console.error("Error sending OTP:", xhr.responseText);
                            alert("Failed to send OTP. Check console for details.");
                        },
                        complete: function() {
                            sendOtpBtn.textContent = "Send OTP";
                            sendOtpBtn.disabled = false;
                        }
                    });
                });

                closeBtn.addEventListener('click', function() {
                    modal.classList.remove('visible');
                });

                window.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.remove('visible');
                    }
                });

                otpForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const code = otpInput.value.trim();
                    const email = document.getElementById('userEmail').value;

                    if (!code) {
                        alert("Please enter OTP!");
                        return;
                    }

                    // console.log("Verifying OTP:", code); // Debugging

                    $.ajax({
                        url: "{{ route('user.verify-otp') }}",
                        method: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            email: email,
                            code: code
                        },
                        success: function(response) {

                            // console.log("OTP verify response:", response);

                            if (response.status === 'success') {
                                otpStatus.show();
                                alert("✅ OTP Verified Successfully!");
                                modal.classList.remove('visible');

                                
                                sendOtpBtn.style.display = 'none';
                                saveWalletBtn.style.display = 'inline-block';
                            } else {
                                alert("❌ Invalid OTP, please try again.");
                            }
                        },
                        error: function(xhr) {
                            console.error("Error verifying OTP:", xhr.responseText);
                            alert("Error verifying OTP.");
                        }
                    });
                });
            </script>



            <!-- <script>
                const modal = document.getElementById('wallet-modal');
                const closeBtn = document.getElementById('modal-close-btn');
                const sendOtpBtn = document.getElementById('send-otp-btn');
                const saveWalletBtn = document.getElementById('save-wallet-btn');
                const otpForm = document.getElementById('otp-verify-form');

                // 🟢 Open modal on Send OTP
                sendOtpBtn.addEventListener('click', function() {
                    // Yahan backend call karo OTP bhejne ke liye (AJAX optional)
                    alert("OTP has been sent to your registered email.");
                    modal.classList.add('visible');
                });

                // 🟢 Close modal
                closeBtn.addEventListener('click', function() {
                    modal.classList.remove('visible');
                });

                // 🟢 Click outside to close
                window.addEventListener('click', function(e) {
                    if (e.target === modal) {
                        modal.classList.remove('visible');
                    }
                });

                // 🟢 OTP Verify Form Submit
                otpForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    const code = document.getElementById('otp-input').value.trim();
                    if (!code) {
                        alert("Please enter OTP!");
                        return;
                    }

                    // Simulate OTP verification success
                    // TODO: Replace this with real backend call for verification
                    alert("OTP Verified Successfully!");
                    modal.classList.remove('visible');

                    // Hide Send OTP button, show Save Wallet button
                    sendOtpBtn.style.display = 'none';
                    saveWalletBtn.style.display = 'inline-block';
                });
            </script> -->
        </div>

        <div class="sidebar">
            <div class="security-card">
                <div class="security-content">
                    <h3>Change Password</h3>

                    <form action="{{route('user.edit-password')}}"
                        method="post" class="form-grid">
                        @csrf

                        <div class="input-group">
                            <label for="field-old_password">Old
                                Password</label>
                            <input type="password" id="field-old_password"
                                name="old_password" class="input-field" style="background-color: #3d4348;"
                                placeholder="Enter old password" required>
                        </div>
                        <div class="input-group">
                            <label for="field-new_password">New
                                Password</label>
                            <input type="password" id="field-new_password"
                                name="password" class="input-field" style="background-color: #3d4348;"
                                placeholder="Enter new password" required>
                        </div>
                        <div class="input-group">
                            <label for="field-repeat_new_password">Repeat
                                the New Password</label>
                            <input type="password"
                                id="field-repeat_new_password" style="background-color: #3d4348;"
                                name="password_confirmation"
                                class="input-field" placeholder="Enter confirm password"
                                required>
                        </div>

                        <div class="card-footer">
                            <button type="submit" name="save_password"
                                value="1" class="btn-primary"style="font-family: Anta;">Password Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</main>
</body>

</html>