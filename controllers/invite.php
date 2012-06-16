<?php

class Invite_Controller extends Base_Controller {


	//public $restful = true; 
	
	public $table = '';
	
	public function action_invite()
	{		
		$table = 'invite_temp';
		
		$input = Input::get();
		
		//validatation rules
		$rules = array(
    	'username'  => 'required|unique:invite_temp,username|min:3|max:12|alpha',
    	'email'   => 'required|email|unique:invite_temp,username',
		'language'	=>	'required'
		);
		
		$v = Validator::make($input, $rules);
		
		if( $v->passes() )
		{
			//Passed validation connect to database
			if(invite::dbconnect())
			{	
				//insert invite into temp table
				if($id = invite::dbinsert($table, $input))
				{
					//returned if of insert
					$columnValue = $id;
					
					//fetch up to date invite information
					$emailInfo = invite::dbfetchMult($table, 'id', $columnValue);
					
					
					//send confirmation email		
					mailer::sendValidEmail($emailInfo->username, $emailInfo->tempkey, $emailInfo->email);
					
					//Render new invite with success message			"Success, check your email"
					return View::make('invite.index')->with('validation', "Success, check your email");
										
				}			
				
			}
		}
		else
		{	
			//Failed  validation, return inputs and errors
			return Redirect::back()->with_input()->with_errors($v);
		}
		
	}
	
	public function action_confirminvite()
	{		
	
		$table = 'invite_temp';
		$table2 = 'invite';
	
		$url = (!empty($_SERVER['HTTPS'])) ? 
		"https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

		$strQuery = parse_url($url);
		
		//Catch empty confirm query
		if(empty($strQuery["query"]))
		{	
			//If query empty redirect to 404 page
			return Response::error('404');	
		}
		else
		{
			//Else parse into new variable
			$locateUser = $strQuery["query"];
		}
			
		
		//TEST OUTPUT Render new invite with success message			"Success, check your email"
		//return View::make('invite.index')->with('validation', $locateUser);
		
		if(invite::dbconnect())
		{	
					
				//fetch up to date invite information
				try
				{	
					//Fetch data from table using url key
					$confirmInfo = invite::dbfetchMult($table, 'tempKey', $locateUser);	
										
					if($confirmInfo == "")
					{
						//If query is not in the table
						return Response::error('404');
					}
					else
					{										
						$date = date("m/d/y",time());
					
						//Prepare data for inserting invite table
						$dbValues = array(
    					'username'  => $confirmInfo->username,
    					'email'   => $confirmInfo->email,
						'language'	=>	$confirmInfo->language,
						'invitedate' => $date,
						'emailkey' => invite::createRandomKey(24)
						);
					
							if(invite::dbinsert($table2, $dbValues))
							{
								//Delete in invite_temp
								invite::dbdelete($table, 'id', $confirmInfo->id);
					
								//send confirmation email		
								mailer::sendConfirmEmail($confirmInfo->username, $dbValues['emailkey'], $confirmInfo->email);
					
								//Render new invite with success message			"Invite reserved! Check you your email"
								return View::make('invite.index')->with('validation', "Reserved, Check your email");
							}
					}
					
				}
				catch(exception $e)
				{
					return View::make('invite.index')->with('validation', 'Mailer error: ' . $e->getMessage());
				}
										
		}			
		
	}
	
		public function action_htmlEmail()
		{		
		
		$table = 'invite';
	
		$url = (!empty($_SERVER['HTTPS'])) ? 
		"https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'] : "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

		$strQuery = parse_url($url);
		
		//Catch empty confirm query
		if(empty($strQuery["query"]))
		{	
			//If query empty redirect to 404 page
			return Response::error('404');	
		}
		else
		{
			//Else parse into new variable
			$locateUser = $strQuery["query"];
		}
			
		
		//TEST OUTPUT Render new invite with success message			"Success, check your email"
		//return View::make('invite.index')->with('validation', $locateUser);
		
		if(invite::dbconnect())
		{	
					
				//fetch up to date invite information
				try
				{	
					//Fetch data from table using url key
					$confirmInfo = invite::dbfetchMult($table, 'emailkey', $locateUser);	
										
					if($confirmInfo == "")
					{
						//If query is not in the table
						return Response::error('404');
					}
					else
					{										
						
						//Get ther username ready
    					$username = $confirmInfo->username;
					
						//Render new invite with success message			"Invite reserved! Check you your email"
						return View::make('home.email')->with('username', $username);

					}
					
				}
				catch(exception $e)
				{
					return View::make('invite.index')->with('validation', 'Mailer error: ' . $e->getMessage());
				}
										
		}			
		
	}

}