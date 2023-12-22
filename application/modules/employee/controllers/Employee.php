<?php
class Employee extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->module('template');
        $this->load->library('session');
        $this->load->module('utility');
        $this->load->module('auth');
    }

    public function index()
    {
        $staff_id = $this->session->userdata('staff_id');
      $not_total = 0;
        $fetch_allowance = $this->utility->fetch_staff_allowance($staff_id);
        $get_employee = $this->utility->get_single_employee($staff_id);
        $fetch_news =  $this->utility->fetch_news();
        $fetch_message = $this->utility->fetch_complaint($staff_id );
        $message_count = $this->utility->total_message($staff_id );
       
        
        $data = array(
            'title' => 'Dashboard',
            'content_view' => 'employee/index',
            'staff_id' => $staff_id,
            'personal_details' => $get_employee,
            'allowance'=>$fetch_allowance,
            'news'=> $fetch_news ,
            'not_total' =>  $not_total,
            'fetch_message'=>   $fetch_message,
            'message_count'=>   $message_count
        );
      
   

        // Load the general template and pass in the data
        $this->template->general_template($data);

    }

    public function profile()
    {
        $staff_id = $this->session->userdata('staff_id');
        $get_employee = $this->utility->get_single_employee($staff_id);
        $fetch_hmo = $this->utility->fetch_staff_hmo($staff_id);
        $fetch_news =  $this->utility->fetch_news();
        $data = array(
            'title' => 'Profile',
            'content_view' => 'employee/profile/personal_details',
         'personal_details'=>  $get_employee,
         'fetch_hmo'=>  $fetch_hmo,
         'news'=> $fetch_news
        );
        $this->template->general_template($data);
    }

    public function allowance()
    {
        $staff_id = $this->session->userdata('staff_id');
        $fetch_allowance = $this->utility->fetch_staff_allowance($staff_id);
        $get_employee = $this->utility->get_single_employee($staff_id);
        $fetch_news =  $this->utility->fetch_news();
        $data = array(
            'title' => ' Allowance',
            'content_view' => 'employee/allowance',
            'staff_id' => $staff_id,
            'fetch_allowance' => $fetch_allowance,
            'personal_details' => $get_employee,
            'news'=> $fetch_news
            
            
        );
        $this->template->general_template($data);
    }
    public function updates()
    {
        $staff_id = $this->session->userdata('staff_id');
        $get_employee = $this->utility->get_single_employee($staff_id);
        $fetch_news =  $this->utility->fetch_news();

        $data = array(
            'title' => 'Company news',
            'content_view' => 'employee/updates',
            'staff_id' => $staff_id,
            'news' => $fetch_news,
            'personal_details' => $get_employee,
          
           
        );

        $this->template->general_template($data);
    }
    public function read_news($news_id)
    {
        $staff_id = $this->session->userdata('staff_id');
        $get_employee = $this->utility->get_single_employee($staff_id);
        $news_id = base64_decode($news_id);
        $get_single_news = $this->utility->get_single_news($news_id);
    
        $data = array(
            'title' => 'Company news',
            'content_view' => 'employee/read_news',
            'news'  =>  $get_single_news,
            'personal_details' => $get_employee
);

        $this->template->general_template($data);
    }
    

    public function personal_details_update()
    {
        
        $staff_id = $this->input->post('staff_id');
        $middle_name = $this->input->post('middle_name');
        $sex = $this->input->post('sex');
        $marital_status = $this->input->post('marital_status');
        $origin = $this->input->post('origin');
        $date_of_birth = $this->input->post('dob');
        $nationality = $this->input->post('nationality');
        $nextofkinname = $this->input->post('next_of_kin_name');
        $nextofkinrelationship = $this->input->post('nrelationship');
        $address = $this->input->post('address');
        $phone_no = $this->input->post('phone_no');
        $nextofkinaddress = $this->input->post('naddress');
        $next_of_kin_phone_no = $this->input->post('nphoneno');
        $next_of_kin_email = $this->input->post('nemail');
       
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'department'=> $this->input->post('department'),
            'middle_name' => $this->input->post('middle_name'),
            'marital_status' => $marital_status,
            'date_of_birth' => $date_of_birth,
            'permanent_address' => $address,
            'sex' => $sex,
            'nationality' => $nationality,
            'origin' => $origin,
            'staff_id' => $staff_id,
            'next_of_kin_phone_no' => $next_of_kin_phone_no,
            'next_of_kin_name' => $nextofkinname,
            'next_of_kin_relation' => $nextofkinrelationship,
            'next_of_kin_address' => $nextofkinaddress,
            'next_of_kin_email' => $next_of_kin_email,

        );

        $update_basic_record = $this->utility->update_basic_record($staff_id, $data);
        $update_family_record = $this->utility->update_family_record($staff_id, $data);
        $update_personal_record = $this->utility->update_personal_record($staff_id, $data);
        if ($update_basic_record || $update_family_record ||  $update_personal_record  == true) {
            $this->session->set_flashdata('success', 'Personal details updated succesfully');
            return redirect('employee/profile');

        } else {
            return redirect('employee/profile');
        }
    }

    
   

    public function medical_details_insert_update()
    {

        $staff_id = $this->input->post('staff_id');
        $height = $this->input->post('height');
        $weight = $this->input->post('weight');
        $blood_group = $this->input->post('blood_group');
        $genotype = $this->input->post('genotype');
        $medical_history = $this->input->post('medical_history');
        $disability = $this->input->post('having_medical_issue');

        $data = array(
            'staff_id' => $staff_id,
            'height' => $height,
            'weight' => $weight,
            'blood_group' => $blood_group,
            'genotype' => $genotype,
            'medical_history' => $medical_history,
            'disability' => $disability,
        );

      
        $update_basic_record = $this->utility->update_basic_record($staff_id, $data);
        if ($update_basic_record == true) {
            $this->session->set_flashdata('success', 'Medical details updated succesfully');
            $this->profile();
          
        } else {

            $this->profile();
        }
    }

    public function education_insert_update()
    {
        $staff_id = $this->input->post('staff_id');
        $institution_name = $this->input->post('uniname');
        $country = $this->input->post('unicountry');
        $year_of_entry = $this->input->post('stwhen');
        $year_of_graduation = $this->input->post('stend');
        $degree = $this->input->post('degree');
        $course_of_study = $this->input->post('course');
        $type = $this->input->post('type');

        $data = array(
            'staff_id' => $staff_id,
            'institution_name' => $institution_name,
            'country' => $country,
            'year_of_entry' => $year_of_entry,
            'year_of_graduation' => $year_of_graduation,
            'degree_obtained' => $degree,
            'course_of_study' => $course_of_study,
            'type' => $type,

        );

        $update_education_record = $this->utility->update_education_record($staff_id, $data);
        if ($update_education_record == true) {
            $this->session->set_flashdata('success', 'Educational details updated succesfully');
            $this->profileX();

        } else {
            $this->profileX();
        }

    }

    public function employment_insert_update()
    {

        $staff_id = $this->input->post('staff_id');
        $data = array(
            'staff_id' => $this->input->post('staff_id'),
            'year_of_entry' => $this->input->post('fmy'),
            'year_of_leaving' => $this->input->post('tmy'),
            'starting_salary' => $this->input->post('start'),
            'final_salary' => $this->input->post('final'),
            'name_of_employer' => $this->input->post('nameofemployer'),
            'address_of_employer' => $this->input->post('addressofemployer'),
            'type_of_business' => $this->input->post('typeofbs'),
            'supervisor_name' => $this->input->post('nameofsupervisor'),
            'post_name' => $this->input->post('post_name'),
            'reason_for_leaving' => $this->input->post('reasonforliving'),
            'description_of_duty' => $this->input->post('duties'),
        );
        $update_employment_record = $this->utility->update_employment_record($staff_id, $data);
        if ($update_employment_record == true) {
            $this->session->set_flashdata('success', 'Employment record updated succesfully');
            $this->profile();

        } else {

            $this->profile();
        }

    }



    public function Invoice(){
        $staff_id = $this->session->userdata('staff_id');
        $get_employee = $this->utility->get_single_employee($staff_id);
        $fetch_allowance = $this->utility->fetch_staff_allowance($staff_id);
        $fetch_news =  $this->utility->fetch_news();
        $data = array(
            'title' => 'Invoice',
            'content_view' => 'employee/invoice',
            'personal_details' => $get_employee,
            'allowance'=>$fetch_allowance,
        );
        $this->template->general_template($data);

    }

    
    public function apply_for_leave(){
        $staff_id = $this->session->userdata('staff_id');
      $not_total = 0;
        $fetch_allowance = $this->utility->fetch_staff_allowance($staff_id);
        $get_employee = $this->utility->get_single_employee($staff_id);
        $fetch_news =  $this->utility->fetch_news();
    
        
        $data = array(
            'title' => 'Leave',
            'content_view' => 'employee/apply_for_leave',
            'staff_id' => $staff_id,
            'personal_details' => $get_employee,
            'allowance'=>$fetch_allowance,
            'news'=> $fetch_news ,
            'not_total' =>  $not_total
        );
        $this->template->general_template($data);

}

