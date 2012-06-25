<?php

class User_Controller extends Base_Controller {


	//public $restful = true; 
	
	public $table = '';
	
	public function action_accountSettings()
	{	
            echo 'User Settings Page';
            //return View::make('posts.allposts')->with('username', "Sammy");
	}
        
        
        public function action_inbox()
	{	
            echo 'User message inbox';
            //return View::make('posts.allposts')->with('username', "Sammy");
	}
        
        
        public function action_notifications()
	{	
            echo 'User notifications';
            //return View::make('posts.allposts')->with('username', "Sammy");
	}
	

}