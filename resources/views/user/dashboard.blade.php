<style>
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
            color: #f1f1f1;
    }


    .history-table th,
    .history-table td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid var(--border-color);
    }

    .history-table thead th {
        font-family: 'Inter', sans-serif;
        font-size: 14px;
        color: var(--text-muted);
        font-weight: 500;
        text-transform: uppercase;
    }

    .history-table tbody tr:hover {
        /* background-color: var(--background); */
    }

    .history-table .plan-name {
        font-weight: 600;
    }

    .history-table .amount-value {
        font-weight: 600;
    }

    .history-table .profit-value {
        font-weight: 600;
        color: var(--status-success);
    }

    /* ===================================================================
           RESPONSIVE STYLES
           =================================================================== */
    @media (max-width: 1200px) {
        .reinvest-layout {
            grid-template-columns: 1fr;
        }

        .sidebar {
            position: static;
        }
    }

    @media (max-width: 991px) {
        .reinvest-wrapper {
            padding: 30px 40px;
        }
    }

    @media (max-width: 767px) {
        .reinvest-wrapper {
            padding: 20px;
        }

        .page-header h1 {
            font-size: 36px;
        }

        .page-header p {
            font-size: 16px;
        }

        .reinvest-layout {
            gap: 30px;
            display: block;
        }

        .section-card {
            padding: 20px;
            margin-bottom: 20px;
        }

        .balance-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
<main class="dashboard-wrapper">
    <div class="dashboard-header">
        <h1>Welcome back, <span>{{Auth::user()->name}}</span></h1>
        <div class="dashboard-quick-actions">
            <a href="/user/invest" class="btn-action btn-deposit">
                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <line
                        x1="12" y1="5" x2="12" y2="19"></line>
                    <line
                        x1="5" y1="12" x2="19" y2="12"></line>
                </svg>
                Make a Deposit
            </a>
            <a href="/user/payment" class="btn-action btn-withdraw">
                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                    height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path
                        d="M21 12H3"></path>
                    <path
                        d="M12 19l-7-7 7-7"></path>
                </svg>
                Withdraw Funds
            </a>
        </div>
    </div>

    <section class="main-stats-grid">
        <div class="stat-card">
            <div class="stat-card-content">
                <span class="label">Total Balance</span>
                <div class="value value-accent">{{ currency() }}{{ number_format(Auth::user()->available_balance(), 2) }}</div>
                <div class="sub-value">Total account value</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-card-content">
                <span class="label">Active Deposits</span>
                <div class="value">{{ currency() }}{{ number_format(Auth::user()->Activeinvestment->sum('amount'), 2) }}</div>
                <div class="sub-value">in 0 active plans</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-card-content">
                <span class="label">Referral Rewards</span>
                <div class="value">{{ currency() }}{{ number_format(Auth::user()->level_bonus->sum('comm'), 2) }}</div>
                <div class="sub-value">from 0 referrals</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-card-content">
                <span class="label">Total Withdrawn</span>
                <div class="value">{{ currency() }}{{ number_format(Auth::user()->withdrawtotal(), 2) }}</div>
                <div class="sub-value">Total funds paid out</div>
            </div>
        </div>
    </section>

    <div class="dashboard-main-layout">
        <div class="main-column">

            <section class="dashboard-card">
                <div class="card-header">
                    <h3>Account Balances</h3>
                    <a href="#">View All</a>
                </div>
                <div class="balances-grid">
                    <div class="balance-item">
                        <img src="{{asset('')}}assets/icons8-increase-64.png"
                            alt="BitCoin"
                            onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                        <div class="currency-name">TRADING INCOME</div>
                        <div class="currency-amount">$0.00</div>
                    </div>
                    <div class="balance-item">
                        <img src="{{asset('')}}assets/icons8-microsoft-teams-2025-100.png"
                            alt="LiteCoin"
                            onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                        <div class="currency-name">LEVEL INCOME</div>
                        <div class="currency-amount">$0.00</div>
                    </div>
                    <div class="balance-item">
                        <img src="{{asset('')}}assets/icons8-hierarchy-100.png"
                            alt="DogeCoin"
                            onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                        <div class="currency-name">BINARY INCOME</div>
                        <div class="currency-amount">$0.00</div>
                    </div>
                    <div class="balance-item">
                        <img src="{{asset('')}}assets/icons8-organization-chart-people-100.png"
                            alt="Ethereum"
                            onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                        <div class="currency-name">GENERATION INCOME</div>
                        <div class="currency-amount">$0.00</div>
                    </div>
                    <div class="balance-item">
                        <img src="{{asset('')}}assets/icons8-income-100.png" alt="Ripple"
                            onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                        <div class="currency-name">MATCHING INCOME</div>
                        <div class="currency-amount">$0.00</div>
                    </div>
                    <div class="balance-item">
                        <img src="{{asset('')}}assets/icons8-euro-money-80.png" alt="TRON"
                            onerror="this.onerror=null;this.src='/img/coin-default.svg';">
                        <div class="currency-name">ROYALTY INCOME</div>
                        <div class="currency-amount">$0.00</div>
                    </div>
                 
                </div>
            </section>

            <section class="dashboard-card">
                <div class="card-header">
                    <h3>Active &amp; Closed Deposits</h3>
                    <a href="/user/invest">Investment History</a>
                </div>

                <div class="history-table-wrapper">
                    <table class="history-table">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Created At</th>
                                <th>Profit (now)</th>
                                <th>Progress</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($investments as $investment)
                            <tr>
                                <td>${{ number_format($investment->amount, 2) }}</td>
                                <td>{{ \Carbon\Carbon::parse($investment->sdate)->format('d M Y') }}</td>
                                <td>${{ number_format($investment->profit ?? 0, 2) }}</td>
                                <td>
                                    <div class="progress-bar-container" style="width:100%; background:#e0e0e0; border-radius:10px; height:8px;">
                                        <div class="progress-bar"
                                            style="width: {{ $investment->progress ?? 0 }}%; background: #00b2c8; height:8px; border-radius:10px;">
                                        </div>
                                    </div>
                                    <small>{{ $investment->progress ?? 0 }}%</small>
                                </td>
                                <td>
                                    @if($investment->status == 'active')
                                    <span style="color:green;font-weight:600;">Active</span>
                                    @elseif($investment->status == 'decline')
                                    <span style="color:red;font-weight:600;">Declined</span>
                                    @else
                                    <span style="color:gray;">{{ ucfirst($investment->status) }}</span>
                                    @endif
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" style="text-align:center;color:var(--text-muted);">
                                    No deposits found.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section> 


        </div>
        <div class="sidebar-column">

            <section class="dashboard-card referral-card">
                <div class="card-header">
                    <h3>Referral Program</h3>
                </div>
                <p
                    style="color: var(--text-muted); font-size: 14px; margin-top: -15px;">Invite
                    users and earn from their deposits.</p>
                <div class="ref-link-wrapper">
                    <span
                        class="ref-link">{{route('login')}}/?{{Auth::user()->username}}</span>
                    <button class="btn-copy"
                        onclick="copyRefLink(this)">Copy</button>
                </div>
                <div class="referral-stats">
                    <div>
                        <div class="label">Your Referrals</div>
                        <div class="value">0</div>
                    </div>
                    <div>
                        <div class="label">Total Earned</div>
                        <div class="value">$0.00</div>
                    </div>
                </div>
            </section>

            <section class="dashboard-card">
                <div class="card-header" style="display:flex; align-items:center; justify-content:space-between; margin-bottom:10px;">
                    <h3 style="font-size:16px; font-weight:600; color:#fff;">Latest Activity</h3>
                    <a href="{{route('user.DepositHistory')}}" style="text-decoration:none; color:#007bff;">All</a>
                </div>

                <ul class="transactions-list" style="list-style:none; margin:0; padding:0;">
                    @forelse($latestInvestments as $investment)
                    <li class="transaction-item"
                        style="display:flex; align-items:center; justify-content:space-between; border:1px solid #424445; border-radius:10px; padding:10px 14px; margin-bottom:10px; background:#272626;">

                        <!-- Left side -->
                        <div class="left" style="display:flex; flex-direction:column;">
                            <span style="font-weight:600; color:#fff;">{{currency()}}{{ number_format($investment->amount, 2) }}</span>
                            <span style="font-size:12px; color:#777;">{{ $investment->created_at->format('d M Y, h:i A') }}</span>
                        </div>

                        <!-- Right side -->
                        <div class="right">
                            @php
                            $color = match($investment->status) {
                            'active' => '#16a34a',
                            'pending' => '#ca8a04',
                            'declined' => '#dc2626',
                            default => '#6b7280'
                            };
                            @endphp
                            <span style="font-weight:600; font-size:14px; color:{{ $color }};">
                                {{ ucfirst($investment->status) }}
                            </span>
                        </div>
                    </li>
                    @empty
                    <li class="transaction-item-empty"
                        style="text-align:center; color:#999; border:1px dashed #ddd; border-radius:10px; padding:12px;">
                        No transactions yet.
                    </li>
                    @endforelse
                </ul>
            </section>


        </div>
    </div>

</main>

<script>
    function copyRefLink(buttonElement) {
        const linkText = document.querySelector('.ref-link').innerText;
        navigator.clipboard.writeText(linkText).then(() => {
            buttonElement.innerText = 'Copied!';
            setTimeout(() => {
                buttonElement.innerText = 'Copy';
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy text: ', err);
        });
    }
</script>

</body>

</html>