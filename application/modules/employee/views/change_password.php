


<div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Change Password</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"></a></li>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- [ Form Validation ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Input password</h5>
                    </div>
                 
                    <div class="card-body">
                    <?php echo form_open('employee/reset_password')?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Old Password</label>
                                        <input type="text"   name = "password" class="form-control" name="validation-email" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="text"  name = "new_password" class="form-control"value= >
                                    </div>
                                </div>
                                    <input type="hidden" name="staff_id"  value="<?php echo $personal_details['personal_record'][0]['staff_id'] ?>"> 
                                                        

                            </div>
                            <button type="submit" class="btn  btn-primary">Change password</button>
                        </form>
                    </div>
                 
                </div>
            </div>
            <!-- [ Form Validation ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>