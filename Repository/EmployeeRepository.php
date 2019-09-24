<?php

	namespace CorePhp;

	require __DIR__ . '/../Helpers/HelperDb.php';

	/**
	 * Employee Repository class
	 *
	 * @author Rayies Banka <rayiesbanka@gmail.com>
	 */
	class EmployeeRepository 
	{
		/**
		 *
		 */
		public function __construct() 
		{
			$this->dbHelper = HelperDb::getInstance('mysql');
		}

		/**
		 * Method to create Employee 
		 * @access public
		 * @param EmployeeModel $employeeModel
		 * @return 
		 * @throws Exception
		 * @author Rayies Banka <rayiesbanka@gmail.com> 	
		 */
		public function create(EmployeeModel $employeeModel) 
		{
			try {
				$createQuery = 'INSERT INTO employee Values (' . 
					$employeeModel->getEmployeeNumber() . ',' . 
					$employeeModel->getLastName() . ',' . 
					$employeeModel->getFirstName() . ',' . 
					$employeeModel->getExtension() . ',' . 
					$employeeModel->getOfficeCode() . ',' . 
					$employeeModel->getReportsTo() . ',' . 
					$employeeModel->getJobTitle() . ');';

				print_r($createQuery);	  
				return $response;
			} catch (\Exception $ex) {
				throw new \Exception(json_encode(['Message' => $ex->getMessage(), 'File' => $ex->getFile(), 'Line' => $ex->getLine()]));
			}
		}


	}








?>