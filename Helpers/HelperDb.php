<?php
	
	namespace CorePhp;


	/**
     * Helper class to work with database
     * 
	 * @author Rayies Rafiq <rayiesbanka@gmail.com>
	 * @access public
	*/	
	class HelperDb {

		private $dbCredentials = [
			'mysql' 	=> [
				'type'			=> 'mysql',
				'dbHost' 		=> 'localhost',
				'dbUsername' 	=> 'root',
				'dbPassword' 	=> 'root',
				'database' 		=> 'classicmodels'
			],
		];

		private static $instance = [];

		/**
		 * Constructor to initialize config variables
		*/
		private function __construct(string $key) 
		{

			if(!isset($this->dbCredentials[$key])){
				throw new \Exception('Undefined database type: '. $key);
			}

			$dbConfig = $this->dbCredentials[$key];

			$type = $dbConfig['type'];

			
			switch ($type) {
				case 'mysql':

					$dbHost 	= $dbConfig['dbHost'];
					$dbUsername = $dbConfig['dbUsername'];
					$dbPassword = $dbConfig['dbPassword'];
					$database 	=	$dbConfig['database'];
					$this->instance[$key] =  $this->openMySQLConnection($dbHost, $dbUser, $dbPassword, $database);

					break;
				
				default:
					throw new \Exception('Undefined database type: '. $key);
					break;
			}
			
		}
		
		/**
	     * This function will open mysql connection to database
	     * 
		 * @author Rayies Rafiq <rayiesbanka@gmail.com>
		 * @access private
		 * @return $conn
		 * @throws Exception
		*/
		private function openMySQLConnection($dbHost, $dbUser, $dbPassword, $database) 
		{
			try {
				$dbHandle = mysqli_connect($dbHost, $dbUser, $dbPassword);
				if($dbHandle) {
					mysqli_select_db($dbHandle, $database);
					return $dbHandle;
				} else {
					throw new \Exception('Error While trying to connect to DB. ');	
				}
				
			} catch (\Exception $ex) {
				throw new \Exception('Error While trying to connect to DB. ' . $ex->getMessage());
			}
		}	

		/**
		*	This function initiate the object based on key
		* @access public
		* @return \CorePhp\HelperDB
		*/
		public static function getInstance($key) 
		{
			if( !isset( self::$instance[$key] ) ){
				new HelperDb($key);
			}
			return self::$instance[$key];
		}


	}

	



?>
