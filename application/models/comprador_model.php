<?php
class Comprador_Model  extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $m = new MongoClient(); 
        $this->buyer_coll = $m->selectDB("mercadio")->buyers;
    }
/*
confirmed	Initial state of an order, and it has no payment yet.
payment_required	The order needs a payment to become confirmed and show users information.
payment_in_process	There is a payment related with the order, but it has not accredited yet.
paid	The order has a related payment and it has been accredited.
cancelled	The order has not completed by some reason.
*/
    public function upsert($compradores) { 
    	foreach ($compradores as $c) { 
    		$c['meli_user_id'] = $c['id'];
			$this->buyer_coll->update(
				array('meli_user_id' => $c['id']), # condition
				$c, # data
				array("upsert" => true ) # magic
			);    		
    	}
    }

}