public function leave_history(){
    $staff_id = $this->session->userdata('staff_id');
  $not_total = 0;
    $fetch_allowance = $this->utility->fetch_staff_allowance($staff_id);
    $get_employee = $this->utility->get_single_employee($staff_id);
    $fetch_news =  $this->utility->fetch_news();

    
    $data = array(
        'title' => 'Leave',
        'content_view' => 'employee/leave_history',
        'staff_id' => $staff_id,
        'personal_details' => $get_employee,
        'allowance'=>$fetch_allowance,
        'news'=> $fetch_news ,
        'not_total' =>  $not_total
    );
    $this->template->general_template($data);

}
public function messages(){
    $staff_id = $this->session->userdata('staff_id');
    $get_employee = $this->utility->get_single_employee($staff_id);
    $fetch_news =  $this->utility->fetch_news();
    $fetch_message = $this->utility->fetch_complaint($staff_id );
    
    $data = array(
        'title' => 'Message',
        'content_view' => 'employee/messages',
        'personal_details' => $get_employee,
        'news'=> $fetch_news, 
        'fetch_message'=>   $fetch_message
        
    );
  
    $this->template->general_template($data);

}
public function read_message($complaint_id){
    $staff_id = $this->session->userdata('staff_id');
    $get_employee = $this->utility->get_single_employee($staff_id);
    $fetch_news =  $this->utility->fetch_news();
    $complaint_id = base64_decode($complaint_id);
        
 

    $get_single_message = $this->utility->get_single_complaint($complaint_id );
    
   
    $data = array(
        'title' => 'Message',
        'content_view' => 'employee/read_message',
        'personal_details' => $get_employee,
        'news'=> $fetch_news, 
       
        'get_single_message'=>   $get_single_message,

        
    );
  
    $this->template->general_template($data);

}


