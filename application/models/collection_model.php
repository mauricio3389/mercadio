<?php
class Collection_Model  extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $m = new MongoClient(); 
        $this->collection_coll = $m->selectDB("mercadio")->collections;
    }

    public function upsert($collections) { 
    	foreach ($collections as $c) { 
            $data = $c['collection'];
            $data['date_approved_mongo'] = new MongoDate(strtotime($data['date_approved']));
			$this->collection_coll->update(
				array('id' => $data['id']), # condition
				$data, # data
				array("upsert" => true ) # magic
			);    		
    	}
    }

    public function collectionCount($seller_id, $date = '') { 
        #print(new MongoDate(strtotime("2013-03-01")));
        #die();
        $ops = array(
            array(
                '$match' => array(
                    'collector_id' => $seller_id,
                    'date_approved_mongo' => array(
                        '$gt' => new MongoDate(strtotime("2014-04-01"))
                    )
                ),
                '$group' => array(
                    "_id" => null, 
                    'sum' => array('$sum' => '$total_paid_amount'),
                    'count' => array('$sum' => 1),
                ),
                
            ),
        );
        $results = $this->collection_coll->aggregate($ops);
        return $results['result'][0];
    }
}