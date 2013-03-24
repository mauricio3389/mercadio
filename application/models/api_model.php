<?php

require APPPATH . 'libraries/php-sdk-master/src/meli.php';

class Api_Model extends CI_Model {

    var $conn;
    var $user;

    function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }


    public function build_conn($access_token = null) {
        $conn_data = array(
            'appId' => '7876236325142995',
            'secret' => 'nxJhkhGsO2kXWCBOR8gypk44zqV2eEeh',
        );
        $conn_data['client_id'] = $access_token['value'];
        $this->conn = new Meli($conn_data);
        if ($access_token) {
            $this->conn->setAccessToken($access_token);
        }
        $this->user = $this->conn->initConnect();
    }

    public function get_user_data($user_id) {
        $query = $this->db->query("SELECT json_access_token, meli_user_id FROM cuentas where id = $user_id LIMIT 1");
        $data = $query->row_array();
        $data['access_token'] = json_decode($data['json_access_token'], true);
        return $data;
    }

    public function update_orders($user_id) {
        $user_data = $this->get_user_data($user_id);
        $this->build_conn($user_data['access_token']);
        $data = $this->get_all_pages("/orders/search/recent?seller=$user_data[meli_user_id]");
        $data2 = $this->get_all_pages("/orders/search/archived?seller=$user_data[meli_user_id]");
        return array_merge($data, $data2);
    }

    public function update_collections($user_id) { 
        $user_data = $this->get_user_data($user_id);
        $this->build_conn($user_data['access_token']); 
        $data = $this->get_all_pages("/collections/search?seller_id=$user_data[meli_user_id]");
        return $data;
    }

    public function update_items($user_id = '', $seller_id = '') { 
        if (!$this->conn) $this->build_conn(); 
        if ($user_id) {
            $user_data = $this->get_user_data($user_id);
            $seller_id = $user_data['meli_user_id'];
        }
        $data = $this->get_all_pages("/sites/MLA/search?seller_id=$seller_id");
        return $data;
    }

    public function get_item($item_id) { 
        #$user_data = $this->get_user_data($user_id);
        if (!$this->conn) $this->build_conn(); 
        $data = $this->get("/item/$item_id");
        return $data;
    }

    public function get_item_questions($item_id) { 
        #$user_data = $this->get_user_data($user_id);
        if (!$this->conn) $this->build_conn(); 
        $data = $this->get("/questions/search?item=$item_id");
        return $data;
    }

    # ojo se esta morfando una. 
    private function get_all_pages($request) { 
        $total_data = array();
        $paging = array('total' => 100, 'offset' => 0, 'limit' => 0);
        $i = 0;
        while ($paging['total'] > ($paging['offset'] + $paging['limit'])) { 
            $offset = $paging['offset'] + $paging['limit'];
            if (strpos($request,"?")) { 
                $nu_request = $request . "&offset=$offset";
            } else { 
                $nu_request = $request . "?offset=$offset";
            }
            #echo '<pre>';print_r($nu_request);
            $data =  $this->conn->getWithAccessToken($nu_request);
            #echo '<pre>';print_r($data);die();
            #echo $nu_request;

            $total_data = array_merge($total_data, $data['json']['results']);
            $paging  =  $data['json']['paging'];
            #echo '<pre>';print_r($paging);
            $i++;
            if ($i > 50) {
                # sanity check
                return $total_data;
            }
        }
        return $total_data;
    }
}
