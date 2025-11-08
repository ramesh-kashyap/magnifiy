     <style>
         .withdrawal-wrapper {
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

         .withdrawal-layout {
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
             background-color: #2c2c2c;

             border-radius: var(--border-radius);
             padding: 30px;
             box-shadow: 0 10px 40px rgba(48, 54, 59, 0.05);
             border: 1px solid var(--border-color);
         }

         .section-card h3 {
             font-size: 24px;
             margin-bottom: 25px;
         }

         .balance-grid {
             display: grid;
             grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
             gap: 20px;
         }

         .balance-card {
             display: flex;
             align-items: center;
             gap: 15px;
             background: linear-gradient(252deg, #0c0c0c 0%, #353434 21%, #2f2e2e 39%, #1a1a1a 100%);

             border: 2px solid var(--border-color);
             border-radius: 16px;
             padding: 20px;
             cursor: pointer;
             transition: all 0.3s ease;
             position: relative;
         }

         .balance-card:hover {
             transform: translateY(-5px);
             border-color: var(--sandy-brown);
         }

         .balance-card.selected {
             border-color: var(--sandy-brown);
             background: linear-gradient(252deg, #0c0c0c 0%, #353434 21%, #2f2e2e 39%, #1a1a1a 100%);

             box-shadow: 0 18px 48px rgba(0, 0, 0, .18), 0 0 0 2px color-mix(in oklab, var(--cp-accent), transparent 60%), 0 0 0 6px color-mix(in oklab, var(--cp-accent), transparent 88%);
         }

         .balance-card img {
             width: 48px;
             height: 48px;
         }

         .balance-card .balance-info {
             flex-grow: 1;
         }

         .balance-card .crypto-name {
             font-weight: 600;
             font-size: 18px;
             color: var(--sandy-brown);
         }

         .balance-card .crypto-amount {
             font-size: 16px;
             color: var(--text-muted);
         }

         .withdrawal-form-card {
             background-color: var(--card-dark-bg);
             color: var(--text-light);
             padding: 30px;
             border-radius: var(--border-radius);
             position: relative;
             overflow: hidden;
         }

         .withdrawal-form-card::before {
             content: "";
             position: absolute;
             inset: -1px;
             border-radius: var(--border-radius);
             background: var(--futuristic-glow);
             pointer-events: none;
             z-index: 0;
             opacity: 0.7;
         }

         .withdrawal-form-content {
             position: relative;
             z-index: 1;
             display: flex;
             flex-direction: column;
             gap: 20px;
         }

         .withdrawal-form-card h3 {
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

         .input-field {
             width: 100%;
             padding: 15px 20px;
             border-radius: 14px;
             border: 2px solid var(--dark-grey-lighter);
             background-color: #30363b;
             color: #fff;
             font-size: 16px;
             font-family: 'Inter', sans-serif;
             outline: none;
             transition: border-color 0.3s ease;
         }

         .input-field:focus {
             border-color: var(--sandy-brown);
         }

         .input-field[readonly] {
             background-color: #2a2f33;
             cursor: not-allowed;
         }

         .amount-input-wrapper {
             position: relative;
         }

         #amount-input {
             padding-left: 20px;
             padding-right: 70px;
             font-size: 20px;
             font-weight: 600;
         }

         .amount-input-currency {
             position: absolute;
             right: 20px;
             top: 50%;
             transform: translateY(-50%);
             color: var(--sandy-brown);
             font-weight: 700;
             font-size: 18px;
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

         .summary-row .value.receive {
             color: var(--sandy-brown);
             font-size: 22px;
         }

         .btn-withdraw {
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

         .btn-withdraw:hover {
             background-color: #fff;
             color: var(--dark-slate-grey);
             box-shadow: var(--glow-shadow);
         }

         .history-list {
             list-style: none;
             padding: 0;
             margin: 0;
             display: flex;
             flex-direction: column;
             gap: 15px;
         }

         .history-item {
             display: flex;
             align-items: center;
             gap: 15px;
             padding-bottom: 15px;
             border-bottom: 1px solid var(--border-color);
         }

         .history-item:last-child {
             border-bottom: none;
             padding-bottom: 0;
         }

         .history-item .icon {
             width: 44px;
             height: 44px;
             border-radius: 50%;
             display: grid;
             place-items: center;
             flex-shrink: 0;
             background-color: rgba(220, 53, 69, 0.1);
             color: #dc3545;
         }

         .history-item .details {
             flex-grow: 1;
             min-width: 0;
         }

         .history-item .details .address,
         .history-item .details .transaction {
             font-weight: 500;
             font-family: monospace;
             font-size: 14px;
             white-space: nowrap;
             overflow: hidden;
             text-overflow: ellipsis;
         }

         .history-item .details .transaction {
             font-size: 13px;
             color: var(--text-muted);
             margin-top: 2px;
         }

         .history-item .details .date {
             font-size: 14px;
             color: var(--text-muted);
             margin-top: 4px;
         }

         .history-item .info {
             text-align: right;
         }

         .history-item .amount {
             font-weight: 700;
             font-size: 18px;
             color: #dc3545;
         }

         .history-item .status {
             font-size: 14px;
             font-weight: 600;
             display: flex;
             align-items: center;
             justify-content: flex-end;
             gap: 6px;
         }

         .history-item .status::before {
             content: '';
             display: inline-block;
             width: 8px;
             height: 8px;
             border-radius: 50%;
         }

         .history-item .status.success {
             color: var(--status-success);
         }

         .history-item .status.success::before {
             background-color: var(--status-success);
         }

         .history-item .status.pending {
             color: var(--status-pending);
         }

         .history-item .status.pending::before {
             background-color: var(--status-pending);
         }

         /* ===================================================================
        ОБНОВЛЕННЫЕ СТИЛИ ДЛЯ МОДАЛЬНОГО ОКНА
        =================================================================== */
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
         }

         .btn-cancel:hover {
             background-color: #454c52;
             color: #fff;
         }

         /* ===================================================================
        АДАПТИВНЫЕ СТИЛИ (без изменений)
        =================================================================== */
         @media (max-width: 1200px) {
             .withdrawal-layout {
                 grid-template-columns: 1fr;
             }

             .sidebar {
                 position: static;
             }
         }

         @media (max-width: 767px) {
             .withdrawal-wrapper {
                 padding: 20px;
             }

             .page-header h1 {
                 font-size: 36px;
             }

             .page-header p {
                 font-size: 16px;
             }

             .withdrawal-layout,
             .main-content {
                 gap: 30px;
             }

             .section-card {
                 padding: 20px;
             }

             .balance-grid {
                 grid-template-columns: 1fr;
             }
         }


         /* критично для iOS/Safari: разрешить сжатие цепочки flex-детей */
         .tx,
         .tx .left,
         .details,
         .address,
         .transaction.tx-toggle {
             min-width: 0;
             max-width: 100%;
         }

         /* сам пункт списка */
         .tx {
             display: flex;
             align-items: center;
             gap: 12px;
         }

         /* левая часть с иконкой и текстом занимает всё доступное */
         .tx .left {
             display: flex;
             align-items: center;
             gap: 12px;
             flex: 1 1 auto;
         }

         /* внутри текста позволяем переносы */
         .details {
             flex: 1 1 auto;
             overflow: hidden;
         }

         .address {
             overflow-wrap: anywhere;
             word-break: break-word;
         }

         /* кнопка-хэш: по умолчанию одна строка с эллипсисом */
         .transaction.tx-toggle {
             background: none;
             border: 0;
             padding: 0;
             margin: 0;
             font: inherit;
             color: #2563eb;
             cursor: pointer;
             display: inline-flex;
             align-items: center;
             gap: 6px;
             max-width: 100%;
             vertical-align: top;
         }

         .transaction.tx-toggle .tx-text {
             display: inline-block;
             max-width: 100%;
             white-space: nowrap;
             overflow: hidden;
             text-overflow: ellipsis;
         }

         .transaction.tx-toggle:hover {
             text-decoration: underline;
         }

         /* в развернутом виде — многострочно, без переполнения */
         .transaction.tx-toggle.expanded {
             flex-wrap: wrap;
         }

         .transaction.tx-toggle.expanded .tx-text {
             white-space: normal;
             overflow-wrap: anywhere;
             word-break: break-word;
             /* fallback */
             word-break: break-all;
             /* ещё более агрессивный fallback */
         }

         /* бейджик "Скопировано" компактный, не ломает строки */
         .tx-copy-badge {
             font-size: 12px;
             color: #16a34a;
             border: 1px solid #cfe7d0;
             background: #f0fff4;
             border-radius: 6px;
             padding: 1px 6px;
         }

         /* сумма: пусть не тянет строку, при необходимости перенесётся на след. строку */
         .tx .amt {
             flex: 0 0 auto;
             margin-left: auto;
             max-width: 100%;
             white-space: nowrap;
             overflow: hidden;
             text-overflow: ellipsis;
         }

         /* Мобильный режим: разрешаем перенос всей карточки на 2 строки */
         @media (max-width: 560px) {
             .tx {
                 flex-wrap: wrap;
             }

             .tx .left {
                 flex: 1 1 100%;
                 min-width: 0;
             }

             .tx .amt {
                 margin-left: 0;
                 margin-top: 6px;
             }
         }

         /* Глобально: запрет горизонтального скролла и корректный box-sizing */
         * {
             box-sizing: border-box;
         }

         html,
         body {
             max-width: 100%;
             overflow-x: hidden;
         }

         /* История выплат: цепочка flex-детей должна сжиматься */
         .history-list {
             max-width: 100%;
             overflow-x: hidden;
         }

         .history-item {
             display: flex;
             align-items: center;
             gap: 15px;
             width: 100%;
         }

         .history-item,
         /* сам контейнер */
         .history-item .details,
         /* колонка с адресом/tx */
         .history-item .address,
         /* адрес кошелька */
         .history-item .transaction.tx-toggle {
             min-width: 0;
             max-width: 100%;
         }

         /* По умолчанию адрес/tx в одну строку с эллипсисом */
         .history-item .details .address,
         .history-item .details .transaction {
             white-space: nowrap;
             overflow: hidden;
             text-overflow: ellipsis;
         }

         /* Кнопка TX: разрешаем переносы при разворачивании */
         .transaction.tx-toggle {
             background: none;
             border: 0;
             padding: 0;
             margin: 0;
             font: inherit;
             color: #2563eb;
             cursor: pointer;
             display: inline-flex;
             align-items: center;
             gap: 6px;
             max-width: 100%;
             vertical-align: top;
         }

         .transaction.tx-toggle .tx-text {
             display: inline-block;
             max-width: 100%;
             white-space: nowrap;
             overflow: hidden;
             text-overflow: ellipsis;
         }

         .transaction.tx-toggle.expanded {
             flex-wrap: wrap;
         }

         .transaction.tx-toggle.expanded .tx-text {
             white-space: normal;
             overflow-wrap: anywhere;
             word-break: break-word;
             /* fallback */
             word-break: break-all;
             /* ещё более агрессивный fallback */
         }

         .tx-copy-badge {
             font-size: 12px;
             color: #16a34a;
             border: 1px solid #cfe7d0;
             background: #f0fff4;
             border-radius: 6px;
             padding: 1px 6px;
         }

         /* Правая колонка не тянет строку за экран */
         .history-item .info {
             flex: 0 0 auto;
             text-align: right;
             max-width: 100%;
             white-space: nowrap;
             overflow: hidden;
             text-overflow: ellipsis;
         }

         /* Мобилка: переносим строку на 2 ряда, правая колонка уходит вниз */
         @media (max-width: 560px) {
             .history-item {
                 flex-wrap: wrap;
                 align-items: flex-start;
             }

             .history-item .details {
                 flex: 1 1 100%;
                 min-width: 0;
             }

             .history-item .info {
                 margin-left: 0;
                 margin-top: 8px;
                 text-align: left;
                 white-space: normal;
             }
         }
     </style>

     <style>
         .withdraw-table {
             width: 100%;
             border-collapse: collapse;

             background-color: transparent;
         }

         .withdraw-table th,
         .withdraw-table td {
             padding: 8px;
             text-align: left;
             color: #fff;
             border-bottom: 1px solid #323232ff;
         }

         @media (max-width: 480px) {
             .withdraw-table {
                 margin: 0 auto;
                 display: block;
             }

             .withdraw-table th,
             .withdraw-table td {
                 font-size: 13px;
                 padding: 6px;
             }
         }
     </style>
     <main class="withdrawal-wrapper">
         <div class="page-header">
             <h1>Withdraw <span>Funds</span></h1>
             <p>Select your available balance, specify the amount and your
                 wallet address to receive funds.</p>
         </div>

         <form method="post" id="" action="{{route('user.Withdraw-Request')}}">
             @csrf


             <div class="withdrawal-layout">
                 <div class="main-content">
                     <section class="section-card">
                         <h3>1. Select a Balance to Withdraw</h3>
                         <div class="balance-grid " id="balance-container">
                             <div class="balance-card selected" data-currency="USDT"
                                 data-balance="0" data-system-id="23"
                                 data-system-name="USDT_BEP20"
                                 data-wallet-field="USDT_BEP20_USDT"
                                 data-has-wallet="false"
                                 data-wallet-value="{{$wallet->usdtBep20}}" data-decimals="2">

                                 <input type="radio" name="pSys" value="BEP20"
                                     id="sys-23" style="display:none;">

                                 <img src="{{asset('')}}assets/icons/usdt_bep20.png"
                                     alt="USDT_BEP20">
                                 <div class="balance-info">
                                     <div class="crypto-name">USDT
                                         BEP20</div>
                                     <div class="crypto-amount">USDT</div>
                                 </div>
                             </div>
                             <div class="balance-card " data-currency="USDT"
                                 data-balance="0" data-system-id="13"
                                 data-system-name="USDT_TRC20"
                                 data-wallet-field="USDT_TRC20_USDT"
                                 data-has-wallet="false"
                                 data-wallet-value="{{$wallet->usdtTrc20}}" data-decimals="2">

                                 <input type="radio" name="pSys" value="TRC20"
                                     id="sys-13" style="display:none;">

                                 <img src="{{asset('')}}assets/icons/usdt_trc20.png"
                                     alt="USDT_TRC20">
                                 <div class="balance-info">
                                     <div class="crypto-name">USDT
                                         TRC20</div>
                                     <div class="crypto-amount"> USDT</div>
                                 </div>
                             </div>


                         </div>
                     </section>

                     <section class="section-card">
                         <h3>Recent Withdrawals</h3>

                         @if($withdrawals->isEmpty())
                         <p style="text-align: center; color: var(--text-muted);">
                             No withdrawal history yet.
                         </p>
                         @else
                         <div style="
                             overflow-x:auto;
                            ">
                             <table class="withdraw-table">
                                 <thead>
                                     <tr>
                                         <th>Sr.no</th>
                                         <th>Amount</th>
                                         <th>Status</th>
                                         <th>Date</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     @foreach($withdrawals as $key => $withdraw)
                                     <tr>
                                         <td>{{ $key + 1 }}</td>
                                         <td>${{ number_format($withdraw->amount, 2) }}</td>
                                         <td style="color:
                                           {{ $withdraw->status == 'completed' ? 'green' : ($withdraw->status == 'pending' ? 'orange' : 'red') }}">
                                             {{ ucfirst($withdraw->status) }}
                                         </td>
                                         <td>{{ $withdraw->created_at->format('d M Y') }}</td>
                                     </tr>
                                     @endforeach
                                 </tbody>
                             </table>

                         </div>
                         @endif
                     </section>


                 </div>

                 <div class="sidebar">
                     <section class="withdrawal-form-card">
                         <div class="withdrawal-form-content">
                             <h3>2. Enter Details</h3>
                             <div class="input-group">
                                 <label for="amount-input">Amount to
                                     Withdraw</label>
                                 <div class="amount-input-wrapper">
                                     <input type="number" class="input-field"
                                         id="amount-input" name="amount"
                                         placeholder="0.00" step="any"
                                         required>
                                     <span class="amount-input-currency"
                                         id="amount-currency-symbol">USDT</span>
                                 </div>
                                 <small
                                     style="color: var(--text-muted); font-size: 12px;">Available:
                                     <span id="">{{ Auth::user()->available_balance() }}

                                         USDT</span></small>
                             </div>
                             <div class="input-group">
                                 <label for="wallet-address">Your Wallet
                                     Address (Specify in the
                                     settings)</label>
                                 <input type="text" class="input-field"
                                     id="wallet-address" value="" name="walletAddress" required
                                     placeholder="Select a balance to see address"
                                     readonly>
                             </div>

                             <div class="summary-block">
                                 <h3>3. Confirm Withdrawal</h3>

                                 <div class="summary-row">

                                     <span class="label">You will
                                         receive</span>
                                     <span class="value receive"
                                         id="summary-receive">0.00000000
                                         USDT</span>
                                 </div>
                             </div>
                             <!-- OTP Modal -->
                             <div id="wallet-modal" class="modal-overlay">
                                 <div class="modal-content">
                                     <h3>Verify OTP</h3>
                                     <p>Please enter the OTP sent to your registered email.</p>
                                     <div class="input-group">
                                         <label for="otp-input" class="input-group-label">Verification Code</label>
                                         <input id="otp-input" class="input-field" name="code" type="text" placeholder="Enter verification code" required>
                                     </div>
                                     <div class="modal-buttons">
                                         <button type="button" id="modal-close-btn" class="btn-withdraw btn-cancel" style="font-family: Anta;">Cancel</button>
                                         <button type="button" id="verify-otp-btn" class="btn-withdraw" style="font-family: Anta;">Submit</button>
                                     </div>
                                 </div>
                             </div>

                             <button type="button" id="send-otp-btn" class="btn-withdraw" style="font-family: Anta;">Confirm</button>

                             <button type="submit" id="save-wallet-btn" class="btn-withdraw" style="display:none;font-family: Anta;">Withdraw</button>

                         </div>
                     </section>
                 </div>
             </div>
         </form>
         @include('partials.notify')

     </main>

     <div id="wallet-modal" class="modal-overlay">
         <div class="modal-content">
             <form id="modal-wallet-form"
                 action="" method="post">

                 <h3>Wallet Required</h3>
                 <p>
                     TooDRAW to <strong id="modal-system-name-wrapper"><span
                             id="modal-system-name"></span></strong>,
                     You Need to Save your Wallet Address First.</p>
                 <div id="modal-wallets-container" class="input-group">

                 </div>
                 <div class="modal-buttons">
                     <button type="button" id="modal-close-btn"
                         class="btn-withdraw btn-cancel">Cancel</button>
                     <button type="submit" class="btn-withdraw">Save
                         Wallet</button>
                 </div>
             </form>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <script>
         $(document).ready(function() {

             const modal = $('#wallet-modal');
             const sendOtpBtn = $('#send-otp-btn');
             const saveWalletBtn = $('#save-wallet-btn');
             const otpStatus = $('#otp-status');
             const otpInput = $('#otp-input');
             const userEmail = $('#userEmail').val();

             sendOtpBtn.on('click', function() {

                 $.ajax({
                     url: "{{ route('user.send-otp') }}",
                     method: "POST",
                     data: {
                         _token: "{{ csrf_token() }}",
                         email: userEmail
                     },
                     beforeSend: function() {
                         sendOtpBtn.text('Sending...');
                         sendOtpBtn.prop('disabled', true);
                     },
                     success: function(response) {
                         notify('success', '✅ OTP Sent Successfully:');
                         modal.addClass('visible'); // ✅ show modal properly
                     },
                     error: function(xhr) {
                         // console.error("❌ Error sending OTP:", xhr.responseText);
                         notify('warning', 'Failed to send OTP. Please check console for details.');

                     },
                     complete: function() {
                         sendOtpBtn.text('Confirm');
                         sendOtpBtn.prop('disabled', false);
                     }
                 });
             });

             // ✅ Step 2: Close modal manually
             $('#modal-close-btn').on('click', function() {
                 // console.log("❎ User closed OTP modal.");
                 modal.removeClass('visible');
             });

             // ✅ Step 3: Verify OTP (only hide popup and unlock Save Wallet)
             $('#verify-otp-btn').on('click', function() {
                 const code = otpInput.val().trim();
                 // console.log("🔢 OTP entered:", code);

                 if (!code) {
                     notify('warning', '⚠️ Please enter the OTP!');
                     return;
                 }

                 // console.log("✅ OTP entered, hiding popup...");
                 modal.removeClass('visible'); // ✅ hide modal on verify

                 otpStatus.show();
                 sendOtpBtn.hide();
                 saveWalletBtn.show();

                 // console.log("🎯 OTP Verified (Frontend). Save Wallets button now visible.");
             });

             // Optional: clicking outside modal closes it
             $(window).on('click', function(e) {
                 if ($(e.target).is(modal)) {
                     // console.log("🖱️ Clicked outside modal, closing it.");
                     modal.removeClass('visible');
                 }
             });
         });
     </script>

     <script>
         const ALL_WALLET_FIELDS = [{
             "name": "USDT_TRC20_USDT",
             "title": "USDT_TRC20, USDT",
             "value": ""
         }, {
             "name": "USDT_BEP20_USDT",
             "title": "USDT_BEP20, USDT",
             "value": ""
         }];
         const T = (key) => key;
     </script>

     <script>
         document.addEventListener('DOMContentLoaded', () => {
             const form = document.getElementById('payment-form');
             const balanceContainer = document.getElementById('balance-container');
             const balanceCards = document.querySelectorAll('.balance-card');
             const amountInput = document.getElementById('amount-input');
             const availableBalanceEl = document.getElementById('available-balance');
             const amountCurrencySymbolEl = document.getElementById('amount-currency-symbol');
             const walletAddressInput = document.getElementById('wallet-address');
             const summaryReceiveEl = document.getElementById('summary-receive');

             const modal = document.getElementById('wallet-modal');
             const modalCloseBtn = document.getElementById('modal-close-btn');
             const modalSystemName = document.getElementById('modal-system-name');
             const modalWalletsContainer = document.getElementById('modal-wallets-container');

             let selectedCard = null;
             let selectedCrypto = '';
             let selectedBalance = 0;
             let selectedDecimals = 8;

             /**
              * Пересчитывает итоговую сумму к получению (без комиссии)
              */
             function calculate() {
                 const amount = parseFloat(amountInput.value) || 0;
                 const chargePercent = 5;

                 // 5% charge
                 const charge = (amount * chargePercent) / 100;
                 const netAmount = amount - charge;

                 // Update UI
                 const decimals = selectedDecimals || 2;
                 const currency = selectedCrypto || "USDT";

                 //  document.getElementById('summary-amount').textContent = `${amount.toFixed(decimals)} ${currency}`;
                 //  document.getElementById('summary-charge').textContent = `${charge.toFixed(decimals)} ${currency}`;
                 document.getElementById('summary-receive').textContent = `${netAmount.toFixed(decimals)} ${currency}`;
             }



             /**
              * Показывает модальное окно для сохранения кошелька
              */
             function showModal(systemName, fieldNameToShow) {
                 modalSystemName.innerHTML = systemName || ''; // Используем innerHTML для span
                 let inputsHTML = '';

                 ALL_WALLET_FIELDS.forEach(field => {
                     const isVisible = field.name.trim() === fieldNameToShow.trim();
                     if (isVisible) {
                         inputsHTML += `
                        <div>
                            <label for="modal-wallet-input" class="input-group-label">${systemName || ''} Wallet</label>
                            <input id="modal-wallet-input" class="input-field" name="${field.name}" type="text" value="{{$wallet->usdtBep20}}" placeholder="Enter your wallet address" required>
                        </div>
                    `;
                     } else {
                         inputsHTML += `<input type="hidden" name="${field.name}" value="{{$wallet->usdtTrc20}}">`;
                     }
                 });

                 modalWalletsContainer.innerHTML = inputsHTML;
                 if (modal) modal.classList.add('visible');
             }

             function hideModal() {
                 if (modal) modal.classList.remove('visible');
             }

             balanceContainer.addEventListener('click', (e) => {
                 const balanceCard = e.target.closest('.balance-card');
                 if (!balanceCard) return;

                 balanceCards.forEach(card => card.classList.remove('selected'));
                 balanceCard.classList.add('selected');
                 selectedCard = balanceCard;

                 selectedCrypto = balanceCard.dataset.currency;
                 selectedBalance = parseFloat(balanceCard.dataset.balance);
                 selectedDecimals = parseInt(balanceCard.dataset.decimals);

                 const radio = balanceCard.querySelector('input[type="radio"]');
                 if (radio) radio.checked = true;

                 amountCurrencySymbolEl.textContent = selectedCrypto;
                 //  availableBalanceEl.textContent = `${selectedBalance.toFixed(selectedDecimals)} ${selectedCrypto}`;
                 walletAddressInput.value = balanceCard.dataset.walletValue || 'Wallet not saved';
                 amountInput.value = '';

                 calculate();
             });
             // ✅ Default select BEP20 on load (keep old code as it is)
             window.addEventListener('DOMContentLoaded', () => {
                 const defaultCard = document.querySelector('.balance-card[data-system-name="USDT_BEP20"]');
                 if (defaultCard) {
                     defaultCard.classList.add('selected');

                     const radio = defaultCard.querySelector('input[type="radio"]');
                     if (radio) radio.checked = true;

                     selectedCard = defaultCard;
                     selectedCrypto = defaultCard.dataset.currency;
                     selectedBalance = parseFloat(defaultCard.dataset.balance);
                     selectedDecimals = parseInt(defaultCard.dataset.decimals);

                     walletAddressInput.value = defaultCard.dataset.walletValue || 'Wallet not saved';
                     amountCurrencySymbolEl.textContent = selectedCrypto;
                     availableBalanceEl.textContent = `${selectedBalance.toFixed(selectedDecimals)} ${selectedCrypto}`;

                     calculate();
                 }
             });

             amountInput.addEventListener('input', calculate);

             form.addEventListener('submit', (e) => {
                 if (!selectedCard) {
                     alert('Please select a balance to withdraw from.');
                     e.preventDefault();
                     return;
                 }

                 const hasWallet = selectedCard.dataset.hasWallet === 'true';
                 if (!hasWallet) {
                     e.preventDefault();
                     const systemName = selectedCard.dataset.systemName || '';
                     const fieldName = selectedCard.dataset.walletField || '';
                     if (fieldName) {
                         showModal(systemName, fieldName);
                     } else {
                         alert('Error: Could not determine wallet field.');
                     }
                 }
             });

             if (modalCloseBtn) modalCloseBtn.addEventListener('click', hideModal);
             if (modal) modal.addEventListener('click', (e) => {
                 if (e.target === modal) hideModal();
             });

             if (balanceCards.length > 0) {
                 balanceCards[0].click();
             }
         });
     </script>

     <script>
         (function() {
             document.addEventListener('click', function(e) {
                 const el = e.target.closest('.tx-toggle');
                 if (!el) return;

                 const textEl = el.querySelector('.tx-text');
                 if (!textEl) return;

                 const full = el.dataset.tx || '';
                 const short = el.dataset.short || '';
                 const expanded = el.dataset.expanded === '1';

                 textEl.textContent = expanded ? short : full;
                 el.dataset.expanded = expanded ? '0' : '1';
                 el.classList.toggle('expanded', !expanded);

                 if (full) {
                     (navigator.clipboard && navigator.clipboard.writeText) ?
                     navigator.clipboard.writeText(full).then(() => showBadge(el)): showBadge(el, true);
                 }
             });

             function showBadge(el, isErr) {
                 const b = el.querySelector('.tx-copy-badge');
                 if (!b) return;
                 b.textContent = isErr ? 'Failed to copy' : 'Copied';
                 b.hidden = false;
                 clearTimeout(el._badgeTimer);
                 el._badgeTimer = setTimeout(() => {
                     b.hidden = true;
                 }, 1600);
             }
         })();
     </script>

     </body>

     </html>