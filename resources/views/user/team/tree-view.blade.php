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
          flex-direction: row-reverse;
          /* ✅ Reverse direction: starts from right */
          flex-wrap: wrap;
          gap: 6px;
          list-style: none;
          padding-left: 0;
          margin: 0;
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

      /* Disabled page */
      .page-item.disabled .page-link {
          color: #aaa;
          background-color: #f8f9fa;
          border-color: var(--pagination-border);
          pointer-events: none;
          opacity: 0.6;
      }

      /* Responsive behavior */
      @media (max-width: 576px) {
          .pagination-container {
              justify-content: center;
              /* Center pagination on small screens */
              padding-right: 0;
          }
      }

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
          border: 1px solid #e0e1e2;
          border-radius: 12px;
          text-decoration: none;
          color: var(--dark-slate-grey);
          background: #fff;
      }

      .ops-filter a.active {
          border-color: var(--sandy-brown);
          color: #000;
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
          border: 1px solid #e0e1e2;
          padding: 6px 10px;
          border-radius: 10px;
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
         table tbody tr:hover {
    background-color: transparent !important;
}
  </style>


<!-- <div class="contentLk"> -->


<style>
    /* -------------------- Tree Layout + Connectors -------------------- */
    .tree-border {
        position: relative;
        width: 100%;
        height: 20px;
        margin: 15px auto;
    }

    /* Vertical line above children (centered under parent) */
    .tree-border::before {
        content: "";
        position: absolute;
        left: 50%;
        top: -14px;
        width: 2px;
        height: 20px;
        transform: translateX(-50%);
        background: repeating-linear-gradient(to bottom,
                #fff,
                #fff 2px,
                transparent 2px,
                transparent 4px);
    }

    /* Horizontal dotted line connecting children */
    .tree-border::after {
        content: "";
        position: absolute;
        top: 7;
        left: 25%;
        width: 50%;
        height: 2px;
        background: repeating-linear-gradient(to right,
                #fff,
                #fff 3px,
                transparent 3px,
                transparent 6px);
    }

    /* When only one child — hide horizontal line */
    tr:only-child .tree-border::after {
        display: none;
    }

    /* -------------------- User Node Styling -------------------- */
    .person-node,
    input[type="image"] {
        display: inline-block;
        text-align: center;
        background: #1a1a1a;
        border-radius: 50px;
        padding: 10px;
        box-shadow: 0 0 12px #9d7bff;
        transition: all 0.3s ease-in-out;
    }

    input[type="image"]:hover {
        transform: scale(1.05);
        box-shadow: 0 0 18px #9d7bff;
    }

    .person-img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 2px solid #9d7bff;
        background: #fff;
        object-fit: cover;
    }

    /* Name + Username */
    .person-name {
        color: #fff;
        font-weight: 700;
        font-size: 14px;
        display: block;
        margin-top: 6px;
        font-size: 15px;
    }

    .person-username {
        color: #aaa;
        font-size: 13px;
        letter-spacing: 0.4px;
    }

    /* -------------------- Table + Tree Background -------------------- */
    #userData table {
        width: 100%;
        border: 1px solid #2c2c2c;
        background-color: #111;
        border-collapse: collapse;
    }

    #userData table td {
        padding: 12px 8px;
        color: #fff;
        text-align: center;
    }

    /* -------------------- Card + Filter -------------------- */
    .ops-card {
        background: #1c1c1c;
        border: 1px solid #333;
        border-radius: 20px;
        padding: 18px;
        box-shadow: 0 0 10px #00c3ff22;
    }

    .card-header h3 {
        color: #fff;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .ops-filter {
        display: flex;
        gap: 8px;
        margin-top: 10px;
    }

    .ops-filter a {
        padding: 8px 14px;
        border: 1px solid #444;
        border-radius: 10px;
        text-decoration: none;
        color: #aaa;
        background: #1c1c1c;
        transition: 0.3s;
    }

    .ops-filter a:hover,
    .ops-filter a.active {
        border-color: #9d7bff;
        color: #fff;
        box-shadow: 0 0 6px #00c3ff66;
    }

    /* -------------------- Text Utility -------------------- */
    .text-center {
        text-align: center !important;
        color: #fff;
    }

    /* -------------------- Popup Hover (User Info Box) -------------------- */
    .user-popup {
        position: absolute;
        bottom: 110%;
        left: 50%;
        transform: translateX(-50%);
        background: #0d0d0d;
        color: #fff;
        border: 1px solid #9d7bff;
        border-radius: 8px;
        padding: 10px 12px;
        width: 220px;
        text-align: left;
        font-size: 13px;
        box-shadow: 0 0 10px #9d7bff;
        display: none;
        z-index: 1000;
    }

    .user-popup::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        border-width: 6px;
        border-style: solid;
        border-color: #9d7bff transparent transparent transparent;
    }

    /* Hover par popup dikhana */
    .user-wrapper:hover .user-popup {
        display: block;
    }

    /* Vertical dotted line above each child user */
    .user-wrapper::before {
        content: "";
        position: absolute;
        top: -29px;
        left: 50%;
        width: 2px;
        height: 20px;
        transform: translateX(-50%);
        background: repeating-linear-gradient(to bottom,
                #fff,
                #fff 2px,
                transparent 2px,
                transparent 4px);
    }

    /* Overall Search Form Container */
    .search-form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Stylish Search Box */
    .search-box {
        position: relative;
        width: 280px;
    }

    .search-box input {
        width: 100%;
        padding: 10px 42px 10px 14px;
        background-color: #222;
        border: 1px solid #444;
        color: #f1f1f1;
        border-radius: 30px;
        outline: none;
        transition: all 0.3s ease;
        font-size: 14px;
    }

    .search-box input::placeholder {
        color: #999;
    }

    .search-box input:focus {
        border-color: #9d7bff;
        box-shadow: 0 0 6px #9d7bff;
    }

    /* Search Button (Icon inside input) */
    .search-box button {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        background: none;
        border: none;
        color: #9d7bff;
        font-size: 18px;
        cursor: pointer;
        transition: color 0.3s ease, transform 0.3s ease;
    }

    .search-box button:hover {
        color: #9d7bff;
        transform: translateY(-50%) scale(1.1);
    }

    /* Error Message */
    .error-text {
        display: block;
        margin-top: 10px;
        color: #ff4c4c;
        font-size: 0.9rem;
    }
