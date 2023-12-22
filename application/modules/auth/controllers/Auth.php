<?php
class Auth extends MX_controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->module('template');
        $this->load->model('authmodel');
        $this->load->module('utility');
       

    }

    public function index()
    {

        $data = array(
            'content_view' => 'auth/login.php',
            'title' => 'LOGIN',
        );

        $this->template->auth_template($data);
    }

    public function create_user_account()
    {

        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('department', 'Department', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == false) {
            $this->create_account();
        } else {
            if (!empty($_FILES['employee_image']['name'])) {
                $config['upload_path'] = './uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['employee_image']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ($this->upload->do_upload('employee_image')) {
                    $uploadData = $this->upload->data();
                    $profile_img = $uploadData['file_name'];
                } else {
                    $profile_img = "";
                }
            } else {
                $profile_img = "default.png";
            }

            $email = $this->input->post('email');
            $firstname = $this->input->post('first_name');
            $lastname = $this->input->post('last_name');
            $password = $this->input->post('password');
            $department = $this->input->post('department');
            $data_sending_to_api = array('email' => $email,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'password' => $password,
                'department' => $department,
                'picture' => $profile_img,
            );
           
            $send_data = $this->utility->create_account($data_sending_to_api);
           
            if ($send_data['status_code'] == 0) {
                // $message = $send_data['message'].', Good Afternoon '. $send_data['user_detail'][0]['firstname'].' '. $send_data['user_detail'][0]['lastname'];
                $this->session->set_flashdata('success', 'Account Created Successful, Proceed to Login');
                return redirect('auth/index');
            } else {
                $this->session->set_flashdata('error', 'Email already exist');
                return redirect('auth/create_account');
            }

        }
    }
    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $data_sending_to_api = array('email' => $email, 'password' => $password);
        
        $send_data = $this->utility->login($data_sending_to_api);

        if ($send_data['status_code'] == 0) {
            if ($send_data['staff_detail'][0]['staff_type'] == 'employee') {
                $this->session->set_flashdata('success', 'Login successful');
                $staff_id = $send_data['staff_detail'][0]['staff_id'];
                $passport = $send_data['staff_detail'][0]['passport'];
    $data = array(
        'staff_id' => $staff_id,
        'passport' => $passport);
            $this->session->set_userdata($data);
                return redirect('employee/index'); // Redirect to desired page
            } else {
                $this->session->set_flashdata('error', 'You are not Approved to use this System'); // Set error message as flashdata
                return redirect('auth'); // Redirect to desired page
            }
        } else {
            $this->session->set_flashdata('error', $send_data['message']); // Set error message as flashdata
            return redirect('auth'); // Redirect to desired page
        }
    }
    
    

    public function create_account()
    {
        $data = array('title' => 'Create Account',
            'content_view' => 'auth/createaccount');
        $this->template->auth_template($data);
    }

    public function forget_password()
    {
        $data = array('title' => 'Reset password',
            'content_view' => 'auth/reset');
        $this->template->auth_template($data);
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
echo "password Updated sucessfully";
     }  
     else{
echo "not updated";
     }
    }

    public function sign_out()
    {
        session_destroy();
        redirect('auth');
    }

}
