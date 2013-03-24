<?php
class Item_Model  extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $m = new MongoClient(); 
        $this->item_coll = $m->selectDB("mercadio")->items;

        $this->load->model('Api_Model','api');

    }

    public function upsert($items) { 
    	foreach ($items as $i) {
            $i['stop_time_mongo'] = new MongoDate(strtotime($i['stop_time']));
			$this->item_coll->update(
				array('id' => $i['id']), # condition
				$i, # data
				array("upsert" => true ) # magic
			);    		
    	}
    }

    public function getMostSold($meli_user_id) {
        $data = $this->item_coll->find(
            array('seller.id' => (int)$meli_user_id, 'sold_quantity' => array('$gt' => -1)), # cambiar el -1 a 0
            array('price' => true,'sold_quantity' => true, 'id' =>true)
        );   
        
        $return = array();
        foreach ($data as $d) { 
            $return[$d['id']] = $d['price']  * $d['sold_quantity'];
        }
        arsort($return);
        return $return;
    }

    public function listItemsForSeller($seller_id) { 
        return $this->api->update_items('', $seller_id);
    }

    public function getQuestions($item_id) {
        return $this->api->getItemQuestions($item_id);
    }

    public function getItem($item_id) { 
        return $this->api->getItemQuestions($item_id);
    }
}