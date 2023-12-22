<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Message</h5>
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
                <div class="card email-card">
                    <div class="card-header">
                        <div class="mail-header">
                            <div class="row align-items-center">
                                <!-- [ email-left section ] start -->
                                <div class="col-xl-2 col-md-3">
                                    <a href="#!" class="email-mob-toggle text-dark">
                                        <i data-feather="menu" class="wid-20 hei-20"></i>
                                    </a>
                                    <a href="#!" class="b-brand">
                                        <img src="assets/images/logo-dark.svg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <!-- [ email-left section ] end -->
                                <!-- [ email-right section ] start -->
                                <div class="col-xl-10 col-md-9">
                                    <div class="input-group mb-0">
                        
                                </div>
                                <!-- [ email-right section ] end -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="mail-body">
                            <div class="row">
                                <!-- [ email-left section ] start -->
                                <div class="col-xl-2 col-md-3 mail-left">
                                    <div class="mail-l-content">
                                        <div class="mb-3">

                                        </div>
                                
                                       
                                        <div class="collapse" id="email-more-cont">
                                            <ul class="nav nav-tab flex-column nav-pills">
                                               
                                             
                                             
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                          
                                <div class="col-xl-12 col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                        <?php foreach ($get_single_message['result'] as $message) { ?>
                                            <h6 class="d-inline-block m-0"></h6>
                                            <h4 class="d-inline-block m-0 text-primary"><?php echo $message['subject'];?></h4>
                                            
                                            <p class="float-right m-0"><strong> <?php echo date('F d, Y', strtotime($message['inserted_dt'])); ?></strong></p>
                                        </div>
                                        <div class="card-body">
                                            <div class="email-read">
                                                <div class="photo-table m-r-10">
                                                   
                                                </div>
                                                
                                            </div>
                                            <div class="m-b-20 m-l-50 p-l-10 email-contant">
                                                <div class="photo-contant">
                                            
                                                    <div>
                                                        <br>
                                                       
                                                        <p class="user-name text-dark mb-1"><strong><?php echo $message['message'];?></strong></p>
                                                        <div class="col-md-12">
                                                       
                                                        <?php echo form_open('employee/reply_message')?> 
                                    <input type="hidden" name="staff_id"  value="<?php echo $personal_details['personal_record'][0]['staff_id'] ?>"> 
                                                        <input type="hidden" name="complaint_id"  value="<?php echo $message['id'] ?>"> 
                                                        <div class="form-group">
                                        <label class="form-label">Reply</label>
                                        <textarea class="form-control" name="reply"  rows="3"></textarea>
                                    </div>
                                                         <button class="btn btn-primary">Reply</button>
                                </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</section>