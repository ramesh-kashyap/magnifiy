<!-- <div class="contentLk"> -->


<style type="text/css">
    .tree-border::before {
        display: block;
        width: 50%;
        margin-left: 25%;
        margin-right: 25%;
        border-top: 2px solid #9d7bff;
        border-radius: 100px;
        color: #2D2A03;
        content: "|";
    }

    .data-table td span:nth-child(3n - 1) {
        cursor: pointer !important;
        color: #fe7e10 !important;
        font-weight: 700 !important;
        padding: 6px 6px 4px 6px;

    }

    .modal .modal-header .modal-title {
        font-weight: 500;
        font-size: 1.3rem;
        color: #ffffff;
    }

    .modal-content {
        position: relative;
        background-color: #151515;
        background-clip: padding-box;
        border: 1px solid #f7f7f9;
        border: 1px solid rgba(0, 0, 0, .2);
        border-radius: 6px;
        -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        box-shadow: 0 3px 9px rgba(0, 0, 0, .5);
        outline: 0;
    }

    /*Om code start*/
    /* .data-table td span:nth-child(3n - 1){cursor:pointer !important; color:#e6b429 !important; font-weight:400 !important; padding:6px 6px 4px 6px;}  */
    .load-gif img {
        width: 120px;
    }

    .load-gif {
        width: 20px !important;
    }

    .load-gif img {
        width: 20px !important;
        float: left;
    }

    .system-cal-report {
        font-size: 12px;
        color: red;
    }

    #userDataModal #userName {
        text-transform: uppercase;
    }

    #userData table {
        width: 100%;
        border: 1px #ccc solid;
        background-color: #000;
    }

    #userData table td {
        border: 1px #ccc solid;
        padding: 8px;
        text-transform: uppercase;
        color: #fff;
        text-align: center;
    }

    #userData table td i {
        margin-right: 4px;
    }

    #userData table td span {
        float: center;
        font-weight: 100px;
        font-size: 12px;
    }

    .text-center {
        text-align: center !important;
        color: #9d7bff;
    }

    .modal .modal-header .close span {
        display: block;
    }

    .modal-header .close {
        margin-top: -2px;
        opacity: 0.8;
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
        color: #828282ff;
        background: #2c2c2c;
    }

    .ops-filter a.active {
        border-color: var(--sandy-brown);
        color: #fff;
        box-shadow: 0 0 0 2px rgb(244 161 89 / 20%);
    }
