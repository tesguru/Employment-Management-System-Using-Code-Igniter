<?php 
class Authmodel extends CI_Model{
    public function insert_data($user_data){
        $sqlQuery  = $this->db->insert('user_details', $user_data);
        return $sqlQuery;
    }
    public function check_user_email($user_email){
        $sqlQuery = $this->db->get_where('user_details', array('email'=>$user_email))->result_array();
        return $sqlQuery;
    }

    public function validate_user($email,$password){
        $sqlQuery = $this->db->query("SELECT first_name,last_name,email,staff_type,staff_id FROM user_details WHERE email='$email' AND password='$password'")->result_array();
        return $sqlQuery;

    }

    public function validate_staff_id($staff_id){
        $sqlQuery = $this->db->query("SELECT first_name,last_name,email,staff_type,staff_id FROM user_details WHERE staff_id='$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function validate_employee_id_copy($staff_id){
        $sqlQuery = $this->db->query("SELECT * FROM user_details WHERE staff_id = '$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function update_personal_details($staff_id, $user_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->update("user_details", $user_details);
        return $query;
    }

    public function select_medical_details($staff_id){
        $sqlQuery = $this->db->query("SELECT * FROM medical_details WHERE staff_id = '$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function update_medical_details($staff_id, $medical_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->update("medical_details", $medical_details);
        return $query;
    }
    public function insert_medical_details($staff_id, $medical_details) {
        $query = $this->db->where(array('staff_id' => $staff_id))->insert("medical_details", $medical_details); 
        return $query;
    }

    public function select_educational_details($staff_id){
        $sqlQuery = $this->db->query("SELECT * FROM educational_details WHERE staff_id = '$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function update_educational_details_language($staff_id, $educational_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->update("educational_details", $educational_details);
        return $query;
    }
    public function insert_educational_details_language($staff_id, $educational_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->insert("educational_details", $educational_details);
        return $query;
    }
    public function select_employment_details($staff_id){
        $sqlQuery = $this->db->query("SELECT * FROM employment_details WHERE staff_id = '$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function update_employment_details($staff_id, $employment_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->update("employment_details", $employment_details);
        return $query;
    }
    public function insert_employment_details($staff_id, $employment_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->insert("employment_details", $employment_details);
        return $query;
    }
    public function select_upload_cv($staff_id){
        $sqlQuery = $this->db->query("SELECT * FROM upload WHERE staff_id = '$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function update_upload_cv($staff_id, $employment_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->update("employment_details", $employment_details);
        return $query;
    }
    public function insert_upload_cv($staff_id, $employment_details) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->insert("upload_cv", $employment_details);
        return $query;
    }
    public function select_leave_data($staff_id){
        $sqlQuery = $this->db->query("SELECT * FROM leave_data WHERE staff_id = '$staff_id'")->result_array();
        return $sqlQuery;
    }
    public function update_leave_data($staff_id, $leave_data) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->update("leave_data", $leave_data);
        return $query;
    }
    public function insert_leave_data($staff_id, $leave_data) {
        $query = $this->db->where(array('staff_id'=>$staff_id))->insert("leave_data", $leave_data);
        return $query;
    }
    public function get_admin_message(){
        $query = $this->db->get('admin_message')->result_array();
        return $query;
    }
}
?>