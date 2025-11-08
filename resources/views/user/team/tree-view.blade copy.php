

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



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->

{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> --}}
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="{{asset('assets/c20a81c4/js/om_all_function.js')}}"></script>


<!-- </div> -->