</style>
  <main class="referral-wrapper">
    
    
       <section class="ops-card">
        <div class="card-header">
            <h3>My Networks</h3>
        </div>

        <div class="ops-filter">
            <a class="" href="{{route('user.referral-team')}}">Direct Team</a>
            <a class="" href="{{route('user.left-team')}}">Left Team</a>
            <a class="" href="{{route('user.right-team')}}">Right Team</a>
            <a class="active" href="{{route('user.tree-view')}}">Genealogy Tree</a>
            <!-- <a class="" href="?type=referrals">Referrals</a>  -->

        </div>

        <div class="historyPage">

            <div class="tablePartners">
                <div class="table-responsive form-white-curved table-main-wrap">
                    <div style="overflow-x:auto">
                        <table id="zero-conf" class="data-table" style="width:100%">


                            <tbody>
                                <tr class="text-center">
                                    <td colspan="8" style="background-color: #1c1c1c; border: none; padding: 25px;">
                                        <div style="color: #f1f1f1; font-weight: 600; margin-bottom: 12px; font-size: 1.1rem;">
                                            Downline Search
                                        </div>

                                        <form method="get" action="{{ route('user.tree-view') }}" class="search-form">
                                            <div class="search-box">
                                                <input
                                                    name="suser"
                                                    type="text"
                                                    id="suser"
                                                    placeholder="Enter User ID..."
                                                    required>
                                                <button type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </form>

                                        <span id="ctl00_ContentPlaceHolder1_lblerror" class="error-text"></span>
                                    </td>
                                </tr>


                                <?php
                                $status = @$mydata->active_status;
                                if ($status != "") {

                                    if ($status == "Active" || $status == "Block") {
                                        $color = "magnifly-active";
                                    } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                                        $color = "magnifly-pending";
                                    } else {
                                        $color = "empty";
                                    }
                                } else {
                                    $color = "empty";
                                }
                                ?>
                                <tr class="text-center">
                                    <td colspan="8"
                                        class="text-center">
                                            <div class="user-wrapper" style="position: relative; display: inline-block;">

                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton0"
                                            id="ctl00_ContentPlaceHolder1_ImageButton0" data-toggle="tooltip"
                                            title='' data-html="true" OnClick="javascript:void(0)"
                                            data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                            data-placement="bottom" data-original-title=""
                                            src="{{asset('assets')}}/{{$color}}.png"
                                            style="border-width: 0px; width: 95px; height: 90px; background : #f0eaea;