</style>
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
                                <td colspan="8">
                                    <h3 class="text-center"><strong>MY STRUCTURE</strong></h3>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td colspan="8" style="border-color:#fff; background-color:#151515;"
                                    class="text-center">Downline ID -&gt;
                                    <form method="get" action="{{route('user.tree-view')}}">
                                        <input name="suser" type="text" id="suser" style="background-color:#595a5bff;color:'#fff; "
                                            placeholder="Enter User ID" required>
                                        <input type="submit" name="submit" value="Search" id="submit">

                                    </form>

                                    <br>
                                    <span id="ctl00_ContentPlaceHolder1_lblerror"></span>
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
                                        style="border-width: 0px; width: 78px; height: 59px; background: #151515;">
                                    <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label0" style=" font-weight: 700">
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

                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton1"
                                            id="ctl00_ContentPlaceHolder1_ImageButton1" data-toggle="tooltip"
                                            title='' data-html="true"
                                            href="{{route('user.tree-view')}}?user_id={{@$childs_1->username}}"
                                            data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                            data-placement="bottom" data-original-title=""
                                            src="{{asset('assets')}}/{{$color}}.png"
                                            style="border-width: 0px;width: 78px;height: 59px;background: #151515;"
                                            userName="<?= @$childs_1[0]['name'] ? strtoupper(@$childs_1[0]['name']) : "" ?>">
                                    </a> <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label1" style=" font-weight: 700">
                                        <?= @$childs_1->name ? strtoupper(@$childs_1->name) : "" ?>
                                    </span><br>
                                    <span id="ctl00_ContentPlaceHolder1_Label8">

                                        <?= @$childs_1->username ? strtoupper(@$childs_1->username) : "" ?>
                                    </span>
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
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton2"
                                            id="ctl00_ContentPlaceHolder1_ImageButton2" data-toggle="tooltip"
                                            title='' data-html="true"
                                            href="{{route('user.tree-view')}}?user_id={{@$childs_2->username}}e"
                                            data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                            data-placement="bottom" data-original-title=""
                                            src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                            width: 78px;
                                            height: 59px;
                                            background: #151515;
                                            ">
                                    </a> <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label2" style=" font-weight: 700">
                                        <?= @$childs_2->name ? strtoupper(@$childs_2->name) : "" ?>
                                    </span><br>
                                    <span id="ctl00_ContentPlaceHolder1_Label9">
                                        <?= @$childs_2->username ? strtoupper(@$childs_2->username) : "" ?>
                                    </span>
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
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton3"
                                            id="ctl00_ContentPlaceHolder1_ImageButton3" data-toggle="tooltip"
                                            title='' data-html="true" data-toggle="tooltip" data-html="true"
                                            data-trigger="hover" title="" data-placement="bottom"
                                            data-original-title=""
                                            src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                        width: 78px;
                                        height: 59px;
                                        background: #151515;
                                        ">
                                    </a> <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label3" style=" font-weight: 700">
                                        <?= @$childs_3->name ? strtoupper(@$childs_3->name) : "" ?>
                                    </span><br>
                                    <span id="ctl00_ContentPlaceHolder1_Label10">
                                        <?= @$childs_3->username ? strtoupper(@$childs_3->username) : "" ?>
                                    </span>
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
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton4"
                                            id="ctl00_ContentPlaceHolder1_ImageButton4" data-toggle="tooltip"
                                            title='' data-html="true"
                                            href="{{route('user.tree-view')}}?user_id={{@$childs_4->username}}"
                                            data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                            data-placement="bottom" data-original-title=""
                                            src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                    width: 78px;
                                    height: 59px;
                                    background: #151515;
                                    ">
                                    </a> <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label4" style=" font-weight: 700">
                                        <?= @$childs_4->name ? strtoupper(@$childs_4->name) : "" ?>
                                    </span><br>
                                    <span id="ctl00_ContentPlaceHolder1_Label11">
                                        <?= @$childs_4->username ? strtoupper(@$childs_4->username) : "" ?>
                                    </span>
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
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton5"
                                            id="ctl00_ContentPlaceHolder1_ImageButton5"
                                            src="{{asset('assets')}}/{{$color}}.png"
                                            data-toggle="tooltip" title='' data-html="true"
                                            href="{{route('user.tree-view')}}?user_id={{@$childs_5->username}}"
                                            data-toggle="tooltip" data-html="true" data-trigger="hover" title=""
                                            data-placement="bottom" data-original-title="" style="border-width: 0px;
                                        width: 78px;
                                        height: 59px;
                                        background: #151515;
                                        ">
                                    </a> <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label5" style=" font-weight: 700">
                                        <?= @$childs_5->name ? strtoupper(@$childs_5->name) : "" ?>
                                    </span><br>
                                    <span id="ctl00_ContentPlaceHolder1_Label12">
                                        <?= @$childs_5->username ? strtoupper(@$childs_5->username) : "" ?>
                                    </span>
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
                                        <input type="image" name="ctl00$ContentPlaceHolder1$ImageButton6"
                                            id="ctl00_ContentPlaceHolder1_ImageButton6" data-toggle="tooltip"
                                            title='' data-html="true" data-toggle="tooltip" data-html="true"
                                            data-trigger="hover" title="" data-placement="bottom"
                                            data-original-title=""
                                            src="{{asset('assets')}}/{{$color}}.png" style="border-width: 0px;
                                        width: 78px;
                                        height: 59px;
                                        background: #151515;
                                        ">
                                    </a> <br>
                                    <span id="ctl00_ContentPlaceHolder1_Label6" style=" font-weight: 700">
                                        <?= @$childs_6->name ? strtoupper(@$childs_6->name) : "" ?>
                                    </span><br>
                                    <span id="ctl00_ContentPlaceHolder1_Label13">
                                        <?= @$childs_6->username ? strtoupper(@$childs_6->username) : "" ?>
                                    </span>
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