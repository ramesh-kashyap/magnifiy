 <style>
      
        /* ===================================================================
            INVESTMENT PAGE WRAPPER & LAYOUT
            =================================================================== */
        .investment-wrapper {
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

        .investment-layout {
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
            display: flex;
            flex-direction: column;
            gap: 30px;
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
        
        /* ===================================================================
            1. TARIFF PLANS
            =================================================================== */
        .plans-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
        }
        .plan-card {
            /* background-color: var(--background); */
    background-color: var(--dark-grey-lighter);
            border: 2px solid var(--border-color);
            border-radius: 16px;
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .plan-card:hover {
            transform: translateY(-5px);
            border-color: var(--sandy-brown);
            box-shadow: 0 8px 25px rgba(109, 83, 204, 0.15);
        }
        .plan-card.selected {
            border-color: var(--sandy-brown);
            /* background-color: #fff; */
    background-color: var(--dark-grey-lighter);
    box-shadow: 0 18px 48px rgba(0, 0, 0, .18), 0 0 0 2px 
 color-mix(in oklab, var(--cp-accent), transparent 60%), 0 0 0 6px 
 color-mix(in oklab, var(--cp-accent), transparent 88%);
        }
        .plan-card .plan-percent {
            font-family: 'Bowler', sans-serif;
            font-size: 42px;
            color: var(--sandy-brown);
            line-height: 1;
        }
        .plan-card .plan-term {
            font-size: 18px;
            font-weight: 600;
            color: var(--text-muted);
            margin: 8px 0;
        }
        .plan-card .plan-details {
            font-size: 14px;
            color: var(--text-muted);
        }
        .plan-limits {
             font-size: 12px;
             color: var(--text-muted);
             margin-top: 10px;
             height: 1.2em;
        }

        /* ===================================================================
            2. PAYMENT SYSTEM
            =================================================================== */
        .crypto-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 15px;
        }
        .crypto-card {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            padding: 20px 10px;
            border: 2px solid var(--border-color);
            background: linear-gradient(252deg, #0c0c0c 0%, #353434 21%, #2f2e2e 39%, #1a1a1a 100%);

            border-radius: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .crypto-card:hover {
            transform: translateY(-5px);
            border-color: var(--sandy-brown);
        }
        .crypto-card.selected {
            border-color: var(--sandy-brown);
            background-color: #fff;
                box-shadow: 0 18px 48px rgba(0, 0, 0, .18), 0 0 0 2px 
 color-mix(in oklab, var(--cp-accent), transparent 60%), 0 0 0 6px 
 color-mix(in oklab, var(--cp-accent), transparent 88%);
        }
        .crypto-card img {
            width: 48px;
            height: 48px;
        }
        .crypto-card .crypto-name {
            font-weight: 600;
            font-size: 16px;
                color: var(--sandy-brown);
        }

        /* ===================================================================
            3. SIDEBAR: CALCULATOR & SUMMARY
            =================================================================== */
        .calculator-card {
            background-color: var(--card-dark-bg);
            color: var(--text-light);
            padding: 30px;
            border-radius: var(--border-radius);
            position: relative;
            overflow: hidden;
        }
        .calculator-card::before {
            content: "";
            position: absolute;
            inset: -1px;
            border-radius: var(--border-radius);
            background: var(--futuristic-glow);
            pointer-events: none;
            z-index: 0;
            opacity: 0.7;
        }
        .calculator-content {
            position: relative;
            z-index: 1;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .calculator-card h3 {
            color: #fff;
            margin-bottom: 0;
        }
        .input-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .input-group label {
            font-size: 14px;
            color: var(--text-muted);
            font-weight: 500;
        }
        .amount-input-wrapper {
            position: relative;
        }
        .amount-input {
            width: 100%;
            padding: 15px 20px 15px 80px;
            border-radius: 14px;
            border: 2px solid var(--dark-grey-lighter);
            background-color: #30363b;
            color: #fff;
            font-size: 20px;
            font-weight: 600;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .amount-input:focus {
            border-color: var(--sandy-brown);
        }
        .amount-input-currency {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--sandy-brown);
            font-weight: 700;
            font-size: 18px;
        }
        .input-limits-info {
            font-size: 12px;
            text-align: center;
            min-height: 1.2em;
            color: var(--text-muted);
        }


        .summary-block {
            border-top: 1px solid var(--dark-grey-lighter);
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .summary-row .label {
            color: var(--text-muted);
        }
        .summary-row .value {
            font-size: 18px;
            font-weight: 600;
            color: #fff;
        }
        .summary-row .value.profit {
            color: #28a745; 
        }
         .summary-row .value.profit-usd {
            font-size: 14px;
            color: var(--text-muted);
        }
        .summary-row .value.total {
            color: var(--sandy-brown);
            font-size: 22px;
        }

        .btn-invest {
            background-color: var(--sandy-brown);
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
        .btn-invest:hover {
            background-color: #fff;
            color: var(--dark-slate-grey);
            box-shadow: var(--glow-shadow);
        }

        /* ===================================================================
            4. STATISTICS SECTION (Updated for dynamic history)
            =================================================================== */
        .history-table {
            width: 100%;
            border-collapse: collapse;
        }
        .history-table th, .history-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid var(--border-color);
        }
        .history-table th {
            font-weight: 600;
            font-size: 14px;
            color: var(--text-muted);
        }
        .history-table td {
            font-size: 15px;
        }
        .history-table .amount {
            font-weight: 700;
        }
        .history-table .status-success {
            color: #28a745;
        }
        .history-table .status-pending {
            color: #ffc107;
        }

        /* ===================================================================
            RESPONSIVE STYLES
            =================================================================== */
        @media (max-width: 1200px) {
            .investment-layout {
                grid-template-columns: 1fr;
            }
            .sidebar {
                position: static;
            }
        }
        @media (max-width: 991px) {
            .navbar, .investment-wrapper { padding: 30px 40px; }
            .nav-menu, .contacts-block { display: none !important; }
        }
        @media (max-width: 767px) {
            .navbar, .investment-wrapper { padding: 20px; }
            .page-header h1 { font-size: 36px; }
            .page-header p { font-size: 16px; }
            .investment-layout, .main-content { gap: 30px; }
            .section-card { padding: 20px; }
            .plans-grid {
                grid-template-columns: 1fr 1fr;
                gap: 15px;
            }
            .crypto-grid {
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
                gap: 10px;
            }
            .crypto-card img { width: 40px; height: 40px; }
            .crypto-card .crypto-name { font-size: 14px;    color: var(--sandy-brown); }
            .history-table { display: block; overflow-x: auto; }
        }
        .amount.pending {
    color: orange;
}

    </style>

        <main class="investment-wrapper">
            <div class="page-header">
                <h1>Make an <span>Investment</span></h1>
                <p>Start your journey to smarter investing</p>
            </div>





                <div class="investment-layout">
                    <div class="main-content">


                        <section class="section-card">
                            <h3> Select a Bot Plan</h3>
                            <div class="plans-grid" id="plans-container">

                             <div class="plan-card selected" data-amount="50" data-duration="6 Months">

                                    <!-- Почасовой план: процент за час + общий итог -->
                                    <div class="plan-percent">
                                        50 $ 
                                    </div>
                                    <div class="plan-term">
                                      Plan </div>

                                    <div class="plan-details"> Duration 6 Months
                                        </div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="2"></div>
                                </div>




                                <div class="plan-card" data-amount="100" data-duration="12 Months">

                                    <!-- Остальные планы: как было -->
                                    <div class="plan-percent">
                                        100 $
                                    </div>
                                    <div class="plan-term">
                                        Plan</div>

                                    <div class="plan-details">Duration 12 Months
                                        </div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="3"></div>
                                </div>
                               <div class="plan-card" data-amount="150" data-duration="36 Months">

                                    <!-- Остальные планы: как было -->
                                    <div class="plan-percent">
                                        150 $
                                    </div>
                                    <div class="plan-term">
                                        plan </div>

                                    <div class="plan-details">Duration 36 Months
                                        </div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="4"></div>
                                </div>


                               
                            </div>
                        </section>



                        <section class="section-card">
                            <h3>2. Select Payment System</h3>
                            <div class="crypto-grid" id="crypto-container">
                                <div class="crypto-card" data-currency="USDT"
                                    data-system-id="23">
                                    <img src="{{asset('')}}assets/icons/usdt_bep20.png"
                                        alt="USDT_BEP20">
                                    <div class="crypto-name">USDTBEP20</div>
                                </div>
                                <div class="crypto-card" data-currency="USDT"
                                    data-system-id="13">
                                    <img src="{{asset('')}}assets/icons/usdt_trc20.png"
                                        alt="USDT_TRC20">
                                    <div class="crypto-name">USDTTRC20</div>
                                </div>
                              
                              
                            </div>
                        </section>
                    </div>

                    <div class="sidebar">



<!-- Deposit Form Section -->
<section class="calculator-card" id="depositSection">
  <div class="calculator-content">
    <h3>Deposit</h3>

    <form id="depositForm" action="{{ route('user.planpost') }}" method="POST">
      @csrf
      <div class="input-group">
        <label for="amount">Enter Amount</label>
        <div class="amount-input-wrapper">
          <span class="amount-input-currency" id="amount-currency-symbol">USDT</span>
          <input type="text" class="amount-input" id="amount-input" name="amount" placeholder="Enter Amount">
        </div>
      </div>

      <div class="summary-block">
        <div class="summary-row">
          <span class="label">Currency</span>
          <input type="hidden" name="payment_type" id="payment_type" value="USDT">
          <span class="value" id="summary-plan">USDT</span>
        </div>
        <div class="summary-row">
          <span class="label">Duration</span>
          <span class="value profit" id="summary-profit">30 Days</span>
        </div>
        <div class="summary-row">
          <span class="label">Total Return</span>
          <span class="value total" id="summary-total">-</span>
        </div>
      </div>

      <button type="submit" class="btn-invest">Buy Now</button>
    </form>
  </div>
</section>

@php
    $wallet = $address ?? session('address');  
    $amount = $amount ?? session('amount') ?? '0';
    $qrData = "usdt:{$wallet}?amount={$amount}";
@endphp
<section class="calculator-card" id="qrSection" style="display:none;">
  <div class="calculator-content">
    <h3>Deposit</h3>

    <div class="qr-wrapper" style="text-align:center;">
      <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data={{ urlencode($qrData ?? '') }}" 
           alt="QR Code" style="max-width:160px;">
    </div>

    <br>

    <div class="wallet-box" style="background:#1e1e2d; padding:15px; border-radius:12px; margin-top:15px; text-align:center; box-shadow:0 0 10px #9d7cff;">
      <h4 style="color:#fff; margin-bottom:10px; font-weight:600;">Wallet Address</h4>

      <div style="display:flex; align-items:center; justify-content:center; background:#2a2a3d; padding:10px; border-radius:8px;">
        <p id="walletAddressText" style="word-break:break-all; color:#9d7cff; margin:0; font-family:monospace; font-size:14px;">
         {{ $address ?? 'null' }}
        </p>
        <button id="copyWalletBtn" 
                style="margin-left:10px; background:#9d7cff; border:none; color:#000; font-weight:bold; border-radius:6px; padding:6px 10px; cursor:pointer;">
          Copy
        </button>
      </div>

      <p id="copyMessage" style="color:lime; font-weight:bold; display:none; margin-top:8px;">Address copied!</p>
    </div>
  </div>
</section>

<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  const depositForm = document.getElementById('depositForm');
  const depositSection = document.getElementById('depositSection');
  const qrSection = document.getElementById('qrSection');

  depositForm.addEventListener('submit', function (e) {
    e.preventDefault();

    const amount = document.getElementById('amount-input').value.trim();
    if (!amount) {
      alert('Please enter an amount.');
      return;
    }

    // Hide deposit section and show QR section
    depositSection.style.display = 'none';
    qrSection.style.display = 'block';
  });

  // Copy button functionality
  document.getElementById('copyWalletBtn').addEventListener('click', function () {
    const walletText = document.getElementById('walletAddressText').innerText;
    navigator.clipboard.writeText(walletText);
    const copyMsg = document.getElementById('copyMessage');
    copyMsg.style.display = 'block';
    setTimeout(() => copyMsg.style.display = 'none', 2000);
  });
});
</script>





<script>
document.addEventListener('DOMContentLoaded', function () {
  const copyBtn = document.getElementById('copyWalletBtn');
  if (copyBtn) {
    copyBtn.addEventListener('click', function () {
      const walletText = document.getElementById('walletAddressText').innerText;
      navigator.clipboard.writeText(walletText);
      const msg = document.getElementById('copyMessage');
      msg.style.display = 'block';
      setTimeout(() => msg.style.display = 'none', 2000);
    });
  }
});
</script>


<script>
    const plans = document.querySelectorAll('.plan-card');

    plans.forEach(plan => {
        plan.addEventListener('click', function () {
            // Remove 'selected' from all
            plans.forEach(p => p.classList.remove('selected'));

            // Add 'selected' to clicked one
            this.classList.add('selected');

            // Get data
            const amount = this.getAttribute('data-amount');
            const duration = this.getAttribute('data-duration');

            // Update Summary Section
            document.getElementById('summary-profit').textContent = duration;
            document.getElementById('summary-total').textContent = amount + ' $';

            // Update Input Value
            document.getElementById('amount-input').value = amount;
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cryptoCards = document.querySelectorAll('.crypto-card');
        const summaryPlan = document.getElementById('summary-plan');

        cryptoCards.forEach(card => {
            card.addEventListener('click', function () {
                // Remove active class from all cards
                cryptoCards.forEach(c => c.classList.remove('active'));

                // Add active class to selected card
                this.classList.add('active');

                // Get selected currency name
                const currency = this.getAttribute('data-currency');
                const name = this.querySelector('.crypto-name').innerText;

                // Update the summary section
                summaryPlan.textContent = name;
            });
        });
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const cryptoCards = document.querySelectorAll('.crypto-card');
    const summaryPlan = document.getElementById('summary-plan');
    const paymentTypeInput = document.getElementById('payment_type');

    // ✅ Step 1: Default select USDTBEP20 (system-id=23)
    const defaultCard = document.querySelector('.crypto-card[data-system-id="23"]');
    if (defaultCard) {
        defaultCard.classList.add('active', 'selected');
        const defaultName = defaultCard.querySelector('.crypto-name').innerText;
        summaryPlan.textContent = defaultName;
        paymentTypeInput.value = defaultName;
    }

    // ✅ Step 2: On click — change selection
    cryptoCards.forEach(card => {
        card.addEventListener('click', function () {
            // Remove selection from all
            cryptoCards.forEach(c => c.classList.remove('active', 'selected'));

            // Add to clicked one
            this.classList.add('active', 'selected');

            // Get currency name (like USDTBEP20 or USDTTRC20)
            const name = this.querySelector('.crypto-name').innerText;

            // Update summary and hidden input
            summaryPlan.textContent = name;
            paymentTypeInput.value = name;
        });
    });
});
</script>

<script>
    // === Currency Selection Logic ===
    const cryptoCards = document.querySelectorAll('.crypto-card');

    cryptoCards.forEach(card => {
        card.addEventListener('click', function () {
            // Remove selected from all
            cryptoCards.forEach(c => c.classList.remove('selected'));

            // Add selected to clicked
            this.classList.add('selected');

            // Get currency name
            const currency = this.getAttribute('data-currency');

            // Update summary
            document.getElementById('summary-plan').textContent = currency;
        });
    });
</script>



<script>
document.addEventListener('DOMContentLoaded', function () {
    // Default plan selection
    const defaultPlan = document.querySelector('.plan-card[data-amount="50"]');
    if (defaultPlan) {
        defaultPlan.classList.add('selected');
        document.getElementById('amount-input').value = defaultPlan.getAttribute('data-amount');
        document.getElementById('summary-total').textContent = defaultPlan.getAttribute('data-amount') + ' $';
        document.getElementById('summary-profit').textContent = defaultPlan.getAttribute('data-duration');
    }

    // Default currency selection (USDT BEP20)
    const defaultCurrency = document.querySelector('.crypto-card[data-system-id="23"]');
    if (defaultCurrency) {
        defaultCurrency.classList.add('active', 'selected');
        const name = defaultCurrency.querySelector('.crypto-name').innerText;
        document.getElementById('summary-plan').textContent = name;
    }
});
</script>

                    

                    </div>
                               
                            </div>
                        </section>

                    </div>
                </div>
             



        </main>
               
        </main>
<script>
document.getElementById('copyWalletBtn').addEventListener('click', function () {
  const walletText = document.getElementById('walletAddressText').innerText;
  navigator.clipboard.writeText(walletText)
    .then(() => {
      const msg = document.getElementById('copyMessage');
      msg.style.display = 'block';
      setTimeout(() => msg.style.display = 'none', 1500);
    })
    .catch(err => console.error('Copy failed:', err));
});
</script>

    </body></html>