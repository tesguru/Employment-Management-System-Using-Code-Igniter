
       
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Allowance</h5>
                        </div>
                        <ul class="breadcrumb">
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            
          
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Allowance</h5>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                            <?php if (empty($fetch_allowance['result'])) { ?>
    <h2 class="text-center">No allowance yet </h2>
<?php } 

else { ?>
    <thead>
        <tr>
            <th>S/N</th>
            <th>Date</th>
            <th>Allowance</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($fetch_allowance['result'] as $allowance) { ?>
    <tr>
        <td>1</td>
        <td><?php echo date('F d, Y', strtotime($allowance['inserted_dt'])); ?></td>
        <td>N<?php echo $total = intval($allowance['leave_allowance']) + intval($allowance['data_allowance']) + intval($allowance['basic_salary']) + intval($allowance['other_allowance']); ?></td>
        <td><a href="<?php echo site_url('employee/invoice')?>" class="text-success">  <i class="text-primary fa fa-eye"></i></a></td>
    </tr>
<?php } ?>
</tbody>
<?php } ?>







                                  
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    
           
        </div>
      
    </div>
</section>