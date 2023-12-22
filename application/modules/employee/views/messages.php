

<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Message</h5>
                        </div>
                    
                      
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- DOM/Jquery table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5></h5>
                    </div>
                   
                    <div class="card-body">
                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                            <?php if (empty($fetch_message['result'])) { ?>
<h2 class="text-center">No message</h2>
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
                                <tr>
                                                 
    <?php $i = 1;
    foreach ($fetch_message['result'] as $message) { ?>
        
            <td><?php echo $i; ?></td>
            <td>HR</td>
            <td><?php echo $message['subject']; ?></td>
            <td><?php echo date('F d, Y', strtotime($message['inserted_dt'])); ?></td>
            <td><a href="<?php echo site_url('employee/read_message/' . base64_encode($message['id'])); ?>"><i class="fa fa-eye"></i></a></td>
        </tr>
    <?php $i++;
    } ?>
<?php } ?>


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        