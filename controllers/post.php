<?php

class Post_Controller extends Base_Controller {


	//public $restful = true; 
	
	public $table = '';
	
	public function action_viewAll()
	{		
            return View::make('posts.allposts')->with('username', "Sammy");
	}
        
        public function action_pullPost()
	{
            
            //Parse url for query
            $url = (!empty($_SERVER['HTTPS'])) ? 
		"https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
            
            //Assign url array to vriable
	    $strQuery = parse_url($url);
            
            //Assign url query to variable
            $_string = $strQuery["query"];
            
            //Replace "_" with " "
            $_string = str_replace("_", " ", $_string);
            
            //Replace "-x3g" with "?"
            $_string = str_replace("-x3g", "?", $_string);
              
            //Echo post title for testing
            echo 'Post about <b>'. $_string. '</b>';
	}	

}