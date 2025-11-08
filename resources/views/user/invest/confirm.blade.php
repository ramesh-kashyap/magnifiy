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
        border: 2px solid #3d4348;
        background-color: #30363b;
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
</style>

<main class="settings-wrapper">
    <div class="page-header">
        <h1> <span>QR Code</span></h1>
       
    </div>
<p id="copyMessage" style="color:green; display:none; margin-top:5px;">Address copied!</p>

    <div class="settings-layout">
        <div class="main-content">
          
            @include('partials.notify')
    <input type="hidden" name="amount" >
    <input type="hidden" name="payment_type" value="">
        <input type="hidden" name="address" value="">

@php
    $wallet = $address ?? session('address');  
    $amount = $amount ?? session('amount') ?? 25;
    $qrData = "usdt:{$wallet}?amount={$amount}";
@endphp
            <section class="section-card">
                <h3>QR Code</h3>
              
                    <div
                        class="wallet-list">
                    
                        <div class="wallet-item">
                         
                            <div class="wallet-input-group">

  <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data={{ urlencode($qrData) }}" 
             alt="QR Code" 
             style="max-width: 250px; height: 250px; margin: 20px auto; border-radius: 8px; display:block;">

                            </div>
                        </div>
                        <div class="wallet-item">
                         
                            <div class="wallet-input-group">
                               
                             <div style="background:#1e1e2f; color:#fff; padding:12px 15px; border-radius:8px; 
            display:flex; align-items:center; justify-content:space-between; 
            border:1px solid #333; max-width:500px; margin:auto;">

    <span id="walletAddressText" style="word-break: break-all;">
        {{$wallet}}
    </span>

    <i class="fas fa-copy" id="copyWalletBtn"
       title="Copy Address"
       style="cursor:pointer; color:#00ffcc; font-size:18px; margin-left:10px;">
    </i>
</div>

<script>
document.getElementById('copyWalletBtn').addEventListener('click', function() {
    const text = document.getElementById('walletAddressText').innerText.trim();
    navigator.clipboard.writeText(text);

    // Show visual feedback on button
    this.style.color = '#0f0';
    this.title = "Copied!";

    // Show message
    const msg = document.getElementById('copyMessage');
    msg.style.display = 'block';
    msg.innerText = 'Address copied successfully!';

    // Hide again after 1.5 sec
    setTimeout(() => {
        this.style.color = '#00ffcc';
        this.title = "Copy Address";
        msg.style.display = 'none';
    }, 1500);
});
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

                            </div>
                        </div>
                     
                    </div>
                 
            </section>
        </div>

      

    </div>
</main>
</body>

</html>