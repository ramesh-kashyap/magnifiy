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
                <p>Choose a plan, select a payment system, and enter the amount
                    to calculate your potential profit.</p>
            </div>

            <form id="investment-form" action="/pay/index.php" method="post">
                <input type="hidden" name="csrf"
                    value="901a7f730969f8c29b5e1d9657bf2775">
                <input type="hidden" name="from" value="/user/invest/"> <input
                    type="hidden" name="from" value="/user/invest">

                <div class="investment-layout">
                    <div class="main-content">
                        <section class="section-card">
                            <h3>1. Select a Tariff Plan</h3>
                            <div class="plans-grid" id="plans-container">

                                <div class="plan-card selected"
                                    data-plan-id="2">

                                    <!-- Почасовой план: процент за час + общий итог -->
                                    <div class="plan-percent">
                                        4.5% Hourly
                                    </div>
                                    <div class="plan-term">
                                        Total: 108% after 1 day </div>

                                    <div class="plan-details">MEgnifly: Hash
                                        Key</div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="2"></div>
                                </div>
                                <div class="plan-card" data-plan-id="3">

                                    <!-- Остальные планы: как было -->
                                    <div class="plan-percent">
                                        114%
                                    </div>
                                    <div class="plan-term">
                                        after 1 day </div>

                                    <div class="plan-details">MEgnifly: Cipher
                                        Rig</div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="3"></div>
                                </div>
                                <div class="plan-card" data-plan-id="4">

                                    <!-- Остальные планы: как было -->
                                    <div class="plan-percent">
                                        300%
                                    </div>
                                    <div class="plan-term">
                                        after 7 days </div>

                                    <div class="plan-details">MEgnifly: Enigma
                                        Protocol</div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="4"></div>
                                </div>
                                <div class="plan-card" data-plan-id="5">

                                    <!-- Остальные планы: как было -->
                                    <div class="plan-percent">
                                        1200%
                                    </div>
                                    <div class="plan-term">
                                        after 12 days </div>

                                    <div class="plan-details">MEgnifly: Genesis
                                        Code</div>
                                    <div class="plan-limits"
                                        data-plan-id-limits="5"></div>
                                </div>
                            </div>
                        </section>

                        <section class="section-card">
                            <h3>2. Select Payment System</h3>
                            <div class="crypto-grid" id="crypto-container">
                                <div class="crypto-card" data-currency="BTC"
                                    data-system-id="1">
                                    <img src="{{asset('')}}assets/icons/bitcoin.png"
                                        alt="BitCoin">
                                    <div class="crypto-name">BitCoin</div>
                                </div>
                                <div class="crypto-card" data-currency="LTC"
                                    data-system-id="2">
                                    <img src="{{asset('')}}assets/icons/litecoin.png"
                                        alt="LiteCoin">
                                    <div class="crypto-name">LiteCoin</div>
                                </div>
                                <div class="crypto-card selected"
                                    data-currency="DOGE" data-system-id="3">
                                    <img src="{{asset('')}}assets/icons/dogecoin.png"
                                        alt="DogeCoin">
                                    <div class="crypto-name">DogeCoin</div>
                                </div>
                                <div class="crypto-card" data-currency="ETH"
                                    data-system-id="4">
                                    <img src="{{asset('')}}assets/icons/ethereum.png"
                                        alt="Ethereum">
                                    <div class="crypto-name">Ethereum</div>
                                </div>
                                <div class="crypto-card" data-currency="XRP"
                                    data-system-id="9">
                                    <img src="{{asset('')}}assets/icons/ripple.png"
                                        alt="Ripple">
                                    <div class="crypto-name">Ripple</div>
                                </div>
                                <div class="crypto-card" data-currency="TRX"
                                    data-system-id="10">
                                    <img src="{{asset('')}}assets/icons/tron.png"
                                        alt="TRON">
                                    <div class="crypto-name">TRON</div>
                                </div>
                                <div class="crypto-card" data-currency="BNB"
                                    data-system-id="12">
                                    <img src="{{asset('')}}assets/icons/binancecoin.png"
                                        alt="BinanceCoin">
                                    <div class="crypto-name">BinanceCoin</div>
                                </div>
                                <div class="crypto-card" data-currency="USDT"
                                    data-system-id="13">
                                    <img src="{{asset('')}}assets/icons/usdt_trc20.png"
                                        alt="USDT_TRC20">
                                    <div class="crypto-name">USDT_TRC20</div>
                                </div>
                                <div class="crypto-card" data-currency="USDT"
                                    data-system-id="23">
                                    <img src="{{asset('')}}assets/icons/usdt_bep20.png"
                                        alt="USDT_BEP20">
                                    <div class="crypto-name">USDT_BEP20</div>
                                </div>
                                <div class="crypto-card" data-currency="USDT"
                                    data-system-id="24">
                                    <img src="{{asset('')}}assets/icons/usdt_ton.png"
                                        alt="USDT_TON">
                                    <div class="crypto-name">USDT_TON</div>
                                </div>
                                <div class="crypto-card" data-currency="TON"
                                    data-system-id="26">
                                    <img src="{{asset('')}}assets/icons/ton.png"
                                        alt="TON">
                                    <div class="crypto-name">TON</div>
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
                                        <span class="amount-input-currency"
                                            id="amount-currency-symbol">DOGE</span>
                                        <input type="text" class="amount-input"
                                            id="amount-input" name="summa"
                                            placeholder="0.00" value="0">
                                    </div>
                                    <div class="input-limits-info"
                                        id="input-limits"></div>
                                </div>

                                <div class="summary-block">
                                    <div class="summary-row">
                                        <span class="label">Selected Plan</span>
                                        <span class="value"
                                            id="summary-plan">MEgnifly: Hash
                                            Key</span>
                                    </div>
                                    <div class="summary-row">
                                        <span class="label">Total Profit</span>
                                        <div>
                                            <span class="value profit"
                                                id="summary-profit">+ 0
                                                DOGE</span>
                                            <div class="value profit-usd"
                                                id="summary-profit-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                    <div class="summary-row">
                                        <span class="label">Total Return</span>
                                        <span class="value total"
                                            id="summary-total">0 DOGE</span>
                                    </div>
                                </div>

                                <button type="submit" class="btn-invest">Invest
                                    Now</button>
                            </div>
                        </section>

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
                                <button type="submit" class="btn-invest">Invest
                                    Now</button>
                            </div>
                        </section>

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
                <input type="hidden" name="plan" id="selected-plan-input"
                    value="2">
                <input type="hidden" name="system" id="selected-system-input"
                    value="3">
            </form>
        </main>
                <input type="hidden" name="plan" id="selected-plan-input"
                    value="2">
                <input type="hidden" name="system" id="selected-system-input"
                    value="3">
            </form>
        </main>

        <script>
    document.addEventListener('DOMContentLoaded', () => {
        const plans = [{"id":2,"description":"MEgnifly: Hash Key","percent":4.5,"count":24,"seconds":3600,"min":[],"max":[],"return":0},{"id":3,"description":"MEgnifly: Cipher Rig","percent":114,"count":1,"seconds":86400,"min":[],"max":[],"return":0},{"id":4,"description":"MEgnifly: Enigma Protocol","percent":300,"count":1,"seconds":604800,"min":[],"max":[],"return":0},{"id":5,"description":"MEgnifly: Genesis Code","percent":1200,"count":1,"seconds":1036800,"min":[],"max":[],"return":0}];
        const rates = {"USD":1,"BTC":122988.2,"LTC":120,"DOGE":0.26,"ETH":4539.5,"XRP":3,"TRX":0.34,"BNB":1168,"USDT":1,"TON":2.81};

        const plansContainer = document.getElementById('plans-container');
        const cryptoContainer = document.getElementById('crypto-container');
        const amountInput = document.getElementById('amount-input');
        
        const summaryPlanEl = document.getElementById('summary-plan');
        const summaryProfitEl = document.getElementById('summary-profit');
        const summaryProfitUsdEl = document.getElementById('summary-profit-usd');
        const summaryTotalEl = document.getElementById('summary-total');
        const amountCurrencySymbolEl = document.getElementById('amount-currency-symbol');
        const inputLimitsEl = document.getElementById('input-limits');
        
        const selectedPlanInput = document.getElementById('selected-plan-input');
        const selectedSystemInput = document.getElementById('selected-system-input');

        let selectedPlan = null;
        let selectedCurrency = null;
        let selectedSystemId = null;

        function getPlanLimits(plan, currency) {
            if (!plan || !currency) return { min: 0, max: 0 };
            return {
                min: plan.min[currency] || 0,
                max: plan.max[currency] || 0
            };
        }
        
        function formatNumber(num, currency) {
            if (currency === 'USD') return num.toFixed(2);
            if (currency === 'BTC' || currency === 'ETH') return num.toFixed(8).replace(/\.?0+$/, "");
            return num.toFixed(4).replace(/\.?0+$/, "");
        }

        function calculate() {
            if (!selectedPlan || !selectedCurrency) {
                summaryProfitEl.textContent = '...';
                summaryTotalEl.textContent = '...';
                summaryProfitUsdEl.textContent = '';
                return;
            }

            const amount = parseFloat(String(amountInput.value).replace(',', '.')) || 0;
            const rateToUsd = rates[selectedCurrency] || 0;
            
            const profitPerAccrual = amount * selectedPlan.percent / 100;
            const totalProfit = profitPerAccrual * selectedPlan.count;
            const totalReturn = totalProfit + (selectedPlan.return === 1 ? amount : 0);
            const totalProfitInUsd = totalProfit * rateToUsd;
            
            summaryProfitEl.textContent = `+ ${formatNumber(totalProfit, selectedCurrency)} ${selectedCurrency}`;
            summaryTotalEl.textContent = `${formatNumber(totalReturn, selectedCurrency)} ${selectedCurrency}`;
            
            if (selectedCurrency !== 'USD') {
                 summaryProfitUsdEl.textContent = `≈ $${totalProfitInUsd.toFixed(2)}`;
            } else {
                 summaryProfitUsdEl.textContent = '';
            }
           
            summaryPlanEl.textContent = selectedPlan.description;
        }
        
        function updateAllLimitsDisplays() {
            if (!selectedCurrency) return;
            
            document.querySelectorAll('.plan-limits').forEach(el => {
                const planId = parseInt(el.dataset.planIdLimits);
                const plan = plans.find(p => p.id === planId);
                if(plan) {
                    const limits = getPlanLimits(plan, selectedCurrency);
                    if (limits.min > 0) {
                        el.textContent = `Min: ${limits.min} ${selectedCurrency}`;
                    } else {
                        el.textContent = '';
                    }
                }
            });
            
            const currentPlanLimits = getPlanLimits(selectedPlan, selectedCurrency);
            if(currentPlanLimits.min > 0) {
                inputLimitsEl.textContent = `Min: ${currentPlanLimits.min}, Max: ${currentPlanLimits.max > 0 ? currentPlanLimits.max : '∞'}`;
            } else {
                inputLimitsEl.textContent = '';
            }
        }

        // Event Listener for Plans
        plansContainer.addEventListener('click', (e) => {
            const planCard = e.target.closest('.plan-card');
            if (!planCard) return;

            plansContainer.querySelectorAll('.plan-card').forEach(card => card.classList.remove('selected'));
            planCard.classList.add('selected');
            
            const planId = parseInt(planCard.dataset.planId);
            selectedPlan = plans.find(p => p.id === planId);
            selectedPlanInput.value = planId;
            
            updateAllLimitsDisplays();
            calculate();
        });

        // Event Listener for Crypto Selection
        cryptoContainer.addEventListener('click', (e) => {
            const cryptoCard = e.target.closest('.crypto-card');
            if (!cryptoCard) return;

            cryptoContainer.querySelectorAll('.crypto-card').forEach(card => card.classList.remove('selected'));
            cryptoCard.classList.add('selected');
            
            selectedCurrency = cryptoCard.dataset.currency;
            selectedSystemId = cryptoCard.dataset.systemId;
            
            amountCurrencySymbolEl.textContent = selectedCurrency;
            selectedSystemInput.value = selectedSystemId;

            updateAllLimitsDisplays();
            calculate();
        });

        // Event Listener for Amount Input
        amountInput.addEventListener('input', calculate);

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

    </body></html>