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
         box-shadow: 0 18px 48px rgba(0, 0, 0, .18), 0 0 0 2px color-mix(in oklab, var(--cp-accent), transparent 60%), 0 0 0 6px color-mix(in oklab, var(--cp-accent), transparent 88%);
     }

     .plan-card .plan-percent {
         font-family: 'Bowler', sans-serif;
         font-size: 41px;
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
         box-shadow: 0 18px 48px rgba(0, 0, 0, .18), 0 0 0 2px color-mix(in oklab, var(--cp-accent), transparent 60%), 0 0 0 6px color-mix(in oklab, var(--cp-accent), transparent 88%);
     }

     .crypto-card img {
         width: 48px;
         height: 48px;
     }

     .crypto-card .crypto-name {
         font-weight: 600;
         font-size: 15px;
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

     .history-table th,
     .history-table td {
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

         .navbar,
         .investment-wrapper {
             padding: 30px 40px;
         }

         .nav-menu,
         .contacts-block {
             display: none !important;
         }
     }

     @media (max-width: 767px) {

         .navbar,
         .investment-wrapper {
             padding: 20px;
         }

         .page-header h1 {
             font-size: 36px;
         }

         .page-header p {
             font-size: 16px;
         }

         .investment-layout,
         .main-content {
             gap: 30px;
         }

         .section-card {
             padding: 20px;
         }

         .plans-grid {
             grid-template-columns: 1fr 1fr;
             gap: 15px;
         }

         .crypto-grid {
             grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
             gap: 10px;
         }

         .crypto-card img {
             width: 40px;
             height: 40px;
         }

         .crypto-card .crypto-name {
             font-size: 14px;
             color: var(--sandy-brown);
         }

         .history-table {
             display: block;
             overflow-x: auto;
         }
     }

     .amount.pending {
         color: orange;
     }
 </style>

 <!-- 2) CSS: add once (keeps your dark theme) -->