public function reply_message(){
    $staff_id = $this->input->post('staff_id');
    $reply = $this->input->post('reply');
    $complaint_id =  $this->input->post('complaint_id');

    $data = array(
       'staff_id' => $staff_id,
       'message' => $reply, 
       'complaint_id' =>  $complaint_id

    );

    $insert_reply = $this->utility->reply_complaint($data);

    if ($insert_reply){
       
        $this->session->set_flashdata('success', 'Message sent');
    $this->messages();
    }
    else{
       
        $this->session->set_flashdata('error', 'Message not sent');
        $this->messages();
    }
}

public function forget_password(){
    $staff_id = $this->session->userdata('staff_id');
    $get_employee = $this->utility->get_single_employee($staff_id);
    $fetch_news =  $this->utility->fetch_news();
  
        

    $data = array(
        'title' => 'Forgot password',
        'content_view' => 'employee/change_password',
        'personal_details' => $get_employee,
        'news'=> $fetch_news,       
    );
  
    $this->template->general_template($data);

}

public function reset_password(){
    $staff_id = $this->input->post('staff_id');
    $password = $this->input->post('password');
    $new_password =$this->input->post('new_password');

    $data = array(
'staff_id' => $staff_id,
'password' => $password,
'new_password' => $new_password
    );
 

 $reset_password = $this->utility->reset_password($data);
 if($reset_password){
    $this->session->set_flashdata('success', 'Password changed successfully');
  $this->index();
 }  
 else{
echo "not updated";
 }
}

}