">
                                        <br>
                                        <span id="ctl00_ContentPlaceHolder1_Label0" style=" font-weight: 700 ;font-size:14px; ">
                                            <?= @$mydata->name ? strtoupper(@$mydata->name) : "" ?>
                                        </span> <br>
                                        <span id="ctl00_ContentPlaceHolder1_Label7">
                                            <?= @$mydata->username ? strtoupper(@$mydata->username) : "" ?>
                                        </span>
                                            @if(!empty($mydata) && !empty($mydata->username))

                                        <div class="user-popup">
                                            <p><strong>Name:</strong> {{ @$mydata->name ?? 'N/A' }}</p>
                                            <p><strong>Username:</strong> {{ @$mydata->username ?? 'N/A' }}</p>
                                            <p><strong>Package:</strong> $ {{ @$mydata->package ?? '0.00' }}</p>
                                            <p><strong>Sponsor Id:</strong> {{ @$mydata->sponsor_username ?? 'N/A' }}</p>

                                            <p><strong>Join Date:</strong> {{ @$mydata->created_at ?? '—' }}</p>

                                        </div>
                                        @endif
                                                            </div>

                                    </td>
                                </tr>
                                <tr class="text-center">
                                    <td colspan="8" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                                        class="text-center">
                                        <div class="tree-border"></div>
                                    </td>
                                </tr>
                                <?php
                                $status = @$childs_1->active_status;
                                if ($status != "") {

                                    if ($status == "Active" || $status == "Block") {
                                        $color = "magnifly-active";
                                    } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                                        $color = "magnifly-pending";
                                    } else {
                                        $color = "empty";
                                    }
                                    # code...
                                } else {
                                    $color = "empty";
                                }

                                ?>
                                <tr class="text-center">
                                    <td colspan="4" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                                        class="text-center"><a
                                            href="{{route('user.tree-view')}}?user_id={{@$childs_1->username}}">
                                            <div class="user-wrapper" style="position: relative; display: inline-block;">

                                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1"
                                                    id="ctl00_ContentPlaceHolder1_ImageButton1" data-toggle="tooltip"
                                                    title='' data-html="true"
                                                    href="{{route('user.tree-view')}}?user_id={{@$childs_1->username}}"
                                                    data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                                    data-placement="bottom" data-original-title=""
                                                    src="{{asset('assets')}}/{{$color}}.png"
                                                    style="border-width: 0px;width: 95px;height: 90px;background : #f0eaea;