<style>
/* Payment Panel */
.pay-panel { background:#2c2c2c; border:1px solid #2b2f36; border-radius:16px; padding:24px; color:#e6e8eb; }
.pay-title { margin:0 0 16px; font-size:20px; font-weight:700; }

.pay-grid {grid-template-columns:240px 1fr; gap:24px; align-items:start; }
.pay-qr {
  border-radius:12px;
  padding:12px;
  display:flex;
  align-items:center;
  justify-content:center;
}
.pay-qr svg {
  width:248px;             /* fixed width for balance */
  height:auto;
  display:block;
  margin:auto;
}
.pay-right { display:flex; flex-direction:column; gap:14px; }

.pay-meta { display:flex; gap:10px; align-items:center; }
.pay-badge { background:#2a2f36; border:1px solid #3a3f47; color:#9aa3af; font-size:12px; padding:4px 8px; border-radius:999px; }
.pay-value { font-weight:600; }

.pay-amount { background:linear-gradient(180deg, #2c2c2c 0%, #2c2c2c 100%); border:1px solid #323844; border-radius:12px; padding:12px 14px; }
.pay-amount-label { font-size:12px; color:#a0a7b4; margin-bottom:4px; }
.pay-amount-value { font-size:22px; font-weight:800; letter-spacing:.2px; color:#bca7ff; }
.pay-amount-value span { font-size:16px; font-weight:600; color:#c6cbe1; margin-left:4px; }

.pay-label { font-size:12px; color:#a0a7b4; }
.pay-copyrow { display:flex; gap:8px; }
.pay-input {
  flex:1; padding:12px 14px; border-radius:10px; border:1px solid #313743;
  background:#3d4348; color:#e6e8eb; font-family:ui-monospace, SFMono-Regular, Menlo, monospace;
  font-size:14px; letter-spacing:.2px;
}
.pay-input:focus { outline:none; border-color:#6e6bff; box-shadow:0 0 0 3px rgba(110,107,255,.15); }

.pay-btn {
  padding:12px 14px; border-radius:10px; border:1px solid transparent; cursor:pointer;
  font-weight:600; transition:all .2s ease; white-space:nowrap;
}
.pay-btn.primary { background:#7c6cff; color:#0b0c10; }
.pay-btn.primary:hover { filter:brightness(1.05); }
.pay-btn.ghost { background:#222731; color:#e6e8eb; border-color:#343a46; }
.pay-btn.ghost:hover { background:#2b3140; }
.pay-btn.back { background:#333843; color:#cfd5e3; border-color:#3a414f; }
.pay-btn.back:hover { filter:brightness(1.05); }

.pay-actions { display:flex; gap:10px; margin-top:8px; }

.pay-note {
  margin-top:6px; font-size:13px; color:#b0b6c3;
  background:#2c2c2c; border:1px dashed #374151; padding:10px 12px; border-radius:10px;
}

@media (max-width: 720px) {
  .pay-grid { grid-template-columns:1fr; }
}
</style>


 <main class="investment-wrapper">
     <div class="page-header">
         <h1>Buy  <span>Bot Plan</span></h1>
         <p>Start your journey — choose a plan, pick your payment system, and see how your investment can grow.</p>
     </div>

     <form id="investment-form" action="{{ route('user.fundActivation2') }}" method="post">
         @csrf

         <div class="investment-layout">
             <div class="main-content">
                 <section class="section-card">
                     <h3>1. Select a Bot Plan</h3>
                     <div class="plans-grid" id="plans-container">

                         <div class="plan-card selected" data-plan-id="1">
                             <div class="plan-percent">6 Months Plan</div>
                             <div class="plan-term"> Bot Fees $50</div>
                             <div class="plan-details">Buy your Bot Plan</div>
                             <div class="plan-limits" data-plan-id-limits="1"></div>
                         </div>

                         <div class="plan-card" data-plan-id="2">
                             <div class="plan-percent">12 Months Plan</div>
                             <div class="plan-term"> Bot Fees $100  </div>
                             <div class="plan-details">Buy your Bot Plan</div>
                             <div class="plan-limits" data-plan-id-limits="2"></div>
                         </div>

                         <div class="plan-card" data-plan-id="3">
                             <div class="plan-percent">36 Months Plan</div>
                             <div class="plan-term">Bot Fees  $150  </div>
                             <div class="plan-details">Buy your Bot Plan</div>
                             <div class="plan-limits" data-plan-id-limits="3"></div>
                         </div>

                        

                     </div>
                 </section>

                 <section class="section-card">
                     <h3>2. Select Payment System</h3>
                     <div class="crypto-grid" id="crypto-container">
                         <div class="crypto-card" data-currency="USDT" data-systemid="bep20">
                             <img src="{{ asset('') }}assets/icons/usdt_bep20.png" alt="USDT_BEP20">
                             <div class="crypto-name">USDT BEP20</div>
                         </div>
                         <div class="crypto-card" data-currency="USDT" data-systemid="trc20">
                             <img src="{{ asset('') }}assets/icons/usdt_trc20.png" alt="USDT_TRC20">
                             <div class="crypto-name">USDT TRC20</div>
                         </div>


                     </div>
                 </section>
             </div>

             <div class="sidebar">
                 <section class="calculator-card">
                     <div class="calculator-content">
                         <h3>3. Deposit </h3>
                         <div class="input-group">
                             <label for="amount">Enter Amount</label>


                             <div class="amount-input-wrapper">
                                 <span class="amount-input-currency" id="amount-currency-symbo"><img
                                         style="width: 30px;height:30px" src="/assets/icons8-tether-64.png"
                                         alt="" srcset=""></span>


                                 <input type="text" class="amount-input" id="amount-input" name="amount"
                                     placeholder="0.00" value="0">


                             </div>
                             <div class="input-limits-info" id="input-limits"></div>
                         </div>

                         <div class="summary-block">
                             <div class="summary-row">
                                 <span class="label">Selected Plan</span>
                                 <span class="value" id="summary-plan">6 months Plan
                                     </span>
                             </div>
                            <div class="summary-row">
  <span class="label">Currency</span>
  <div>
    <span class="value profit" id="summary-profit"> USDT BEP20</span>
  </div>
</div>
                             <div class="summary-row">
                                 <span class="label">Amount</span>
                                 <span class="value total" id="">0</span>
                             </div>
                         </div>

                         <button type="submit" class="btn-invest">Buy
                             Now</button>
                     </div>
                 </section>
           
                 <section id="payment-panel" class="pay-panel" style="display:none;"></section>

              
             </div>
         </div>
         </section>
         <br>



         <section class="dashboard-card">
             <div class="card-header">
                 <h3>Latest Deposits</h3>
                 <a href="/user/operations">All</a>
             </div>

                <div class="history-table-wrapper">
      <table class="history-table" id="resultsTable">
        <thead>
          <tr>
            <th>S.No</th>
            <th>Amount</th>
            <th>Payment Mode</th>
            <th>Start Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody style="
    color: white;
">

     @forelse($deposit_list as $key => $deposit)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>${{ number_format($deposit->amount, 2) }}</td>
            <td>{{($deposit->payment_mode) }}</td>
            <td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('d M Y') }}</td>
            <td>
{{($deposit->status)}}            </td>
          </tr>
           @empty
          <tr>
            <td colspan="5" class="text-center">No deposit history found.</td>
          </tr>
          @endforelse
        
        </tbody>
      </table>
      <div class="ops-pager">
    </div>
         </section>



         
         </div>
         </div>
         <input type="hidden" name="plan" id="selected-plan-input" value="1">
         <input type="hidden" name="system" id="selected-system-input" value="bep20">
     </form>
 </main>





<script>
document.addEventListener('DOMContentLoaded', () => {
    const plans = [
        { id: 1, name: '6 Months Plan', description: '50 $ Profit', monthlyPercent: 50 },
        { id: 2, name: '12 Months Plan', description: '100 $ Profit', monthlyPercent: 100 },
        { id: 3, name: '36 Months Plan', description: '150 $ Profit', monthlyPercent: 150 },
    ];

    const rates = {
        USD: 1,
        BTC: 122988.2,
        LTC: 120,
        DOGE: 0.26,
        ETH: 4539.5,
        XRP: 3,
        TRX: 0.34,
        BNB: 1168,
        USDT: 1,
        TON: 2.81
    };

    const plansContainer = document.getElementById('plans-container');
    const cryptoContainer = document.getElementById('crypto-container');
    const amountInput = document.getElementById('amount-input');

    const summaryPlanEl = document.getElementById('summary-plan');
    const summaryProfitEl = document.getElementById('summary-profit');
    const summaryTotalEl = document.querySelector('.summary-row .total');
    const summaryProfitUsdEl = document.getElementById('summary-profit-usd');
    const amountCurrencySymbolEl = document.getElementById('amount-currency-symbol');

    const selectedPlanInput = document.getElementById('selected-plan-input');
    const selectedSystemInput = document.getElementById('selected-system-input');

    let selectedPlan = null;
    let selectedCurrency = "USDT BEP20"; // ✅ Default currency name
    let selectedSystemId = "bep20"; // ✅ Default system id

    // ===== Formatting function =====
    function fmt(num, currency) {
        if (currency === 'USD') return Number(num).toFixed(2);
        if (currency === 'BTC' || currency === 'ETH') return Number(num).toFixed(8).replace(/\.?0+$/, '');
        return Number(num).toFixed(4).replace(/\.?0+$/, '');
    }

    // ===== Calculation function =====
    function calc() {
        if (!selectedPlan || !selectedCurrency) {
            summaryProfitEl.textContent = selectedCurrency;
            summaryTotalEl.textContent = '...';
            return;
        }

        const raw = (amountInput.value || '').toString().replace(',', '.');
        const amount = parseFloat(raw) || 0;
        const rateToUsd = rates["USDT"] || 0; // all default to USDT conversion

        const monthlyProfit = amount * (selectedPlan.monthlyPercent / 100);
        const totalReturn = amount * 2;
        const profitUsd = monthlyProfit * rateToUsd;

        summaryPlanEl.textContent = selectedPlan.name;
        summaryProfitEl.textContent = `${selectedCurrency}`;
        summaryTotalEl.textContent = `$${selectedPlan.monthlyPercent}`;
        summaryProfitUsdEl.textContent = selectedCurrency !== 'USD' ? `≈ $${profitUsd.toFixed(2)}` : '';
    }

    // ===== Plan Selection =====
    plansContainer.addEventListener('click', (e) => {
        const card = e.target.closest('.plan-card');
        if (!card) return;

        plansContainer.querySelectorAll('.plan-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');

        const planId = parseInt(card.dataset.planId, 10);
        selectedPlan = plans.find(p => p.id === planId);
        selectedPlanInput.value = planId;

        amountInput.value = selectedPlan.monthlyPercent;
        calc();
    });

    // ===== Crypto Selection =====
    cryptoContainer.addEventListener('click', (e) => {
        const card = e.target.closest('.crypto-card');
        if (!card) return;

        cryptoContainer.querySelectorAll('.crypto-card').forEach(c => c.classList.remove('selected'));
        card.classList.add('selected');

        selectedCurrency = card.querySelector('.crypto-name').textContent.trim();
        selectedSystemId = card.dataset.systemid;

        selectedSystemInput.value = selectedSystemId;
        amountCurrencySymbolEl.textContent = selectedCurrency;
        calc();
    });

    // ===== Default select BEP20 =====
    const defaultCard = cryptoContainer.querySelector('[data-systemid="bep20"]');
    if (defaultCard) {
        defaultCard.classList.add('selected');
    }

    // ===== Default select first plan =====
    const firstPlan = plansContainer.querySelector('.plan-card');
    if (firstPlan) firstPlan.click();

    // ===== Initial Summary =====
    calc();
});
</script>





<script>
(function(){
  const $ = (sel, root=document) => root.querySelector(sel);

  // Tiny toast
  function toast(msg){
    const n = document.createElement('div');
    n.textContent = msg;
    n.style.cssText = `
      position:fixed; bottom:18px; left:50%; transform:translateX(-50%);
      background:#2b2f36; color:#e6e8eb; border:1px solid #3a3f47; padding:10px 14px;
      border-radius:10px; font-weight:600; z-index:9999;`;
    document.body.appendChild(n);
    setTimeout(() => n.remove(), 1400);
  }

  async function copyText(text){
    try { await navigator.clipboard.writeText(text); toast('Copied!'); }
    catch { toast('Copy failed'); }
  }

  // PUBLIC: call this with your backend JSON payload
  window.renderPaymentPanel = function(payload){
    const { address, amount, currency, network, qrcodeSvg } = payload || {};
    const panel = document.getElementById('payment-panel');
    if (!panel) return;

       // hide calculator when showing QR
    const calcCard = document.querySelector('.calculator-card');
    if (calcCard) calcCard.style.display = 'none';

    
    panel.innerHTML = `
      <h3 class="pay-title">4. Complete Your Payment</h3>
      <div class="pay-grid">
        <div class="pay-qr">${qrcodeSvg || ''}</div>
        <div class="pay-right">
          <div class="pay-meta">
            <span class="pay-badge">Network</span>
            <span class="pay-value">${network || '-'}</span>
          </div>

          <div class="pay-amount">
            <div class="pay-amount-label">Pay Amount</div>
            <div class="pay-amount-value">${amount || '0'} <span>${currency || ''}</span></div>
          </div>

          <label class="pay-label">Wallet Address</label>
          <div class="pay-copyrow">
            <input class="pay-input" id="payAddress" value="${address || ''}" readonly />
            <button class="pay-btn ghost" id="btnCopyAddr" type="button">Copy</button>
          </div>

          <label class="pay-label">Exact Amount</label>
          <div class="pay-copyrow">
            <input class="pay-input" id="payAmount" value="${amount || '0'}" readonly />
            <button class="pay-btn ghost" id="btnCopyAmt" type="button">Copy</button>
          </div>

          <div class="pay-note">
            Send exactly <strong>${amount || '0'} ${currency || ''}</strong> on
            <strong>${network || '-'}</strong> to the address above. Network or amount
            mismatches may delay confirmation.
          </div>

          <div class="pay-actions">
            <button type="button" class="pay-btn back" id="btnBack">← Back</button>
           
          </div>
        </div>
      </div>
    `;
    panel.style.display = '';

    // Wire buttons
    $('#btnCopyAddr', panel)?.addEventListener('click', () => {
      copyText($('#payAddress', panel)?.value || '');
    });
    $('#btnCopyAmt', panel)?.addEventListener('click', () => {
      copyText($('#payAmount', panel)?.value || '');
    });
    $('#btnBack', panel)?.addEventListener('click', () => {
      panel.style.display = 'none';
       const calcCard = document.querySelector('.calculator-card');
    if (calcCard) calcCard.style.display = 'block';
    });
    $('#btnIHavePaid', panel)?.addEventListener('click', () => {
      toast('Payment will be detected automatically after confirmation.');
    });
  };
})();
</script>

 <script>
(function(){
  const formEl              = document.getElementById('investment-form');
  const investBtn           = formEl.querySelector('.btn-invest');
  const amountInput         = document.getElementById('amount-input');

  const selectedPlanInput   = document.getElementById('selected-plan-input');
  const selectedSystemInput = document.getElementById('selected-system-input');

  const summaryPlanEl       = document.getElementById('summary-plan');
  const summaryProfitEl     = document.getElementById('summary-profit');
  const summaryTotalEl      = document.getElementById('summary-total');

  const paymentPanel        = document.getElementById('payment-panel');

  // Small helper: loader state on button
  function setLoading(btn, on, text='Invest Now'){
    if (!btn) return;
    if (on) {
      btn.dataset.label = btn.textContent.trim();
      btn.innerHTML = `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Generating address…`;
      btn.disabled = true;
    } else {
      btn.textContent = btn.dataset.label || text;
      btn.disabled = false;
    }
  }

  // Copy helper
  async function copyText(text){
    try {
      await navigator.clipboard.writeText(text);
      alert('Copied!');
    } catch (e){
      alert('Copy failed');
    }
  }


  // Submit handler -> AJAX quote
  formEl.addEventListener('submit', async (e) => {
    e.preventDefault();

    const amount = parseFloat((amountInput.value || '0').toString().replace(',', '.')) || 0;
    const planId = selectedPlanInput.value;
    const system = selectedSystemInput.value; // bep20 | trc20
    const currency = 'USDT';                 // from your selection; here fixed

    if (!planId)  return alert('Please select a plan.');
    if (!system)  return alert('Please select a payment network.');
    if (!amount || amount <= 0) return alert('Please enter a valid amount.');

    setLoading(investBtn, true);

    try {
      const res = await fetch(`{{ route('user.quotes') }}`,
      
      
       {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': '{{ csrf_token() }}',
          'Accept': 'application/json',
        },
        body: JSON.stringify({ plan_id: planId, system, currency, amount })
      });

      const json = await res.json();
      if (!res.ok || !json.ok) {
        throw new Error(json?.message || 'Failed to create payment quote.');
      }

      // Show the payment panel with QR + address
      renderPaymentPanel(json);
      // Optionally scroll to the payment panel
      paymentPanel.scrollIntoView({ behavior:'smooth', block:'start' });

    } catch (err) {
      console.error(err);
      alert(err.message || 'Something went wrong.');
    } finally {
      setLoading(investBtn, false);
    }
  });
})();
</script>

 </body>

 </html>
