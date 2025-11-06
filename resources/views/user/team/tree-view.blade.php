<!-- <div class="contentLk"> -->


<style>
/* -------------------- Tree Layout + Connectors -------------------- */
.tree-border {
    position: relative;
    width: 100%;
    height: 20px;
    margin: 10px auto;
}

/* Vertical line above children (centered under parent) */
.tree-border::before {
    content: "";
    position: absolute;
    left: 50%;
    top: -20px;
    width: 2px;
    height: 20px;
    transform: translateX(-50%);
    background: repeating-linear-gradient(
        to bottom,
        #fff,
        #fff 2px,
        transparent 2px,
        transparent 4px
    );
}

/* Horizontal dotted line connecting children */
.tree-border::after {
    content: "";
    position: absolute;
    top: 0;
    left: 25%;
    width: 50%;
    height: 2px;
    background: repeating-linear-gradient(
        to right,
        #fff,
        #fff 3px,
        transparent 3px,
        transparent 6px
    );
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
    font-weight: 700 ;font-size:14px;
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
    top: -30px;
    left: 50%;
    width: 2px;
    height: 20px;
    transform: translateX(-50%);
    background: repeating-linear-gradient(
        to bottom,
        #fff,
        #fff 2px,
        transparent 2px,
        transparent 4px
    );
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


<!-- <h2 class="titleLk">Tree View</h2> -->
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
    </section>

    <div class="historyPage">

        <div class="tablePartners">
            <div class="table-responsive form-white-curved table-main-wrap">
                <div style="overflow-x:auto">
                    <table id="zero-conf" class="data-table" style="width:100%">


                        <tbody>
                            <tr class="text-center">
  <td colspan="8" style="background-color: #151515; border: none; padding: 25px;">
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
          required
        >
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
                                # code...
                            } else {
                                $color = "empty";
                            }
                            ?>
                            <tr class="text-center">
                                <td colspan="8" 
                                    class="text-center">
                                    
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
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="8" style="border-color:#f7f7f9; background-color:#151515;"
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
                                <td colspan="4" style="border-color:#f7f7f9; background-color:#151515;"
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
                                     <div class="user-popup">
        <p><strong>Name:</strong> {{ @$childs_1->name ?? 'N/A' }}</p>
        <p><strong>Username:</strong> {{ @$childs_1->username ?? 'N/A' }}</p>
       
    </div>
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
                                <td colspan="4" style="border-color:#f7f7f9; background-color:#151515;"
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
                                    <div class="user-popup">
        <p><strong>Name:</strong> {{ @$childs_2->name ?? 'N/A' }}</p>
        <p><strong>Username:</strong> {{ @$childs_2->username ?? 'N/A' }}</p>
       
    </div>
</div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="4" style="border-color:#f7f7f9; background-color:#151515;"
                                    class="text-center">
                                    <div class="tree-border"></div>
                                </td>
                                <td colspan="4" style="border-color:#f7f7f9; background-color:#151515;"
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
                                <td colspan="2" style="border-color:#f7f7f9; background-color:#151515;"
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
                                    <div class="user-popup">
        <p><strong>Name:</strong> {{ @$childs_3->name ?? 'N/A' }}</p>
        <p><strong>Username:</strong> {{ @$childs_3->username ?? 'N/A' }}</p>
       
    </div>
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
                                <td colspan="2" style="border-color:#f7f7f9; background-color:#151515;"
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
                                                               <div class="user-popup">
        <p><strong>Name:</strong> {{ @$childs_4->name ?? 'N/A' }}</p>
        <p><strong>Username:</strong> {{ @$childs_4->username ?? 'N/A' }}</p>
       
    </div>
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
                                <td colspan="2" style="border-color:#f7f7f9; background-color:#151515;"
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
                                                               <div class="user-popup">
        <p><strong>Name:</strong> {{ @$childs_5->name ?? 'N/A' }}</p>
        <p><strong>Username:</strong> {{ @$childs_5->username ?? 'N/A' }}</p>
        
    </div>
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
                                <td colspan="2" style="border-color:#f7f7f9; background-color:#151515;"
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
                                                                                                   <div class="user-popup">
        <p><strong>Name:</strong> {{ @$childs_6->name ?? 'N/A' }}</p>
        <p><strong>Username:</strong> {{ @$childs_6->username ?? 'N/A' }}</p>
       
    </div>
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
</main>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> --}}
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="{{asset('assets/c20a81c4/js/om_all_function.js')}}"></script>


<!-- </div> -->