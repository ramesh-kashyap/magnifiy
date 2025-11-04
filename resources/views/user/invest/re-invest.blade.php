
        <style>
    /* ===================================================================
           REINVEST PAGE LAYOUT
           =================================================================== */
        .reinvest-wrapper {
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

        .reinvest-layout {
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

        /* ===================================================================
           1. SELECT BALANCE
           =================================================================== */
        .balance-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 20px;
        }
        .balance-card {
            background: linear-gradient(252deg, #0c0c0c 0%, #353434 21%, #2f2e2e 39%, #1a1a1a 100%);
            border: 2px solid var(--border-color);
            border-radius: 16px;
            padding: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .balance-card:hover {
            transform: translateY(-5px);
            border-color: var(--sandy-brown);
        }
        .balance-card.selected {
            border-color: var(--sandy-brown);
            transform: translateY(-5px);
                            box-shadow: 0 18px 48px rgba(0, 0, 0, .18), 0 0 0 2px 
 color-mix(in oklab, var(--cp-accent), transparent 60%), 0 0 0 6px 
 color-mix(in oklab, var(--cp-accent), transparent 88%);
        }
        .balance-card-content { display: flex; align-items: center; gap: 15px; }
        .balance-card img { width: 40px; height: 40px; }
        .balance-info .crypto-name { font-weight: 600; font-size: 18px; color: var(--sandy-brown); }
        .balance-info .crypto-amount { font-size: 16px; color: var(--text-muted); }
        .balance-info .crypto-usd { font-size: 12px; color: var(--status-success); font-weight: 500; }


        /* ===================================================================
           2. REINVEST FORM (SIDEBAR)
           =================================================================== */
        .reinvest-form-card {
            background-color: var(--card-dark-bg); color: var(--text-light); padding: 30px;
            border-radius: var(--border-radius); position: relative; overflow: hidden;
        }
        .reinvest-form-card::before {
            content: ""; position: absolute; inset: -1px; border-radius: var(--border-radius);
            background: var(--futuristic-glow); pointer-events: none; z-index: 0; opacity: 0.7;
        }
        .reinvest-form-content {
            position: relative; z-index: 1; display: flex; flex-direction: column; gap: 20px;
        }
        .reinvest-form-card h3 { color: #fff; margin-bottom: 0; }

        .input-group { display: flex; flex-direction: column; gap: 8px; }
        .input-group label { font-size: 14px; color: var(--text-muted); font-weight: 500; }

        .amount-input-wrapper { position: relative; }
        .amount-input {
            width: 100%; padding: 15px 20px; border-radius: 14px;
            border: 2px solid var(--dark-grey-lighter); background-color: #30363b; color: #fff;
            font-size: 20px; font-weight: 600; outline: none; transition: border-color 0.3s ease;
        }
        .amount-input:focus { border-color: var(--sandy-brown); }

        .plan-selector { display: flex; flex-direction: column; gap: 10px; }
        .plan-option {
            display: flex; justify-content: space-between; align-items: center;
            padding: 15px; background: var(--dark-grey-lighter); border-radius: 12px;
            border: 2px solid transparent; cursor: pointer; transition: all .3s ease;
        }
        .plan-option:hover { border-color: var(--sandy-brown); transform: scale(1.02); }

        .plan-option.selected {
            border-color: var(--sandy-brown);
            background-color: var(--dark-slate-grey);
            box-shadow: 0 0 15px rgba(244, 161, 89, 0.3);
            transform: scale(1.02);
        }
        .plan-option .plan-name { font-weight: 600; }
        .plan-option .plan-term { font-size: 14px; color: var(--text-muted); }

        .summary-block {
            border-top: 1px solid var(--dark-grey-lighter); padding-top: 20px;
            display: flex; flex-direction: column; gap: 15px;
        }
        .summary-row { display: flex; justify-content: space-between; align-items: center; }
        .summary-row .label { color: var(--text-muted); }
        .summary-row .value { font-size: 18px; font-weight: 600; color: #fff; }
        .summary-row .value.profit { color: var(--status-success); }
        .summary-row .value.total { color: var(--sandy-brown); font-size: 22px; }

        .btn-reinvest {
            background-color: var(--sandy-brown); color: var(--dark-slate-grey);
            padding: 18px; text-align: center; border-radius: 14px;
            font-family: 'Bowler', sans-serif; font-size: 18px;
            cursor: pointer; transition: all 0.3s ease; border: none; width: 100%;
        }
        .btn-reinvest:hover {
            background-color: #fff; color: var(--dark-slate-grey); box-shadow: var(--glow-shadow);
        }

        /* ===================================================================
           3. RECENT REINVESTMENTS
           =================================================================== */

        .history-table-wrapper {
            display: block;
            width: 100%;
            overflow-x: auto; 
            -webkit-overflow-scrolling: touch; 
        }
        .history-table {
            width: 100%;
            min-width: 600px; 
            border-collapse: collapse;
        }
        .history-table th, .history-table td { padding: 15px; text-align: left; border-bottom: 1px solid var(--border-color); }
        .history-table thead th {
            font-family: 'Inter', sans-serif; font-size: 14px; color: var(--text-muted);
            font-weight: 500; text-transform: uppercase;
        }
        .history-table tbody tr:hover { background-color: var(--background); }
        .history-table .plan-name { font-weight: 600; }
        .history-table .amount-value { font-weight: 600; }
        .history-table .profit-value { font-weight: 600; color: var(--status-success); }

        /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
        @media (max-width: 1200px) {
            .reinvest-layout { grid-template-columns: 1fr; }
            .sidebar { position: static; }
        }
        @media (max-width: 991px) {
            .reinvest-wrapper { padding: 30px 40px; }
        }
        @media (max-width: 767px) {
            .reinvest-wrapper { padding: 20px; }
            .page-header h1 { font-size: 36px; }
            .page-header p { font-size: 16px; }
            .reinvest-layout { gap: 30px;     display: block;}
            .section-card { padding: 20px;         margin-bottom: 20px;}
            .balance-grid { grid-template-columns: 1fr; }
        }
        /* ===== Mobile overflow fixes ===== */
html, body {
  overflow-x: hidden;
}

img, svg, canvas, video {
  max-width: 100%;
  height: auto;
  display: block;
}

.wrap {
  max-width: 780px;
  margin: 0 auto;
  padding: 22px 14px 44px; 
}

.card {
  margin: 0;
  overflow: hidden;
}

.toggle {
  margin-left: -2px; 
  margin-right: -2px;
}

.tag {
  max-width: 100%;
  white-space: normal;   
  word-break: break-word;
}

.row { 
  min-width: 0; 
}

.inp {
  width: 100%;
  max-width: 100%;
  min-width: 0;    
  box-sizing: border-box;
}

.actions-row {
  display: flex;
  flex-wrap: wrap; 
  gap: 10px;
}

.actions-row > .btn {
  flex: 1 1 240px; 
  min-width: 0;
}

@media (max-width: 520px) {
  .title { font-size: 22px; }
  .btn { padding: .8rem 1rem; }
}

    </style>

        <main class="reinvest-wrapper">
            <div class="page-header">
                <h1>Reinvest <span>from Balance</span></h1>
                <p>Use your available balance to start a new investment plan
                    without making a new deposit.</p>
                <br>
                <p style="
    color: #00a900;
">Your upline will also receive a referral reward when you deposit from your
                    balance.</p> </div>

            <form id="reinvest-form" action="/handlers/user/deposit.php"
                method="post">
                <input type="hidden" name="csrf"
                    value="901a7f730969f8c29b5e1d9657bf2775">
                <input type="hidden" name="from" value="/user/deposit/"> <input
                    type="hidden" name="reinvest" value="1">
                <input type="hidden" name="plan" id="selected-plan-input"
                    value="2">
                <input type="hidden" name="system" id="selected-system-input"
                    value="1">

                <div class="reinvest-layout">
                    <div class="main-content">
                        <section class="section-card">
                            <h3>1. Select Balance for Reinvestment</h3>
                            <div class="balance-grid" id="balance-container">
                                <div class="balance-card selected"
                                    data-currency="BTC" data-balance="0"
                                    data-system-id="1">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/bitcoin.png"
                                            alt="BitCoin">
                                        <div class="balance-info">
                                            <div
                                                class="crypto-name">BitCoin</div>
                                            <div class="crypto-amount">0
                                                BTC</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="LTC"
                                    data-balance="0" data-system-id="2">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/litecoin.png"
                                            alt="LiteCoin">
                                        <div class="balance-info">
                                            <div
                                                class="crypto-name">LiteCoin</div>
                                            <div class="crypto-amount">0
                                                LTC</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="DOGE"
                                    data-balance="0" data-system-id="3">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/dogecoin.png"
                                            alt="DogeCoin">
                                        <div class="balance-info">
                                            <div
                                                class="crypto-name">DogeCoin</div>
                                            <div class="crypto-amount">0
                                                DOGE</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="ETH"
                                    data-balance="0" data-system-id="4">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/ethereum.png"
                                            alt="Ethereum">
                                        <div class="balance-info">
                                            <div
                                                class="crypto-name">Ethereum</div>
                                            <div class="crypto-amount">0
                                                ETH</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="XRP"
                                    data-balance="0" data-system-id="9">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/ripple.png"
                                            alt="Ripple">
                                        <div class="balance-info">
                                            <div
                                                class="crypto-name">Ripple</div>
                                            <div class="crypto-amount">0
                                                XRP</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="TRX"
                                    data-balance="0" data-system-id="10">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/tron.png"
                                            alt="TRON">
                                        <div class="balance-info">
                                            <div class="crypto-name">TRON</div>
                                            <div class="crypto-amount">0
                                                TRX</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="BNB"
                                    data-balance="0" data-system-id="12">
                                    <div class="balance-card-content">
                                        <img
                                            src="{{asset('')}}assets/icons/binancecoin.png"
                                            alt="BinanceCoin">
                                        <div class="balance-info">
                                            <div
                                                class="crypto-name">BinanceCoin</div>
                                            <div class="crypto-amount">0
                                                BNB</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="USDT"
                                    data-balance="0" data-system-id="13">
                                    <div class="balance-card-content">
                                        <img
                                            src="{{asset('')}}assets/icons/usdt_trc20.png"
                                            alt="USDT_TRC20">
                                        <div class="balance-info">
                                            <div class="crypto-name">USDT
                                                TRC20</div>
                                            <div class="crypto-amount">0
                                                USDT</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="USDT"
                                    data-balance="0" data-system-id="23">
                                    <div class="balance-card-content">
                                        <img
                                            src="{{asset('')}}assets/icons/usdt_bep20.png"
                                            alt="USDT_BEP20">
                                        <div class="balance-info">
                                            <div class="crypto-name">USDT
                                                BEP20</div>
                                            <div class="crypto-amount">0
                                                USDT</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="USDT"
                                    data-balance="0" data-system-id="24">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/usdt_ton.png"
                                            alt="USDT_TON">
                                        <div class="balance-info">
                                            <div class="crypto-name">USDT
                                                TON</div>
                                            <div class="crypto-amount">0
                                                USDT</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="balance-card" data-currency="TON"
                                    data-balance="0" data-system-id="26">
                                    <div class="balance-card-content">
                                        <img src="{{asset('')}}assets/icons/ton.png"
                                            alt="TON">
                                        <div class="balance-info">
                                            <div class="crypto-name">TON</div>
                                            <div class="crypto-amount">0
                                                TON</div>
                                            <div class="crypto-usd">≈
                                                $0.00</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="section-card">
                            <h3>Recent Reinvestments</h3>
                            <div class="history-table-wrapper">
                                <table class="history-table">
                                    <thead>
                                        <tr>

                                            <th>Amount</th>
                                            <th>Accruals</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td colspan="5"
                                                style="text-align:center; color: var(--text-muted);">No
                                                reinvestment history.</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>

                    <div class="sidebar">
                        <section class="reinvest-form-card">
                            <div class="reinvest-form-content">
                                <h3>2. Configure Reinvestment</h3>

                                <div class="input-group">
                                    <label for="amount-input">Amount to
                                        Reinvest</label>
                                    <div class="amount-input-wrapper">
                                        <input type="number"
                                            class="amount-input"
                                            id="amount-input" name="amount"
                                            placeholder="0.00" step="any"
                                            required>
                                    </div>
                                    <small
                                        style="color: var(--text-muted); font-size: 12px;">Available:
                                        <span id="available-balance">0
                                            BTC</span></small>
                                    <div id="amount-limits"
                                        style="color: var(--text-muted); font-size: 12px; min-height: 16px;"></div>
                                </div>

                                <div class="input-group">
                                    <label>Select New Plan</label>
                                    <div class="plan-selector"
                                        id="plan-selector">
                                        <div class="plan-option selected"
                                            data-plan-id="2">
                                            <div>
                                                <div class="plan-name">TeMining:
                                                    Hash Key</div>
                                                <div class="plan-term">within 24
                                                    hours</div>
                                            </div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"><path
                                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path></svg>
                                        </div>
                                        <div class="plan-option"
                                            data-plan-id="3">
                                            <div>
                                                <div class="plan-name">TeMining:
                                                    Cipher Rig</div>
                                                <div class="plan-term">within 24
                                                    hours</div>
                                            </div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"><path
                                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path></svg>
                                        </div>
                                        <div class="plan-option"
                                            data-plan-id="4">
                                            <div>
                                                <div class="plan-name">TeMining:
                                                    Enigma Protocol</div>
                                                <div class="plan-term">in 7
                                                    days</div>
                                            </div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"><path
                                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path></svg>
                                        </div>
                                        <div class="plan-option"
                                            data-plan-id="5">
                                            <div>
                                                <div class="plan-name">TeMining:
                                                    Genesis Code</div>
                                                <div class="plan-term">in 12
                                                    days</div>
                                            </div>
                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24"
                                                fill="currentColor"
                                                viewBox="0 0 16 16"><path
                                                    d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"></path></svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="summary-block">
                                    <h3>3. Review and Confirm</h3>
                                    <div class="summary-row">
                                        <span class="label">Selected Plan</span>
                                        <span class="value"
                                            id="summary-plan-name">TeMining:
                                            Hash Key</span>
                                    </div>
                                    <div class="summary-row">
                                        <span class="label">Est. Profit</span>
                                        <span class="value profit"
                                            id="summary-profit">$ 0.00</span>
                                    </div>
                                    <div class="summary-row">
                                        <span class="label">Total Return</span>
                                        <span class="value total"
                                            id="summary-total">$ 0.00</span>
                                    </div>
                                </div>

                                <button class="btn-reinvest"
                                    type="submit">Reinvest Now</button>
                            </div>
                        </section>
                    </div>
                </div>
            </form>
        </main>

        <script>
        const ALL_PLANS = [{"id":2,"name":"TeMining: Hash Key","description":"TeMining: Hash Key","percent":4.5,"count":24,"seconds":3600,"min":[],"max":[],"return":0},{"id":3,"name":"TeMining: Cipher Rig","description":"TeMining: Cipher Rig","percent":114,"count":1,"seconds":86400,"min":[],"max":[],"return":0},{"id":4,"name":"TeMining: Enigma Protocol","description":"TeMining: Enigma Protocol","percent":300,"count":1,"seconds":604800,"min":[],"max":[],"return":0},{"id":5,"name":"TeMining: Genesis Code","description":"TeMining: Genesis Code","percent":1200,"count":1,"seconds":1036800,"min":[],"max":[],"return":0}];
        const CRYPTO_PRICES_USD = {"BTC":122988.2,"ETH":4539.5,"USDT":1,"TON":2.81,"LTC":120,"XRP":3,"TRX":0.34,"BNB":1168,"USDC":1,"USD":1,"DOGE":0.26};
    </script>
        <script>
    document.addEventListener('DOMContentLoaded', () => {
        const balanceContainer = document.getElementById('balance-container');
        const planSelector = document.getElementById('plan-selector');
        const amountInput = document.getElementById('amount-input');

        const availableBalanceEl = document.getElementById('available-balance');
        const amountLimitsEl = document.getElementById('amount-limits');
        const summaryPlanNameEl = document.getElementById('summary-plan-name');
        const summaryProfitEl = document.getElementById('summary-profit');
        const summaryTotalEl = document.getElementById('summary-total');

        const selectedPlanInput = document.getElementById('selected-plan-input');
        const selectedSystemInput = document.getElementById('selected-system-input');

        let selectedCrypto = '';
        let selectedSystemId = null;
        let selectedPlanId = null;

        function calculate() {
            const plan = ALL_PLANS.find(p => p.id === selectedPlanId);
            if (!plan || !selectedCrypto) {
                summaryPlanNameEl.textContent = 'None';
                summaryProfitEl.textContent = '$ 0.00';
                summaryTotalEl.textContent = '$ 0.00';
                return;
            };

            summaryPlanNameEl.textContent = plan.name;

            const amount = parseFloat(amountInput.value) || 0;
            const price = CRYPTO_PRICES_USD[selectedCrypto] || 0;
            const amountUSD = amount * price;

            const accruals = plan.count === 0 ? 1 : plan.count;
            const grossReturn = amountUSD * (plan.percent / 100) * accruals;
            const totalReturn = grossReturn + (plan.return === 1 ? amountUSD : 0);
            const profit = totalReturn - amountUSD;

            summaryProfitEl.textContent = `$ ${profit.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
            summaryTotalEl.textContent = `$ ${totalReturn.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 })}`;
        }

        function updatePlanLimits() {
            const plan = ALL_PLANS.find(p => p.id === selectedPlanId);
            if (!plan || !selectedCrypto) {
                amountLimitsEl.textContent = '';
                return;
            }

            const min = plan.min[selectedCrypto] || 0;
            const max = plan.max[selectedCrypto] || 0;

            if (min > 0) {
                let limitText = `Min: ${min} ${selectedCrypto}`;
                if (max > 0 && max !== Infinity) {
                    limitText += ` / Max: ${max} ${selectedCrypto}`;
                }
                amountLimitsEl.textContent = limitText;
            } else {
                amountLimitsEl.textContent = '';
            }
        }

        balanceContainer.addEventListener('click', (e) => {
            const balanceCard = e.target.closest('.balance-card');
            if (!balanceCard) return;

            balanceContainer.querySelectorAll('.balance-card').forEach(card => card.classList.remove('selected'));
            balanceCard.classList.add('selected');

            selectedCrypto = balanceCard.dataset.currency;
            selectedSystemId = balanceCard.dataset.systemId;
            const selectedBalance = parseFloat(balanceCard.dataset.balance);

            selectedSystemInput.value = selectedSystemId;
            availableBalanceEl.textContent = `${selectedBalance} ${selectedCrypto}`;

            updatePlanLimits();
            calculate();
        });

        planSelector.addEventListener('click', (e) => {
            const planOption = e.target.closest('.plan-option');
            if (!planOption) return;

            planSelector.querySelectorAll('.plan-option').forEach(opt => opt.classList.remove('selected'));
            planOption.classList.add('selected');

            selectedPlanId = parseInt(planOption.dataset.planId);
            selectedPlanInput.value = selectedPlanId;

            updatePlanLimits();
            calculate();
        });

        amountInput.addEventListener('input', calculate);

        const firstBalance = balanceContainer.querySelector('.balance-card');
        if (firstBalance) {
            firstBalance.click();
        }

        const firstPlan = planSelector.querySelector('.plan-option');
        if (firstPlan) {
            firstPlan.click();
        }
    });
    </script>

    </body></html>