<?php 
class Utility extends MX_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function call_api($method, $url, $data= false){
        $header = array("Content-Type:application/x-www-form-urlencoded", "x-api-key:20173514");
        $curl = curl_init();
        switch ($method) {
            case "POST":
             
                curl_setopt($curl, CURLOPT_POST, true);
                if ($data) {
            
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case "Q_POST":
      
                curl_setopt($curl, CURLOPT_POST, true);
                if ($data) {
                    $data = http_build_query($data);
                   
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                }
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:

                if ($data) {
                    $url = $url . "/$data";
                }

        }

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $result = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            $response = "cURL Error #:" . $err;
        } else {
            $response = $result;
        }
        //print_r($response);

        return $response;
    }

  

   public function create_account($user_information){
    $url = "https://crow.payvantage.com.ng/v1/api/create_account";
    $callApi = $this->call_api('Q_POST', $url, $user_information);
    return json_decode($callApi, true);
}

public function login($user_information){
$url = "https://crow.payvantage.com.ng/v1/api/login";
$callApi = $this->call_api('Q_POST', $url, $user_information);

return json_decode($callApi, true);
}
public function get_single_employee($staff_id){
    $url = "https://crow.payvantage.com.ng/v1/api/single_employee?staff_id=$staff_id";
    $callApi = $this->call_api('GET', $url, ""  );
    return json_decode($callApi, true);
}
public function update_personal_record($staff_id, $data){
    $url = "http://localhost/payvantage_employee/v1/api/update_personal_record/$staff_id";
    $callApi = $this->call_api('Q_POST', $url , $data);
     return json_decode($callApi, true);
    } 
public function update_basic_record($staff_id, $data){
$url = "https://crow.payvantage.com.ng/v1/api/update_basic_record/$staff_id";
$callApi = $this->call_api('Q_POST', $url , $data);
 return json_decode($callApi, true);
} 

public function update_family_record($staff_id, $data){
    
    $url = "https://crow.payvantage.com.ng/v1/api/update_family_record/$staff_id";
    $callApi = $this->call_api('Q_POST', $url , $data);
     return json_decode($callApi, true);
    } 
    public function update_education_record($staff_id, $data){
        $url = "https://crow.payvantage.com.ng/v1/api/update_educational_record/$staff_id";
        $callApi = $this->call_api('Q_POST', $url , $data);
         return json_decode($callApi, true);
        } 

        public function update_employment_record($staff_id, $data){
            $url = "https://crow.payvantage.com.ng/v1/api/update_employment_record/$staff_id";
            $callApi = $this->call_api('Q_POST', $url , $data);
             return json_decode($callApi, true);
            } 
            public function fetch_staff_allowance($staff_id){
                $url = "https://crow.payvantage.com.ng/v1/api/get_allowance?staff_id=$staff_id";
                $callApi = $this->call_api('GET', $url, ""  );
                return json_decode($callApi, true);
            }
            public function fetch_staff_hmo($staff_id){
                $url = "https://crow.payvantage.com.ng/v1/api/get_hmo?staff_id=$staff_id";
                $callApi = $this->call_api('GET', $url, ""  );
                return json_decode($callApi, true);
            }

            public function fetch_news(){
                $url = "https://crow.payvantage.com.ng/v1/api/list_news";
                $callApi = $this->call_api('GET', $url, ""  );
                return json_decode($callApi, true);
                
            }

            public function get_single_news($news_id){
                $url = "https://crow.payvantage.com.ng/v1/api/single_news/$news_id";
                $callApi = $this->call_api('GET', $url, ""  );
                return json_decode($callApi, true);
                
            }
           
            public function fetch_complaint($staff_id){
                $url = "https://crow.payvantage.com.ng/v1/api/fetch_staff_complaint/$staff_id";
                $callApi = $this->call_api('GET', $url, ""  );
                return json_decode($callApi, true);
                
            }
            public function get_single_complaint($complaint_id){
                $url = "https://crow.payvantage.com.ng/v1/api/view_complaint?complaint_id=$complaint_id";
                $callApi = $this->call_api('GET', $url, ""  );
                return json_decode($callApi, true);
            }
            public function reply_complaint($data){
                $url = "https://crow.payvantage.com.ng/v1/api/reply";
              
                $callApi = $this->call_api('Q_POST', $url , $data);
            
                 return json_decode($callApi, true);
                } 
           
                public function reset_password($data){
                    $url = "https://crow.payvantage.com.ng/v1/api/forget_password";
                  
                    $callApi = $this->call_api('Q_POST', $url , $data);
                  
                     return json_decode($callApi, true);
                    } 
                    public function total_message($staff_id){
                        $url = "https://crow.payvantage.com.ng/v1/api/count_new_message/NF6465/$staff_id";
                        $callApi = $this->call_api('GET', $url, ""  );
                        return json_decode($callApi, true);
                        
                    }

                   
                 
        }


?>