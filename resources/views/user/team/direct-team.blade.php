<style>
    /* ===== Right-to-Left Pagination ===== */
    :root {
        --pagination-color: #9d7bff;
        /* Main accent color */
        --pagination-text-color: #333;
        /* Text color */
        --pagination-bg: #fff;
        /* Background */
        --pagination-border: #ddd;
        /* Border color */
        --pagination-hover-bg: #f2ebff;
        /* Hover background */
    }
 
    /* Main container */
    .pagination-container {
        display: flex;
        justify-content: flex-end;
        /* Align pagination block to right edge */
        margin-top: 1.5rem;
        padding-right: 15px;
    }
 
    /* Pagination list styling */
    .pagination {
        display: flex;
        justify-content: flex-end;
        /* ✅ Aligns pagination to the right */
        flex-wrap: wrap;
        gap: 6px;
        list-style: none;
        padding-left: 0;
        margin: 2px;
    }
 
    .pagination li a,
    .pagination li span {
        padding: 8px 14px;
        border: 1px solid #ddd;
        border-radius: 6px;
        text-decoration: none;
        color: #555;
        transition: 0.3s;
    }
 
    .pagination li a:hover {
        background-color: #f0ebff;
        color: #9d7bff;
    }
 
    .pagination li.active span {
        background-color: #9d7bff;
        color: #fff;
        border-color: #9d7bff;
    }
 
    /* Each page item */
    .page-item {
        margin: 0;
    }
 
    /* Page links */
    .page-link {
        display: block;
        padding: 0.5rem 0.9rem;
        color: var(--pagination-text-color);
        background-color: var(--pagination-bg);
        border: 1px solid var(--pagination-border);
        border-radius: 0.35rem;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.25s ease;
    }
 
    /* Hover effect */
    .page-link:hover {
        color: var(--pagination-color);
        background-color: var(--pagination-hover-bg);
        border-color: var(--pagination-color);
    }
 
    /* Active page */
    .page-item.active .page-link {
        color: #fff;
        background-color: var(--pagination-color);
        border-color: var(--pagination-color);
        box-shadow: 0 0 8px rgba(157, 123, 255, 0.4);
    }
 
    .page-item.disabled .page-link {
        color: #aaa;
        background-color: #f8f9fa;
        border-color: var(--pagination-border);
        pointer-events: none;
        opacity: 0.6;
    }
 
    @media (max-width: 576px) {
        .pagination-container {
            justify-content: flex-end;
            /* ✅ Right align container */
            padding-left: 10px;
            /* Thoda spacing right side se */
        }
 
        .pagination {
            flex-wrap: nowrap;
            justify-content: flex-end;
        }
    }
</style>
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
        background-color: var(--background);
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
<style>
    .ops-card,
    .dashboard-card {
        background: #2c2c2c;
        border: 1px solid #202223;
        border-radius: 20px;
        padding: 16px;
        margin-top: 16px;
    }
 
    .card-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 8px;
    }
 
    .card-header .right a,
    .card-header a {
        text-decoration: none;
        color: #111827;
        border: 1px solid #202223;
        padding: 6px 10px;
        border-radius: 10px;
    }
 
 
    /* 🔹 Container holding both filter and search */
    .ops-filter-bar {
        display: flex;
        justify-content: space-between;
        /* filter left, search right */
        align-items: center;
        flex-wrap: wrap;
        margin: 10px 0 16px;
        gap: 10px;
    }
 
    /* Existing filter style retained */
    .ops-filter {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }
 
    .ops-filter a {
        padding: 8px 12px;
        border: 1px solid #595a5bff;
        border-radius: 12px;
        text-decoration: none;
        color: gray;
        background: #2c2c2c;
    }
 
    .ops-filter a.active {
        border-color: var(--sandy-brown);
        color: #ffffffff;
        box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
    }
 
    /* 🔍 Right-side search box + reset */
    .ops-search-bar {
        display: flex;
        align-items: center;
        gap: 8px;
    }
 
    .search-input {
        padding: 8px 12px;
        border: 1px solid #595a5bff;
        background-color: #2c2c2c;
        border-radius: 8px;
        font-size: 14px;
        width: 220px;
        outline: none;
    }
 
    .search-input:focus {
        border-color: var(--sandy-brown);
        box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
    }
 
    .btn-search,
    .btn-reset {
        padding: 8px 14px;
        border-radius: 8px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        transition: all 0.2s ease;
    }
 
    .btn-search {
        background: var(--sandy-brown);
        color: #fff;
        border: 1px solid var(--sandy-brown);
    }
 
    .btn-search:hover {
        background: #e09d59;
    }
 
    .btn-reset {
        background: #2c2c2c;
        color: #111827;
        border: 1px solid #e0e1e2;
    }
 
    .btn-reset:hover {
        background: #383636ff;
    }
