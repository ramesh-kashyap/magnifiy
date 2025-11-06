<style>
  .ops-wrap,
  .dashboard-wrapper {
    max-width: 1200px;
    margin: 0 auto;
    padding: 10px 12px 30px;
  }

  .breadcrumb {
    color: var(--text-muted);
    font-size: 14px;
    margin-bottom: 14px;
  }

  .breadcrumb a {
    color: #ffffff;
    text-decoration: none;
  }

  .main-stats-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 12px;
    margin-bottom: 16px;
  }

  .stat-card {
       border: 1px solid #e0e1e2;
    border-radius: 16px;
    padding: 12px;
    background: linear-gradient(252deg, #0c0c0c 0%, #353434 21%, #2f2e2e 39%, #1a1a1a 100%);
  }

  .stat-card .label {
    color: #9aa3b2;
    font-size: 12px;
  }

  .stat-card .value {
    font-size: 22px;
    font-weight: 700;
    margin-top: 6px;
  }

  .stat-card .sub-value {
    color: #9aa3b2;
    font-size: 12px;
  }

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
    color: #ffffff;
    border: 1px solid #202223;
    padding: 6px 10px;
    border-radius: 10px;
  }

  .stat-grid {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 10px;
  }

  .stat {
    border: 1px solid #202223;
    border-radius: 16px;
    padding: 12px;
background: linear-gradient(252deg, #0c0c0c 0%, #353434 21%, #2f2e2e 39%, #1a1a1a 100%);
  }

  .stat .cap {
       font-size: 16px;
    color: #ffffff;
    margin-bottom: 6px;
  }

  .stat .big {
       font-size: 20px;
    font-weight: 700;
    color: #9d7bff;
  }

  .stat .sub {
    font-size: 12px;
    color: #a2a5ad;
  }

  .deposits-table {
    width: 100%;
    border-collapse: collapse;
  }

  .deposits-table th,
  .deposits-table td {
    padding: 10px 8px;
    border-bottom: 1px solid #edf0f5;
    text-align: left;
  }

  .deposits-table th {
    font-size: 12px;
    color: #90a0bf;
    text-transform: uppercase;
    letter-spacing: .02em;
  }

  .progress-bar-container {
    width: 140px;
    height: 8px;
    background: #eef2f7;
    border-radius: 6px;
    overflow: hidden;
  }

  .progress-bar {
    height: 100%;
    background: #22c55e;
  }

  .ops-filter {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin: 6px 0 12px;
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
    color: #fff;
    box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
  }

  .ops-list {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .tx {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 12px;
    border: 1px solid #e0e1e2;
    background: #fff;
    border-radius: 14px;
    padding: 12px;
  }

  .tx .left {
    display: flex;
    align-items: center;
    gap: 12px;
    min-width: 0;
  }

  .tx .icon {
    height: 38px;
    width: 38px;
    border-radius: 10px;
    display: grid;
    place-items: center;
    border: 1px solid #e0e1e2;
  }

  .tx .icon.deposit {
    background: #e8fff4;
    border-color: #bff0d8;
  }

  .tx .icon.withdrawal {
    background: #fff2e6;
    border-color: #ffd7af;
  }

  .tx .ic {
    width: 20px;
    height: 20px;
    color: #39414a;
  }

  .tx .title {
    font-weight: 600;
    color: #111827;
  }

  .tx .sys {
    color: #a2a5ad;
    font-size: 12px;
    margin-left: 6px;
  }

  .tx .date {
    font-size: 12px;
    color: #6b7280;
  }

  .tx .amt {
    font-weight: 700;
    font-size: 15px;
    white-space: nowrap;
  }

  .tx .amt.deposit {
    color: #108a55;
  }

  .tx .amt.withdrawal {
    color: #b45309;
  }

  .tx-empty {
    text-align: center;
    padding: 18px;
    color: #a2a5ad;
    border: 1px dashed #e0e1e2;
    border-radius: 14px;
    background: #fafafa;
  }

  .pagination {
    display: flex;
    justify-content: center;
    /* Centers horizontally */
    align-items: center;
    gap: 8px;
    margin-top: 20px;
    list-style: none;
    padding-left: 0;
  }

  .pagination li {
    display: inline-flex;
  }

  .pagination a,
  .pagination span {
    padding: 6px 12px;
    border: 1px solid #e0e1e2;
    border-radius: 8px;
    text-decoration: none;
    color: #111827;
    background: #fff;
    font-size: 14px;
    transition: all 0.2s ease;
  }

  .pagination a:hover {
    background: #f5f5f5;
  }

  .pagination .active span {
    border-color: var(--sandy-brown);
    background: #f7f3ef;
    font-weight: 600;
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
    color: #fff;
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
    background: #fff;
    color: #111827;
    border: 1px solid #e0e1e2;
  }

  .btn-reset:hover {
    background: #f5f5f5;
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
        color: #fff;
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
        background-color: transparent;
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
  <div class="breadcrumb"><a href="/user">Dashboard</a> / <b>Overview &amp; Operations</b></div>



  <section class="ops-card">
    <div class="card-header">
      <h3>Overview</h3>
      <div class="right"><a href="?type=all&amp;refresh=1">Refresh</a></div>
    </div>
    <div class="stat-grid">
      <div class="stat">
        <div class="cap">Deposits (Top-ups) paid</div>
        <div class="big">
          $0 </div>
        <div class="sub">Count: 0</div>
      </div>

      <div class="stat">
        <div class="cap">Withdrawals</div>
        <div class="big">
          $0 </div>
        <div class="sub">Count: 0</div>
      </div>

      <div class="stat">
        <div class="cap">Accruals (paid)</div>
        <div class="big">
          $0 </div>
        <div class="sub">Count: 0</div>
      </div>

      <div class="stat">
        <div class="cap">Portfolio (Deposits)</div>
        <div class="big">
          Active: $0 </div>
        <div class="sub">
          Closed: $0 · Cnt A/C: 0/0 </div>
      </div>

      <div class="stat">
        <div class="cap">Referral rewards (sum)</div>
        <div class="big">
          $0 </div>
        <div class="sub">
          Currencies: 0 </div>
      </div>
    </div>
  </section>


  <section class="ops-card">
    <div class="card-header">
      <h3>All Operations</h3>
    </div>

    <div class="ops-filter-bar">
      {{-- 🔹 Left side: Filter links --}}
      <div class="ops-filter">
        <a class="" href="{{route('user.DepositHistory')}}">Deposits</a>
        <a class="active" href="{{route('user.Withdraw-History')}}">Withdrawals</a>
        <a class="" href="{{route('user.roi-bonus')}}">Incomes</a>
      </div>

      {{-- 🔹 Right side: Search + Reset --}}
      <form id="liveSearchForm" class="ops-search-bar">
        <input type="text" id="searchInput" name="search" placeholder="Search ..." class="search-input">
      </form>
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
        <tbody>
           @forelse($withdraw_report as $key => $deposit)
          <tr>
            <td>{{ $key + 1 }}</td>
            <td>${{ number_format($deposit->amount, 2) }}</td>
            <td>{{ ucfirst($deposit->payment_mode) }}</td>

            <td>{{ \Carbon\Carbon::parse($deposit->created_at)->format('d M Y') }}</td>
            <td>
              @if($deposit->status == 'Pending')
              <span style="color:orange;">Pending</span>
              @elseif($deposit->status == 'Approved')
              <span style="color:green;">Approved</span>
              @else
              <span style="color:red;">Inactive</span>
              @endif
            </td>
          </tr>
          @empty
          <tr>
            <td colspan="5" class="text-center">No deposit history found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
  {{-- Pagination --}}
    <div class="ops-pager">
      {{ $withdraw_report->links() }}
    </div>
    </div>

  


  </section>
</main>
<script>
  document.getElementById('searchInput').addEventListener('keyup', function() {
    const query = this.value;

    fetch(`{{ route('user.Withdraw-History') }}?search=${encodeURIComponent(query)}`, {
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

</body>

</html>