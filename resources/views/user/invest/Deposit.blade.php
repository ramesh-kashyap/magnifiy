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
         <h1>Make an <span>Investment</span></h1>
         <p>Choose a plan, select a payment system, and enter the amount
             to calculate your potential profit.</p>
     </div>

     <form id="investment-form" action="{{ route('user.fundActivation') }}" method="post">
         @csrf

         <div class="investment-layout">
             <div class="main-content">
                 <section class="section-card">
                     <h3>1. Select a Tariff Plan</h3>
                     <div class="plans-grid" id="plans-container">

                         <div class="plan-card selected" data-plan-id="1">
                             <div class="plan-percent">Monthly Plan</div>
                             <div class="plan-term">Earn 5% Monthly Profit</div>
                             <div class="plan-details">Unlock your rewards every month</div>
                             <div class="plan-limits" data-plan-id-limits="1"></div>
                         </div>

                         <div class="plan-card" data-plan-id="2">
                             <div class="plan-percent">Quarterly Plan</div>
                             <div class="plan-term">Earn 6% Monthly Profit</div>
                             <div class="plan-details">Unlock your rewards at the end of each quarter</div>
                             <div class="plan-limits" data-plan-id-limits="2"></div>
                         </div>

                         <div class="plan-card" data-plan-id="3">
                             <div class="plan-percent">Half-Yearly Plan</div>
                             <div class="plan-term">Earn 7% Monthly Profit</div>
                             <div class="plan-details">Unlock your rewards after six months</div>
                             <div class="plan-limits" data-plan-id-limits="3"></div>
                         </div>

                         <div class="plan-card" data-plan-id="4">
                             <div class="plan-percent">Yearly Plan</div>
                             <div class="plan-term">Earn 8% Monthly Profit</div>
                             <div class="plan-details">Unlock your rewards after one year</div>
                             <div class="plan-limits" data-plan-id-limits="4"></div>
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
                         <h3>3. Calculate Your Profit</h3>
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
                                 <span class="value" id="summary-plan">MEgnifly: Hash
                                     Key</span>
                             </div>
                             <div class="summary-row">
                                 <span class="label">Monthly Profit</span>
                                 <div>
                                     <span class="value profit" id="summary-profit">+ 0
                                         DOGE</span>
                                     <div class="value profit-usd" id="summary-profit-usd">≈
                                         $0.00</div>
                                 </div>
                             </div>
                             <div class="summary-row">
                                 <span class="label">Total Return</span>
                                 <span class="value total" id="summary-total">0 DOGE</span>
                             </div>
                         </div>

                         <button type="submit" class="btn-invest">Invest
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

             <ul class="transactions-list">
                 <li class="transaction-item-empty">
                     <p>No deposits yet.</p>
                 </li>
             </ul>
         </section>
         </div>
         </div>
         <input type="hidden" name="plan" id="selected-plan-input" value="1">
         <input type="hidden" name="system" id="selected-system-input" value="bep20">
     </form>
 </main>


 <script>
     document.addEventListener('DOMContentLoaded', () => {
         /* ===== Plans: monthly % only (calc = Monthly) ===== */
         const plans = [{
                 id: 1,
                 name: 'Monthly Plan',
                 description: 'MEgnifly: Hash Key',
                 monthlyPercent: 5
             },
             {
                 id: 2,
                 name: 'Quarterly Plan',
                 description: 'MEgnifly: Cipher Rig',
                 monthlyPercent: 6
             },
             {
                 id: 3,
                 name: 'Half-Yearly Plan',
                 description: 'MEgnifly: Enigma Protocol',
                 monthlyPercent: 7
             },
             {
                 id: 4,
                 name: 'Yearly Plan',
                 description: 'MEgnifly: Genesis Code',
                 monthlyPercent: 8
             },
         ];

         /* ===== Simple currency map for USD conversion (edit as needed) ===== */
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
         const summaryProfitUsdEl = document.getElementById('summary-profit-usd');
         const summaryTotalEl = document.getElementById('summary-total');
         const amountCurrencySymbolEl = document.getElementById('amount-currency-symbol');

         const selectedPlanInput = document.getElementById('selected-plan-input');
         const selectedSystemInput = document.getElementById('selected-system-input');

         let selectedPlan = null;
         let selectedCurrency = null;
         let selectedSystemId = null;

         function fmt(num, currency) {
             if (currency === 'USD') return Number(num).toFixed(2);
             if (currency === 'BTC' || currency === 'ETH') return Number(num).toFixed(8).replace(/\.?0+$/, '');
             return Number(num).toFixed(4).replace(/\.?0+$/, '');
         }

         function calc() {
             if (!selectedPlan || !selectedCurrency) {
                 summaryProfitEl.textContent = '...';
                 summaryTotalEl.textContent = '...';
                 summaryProfitUsdEl.textContent = '';
                 return;
             }

             const raw = (amountInput.value || '').toString().replace(',', '.');
             const amount = parseFloat(raw) || 0;
             const rateToUsd = rates[selectedCurrency] || 0;

             // Monthly profit by plan
             const monthlyProfit = amount * (selectedPlan.monthlyPercent / 100);

             // Total return = 2X principal (as requested)
             const totalReturn = amount * 2;

             // USD hint for profit
             const profitUsd = monthlyProfit * rateToUsd;

             summaryPlanEl.textContent = selectedPlan.name;
             summaryProfitEl.textContent = `+ ${fmt(monthlyProfit, selectedCurrency)} ${selectedCurrency}`;
             summaryTotalEl.textContent = `${fmt(totalReturn, selectedCurrency)} ${selectedCurrency}`;
             summaryProfitUsdEl.textContent = selectedCurrency !== 'USD' ?
                 `≈ $${profitUsd.toFixed(2)}` :
                 '';
         }

         // Plan selection
         plansContainer.addEventListener('click', (e) => {
             const card = e.target.closest('.plan-card');
             if (!card) return;

             plansContainer.querySelectorAll('.plan-card').forEach(c => c.classList.remove('selected'));
             card.classList.add('selected');

             const planId = parseInt(card.dataset.planId, 10);
             selectedPlan = plans.find(p => p.id === planId);
             selectedPlanInput.value = planId;

             calc();
         });

         // Crypto selection
         cryptoContainer.addEventListener('click', (e) => {
             const card = e.target.closest('.crypto-card');
             if (!card) return;

             cryptoContainer.querySelectorAll('.crypto-card').forEach(c => c.classList.remove(
                 'selected'));
             card.classList.add('selected');
            // console.log(card);
             selectedCurrency = card.dataset.currency;
             selectedSystemId = card.dataset.systemid;
            selectedSystemInput.value = selectedSystemId;
             amountCurrencySymbolEl.textContent = selectedCurrency;
            

             calc();
         });

         // Amount typing
         amountInput.addEventListener('input', calc);

        // Initial Selection and Calculation
        const firstPlan = plansContainer.querySelector('.plan-card');
        if (firstPlan) {
            firstPlan.click();
        }
        
        const firstCrypto = cryptoContainer.querySelector('.crypto-card');
        if (firstCrypto) {
            firstCrypto.click();
        }

        calculate();
    });
    </script>

 </body>

 </html>
