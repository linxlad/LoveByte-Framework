<?php 

class invite extends Eloquent
{


	public static $query = '';
	
	
	 /**
     * Get a a random key for email confirmation and html email.
 	 *
 	 * @param  integer  $length
 	 * @return string
 	 */	
	public static function createRandomKey($length)
	{
		/*$keyset  = "abcdefghijklmABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$randkey = "";
		for ($i=0; $i<$amount; $i++)
		$randkey .= substr($keyset, rand(0, strlen($keyset)-1), 1);
		return $randkey;*/
		
		$random= "";
  		srand((double)microtime()*1000000);
  		$char_list = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 		$char_list .= "abcdefghijklmnopqrstuvwxyz";
  		$char_list .= "1234567890";
  		// Add the special characters to $char_list if needed

  		for($i = 0; $i < $length; $i++)  
  		{    
     		$random .= substr($char_list,(rand()%(strlen($char_list))), 1);  
  		}  
  		return $random;	
	}
	
	
	/**
     * Connect to the database and select table.
 	 *
 	 * @param  
 	 * @return string query
 	 */	
	public static function dbconnect()
	{

		$query = DB::table('personalinfo');
		return $query;

	}
	 
	/**
     * Inserts data into the specified table.
 	 *
 	 * @param  string  $table
	 * @param  array  $array
 	 * @return string query
 	 */	
	public static function dbinsert($table, $array)
	{

		$id = DB::table($table)->insert_get_id($array);
		return $id;

	}
	
	
	/**
     * Fetches data from the specified table.
 	 *
 	 * @param  string  $table
	 * @param  string  $column
	 * @param  string  $where
	 * @param  string  $value
 	 * @return string query
 	 */	
	public static function dbfetchOne($table, $column, $where, $value)
	{
		$item = DB::table($table)->where($column ,"=", $where)->only($value);
		return $item;	
	}
	
		public static function dbfetchMult($table, $column, $value)
	{
		$items = DB::table($table)->where($column, '=', $value)->first();
		return $items;	
	}
	
		/**
     * Deletes data from the specified table.
 	 *
 	 * @param  string  $table
	 * @param  string  $column
	 * @param  string  $where
 	 * @return string query
 	 */	
	public static function dbdelete($table, $column, $where)
	{
		
		$affected = DB::table($table)->where($column, '=', $where)->delete();
	
	}


	/**
	 * Serialize the model's field data to the session.
	 */
	

}