<?php

/**
 * Handle the RedbeanORM connection.
 * 
 * @author Dayle Rees <me@daylerees.com>
 * @copyright 2012 Dayle Rees <me@daylerees.com>
 * @license MIT License <http://www.opensource.org/licenses/mit>
 */
class Connector
{
	/**
	 * Create a new connection from the database.php cofig.
	 * 
	 * @return void
	 */
	public static function setup()
	{
		// get all connections
		$connections = Config::get('database.connections');

		// get the current connection
		$default = Config::get('database.default');

		// form the DSN from the current connection
		$dsn = $connections[$default]['driver'].':host='.
			   $connections[$default]['host']. ';dbname='.
			   $connections[$default]['database'];

		// auth details
		$user 		= $connections[$default]['username'];
		$pass 	 	= $connections[$default]['password'];

		R::setup($dsn,$user, $pass);

		//print_r($connections[$default]);
	}
}