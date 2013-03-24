<?php


class Api extends CI_Controller {
	function __construct() {
        // Call the Model constructor
        parent::__construct();
        $this->load->model('Api_Model','api');
        $this->load->model('Comprador_Model','comprador');
        $this->load->model('Order_Model','order');
        $this->load->model('Collection_Model','collection');
        $this->load->model('Item_Model','item');
    }
    
	public function update_orders($user_id) { 
		$orders = $this->api->update_orders($user_id);
		$buyers = array();
		#echo '<pre>';print_r($orders);die();
		foreach($orders as $o) { 
			$buyers[] = $o['buyer'];
		}

		#print_r($buyers);
		$this->comprador->upsert($buyers);
		$this->order->upsert($orders);
	}

	public function update_items($user_id) { 
		$items = $this->api->update_items($user_id);
		#echo '<pre>';print_r($items);die();
		$this->item->upsert($items);
	}

	public function update_collections	($user_id) { 
		$collections = $this->api->update_collections($user_id);
		$this->collection->upsert($collections);
	}

	public function get_all_user() { 
		# necesario para el script de update!!!!
	}

	public function getMostSold($user_id) { 
		$user_data = $this->api->get_user_data($user_id);
		$this->item->getMostSold($user_data['meli_user_id']);
	}

	public function test_get_orders() { 
		print_r($this->order->orderCount(27933181));
	}

	public function test_get_collections() { 
		print_r($this->collection->collectionCount(27933181));
	}
}