</style>
<main class="referral-wrapper">
    <div class="page-header">
        <h1>Referral <span>Program</span></h1>
        <p>Invite new members using your unique link and earn
            commissions from their deposits across multiple levels.</p>
    </div>
 
    <div class="referral-main-grid">
        <div class="referral-link-card">
            <div class="referral-link-content">
                <h3>Your Unique Referral Link</h3>
                <div class="ref-link-wrapper">
                    <span id="refLink"
                        class="ref-link">{{route('login')}}/?ref={{Auth::user()->username}}</span>
                    <button class="btn-copy"
                        onclick="copyToClipboard(this)">Copy</button>
                </div>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="label">Total Referrals</div>
                        <div class="value">{{$total_team}}</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Active Referrals</div>
                        <div class="value">{{$active_total_team}}</div>
                    </div>
                    <div class="stat-card">
                        <div class="label">Total Earned</div>
                        <div class="value accent">{{$total_earned}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="inviter-card">
            <div class="inviter-icon">🤝</div>
            <div class="inviter-label">Your Inviter</div>
            <div class="inviter-name">{{Auth::user()->sponsorUser->name ?? 'No Sponsor'}}</div>
        </div>
    </div>
    <section class="ops-card">
        <div class="card-header">
            <h3>My Networks</h3>
        </div>
        <div class="ops-filter-bar">
 
            <div class="ops-filter">
                <a class="active" href="{{route('user.referral-team')}}">Direct Team</a>
                <a class="" href="{{route('user.left-team')}}">Left Team</a>
                <a class="" href="{{route('user.right-team')}}">Right Team</a>
                <a class="" href="{{route('user.tree-view')}}">Genealogy Tree</a>
 
 
            </div>
            <form id="liveSearchForm" class="ops-search-bar">
                <input type="text" id="searchInput" name="search" placeholder="Search ..." class="search-input">
            </form>
        </div>
 
 
 
        <div class="history-table-wrapper" id="resultsTable">
            <table class="history-table">
                <thead>
                    <tr >
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Mobile No</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($direct_team as $key => $deposit)
                    <tr style="color: gray;">
                        <td>{{ $key + 1 }}</td>
                        <!-- <td>${{ number_format($deposit->amount, 2) }}</td> -->
                        <!-- <td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('d M Y') }}</td> -->
                        <td>{{ ucfirst($deposit->name) }}</td>
                        <td>{{ ucfirst($deposit->username) }}</td>
                        <td>{{ ucfirst($deposit->phone) }}</td>
                        <td>{{ ucfirst($deposit->email) }}</td>
 
                        <td>
                            @if($deposit->status == 'pending')
                            <span style="color:orange;">Pending</span>
                            @elseif($deposit->status == 'approved')
                            <span style="color:green;">Approved</span>
                            @else
                            <span style="color:red;">Declined</span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">No operations yet.</< /td>
                    </tr>
                    @endforelse
                </tbody>
 
            </table>
            {{-- Pagination --}}
            <div class="pagination justify-content-center mt-3">
                {{ $direct_team->links('pagination::bootstrap-4') }}
            </div>
        </div>
 
    </section>
 
 
    <section class="section-card">
        <h3>Standard Commission Rates</h3>
        <div class="levels-grid">
            <div class="level-card">
                <div class="level-title">Level 1</div>
                <div class="level-percent">7%</div>
                <div class="level-description">
                    From deposits of your direct referrals. </div>
            </div>
            <div class="level-card">
                <div class="level-title">Level 2</div>
                <div class="level-percent">2%</div>
                <div class="level-description">
                    From your referrals' referrals. </div>
            </div>
            <div class="level-card">
                <div class="level-title">Level 3</div>
                <div class="level-percent">1%</div>
                <div class="level-description">
                    From the 3rd line of your structure. </div>
            </div>
        </div>
    </section>
 
    <section class="section-card">
        <h3>Your Referrals (Level 1)</h3>
        <div class="history-table-wrapper">
            <table class="history-table">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Registration Date</th>
                        <th>Total Deposits</th>
                        <th>Your Commission</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4"
                            style="text-align:center; color: var(--text-muted); padding: 20px;">
                            You have no referrals on this level yet.
                        </td>
                    </tr>
                </tbody>
 
            </table>
        </div>
    </section>
 
</main>
 
 
 
<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        const query = this.value;
 
        fetch(`{{ route('user.referral-team') }}?search=${encodeURIComponent(query)}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.text())
            .then(html => {
                const parser = new DOMParser();
                const doc = parser.parseFromString(html, 'text/html');
                const newTable = doc.querySelector('#resultsTable');
                document.querySelector('#resultsTable').innerHTML = newTable.innerHTML;
            })
            .catch(error => console.error('Error:', error));
    });
</script>
<script>
    function copyToClipboard(button) {
        const textToCopy = document.getElementById('refLink').innerText.trim();
 
        const temp = document.createElement('textarea');
        temp.value = textToCopy;
        document.body.appendChild(temp);
        temp.select();
        document.execCommand('copy');
        document.body.removeChild(temp);
 
        const originalText = button.innerText;
        button.innerText = 'Copied!';
        button.style.backgroundColor = '#6c47ff';
 
        setTimeout(() => {
            button.innerText = originalText;
            button.style.backgroundColor = '#9d7bff';
        }, 2000);
    }
</script>
 
 
</body>
 
</html>