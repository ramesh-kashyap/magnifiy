
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Deposit </a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Approved Deposit</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Approved Deposit</h4>
                            </div>
                            <div class="card-body">
                                
                                      <form action="{{ route('admin.deposit-list') }}" method="GET" class="mb-3">
    <div class="row align-items-end">
        <!-- Heading + Reset button -->
        <div class="col-xl-12 d-flex justify-content-between align-items-center mb-2">
            <h5 class="mb-0">Filter Approved Withdrawals</h5>
            <a href="{{ route('admin.deposit-list') }}" 
               class="btn btn-secondary btn-sm"
               style="padding: 0.4rem 1rem;">
               Reset
            </a>
        </div>

        <!-- From Date -->
        <div class="col-xl-3 col-md-6">
            <div class="form-group mb-3">
                <label class="form-label fw-semibold">From Date</label>
                <input type="date" name="from_date" class="form-control" value="{{ request('from_date') }}">
            </div>
        </div>

        <!-- To Date -->
        <div class="col-xl-3 col-md-6">
            <div class="form-group mb-3">
                <label class="form-label fw-semibold">To Date</label>
                <input type="date" name="to_date" class="form-control" value="{{ request('to_date') }}">
            </div>
        </div>

        <!-- Search User -->
        <div class="col-xl-2 col-md-6">
            <div class="form-group mb-3">
                <label class="form-label fw-semibold">Search User</label>
                <input type="text" placeholder="Search Users" name="search" class="form-control" 
                       value="{{ @$search }}" style="width: 100%;">
            </div>
        </div>

        <!-- Limit -->
        <div class="col-xl-2 col-md-6">
            <div class="form-group mb-3">
                <label class="form-label fw-semibold">Limit</label>
                <select name="limit" class="form-control" style="width: 100%;">
                    <option value="10" {{ request('limit')==10 ? 'selected' : '' }}>10</option>
                    <option value="25" {{ request('limit')==25 ? 'selected' : '' }}>25</option>
                    <option value="50" {{ request('limit')==50 ? 'selected' : '' }}>50</option>
                    <option value="100" {{ request('limit')==100 ? 'selected' : '' }}>100</option>
                </select>
            </div>
        </div>

        <!-- Search Button -->
        <div class="col-xl-2 col-md-6">
            <div class="form-group mb-3">
                <label class="form-label">&nbsp;</label>
                <input type="submit" name="submit" class="btn btn-primary w-100" value="Search" 
                       style="min-width: 110px; padding: 0.45rem 1rem;">
            </div>
        </div>
    </div>
</form>
                                    
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>S NO.</th>
                                                <th>User Name</th>
                                                <th>User Id</th>
                                                <th>Amount</th>
                                                <th>Transaction Date.</th>
                
                                                <th>Transaction ID</th>
                
                                                <th>Status</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if(is_array($deposit_list) || is_object($deposit_list)){ ?>

                                                <?php $cnt = $deposit_list->perPage() * ($deposit_list->currentPage() - 1); ?>
                                                 @foreach($deposit_list as $value)
                
                                                  <tr>
                                                      <td><?= $cnt += 1?></td>
                                                      <td>{{$value->user->name}}</td>
                                                      <td>{{$value->user_id_fk}}</td>
                                                      <td>{{currency()}} {{$value->amount}}</td>
                                                      <td>{{$value->created_at}}</td>
                                                      <td>{{$value->transaction_id}}</td>
                
                                                      <td ><span class="badge bg-{{ $value->status == 'Active' ? 'success' : 'danger' }}">{{$value->status}}</span></td>
                                                  @endforeach
                
                                             <?php }?>
                                        </tbody>
                                       
                                    </table>
                                    
                                      <br>

                                    {{ $deposit_list->withQueryString()->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                 
					
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
