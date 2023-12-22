
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard</h5>
                        </div>
                        <ul class="breadcrumb">
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="row">
           
      
     	
            <div class=" col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="	fa fa-dollar f-20 text-info"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Allowance paid</h6>
                                <?php if (empty($allowance['result'])) { ?>
   
                                    <h2 class="m-b-0">0</h2>
<?php } else {
    foreach($allowance['result'] as $allowancee) {
        $total = intval($allowancee['leave_allowance'] ?? 0) + intval($allowancee['data_allowance'] ?? 0) + intval($allowancee['basic_salary'] ?? 0) + intval($allowancee['other_allowance'] ?? 0);
        if (!empty($allowancee) && isset($total)) { ?>
            <h2 class="m-b-0"><?php echo $total; ?></h2>
        <?php }
    }
} ?>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fa fa-pencil-square-o f-20  text-danger"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Atttendance</h6>
                                <h2 class="m-b-0">0</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class=" col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                               
                                <i class="fa fa-walking f-20  text-primary"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Leave</h6>
                                <h2 class="m-b-0">0</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class=" col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center m-l-0">
                            <div class="col-auto">
                                <i class="fa fa-comment  f-20 text-"></i>
                            </div>
                            <div class="col-auto">
                                <h6 class="text-muted m-b-10">Message</h6>
                                <?php if (empty($message_count['result'])) { ?>
    <h2 class="m-b-0">0</h2>
<?php } else {
    foreach($message_count['result'] as $count_message) {
?>
        <h2 class="m-b-0"><?php echo $count_message['no_of_new_message']; ?></h2>
<?php
    }
} 
?>

                                </div>
                        </div>
                    </div>
                </div>
            </div>    
           
           
           
            <div class=" col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5></h5>Messages
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                    <li class="dropdown-item close-card"><a href="#!"><i class="feather icon-trash"></i> remove</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                 
    
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0 table-borderless">
                            <?php if (empty($fetch_message['result'])) { ?>
  <p class="text-center">No new message</p>
  <?php } else { ?>  
                                <thead>
                                   
                                <tr>
                                    <th>S/N</th>
                                        <th>From</th>
                                        <th>Title</th>
                                        <th>Date</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
    <table>
        <tbody> <!-- Added tbody tag -->
            <?php $i = 1;
            foreach ($fetch_message['result'] as $message) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td>HR</td>
                    <td><?php echo $message['subject']; ?></td>
                    <td><?php echo date('F d, Y', strtotime($message['inserted_dt'])); ?></td>
                </tr>
            <?php $i++; 
            } ?>
        </tbody> <!-- Added closing tbody tag -->
    </table>
<?php } ?>
<?php if (empty($fetch_message['result'])) { ?>
   
   <?php } else { // Replaced `else (count($fetch_message['result']) > 5)` with `else` ?>
       <?php if (count($fetch_message['result']) > 5) { ?>
           <div class="text-center">
               <a href="<?php echo site_url('employee/read_message') ?>" class="b-b-primary text-primary">View More</a>
           </div>
       <?php } ?>
   <?php } ?>
   


                        </div>
                    </div>
                </div>
            </div>
          

            
          
            <!-- Tasks end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>
