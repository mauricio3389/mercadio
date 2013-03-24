<?php
class Order_Model  extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $m = new MongoClient(); 
        $this->order_coll = $m->selectDB("mercadio")->orders;
    }
/*
confirmed	Initial state of an order, and it has no payment yet.
payment_required	The order needs a payment to become confirmed and show users information.
payment_in_process	There is a payment related with the order, but it has not accredited yet.
paid	The order has a related payment and it has been accredited.
cancelled	The order has not completed by some reason.
*/
    public function upsert($orders) { 
    	foreach ($orders as $o) { 
            $o['total_units'] = 0;
            $o['date_created_mongo'] = new MongoDate(strtotime($o['date_created']));
            $o['date_closed_mongo'] = new MongoDate(strtotime($o['date_closed']));
            foreach ($o['order_items'] as $item) { 
                $o['total_units']+= $item['quantity'];
            }
			$this->order_coll->update(
				array('id' => $o['id']), # condition
				$o, # data
				array("upsert" => true ) # magic
			); 
    	}
    }

    public function orderCount($seller_id, $date = '') { 
        $ops = array(
            array(
                '$match' => array(
                    'seller.id' => $seller_id
                ),
                '$group' => array(
                    "_id" => null, 
                    'sum' => array('$sum' => '$total_amount'),
                    'count' => array('$sum' => 1),
                ),
                
            ),
        );
        $results = $this->order_coll->aggregate($ops);
        return $results['result'][0];
    }
}
/*
Sacar el total de ventas
db.orders.aggregate([{ $group: { _id: null,total:{$sum: "$total_amount"}}}])
*/