"
                                                    userName="<?= @$childs_1[0]['name'] ? strtoupper(@$childs_1[0]['name']) : "" ?>">
                                        </a> <br>
                                        <span id="ctl00_ContentPlaceHolder1_Label1" style=" font-weight: 700 ;font-size:14px">
                                            <?= @$childs_1->name ? strtoupper(@$childs_1->name) : "" ?>
                                        </span><br>
                                        <span id="ctl00_ContentPlaceHolder1_Label8">

                                            <?= @$childs_1->username ? strtoupper(@$childs_1->username) : "" ?>
                                        </span>
                                        @if(!empty($childs_1) && !empty($childs_1->username))

                                        <div class="user-popup">
                                            <p><strong>Name:</strong> {{ @$childs_1->name ?? 'N/A' }}</p>
                                            <p><strong>Username:</strong> {{ @$childs_1->username ?? 'N/A' }}</p>
                                            <p><strong>Package:</strong> $ {{ @$childs_1->package ?? '0.00' }}</p>
                                            <p><strong>Sponsor Id:</strong> {{ @$childs_1->sponsor_username ?? 'N/A' }}</p>

                                            <p><strong>Join Date:</strong> {{ @$childs_1->created_at ?? '—' }}</p>

                                        </div>
                                        @endif

                    </div>
                    </td>
                    <?php
                    $status = @$childs_2->active_status;
                    if ($status != "") {

                        if ($status == "Active" || $status == "Block") {
                            $color = "magnifly-active";
                        } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                            $color = "magnifly-pending";
                        } else {
                            $color = "empty";
                        }
                        # code...
                    } else {
                        $color = "empty";
                    }
                    ?>
                    <td colspan="4" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                        class="text-center"><a
                            href="{{route('user.tree-view')}}?user_id={{@$childs_2->username}}">
                            <div class="user-wrapper" style="position: relative; display: inline-block;">

                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton2"
                                    id="ctl00_ContentPlaceHolder1_ImageButton2" data-toggle="tooltip"
                                    title='' data-html="true"
                                    href="{{route('user.tree-view')}}?user_id={{@$childs_2->username}}e"
                                    data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                    data-placement="bottom" data-original-title=""
                                    src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                            width: 95px;
                                            height: 90px;
                                            background : #f0eaea;

                                            ">
                        </a> <br>
                        <span id="ctl00_ContentPlaceHolder1_Label2" style=" font-weight: 700 ;font-size:14px">
                            <?= @$childs_2->name ? strtoupper(@$childs_2->name) : "" ?>
                        </span><br>
                        <span id="ctl00_ContentPlaceHolder1_Label9">
                            <?= @$childs_2->username ? strtoupper(@$childs_2->username) : "" ?>
                        </span>
                        @if(!empty($childs_2) && !empty($childs_2->username))

                        <div class="user-popup">
                            <p><strong>Name:</strong> {{ @$childs_2->name ?? 'N/A' }}</p>
                            <p><strong>Username:</strong> {{ @$childs_2->username ?? 'N/A' }}</p>
                            <p><strong>Package:</strong> $ {{ @$childs_2->package ?? '0.00' }}</p>
                            <p><strong>Join Date:</strong> {{ @$childs_2->created_at ?? '—' }}</p>
                            <p><strong>Sponsor Id:</strong> {{ @$childs_2->sponsor_username  ?? '—' }}</p>


                        </div>
                        @endif

                </div>
                </td>
                </tr>
                <tr class="text-center">
                    <td colspan="4" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                        class="text-center">
                        <div class="tree-border"></div>
                    </td>
                    <td colspan="4" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                        class="text-center">
                        <div class="tree-border"></div>
                    </td>
                </tr>
                <?php

                $status = @$childs_3->active_status;
                if ($status != "") {

                    if ($status == "Active" || $status == "Block") {
                        $color = "magnifly-active";
                    } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                        $color = "magnifly-pending";
                    } else {
                        $color = "empty";
                    }
                    # code...
                } else {
                    $color = "empty";
                }
                ?>
                <tr class="text-center">
                    <td colspan="2" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                        class="text-center"><a
                            href="{{route('user.tree-view')}}?user_id={{@$childs_3->username}}">
                            <div class="user-wrapper" style="position: relative; display: inline-block;">
                                <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton3"
                                    id="ctl00_ContentPlaceHolder1_ImageButton3" data-toggle="tooltip"
                                    title='' data-html="true" data-toggle="tooltip" data-html="true"
                                    data-trigger="hover" title="" data-placement="bottom"
                                    data-original-title=""
                                    src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                        width: 95px;
                                        height: 90px;
                                        background : #f0eaea;

                                        ">
                        </a> <br>
                        <span id="ctl00_ContentPlaceHolder1_Label3" style=" font-weight: 700 ;font-size:14px">
                            <?= @$childs_3->name ? strtoupper(@$childs_3->name) : "" ?>
                        </span><br>
                        <span id="ctl00_ContentPlaceHolder1_Label10">
                            <?= @$childs_3->username ? strtoupper(@$childs_3->username) : "" ?>
                        </span>
                        @if(!empty($childs_3) && !empty($childs_3->username))

                        <div class="user-popup">
                            <p><strong>Name:</strong> {{ @$childs_3->name ?? 'N/A' }}</p>
                            <p><strong>Username:</strong> {{ @$childs_3->username ?? 'N/A' }}</p>
                            <p><strong>Package:</strong> $ {{ @$childs_3->package ?? '0.00' }}</p>
                            <p><strong>Join Date:</strong> {{ @$childs_3->created_at ?? '—' }}</p>
                            <p><strong>Sponsor Id:</strong> {{ @$childs_3->sponsor_username  ?? '—' }}</p>


                        </div>
                        @endif

            </div>
            </td>
            <?php

            $status = @$childs_4->active_status;
            if ($status != "") {

                if ($status == "Active" || $status == "Block") {
                    $color = "magnifly-active";
                } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                    $color = "magnifly-pending";
                } else {
                    $color = "empty";
                }
                # code...
            } else {
                $color = "empty";
            }
            ?>
            <td colspan="2" style="border-color:#f7f7f9; background-color:#1c1c1c;"
                class="text-center"><a
                    href="{{route('user.tree-view')}}?user_id={{@$childs_4->username}}">
                    <div class="user-wrapper" style="position: relative; display: inline-block;">

                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton4"
                            id="ctl00_ContentPlaceHolder1_ImageButton4" data-toggle="tooltip"
                            title='' data-html="true"
                            href="{{route('user.tree-view')}}?user_id={{@$childs_4->username}}"
                            data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                            data-placement="bottom" data-original-title=""
                            src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                    width: 95px;
                                    height: 90px;
                                    background : #f0eaea;

                                    ">
                </a> <br>
                <span id="ctl00_ContentPlaceHolder1_Label4" style=" font-weight: 700 ;font-size:14px">
                    <?= @$childs_4->name ? strtoupper(@$childs_4->name) : "" ?>
                </span><br>
                <span id="ctl00_ContentPlaceHolder1_Label11">
                    <?= @$childs_4->username ? strtoupper(@$childs_4->username) : "" ?>
                </span>
                @if(!empty($childs_4) && !empty($childs_4->username))
                <div class="user-popup">
                    <p><strong>Name:</strong> {{ @$childs_4->name ?? 'N/A' }}</p>
                    <p><strong>Username:</strong> {{ @$childs_4->username ?? 'N/A' }}</p>
                    <p><strong>Package:</strong>$ {{ @$childs_4->package ?? '0.00' }}</p>
                    <p><strong>Join Date:</strong> {{ @$childs_4->created_at ?? '—' }}</p>
                    <p><strong>Sponsor Id:</strong> {{ @$childs_4->sponsor_username  ?? '—' }}</p>


                </div>
                @endif

        </div>
        </td>
        <?php

        $status = @$childs_5->active_status;
        if ($status != "") {

            if ($status == "Active" || $status == "Block") {
                $color = "magnifly-active";
            } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                $color = "magnifly-pending";
            } else {
                $color = "empty";
            }
            # code...
        } else {
            $color = "empty";
        }
        ?>
        <td colspan="2" style="border-color:#f7f7f9; background-color:#1c1c1c;"
            class="text-center"><a
                href="{{route('user.tree-view')}}?user_id={{@$childs_5->username}}">
                <div class="user-wrapper" style="position: relative; display: inline-block;">

                    <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton5"
                        id="ctl00_ContentPlaceHolder1_ImageButton5"
                        src="{{asset('assets')}}/{{$color}}.png"
                        data-toggle="tooltip" title='' data-html="true"
                        href="{{route('user.tree-view')}}?user_id={{@$childs_5->username}}"
                        data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                        data-placement="bottom" data-original-title="" style="border-width: 0px;
                                        width: 95px;
                                        height: 90px;
                                        background : #f0eaea;

                                        ">
            </a> <br>
            <span id="ctl00_ContentPlaceHolder1_Label5" style=" font-weight: 700 ;font-size:14px">
                <?= @$childs_5->name ? strtoupper(@$childs_5->name) : "" ?>
            </span><br>
            <span id="ctl00_ContentPlaceHolder1_Label12">
                <?= @$childs_5->username ? strtoupper(@$childs_5->username) : "" ?>
            </span>
            @if(!empty($childs_5) && !empty($childs_5->username))
            <div class="user-popup">
                <p><strong>Name:</strong> {{ @$childs_5->name ?? 'N/A' }}</p>
                <p><strong>Username:</strong> {{ @$childs_5->username ?? 'N/A' }}</p>
                <p><strong>Package:</strong> $ {{ @$childs_5->package ?? '0.00' }}</p>
                <p><strong>Join Date:</strong> {{ @$childs_5->created_at ?? '—' }}</p>
                <p><strong>Sponsor Id:</strong> {{ @$childs_5->sponsor_username  ?? '—' }}</p>


            </div>
            @endif

            </div>
        </td>
        <?php
        $status = @$childs_6->active_status;
        if ($status != "") {

            if ($status == "Active" || $status == "Block") {
                $color = "magnifly-active";
            } elseif ($status == "Pending"  ||  $status == 'Inactive') {
                $color = "magnifly-pending";
            } else {
                $color = "empty";
            }
            # code...
        } else {
            $color = "empty";
        }
        ?>
        <td colspan="2" style="border-color:#f7f7f9; background-color:#1c1c1c;"
            class="text-center"><a
                href="{{route('user.tree-view')}}?user_id={{@$childs_6->username}}">
                <div class="user-wrapper" style="position: relative; display: inline-block;">

                    <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton6"
                        id="ctl00_ContentPlaceHolder1_ImageButton6" data-toggle="tooltip"
                        title='' data-html="true" data-toggle="tooltip" data-html="true"
                        data-trigger="hover" title="" data-placement="bottom"
                        data-original-title=""
                        src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                        width: 95px;
                                        height: 90px;
                                        background : #f0eaea;

                                        ">
            </a> <br>
            <span id="ctl00_ContentPlaceHolder1_Label6" style=" font-weight: 700 ;font-size:14px">
                <?= @$childs_6->name ? strtoupper(@$childs_6->name) : "" ?>
            </span><br>
            <span id="ctl00_ContentPlaceHolder1_Label13">
                <?= @$childs_6->username ? strtoupper(@$childs_6->username) : "" ?>
            </span>
            @if(!empty($childs_6) && !empty($childs_6->username))

            <div class="user-popup">
                <p><strong>Name:</strong> {{ @$childs_6->name ?? 'N/A' }}</p>
                <p><strong>Username:</strong> {{ @$childs_6->username ?? 'N/A' }}</p>
                <p><strong>Package:</strong>$ {{ @$childs_6->package ?? '0.00' }}</p>
                <p><strong>Join Date:</strong> {{ @$childs_6->created_at ?? '—' }}</p>
                <p><strong>Sponsor Id:</strong> {{ @$childs_6->sponsor_username  ?? '—' }}</p>


            </div>
            @endif

            </div>
        </td>
        </tr>
        </tbody>

        </table>


        </div>
        <div id="datarowsremaining" style='text-align:center'>
        </div>
        </div>




        </div>

        </div>
    </section>


  </main>
 <script>
     document.getElementById('searchInput').addEventListener('keyup', function() {
         const query = this.value;

         fetch(`{{ route('user.right-team') }}?search=${encodeURIComponent(query)}`, {
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
      function copyToClipboard(buttonElement, textToCopy) {
          navigator.clipboard.writeText(textToCopy).then(() => {
              const originalText = buttonElement.innerText;
              buttonElement.innerText = 'Copied!';
              setTimeout(() => {
                  buttonElement.innerText = originalText;
              }, 2000);
          }).catch(err => {
              console.error('Failed to copy text: ', err);
          });
      }
  </script>

  </body>

  </html>