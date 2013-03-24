<?php defined('SYSPATH') or die('No direct script access.');
 
 class Controller_Template2 extends Controller_Template 
 {
 
     public $template = 'demo/template';
	 public $section;
     /**
      * The before() method is called before your controller action.
      * In our template controller we override this method so that we can
      * set up default values. These variables are then available to our
      * controllers if they need to be modified.
      */
     public function before()
     {
         parent::before();
 		 
		if ( ! Auth::instance()->logged_in('login') AND Request::current()->uri() !== '/')
		{
		    $this->request->redirect('/');
		}

 	    if ($this->auto_render)
 	    {
 	    	// Initialize empty values
 	    	$this->template->title   = '';
 	    	$this->template->content = '';
 			
 		$this->template->styles = array();
 		$this->template->scripts = array();
         			
         }
     }
 	
     /**
      * The after() method is called after your controller action.
      * In our template controller we override this method so that we can
      * make any last minute modifications to the template before anything
      * is rendered.
      */
     public function after()
     {
	if ($this->auto_render)
	{
		$styles = array(
			'media/css/screen.css' => 'screen, projection',
			'media/css/print.css' => 'print',
			'media/css/style.css' => 'screen',
		);
 
		$scripts = array(
			//'http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js',
		);
		
		#$this->template->styles = array_merge( $this->template->styles, $styles );
		#$this->template->scripts = array_merge( $this->template->scripts, $scripts );
		if (!isset($this->template->section)) $this->template->section = '';
		View::bind_global('section',$this->template->section);
	}
	parent::after();
     }
 }
