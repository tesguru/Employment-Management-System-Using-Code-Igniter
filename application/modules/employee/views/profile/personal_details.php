

<div class="row">

            <div class="col-lg-4">
                <div class="card user-card user-card-1">
                    <div class="card-body pb-0">
                        <div class="float-right">

                        </div>
                        <div class="media user-about-block align-items-center mt-0 mb-3">
                            <div class="position-relative d-inline-block">
                            <?php
$img_src = 'uploads/' . $this->session->userdata['passport'];
$alt_text = 'user-image';
$class_name = 'user-avtar';
$img_y = $this->session->userdata['passport'];

if (file_exists($img_src)) {
?>
    <img  class="img-radius img-fluid wid-100" src="<?php echo base_url($img_src); ?>" alt="<?php echo $alt_text; ?>" class="<?php echo $class_name; ?>">
<?php
} else {
?>
    <img  class="img-radius img-fluid wid-100" src="<?php echo ($img_y); ?>" alt="<?php echo $alt_text; ?>" class="<?php echo $class_name; ?>">
<?php
}

?>
                                <div class="certificated-badge">
                                    <i class="fas fa-certificate text-primary bg-icon"></i>
                                    <i class="fas fa-check front-icon text-white"></i>
                                </div>
                            </div>
                            <div class="media-body ml-3">
                                <h6 class="mb-1"><?php echo $personal_details['personal_record'][0]['firstname']?> <?php echo $personal_details['personal_record'][0]['lastname']?></h6>
                                <p class="mb-0 text-muted"><?php echo $personal_details['personal_record'][0]['department']?></p>
                            </div>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <span class="f-w-500"><i class="feather icon-mail m-r-10"></i> Email</span>
                            <a href="mailto:demo@sample" class="float-right text-body"><?php echo $personal_details['personal_record'][0]['email']?></a>
                        </li>
                        <li class="list-group-item">
                            <span class="f-w-500"><i class="feather icon-phone-call m-r-10"></i>Phone</span>
                            <a href="#" class="float-right text-body">(+99) 9999 999 999</a>
                        </li>
                        <li class="list-group-item border-bottom-0">
                            <span class="f-w-500"><i class="feather icon-map-pin m-r-10"></i>Location</span>
                            <span class="float-right">Lagos</span>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col">
                                
                            </div>
                            <div class="col border-left">
                               
                            </div>
                            <div class="col border-left">
                              
                            </div>
                        </div>
                    </div>
                    <div class="nav flex-column nav-pills list-group list-group-flush list-pills" id="user-set-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link list-group-item list-group-item-action active" id="user-set-profile-tab" data-toggle="pill" href="#user-set-profile" role="tab" aria-controls="user-set-profile" aria-selected="true">
                            <span class="f-w-500"><i class="feather icon-user m-r-10 h5 "></i>Profile Overview</span>
                            <span class="float-right"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-information-tab" data-toggle="pill" href="#user-set-information" role="tab" aria-controls="user-set-information" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-file-text m-r-10 h5 "></i>Personal Information</span>
                            <span class="float-right"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-account-tab" data-toggle="pill" href="#user-set-account" role="tab" aria-controls="user-set-account" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-book m-r-10 h5 "></i>Medical Details</span>
                            <span class="float-right"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-passwort-tab" data-toggle="pill" href="#user-set-passwort" role="tab" aria-controls="user-set-passwort" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-shield m-r-10 h5 "></i>Educational Details</span>
                            <span class="float-right"><i class="feather icon-chevron-right"></i></span>
                        </a>
                        <a class="nav-link list-group-item list-group-item-action" id="user-set-email-tab" data-toggle="pill" href="#user-set-email" role="tab" aria-controls="user-set-email" aria-selected="false">
                            <span class="f-w-500"><i class="feather icon-mail m-r-10 h5 "></i>Employment Details</span>
                            <span class="float-right"><i class="feather icon-chevron-right"></i></span>
                        </a>
                      
                    </div>
                </div>
              
            </div>
            <div class="col-lg-8">
                <div class="tab-content" id="user-set-tabContent">
                    <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                       
                        <div class="card">
                           
                            <div class="card-body">
                               
                                <h5 class="mt-5 mb-3">Personal Details</h5>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="">First Name</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo $personal_details['personal_record'][0]['firstname']?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Email</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo $personal_details['personal_record'][0]['email']?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Marital status</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['marital_status']) ? $personal_details['basic_record'][0]['marital_status'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Sex</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['sex']) ? $personal_details['basic_record'][0]['sex'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Date of Birth</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['date_of_birth']) ? $personal_details['basic_record'][0]['date_of_birth'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Phone no.</td>
                                            <td class="">:</td>
                                            <td class=""></td>
                                        </tr>
                                        <tr>
                                            <td class="">Nationality</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['nationality']) ? $personal_details['basic_record'][0]['nationality'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Address</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['address']) ? $personal_details['basic_record'][0]['address'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Origin</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['origin']) ? $personal_details['basic_record'][0]['origin'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Next of kin name</td>
                                            <td class="">:</td>
                                            <td class=""> <?php echo isset($personal_details['family_records'][0]['next_of_kin_name']) ? $personal_details['family_records'][0]['next_of_kin_name'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Relationship</td>
                                            <td class="">:</td>
                                            <td class=""> <?php echo isset($personal_details['family_records'][0]['relationship']) ? $personal_details['family_records'][0]['relationship'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Next of kin address</td>
                                            <td class="">:</td>
                                            <td class=""> <?php echo isset($personal_details['family_records'][0]['next_of_kin_address']) ? $personal_details['family_records'][0]['next_of_kin_address'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Next of kin phone no.</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['family_records'][0]['next_of_kin_phone_no']) ? $personal_details['family_records'][0]['next_of_kin_phone_no'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Next of kin email</td>
                                            <td class="">:</td>
                                            <td class=""> <?php echo isset($personal_details['family_records'][0]['next_of_kin_email']) ? $personal_details['family_records'][0]['next_of_kin_email'] : ''?></td>
                                        </tr>

                                    </tbody>
                                </table>
                                <h5 class="mt-5 mb-3">Medical details</h5>
                                <table class="table table-borderless">
                                <tbody>
                                        <tr>
                                            <td class="">Weight</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['weight']) ? $personal_details['basic_record'][0]['weight'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Height</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['height']) ? $personal_details['basic_record'][0]['height'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Genotype</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['genotype']) ? $personal_details['basic_record'][0]['genotype'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Blood group</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['blood_group']) ? $personal_details['basic_record'][0]['blood_group'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Having medical issue</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['disability']) ? $personal_details['basic_record'][0]['disability'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Medical history</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['basic_record'][0]['medical_history']) ? $personal_details['basic_record'][0]['medical_history'] : ''?></td>
                                        </tr>
                                        

                                    </tbody>
                                </table>

                                </table>
                                <h5 class="mt-5 mb-3">Educational details</h5>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="">University Name</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['institution_name']) ? $personal_details['educational_record'][0]['institution_name'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Country</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['country']) ? $personal_details['educational_record'][0]['country'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Year of entry</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['year_of_entry']) ? $personal_details['educational_record'][0]['year_of_entry'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Year of graduation</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['year_of_graduation']) ? $personal_details['educational_record'][0]['year_of_graduation'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Course of study</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['course_of_study']) ? $personal_details['educational_record'][0]['course_of_study'] : ''?>
                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">Type</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['type']) ? $personal_details['educational_record'][0]['type'] : ''?></td>
                                        </tr>

                                        <tr>
                                            <td class="">Degree Obtained</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['educational_record'][0]['degree_obtained']) ? $personal_details['educational_record'][0]['degree_obtained'] : ''?></td>
                                        </tr>
                                        

                                    </tbody>
                                </table>

                                <h5 class="mt-5 mb-3">Employment details</h5>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td class="">Post Name</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['post_name']) ? $personal_details['employment_record'][0]['post_name'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Country</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['reason_for_leaving']) ? $personal_details['employment_record'][0]['reason_for_leaving'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Year of entry</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['year_of_entry']) ? $personal_details['employment_record'][0]['year_of_entry'] : ''?> </td>
                                        </tr>
                                        <tr>
                                            <td class="">Year of leaving</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['year_of_leaving']) ? $personal_details['employment_record'][0]['year_of_leaving'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Starting Salary</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['starting_salary']) ? $personal_details['employment_record'][0]['starting_salary'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Final Salary</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['final_salary']) ? $personal_details['employment_record'][0]['final_salary'] : ''?></td>
                                        </tr>

                                        <tr>
                                            <td class="">Name of employer</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['name_of_employer']) ? $personal_details['employment_record'][0]['name_of_employer'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Address of employer</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['address_of_employer']) ? $personal_details['employment_record'][0]['address_of_employer'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Type of business</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['type_of_business']) ? $personal_details['employment_record'][0]['type_of_business'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Name of Supervisor</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['name_of_supervisor']) ? $personal_details['employment_record'][0]['name_of_supervisor'] : ''?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Reason for living</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo isset($personal_details['employment_record'][0]['reason_for_leaving']) ? $personal_details['employment_record'][0]['reason_for_leaving'] : ''?></td>
                                        </tr>
                                
                                            

                                    </tbody>
                                </table>
       
                                <?php foreach($fetch_hmo['result'] as $hmo) { ?>
        
                                <h5 class="mt-5 mb-3">HMO</h5>
                                <table class="table table-borderless">
                                <tbody>
                                        <tr>
                                            <td class="">Hospital Name</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo $hmo['hospital_name']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Address</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo $hmo['address']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Started Date</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo $hmo['start_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Expiry Date</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo $hmo['expiry_date']; ?></td>
                                        </tr>
                                        <tr>
                                            <td class="">Date Created</td>
                                            <td class="">:</td>
                                            <td class=""><?php echo date('F d, Y', strtotime($hmo['inserted_dt'])); ?>
</td>
                                        </tr>
                                       
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="card-body">
    
            </div>
                            </div>
                        </div>
                    </div>
                   

                    <div class="tab-pane fade" id="user-set-information" role="tabpanel" aria-labelledby="user-set-information-tab">
                        <div class="card">
                        <?php echo form_open('employee/personal_details_update')?>
                            <div class="card-header">
                                <h5><i data-feather="user" class="icon-svg-primary wid-20"></i><span class="p-l-5">Personal Information</span></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>First Name <span class="text-danger">*</span></label>
                                            <input
                              class="form-control"

                              type="text"
                              id="firstName"
                              name="first_name"
                              value="<?php echo $personal_details['personal_record'][0]['firstname'] ?>"
                              autofocus
                            />
                                        </div>
                                    </div>
                                    <input type="hidden" name="staff_id"  value="<?php echo $personal_details['personal_record'][0]['staff_id'] ?>" />
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Last Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text"  name="last_name" id="lastName" value=<?php echo $personal_details['personal_record'][0]['lastname']?> />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Middle Name <span class="text-danger">*</span></label>
                                            <input
        class="form-control"
        type="text"
        id="email"
        name="middle_name"
        value="<?php echo isset($personal_details['basic_record'][0]['middle_name']) ? $personal_details['basic_record'][0]['middle_name'] : '' ?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input type="text" name="email" class="form-control" value="<?php echo $personal_details['personal_record'][0]['email']?>">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Marital Status <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                            
                              name="marital_status"
                              value="<?php echo isset($personal_details['basic_record'][0]['marital_status']) ? $personal_details['basic_record'][0]['marital_status'] : ''?>"
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Sex<span class="text-danger">*</span></label>
                                            <select name="sex" id="select" class="form-control">
    <option value="0">Please select</option>
    <option value="Male"<?php if (isset($personal_details['basic_record'][0]['sex']) && $personal_details['basic_record'][0]['sex'] == 'Male') echo ' selected'; ?>>Male</option>
    <option value="Female"<?php if (isset($personal_details['basic_record'][0]['sex']) && $personal_details['basic_record'][0]['sex'] == 'Female')  echo ' selected'; ?>>Female</option>
</select>                            
</div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Date of birth <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                            
                              name="dob"
                              value="<?php echo isset($personal_details['basic_record'][0]['date_of_birth']) ? $personal_details['basic_record'][0]['date_of_birth'] : ''?>"
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Phone no <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" value="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nationality<span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="nationality"
                              value = "<?php echo isset($personal_details['basic_record'][0]['nationality']) ? $personal_details['basic_record'][0]['nationality'] : ''?>"
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Address<span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                            
                              name="address"
                              value="<?php echo isset($personal_details['basic_record'][0]['address']) ? $personal_details['basic_record'][0]['address'] : ''?>"
                            >
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Origin<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  name="origin"
                              value= <?php echo isset($personal_details['basic_record'][0]['origin']) ? $personal_details['basic_record'][0]['origin'] : ''?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Next Of Kin Name<span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                              
                              name="next_of_kin_name"
                              value= <?php echo isset($personal_details['family_records'][0]['next_of_kin_name']) ? $personal_details['family_records'][0]['next_of_kin_name'] : ''?>
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Relationship<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text"  id="lastName" name="nrelationship"   value= <?php echo isset($personal_details['family_records'][0]['next_of_kin_relation']) ? $personal_details['family_records'][0]['next_of_kin_relation'] : ''?>
                          >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Next of kin address<span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                             
                              name="naddress"
                              value= <?php echo isset($personal_details['family_records'][0]['next_of_kin_address']) ? $personal_details['family_records'][0]['next_of_kin_address'] : ''?>
                            
                            >
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Next of kin Phone number <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="nphoneno"
                              value= <?php echo isset($personal_details['family_records'][0]['next_of_kin_phone_no']) ? $personal_details['family_records'][0]['next_of_kin_phone_no'] : ''?>
                          
                            >
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Next of kin email <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                            
                              name="nemail"
                              value= <?php echo isset($personal_details['family_records'][0]['next_of_kin_email']) ? $personal_details['family_records'][0]['next_of_kin_email'] : ''?>
                            >
                                        </div>
                                    </div>
                                    </div>
                                    </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update Profile</button>
                                <button class="btn btn-outline-dark ml-2">Clear</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                    <div class="tab-pane fade" id="user-set-account" role="tabpanel" aria-labelledby="user-set-account-tab">
                    <?php echo form_open('employee/medical_details_insert_update')?>
                        <div class="card">
                            <div class="card-header">
                                <h5><i data-feather="user" class="icon-svg-primary wid-20"></i><span class="p-l-5">Medical Details</span></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                            
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Weight <span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="weight"
                              value= <?php echo isset($personal_details['basic_record'][0]['weight']) ? $personal_details['basic_record'][0]['weight'] : ''?>
                            
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Height<span class="text-danger">*</span></label>
                                            <input class="form-control" type="text" name="height" id="lastName"     value= <?php echo isset($personal_details['basic_record'][0]['height']) ? $personal_details['basic_record'][0]['height'] : ''?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Genotype<span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="genotype"
                              value= <?php echo isset($personal_details['basic_record'][0]['genotype']) ? $personal_details['basic_record'][0]['genotype'] : ''?>>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Blood group<span class="text-danger">*</span></label>
                                            <select name="blood_group" id="select" class="form-control">
    <option value="0">Please select</option>
    <option value="AS"<?php if (isset($personal_details['basic_record'][0]['blood_group']) && $personal_details['basic_record'][0]['blood_group'] == 'AS') echo ' selected'; ?>>AS</option>
    <option value="SS"<?php if (isset($personal_details['basic_record'][0]['blood_group']) && $personal_details['basic_record'][0]['blood_group'] == 'SS')  echo ' selected'; ?>>SS</option>
    <option value="AA"<?php if (isset($personal_details['basic_record'][0]['blood_group']) && $personal_details['basic_record'][0]['blood_group'] == 'AA')  echo ' selected'; ?>>AA</option>
</select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Having medical issue<span class="text-danger">*</span></label>
                                            <select name="having_medical_issue" id="select" class="form-control">
    <option value="0">Please select</option>
    <option value="Yes"<?php if (isset($personal_details['basic_record'][0]['disability']) && $personal_details['basic_record'][0]['disability'] == 'Yes') echo ' selected'; ?>>Yes</option>
    <option value="No"<?php if (isset($personal_details['basic_record'][0]['disability']) && $personal_details['basic_record'][0]['disability'] == 'No') echo ' selected'; ?>>No</option>
</select>
                                        </div>
                                    </div>
                                    <input type="hidden" name="staff_id"  value="<?php echo $personal_details['personal_record'][0]['staff_id'] ?>" />

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Medical history <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="medical_history" id="exampleFormControlTextarea1" rows="3"> <?php echo isset($personal_details['basic_record'][0]['medical_history']) ? $personal_details['basic_record'][0]['medical_history'] : ''?></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    </div>


                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update Profile</button>
                                <button class="btn btn-outline-dark ml-2">Clear</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                  
                    <div class="tab-pane fade" id="user-set-passwort" role="tabpanel" aria-labelledby="user-set-passwort-tab">
                    <?php echo form_open('employee/education_insert_update')?>
                        <div class="card">
                            <div class="card-header">
                            <h5><i data-feather="user" class="icon-svg-primary wid-20"></i><span class="p-l-5">Educational Details</span></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>University Name <span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                             \
                              name="uniname"
                              value= "<?php echo isset($personal_details['educational_record'][0]['institution_name']) ? $personal_details['educational_record'][0]['institution_name'] : ''?>"
                      
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Country <span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="unicountry"
                              value=<?php echo isset($personal_details['educational_record'][0]['country']) ? $personal_details['educational_record'][0]['country'] : ''?>
                            
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Year of entry <span class="text-danger">*</span></label>
                                            <input
                              type="date"
                              class="form-control"
                              
                              name="stwhen"
                              value=<?php echo isset($personal_details['educational_record'][0]['year_of_entry']) ? $personal_details['educational_record'][0]['year_of_entry'] : ''?>
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Ended when <span class="text-danger">*</span></label>
                                            <input
                              type="date"
                              class="form-control"
                              
                              name="stend"
                              value=<?php echo isset($personal_details['educational_record'][0]['year_of_graduation']) ? $personal_details['educational_record'][0]['year_of_graduation'] : ''?>
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Course of study <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="course"
                            value=<?php echo isset($personal_details['educational_record'][0]['course_of_study']) ? $personal_details['educational_record'][0]['course_of_study'] : ''?>
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Type <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="type"
                              value=<?php echo isset($personal_details['educational_record'][0]['type']) ? $personal_details['educational_record'][0]['type'] : ''?>
                            >
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Degree Obtained <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="degree"
                              value=<?php echo isset($personal_details['educational_record'][0]['degree_obtained']) ? $personal_details['educational_record'][0]['degree_obtained'] : ''?>
                            ><input type="hidden" name="staff_id" value="<?php echo $personal_details['personal_record'][0]['staff_id'];?>" >
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update Profile</button>
                                <button class="btn btn-outline-dark ml-2">Clear</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close()?>
                    <div class="tab-pane fade" id="user-set-email" role="tabpanel" aria-labelledby="user-set-email-tab">
                    <?php echo form_open('employee/employment_insert_update')?>
                    
                    <div class="card">
                            <div class="card-header">
                            <h5><i data-feather="user" class="icon-svg-primary wid-20"></i><span class="p-l-5">Employment Details</span></h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Post Name <span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="date"
                              id="firstName"
                              name="post_name"
                              value="<?php echo isset($personal_details['employment_record'][0]['post_name']) ? $personal_details['employment_record'][0]['post_name'] : 'hhhh'?>"
                            
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Year of entry <span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="date"
                              id="firstName"
                              name="fmy"
                              value="<?php echo isset($personal_details['employment_record'][0]['year_of_entry']) ? $personal_details['employment_record'][0]['year_of_entry'] : ''?>"
                            
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Year of Leaving <span class="text-danger">*</span></label>
                                            <input class="form-control" type="date" name="tmy" id="lastName" value="<?php echo isset($personal_details['employment_record'][0]['year_of_leaving']) ? $personal_details['employment_record'][0]['year_of_leaving'] : ''?>" />
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Starting Salary<span class="text-danger">*</span></label>
                                            <input
                              class="form-control"
                              type="text"
                              id="email"
                              name="start"
                              value="<?php echo isset($personal_details['employment_record'][0]['starting_salary']) ? $personal_details['employment_record'][0]['starting_salary'] : ''?>"
                            
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Final Salary<span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="final"
                              value="<?php echo isset($personal_details['employment_record'][0]['final_salary']) ? $personal_details['employment_record'][0]['final_salary'] : ''?>"
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name of employer<span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="nameofemployer"
                              value="<?php echo isset($personal_details['employment_record'][0]['name_of_employer']) ? $personal_details['employment_record'][0]['name_of_employer'] : ''?>"
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Address of employer <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="addressofemployer"
                              value="<?php echo isset($personal_details['employment_record'][0]['address_of_employer']) ? $personal_details['employment_record'][0]['address_of_employer'] : ''?>"
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Type of business <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="typeofbs"
                              value="<?php echo isset($personal_details['employment_record'][0]['type_of_business']) ? $personal_details['employment_record'][0]['type_of_business'] : ''?>"
                            />
                                        </div>
                                    </div>
                                    <input type="hidden" name="staff_id" value="<?php echo $personal_details['personal_record'][0]['staff_id'];?>" >
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Name of supervisor <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="nameofsupervisor"
                              value="<?php echo isset($personal_details['employment_record'][0]['supervisor_name']) ? $personal_details['employment_record'][0]['supervisor_name'] : ''?>"
                            />
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Reason for living <span class="text-danger">*</span></label>
                                            <input
                              type="text"
                              class="form-control"
                              
                              name="reasonforliving"
                              value="<?php echo isset($personal_details['employment_record'][0]['reason_for_leaving']) ? $personal_details['employment_record'][0]['reason_for_leaving'] : ''?>"
                            />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Description of duties <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="duties" id="exampleFormControlTextarea1" rows="3"><?php echo isset($personal_details['employment_record'][0]['description_of_duty']) ? $personal_details['employment_record'][0]['description_of_duty'] : ''?></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Update Change</button>
                                <button class="btn btn-outline-dark ml-2">Clear</button>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>






