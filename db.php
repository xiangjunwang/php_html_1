<?php
/**
 ***************************************************************
 *	Main class for database management
 *	class name : ActivateDatabase
 *	Author : XiangJun Wang
 *	Create at : 01/April/2014
 ***************************************************************
 */
class ActivateDatabase {

	/**
	 *	database server host name
	 */
	private $hostName = 'localhost';

	/**
	 *	database server host name
	 */
	private $databaseName = 'activate';

	/**
	 *	database server user name
	 */
	private $userName = 'root';

	/**
	 *	database server user password
	 */
	private $password = '';

	/**
	 *	database server port
	 */
	private $port = '3306';

	/**
	 *	Handler of database
	 */
	private $handler;

	/**
	 *	Name of account table
	 */
	private $userTableName = "users";

	/**
	 *	Name of email table
	 */
	private $emailTableName = "emails";

	/** 
	 *	Selected database
	 */
	private $selected = null;


	/**
	 *	Default constructor
	 */
	public function ActivateDatabase() {
		
	}

	/**
	 *	User defined constructor
	 *	@param : Host name of db server
	 *	@param : User name
	 *	@param : Password
	 */
	// public function ActivateDatabase($hostName, $userName, $password) {
	// 	$this->hostName = $hostName;
	// 	$this->userName = $userName;
	// 	$this->password = $password;
	// }

	/**
	 *	User defined constructor
	 *	@param : Host name of db server
	 *	@param : User name
	 *	@param : Password
	 *	@param : Port
	 *	@return : Handler of database
	 */
	// public function ActivateDatabase($hostName, $userName, $password, $port) {
	// 	$this->hostName = $hostName;
	// 	$this->userName = $userName;
	// 	$this->password = $password;
	// 	$this->port = $port;
	// }

	/**
	 *	Connect to mySQL database
	 */
	public function getConnection() {
		return $this->connectDatabase(
					$this->hostName,
					$this->userName,
					$this->password,
					$this->databaseName);
	}

	/**
	 *	Connect to mySQL database
	 *	@param : Host name of db server
	 *	@param : User name
	 *	@param : Password
	 *	@return : Handler of database
	 */
	public function connectDatabase($hostName, $userName, $password, $databaseName) {
		$this->hostName = $hostName;
		$this->userName = $userName;
		$this->password = $password;

		$this->handler = mysql_connect($hostName, $userName, $password, $databaseName) 
 			or die("Unable to connect to MySQL");

 		return $this->handler;
	}


	/**
	 *	Selecting user table
	 */
	public function selectDatabase() {
		if ( $this->selected )
			return $this->selected;

		if ( !($this->handler) )
			$this->handler = $this->getConnection();

  		return $this->selected;
	}

	/**
	 *	Creating an user
	 *	@param : Email address
	 *	@param : Password
	 *	@param : Full Name
	 *	@return : Result flag
	 */
	public function createUser($email, $password, $name){
		return true;
	}

	/**
	 *	Creating an email address
	 */
	public function addEmail($email){
		$result = false;

		// $result = mysql_query($this->handler, "SELECT email FROM " + $this->emailTableName);

		// //fetch tha data from the database 
		// while ($row = mysql_fetch_array($result)) {
		//    if ( $row{'email'} == $email )
		//    {
		//    		return false;
		//    }
		// }

		$insertQuery = "INSERT INTO `emails`(`email`, `created_date`) VALUES ('";
		$insertQuery .= $email;
		$insertQuery .= "','";
		$insertQuery .=date("Y-m-d");
		$insertQuery .= "')";

		$result = mysql_query($insertQuery);
		//close the connection
		mysql_close($this->handler);

		//return $result;
	}
}
?>