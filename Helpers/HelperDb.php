<?php
	
	namespace CorePhp;


	/**
     * Helper class to work with database
     * 
	 * @author Rayies Rafiq <rayiesbanka@gmail.com>
	 * @access public
	*/	
	class HelperDb {

		private $dbHost = '';
		private $dbUser = '';
		private $dbPassword = '';
		private $database = '';	
		private $dbHandle = '';

		/**
		 * Constructor to initialize config variables
		*/
		public function __construct(string $dbHost, string $dbUser, string $dbPassword, string $database) 
		{
			$this->dbHost 		= $dbHost;
			$this->dbUser 		= $dbUser;
			$this->dbPassword 	= $dbPassword;
			$this->database 	= $database;
			return $this->openConnection();
		}
		
		/**
	     * This function will open connection to database
	     * 
		 * @author Rayies Rafiq <rayiesbanka@gmail.com>
		 * @access public
		 * @return $conn
		 * @throws Exception
		*/
		public function openConnection() 
		{
			try {
				$this->dbHandle = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword);
				if($this->dbHandle) {
					mysqli_select_db($this->dbHandle, $this->database);
					return $this->dbHandle;
				} else {
					throw new \Exception('Error While trying to connect to DB. ');	
				}
				
			} catch (\Exception $ex) {
				throw new \Exception('Error While trying to connect to DB. ' . $ex->getMessage());
			}
		}	


	}

	



?>
