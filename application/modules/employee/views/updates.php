

        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Company News</h5>
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
                        <h5>News</h5>
                    </div>
                   
                    <div class="card-body">
                        <div class="table-responsive dt-responsive">
                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                <thead>
                              
                                    <tr>
                                    <th>S/N</th>
                                        <th>Posted by</th>
                                        <th>Title</th>
                                        <th>Date posted</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php  $i = 1; foreach ($news['result'] as $newss) { ?>
                                        <td><?php echo $i; ?></</td>
                                        <td>    HR   </td>
                                        <td><?php echo $newss['title']; ?></a></td>
                                        <td><?php echo $newss['inserted_dt']; ?></a></td>
                                        <td> <a href="<?php echo site_url('employee/read_news/' . base64_encode($newss['id'])); ?>">  <i class=" fa fa-eye"></i></a></td>
                                       
                                    </tr>
                                    <?php  $i++; } ?> 
                                   
                                </tbody>
                                  
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        